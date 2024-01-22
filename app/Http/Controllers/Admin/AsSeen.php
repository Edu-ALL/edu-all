<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AsSeens;
use App\Models\ImportantDates;
use App\Models\WebsiteSettings;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class AsSeen extends Controller
{
    public function index(){
        return view('admin.as-seen.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getAsSeens(Request $request){
        if ($request->ajax()) {
            $data = AsSeens::orderBy('updated_at', 'asc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('thumbnail', function($d){
                $path = asset('uploaded_files/'.'as-seen/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->thumbnail);
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="100">
                ';
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/as-seen/'.$d->id.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog category"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog category"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['thumbnail', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.as-seen.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $as_seen = new AsSeens();
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'as-seen/'.date('Y').'/'.date('m').'/';
                $time = date('YmdHis');
                $fileName = 'As-Seen-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $as_seen->thumbnail = $fileName;
            }
            $as_seen->alt = $request->alt;
            $as_seen->save();
            DB::commit();
            Log::notice('As Seen has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create As Seen failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/as-seen')->withSuccess('As Seen Was Successfully Created');
    }

    public function edit($id){
        $as_seen = AsSeens::find($id);
        return view('admin.as-seen.update', [
            'website_data' => WebsiteSettings::first(),
            'as_seen' => $as_seen,
        ]);
    }

    public function update($id, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $as_seen = AsSeens::find($id);
            if ($request->hasFile('thumbnail')) {
                if ($old_image_path = $as_seen->thumbnail) {
                    $file_path = public_path('uploaded_files/'.'as-seen/'.$as_seen->created_at->format('Y').'/'.$as_seen->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'as-seen/'.$as_seen->created_at->format('Y').'/'.$as_seen->created_at->format('m').'/';
                $time = date('YmdHis');
                $fileName = 'As-Seen-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $as_seen->thumbnail = $fileName;
            }
            $as_seen->alt = $request->alt;
            $as_seen->save();
            DB::commit();
            Log::notice('As Seen has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update As Seen failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/as-seen')->withSuccess('As Seen Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $as_seen = AsSeens::find($id);
            if ($old_image_path = $as_seen->thumbnail) {
                $file_path = public_path('uploaded_files/'.'as-seen/'.$as_seen->created_at->format('Y').'/'.$as_seen->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $as_seen->delete();
            DB::commit();
            Log::notice('As Seen has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete As Seen failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/as-seen')->withSuccess('As Seen Was Successfully Deleted');
    }
}
