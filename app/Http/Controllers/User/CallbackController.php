<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class CallbackController extends Controller
{

    // Your Facebook App Credentials
    protected $app_id         = '1699212087341766';
    protected $app_secret     = '7ed420184fb95f1fcd1d9d231aafcbda';
    protected $access_token   = 'EAAYJbKTdMsYBO54KOMff8l5qM2gcV3kgbvIWMJrwkyQsMkXh1h5aZBDWh52VLrwPQUBocG5UzoKbvEDQwUx7Dxf8BGdYoVXoY3PWe343EF2gW8qA43CX5pz6DG2COO0KIhUczgzyd50wRt9NslhZBqWawdrhkL3dD3WnDsNhDI3ItfcDT7ZCftZCDZBRKmVnNahxKUqfyRg2GNZBbl';

    public function verify(Request $request)
    {
        // Replace with your own verify token
        $verify_token = 'EDUALL04';

        // Retrieve the parameters sent by Facebook
        $mode = $request->query('hub_mode');
        $challenge = $request->query('hub_challenge');
        $verify_token_received = $request->query('hub_verify_token');

        // Verify the token matches what you expect
        if ($mode === 'subscribe' && $verify_token === $verify_token_received) {
            // Return the challenge code to complete the verification
            Log::info('Verification success : ' . $challenge);
            return response($challenge);
        } else {
            // If the verification fails
            Log::error('Verification failed.');
            return response('Verification failed.', 400);
        }
    }

    public function read_lead(Request $request)
    {
        // Log request data
        $log_data = [
            'raw_post_data' => $request->getContent(),
            'headers' => $request->headers->all()
        ];

        // Log the raw POST data for debugging
        Log::info('Webhook received', $log_data);

        // Extract Leadgen ID from the POST data
        // $input_data = json_decode($request->getContent(), true);
        // $leadgen_id = $input_data['entry'][0]['changes'][0]['value']['leadgen_id'] ?? null;

        // if ($leadgen_id) {
        //     // If we have the Leadgen ID, proceed with further logic
        //     $this->processLeadgenData($leadgen_id);
        // }

        return response()->json(['message' => 'Webhook received successfully.'], 200);
    }

    public function processLeadgenData($leadgen_id)
    {
        // Check if the access token is valid
        if (!$this->isAccessTokenValid($this->access_token)) {
            $this->access_token = $this->refreshAccessToken();
        }

        // Call Facebook Graph API to fetch lead data
        $response = Http::get("https://graph.facebook.com/v17.0/{$leadgen_id}", [
            'access_token' => $this->access_token
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $this->logLeadData($data);
        } else {
            Log::error("Error fetching lead data: " . $response->body());
        }
    }

    public function isAccessTokenValid($access_token)
    {
        $url = "https://graph.facebook.com/v17.0/debug_token?input_token={$access_token}&access_token={$this->app_id}|{$this->app_secret}";

        // Make the cURL request using Laravel's HTTP client (for better readability and error handling)
        $response = Http::get($url);

        return $response->successful() && $response->json()['data']['is_valid'] ?? false;
    }

    public function refreshAccessToken()
    {
        $url = "https://graph.facebook.com/v23.0/oauth/access_token?grant_type=fb_exchange_token&client_id={$this->app_id}&client_secret={$this->app_secret}&fb_exchange_token={$this->access_token}";

        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        Log::error("Error refreshing access token: " . $response->body());
        return null;
    }

    public function logLeadData($data)
    {
        $log_entry = "------ " . now() . " ------\n";
        $log_entry .= "Lead ID: " . $data['id'] . "\n";
        $log_entry .= "Created Time: " . $data['created_time'] . "\n";

        if (isset($data['field_data'])) {
            foreach ($data['field_data'] as $field) {
                $log_entry .= $field['name'] . ": " . $field['values'][0] . "\n";
            }
        }

        Log::info('Lead Data:', ['data' => $log_entry]);
    }
}
