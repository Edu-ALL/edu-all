<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guidebooks;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Guidebook extends Controller
{
    public function index(){
        return view('admin.guidebook.index');
    }

    public function getGuidebook(Request $request){
        if ($request->ajax()) {
            $data = Guidebooks::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('link', function($d){
                $result = '
                    <a href='.$d->guidebook_link.' target="_blank">'.$d->guidebook_link.'</a>
                ';
                return $result;
            })
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'guidebook/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->guidebook_image);
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="80">
                ';
                return $result;
            })
            ->editColumn('language', function($d){
                $path = asset('assets/img/flag/flag-'.$d->lang.'.png');
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="30">
                    <p class="pt-1" style="font-size: 13px !important">
                        '.$d->languages->language.'
                    </p>
                ';
                return $result;
            })
            ->editColumn('status', function($d){
                if ($d->guidebook_status == 'active') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this guidebook">
                                '.$d->guidebook_status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this guidebook">
                                '.$d->guidebook_status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/guidebook/'.$d->group.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this guidebook"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->group.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this guidebook"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['link', 'language', 'image', 'status', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.guidebook.create');
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'guidebook_category' => 'required',
            'guidebook_image_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_en' => 'required',
            'guidebook_link_en' => 'required|url',
            'guidebook_image_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_id' => 'required',
            'guidebook_link_id' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $guidebook_en = new Guidebooks();
            $guidebook_en->group = date('YmdHis');
            $guidebook_en->guidebook_category = $request->guidebook_category;
            if ($request->hasFile('guidebook_image_en')) {
                $file_en = $request->file('guidebook_image_en');
                $file_format_en = $request->file('guidebook_image_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/'.'guidebook/'.date('Y').'/'.date('m').'/';
                $time = $guidebook_en->group;
                $fileName_en = 'Guidebook-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $guidebook_en->guidebook_image = $fileName_en;
            }
            $guidebook_en->guidebook_alt = $request->guidebook_alt_en;
            $guidebook_en->guidebook_link = $request->guidebook_link_en;
            $guidebook_en->guidebook_status = 'active';
            $guidebook_en->lang = 'en';
            $guidebook_en->save();

            $guidebook_id = new Guidebooks();
            $guidebook_id->group = $guidebook_en->group;
            $guidebook_id->guidebook_category = $request->guidebook_category;
            if ($request->hasFile('guidebook_image_id')) {
                $file_id = $request->file('guidebook_image_id');
                $file_format_id = $request->file('guidebook_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/'.'guidebook/'.date('Y').'/'.date('m').'/';
                $time = $guidebook_id->group;
                $fileName_id = 'Guidebook-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $guidebook_id->guidebook_image = $fileName_id;
            }
            $guidebook_id->guidebook_alt = $request->guidebook_alt_id;
            $guidebook_id->guidebook_link = $request->guidebook_link_id;
            $guidebook_id->guidebook_status = 'active';
            $guidebook_id->lang = 'id';
            $guidebook_id->save();
            DB::commit();
            Log::notice('Guidebook with Category : '.$guidebook_en->guidebook_category.' has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Guidebook failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook')->withSuccess('Guidebook Was Successfully Created');
    }

    public function edit($group){
        $guidebook = Guidebooks::where('group', $group)->get();
        return view('admin.guidebook.update', ['guidebook' => $guidebook]);
    }

    public function update($group, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'guidebook_category' => 'required',
            'guidebook_image_en' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_en' => 'required',
            'guidebook_link_en' => 'required|url',
            'guidebook_image_id' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'guidebook_alt_id' => 'required',
            'guidebook_link_id' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $guidebook = Guidebooks::where('group', $group)->get();
            $guidebook_en = $guidebook[0];
            $guidebook_en->guidebook_category = $request->guidebook_category;
            if ($request->hasFile('guidebook_image_en')) {
                if ($old_image_path_en = $guidebook_en->guidebook_image) {
                    $file_path = public_path('uploaded_files/'.'guidebook/'.$guidebook_en->created_at->format('Y').'/'.$guidebook_en->created_at->format('m').'/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('guidebook_image_en');
                $file_format_en = $request->file('guidebook_image_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/'.'guidebook/'.$guidebook_en->created_at->format('Y').'/'.$guidebook_en->created_at->format('m').'/';
                $time = $guidebook_en->group;
                $fileName_en = 'Guidebook-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $guidebook_en->guidebook_image = $fileName_en;
            }
            $guidebook_en->guidebook_alt = $request->guidebook_alt_en;
            $guidebook_en->guidebook_link = $request->guidebook_link_en;
            $guidebook_en->updated_at = date('Y-m-d H:i:s');
            $guidebook_en->save();

            $guidebook_id = $guidebook[1];
            $guidebook_id->guidebook_category = $request->guidebook_category;
            if ($request->hasFile('guidebook_image_id')) {
                if ($old_image_path_id = $guidebook_id->guidebook_image) {
                    $file_path = public_path('uploaded_files/'.'guidebook/'.$guidebook_id->created_at->format('Y').'/'.$guidebook_id->created_at->format('m').'/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('guidebook_image_id');
                $file_format_id = $request->file('guidebook_image_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/'.'guidebook/'.$guidebook_id->created_at->format('Y').'/'.$guidebook_id->created_at->format('m').'/';
                $time = $guidebook_id->group;
                $fileName_id = 'Guidebook-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $guidebook_id->guidebook_image = $fileName_id;
            }
            $guidebook_id->guidebook_alt = $request->guidebook_alt_id;
            $guidebook_id->guidebook_link = $request->guidebook_link_id;
            $guidebook_id->updated_at = date('Y-m-d H:i:s');
            $guidebook_id->save();

            DB::commit();
            Log::notice('Guidebook with Category : '.$guidebook_en->guidebook_category.' has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Guidebook failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook/'.$group.'/edit')->withSuccess('Guidebook Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $guidebook = Guidebooks::where('group', $group)->get();
            $guidebook_category = $guidebook[0]->guidebook_category;
            if ($old_image_path_en = $guidebook[0]->guidebook_image) {
                $file_path_en = public_path('uploaded_files/'.'guidebook/'.$guidebook[0]->created_at->format('Y').'/'.$guidebook[0]->created_at->format('m').'/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $guidebook[1]->guidebook_image) {
                $file_path_id = public_path('uploaded_files/'.'guidebook/'.$guidebook[1]->created_at->format('Y').'/'.$guidebook[1]->created_at->format('m').'/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $guidebook[0]->delete();
            $guidebook[1]->delete();
            DB::commit();
            Log::notice('Guidebook with Category : '.$guidebook_category.' has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Guidebook failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook')->withSuccess('Guidebook Was Successfully Deleted');
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
            Log::notice('Guidebook with Category : '.$guidebook[0]->guidebook_category.' has been successfully Deactivated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Deactivate Guidebook failed : '.$e->getMessage());
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
            Log::notice('Guidebook with Category : '.$guidebook[0]->guidebook_category.' has been successfully Activated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Activate Guidebook failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/guidebook');
    }
}
