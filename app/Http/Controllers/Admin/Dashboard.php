<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Blogs;
use App\Models\Guidebooks;
use App\Models\Mentors;
use App\Models\ProjectShowcases;
use App\Models\SuccessStories;
use App\Models\Testimonials;
use App\Models\Tutors;
use App\Models\UpcomingEvents;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $banner = Banners::get();
        $blog = Blogs::get();
        $mentor = Mentors::get();
        $guidebook = Guidebooks::get();
        $upcoming_event = UpcomingEvents::get();
        $success_stories = SuccessStories::get();
        $testimonial = Testimonials::get();
        $tutors = Tutors::get();
        $project_showcase = ProjectShowcases::get();
        $top_blogs = Blogs::where('blog_status', 'publish')->orderby('click_count', 'desc')->take(5)->get();
        return view('admin.dashboard', [
            'banner' => $banner,
            'blog' => $blog,
            'mentor' => $mentor,
            'guidebook' => $guidebook,
            'upcoming_event' => $upcoming_event,
            'success_stories' => $success_stories,
            'testimonial' => $testimonial,
            'tutors' => $tutors,
            'project_showcase' => $project_showcase,
            'top_blogs' => $top_blogs,
        ]);
    }
}
