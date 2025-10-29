<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicants;
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
use Illuminate\Support\Facades\Storage;

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
                <a type="button" class="btn btn-info" href="/admin/careers/' . $d->id . '/applicants">
                        ' . $d->total_applicants . '
                        <i class="fa-solid fa-person ms-2" data-bs-toggle="tooltip" data-bs-title="View applicants"></i>
                    </a>
                    <a type="button" class="btn btn-warning" href="/admin/careers/' . $d->id . '/edit">
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
            return redirect('/admin/careers/create')->withInput()->withErrors($validator->messages());
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
            $career->screen_question_1 = $request->screen_question_1;
            $career->screen_question_2 = $request->screen_question_2;
            $career->screen_question_3 = $request->screen_question_3;
            $career->status = $request->status;
            $career->created_at = date('Y-m-d H:i:s');
            $career->updated_at = date('Y-m-d H:i:s');
            $career->save();

            DB::commit();
            Log::notice('Career : "' . $career->job_position . '" has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Career failed : ' . $e->getMessage());
            return redirect('/admin/careers/create')->withErrors($e->getMessage());
        }

        return redirect('/admin/careers')->withSuccess('Career Was Successfully Created');
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
            'screen_question_1' => 'required',
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
            $career->screen_question_1 = $request->screen_question_1;
            $career->screen_question_2 = $request->screen_question_2;
            $career->screen_question_3 = $request->screen_question_3;
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

        return redirect('/admin/careers')->withSuccess('Career Was Successfully Updated');
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

        return redirect('/admin/careers')->withSuccess('Career Was Successfully Deleted');
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

        return redirect('/admin/careers');
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

        return redirect('/admin/careers');
    }

    public function applicants($job_id)
    {
        $career = Careers::find($job_id);

        return view('admin.applicant.index', [
            'job_id' => $job_id,
            'career' => $career,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getApplicants(Request $request, $job_id)
    {
        if ($request->ajax()) {
            $data = Applicants::where('job_id', $job_id)->orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($d) {
                    return $d->name;
                })
                ->editColumn('phone', function ($d) {
                    return $d->phone;
                })
                ->editColumn('email', function ($d) {
                    return $d->email;
                })
                ->editColumn('cv_path', function ($d) {
                    return $d->cv_path ? env('AWS_URL') . 'applicants/' . $d->cv_path : null;
                })
                ->editColumn('screen_1', function ($d) {
                    return $d->screen_question_1 ? $d->screen_question_1 . ' ' . $d->screen_answer_1 : '-';
                })
                ->editColumn('screen_2', function ($d) {
                    return $d->screen_question_2 ? $d->screen_question_2 . ' ' . $d->screen_answer_2 : '-';
                })
                ->editColumn('screen_3', function ($d) {
                    return $d->screen_question_3 ? $d->screen_question_3 . ' ' . $d->screen_answer_3 : '-';
                })
                ->editColumn('submitted_at', function ($d) {
                    return $d->created_at;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this career"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function deleteApplicant($id)
    {
        DB::beginTransaction();
        try {
            $applicant = Applicants::find($id);

            if ($old_image_path = $applicant->cv_path) {
                $file_path = 'project/eduall-website/applicants/' . $old_image_path;
                if (Storage::disk('s3')->exists($file_path)) {
                    Storage::disk('s3')->delete($file_path);
                }
            }

            $applicant->delete();
            DB::commit();
            Log::notice('Applicant: ' . $applicant->name . ' has been successfully Deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Applicant failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect()->back()->withSuccess('Applicant Was Successfully Deleted');
    }
}
