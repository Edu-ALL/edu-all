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
            'category_name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_category = new BlogCategorys;
            $blog_category->category_name = $request->category_name;
            $blog_category->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category');
    }

    public function edit($id){
        $blog_category = BlogCategorys::find($id);
        return view('admin.blog-category.update', ['blog_category' => $blog_category]);
    }

    public function update(Request $request, $id){
        $rules = [
            'category_name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_category = BlogCategorys::find($id);
            $blog_category->category_name = $request->category_name;
            $blog_category->updated_at = date('Y-m-d H:i:s');
            $blog_category->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category/'.$id.'/edit');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $blog_category = BlogCategorys::find($id);
            $blog_category->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blog-category');
    }
}
