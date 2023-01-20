<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Testimonial extends Controller
{
    public function index(){
        $testimonials = Testimonials::get();
        return view('admin.testimonial.index', ['testimonials' => $testimonials]);
    }

    public function create(){
        return view('admin.testimonial.create');
    }

    public function store(Request $request){
        $rules = [
            'testi_name_en' => 'required',
            'testi_desc_en' => 'required',
            'testi_program_en' => 'required',
            'testi_category_en' => 'required',
            'testi_thumbnail_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt_en' => 'required',
            'testi_name_id' => 'required',
            'testi_desc_id' => 'required',
            'testi_program_id' => 'required',
            'testi_category_id' => 'required',
            'testi_thumbnail_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $testi_en = new Testimonials;
            $testi_en->group = date('YmdHis');
            $testi_en->testi_name = $request->testi_name_en;
            $testi_en->testi_desc = $request->testi_desc_en;
            $testi_en->testi_program = $request->testi_program_en;
            $testi_en->testi_category = $request->testi_category_en;
            if ($request->hasFile('testi_thumbnail_en')) {
                $file_en = $request->file('testi_thumbnail_en');
                $file_format_en = $request->file('testi_thumbnail_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/testimonial';
                $time = $testi_en->group;
                $fileName_en = 'Thumbnail-testi-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $testi_en->testi_thumbnail = $fileName_en;
            }
            $testi_en->testi_alt = $request->testi_alt_en;
            $testi_en->testi_status = 'active';
            $testi_en->lang = 'en';
            $testi_en->save();

            $testi_id = new Testimonials;
            $testi_id->group = $testi_en->group;
            $testi_id->testi_name = $request->testi_name_id;
            $testi_id->testi_desc = $request->testi_desc_id;
            $testi_id->testi_program = $request->testi_program_id;
            $testi_id->testi_category = $request->testi_category_id;
            if ($request->hasFile('testi_thumbnail_id')) {
                $file_id = $request->file('testi_thumbnail_id');
                $file_format_id = $request->file('testi_thumbnail_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/testimonial';
                $time = $testi_id->group;
                $fileName_id = 'Thumbnail-testi-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $testi_id->testi_thumbnail = $fileName_id;
            }
            $testi_id->testi_alt = $request->testi_alt_id;
            $testi_id->testi_status = 'active';
            $testi_id->lang = 'id';
            $testi_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial')->withSuccess('Testimonial Was Successfully Created');
    }

    public function edit($group){
        $testimonial = Testimonials::where('group', $group)->get();
        return view('admin.testimonial.update', ['testimonial' => $testimonial]);
    }

    public function update($group, Request $request){
        $rules = [
            'testi_name_en' => 'required',
            'testi_desc_en' => 'required',
            'testi_program_en' => 'required',
            'testi_category_en' => 'required',
            // 'testi_thumbnail_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt_en' => 'required',
            'testi_name_id' => 'required',
            'testi_desc_id' => 'required',
            'testi_program_id' => 'required',
            'testi_category_id' => 'required',
            // 'testi_thumbnail_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $testi = Testimonials::where('group', $group)->get();
            $testi_en = $testi[0];
            $testi_en->testi_name = $request->testi_name_en;
            $testi_en->testi_desc = $request->testi_desc_en;
            $testi_en->testi_program = $request->testi_program_en;
            $testi_en->testi_category = $request->testi_category_en;
            if ($request->hasFile('testi_thumbnail_en')) {
                if ($old_image_path_en = $testi_en->testi_thumbnail) {
                    $file_path = public_path('uploaded_files/testimonial/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('testi_thumbnail_en');
                $file_format_en = $request->file('testi_thumbnail_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/testimonial';
                $time = $testi_en->group;
                $fileName_en = 'Thumbnail-testi-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $testi_en->testi_thumbnail = $fileName_en;
            }
            $testi_en->testi_alt = $request->testi_alt_en;
            $testi_en->updated_at = date('Y-m-d H:i:s');
            $testi_en->save();

            $testi_id = $testi[1];
            $testi_id->testi_name = $request->testi_name_id;
            $testi_id->testi_desc = $request->testi_desc_id;
            $testi_id->testi_program = $request->testi_program_id;
            $testi_id->testi_category = $request->testi_category_id;
            if ($request->hasFile('testi_thumbnail_id')) {
                if ($old_image_path_id = $testi_id->testi_thumbnail) {
                    $file_path = public_path('uploaded_files/testimonial/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('testi_thumbnail_id');
                $file_format_id = $request->file('testi_thumbnail_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/testimonial';
                $time = $testi_id->group;
                $fileName_id = 'Thumbnail-testi-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $testi_id->testi_thumbnail = $fileName_id;
            }
            $testi_id->testi_alt = $request->testi_alt_id;
            $testi_id->updated_at = date('Y-m-d H:i:s');
            $testi_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial/'.$group.'/edit')->withSuccess('Testimonial Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $testi = Testimonials::where('group', $group)->get();
            if ($old_image_path_en = $testi[0]->testi_thumbnail) {
                $file_path_en = public_path('uploaded_files/testimonial/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $testi[1]->testi_thumbnail) {
                $file_path_id = public_path('uploaded_files/testimonial/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $testi[0]->delete();
            $testi[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial')->withSuccess('Testimonial Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $testi = Testimonials::where('group', $group)->get();
            $testi[0]->testi_status = 'inactive';
            $testi[1]->testi_status = 'inactive';
            $testi[0]->save();
            $testi[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $testi = Testimonials::where('group', $group)->get();
            $testi[0]->testi_status = 'active';
            $testi[1]->testi_status = 'active';
            $testi[0]->save();
            $testi[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial');
    }
}
