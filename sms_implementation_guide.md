# SMS Implementation Guide

This document contains the complete SMS sending implementation including OTP functionality. The system uses a **Bull queue with Redis** for rate-limited, reliable SMS delivery.

---

## Architecture Overview

```
┌─────────────────┐     ┌─────────────────┐     ┌─────────────────┐
│   Controller    │────▶│   SMS Queue     │────▶│   SMS Provider  │
│  (Express API)  │     │  (Bull + Redis) │     │  (HTTP GET API) │
└─────────────────┘     └─────────────────┘     └─────────────────┘
```

**Key Features:**
- Queue-based processing with Bull.js
- Rate limiting: max 5 SMS per 10 seconds
- Automatic retry with exponential backoff (3 attempts)
- Redis for job storage and queue management

---

## 1. SMS Sender Service

This is the core SMS service that queues and sends SMS messages.

**File:** `server/services/smsSender.ts`

```typescript
import Queue from "bull";
import axios from "axios";
import qs from "qs";

// Queue name varies by environment to prevent cross-env conflicts
const queueName = process.env.NODE_ENV === "production" 
  ? "sms-queue" 
  : `sms-queue-${process.env.NODE_ENV || 'dev'}`;

const smsQueue = new Queue(queueName, {
  redis: { host: "127.0.0.1", port: 6379 },
  limiter: { max: 5, duration: 10000 } // at most 5 sms per 10 seconds
});

// ---- Worker (Processes SMS Jobs) ----
smsQueue.process(async (job) => {
  const { mobile, message } = job.data;

  // SMS API Configuration
  const apiUrl = "http://www.universalsmsadvertising.com/universalsmsapi.php";
  const username = "YOUR_USERNAME";      // SMS API username
  const password = "YOUR_PASSWORD";      // SMS API password
  const senderId = "YOUR_SENDER_ID";     // e.g., "TMUniv"
  const type = "F";                      // F = Flash SMS, T = Text SMS

  const params = {
    user_name: username,
    user_password: password,
    sender_id: senderId,
    type,
    mobile,
    text: message,
  };

  try {
    const response = await axios.get(`${apiUrl}?${qs.stringify(params)}`);
    console.log("SMS sent:", response.data);
  } catch (error: any) {
    console.error("Error sending SMS:", error.message);
    throw error; // job will retry depending on queue config
  }
});

/**
 * Queue an SMS for sending
 * @param mobile - Phone number with country code (e.g., "919876543210")
 * @param message - SMS message content
 */
export async function sendSMS(mobile: string, message: string) {
  await smsQueue.add(
    { mobile, message },
    {
      attempts: 3,                                    // Retry 3 times on failure
      backoff: { type: 'exponential', delay: 5000 }, // 5s, then ~10s, then ~20s
      removeOnComplete: true,                        // Free Redis storage on success
      removeOnFail: false                            // Keep failed jobs for debugging
    }
  );
}

export default smsQueue;
```

---

## 2. OTP Service

Handles OTP generation, storage, and verification with SMS/Email delivery.

**File:** `server/services/otpService.ts`

