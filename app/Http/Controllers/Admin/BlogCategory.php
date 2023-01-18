<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogCategory extends Controller
{
    public function index(){
        $blog_category = BlogCategorys::get();
        return view('admin.blog-category.index', ['blog_category' => $blog_category]);
    }

    public function create(){
        return view('admin.blog-category.create');
    }

    public function store(Request $request){
        $rules = [
            'category_name_en' => 'required',
            'category_name_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_category_en = new BlogCategorys;
            $blog_category_en->group = date('YmdHis');
            $blog_category_en->category_name = $request->category_name_en;
            $blog_category_en->lang = 'en';
            $blog_category_en->save();

            $blog_category_id = new BlogCategorys;
            $blog_category_id->group = $blog_category_en->group;
            $blog_category_id->category_name = $request->category_name_id;
            $blog_category_id->lang = 'id';
            $blog_category_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category')->withSuccess('Blog Category Was Successfully Created');
    }

    public function edit($group){
        $blog_category = BlogCategorys::where('group', $group)->get();
        return view('admin.blog-category.update', ['blog_category' => $blog_category]);
    }

    public function update(Request $request, $group){
        $rules = [
            'category_name_en' => 'required',
            'category_name_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_category = BlogCategorys::where('group', $group)->get();

            $blog_category_en = $blog_category[0];
            $blog_category_en->category_name = $request->category_name_en;
            $blog_category_en->updated_at = date('Y-m-d H:i:s');
            $blog_category_en->save();

            $blog_category_id = $blog_category[1];
            $blog_category_id->category_name = $request->category_name_id;
            $blog_category_id->updated_at = date('Y-m-d H:i:s');
            $blog_category_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category/'.$group.'/edit')->withSuccess('Blog Category Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $blog_category = BlogCategorys::where('group', $group)->get();
            $blog_category[0]->delete();
            $blog_category[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category')->withSuccess('Blog Category Was Successfully Deleted');
    }
}
