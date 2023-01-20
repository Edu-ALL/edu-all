<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\Blogs;
use App\Models\Mentors;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Blog extends Controller
{
    public function index(){
        $blogs = Blogs::get();
        $blogcategory = BlogCategorys::get();
        return view('admin.blog.index', [
            'blogs' => $blogs,
            'blogcategory' => $blogcategory
        ]);
    }

    public function create(){
        $category_en = BlogCategorys::where('lang', 'en')->get();
        $category_id = BlogCategorys::where('lang', 'id')->get();
        $mentor_en = Mentors::where('lang', 'en')->get();
        $mentor_id = Mentors::where('lang', 'id')->get();
        return view('admin.blog.create', [
            'category_en' => $category_en,
            'category_id' => $category_id,
            'mentor_en' => $mentor_en,
            'mentor_id' => $mentor_id,
        ]);
    }

    public function store(Request $request){
        $rules = [
            'blog_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'category' => 'required',
            'mentor' => 'nullable',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blogs = new Blogs();
            if ($request->hasFile('blog_thumbnail')) {
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/blogs';
                $time = date('YmdHis');
                $fileName = 'Thumbnail-blogs-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $blogs->blog_thumbnail = $fileName;
            }
            $blogs->blog_thumbnail_alt = $request->blog_alt;
            $blogs->cat_id = $request->category;
            $blogs->mt_id = $request->mentor;
            $blogs->blog_title = $request->blog_title;
            $blogs->slug = $request->blog_slug;
            $blogs->blog_description = $request->blog_description;
            $blogs->seo_title = $request->seo_title;
            $blogs->seo_keyword = $request->seo_keyword;
            $blogs->seo_desc = $request->seo_desc;
            $blogs->blog_status = 'active';
            $blogs->lang = $request->lang;
            
            $blogs->click_count = 0;
            $blogs->duration_read = 0;

            $blogs->save();
            // dd($blogs);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs')->withSuccess('Blogs Was Successfully Created');
    }

    public function edit($id){
        $blog = Blogs::find($id);
        $category_en = BlogCategorys::where('lang', 'en')->get();
        $category_id = BlogCategorys::where('lang', 'id')->get();
        $mentor_en = Mentors::where('lang', 'en')->get();
        $mentor_id = Mentors::where('lang', 'id')->get();
        return view('admin.blog.update', [
            'blog' => $blog,
            'category_en' => $category_en,
            'category_id' => $category_id,
            'mentor_en' => $mentor_en,
            'mentor_id' => $mentor_id,
        ]);
    }

    public function update($id, Request $request){
        $rules = [
            // 'blog_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'category' => 'required',
            'mentor' => 'nullable',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blogs = Blogs::find($id);
            if ($request->hasFile('blog_thumbnail')) {
                if ($old_image_path_en = $blogs->blog_thumbnail) {
                    $file_path = public_path('uploaded_files/blogs/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/blogs';
                $time = date('YmdHis');
                $fileName = 'Thumbnail-blogs-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $blogs->blog_thumbnail = $fileName;
            }
            $blogs->blog_thumbnail_alt = $request->blog_alt;
            $blogs->cat_id = $request->category;
            $blogs->mt_id = $request->mentor;
            $blogs->blog_title = $request->blog_title;
            $blogs->slug = $request->blog_slug;
            $blogs->blog_description = $request->blog_description;
            $blogs->seo_title = $request->seo_title;
            $blogs->seo_keyword = $request->seo_keyword;
            $blogs->seo_desc = $request->seo_desc;
            $blogs->lang = $request->lang;
            $blogs->updated_at = date('Y-m-d H:i:s');
            $blogs->save();
            // dd($blogs);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$id.'/edit')->withSuccess('Blogs Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs')->withSuccess('Blogs Was Successfully Deleted');
    }

    public function deactivate($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'inactive';
            $blog->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function activate($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'active';
            $blog->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }
}