```typescript
import crypto from "crypto";
import bcrypt from "bcryptjs";
import { sendSMS } from "./smsSender";

const OTP_EXPIRY_MINUTES = 15;

export class OtpService {
  /**
   * Generate a 6-digit OTP code
   */
  generateOtpCode(): string {
    return Math.floor(100000 + Math.random() * 900000).toString();
  }

  /**
   * Generate and send OTP to user
   * @param contact - Phone number or email
   * @param user - User object
   * @param ipAddress - Optional IP for logging
   * @param userAgent - Optional user agent for logging
   */
  async generateOtp(
    contact: string, 
    user: any, 
    ipAddress?: string, 
    userAgent?: string
  ): Promise<{ success: boolean; message: string }> {
    try {
      // Determine if contact is email or phone
      const contactType = contact.includes('@') ? 'email' : 'phone';

      // Generate OTP
      const otpCode = this.generateOtpCode();
      const otpHash = await bcrypt.hash(otpCode, 10);

      // Set expiry time
      const expiresAt = new Date();
      expiresAt.setMinutes(expiresAt.getMinutes() + OTP_EXPIRY_MINUTES);

      // Store OTP in database (implement your own storage)
      await this.storeOTP({
        contact,
        contactType,
        otpHash,
        expiresAt,
        isUsed: false,
        attempts: 0
      });

      // Log OTP generation (for audit trail)
      await this.logOTPAttempt({
        contact,
        contactType,
        action: 'requested',
        ipAddress: ipAddress ?? null,
        userAgent: userAgent ?? null,
        success: true
      });

      // For development, log the OTP (REMOVE IN PRODUCTION!)
      console.log(`OTP for ${contact}: ${otpCode}`);

      // Send OTP via SMS or Email
      if (contactType === 'phone') {
        // SMS Template for OTP
        const message = `Dear Sir, OTP to verify ${otpCode}.Thanks! TMU, Moradabad.`;
        sendSMS(contact, message);
      } else {
        // Send via email (implement your own email sender)
        // sendOtpEmail(contact, otpCode);
      }

      return {
        success: true,
        message: `OTP sent to ${contactType}`
      };
    } catch (error) {
      console.error("Generate OTP error:", error);
      return {
        success: false,
        message: "Failed to generate OTP"
      };
    }
  }

  /**
   * Verify OTP code
   * @param contact - Phone number or email
   * @param otpCode - 6-digit OTP code to verify
   * @param ipAddress - Optional IP for logging
   * @param userAgent - Optional user agent for logging
   */
  async verifyOtp(
    contact: string, 
    otpCode: string, 
    ipAddress?: string, 
    userAgent?: string
  ): Promise<{ success: boolean; message: string }> {
    try {
      const contactType = contact.includes('@') ? 'email' : 'phone';

      // Get latest unused OTP from database
      const otpRecord = await this.getActiveOTP(contact, contactType);

      if (!otpRecord) {
        await this.logOTPAttempt({
          contact,
          contactType,
          action: 'verification_failed',
          ipAddress: ipAddress ?? null,
          userAgent: userAgent ?? null,
          success: false,
          errorMessage: 'No OTP found'
        });

        return {
          success: false,
          message: "No valid OTP found. Please request a new one."
        };
      }

      // Check if OTP is already used
      if (otpRecord.isUsed) {
        return {
          success: false,
          message: "OTP has already been used. Please request a new one."
        };
      }

      // Verify OTP hash
      const isValid = await bcrypt.compare(otpCode, otpRecord.otpHash);

      if (!isValid) {
        await this.logOTPAttempt({
          contact,
          contactType,
          action: 'verification_failed',
          ipAddress: ipAddress ?? null,
          userAgent: userAgent ?? null,
          success: false,
          errorMessage: 'Invalid OTP'
        });

        return {
          success: false,
          message: "Invalid OTP"
        };
      }

      // Mark OTP as used
      await this.markOTPUsed(otpRecord.id);

      // Log successful verification
      await this.logOTPAttempt({
        contact,
        contactType,
        action: 'verified',
        ipAddress: ipAddress ?? null,
        userAgent: userAgent ?? null,
        success: true
      });

      return {
        success: true,
        message: "OTP verified successfully"
      };
    } catch (error) {
      console.error("Verify OTP error:", error);
      return {
        success: false,
        message: "Failed to verify OTP"
      };
    }
  }

  // Implement these methods based on your database
  private async storeOTP(data: any): Promise<void> {
    // Store in your database
  }

  private async getActiveOTP(contact: string, contactType: string): Promise<any> {
    // Fetch from database: WHERE contact = ? AND contactType = ? AND isUsed = false
    // ORDER BY createdAt DESC LIMIT 1
  }

  private async markOTPUsed(id: string): Promise<void> {
    // UPDATE otp_verifications SET isUsed = true WHERE id = ?
  }

  private async logOTPAttempt(data: any): Promise<void> {
    // INSERT into otp_logs table
  }
}

export const otpService = new OtpService();
```

