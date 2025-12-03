<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AsSeens;
use App\Models\ImportantDates;
use App\Models\University;
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

class UniversityController extends Controller
{
    public function index()
    {
        return view('admin.university.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = University::orderBy('order', 'asc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('type', function ($d) {
                    return $d->type;
                })
                ->editColumn('name', function ($d) {
                    return $d->name;
                })
                ->editColumn('logo', function ($d) {
                    $path = Storage::url('university/' . $d->logo);
                    $result = '
                    <img data-original="' . $path . '" src="' . $path . '" alt="" width="100">
                ';
                    return $result;
                })
                ->editColumn('order', function ($d) {
                    $result = '<input type="text" class="form-control" value="' . $d->order . '" id="order_' . $d->id . '" onchange="changeOrder(' . $d->id . ')">';
                    return $result;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog category"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['logo', 'order', 'action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('admin.university.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'logo' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $last_order = University::max('order');

            $university = new University();
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $file_format = $request->file('logo')->getClientOriginalExtension();
                $destinationPath = 'project/eduall-website/university/';
                $time = date('YmdHis');
                $fileName = 'university-' . $time . '.' . $file_format;
                Storage::disk('s3')->put($destinationPath . $fileName, file_get_contents($file));
                $university->logo = $fileName;
            }
            $university->name = $request->name;
            $university->order = $last_order + 1;
            $university->save();
            DB::commit();
            Log::notice('University has been successfully Created by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create University failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/university')->withSuccess('University Was Successfully Created');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $university = University::find($id);
            if ($old_image_path = $university->logo) {
                $file_path = 'project/eduall-website/university/' . $old_image_path;
                if (Storage::disk('s3')->exists($file_path)) {
                    Storage::disk('s3')->delete($file_path);
                }
            }
            $university->delete();
            DB::commit();
            Log::notice('University has been successfully deleted by ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete University failed : ' . $e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/university')->withSuccess('University Was Successfully Deleted');
    }

    public function changeOrder(Request $request)
    {
        DB::beginTransaction();
        try {
            $university = University::findOrFail($request->id);
            $oldOrder = $university->order;
            $newOrder = $request->order;
            $total = University::count();

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
                University::where('order', '>=', $newOrder)
                    ->where('order', '<', $oldOrder)
                    ->increment('order');
            }
            // Jika dipindah ke bawah (contoh: 1 → 5)
            else {
                University::where('order', '<=', $newOrder)
                    ->where('order', '>', $oldOrder)
                    ->decrement('order');
            }

            // Update order record utama
            $university->order = $newOrder;
            $university->save();

            DB::commit();

            Log::notice(
                'Order : ' . $university->name .
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
