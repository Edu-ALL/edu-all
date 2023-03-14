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
        $mentors = Mentors::orderBy('updated_at', 'desc')->get();
        return view('admin.mentor.index', ['mentors' => $mentors]);
    }

    public function create(){
        return view('admin.mentor.create');
    }

    public function store(Request $request){
        $rules = [
            'mentor_image' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt' => 'required',
            'mentor_fullname' => 'required|max:24',
            'mentor_slug' => 'required',
            'mentor_category' => 'required',
            'mentor_graduation_en' => 'required',
            'mentor_currently_working_en' => 'nullable',
            'mentor_expertise_en' => 'nullable',
            'mentor_description_en' => 'required',
            'mentor_short_description_en' => 'required',
            'mentor_graduation_id' => 'required',
            'mentor_currently_working_id' => 'nullable',
            'mentor_expertise_id' => 'nullable',
            'mentor_description_id' => 'required',
            'mentor_short_description_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_en = new Mentors();
            $mentor_en->group = date('YmdHis');
            $mentor_en->mentor_fullname = $request->mentor_fullname;
            $mentor_en->mentor_slug = $request->mentor_slug;
            $mentor_en->mentor_category = $request->mentor_category;
            $mentor_en->mentor_alt = $request->mentor_alt;
            $mentor_en->mentor_graduation = $request->mentor_graduation_en;
            $mentor_en->currently_working = $request->mentor_currently_working_en;
            $mentor_en->expertise = $request->mentor_expertise_en;
            $mentor_en->description = $request->mentor_description_en;
            $mentor_en->short_desc = $request->mentor_short_description_en;
            $mentor_en->mentor_status = 'active';
            $mentor_en->lang = 'en';

            $mentor_id = new Mentors();
            $mentor_id->group = $mentor_en->group;
            $mentor_id->mentor_fullname = $request->mentor_fullname;
            $mentor_id->mentor_slug = $request->mentor_slug;
            $mentor_id->mentor_category = $request->mentor_category;
            $mentor_id->mentor_alt = $request->mentor_alt;
            $mentor_id->mentor_graduation = $request->mentor_graduation_id;
            $mentor_id->currently_working = $request->mentor_currently_working_id;
            $mentor_id->expertise = $request->mentor_expertise_id;
            $mentor_id->description = $request->mentor_description_id;
            $mentor_id->short_desc = $request->mentor_short_description_id;
            $mentor_id->mentor_status = 'active';
            $mentor_id->lang = 'id';

            if ($request->hasFile('mentor_image')) {
                $file = $request->file('mentor_image');
                $file_format = $request->file('mentor_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'mentor/'.date('Y').'/'.date('m').'/';
                $time = $mentor_en->group;
                $fileName = 'Mentor-picture-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $mentor_en->mentor_picture = $fileName;
                $mentor_id->mentor_picture = $fileName;
            }

            $mentor_en->save();
            $mentor_id->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$mentor_en->group.'/view')->withSuccess('Mentor Was Successfully Created');
    }

    public function view($group){
        if (!Mentors::where('group', $group)->first('id')) {
            return redirect('/admin/mentor')->withErrors('Mentor Cannot Be Found');
        }
        $mentor = Mentors::where('group', $group)->get();
        $mentor_video = MentorVideos::where('mentor_id', $group)->orderBy('updated_at', 'desc')->get();
        return view('admin.mentor.view', [
            'mentor' => $mentor,
            'mentor_video' => $mentor_video,
        ]);
    }

    public function edit($group){
        $mentor = Mentors::where('group', $group)->get();
        return view('admin.mentor.update', ['mentor' => $mentor]);
    }

    public function update($group, Request $request){
        $rules = [
            'mentor_image' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt' => 'required',
            'mentor_fullname' => 'required|max:24',
            'mentor_slug' => 'required',
            'mentor_category' => 'required',
            'mentor_graduation_en' => 'required',
            'mentor_currently_working_en' => 'nullable',
            'mentor_expertise_en' => 'nullable',
            'mentor_description_en' => 'required',
            'mentor_short_description_en' => 'required',
            'mentor_graduation_id' => 'required',
            'mentor_currently_working_id' => 'nullable',
            'mentor_expertise_id' => 'nullable',
            'mentor_description_id' => 'required',
            'mentor_short_description_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor_en = $mentor[0];
            $mentor_en->mentor_fullname = $request->mentor_fullname;
            $mentor_en->mentor_slug = $request->mentor_slug;
            $mentor_en->mentor_category = $request->mentor_category;
            $mentor_en->mentor_graduation = $request->mentor_graduation_en;
            $mentor_en->currently_working = $request->mentor_currently_working_en;
            $mentor_en->expertise = $request->mentor_expertise_en;
            $mentor_en->description = $request->mentor_description_en;
            $mentor_en->short_desc = $request->mentor_short_description_en;
            $mentor_en->mentor_alt = $request->mentor_alt;
            $mentor_en->updated_at = date('Y-m-d H:i:s');

            $mentor_id = $mentor[1];
            $mentor_id->mentor_fullname = $request->mentor_fullname;
            $mentor_id->mentor_slug = $request->mentor_slug;
            $mentor_id->mentor_category = $request->mentor_category;
            $mentor_id->mentor_graduation = $request->mentor_graduation_id;
            $mentor_id->currently_working = $request->mentor_currently_working_id;
            $mentor_id->expertise = $request->mentor_expertise_id;
            $mentor_id->description = $request->mentor_description_id;
            $mentor_id->short_desc = $request->mentor_short_description_id;
            $mentor_id->mentor_alt = $request->mentor_alt;
            $mentor_id->updated_at = date('Y-m-d H:i:s');

            if ($request->hasFile('mentor_image')) {
                if ($mentor_en->mentor_picture == $mentor_id->mentor_picture) {
                    $old_image_path = $mentor_en->mentor_picture;
                    $file_path = public_path('uploaded_files/'.'mentor/'.$mentor_en->created_at->format('Y').'/'.$mentor_en->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('mentor_image');
                $file_format = $request->file('mentor_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'mentor/'.$mentor_en->created_at->format('Y').'/'.$mentor_en->created_at->format('m').'/';
                $time = $mentor_en->group;
                $fileName = 'Mentor-picture-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $mentor_en->mentor_picture = $fileName;
                $mentor_id->mentor_picture = $fileName;
            }

            $mentor_en->save();
            $mentor_id->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$mentor_en->group.'/view')->withSuccess('Mentor Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            if ($mentor[0]->blog->count() > 0 || $mentor[1]->blog->count() > 0) {
                return Redirect::back()->withErrors('This Mentor is Still Used');
            } else {
                if ($mentor[0]->mentor_picture == $mentor[1]->mentor_picture) {
                    $old_image_path = $mentor[0]->mentor_picture;
                    $file_path = public_path('uploaded_files/'.'mentor/'.$mentor[0]->created_at->format('Y').'/'.$mentor[0]->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $mentor_videos = MentorVideos::where('mentor_id', $group)->get();
                foreach ($mentor_videos as $video) { 
                    $video->delete();
                }
                $mentor[0]->delete();
                $mentor[1]->delete();
                DB::commit();
            }
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
