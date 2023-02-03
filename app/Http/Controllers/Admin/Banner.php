<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Languages;
use App\Models\Regions;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Banner extends Controller
{
    public function index(){
        $banners = Banners::with('regions', 'languages')->get();
        return view('admin.banner.index', ['banners' => $banners]);
    }

    public function create(){
        return view('admin.banner.create', [
            'regions' => Regions::get(),
            'languages' => Languages::get(),
        ]);
    }

    public function store(Request $request){
        $rules = [
            'banner_image' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt' => 'required',
            'banner_title' => 'required|max:255',
            'banner_description' => 'required',
            'banner_button' => 'required',
            'banner_link' => 'required|url',
            'region' => 'required',
            'lang' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $banner = new Banners;
            $banner->group = date('YmdHis');
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $file_format = $request->file('banner_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/banner';
                $time = $banner->group;
                $fileName = 'Banner-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $banner->banner_img = $fileName;
            }
            $banner->banner_alt = $request->banner_alt;
            $banner->banner_title = $request->banner_title;
            $banner->banner_description = $request->banner_description;
            $banner->banner_button = $request->banner_button;
            $banner->banner_link = $request->banner_link;
            $banner->banner_status = 'active';
            $banner->region = $request->region;
            $banner->lang = $request->lang;
            $banner->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner')->withSuccess('Banner Was Successfully Created');
    }

    public function edit($id){
        $banner = Banners::with('regions', 'languages')->find($id);
        return view('admin.banner.update', [
            'banner' => $banner,
            'regions' => Regions::get(),
            'languages' => Languages::get(),
        ]);
    }

    public function update($id, Request $request){
        $rules = [
            // 'banner_image' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt' => 'required',
            'banner_title' => 'required|max:255',
            'banner_description' => 'required',
            'banner_button' => 'required',
            'banner_link' => 'required|url',
            'region' => 'required',
            'lang' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            if ($request->hasFile('banner_image')) {
                if ($old_image_path = $banner->banner_img) {
                    $file_path = public_path('uploaded_files/banner/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('banner_image');
                $file_format = $request->file('banner_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/banner';
                $time = $banner->group;
                $fileName = 'Banner-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $banner->banner_img = $fileName;
            }
            $banner->banner_alt = $request->banner_alt;
            $banner->banner_title = $request->banner_title;
            $banner->banner_description = $request->banner_description;
            $banner->banner_button = $request->banner_button;
            $banner->banner_link = $request->banner_link;
            $banner->region = $request->region;
            $banner->lang = $request->lang;
            $banner->updated_at = date('Y-m-d H:i:s');
            $banner->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner/'.$id.'/edit')->withSuccess('Banner Was Successfully Updated');
    }

    public function deactivate($id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            $banner->banner_status = 'inactive';
            $banner->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner');
    }

    public function activate($id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            $banner->banner_status = 'active';
            $banner->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            if ($old_image_path = $banner->banner_img) {
                $file_path = public_path('uploaded_files/banner/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $banner->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner')->withSuccess('Banner Was Successfully Deleted');
    }
}
