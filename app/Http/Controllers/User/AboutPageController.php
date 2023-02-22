<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use App\Models\MentorVideos;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function about($locale)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';
        $all_mentor = Mentors::all()->where('mentor_category', 'ALL-In Mentor')->where('lang', $lang)->where('mentor_status', 'active');

        $region = substr(app()->getLocale(), 0, 2);

        return view('user.about.region.' . $region, [
            'all_mentor' => $all_mentor,
        ]);
    }

    public function our_contribution()
    {
        return view('user.our_contribution.main');
    }

    public function partnership_careers()
    {
        return view('user.partnership_carrier.main');
    }

    public function contact_us()
    {
        return view('user.contact_us.main');
    }


    public function mentor($locale)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';
        $allin_mentor = Mentors::all()->where('mentor_category', 'ALL-In Mentor')->where('lang', $lang)->where('mentor_status', 'active');
        $building_mentor = Mentors::all()->where('mentor_category', 'Profile Building Mentor')->where('lang', $lang)->where('mentor_status', 'active');

        return view('user.mentor.main', [
            'locale' => $locale,
            'allin_mentor' => $allin_mentor,
            'building_mentor' => $building_mentor,
        ]);
    }

    public function detail_mentor($locale, $slug)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';
        $mentor = Mentors::with('mentor_video')->where('mentor_slug', $slug)->where('lang', $lang)->first();

        return view('user.detail_mentor.main', [
            'mentor' => $mentor,
            'mentor_slug' => $slug
        ]);
    }
}
