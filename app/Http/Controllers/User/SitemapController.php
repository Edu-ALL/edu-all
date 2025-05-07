<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;

class SitemapController extends Controller
{
    //
    function index() {
        return response()->view('sitemap.sitemap')->header('Content-Type', 'text/xml');
    }
    
    function sitemap_blog($locale) {
        $lang = substr(app()->getLocale(), 3, 2);
        $blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->get();

        return response()->view('sitemap.blog', ['blogs'=>$blogs, 'lang'=>$locale])->header('Content-Type', 'text/xml');
    }

    function sitemap_pages($locale) {
        $lang = $locale;
        $pages = [
            '',
            'programs',
            'programs/admissions-mentoring',
            'programs/admissions-mentoring/undergraduate-program',
            'programs/admissions-mentoring/graduate-program',
            'programs/admissions-mentoring/university-transfer-program',
            'programs/global-innovators-project',
            'programs/academic-test-preparation',
            'programs/academic-test-preparation/academic-tutoring',
            'programs/academic-test-preparation/sat-program',
            'programs/academic-test-preparation/skillset-tutoring-program',
            'programs/exclusive-program-school',
            'programs/exclusive-program-school/admission-accelerator',
            'programs/exclusive-program-school/experiential-learning',
            'programs/exclusive-program-school/teacher-focused',
            'about',
            'about/mentor',
            'about/our-contribution',
            'about/partnership',
            'about/careers',
            'blog',
            'sitemap-blogs.xml',
            'resources/success-stories',
            'resources/upcoming-events',
            'resources/guidebook',
            'resources/testimonial'
        ];

        return response()->view('sitemap.page', compact('pages','lang'))->header('Content-Type', 'text/xml');
    }
}
