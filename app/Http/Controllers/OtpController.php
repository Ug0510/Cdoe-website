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
            Log::channel('otp')->info("OTP Request for {$mobile} - Outcome: " . ($smsResult['success'] ? 'SUCCESS' : 'FAILED'));

            if ($smsResult['success']) {
                return response()->json([
                    'success' => true,
                    'message' => 'OTP sent successfully',
                    'expires_in' => self::OTP_EXPIRY_MINUTES * 60, // seconds
                ]);
            } else {
                Log::channel('otp')->error("Failed to send OTP to {$mobile}. Error: " . ($smsResult['error'] ?? 'Unknown Error'));
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
            Log::channel('otp')->error('OTP Send Error: ' . $e->getMessage());
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

            Log::channel('otp')->info("OTP Verification attempt for {$mobile}");

            // Get the latest active OTP for this mobile
            $otpRecord = OtpVerification::where('mobile', $mobile)
                ->where('is_used', false)
                ->where('expires_at', '>', now())
                ->orderBy('created_at', 'desc')
                ->first();

            if (!$otpRecord) {
                Log::channel('otp')->warning("Verification failed for {$mobile}: No valid OTP found");
                return response()->json([
                    'success' => false,
                    'message' => 'No valid OTP found. Please request a new one.'
                ], 400);
            }

            // Check if max attempts exceeded
            if ($otpRecord->attempts >= 3) {
                $otpRecord->update(['is_used' => true]);
                Log::channel('otp')->warning("Verification failed for {$mobile}: Too many attempts");
                return response()->json([
                    'success' => false,
                    'message' => 'Too many failed attempts. Please request a new OTP.'
                ], 400);
            }

            // Verify OTP
            if (Hash::check($otpCode, $otpRecord->otp_hash)) {
                // Mark OTP as used
                $otpRecord->update(['is_used' => true]);

                Log::channel('otp')->info("Verification SUCCESS for {$mobile}");

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
                Log::channel('otp')->info("Verification failed for {$mobile}: Invalid OTP. Attempts left: {$remainingAttempts}");
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
            Log::channel('otp')->error('OTP Verify Error: ' . $e->getMessage());
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
        $log = Log::channel('otp');
        try {
            $params = [
                'user_name' => self::SMS_USERNAME,
                'user_password' => self::SMS_PASSWORD,
                'sender_id' => self::SMS_SENDER_ID,
                'type' => self::SMS_TYPE,
                'mobile' => $mobile,
                'text' => $message,
            ];

            $log->info('Attempting to send SMS to ' . $mobile);
            $log->debug('SMS API Config: URL=' . self::SMS_API_URL . ', Sender=' . self::SMS_SENDER_ID . ', Type=' . self::SMS_TYPE);

            // Enhanced HTTP call with specialized headers for LiteSpeed/Dedicated Linux compatibility
            $response = Http::timeout(35)
                ->withoutVerifying()
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
                    'Accept' => '*/*',
                    'Connection' => 'keep-alive'
                ])
                ->get(self::SMS_API_URL, $params);

            $status = $response->status();
            $body = $response->body();

            $log->info("SMS API Response for {$mobile} [Status: {$status}]");
            $log->debug("SMS API Response Body: " . $body);

            // Check if SMS was sent successfully
            if ($response->successful()) {
                // Universal SMS API usually returns "2019" or some numeric ID on success
                // We'll treat any 2xx response as success unless the body contains known error keywords
                if (stripos($body, 'error') !== false || stripos($body, 'fail') !== false || stripos($body, 'invalid') !== false) {
                    $log->error("SMS API returned successful status but body contains error: " . $body);
                    return ['success' => false, 'error' => $body];
                }
                return ['success' => true, 'response' => $body];
            } else {
                $log->error("SMS API HTTP Failure. Status: {$status}, Body: {$body}");
                return ['success' => false, 'error' => 'HTTP Status: ' . $status];
            }

        } catch (\Exception $e) {
            $log->error("SMS Send EXCEPTION for {$mobile}: " . $e->getMessage());
            $log->debug($e->getTraceAsString());
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
    /**
     * Send lead data to Google Sheet Webhook
     */
    private function sendToGoogleSheet(string $name, string $mobile): void
    {
        $log = Log::channel('otp');
        try {
            $webhookUrl = config('services.google_sheet.webhook_url');

            if (!$webhookUrl) {
                $log->warning('Google Sheet Webhook URL not configured in services.php or .env');
                return;
            }

            $mobileNumber = str_replace(['+', '91'], '', $mobile);
            $log->info("Attempting to sync lead to Google Sheet: {$name} ({$mobileNumber})");

            // Google Apps Script Webhooks often work better with form-data and following redirects
            $response = Http::timeout(20)
                ->withoutVerifying()
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36'
                ])
                ->asForm() // Changed to form data as some Apps Script setups prefer it
                ->post($webhookUrl, [
                    'name' => $name,
                    'mobile' => $mobileNumber,
                    'verified_at' => now()->toDateTimeString(),
                ]);

            $status = $response->status();

            // Apps Script deployment usually returns a 200 via redirect (302)
            if ($response->successful() || $status === 302 || $status === 307) {
                $log->info("Lead sync SUCCESS for {$name} [Status: {$status}]");
            } else {
                $log->error("Lead sync FAILED for {$name} [Status: {$status}]");
                $log->debug("Response Body: " . $response->body());
            }
        } catch (\Exception $e) {
            $log->error('Google Sheet Sync EXCEPTION: ' . $e->getMessage());
        }
    }

    /**
     * Diagnostic method to test SMS connectivity
     * Access via: /api/otp/test-sms?mobile=YOUR_NUMBER
     */
    public function testConnectivity(Request $request)
    {
        $mobile = $request->query('mobile');
        if (!$mobile || strlen($mobile) !== 10) {
            return "Please provide a 10-digit mobile number: /api/otp/test-sms?mobile=9XXXXXXXXX";
        }

        $testMobile = '91' . $mobile;
        $testMessage = "TMU Test Message at " . now()->toDateTimeString();

        Log::channel('otp')->info("--- START DIAGNOSTIC TEST for {$testMobile} ---");

        // Test SMS
        $smsResult = $this->sendSms($testMobile, $testMessage);

        // Test Google Sheet Sync (Lead generation)
        Log::channel('otp')->info("--- START GOOGLE SHEET SYNC TEST ---");
        $this->sendToGoogleSheet("Diagnostic Test User", $testMobile);
        Log::channel('otp')->info("--- END GOOGLE SHEET SYNC TEST ---");

        Log::channel('otp')->info("--- END DIAGNOSTIC TEST ---");

        return response()->json([
            'message' => 'Diagnostic test completed. Please check both your SMS and your Google Sheet.',
            'test_data' => [
                'mobile' => $testMobile,
                'api_url' => self::SMS_API_URL,
                'sheet_webhook_url' => config('services.google_sheet.webhook_url'),
            ],
            'sms_result' => $smsResult,
            'log_info' => 'Check storage/logs/otp.log for detailed sync logs.'
        ]);
    }
}
