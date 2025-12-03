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
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SATScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sat-score.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = AcademicScore::where('type', 'sat')->orderBy('order', 'asc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($d) {
                    return $d->name;
                })
                ->editColumn('score_raw', function ($d) {
                    return $d->score_raw;
                })
                ->editColumn('score_final', function ($d) {
                    return $d->score_final;
                })
                ->editColumn('point', function ($d) {
                    return '+' . $d->score_final - $d->score_raw . ' Points';
                })
                ->editColumn('order', function ($d) {
                    $result = '<input type="text" class="form-control" value="' . $d->order . '" id="order_' . $d->id . '" onchange="changeOrder(' . $d->id . ')">';
                    return $result;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/sat-score/' . $d->id . '/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this Academic Score"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this Academic Score"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['order', 'action'])
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
        return view('admin.sat-score.create', [
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
            'name' => 'required',
            'score_raw' => 'required',
            'score_final' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $last_order = AcademicScore::where('type', 'sat')->max('order');

            $academic_score = new AcademicScore();
            $academic_score->type = 'sat';
            $academic_score->name = $request->name;
            $academic_score->score_raw = $request->score_raw;
            $academic_score->score_final = $request->score_final;
            $academic_score->point = $request->score_final - $request->score_raw;
            $academic_score->order = $last_order + 1;
            $academic_score->save();
            DB::commit();
            Log::notice('SAT Score : ' . $academic_score->title . ', with date ' . $academic_score->date . ' has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create SAT Score failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/sat-score')->withSuccess('SAT Score Was Successfully Created');
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
        return view('admin.sat-score.update', [
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
            'score_raw' => 'required',
            'score_final' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $academic_score = AcademicScore::find($id);
            $academic_score->name = $request->name;
            $academic_score->score_raw = $request->score_raw;
            $academic_score->score_final = $request->score_final;
            $academic_score->point = $request->score_final - $request->score_raw;
            $academic_score->save();
            DB::commit();
            Log::notice('SAT Score : ' . $academic_score->title . ', with date ' . $academic_score->date . ' has been successfully updated by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update SAT Score failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/sat-score')->withSuccess('SAT Score Was Successfully Updated');
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
            Log::notice('SAT Score : ' . $name . ' has been successfully deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete SAT Score failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/sat-score')->withSuccess('SAT Score Was Successfully Deleted');
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
