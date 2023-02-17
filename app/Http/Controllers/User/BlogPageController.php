<?php

namespace App\Http\Controllers\User;

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

        // ambil semua blog dengan sesuai bahasa dan blog yang berstatus publish
        $blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish');

        // filter by category
        if (request('category')) {
            $category = BlogCategorys::where('slug', request('category'))->first();
            if ($category) $blogs = $blogs->where('cat_id', $category->id);
            else return redirect()->route('blogs', app()->getLocale());
        }

        // take blogs
        $top_blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->where('is_highlight', 'true')->take(5)->get();

        // jika gak ada blog yang lagi higlight tampilin 2 blog terbaru dan ubah top choise menjadi top update
        $is_top_update = false;
        if (count($top_blogs) == 0) {
            $is_top_update = true;
            $top_blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->take(2)->get();

            // update blogs hilangkan yang sudah dijadikan top update
            if (count($top_blogs) > 1) {
                $blogs = $blogs->where('id', "!=", $top_blogs[0]->id)->where('id', "!=", $top_blogs[1]->id);
            }
        } else {
            // update blogs hilangkan yang sudah dijadikan highlight
            $blogs = $blogs->where('is_highlight', '!=', 'true');
        }

        // take all blogs
        $blogs = $blogs->paginate(6)->withQueryString();

        // filter sesuai bahasa (lang)
        $blog_categories = BlogCategorys::all()->where('lang', $lang);

        return view('user.blog.main', [
            'top_blogs' => $top_blogs,
            'blogs' => $blogs,
            'blog_categories' => $blog_categories,
            'is_top_update' => $is_top_update,
        ]);
    }

    public function show($locale, Blogs $blog)
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
        ]);
    }
}
