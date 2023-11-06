<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogWidgets;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogWidget extends Controller
{
    public function store(Request $request, $id){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'title' => 'required',
            'description' => 'required',
            'position' => 'required',
            'link' => 'required|url'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_widget = new BlogWidgets();
            $blog_widget->blog_id = $id;
            $blog_widget->title = $request->title;
            $blog_widget->description = $request->description;
            $blog_widget->position = $request->position;
            $blog_widget->link = $request->link;
            $blog_widget->image = $request->image;
            $blog_widget->button_name = $request->button_name;
            $blog_widget->save();
            DB::commit();
            Log::notice('Blog Widget : "'.$blog_widget->title.'" has been successfully Created');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Blog Widget failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$id.'/view')->withSuccess('Blog Widget Was Successfully Created');
    }

    public function edit($group){
        
    }

    public function update(Request $request, $blog_id, $id){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'title' => 'required',
            'description' => 'required',
            'position' => 'required',
            'link' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_widget = BlogWidgets::find($id);
            $blog_widget->title = $request->title;
            $blog_widget->description = $request->description;
            $blog_widget->position = $request->position;
            $blog_widget->link = $request->link;
            $blog_widget->image = $request->image;
            $blog_widget->button_name = $request->button_name;
            $blog_widget->save();
            DB::commit();
            Log::notice('Blog Widget : "'.$blog_widget->title.'" has been successfully Updated');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Blog Widget failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$blog_id.'/view')->withSuccess('Blog Widget Was Successfully Updated');
    }

    public function delete($blog_id, $id){
        DB::beginTransaction();
        try {
            $blog_widget = BlogWidgets::find($id);
            $blog_widget_title = $blog_widget->title;
            $blog_widget->delete();
            DB::commit();
            Log::notice('Blog Widget : "'.$blog_widget_title.'" has been successfully Deleted');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Blog Widget failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$blog_id.'/view')->withSuccess('Blog Widget Was Successfully Deleted');
    }
}
