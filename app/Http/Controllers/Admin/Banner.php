<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Languages;
use App\Models\Regions;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class Banner extends Controller
{
    public function index(Request $request){
        $regions = Regions::get();
        $languages = Languages::get();
        // $banner_list = Banners::get();
        return view('admin.banner.index', [
            'regions' => $regions,
            'languages' => $languages,
            // 'banner_list' => $banner_list,
        ]);
    }

    public function getBanner(Request $request){
        if ($request->ajax()) {
            $data = Banners::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('title', function($d){
                if ($d->banner_title != null) {
                    $result = '
                        '.$d->banner_title.'
                    ';
                } else {
                    $result = '-';
                }
                return $result;
            })
            ->editColumn('description', function($d){
                if ($d->banner_description != null) {
                    $result = '
                        '.Str::limit($d->banner_description, 120, '...').'
                    ';
                } else {
                    $result = '-';
                }
                return $result;
            })
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'banner/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->banner_img);
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="80">
                ';
                return $result;
            })
            ->editColumn('image_mobile', function($d){
                $path = asset('uploaded_files/'.'banner/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->banner_img_mobile);
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="80">
                ';
                return $result;
            })
            ->editColumn('region', function($d){
                $path = asset('assets/img/flag/flag-'.$d->region.'.png');
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="30">
                    <p class="pt-1" style="font-size: 13px !important">
                        '.$d->regions->region.'
                    </p>
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
                if ($d->banner_status == 'active') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this banner">
                                '.$d->banner_status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this banner">
                                '.$d->banner_status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/banner/'.$d->id.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this banner"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this banner"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['title', 'description', 'image', 'image_mobile', 'region', 'language', 'status', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.banner.create', [
            'regions' => Regions::get(),
            'languages' => Languages::get(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'banner_image' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_image_mobile' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt' => 'required',
            'banner_title' => 'nullable|max:255',
            'banner_description' => 'nullable',
            'banner_button' => 'required',
            'banner_button_color' => 'required',
            'banner_link' => 'required|url',
            'region' => 'required',
            'lang' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $banner = new Banners;
            $banner->group = date('YmdHis');
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $file_format = $request->file('banner_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'banner/'.date('Y').'/'.date('m').'/';
                $time = $banner->group;
                $fileName = 'Banner-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $banner->banner_img = $fileName;
            }
            if ($request->hasFile('banner_image_mobile')) {
                $file = $request->file('banner_image_mobile');
                $file_format = $request->file('banner_image_mobile')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'banner/'.date('Y').'/'.date('m').'/';
                $time = $banner->group;
                $fileName = 'Banner-Mobile-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $banner->banner_img_mobile = $fileName;
            }
            $banner->banner_alt = $request->banner_alt;
            $banner->banner_title = $request->banner_title;
            $banner->banner_description = $request->banner_description;
            $banner->banner_button = $request->banner_button;
            $banner->banner_button_color = $request->banner_button_color;
            $banner->banner_link = $request->banner_link;
            $banner->banner_status = 'active';
            $banner->region = $request->region;
            $banner->lang = $request->lang;
            $banner->save();
            DB::commit();
            Log::notice('Banner : '.$banner->banner_title.' has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner')->withSuccess('Banner Was Successfully Created');
    }

    public function edit($id){
        $banner = Banners::with('regions', 'languages')->find($id);
        return view('admin.banner.update', [
            'banner' => $banner,
            'regions' => Regions::get(),
            'languages' => Languages::get(),
        ]);
    }

    public function update($id, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'banner_image' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_image_mobile' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'banner_alt' => 'required',
            'banner_title' => 'nullable|max:255',
            'banner_description' => 'nullable',
            'banner_button' => 'required',
            'banner_button_color' => 'required',
            'banner_link' => 'required|url',
            'region' => 'required',
            'lang' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            if ($request->hasFile('banner_image')) {
                if ($old_image_path = $banner->banner_img) {
                    $file_path = public_path('uploaded_files/'.'banner/'.$banner->created_at->format('Y').'/'.$banner->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('banner_image');
                $file_format = $request->file('banner_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'banner/'.$banner->created_at->format('Y').'/'.$banner->created_at->format('m').'/';
                $time = $banner->group;
                $fileName = 'Banner-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $banner->banner_img = $fileName;
            }
            if ($request->hasFile('banner_image_mobile')) {
                if ($old_image_path = $banner->banner_img_mobile) {
                    $file_path = public_path('uploaded_files/'.'banner/'.$banner->created_at->format('Y').'/'.$banner->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('banner_image_mobile');
                $file_format = $request->file('banner_image_mobile')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'banner/'.$banner->created_at->format('Y').'/'.$banner->created_at->format('m').'/';
                $time = $banner->group;
                $fileName = 'Banner-Mobile-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $banner->banner_img_mobile = $fileName;
            }
            $banner->banner_alt = $request->banner_alt;
            $banner->banner_title = $request->banner_title;
            $banner->banner_description = $request->banner_description;
            $banner->banner_button = $request->banner_button;
            $banner->banner_button_color = $request->banner_button_color;
            $banner->banner_link = $request->banner_link;
            $banner->region = $request->region;
            $banner->lang = $request->lang;
            $banner->updated_at = date('Y-m-d H:i:s');
            $banner->save();
            DB::commit();
            Log::notice('Banner : '.$banner->banner_title.' has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner/'.$id.'/edit')->withSuccess('Banner Was Successfully Updated');
    }

    public function deactivate($id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            $banner->banner_status = 'inactive';
            $banner->save();
            DB::commit();
            Log::notice('Banner : '.$banner->banner_title.' has been successfully Deactivated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Deactivate Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner');
    }

    public function activate($id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            $banner->banner_status = 'active';
            $banner->save();
            DB::commit();
            Log::notice('Banner : '.$banner->banner_title.' has been successfully Activated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Activate Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            $banner_title = $banner->banner_title;
            if ($old_image_path = $banner->banner_img) {
                $file_path = public_path('uploaded_files/'.'banner/'.$banner->created_at->format('Y').'/'.$banner->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            if ($old_image_path = $banner->banner_img_mobile) {
                $file_path = public_path('uploaded_files/'.'banner/'.$banner->created_at->format('Y').'/'.$banner->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $banner->delete();
            DB::commit();
            Log::notice('Banner : '.$banner_title.' has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Banner failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/banner')->withSuccess('Banner Was Successfully Deleted');
    }

    public function updateOrder(Request $request, $id){
        DB::beginTransaction();
        try {
            $banner = Banners::find($id);
            if ($request->orderNumber == 'unorder') {
                $banner->banner_order = NULL;
                Log::notice('Banner : '.$banner->banner_title.' has been successfully Unordered by '.Auth::guard('web-admin')->user()->name);
            } else {
                $banner->banner_order = $request->orderNumber;
                Log::notice('Banner : '.$banner->banner_title.' has been successfully Ordered by '.Auth::guard('web-admin')->user()->name);
            }
            $banner->save();
            DB::commit();
            $message = "Success";
        } catch (Exception $e) {
            DB::rollBack();
            $message = "Failed";
            Log::error('Order Banner failed : '.$e->getMessage());
            return $message;
        }

        return $message;
    }
}