---

## 3. SMS Controller (REST API Endpoint)

Exposes an API endpoint to send SMS programmatically.

**File:** `server/controllers/sms.controller.ts`

```typescript
import { Request, Response } from "express";
import { sendSMS } from "../services/smsSender";

/**
 * Send SMS to a phone number with a custom message
 * 
 * POST /api/admin/sms/send
 * 
 * Request Body:
 * - phoneNumber: string (required) - Phone number with country code (e.g., "919876543210")
 * - message: string (required) - The SMS message to send
 * 
 * Example body:
 * {
 *   "phoneNumber": "919876543210",
 *   "message": "Dear Sir, OTP to verify 123456.Thanks! TMU, Moradabad."
 * }
 */
export async function sendSmsToPhone(req: Request, res: Response) {
    try {
        const { phoneNumber, message } = req.body;

        // Validate required fields
        if (!phoneNumber) {
            return res.status(400).json({
                ok: false,
                message: "Missing required field: phoneNumber",
            });
        }

        if (!message) {
            return res.status(400).json({
                ok: false,
                message: "Missing required field: message",
            });
        }

        // Validate phone number format (basic validation)
        const cleanedPhone = phoneNumber.replace(/\D/g, ""); // Remove non-digits
        if (cleanedPhone.length < 10 || cleanedPhone.length > 15) {
            return res.status(400).json({
                ok: false,
                message: "Invalid phone number format. Expected 10-15 digits.",
            });
        }

        // Validate message length
        if (message.length > 1000) {
            return res.status(400).json({
                ok: false,
                message: "Message too long. Maximum 1000 characters allowed.",
            });
        }

        // Send SMS via the queue
        await sendSMS(cleanedPhone, message);

        return res.json({
            ok: true,
            message: "SMS queued successfully",
            data: {
                phoneNumber: cleanedPhone,
                messageLength: message.length,
            },
        });
    } catch (error: any) {
        console.error("Error sending SMS:", error);
        return res.status(500).json({
            ok: false,
            message: error.message || "Failed to send SMS",
        });
    }
}
```

---

## 4. Database Schema (PostgreSQL/Prisma)

### OTP Verification Table

```sql
CREATE TABLE otp_verifications (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    contact VARCHAR(255) NOT NULL,           -- phone or email
    contact_type VARCHAR(10) NOT NULL,       -- 'phone' or 'email'
    otp_hash VARCHAR(255) NOT NULL,          -- bcrypt hashed OTP
    expires_at TIMESTAMP NOT NULL,           -- expiry time
    is_used BOOLEAN DEFAULT FALSE,           -- whether OTP was used
    attempts INT DEFAULT 0,                  -- verification attempts
    created_at TIMESTAMP DEFAULT NOW()
);
```

### OTP Logs Table (Audit Trail)

```sql
CREATE TABLE otp_logs (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    contact VARCHAR(255) NOT NULL,
    contact_type VARCHAR(10) NOT NULL,
    action VARCHAR(50) NOT NULL,             -- 'requested', 'verified', 'verification_failed'
    ip_address VARCHAR(45),
    user_agent TEXT,
    success BOOLEAN DEFAULT FALSE,
    error_message TEXT,
    created_at TIMESTAMP DEFAULT NOW()
);
```

---

## 5. SMS Templates

### OTP Template
```
Dear Sir, OTP to verify {OTP_CODE}.Thanks! TMU, Moradabad.
```

**Example:**
```
Dear Sir, OTP to verify 123456.Thanks! TMU, Moradabad.
```

