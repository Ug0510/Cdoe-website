<?php

namespace App\Http\Controllers;

use App\Models\OtpVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OtpController extends Controller
{
    // SMS API Configuration
    private const SMS_API_URL = 'https://www.universalsmsadvertising.com/universalsmsapi.php';
    private const SMS_USERNAME = '9837016352';
    private const SMS_PASSWORD = '9837016352';
    private const SMS_SENDER_ID = 'TMUniv';
    private const SMS_TYPE = 'T'; // Changed to T (Text SMS) for better reliability

    // OTP Configuration
    private const OTP_EXPIRY_MINUTES = 15;
    private const MAX_OTP_ATTEMPTS = 5;

    /**
     * Generate and send OTP to mobile number
     * 
     * POST /api/otp/send
     * Body: { name: string, mobile: string }
     */
    public function sendOtp(Request $request)
    {
        try {
            // Validate request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|digits:10|regex:/^[6-9]\d{9}$/',
            ]);

            $name = $validated['name'];
            $mobile = '91' . $validated['mobile']; // Add country code

            // Check rate limiting - max 5 OTPs per hour for same number
            $recentOtps = OtpVerification::where('mobile', $mobile)
                ->where('created_at', '>', now()->subHour())
                ->count();

            if ($recentOtps >= self::MAX_OTP_ATTEMPTS) {
                return response()->json([
                    'success' => false,
                    'message' => 'Too many OTP requests. Please try again after 1 hour.'
                ], 429);
            }

            // Generate 6-digit OTP
            $otpCode = str_pad(random_int(100000, 999999), 6, '0', STR_PAD_LEFT);

            // Hash OTP for storage
            $otpHash = Hash::make($otpCode);

            // Set expiry time
            $expiresAt = now()->addMinutes(self::OTP_EXPIRY_MINUTES);

            // Mark any existing unused OTPs as used
            OtpVerification::where('mobile', $mobile)
                ->where('is_used', false)
                ->update(['is_used' => true]);

            // Store new OTP
            OtpVerification::create([
                'name' => $name,
                'mobile' => $mobile,
                'otp_hash' => $otpHash,
                'expires_at' => $expiresAt,
                'is_used' => false,
                'attempts' => 0,
            ]);

            // Send SMS
            $message = "Dear Sir, OTP to verify {$otpCode}.Thanks! TMU, Moradabad.";
            $smsResult = $this->sendSms($mobile, $message);

            // Log for debugging
            Log::info("OTP Request for {$mobile}");

            if ($smsResult['success']) {
                return response()->json([
                    'success' => true,
                    'message' => 'OTP sent successfully',
                    'expires_in' => self::OTP_EXPIRY_MINUTES * 60, // seconds
                ]);
            } else {
                Log::error("Failed to send SMS to {$mobile}. Error: " . ($smsResult['error'] ?? 'Unknown Error'));
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send OTP. Please try again.'
                ], 500);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->validator->errors()->first()
            ], 422);
        } catch (\Exception $e) {
            Log::error('OTP Send Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    /**
     * Verify OTP code
     * 
     * POST /api/otp/verify
     * Body: { mobile: string, otp: string }
     */
    public function verifyOtp(Request $request)
    {
        try {
            // Validate request
            $validated = $request->validate([
                'mobile' => 'required|string|digits:10|regex:/^[6-9]\d{9}$/',
                'otp' => 'required|string|digits:6',
            ]);

            $mobile = '91' . $validated['mobile'];
            $otpCode = $validated['otp'];

            // Get the latest active OTP for this mobile
            $otpRecord = OtpVerification::where('mobile', $mobile)
                ->where('is_used', false)
                ->where('expires_at', '>', now())
                ->orderBy('created_at', 'desc')
                ->first();

            if (!$otpRecord) {
                return response()->json([
                    'success' => false,
                    'message' => 'No valid OTP found. Please request a new one.'
                ], 400);
            }

            // Check if max attempts exceeded
            if ($otpRecord->attempts >= 3) {
                $otpRecord->update(['is_used' => true]);
                return response()->json([
                    'success' => false,
                    'message' => 'Too many failed attempts. Please request a new OTP.'
                ], 400);
            }

            // Verify OTP
            if (Hash::check($otpCode, $otpRecord->otp_hash)) {
                // Mark OTP as used
                $otpRecord->update(['is_used' => true]);

                // Sync to Google Sheet (Lead Database)
                $this->sendToGoogleSheet($otpRecord->name, $otpRecord->mobile);

                return response()->json([
                    'success' => true,
                    'message' => 'OTP verified successfully',
                    'name' => $otpRecord->name,
                ]);
            } else {
                // Increment attempts
                $otpRecord->increment('attempts');

                $remainingAttempts = 3 - $otpRecord->attempts;
                return response()->json([
                    'success' => false,
                    'message' => "Invalid OTP. {$remainingAttempts} attempts remaining."
                ], 400);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->validator->errors()->first()
            ], 422);
        } catch (\Exception $e) {
            Log::error('OTP Verify Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    /**
     * Send SMS via Universal SMS API
     */
    private function sendSms(string $mobile, string $message): array
    {
        try {
            $params = [
                'user_name' => self::SMS_USERNAME,
                'user_password' => self::SMS_PASSWORD,
                'sender_id' => self::SMS_SENDER_ID,
                'type' => self::SMS_TYPE,
                'mobile' => $mobile,
                'text' => $message,
            ];

            // Enhanced HTTP call for better compatibility on live servers
            $response = Http::timeout(35)
                ->withoutVerifying() // Often needed on dedicated servers with custom SSL configs
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
                ])
                ->get(self::SMS_API_URL, $params);

            $body = $response->body();
            Log::info('SMS API Response for ' . $mobile . ': ' . $body);

            // Check if SMS was sent successfully
            if ($response->successful()) {
                // Some APIs return a success message in the body even with 200 OK
                return ['success' => true, 'response' => $body];
            } else {
                return ['success' => false, 'error' => 'HTTP Status: ' . $response->status() . ' Body: ' . $body];
            }

        } catch (\Exception $e) {
            Log::error('SMS Send Exception for ' . $mobile . ': ' . $e->getMessage());
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
    /**
     * Send lead data to Google Sheet Webhook
     */
    private function sendToGoogleSheet(string $name, string $mobile): void
    {
        try {
            $webhookUrl = config('services.google_sheet.webhook_url');

            if (!$webhookUrl) {
                Log::warning('Google Sheet Webhook URL not configured in services.php or .env');
                return;
            }

            $mobileNumber = str_replace(['+', '91'], '', $mobile);

            // Using followRedirects() explicitly and adding headers for better compatibility
            $response = Http::timeout(15)
                ->withoutVerifying() // Only for local testing if SSL verify fails
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ])
                ->post($webhookUrl, [
                    'name' => $name,
                    'mobile' => $mobileNumber,
                    'verified_at' => now()->toDateTimeString(),
                ]);

            if ($response->successful() || $response->status() === 302) {
                Log::info("Lead successfully synced to Google Sheet: {$name} ({$mobileNumber})");
            } else {
                Log::error("Failed to sync lead to Google Sheet. Status: " . $response->status());
                Log::error("Response Body: " . $response->body());
            }

        } catch (\Exception $e) {
            Log::error('Google Sheet Sync Error: ' . $e->getMessage());
        }
    }
}
