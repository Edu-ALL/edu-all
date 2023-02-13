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
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';
        $success_stories = SuccessStories::where('status', 'active')->where('lang', $lang)->get();

        return view('user.success_stories.main', [
            'success_stories' => $success_stories
        ]);
    }

    public function upcoming_events($locale)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';
        $events = UpcomingEvents::latest()->where('event_status', 'active')->where('lang', $lang)->get();

        return view('user.upcoming_events.main', [
            'events' => $events
        ]);
    }

    public function guidebook($locale)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';

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
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';

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
