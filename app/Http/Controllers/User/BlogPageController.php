<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\BlogWidget;
use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\BlogReads;
use App\Models\Blogs;
use App\Models\BlogWidgets;
use DOMDocument;

class BlogPageController extends Controller
{
    public function index($locale)
    {
        $lang = substr(app()->getLocale(), 3, 2);

        // ambil semua blog dengan sesuai bahasa dan blog yang berstatus publish
        // $blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish');
        $blogs = Blogs::where('lang', $lang)->where('blog_status', 'publish')->orderBy('publish_date', 'desc'); // orderby publish date

        // take blogs
        // $top_blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->where('is_highlight', 'true')->take(5)->get();
        $top_blogs = Blogs::where('lang', $lang)->where('blog_status', 'publish')->where('is_highlight', 'true')->orderBy('publish_date', 'desc')->take(5)->get(); // orderby publish date

        // jika gak ada blog yang lagi higlight tampilin 2 blog terbaru dan ubah top choise menjadi top update
        $is_top_update = false;
        if (count($top_blogs) == 0) {
            $is_top_update = true;
            // $top_blogs = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->take(2)->get();
            $top_blogs = Blogs::where('lang', $lang)->where('blog_status', 'publish')->orderBy('publish_date', 'desc')->take(2)->get(); // orderby publish date

            // update blogs hilangkan yang sudah dijadikan top update
            if (count($top_blogs) > 1) {
                $blogs = $blogs->where('id', "!=", $top_blogs[0]->id)->where('id', "!=", $top_blogs[1]->id);
            }
        } else {
            // update blogs hilangkan yang sudah dijadikan highlight
            $blogs = $blogs->where('is_highlight', '!=', 'true');
        }

        // filter by category
        if (request('category')) {
            $category = BlogCategorys::where('slug', request('category'))->first();
            if ($category) $blogs = $blogs->where('cat_id', $category->id);
            else return redirect()->route('blogs', app()->getLocale());
        }

        // filter by search
        if ($search = request('search')) {
            $blogs = $blogs->where('lang', $lang)->where(function ($s) use ($search) {
                $s->where('blog_title', 'LIKE', "%{$search}")->orWhere('blog_description', 'LIKE', "%{$search}%");
            });
        }

        // take all blogs
        $blogs = $blogs->paginate(6)->withQueryString();

        // filter sesuai bahasa (lang)
        $blog_categories = BlogCategorys::all()->where('lang', $lang);

        return view('user.blog.main', [
            'locale' => $locale,
            'top_blogs' => $top_blogs,
            'blogs' => $blogs,
            'blog_categories' => $blog_categories,
            'is_top_update' => $is_top_update,
        ]);
    }

    public function show($locale, $slug)
    {
        $lang = substr($locale, 3, 2);
        $blog = Blogs::where('slug', $slug)->first();

        // check if blog is exsit
        // or blog lang not equal with locale
        if (!$blog || $lang != $blog->lang) {
            $lang = $lang == 'id' ? 'en' : 'id';

            if (!$blog || $lang != $blog->lang) {
                abort(404);
            } else {
                return redirect()->route('detail_blog', ['locale' => 'id-'.$lang, 'slug' => $slug]);
            }
        }

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
                // 'updated_at' => $blog->updated_at,
            ]);
        }

        // dd($blog);
        $recomendation_blogs = Blogs::latest()
            ->where('id', '!=', $blog->id)
            ->where('cat_id', $blog->cat_id)
            ->where('blog_status', 'publish')
            ->take(3)->get();

        $blog_widgets =  BlogWidgets::where('blog_id', $blog->id)->get();


        // return $blog->blog_description;
        // Blog Section
        $doc =  new DOMDocument();
        $doc->loadHTML($blog->blog_description, LIBXML_NOERROR);
        $title_list = $doc->getElementsByTagName('h2');


        $blog_section = [];
        foreach ($title_list as $index => $title) {
            $title->setAttribute("id", "blog_title_" . $index);
            $blog_section[] = $title->nodeValue;
        }

        $blog->blog_description = $doc->saveHTML();

        return view('user.detail_blog.main', [
            'locale' => $locale,
            'blog' => $blog,
            "recomendation_blogs" => $recomendation_blogs,
            "blog_section_list" => $blog_section,
            "blog_widgets" =>  $blog_widgets,
        ]);
    }
}
