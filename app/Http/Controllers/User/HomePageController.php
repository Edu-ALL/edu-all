<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Mentors;
use App\Models\Testimonials;

class HomePageController extends Controller
{
    public function home($locale)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';
        $region = substr(app()->getLocale(), 0, 2);

        // Banner
        $banners = Banners::all()->where('lang', $lang)->where('banner_status', 'active')->where('region', $region);

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

    public function sign_me()
    {
        return view('user.sign_me.main');
    }
}
