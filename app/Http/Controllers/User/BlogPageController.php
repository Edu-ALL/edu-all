<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPageController extends Controller
{
    function blogs()
    {
        // $blogs = Blogs::where('lang', app()->getLocale())->paginate(2);

        // filter by category
        if (request('category')) {
            $blogs = Blogs::latest()->where('cat_id', request('category'));
        } else {
            $blogs = Blogs::latest();
        }

        $blogs = $blogs->paginate(6)->withQueryString();
        $top_blogs = Blogs::latest()->where('lang', app()->getLocale())->take(5)->get();
        $blog_categories = BlogCategorys::all()->where('lang', app()->getLocale());

        return view('user.blog.main', [
            'top_blogs' => $top_blogs,
            'blogs' => $blogs,
            'blog_categories' => $blog_categories,
        ]);
    }
}
