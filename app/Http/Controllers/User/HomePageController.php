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
        // Extract verify_token and challenge from query parameters
        $verify_token = $request::get('hub_verify_token');
        $challenge = $request::get('hub_challenge');

        // Check if the verify_token and challenge are present
        if (!$verify_token || !$challenge) {
            Log::warning('Missing parameters', [
                'verify_token' => $verify_token,
                'challenge' => $challenge
            ]);
            return response('Missing hub.verify_token and hub.challenge params', 400);
        }

        // Validate the verify_token
        if ($verify_token !== $this->VERIFY_TOKEN) {
            Log::warning('Token mismatch', ['verify_token' => $verify_token]);
            return response('Verify token does not match', 400);
        }

        // Successfully validated, return the challenge to complete the verification process
        Log::info('Webhook verification successful', [
            'verify_token' => $verify_token,
            'challenge' => $challenge
        ]);

        return response($challenge);
    }

    public function handleAds(Request $request)
    {
        // Graph API endpoint
        $GRAPH_API_VERSION = 'v2.12';
        $GRAPH_API_ENDPOINT = 'https://graph.facebook.com/' . $GRAPH_API_VERSION;

        $access_token = '96d8102c55050e25d9ab233b1e786448';

        $body = $request->json()->all();
        
        // Loop through the entries in the request payload
        foreach ($body['entry'] as $page) {
            foreach ($page['changes'] as $change) {
                // Extract the necessary information from the change
                $page_id = $change['value']['page_id'];
                $form_id = $change['value']['form_id'];
                $leadgen_id = $change['value']['leadgen_id'];

                Log::info("Page ID {$page_id}, Form ID {$form_id}, Leadgen ID {$leadgen_id}");

                // Call the Graph API to fetch the lead information
                $leadgen_uri = "{$GRAPH_API_ENDPOINT}/{$leadgen_id}?access_token={$access_token}";
                $response = json_decode(file_get_contents($leadgen_uri));

                if ($response && isset($response->field_data)) {
                    $id = $response->id;
                    $created_time = $response->created_time;
                    $field_data = $response->field_data;

                    // Log the lead data
                    Log::info("Lead ID {$id}");
                    Log::info("Created time {$created_time}");

                    // Log the field data (questions and answers)
                    foreach ($field_data as $field) {
                        $question = $field->name;
                        $answers = $field->values;
                        Log::info("Question: {$question}");
                        Log::info("Answers: " . print_r($answers, true));
                    }
                } else {
                    Log::error("Failed to fetch lead information for Leadgen ID: {$leadgen_id}");
                }
            }
        }

        // Send HTTP 200 OK status to indicate we've successfully received and processed the update
        return response()->json(['status' => 'success']);


    }
}
