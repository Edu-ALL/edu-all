<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MentorVideos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MentorVideo extends Controller
{
    public function store(Request $request, $group){
        $rules = [
            'video_embed' => 'required|url',
            'description_video' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_video = new MentorVideos();
            $mentor_video->mentor_id = $group;
            $mentor_video->video_embed = $request->video_embed;
            $mentor_video->description = $request->description_video;
            $mentor_video->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$group.'/view')->withSuccess('Mentor Video Was Successfully Created');
    }

    public function update(Request $request, $group, $id){
        $rules = [
            'video_embed' => 'required|url',
            'description_video' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_video = MentorVideos::find($id);
            $mentor_video->video_embed = $request->video_embed;
            $mentor_video->description = $request->description_video;
            $mentor_video->updated_at = date('Y-m-d H:i:s');
            $mentor_video->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$group.'/view')->withSuccess('Mentor Video Was Successfully Updated');
    }

    public function delete($group, $id){
        DB::beginTransaction();
        try {
            $mentor_video = MentorVideos::find($id);
            $mentor_video->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$group.'/view')->withSuccess('Mentor Video Was Successfully Deleted');
    }
}
