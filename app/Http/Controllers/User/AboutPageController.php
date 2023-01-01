<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function about()
    {
        return view('user.about.main');
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
