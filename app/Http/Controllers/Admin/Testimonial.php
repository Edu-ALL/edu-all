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
            'testi_thumbnail_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt_en' => 'required',
            'testi_name_id' => 'required',
            'testi_desc_id' => 'required',
            'testi_program_id' => 'required',
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
            $testi_id->lang = 'en';
            $testi_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial');
    }

    public function edit($group){
        
    }

    public function update($group, Request $request){
        
    }

    public function delete($group){
        
    }
}
