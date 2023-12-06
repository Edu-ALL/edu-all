<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSettings;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class WebsiteSetting extends Controller
{
    public function index(){
        $data = WebsiteSettings::first();
        return view('admin.website-setting.index', [
            'data' => $data,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function update(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'website_name' => 'required',
            'primary_logo' => 'nullable|image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'secondary_logo' => 'nullable|image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt_primary_logo' => 'nullable',
            'alt_secondary_logo' => 'nullable',
            'phone_number_wa' => 'required',
            'phone_number_1' => 'required',
            'phone_number_2' => 'nullable',
            'phone_number_3' => 'nullable',
            'address' => 'required',
            'email' => 'required',
            'linkedin' => 'required|url',
            'instagram' => 'required|url',
            'youtube' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $data = WebsiteSettings::first();
            $data->website_name = $request->website_name;
            if ($request->hasFile('primary_logo')) {
                if ($old_image_path = $data->website_primary_logo) {
                    $file_path = public_path('uploaded_files/'.'website-settings/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('primary_logo');
                $file_format = $request->file('primary_logo')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'website-settings/';
                $time = date('YmdHis');
                $fileName = 'Logo-Primary-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $data->website_primary_logo = $fileName;
            }
            if ($request->hasFile('secondary_logo')) {
                if ($old_image_path = $data->website_secondary_logo) {
                    $file_path = public_path('uploaded_files/'.'website-settings/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('secondary_logo');
                $file_format = $request->file('secondary_logo')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'website-settings/';
                $time = date('YmdHis');
                $fileName = 'Logo-Secondary-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $data->website_secondary_logo = $fileName;
            }
            $data->alt_primary_logo = $request->alt_primary_logo;
            $data->alt_secondary_logo = $request->alt_secondary_logo;
            $data->phone_number_wa = $request->phone_number_wa;
            $data->phone_number_1 = $request->phone_number_1;
            $data->phone_number_2 = $request->phone_number_2;
            $data->phone_number_3 = $request->phone_number_3;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->linkedin = $request->linkedin;
            $data->instagram = $request->instagram;
            $data->youtube_channel = $request->youtube;
            $data->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withInput()->withErrors($e->getMessage());
        }
        return redirect('/admin/settings')->withSuccess('Website Settings Was Successfully Updated');
    }
}
