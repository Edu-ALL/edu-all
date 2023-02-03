<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function about($locale)
    {
        return view('user.about.id');


        // for singapore region
        // $all_mentor = Mentors::all()->where('lang', $locale);

        // return view('user.about.sg', [
        //     'all_mentor' => $all_mentor
        // ]);
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
}
