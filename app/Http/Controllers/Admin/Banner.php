<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Banner extends Controller
{
    public function index(){
        $banners = Banners::get();
        return view('admin.banner.index', ['banners' => $banners]);
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function store(Request $request){
        $rules = [
            'banner_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt_en' => 'required',
            'banner_title_en' => 'required|max:255',
            'banner_description_en' => 'required',
            'banner_button_en' => 'required',
            'banner_link_en' => 'required|url',
            'banner_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt_id' => 'required',
            'banner_title_id' => 'required|max:255',
            'banner_description_id' => 'required',
            'banner_button_id' => 'required',
            'banner_link_id' => 'required|url'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $banner_en = new Banners;
            $banner_en->group = date('YmdHis');
            if ($request->hasFile('banner_image_en')) {
                $file_en = $request->file('banner_image_en');
                $file_format_en = $request->file('banner_image_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/banner';
                $time = $banner_en->group;
                $fileName_en = 'Banner-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $banner_en->banner_img = $fileName_en;
            }
            $banner_en->banner_alt = $request->banner_alt_en;
            $banner_en->banner_title = $request->banner_title_en;
            $banner_en->banner_description = $request->banner_description_en;
            $banner_en->banner_button = $request->banner_button_en;
            $banner_en->banner_link = $request->banner_link_en;
            $banner_en->banner_status = 'active';
            $banner_en->lang = 'en';
            $banner_en->save();

            $banner_id = new Banners;
            $banner_id->group = $banner_en->group;
            if ($request->hasFile('banner_image_id')) {
                $file_id = $request->file('banner_image_id');
                $file_format_id = $request->file('banner_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/banner';
                $time = $banner_id->group;
                $fileName_id = 'Banner-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $banner_id->banner_img = $fileName_id;
            }
            $banner_id->banner_alt = $request->banner_alt_id;
            $banner_id->banner_title = $request->banner_title_id;
            $banner_id->banner_description = $request->banner_description_id;
            $banner_id->banner_button = $request->banner_button_id;
            $banner_id->banner_link = $request->banner_link_id;
            $banner_id->banner_status = 'active';
            $banner_id->lang = 'id';
            $banner_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner')->withSuccess('Banner Was Successfully Created');
    }

    public function edit($group){
        $banner = Banners::where('group', $group)->get();
        return view('admin.banner.update', ['banner' => $banner]);
    }

    public function update($group, Request $request){
        $rules = [
            'banner_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt_en' => 'required',
            'banner_title_en' => 'required|max:255',
            'banner_description_en' => 'required',
            'banner_button_en' => 'required',
            'banner_link_en' => 'required|url',
            'banner_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt_id' => 'required',
            'banner_title_id' => 'required|max:255',
            'banner_description_id' => 'required',
            'banner_button_id' => 'required',
            'banner_link_id' => 'required|url'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $banners = Banners::where('group', $group)->get();
            $banner_en = $banners[0];
            if ($request->hasFile('banner_image_en')) {
                if ($old_image_path_en = $banner_en->banner_img) {
                    $file_path = public_path('uploaded_files/banner/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('banner_image_en');
                $file_format_en = $request->file('banner_image_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/banner';
                $time = $banner_en->group;
                $fileName_en = 'Banner-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $banner_en->banner_img = $fileName_en;
            }
            $banner_en->banner_alt = $request->banner_alt_en;
            $banner_en->banner_title = $request->banner_title_en;
            $banner_en->banner_description = $request->banner_description_en;
            $banner_en->banner_button = $request->banner_button_en;
            $banner_en->banner_link = $request->banner_link_en;
            $banner_en->updated_at = date('Y-m-d H:i:s');
            $banner_en->save();

            $banner_id = $banners[1];
            if ($request->hasFile('banner_image_id')) {
                if ($old_image_path_id = $banner_id->banner_img) {
                    $file_path = public_path('uploaded_files/banner/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('banner_image_id');
                $file_format_id = $request->file('banner_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/banner';
                $time = $banner_id->group;
                $fileName_id = 'Banner-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $banner_id->banner_img = $fileName_id;
            }
            $banner_id->banner_alt = $request->banner_alt_id;
            $banner_id->banner_title = $request->banner_title_id;
            $banner_id->banner_description = $request->banner_description_id;
            $banner_id->banner_button = $request->banner_button_id;
            $banner_id->banner_link = $request->banner_link_id;
            $banner_id->updated_at = date('Y-m-d H:i:s');
            $banner_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner/'.$group.'/edit')->withSuccess('Banner Was Successfully Updated');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $banners = Banners::where('group', $group)->get();
            $banners[0]->banner_status = 'inactive';
            $banners[1]->banner_status = 'inactive';
            $banners[0]->save();
            $banners[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $banners = Banners::where('group', $group)->get();
            $banners[0]->banner_status = 'active';
            $banners[1]->banner_status = 'active';
            $banners[0]->save();
            $banners[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $banners = Banners::where('group', $group)->get();
            if ($old_image_path_en = $banners[0]->banner_img) {
                $file_path_en = public_path('uploaded_files/banner/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $banners[1]->banner_img) {
                $file_path_id = public_path('uploaded_files/banner/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $banners[0]->delete();
            $banners[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner')->withSuccess('Banner Was Successfully Deleted');
    }
}
