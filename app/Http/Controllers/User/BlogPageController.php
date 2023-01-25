<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\Blogs;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPageController extends Controller
{
    public function index($locale)
    {
        // filter by category
        if (request('category')) {
            $blogs = Blogs::latest()->where('cat_id', request('category'));
        } else {
            $blogs = Blogs::latest();
        }

        $blogs = $blogs->paginate(6)->withQueryString();
        $top_blogs = Blogs::latest()->where('lang', $locale)->take(5)->get();
        $blog_categories = BlogCategorys::all()->where('lang', $locale);

        return view('user.blog.main', [
            'top_blogs' => $top_blogs,
            'blogs' => $blogs,
            'blog_categories' => $blog_categories,
        ]);
    }

    public function show(Blogs $blog)
    {
        $top_blogs = Blogs::latest()->where('id', '!=', $blog->id)->take(3)->get();

        // Blog Section
        $doc =  new DOMDocument();
        $doc->loadHTML($blog->blog_description);
        $title_list = $doc->getElementsByTagName('h2');

        $blog_section = [];
        foreach ($title_list as $index => $title) {
            $title->setAttribute("id", "blog_title_" . $index);
            $blog_section[] = $title->nodeValue;
        }

        $blog->blog_description = $doc->saveHTML();

        return view('user.detail_blog.main', [
            'blog' => $blog,
            "top_blogs" => $top_blogs,
            "blog_section_list" => $blog_section
        ]);
    }
}
