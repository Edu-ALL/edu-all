<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Blogs;
use App\Models\Guidebooks;
use App\Models\Mentors;
use App\Models\SuccessStories;
use App\Models\Testimonials;
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
        $top_blogs = Blogs::where('blog_status', 'active')->orderby('click_count', 'desc')->take(5)->get();
        return view('admin.dashboard', [
            'banner' => $banner,
            'blog' => $blog,
            'mentor' => $mentor,
            'guidebook' => $guidebook,
            'upcoming_event' => $upcoming_event,
            'success_stories' => $success_stories,
            'testimonial' => $testimonial,
            'top_blogs' => $top_blogs,
        ]);
    }
}
