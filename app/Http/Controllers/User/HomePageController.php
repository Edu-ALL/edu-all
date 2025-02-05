<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\ImportantDates;
use App\Models\Mentors;
use App\Models\SuccessStories;
use App\Models\Testimonials;
use App\Models\UpcomingEvents;
use App\Models\AsSeens;
use Carbon\Carbon;

class HomePageController extends Controller
{
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
}