### Guest Booking Confirmation Template
```
Guest Booking Confirmed! Name: {NAME}, Meal: {MEAL_TYPE}, Date: {DATE}, QR: {QR_ID}. Please show this at the mess counter. - TMU
```

### Ticket Status Update Template
```
Your complaint #{TICKET_NUMBER} status has been updated to: {NEW_STATUS}. {REMARKS} - TMU Maintenance
```

---

## 6. Dependencies

Add these to your `package.json`:

```json
{
  "dependencies": {
    "axios": "^1.6.0",
    "bcryptjs": "^2.4.3",
    "bull": "^4.12.0",
    "qs": "^6.11.0"
  },
  "devDependencies": {
    "@types/bcryptjs": "^2.4.6",
    "@types/bull": "^4.10.0",
    "@types/qs": "^6.9.11"
  }
}
```

---

## 7. Environment Variables

```env
# SMS API Configuration
SMS_API_URL=http://www.universalsmsadvertising.com/universalsmsapi.php
SMS_API_USERNAME=your_username
SMS_API_PASSWORD=your_password
SMS_SENDER_ID=YourSenderId

# Redis Configuration (for Bull queue)
REDIS_HOST=127.0.0.1
REDIS_PORT=6379

# OTP Configuration
OTP_EXPIRY_MINUTES=15

# Node Environment
NODE_ENV=development
```

---

## 8. SMS Provider API Specification

The current implementation uses **Universal SMS Advertising** API.

### Request Format
**Method:** GET  
**URL:** `http://www.universalsmsadvertising.com/universalsmsapi.php`

### Query Parameters

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `user_name` | string | Yes | API account username |
| `user_password` | string | Yes | API account password |
| `sender_id` | string | Yes | Registered sender ID (e.g., "TMUniv") |
| `type` | string | Yes | SMS type: "F" (Flash) or "T" (Text) |
| `mobile` | string | Yes | Phone number with country code (e.g., "919876543210") |
| `text` | string | Yes | SMS message content |

### Example Request
```
GET http://www.universalsmsadvertising.com/universalsmsapi.php?user_name=9837016352&user_password=9837016352&sender_id=TMUniv&type=F&mobile=919876543210&text=Dear%20Sir%2C%20OTP%20to%20verify%20123456.Thanks!%20TMU%2C%20Moradabad.
```

---

## 9. Usage Examples

### Send OTP to Phone
```typescript
import { otpService } from './services/otpService';

// In your login controller
const result = await otpService.generateOtp(
  '919876543210',  // phone number
  user,            // user object
  req.ip,          // IP address
  req.get('User-Agent')  // user agent
);

if (result.success) {
  res.json({ message: 'OTP sent successfully' });
} else {
  res.status(400).json({ message: result.message });
}
```

### Verify OTP
```typescript
const result = await otpService.verifyOtp(
  '919876543210',  // phone number
  '123456',        // OTP code from user
  req.ip,
  req.get('User-Agent')
);

if (result.success) {
  // Generate JWT token and login user
} else {
  res.status(400).json({ message: result.message });
}
```

### Send Custom SMS
```typescript
import { sendSMS } from './services/smsSender';

await sendSMS('919876543210', 'Your booking is confirmed. QR: ABC123');
```

---

## 10. Notes for Implementation

1. **Redis Required:** Bull queue requires Redis. Make sure Redis is running on the configured host/port.

2. **Rate Limiting:** The current config allows max 5 SMS per 10 seconds. Adjust `limiter` config as needed.

3. **Phone Format:** Phone numbers should include country code (e.g., "91" for India) without the "+" prefix.

4. **Security:** 
   - Never log OTP codes in production
   - Always hash OTPs before storing
   - Implement rate limiting on OTP requests to prevent abuse

5. **Monitoring:** Check Redis for failed jobs using `smsQueue.getFailed()` if SMS delivery issues occur.

---

*Generated from MessManager codebase on 2026-02-02*
