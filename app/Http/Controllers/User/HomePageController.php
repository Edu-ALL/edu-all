<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\MentorMail;
use App\Mail\PartnershipMail;
use App\Models\Banners;
use App\Models\ImportantDates;
use App\Models\Mentors;
use App\Models\SuccessStories;
use App\Models\Testimonials;
use App\Models\UpcomingEvents;
use App\Models\AsSeens;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class HomePageController extends Controller
{
    private $VERIFY_TOKEN = 'EDUALL04';

    public function home()
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $region = substr(app()->getLocale(), 0, 2);

        // Mentor
        $all_mentor = Mentors::where('mentor_category', 'ALL-In Mentor')
            ->where('mentor_status', 'active')
            ->where('lang', $lang)
            ->orderBy('mentor_order', 'ASC')
            ->get();

        // Testimoni
        $testimonies = Testimonials::where('testi_status', 'active')->where('lang', $lang)->inRandomOrder()->limit(5)->get();

        // Upcomming Event
        $events = UpcomingEvents::where('event_status', 'publish')->where('category', 'Event')->where('lang', $lang)->orderBy('event_date', 'ASC')->get();

        // Regular Talks
        $regular_talks = UpcomingEvents::where('event_status', 'publish')->where('category', 'Regular Talk')->where('lang', $lang)->orderBy('event_date', 'ASC')->get();

        // Success Stories
        $success_stories = SuccessStories::where('status', 'active')->where('lang', $lang)->limit(6)->orderBy('story_order', 'ASC')->get();

        // Important Dates
        $important_dates = ImportantDates::where('date', '>', Carbon::now())->orderBy('date', 'ASC')->get();

        // Banners
        $banners = Banners::first();

        // As Seen On
        $as_seen_on = AsSeens::orderBy('created_at', 'DESC')->get();

        // $region 
        return view('user.home.region.id', [
            'banners' => $banners,
            'all_mentor' => $all_mentor,
            'events' => $events,
            'regular_talks' => $regular_talks,
            'important_dates' => $important_dates,
            'success_stories' => $success_stories,
            'testimonies' => $testimonies,
            'as_seen_on' => $as_seen_on,
        ]);
    }

    public function sign_me_adm_mentoring()
    {
        return view('user.sign_me.adm_mentoring');
    }

    public function sign_me_acad_tutoring()
    {
        return view('user.sign_me.acad_tutoring');
    }

    public function sign_me_sat_prep()
    {
        return view('user.sign_me.sat_prep');
    }

    public function sign_me_skillset_tutoring()
    {
        return view('user.sign_me.skillset_tutoring');
    }

    public function sign_me_passion_project()
    {
        return view('user.sign_me.passion_project');
    }

    public function sign_me_ee_coaching()
    {
        return view('user.sign_me.ee_coaching');
    }

    public function privacy_policy()
    {
        return view('user.privacy_policy.main');
    }

    public function sign_me_partnership($locale, $slug)
    {
        return view('user.sign_me.sign_me_partnership', [
            'slug' => $slug,
            'locale' => $locale
        ]);
    }

    public function submit_partnership(Request $request, $locale, $slug)
    {
        try {
            $data = [
                'data' => $request::all(),
                'category' => $slug
            ];

            Mail::to('theresya.afila@edu-all.com')->send(new PartnershipMail($data));

            return redirect($locale . '/sign-me/thank-partnership');
        } catch (Exception $e) {
            Log::error('Send partnership email failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
    }

    public function thanks_partnership()
    {
        return view('user.sign_me.thank_partnership');
    }

    public function sign_up_mentor()
    {
        return view('user.sign_me.sign_up_mentor');
    }

    public function thank_mentor()
    {
        return view('user.sign_me.thank_mentor');
    }

    public function submit_mentor(Request $request, $locale)
    {
        try {
            $data = [
                'data' => $request::all(),
            ];

            Mail::to('willie.romansyah@edu-all.com')->cc(['lawrence.benning@edu-all.com', 'irene@edu-all.com'])->send(new MentorMail($data));

            return redirect($locale . '/sign-up/mentor/thank');
        } catch (Exception $e) {
            Log::error('Send mentor email failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
    }

    public function verify(Request $request)
    {
        // Replace with your own verify token
        $verify_token = 'EDUALL04';

        // Retrieve the parameters sent by Facebook
        $mode = $request::get('hub_mode');
        $challenge = $request::get('hub_challenge');
        $verify_token_received = $request::get('hub_verify_token');

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

    public function read_lead()
    {
        try {
            // Get the raw POST data
            $raw_post_data = file_get_contents('php://input');

            $input_data = json_decode($raw_post_data, true);
            $leadgen_id = $input_data['entry'][0]['changes'][0]['value']['leadgen_id'];  // Extract the Leadgen ID from webhook data

            LOG::info('RAW POST DATA - ' . date("Y-m-d H:i:s") . ' : ' . $raw_post_data);

            // Optionally, send a response to indicate successful receipt of the data
            http_response_code(200); // HTTP 200 OK
            echo "Webhook received successfully.";


            // Your Facebook App Credentials
            $app_id         = '1699212087341766';
            $app_secret     = '7ed420184fb95f1fcd1d9d231aafcbda';
            $access_token   = 'EAAYJbKTdMsYBO54KOMff8l5qM2gcV3kgbvIWMJrwkyQsMkXh1h5aZBDWh52VLrwPQUBocG5UzoKbvEDQwUx7Dxf8BGdYoVXoY3PWe343EF2gW8qA43CX5pz6DG2COO0KIhUczgzyd50wRt9NslhZBqWawdrhkL3dD3WnDsNhDI3ItfcDT7ZCftZCDZBRKmVnNahxKUqfyRg2GNZBbl';

            // If the access token is expired, refresh it
            if ($access_token) {
                $access_token = $this->refreshAccessToken($access_token, $app_id, $app_secret);
                if (!$access_token) {
                    exit('Failed to refresh access token.');
                }
            }

            // Graph API URL to fetch the specific lead data
            $graph_url = "https://graph.facebook.com/v22.0/{$leadgen_id}?access_token={$access_token}";

            // Initialize cURL session
            $ch = curl_init();

            // Set cURL options
            curl_setopt($ch, CURLOPT_URL, $graph_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Execute the cURL request and get the response
            $response = curl_exec($ch);

            // Check for errors in the cURL request
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }

            // Close the cURL session
            curl_close($ch);

            // Decode the JSON response
            Log::notice("RAW DATA", $response);

            $data = json_decode($response, true);

            // Prepare the final data with lead details and log it
            $final_data = [];

            if (isset($data['id'])) {
                $final_data['lead_id'] = $data['id'];
                $final_data['created_time'] = $data['created_time'];

                // Loop through the field responses (e.g., name, email, etc.)
                if (isset($data['field_data'])) {
                    $fields = [];
                    foreach ($data['field_data'] as $field) {
                        $fields[$field['name']] = $field['values'][0];  // key-value pair
                    }
                    $final_data['fields'] = $fields;

                    // Log the key-value pairs to the log file
                    $log_entry = "\n------ " . date("Y-m-d H:i:s") . " ------\n";
                    $log_entry .= "Lead ID: " . $final_data['lead_id'] . "\n";
                    $log_entry .= "Created Time: " . $final_data['created_time'] . "\n";
                    $log_entry .= "Form Fields:\n";


                    foreach ($fields as $key => $value) {
                        $log_entry .= "$key: $value\n";
                    }
                    $log_entry .= "-----------------------------------------\n";
                    // Open log file again to append the detailed log

                    LOG::info($log_entry);
                }
            } else {
                $final_data['error'] = "No leads found or error in fetching data.";
                LOG::error($final_data['error']);
            }

            // Output the final JSON response
            header('Content-Type: application/json');
            Log::info('LEAD DATA', $final_data);
            echo json_encode($final_data, JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            Log::error('Error', $e);
        }
    }

    // Function to check if the access token is still valid
    public function isAccessTokenValid($access_token, $app_id, $app_secret)
    {
        // URL to check the token validity
        $url = "https://graph.facebook.com/v22.0/debug_token?input_token={$access_token}&access_token={$app_id}|{$app_secret}";

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL request and get the response
        $response = curl_exec($ch);

        // Check for errors in the cURL request
        if (curl_errno($ch)) {
            Log::error('Error:' . curl_error($ch));
            return false;
        }

        // Close the cURL session
        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($response, true);

        // Check if the token is valid
        if (isset($data['data']) && isset($data['data']['is_valid']) && $data['data']['is_valid']) {
            return true;  // Token is valid
        } else {
            return false; // Token is not valid
        }
    }

    // Function to get a long-lived access token if the current one is expired
    public function refreshAccessToken($access_token, $app_id, $app_secret)
    {

        // If the token is valid, return it without refreshing
        if ($this->isAccessTokenValid($access_token, $app_id, $app_secret)) {
            return $access_token;
        }

        // URL to refresh the access token
        $url = "https://graph.facebook.com/v22.0/oauth/access_token?grant_type=fb_exchange_token&client_id={$app_id}&client_secret={$app_secret}&fb_exchange_token={$access_token}";

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL request and get the response
        $response = curl_exec($ch);

        // Check for errors in the cURL request
        if (curl_errno($ch)) {
            Log::error('Error:' . curl_error($ch));
            return null;
        }

        // Close the cURL session
        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($response, true);

        // Check if the response contains a new access token
        if (isset($data['access_token'])) {
            return $data['access_token']; // Return the new long-lived access token
        } else {
            Log::error('Error refreshing access token.');
            return null;
        }
    }
}
