<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\BlogReads;
use App\Models\Blogs;
use DOMDocument;

class BlogPageController extends Controller
{
    public function index($locale)
    {
        $lang = $locale == "id-en" || $locale == "sg" ? 'en' : 'id';

        // filter by category
        if (request('category')) {
            $blogs = Blogs::latest()->where('lang', $lang)->where('cat_id', request('category'));
        } else {
            $blogs = Blogs::latest()->where('lang', $lang);
        }

        // take all blogs
        $blogs = $blogs->paginate(6)->withQueryString();

        // take blogs
        $top_blogs = Blogs::latest()->where('lang', $lang)->where('is_highlight', 'true')->take(5)->get();

        // jika gak ada blog yang lagi higlight tampilin 2 blog terbaru dan ubah top choise menjadi top update
        $is_top_update = false;
        if (count($top_blogs) == 0) {
            $is_top_update = true;
            $top_blogs = Blogs::latest()->where('lang', $lang)->take(2)->get();
        }

        // filter sesuai bahasa (lang)
        $blog_categories = BlogCategorys::all()->where('lang', $lang);

        return view('user.blog.main', [
            'top_blogs' => $top_blogs,
            'blogs' => $blogs,
            'blog_categories' => $blog_categories,
            'is_top_update' => $is_top_update,
            'is_blog_page' => true,
        ]);
    }

    public function show(Blogs $blog)
    {
        // read ip address
        $ip_address = request()->ip();
        // if ip address already registered then skip else register new ip address
        $ip_isregistered = BlogReads::where('blog_id', $blog->id)->where('ip_address',  $ip_address)->exists();
        if (!$ip_isregistered) {
            BlogReads::create([
                'blog_id' => $blog->id,
                'ip_address' => $ip_address,
            ]);

            // update blog click count
            $blog->update([
                'click_count' => $blog->click_count + 1,
            ]);
        }

        // dd($blog);
        $recomendation_blogs = Blogs::latest()->where('id', '!=', $blog->id)->where('cat_id', $blog->cat_id)->take(3)->get();

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
            "recomendation_blogs" => $recomendation_blogs,
            "blog_section_list" => $blog_section,
            'is_detail_blog_page' => true,
        ]);
    }
}
