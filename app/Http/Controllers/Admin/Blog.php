<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use App\Models\BlogReads;
use App\Models\Blogs;
use App\Models\BlogWidgets;
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
        $blogs = Blogs::orderBy('updated_at', 'desc')->get();
        $blogcategory = BlogCategorys::get();
        // $this->checkPublish();
        return view('admin.blog.index', [
            'blogs' => $blogs,
            'blogcategory' => $blogcategory
        ]);
    }

    public function checkPublish(){
        $blogs = Blogs::where('blog_status', 'draft')->get();
        foreach ($blogs as $blog) {
            if ($blog->publish_date == date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $blog->blog_status = 'publish';
                    $blog->save();
                    DB::commit();
                } catch (Exception $e) {
                    DB::rollBack();
                    return Redirect::back()->withErrors($e->getMessage());
                }
            }
        }
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
            'lang' => 'required',
            'category' => 'required',
            'mentor' => 'nullable',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
            'duration_read' => 'required',
            'publish_date' => 'nullable',
            'blog_status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blogs = new Blogs();
            if ($request->hasFile('blog_thumbnail')) {
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'blogs/'.date('Y').'/'.date('m').'/';
                $time = date('YmdHis');
                $fileName = 'Blogs-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $blogs->blog_thumbnail = $fileName;
            }
            $blogs->blog_thumbnail_alt = $request->blog_alt;
            $blogs->cat_id = $request->category;
            $blogs->mt_id = $request->mentor;
            $blogs->blog_title = $request->blog_title;
            $blogs->slug = $request->blog_slug;
            // $blogs->blog_description = str_replace('<p>&nbsp;</p>', '<br>', $request->blog_description);
            $blogs->blog_description = $request->blog_description;
            $blogs->seo_title = $request->seo_title;
            $blogs->seo_keyword = $request->seo_keyword;
            $blogs->seo_desc = $request->seo_desc;
            $blogs->blog_status = $request->blog_status;
            $blogs->lang = $request->lang;
            $blogs->click_count = 0;
            $blogs->duration_read = $request->duration_read;
            $blogs->is_highlight = 'false';
            if ($request->blog_status == 'publish'){
                $blogs->publish_date = date('Y-m-d H:i:s');
            } else if ($request->blog_status == 'draft' && $request->publish_date != null) {
                $blogs->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date == null) {
                $blogs->publish_date = null;
            }
            $blogs->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$blogs->id.'/view')->withSuccess('Blogs Was Successfully Created');
    }

    public function view($id){
        $blog = Blogs::find($id);
        return view('admin.blog.view', [
            'blog' => $blog,
        ]);
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
            'blog_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'mentor' => 'nullable',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
            'duration_read' => 'required',
            'publish_date' => 'nullable',
            'blog_status' => 'required',
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
                    $file_path = public_path('uploaded_files/'.'blogs/'.$blogs->created_at->format('Y').'/'.$blogs->created_at->format('m').'/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'blogs/'.$blogs->created_at->format('Y').'/'.$blogs->created_at->format('m').'/';
                $time = date('YmdHis');
                $fileName = 'Blogs-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $blogs->blog_thumbnail = $fileName;
            }
            $blogs->blog_thumbnail_alt = $request->blog_alt;
            $blogs->cat_id = $request->category;
            $blogs->mt_id = $request->mentor;
            $blogs->blog_title = $request->blog_title;
            $blogs->slug = $request->blog_slug;
            // $blogs->blog_description = str_replace('<p>&nbsp;</p>', '<br>', $request->blog_description);
            $blogs->blog_description = $request->blog_description;
            $blogs->seo_title = $request->seo_title;
            $blogs->seo_keyword = $request->seo_keyword;
            $blogs->seo_desc = $request->seo_desc;
            $blogs->blog_status = $request->blog_status;
            $blogs->lang = $request->lang;
            $blogs->click_count = 0;
            $blogs->duration_read = $request->duration_read;
            $blogs->is_highlight = 'false';
            if ($request->blog_status == 'publish'){
                $blogs->publish_date = date('Y-m-d H:i:s');
            } else if ($request->blog_status == 'draft' && $request->publish_date != null) {
                $blogs->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date == null) {
                $blogs->publish_date = null;
            }
            $blogs->updated_at = date('Y-m-d H:i:s');
            $blogs->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$id.'/view')->withSuccess('Blogs Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            if ($old_image_path = $blog->blog_thumbnail) {
                $file_path = public_path('uploaded_files/'.'blogs/'.$blog->created_at->format('Y').'/'.$blog->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $blog_widget = BlogWidgets::where('blog_id', $blog->id)->get();
            foreach ($blog_widget as $widget) {
                $widget->delete();
            }
            $blog_read = BlogReads::where('blog_id', $blog->id)->get();
            foreach ($blog_read as $read) {
                $read->delete();
            }
            $blog->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs')->withSuccess('Blogs Was Successfully Deleted');
    }

    public function status_draft($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'draft';
            $blog->publish_date = null;
            $blog->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function status_publish($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'publish';
            $blog->publish_date = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function set_highlight($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            if ($blog->is_highlight == 'false'){
                $blog->is_highlight = 'true';
            } else {
                $blog->is_highlight = 'false';
            }
            $blog->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }
}
