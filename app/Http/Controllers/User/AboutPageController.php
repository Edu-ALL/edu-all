<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Careers;
use App\Models\Mentors;
use App\Models\MentorVideos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AboutPageController extends Controller
{
    public function about($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $all_mentor = Mentors::where('mentor_category', 'ALL-In Mentor')->where('lang', $lang)->where('mentor_status', 'active')->get();

        $region = substr(app()->getLocale(), 0, 2);

        return view('user.about.region.' . $region, [
            'all_mentor' => $all_mentor,
        ]);
    }

    public function our_contribution()
    {
        return view('user.our_contribution.main');
    }

    public function partnership()
    {
        return view('user.partnership.main');
    }

    public function partnership_careers(Request $request)
    {
        $query = Careers::query();

        if ($request->has('department')) {
            $query->where('department', $request->department);
        }

        if ($request->has('status')) {
            $query->where('work_type', $request->status);
        }

        if ($request->has('search')) {
            $query->where('job_position', 'like', '%' . $request->search . '%');
        }

        $careers = $query->where('status', 'active')
            ->orderBy('job_position', 'asc')
            ->paginate(3);

        return view('user.partnership_carrier.main', [
            'careers' => $careers
        ]);
    }

    public function detail_careers($locale, $slug)
    {
        $career = Careers::where('slug', $slug)->firstOrFail();
        return view('user.detail_career.main', [
            'career' => $career,
        ]);
    }

    public function contact_us()
    {
        return view('user.contact_us.main');
    }

    public function submit_contact_us(Request $request, $locale)
    {
        try {
            $data = [
                'data' => $request->all(),
            ];

            Mail::to('info@edu-all.com')->send(new ContactMail($data));

            return redirect($locale . '/contact-us/thank');
        } catch (Exception $e) {
            Log::error('Send mentor email failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
    }

    public function thank_contact_us()
    {
        return view('user.sign_me.thank');
    }


    public function mentor($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
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
        $lang = substr(app()->getLocale(), 3, 2);
        $mentor = Mentors::with('mentor_video')->with('blog')->where('mentor_slug', $slug)->where('lang', $lang)->where('mentor_status', 'active')->first();

        if (!$mentor) {
            return redirect()->route('mentor', ['locale' => $locale]);
        }

        return view('user.detail_mentor.main', [
            'mentor' => $mentor,
            'mentor_slug' => $slug
        ]);
    }
}
