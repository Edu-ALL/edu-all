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

            if ($request::get('g-recaptcha-response')) {
                Mail::to('theresya.afila@edu-all.com')->send(new PartnershipMail($data));
                Log::notice('Email partnership successfully sent.', $data['data']);
                return redirect($locale . '/sign-me/thank-partnership');
            } else {
                return Redirect::back();
            }
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

    public function sign_me_mentoring($lang = null)
    {
        if ($lang && $lang != 'en') {
            return redirect('/sign-me/mentoring/en', 301);
        }

        return view('user.sign_me.sign_me_mentoring', ['lang' => $lang]);
    }

    public function sign_me_sat()
    {
        $path = request()->segments();
        $path = end($path);
        return view('user.sign_me.sign_me_sat', ['price_page' => $path == 'price',]);
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

    public function thank_form_ads()
    {
        return view('user.sign_me.thank_ads');
    }
}
