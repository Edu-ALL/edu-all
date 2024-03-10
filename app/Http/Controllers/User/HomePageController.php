<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Mentors;
use App\Models\SuccessStories;
use App\Models\Testimonials;
use App\Models\UpcomingEvents;

class HomePageController extends Controller
{
    public function home()
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $region = substr(app()->getLocale(), 0, 2);

        // Mentor
        $all_mentor = Mentors::all()->where('mentor_category', 'ALL-In Mentor')->where('mentor_status', 'active');

        // Testimoni
        $testimonies = Testimonials::where('testi_status', 'active')->where('lang', $lang)->inRandomOrder()->limit(5)->get();

        // Upcomming Event
        $event = UpcomingEvents::where('event_status', 'publish')->where('category', 'Event')->first();

        // Upcomming Event
        $regular_talks = UpcomingEvents::all()->where('event_status', 'publish')->where('category', 'Regular Talk');

        // Success Stories
        $success_stories = SuccessStories::where('status', 'active')->where('lang', $lang)->limit(4)->get();

        // Banners
        $banners = Banners::first();

        return view('user.home.region.' . $region, [
            'banners' => $banners,
            'all_mentor' => $all_mentor,
            'event' => $event,
            'regular_talks' => $regular_talks,
            'success_stories' => $success_stories,
            'testimonies' => $testimonies,
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
