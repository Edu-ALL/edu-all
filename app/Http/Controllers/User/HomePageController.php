<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Mentors;
use App\Models\Testimonials;

class HomePageController extends Controller
{
    public function home()
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $region = substr(app()->getLocale(), 0, 2);

        // Banner
        $banners = Banners::where('lang', $lang)->where('banner_status', 'active')->where('region', $region)->orderBy('banner_order', 'asc')->orderBy('updated_at', 'desc')->get();

        // Mentor
        $all_mentor = Mentors::all()->where('mentor_category', 'ALL-In Mentor')->where('lang', $lang)->where('mentor_status', 'active');

        // Testimoni
        $testimonies = Testimonials::where('lang', $lang)->where('testi_status', 'active')->inRandomOrder()->limit(5)->get();

        return view('user.home.region.' . $region, [
            'banners' => $banners,
            'all_mentor' => $all_mentor,
            'testimonies' => $testimonies
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
