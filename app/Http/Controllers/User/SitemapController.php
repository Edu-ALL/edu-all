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
            'programs/admissions-mentoring/ultimate-mentoring',
            'programs/admissions-mentoring/epb',
            'programs/tutoring',
            'programs/tutoring/subject',
            'programs/tutoring/sat',
            'programs/tutoring/olympiad',
            'about/our-story',
            'about/our-team',
            'about/partnership',
            'about/careers',
            'blog',
            'sitemap-blogs.xml',
            'event',
            'impact-project',
        ];

        return response()->view('sitemap.page', compact('pages','lang'))->header('Content-Type', 'text/xml');
    }
}
