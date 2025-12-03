<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicScore;
use Illuminate\Http\Request;
use App\Models\WebsiteSettings;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CompetitionResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.competition-result.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = AcademicScore::where('type', 'competition')->orderBy('order', 'asc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('image', function ($d) {
                    $path = Storage::url('competition/' . $d->image);
                    $result = '
                    <img data-original="' . $path . '" src="' . $path . '" alt="" width="80">
                ';
                    return $result;
                })
                ->editColumn('name', function ($d) {
                    return $d->name;
                })
                ->editColumn('medal', function ($d) {
                    return $d->medal;
                })
                ->editColumn('grade', function ($d) {
                    return $d->grade;
                })
                ->editColumn('school', function ($d) {
                    return $d->school;
                })
                ->editColumn('order', function ($d) {
                    $result = '<input type="text" class="form-control" value="' . $d->order . '" id="order_' . $d->id . '" onchange="changeOrder(' . $d->id . ')">';
                    return $result;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/competition-result/' . $d->id . '/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this Competition Result"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this Competition Result"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['image', 'order', 'action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competition-result.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'image' => 'required',
            'name' => 'required',
            'medal' => 'required',
            'school' => 'required',
            'grade' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $last_order = AcademicScore::where('type', 'competition')->max('order');


            $academic_score = new AcademicScore();
            $academic_score->type = 'competition';

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_format = $request->file('image')->getClientOriginalExtension();
                $destinationPath = 'project/eduall-website/competition/';
                $time = date('YmdHis');
                $fileName = 'competition-' . $time . '.' . $file_format;
                Storage::disk('s3')->put($destinationPath . $fileName, file_get_contents($file));
                $academic_score->image = $fileName;
            }

            $academic_score->name = $request->name;
            $academic_score->medal = $request->medal;
            $academic_score->school = $request->school;
            $academic_score->grade = $request->grade;
            $academic_score->order = $last_order + 1;
            $academic_score->save();
            DB::commit();
            Log::notice('Competition Result : ' . $academic_score->name . ', with date ' . $academic_score->created_at . ' has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Competition Result failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/competition-result')->withSuccess('Competition Result Was Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academic_score = AcademicScore::find($id);
        return view('admin.competition-result.update', [
            'website_data' => WebsiteSettings::first(),
            'academic_score' => $academic_score,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'name' => 'required',
            'medal' => 'required',
            'school' => 'required',
            'grade' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $academic_score = AcademicScore::find($id);

            if ($request->hasFile('image')) {
                if ($old_image_path_en = $academic_score->image) {
                    $file_path = 'project/eduall-website/competition/' . $old_image_path_en;
                    if (Storage::disk('s3')->exists($file_path)) {
                        Storage::disk('s3')->delete($file_path);
                    }
                }
                $file = $request->file('image');
                $file_format = $request->file('image')->getClientOriginalExtension();
                $destinationPath = 'project/eduall-website/competition/';
                $time = date('YmdHis');
                $fileName = 'competition-' . $time . '.' . $file_format;
                Storage::disk('s3')->put($destinationPath . $fileName, file_get_contents($file));
                $academic_score->image = $fileName;
            }

            $academic_score->name = $request->name;
            $academic_score->medal = $request->medal;
            $academic_score->school = $request->school;
            $academic_score->grade = $request->grade;
            $academic_score->save();
            DB::commit();
            Log::notice('Competition Result : ' . $academic_score->name . ', with date ' . $academic_score->updated_at . ' has been successfully updated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Competition Result failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/competition-result')->withSuccess('Competition Result Was Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $academic_score = AcademicScore::find($id);
            $name = $academic_score->name;
            $academic_score->delete();
            DB::commit();
            Log::notice('Competition Result : ' . $name . ' has been successfully deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Competition Result failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/competition-result')->withSuccess('Competition Result Was Successfully Deleted');
    }

    public function changeOrder(Request $request)
    {
        DB::beginTransaction();
        try {
            $academic_score = AcademicScore::findOrFail($request->id);
            $oldOrder = $academic_score->order;
            $newOrder = $request->order;
            $type = $request->type;
            $total = AcademicScore::where('type', $type)->count();

            // ===============================
            //  VALIDASI: order tidak boleh melebihi jumlah data
            // ===============================
            if ($newOrder < 1 || $newOrder > $total) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Order must be between 1 and ' . $total
                ], 200);
            }

            // Jika order tidak berubah, langsung return
            if ($oldOrder == $newOrder) {
                return response()->json(['status' => 'success', 'message' => 'Order remains the same']);
            }

            // Jika dipindah ke atas (contoh: 5 → 1)
            if ($newOrder < $oldOrder) {
                AcademicScore::where('order', '>=', $newOrder)
                    ->where('order', '<', $oldOrder)
                    ->where('type', $type)
                    ->increment('order');
            }
            // Jika dipindah ke bawah (contoh: 1 → 5)
            else {
                AcademicScore::where('order', '<=', $newOrder)
                    ->where('order', '>', $oldOrder)
                    ->where('type', $type)
                    ->decrement('order');
            }

            // Update order record utama
            $academic_score->order = $newOrder;
            $academic_score->save();

            DB::commit();

            Log::notice(
                'Order : ' . $academic_score->name .
                    ' changed from ' . $oldOrder . ' to ' . $newOrder .
                    ' by ' . Auth::guard('web-admin')->user()->name
            );
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Change Order failed : ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }

        return response()->json(['status' => 'success', 'message' => 'Order Was Successfully Changed']);
    }
}
