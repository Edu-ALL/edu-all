<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BlogCategory extends Controller
{
    public function index(){
        return view('admin.blog-category.index');
    }

    public function getBlogCategory(Request $request){
        if ($request->ajax()) {
            $data = BlogCategorys::orderBy('category_name', 'asc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('language', function($d){
                $path = asset('assets/img/flag/flag-'.$d->lang.'.png');
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="30">
                    <p class="pt-1" style="font-size: 13px !important">
                        '.$d->languages->language.'
                    </p>
                ';
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/blog-category/'.$d->group.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog category"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->group.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog category"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['language', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.blog-category.create');
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'category_name_en' => 'required',
            'slug_en' => 'required',
            'category_name_id' => 'required',
            'slug_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_category_en = new BlogCategorys;
            $blog_category_en->group = date('YmdHis');
            $blog_category_en->category_name = $request->category_name_en;
            $blog_category_en->slug = $request->slug_en;
            $blog_category_en->lang = 'en';
            $blog_category_en->save();
            
            $blog_category_id = new BlogCategorys;
            $blog_category_id->group = $blog_category_en->group;
            $blog_category_id->category_name = $request->category_name_id;
            $blog_category_id->slug = $request->slug_id;
            $blog_category_id->lang = 'id';
            $blog_category_id->save();

            DB::commit();
            Log::notice('Blog Category : '.$blog_category_en->category_name.' and '.$blog_category_id->category_name.' has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category')->withSuccess('Blog Category Was Successfully Created');
    }

    public function edit($group){
        $blog_category = BlogCategorys::where('group', $group)->get();
        return view('admin.blog-category.update', ['blog_category' => $blog_category]);
    }

    public function update(Request $request, $group){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'category_name_en' => 'required',
            'slug_en' => 'required',
            'category_name_id' => 'required',
            'slug_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_category = BlogCategorys::where('group', $group)->get();

            $blog_category_en = $blog_category[0];
            $blog_category_en->category_name = $request->category_name_en;
            $blog_category_en->slug = $request->slug_en;
            $blog_category_en->updated_at = date('Y-m-d H:i:s');
            $blog_category_en->save();

            $blog_category_id = $blog_category[1];
            $blog_category_id->category_name = $request->category_name_id;
            $blog_category_id->slug = $request->slug_id;
            $blog_category_id->updated_at = date('Y-m-d H:i:s');
            $blog_category_id->save();

            DB::commit();
            Log::notice('Blog Category : '.$blog_category_en->category_name.' and '.$blog_category_id->category_name.' has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category/'.$group.'/edit')->withSuccess('Blog Category Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $blog_category = BlogCategorys::with('blog')->where('group', $group)->get();
            $category_name = [];
            for ($i=0; $i < $blog_category->count(); $i++) {
                if ($blog_category[$i]->blog->count() == 0) {
                    array_push($category_name, $blog_category[$i]->category_name);
                    $blog_category[$i]->delete();
                } else {
                    return Redirect::back()->withErrors('Delete Blog Category Failed, because it is still used on other Blogs');
                }
            }
            DB::commit();
            Log::notice('Blog Category : '.$category_name[0].' and '.$category_name[1].' has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category')->withSuccess('Blog Category Was Successfully Deleted');
    }
}
