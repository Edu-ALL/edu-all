<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutors;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Tutor extends Controller
{
    public function index(){
        $tutors = Tutors::orderBy('updated_at', 'desc')->get();
        return view('admin.tutor.index', ['tutors' => $tutors]);
    }

    public function create(){
        return view('admin.tutor.create');
    }

    public function store(Request $request){
        $rules = [
            'thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
            'full_name' => 'required',
            'experience' => 'required',
            'subject' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $tutors = new Tutors();
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/tutor';
                $time = date('YmdHis');
                $fileName = 'Tutors-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $tutors->thumbnail = $fileName;
            }
            $tutors->alt = $request->alt;
            $tutors->full_name = $request->full_name;
            $tutors->experience = $request->experience;
            $tutors->subject = $request->subject;
            $tutors->status = 'active';
            $tutors->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/tutor')->withSuccess('Tutors Was Successfully Created');
    }

    public function edit($id){
        $tutors = Tutors::find($id);
        return view('admin.tutor.update', ['tutors' => $tutors]);
    }

    public function update(Request $request, $id){
        $rules = [
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
            'full_name' => 'required',
            'experience' => 'required',
            'subject' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            if ($request->hasFile('thumbnail')) {
                if ($old_image_path = $tutors->thumbnail) {
                    $file_path = public_path('uploaded_files/tutor/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/tutor';
                $time = date('YmdHis');
                $fileName = 'Tutors-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $tutors->thumbnail = $fileName;
            }
            $tutors->alt = $request->alt;
            $tutors->full_name = $request->full_name;
            $tutors->experience = $request->experience;
            $tutors->subject = $request->subject;
            $tutors->updated_at = date('Y-m-d H:i:s');
            $tutors->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/tutor/'.$id.'/edit')->withSuccess('Tutors Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            if ($old_image_path = $tutors->thumbnail) {
                $file_path = public_path('uploaded_files/tutor/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $tutors->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/tutor')->withSuccess('Tutors Was Successfully Deleted');
    }

    public function deactivate($id){
        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            $tutors->status = 'inactive';
            $tutors->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/tutor');
    }

    public function activate($id){
        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            $tutors->status = 'active';
            $tutors->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/tutor');
    }
}
