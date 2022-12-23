<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guidebooks;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Guidebook extends Controller
{
    public function index(){
        $guidebooks = Guidebooks::get();
        return view('admin.guidebook.index', ['guidebooks' => $guidebooks]);
    }

    public function create(){
        return view('admin.guidebook.create');
    }

    public function store(Request $request){
        $rules = [
            'guidebook_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_en' => 'required',
            'guidebook_category_en' => 'required',
            'guidebook_link_en' => 'required',
            'guidebook_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_id' => 'required',
            'guidebook_category_id' => 'required',
            'guidebook_link_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $guidebook_en = new Guidebooks();
            $guidebook_en->group = date('YmdHis');
            if ($request->hasFile('guidebook_image_en')) {
                $file_en = $request->file('guidebook_image_en');
                $file_format_en = $request->file('guidebook_image_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/guidebook';
                $time = $guidebook_en->group;
                $fileName_en = 'Guidebook-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $guidebook_en->guidebook_image = $fileName_en;
            }
            $guidebook_en->guidebook_alt = $request->guidebook_alt_en;
            $guidebook_en->guidebook_category = $request->guidebook_category_en;
            $guidebook_en->guidebook_link = $request->guidebook_link_en;
            $guidebook_en->guidebook_status = 'active';
            $guidebook_en->lang = 'en';
            $guidebook_en->save();

            $guidebook_id = new Guidebooks();
            $guidebook_id->group = $guidebook_en->group;
            if ($request->hasFile('guidebook_image_id')) {
                $file_id = $request->file('guidebook_image_id');
                $file_format_id = $request->file('guidebook_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/guidebook';
                $time = $guidebook_id->group;
                $fileName_id = 'Guidebook-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $guidebook_id->guidebook_image = $fileName_id;
            }
            $guidebook_id->guidebook_alt = $request->guidebook_alt_id;
            $guidebook_id->guidebook_category = $request->guidebook_category_id;
            $guidebook_id->guidebook_link = $request->guidebook_link_id;
            $guidebook_id->guidebook_status = 'active';
            $guidebook_id->lang = 'id';
            $guidebook_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook');
    }

    public function edit($group){
        $guidebook = Guidebooks::where('group', $group)->get();
        return view('admin.guidebook.update', ['guidebook' => $guidebook]);
    }

    public function update($group, Request $request){
        $rules = [
            'guidebook_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_en' => 'required',
            'guidebook_category_en' => 'required',
            'guidebook_link_en' => 'required',
            'guidebook_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_id' => 'required',
            'guidebook_category_id' => 'required',
            'guidebook_link_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $guidebook = Guidebooks::where('group', $group)->get();
            $guidebook_en = $guidebook[0];
            if ($request->hasFile('guidebook_image_en')) {
                if ($old_image_path_en = $guidebook_en->guidebook_image) {
                    $file_path = public_path('uploaded_files/guidebook/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('guidebook_image_en');
                $file_format_en = $request->file('guidebook_image_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/guidebook';
                $time = $guidebook_en->group;
                $fileName_en = 'Guidebook-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $guidebook_en->guidebook_image = $fileName_en;
            }
            $guidebook_en->guidebook_alt = $request->guidebook_alt_en;
            $guidebook_en->guidebook_category = $request->guidebook_category_en;
            $guidebook_en->guidebook_link = $request->guidebook_link_en;
            $guidebook_en->updated_at = date('Y-m-d H:i:s');
            $guidebook_en->save();

            $guidebook_id = $guidebook[1];
            if ($request->hasFile('guidebook_image_id')) {
                if ($old_image_path_id = $guidebook_id->guidebook_image) {
                    $file_path = public_path('uploaded_files/guidebook/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('guidebook_image_id');
                $file_format_id = $request->file('guidebook_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/guidebook';
                $time = $guidebook_id->group;
                $fileName_id = 'Guidebook-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $guidebook_id->guidebook_image = $fileName_id;
            }
            $guidebook_id->guidebook_alt = $request->guidebook_alt_id;
            $guidebook_id->guidebook_category = $request->guidebook_category_id;
            $guidebook_id->guidebook_link = $request->guidebook_link_id;
            $guidebook_id->updated_at = date('Y-m-d H:i:s');
            $guidebook_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook/'.$group.'/edit');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $guidebook = Guidebooks::where('group', $group)->get();
            if ($old_image_path_en = $guidebook[0]->guidebook_image) {
                $file_path_en = public_path('uploaded_files/guidebook/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $guidebook[1]->guidebook_image) {
                $file_path_id = public_path('uploaded_files/guidebook/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $guidebook[0]->delete();
            $guidebook[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $guidebook = Guidebooks::where('group', $group)->get();
            $guidebook[0]->guidebook_status = 'inactive';
            $guidebook[1]->guidebook_status = 'inactive';
            $guidebook[0]->save();
            $guidebook[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $guidebook = Guidebooks::where('group', $group)->get();
            $guidebook[0]->guidebook_status = 'active';
            $guidebook[1]->guidebook_status = 'active';
            $guidebook[0]->save();
            $guidebook[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook');
    }
}
