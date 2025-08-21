<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutors;
use App\Models\WebsiteSettings;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tutor extends Controller
{
    public function index()
    {
        return view('admin.tutor.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getTutor(Request $request)
    {
        if ($request->ajax()) {
            $data = Tutors::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('image', function ($d) {
                    $path = Storage::url('tutor/' . $d->created_at->format('Y') . '/' . $d->created_at->format('m') . '/' . $d->thumbnail);
                    $result = '
                    <img data-original="' . $path . '" src="' . $path . '" alt="" width="80">
                ';
                    return $result;
                })
                ->editColumn('status', function ($d) {
                    if ($d->status == 'active') {
                        $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate(' . $d->id . ')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this tutor">
                                ' . $d->status . '
                            </span>
                        </button>
                    ';
                    } else {
                        $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate(' . $d->id . ')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this tutor">
                                ' . $d->status . '
                            </span>
                        </button>
                    ';
                    }
                    return $result;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/tutor/' . $d->id . '/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this tutor"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this tutor"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['image', 'status', 'action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('admin.tutor.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
            'full_name' => 'required',
            'experience' => 'required',
            'subject' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $tutors = new Tutors();
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = 'project/eduall-website/tutor/' . date('Y') . '/' . date('m') . '/';
                $time = date('YmdHis');
                $fileName = 'Tutors-thumbnail-' . $time . '.' . $file_format;
                Storage::disk('s3')->put($destinationPath . $fileName, file_get_contents($file));
                $tutors->thumbnail = $fileName;
            }
            $tutors->alt = $request->alt;
            $tutors->full_name = $request->full_name;
            $tutors->experience = $request->experience;
            $tutors->subject = $request->subject;
            $tutors->status = 'active';
            $tutors->save();
            DB::commit();
            Log::notice('Tutor : ' . $tutors->full_name . ' has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Tutor failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/tutor')->withSuccess('Tutors Was Successfully Created');
    }

    public function edit($id)
    {
        $tutors = Tutors::find($id);
        return view('admin.tutor.update', [
            'tutors' => $tutors,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
            'full_name' => 'required',
            'experience' => 'required',
            'subject' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            if ($request->hasFile('thumbnail')) {
                if ($old_image_path = $tutors->thumbnail) {
                    $file_path = 'project/eduall-website/tutor/' . $tutors->created_at->format('Y') . '/' . $tutors->created_at->format('m') . '/' . $old_image_path;
                    if (Storage::disk('s3')->exists($file_path)) {
                        Storage::disk('s3')->delete($file_path);
                    }
                }
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = 'project/eduall-website/tutor/' . $tutors->created_at->format('Y') . '/' . $tutors->created_at->format('m') . '/';
                $time = date('YmdHis');
                $fileName = 'Tutors-thumbnail-' . $time . '.' . $file_format;
                Storage::disk('s3')->put($destinationPath . $fileName, file_get_contents($file));
                $tutors->thumbnail = $fileName;
            }
            $tutors->alt = $request->alt;
            $tutors->full_name = $request->full_name;
            $tutors->experience = $request->experience;
            $tutors->subject = $request->subject;
            $tutors->updated_at = date('Y-m-d H:i:s');
            $tutors->save();
            DB::commit();
            Log::notice('Tutor : ' . $tutors->full_name . ' has been successfully Updated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Tutor failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/tutor/' . $id . '/edit')->withSuccess('Tutors Was Successfully Updated');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            $tutor_full_name = $tutors->full_name;
            if ($old_image_path = $tutors->thumbnail) {
                $file_path = 'project/eduall-website/tutor/' . $tutors->created_at->format('Y') . '/' . $tutors->created_at->format('m') . '/' . $old_image_path;
                if (Storage::disk('s3')->exists($file_path)) {
                    Storage::disk('s3')->delete($file_path);
                }
            }
            $tutors->delete();
            DB::commit();
            Log::notice('Tutor : ' . $tutor_full_name . ' has been successfully Deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Tutor failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/tutor')->withSuccess('Tutors Was Successfully Deleted');
    }

    public function deactivate($id)
    {
        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            $tutors->status = 'inactive';
            $tutors->save();
            DB::commit();
            Log::notice('Tutor : ' . $tutors->full_name . ' has been successfully Deactivated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Deactivate Tutor failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/tutor');
    }

    public function activate($id)
    {
        DB::beginTransaction();
        try {
            $tutors = Tutors::find($id);
            $tutors->status = 'active';
            $tutors->save();
            DB::commit();
            Log::notice('Tutor : ' . $tutors->full_name . ' has been successfully Activated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Activate Tutor failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/tutor');
    }
}
