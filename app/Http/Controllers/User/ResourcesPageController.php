<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Guidebooks;
use App\Models\Mentors;
use App\Models\MentorVideos;
use App\Models\SuccessStories;
use App\Models\Testimonials;
use App\Models\UpcomingEvents;
use Illuminate\Http\Request;

class ResourcesPageController extends Controller
{
    public function success_stories($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);

        if (request('category') == 'passion-project') {
            $tab_section = 'passion_project';
            $success_stories = SuccessStories::where('category', 'Passion Project')->where('status', 'active')->where('lang', $lang)->paginate(6);
        } else {
            $tab_section = 'admission_mentoring';
            $success_stories = SuccessStories::where('category', 'Admission Mentoring')->where('status', 'active')->where('lang', $lang)->paginate(6);
        }

        return view('user.success_stories.main', [
            'success_stories' => $success_stories,
            'tab_section' => $tab_section,
        ]);
    }

    public function upcoming_events($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);
        $region = substr(app()->getLocale(), 0, 2);

        // Upcomming Event
        $events = UpcomingEvents::where('event_status', 'publish')
            ->where('category', 'Event')
            ->where('lang', $lang)
            ->where('region', $region)
            ->orderBy('event_date', 'ASC')->get();

        // Regular Talks
        $regular_talks = UpcomingEvents::where('event_status', 'publish')
            ->where('category', 'Regular Talk')
            ->where('lang', $lang)
            ->where('region', $region)
            ->orderBy('event_date', 'ASC')->get();


        return view('user.upcoming_events.main', [
            'events' => $events,
            'talks' => $regular_talks
        ]);
    }

    public function guidebook($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);

        $guidebook = Guidebooks::all()->where('lang', $lang)->where('guidebook_status', 'active');
        $getting_started = $guidebook->where('guidebook_category', 'Getting Started');
        $build_your_profile = $guidebook->where('guidebook_category', 'Build Your Profile');
        $apply_to_your_dream_university = $guidebook->where('guidebook_category', 'Apply to Your Dream University');
        $grab_the_scholarship = $guidebook->where('guidebook_category', 'Grab The Scholarship');

        // dd($getting_started, $build_your_profile, $apply_to_your_dream_university, $grab_the_scholarship);

        return view('user.guidebooks.main', [
            'getting_started' => $getting_started,
            'build_your_profile' => $build_your_profile,
            'apply_to_your_dream_university' => $apply_to_your_dream_university,
            'grab_the_scholarship' => $grab_the_scholarship,
        ]);
    }

    public function testimonial($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);

        $testimonial = Testimonials::all()->where('lang', $lang)->where('testi_status', 'active');

        $admission_mentoring = $testimonial->where('testi_category', 'Admissions Mentoring');
        $experiential_learning = $testimonial->where('testi_category', 'Experiential Learning');
        $academic_preparation = $testimonial->where('testi_category', 'Academic Preparation');

        return view('user.testimonial.main', [
            'admission_mentoring' => $admission_mentoring,
            'experiential_learning' => $experiential_learning,
            'academic_preparation' => $academic_preparation,
        ]);
    }
}
