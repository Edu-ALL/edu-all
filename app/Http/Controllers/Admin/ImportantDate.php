<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImportantDates;
use App\Models\WebsiteSettings;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ImportantDate extends Controller
{
    public function index(){
        return view('admin.important-date.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getImportantDates(Request $request){
        if ($request->ajax()) {
            $data = ImportantDates::orderBy('date', 'asc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('date', function ($d) {
                $result = '
                ' . date('F, dS Y', strtotime($d->date)) . '
            ';
                return $result;
            })
            ->editColumn('link', function ($d) {
                return $d->link;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/important-date/'.$d->id.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog category"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog category"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.important-date.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'title' => 'required',
            'date' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $important_date = new ImportantDates();
            $important_date->title = $request->title;
            $important_date->date = $request->date;
            $important_date->link = $request->link;
            $important_date->save();
            DB::commit();
            Log::notice('Important Date : '.$important_date->title.', with date '.$important_date->date.' has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Important Date failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/important-date')->withSuccess('Important Date Was Successfully Created');
    }

    public function edit($id){
        $important_date = ImportantDates::find($id);
        return view('admin.important-date.update', [
            'website_data' => WebsiteSettings::first(),
            'important_date' => $important_date,
        ]);
    }

    public function update($id, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'title' => 'required',
            'date' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $important_date = ImportantDates::find($id);
            $important_date->title = $request->title;
            $important_date->date = $request->date;
            $important_date->link = $request->link;
            $important_date->save();
            DB::commit();
            Log::notice('Important Date : '.$important_date->title.', with date '.$important_date->date.' has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Important Date failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/important-date')->withSuccess('Important Date Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $important_date = ImportantDates::find($id);
            $title = $important_date->title;
            $important_date->delete();
            DB::commit();
            Log::notice('Important Date : '.$title.' has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Important Date failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/important-date')->withSuccess('Important Date Was Successfully Deleted');
    }
}
