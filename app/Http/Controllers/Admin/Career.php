<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Careers;
use Exception;
use App\Models\WebsiteSettings;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class Career extends Controller
{
    public function index()
    {
        return view('admin.career.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getCareers(Request $request)
    {
        if ($request->ajax()) {
            $data = Careers::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('job_position', function ($d) {
                    return $d->job_position;
                })
                ->editColumn('department', function ($d) {
                    return $d->department;
                })
                ->editColumn('work_type', function ($d) {
                    return ucfirst($d->work_type);
                })
                ->editColumn('application_deadline', function ($d) {
                    return $d->application_deadline;
                })
                ->editColumn('status', function ($d) {
                    if ($d->status == 'active') {
                        $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#inactive" style="text-transform: capitalize;" onclick="formDeactivate(' . $d->id . ')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Set to Inactive">
                                ' . $d->status . '
                            </span>
                        </button>
                    ';
                    } else {
                        $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#active" style="text-transform: capitalize;" onclick="formActivate(' . $d->id . ')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Set to Active">
                                ' . $d->status . '
                            </span>
                        </button>
                    ';
                    }
                    return $result;
                })
                ->editColumn('last_updated', function ($d) {
                    return $d->updated_at;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/career/' . $d->id . '/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this career"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this career"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['status', 'last_updated', 'action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('admin.career.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'The :attribute field is required',
            'unique' => 'The :attribute already exists',
        ];

        $rules = [
            'job_position' => 'required|unique:tb_career,job_position',
            'department' => 'required',
            'work_type' => 'required',
            'application_deadline' => 'required|date',
            'working_arrangement' => 'required',
            'about_the_role' => 'required',
            'job_description' => 'required',
            'requirements' => 'required',
            'status' => 'required|in:active,inactive',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/admin/career/create')->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $career = new Careers();
            $career->job_position = $request->job_position;
            $career->slug = str()->slug($request->job_position);
            $career->department = $request->department;
            $career->work_type = $request->work_type;
            $career->application_deadline = $request->application_deadline;
            $career->working_arrangement = $request->working_arrangement;
            $career->about_the_role = $request->about_the_role;
            $career->job_description = $request->job_description;
            $career->requirements = $request->requirements;
            $career->status = $request->status;
            $career->created_at = date('Y-m-d H:i:s');
            $career->updated_at = date('Y-m-d H:i:s');
            $career->save();

            DB::commit();
            Log::notice('Career : "' . $career->job_position . '" has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Career failed : ' . $e->getMessage());
            return redirect('/admin/career/create')->withErrors($e->getMessage());
        }

        return redirect('/admin/career')->withSuccess('Career Was Successfully Created');
    }

    public function show(Careers $careers)
    {
        //
    }

    public function edit($id)
    {
        $career = Careers::find($id);
        // dd($career);
        return view('admin.career.update', [
            'career' => $career,
            'website_data' => WebsiteSettings::first(),
        ]);
    }


    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'The :attribute field is required.',
            'unique' => 'The :attribute already exists',
        ];

        $rules = [
            'job_position' => 'required|unique:tb_career,job_position,' . $id,
            'department' => 'required',
            'work_type' => 'required',
            'application_deadline' => 'required|date',
            'working_arrangement' => 'required',
            'about_the_role' => 'required',
            'job_description' => 'required',
            'requirements' => 'required',
            'status' => 'required|in:active,inactive',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $career = Careers::findOrFail($id);
            $career->job_position = $request->job_position;
            $career->slug = str()->slug($request->job_position);
            $career->department = $request->department;
            $career->work_type = $request->work_type;
            $career->application_deadline = $request->application_deadline;
            $career->working_arrangement = $request->working_arrangement;
            $career->about_the_role = $request->about_the_role;
            $career->job_description = $request->job_description;
            $career->requirements = $request->requirements;
            $career->status = $request->status;
            $career->updated_at = date('Y-m-d H:i:s');
            $career->save();

            DB::commit();
            Log::notice('Career : "' . $career->job_position . '" has been successfully Updated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Career failed : ' . $e->getMessage());
            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect('/admin/career')->withSuccess('Career Was Successfully Updated');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $career = Careers::find($id);
            $job_position = $career->job_position;
            $career->delete();
            DB::commit();
            Log::notice('Career: ' . $job_position . ' has been successfully Deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Career failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/career')->withSuccess('Career Was Successfully Deleted');
    }


    public function deactivate($id)
    {
        DB::beginTransaction();
        try {
            $careers = Careers::find($id);
            $careers->status = 'inactive';
            $careers->save();

            DB::commit();
            Log::notice('Career : ' . $careers->job_position . ', Was Successfully Deactivate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Career Was Failed To Deactivate: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/career');
    }

    public function activate($id)
    {
        DB::beginTransaction();
        try {
            $careers = Careers::find($id);
            $careers->status = 'active';
            $careers->save();

            DB::commit();
            Log::notice('Career: ' . $careers->job_position . ', Was Successfully Activate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Career Was Failed To Aactivate: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/career');
    }
}
