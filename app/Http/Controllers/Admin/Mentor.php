<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use App\Models\MentorVideos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Mentor extends Controller
{
    public function index(){
        $mentors = Mentors::get();
        return view('admin.mentor.index', ['mentors' => $mentors]);
    }

    public function create(){
        return view('admin.mentor.create');
    }

    public function store(Request $request){
        $rules = [
            'mentor_firstname_en' => 'required',
            'mentor_lastname_en' => 'required',
            'mentor_graduation_en' => 'required',
            'mentor_currently_working_en' => 'nullable',
            'mentor_expertise_en' => 'nullable',
            'mentor_description_en' => 'required',
            'mentor_short_description_en' => 'required',
            'mentor_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt_en' => 'required',
            'mentor_firstname_id' => 'required',
            'mentor_lastname_id' => 'required',
            'mentor_graduation_id' => 'required',
            'mentor_currently_working_id' => 'nullable',
            'mentor_expertise_id' => 'nullable',
            'mentor_description_id' => 'required',
            'mentor_short_description_id' => 'required',
            'mentor_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_en = new Mentors();
            $mentor_en->group = date('YmdHis');
            $mentor_en->mentor_firstname = $request->mentor_firstname_en;
            $mentor_en->mentor_lastname = $request->mentor_lastname_en;
            $mentor_en->mentor_graduation = $request->mentor_graduation_en;
            $mentor_en->currently_working = $request->mentor_currently_working_en;
            $mentor_en->expertise = $request->mentor_expertise_en;
            $mentor_en->description = $request->mentor_description_en;
            $mentor_en->short_desc = $request->mentor_short_description_en;
            if ($request->hasFile('mentor_image_en')) {
                $file_id = $request->file('mentor_image_en');
                $file_format_id = $request->file('mentor_image_en')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/mentor';
                $time = $mentor_en->group;
                $fileName_id = 'Mentor-picture-en-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $mentor_en->mentor_picture = $fileName_id;
            }
            $mentor_en->mentor_alt = $request->mentor_alt_en;
            $mentor_en->mentor_status = 'active';
            $mentor_en->lang = 'en';
            $mentor_en->save();

            $mentor_id = new Mentors();
            $mentor_id->group = $mentor_en->group;
            $mentor_id->mentor_firstname = $request->mentor_firstname_id;
            $mentor_id->mentor_lastname = $request->mentor_lastname_id;
            $mentor_id->mentor_graduation = $request->mentor_graduation_id;
            $mentor_id->currently_working = $request->mentor_currently_working_id;
            $mentor_id->expertise = $request->mentor_expertise_id;
            $mentor_id->description = $request->mentor_description_id;
            $mentor_id->short_desc = $request->mentor_short_description_id;
            if ($request->hasFile('mentor_image_id')) {
                $file_id = $request->file('mentor_image_id');
                $file_format_id = $request->file('mentor_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/mentor';
                $time = $mentor_id->group;
                $fileName_id = 'Mentor-picture-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $mentor_id->mentor_picture = $fileName_id;
            }
            $mentor_id->mentor_alt = $request->mentor_alt_id;
            $mentor_id->mentor_status = 'active';
            $mentor_id->lang = 'id';
            $mentor_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$mentor_en->group.'/view')->withSuccess('Mentor Was Successfully Created');
    }

    public function view($group){
        if (!Mentors::where('group', $group)->first('id')) {
            return redirect('/admin/mentor')->withErrors('Mentor Cannot Be Found');
        }
        $mentor = Mentors::where('group', $group)->get();
        $mentor_video = MentorVideos::where('mentor_id', $group)->get();
        return view('admin.mentor.view', [
            'mentor' => $mentor,
            'mentor_videos' => $mentor_video,
        ]);
    }

    public function edit($group){
        $mentor = Mentors::where('group', $group)->get();
        return view('admin.mentor.update', ['mentor' => $mentor]);
    }

    public function update($group, Request $request){
        $rules = [
            'mentor_firstname_en' => 'required',
            'mentor_lastname_en' => 'required',
            'mentor_graduation_en' => 'required',
            'mentor_currently_working_en' => 'nullable',
            'mentor_expertise_en' => 'nullable',
            'mentor_description_en' => 'required',
            'mentor_short_description_en' => 'required',
            'mentor_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt_en' => 'required',
            'mentor_firstname_id' => 'required',
            'mentor_lastname_id' => 'required',
            'mentor_graduation_id' => 'required',
            'mentor_currently_working_id' => 'nullable',
            'mentor_expertise_id' => 'nullable',
            'mentor_description_id' => 'required',
            'mentor_short_description_id' => 'required',
            'mentor_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor_en = $mentor[0];
            $mentor_en->mentor_firstname = $request->mentor_firstname_en;
            $mentor_en->mentor_lastname = $request->mentor_lastname_en;
            $mentor_en->mentor_graduation = $request->mentor_graduation_en;
            $mentor_en->currently_working = $request->mentor_currently_working_en;
            $mentor_en->expertise = $request->mentor_expertise_en;
            $mentor_en->description = $request->mentor_description_en;
            $mentor_en->short_desc = $request->mentor_short_description_en;
            if ($request->hasFile('mentor_image_en')) {
                if ($old_image_path_en = $mentor_en->mentor_picture) {
                    $file_path = public_path('uploaded_files/mentor/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('mentor_image_en');
                $file_format_id = $request->file('mentor_image_en')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/mentor';
                $time = $mentor_en->group;
                $fileName_id = 'Mentor-picture-en-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $mentor_en->mentor_picture = $fileName_id;
            }
            $mentor_en->mentor_alt = $request->mentor_alt_en;
            $mentor_en->updated_at = date('Y-m-d H:i:s');
            $mentor_en->save();

            $mentor_id = $mentor[1];
            $mentor_id->mentor_firstname = $request->mentor_firstname_id;
            $mentor_id->mentor_lastname = $request->mentor_lastname_id;
            $mentor_id->mentor_graduation = $request->mentor_graduation_id;
            $mentor_id->currently_working = $request->mentor_currently_working_id;
            $mentor_id->expertise = $request->mentor_expertise_id;
            $mentor_id->description = $request->mentor_description_id;
            $mentor_id->short_desc = $request->mentor_short_description_id;
            if ($request->hasFile('mentor_image_id')) {
                if ($old_image_path_id = $mentor_id->mentor_picture) {
                    $file_path = public_path('uploaded_files/mentor/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('mentor_image_id');
                $file_format_id = $request->file('mentor_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/mentor';
                $time = $mentor_id->group;
                $fileName_id = 'Mentor-picture-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $mentor_id->mentor_picture = $fileName_id;
            }
            $mentor_id->mentor_alt = $request->mentor_alt_id;
            $mentor_id->updated_at = date('Y-m-d H:i:s');
            $mentor_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$mentor_en->group.'/view')->withSuccess('Mentor Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            if ($old_image_path_en = $mentor[0]->mentor_picture) {
                $file_path_en = public_path('uploaded_files/mentor/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $mentor[1]->mentor_picture) {
                $file_path_id = public_path('uploaded_files/mentor/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $mentor[0]->delete();
            $mentor[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor')->withSuccess('Mentor Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor[0]->mentor_status = 'inactive';
            $mentor[1]->mentor_status = 'inactive';
            $mentor[0]->save();
            $mentor[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor[0]->mentor_status = 'active';
            $mentor[1]->mentor_status = 'active';
            $mentor[0]->save();
            $mentor[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor');
    }
}
