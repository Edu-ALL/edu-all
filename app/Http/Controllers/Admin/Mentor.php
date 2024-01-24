<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use App\Models\MentorVideos;
use App\Models\WebsiteSettings;
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

class Mentor extends Controller
{
    public function index(){
        return view('admin.mentor.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getMentor(Request $request){
        if ($request->ajax()) {
            $data = Mentors::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('graduation', function($d){
                $result = '
                    '.Str::limit($d->mentor_graduation, 120, '...').'
                ';
                return $result;
            })
            ->editColumn('description', function($d){
                $result = '
                    '.Str::limit($d->description, 120, '...').'
                ';
                return $result;
            })
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'mentor/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->mentor_picture);
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
                if ($d->mentor_status == 'active') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this mentor">
                                '.$d->mentor_status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this mentor">
                                '.$d->mentor_status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/mentor/'.$d->group.'/view">
                        <i class="fa-solid fa-magnifying-glass" data-bs-toggle="tooltip" data-bs-title="View this mentor"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->group.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this mentor"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['graduation', 'description', 'image', 'language', 'status', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.mentor.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'mentor_image' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt' => 'required',
            'mentor_fullname' => 'required|max:24',
            'mentor_slug' => 'required',
            'mentor_category' => 'required',
            'mentor_graduation_en' => 'required',
            'mentor_currently_working_en' => 'nullable',
            'mentor_expertise_en' => 'nullable',
            'mentor_description_en' => 'required',
            'mentor_short_description_en' => 'required',
            'mentor_graduation_id' => 'required',
            'mentor_currently_working_id' => 'nullable',
            'mentor_expertise_id' => 'nullable',
            'mentor_description_id' => 'required',
            'mentor_short_description_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_en = new Mentors();
            $mentor_en->group = date('YmdHis');
            $mentor_en->mentor_fullname = $request->mentor_fullname;
            $mentor_en->mentor_slug = $request->mentor_slug;
            $mentor_en->mentor_category = $request->mentor_category;
            $mentor_en->mentor_alt = $request->mentor_alt;
            $mentor_en->mentor_graduation = $request->mentor_graduation_en;
            $mentor_en->currently_working = $request->mentor_currently_working_en;
            $mentor_en->expertise = $request->mentor_expertise_en;
            $mentor_en->description = $request->mentor_description_en;
            $mentor_en->short_desc = $request->mentor_short_description_en;
            $mentor_en->meta_title = $request->meta_title_en;
            $mentor_en->meta_desc = $request->meta_desc_en;
            $mentor_en->value_1 = $request->value_1_en;
            $mentor_en->value_2 = $request->value_2_en;
            $mentor_en->value_3 = $request->value_3_en;
            $mentor_en->mentor_status = 'active';
            $mentor_en->lang = 'en';

            $mentor_id = new Mentors();
            $mentor_id->group = $mentor_en->group;
            $mentor_id->mentor_fullname = $request->mentor_fullname;
            $mentor_id->mentor_slug = $request->mentor_slug;
            $mentor_id->mentor_category = $request->mentor_category;
            $mentor_id->mentor_alt = $request->mentor_alt;
            $mentor_id->mentor_graduation = $request->mentor_graduation_id;
            $mentor_id->currently_working = $request->mentor_currently_working_id;
            $mentor_id->expertise = $request->mentor_expertise_id;
            $mentor_id->description = $request->mentor_description_id;
            $mentor_id->short_desc = $request->mentor_short_description_id;
            $mentor_id->meta_title = $request->meta_title_id;
            $mentor_id->meta_desc = $request->meta_desc_id;
            $mentor_id->value_1 = $request->value_1_id;
            $mentor_id->value_2 = $request->value_2_id;
            $mentor_id->value_3 = $request->value_3_id;
            $mentor_id->mentor_status = 'active';
            $mentor_id->lang = 'id';

            if ($request->hasFile('mentor_image')) {
                $file = $request->file('mentor_image');
                $file_format = $request->file('mentor_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'mentor/'.date('Y').'/'.date('m').'/';
                $time = $mentor_en->group;
                $fileName = 'Mentor-picture-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $mentor_en->mentor_picture = $fileName;
                $mentor_id->mentor_picture = $fileName;
            }

            $mentor_en->save();
            $mentor_id->save();
            DB::commit();
            Log::notice('Mentor : '.$mentor_en->mentor_fullname.' has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Mentor failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$mentor_en->group.'/view')->withSuccess('Mentor Was Successfully Created');
    }

    public function getMentorVideo(Request $request, $group){
        if ($request->ajax()) {
            $data = MentorVideos::where('mentor_id', $group)->orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('video_embed', function($d){
                $result = '
                    <a href="'.$d->video_embed.'" target="_blank">'.$d->video_embed.'</a>
                ';
                return $result;
            })
            ->editColumn('yt_id', function($d){
                $result = '
                    '.$d->youtube_id.'
                ';
                return $result;
            })
            ->editColumn('action', function($d){
                $video_embed = "'".$d->video_embed."'";
                $result = '
                    <div class="d-flex flex-row gap-1">
                        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#video" style="text-transform: capitalize;" onclick="formUpdate('.$d->mentor_id.', '.$d->id.', '.$video_embed.')">
                            <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this mentor video"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->mentor_id.', '.$d->id.')">
                            <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this mentor video"></i>
                        </button>
                    </div>
                ';
                return $result;
            })
            ->rawColumns(['video_embed', 'yt_id', 'action'])
            ->make(true);
        }
    }

    public function view($group){
        if (!Mentors::where('group', $group)->first('id')) {
            return redirect('/admin/mentor')->withErrors('Mentor Cannot Be Found');
        }
        $mentor = Mentors::where('group', $group)->get();
        return view('admin.mentor.view', [
            'mentor' => $mentor,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function edit($group){
        $mentor = Mentors::where('group', $group)->get();
        return view('admin.mentor.update', [
            'mentor' => $mentor,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function update($group, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'mentor_image' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'mentor_alt' => 'required',
            'mentor_fullname' => 'required|max:24',
            'mentor_slug' => 'required',
            'mentor_category' => 'required',
            'mentor_graduation_en' => 'required',
            'mentor_currently_working_en' => 'nullable',
            'mentor_expertise_en' => 'nullable',
            'mentor_description_en' => 'required',
            'mentor_short_description_en' => 'required',
            'mentor_graduation_id' => 'required',
            'mentor_currently_working_id' => 'nullable',
            'mentor_expertise_id' => 'nullable',
            'mentor_description_id' => 'required',
            'mentor_short_description_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor_en = $mentor[0];
            $mentor_en->mentor_fullname = $request->mentor_fullname;
            $mentor_en->mentor_slug = $request->mentor_slug;
            $mentor_en->mentor_category = $request->mentor_category;
            $mentor_en->mentor_graduation = $request->mentor_graduation_en;
            $mentor_en->currently_working = $request->mentor_currently_working_en;
            $mentor_en->expertise = $request->mentor_expertise_en;
            $mentor_en->description = $request->mentor_description_en;
            $mentor_en->short_desc = $request->mentor_short_description_en;
            $mentor_en->mentor_alt = $request->mentor_alt;
            $mentor_en->meta_title = $request->meta_title_en;
            $mentor_en->meta_desc = $request->meta_desc_en;
            $mentor_en->value_1 = $request->value_1_en;
            $mentor_en->value_2 = $request->value_2_en;
            $mentor_en->value_3 = $request->value_3_en;
            $mentor_en->updated_at = date('Y-m-d H:i:s');

            $mentor_id = $mentor[1];
            $mentor_id->mentor_fullname = $request->mentor_fullname;
            $mentor_id->mentor_slug = $request->mentor_slug;
            $mentor_id->mentor_category = $request->mentor_category;
            $mentor_id->mentor_graduation = $request->mentor_graduation_id;
            $mentor_id->currently_working = $request->mentor_currently_working_id;
            $mentor_id->expertise = $request->mentor_expertise_id;
            $mentor_id->description = $request->mentor_description_id;
            $mentor_id->short_desc = $request->mentor_short_description_id;
            $mentor_id->mentor_alt = $request->mentor_alt;
            $mentor_id->meta_title = $request->meta_title_id;
            $mentor_id->meta_desc = $request->meta_desc_id;
            $mentor_id->value_1 = $request->value_1_id;
            $mentor_id->value_2 = $request->value_2_id;
            $mentor_id->value_3 = $request->value_3_id;
            $mentor_id->updated_at = date('Y-m-d H:i:s');

            if ($request->hasFile('mentor_image')) {
                if ($mentor_en->mentor_picture == $mentor_id->mentor_picture) {
                    $old_image_path = $mentor_en->mentor_picture;
                    $file_path = public_path('uploaded_files/'.'mentor/'.$mentor_en->created_at->format('Y').'/'.$mentor_en->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('mentor_image');
                $file_format = $request->file('mentor_image')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'mentor/'.$mentor_en->created_at->format('Y').'/'.$mentor_en->created_at->format('m').'/';
                $time = $mentor_en->group;
                $fileName = 'Mentor-picture-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $mentor_en->mentor_picture = $fileName;
                $mentor_id->mentor_picture = $fileName;
            }

            $mentor_en->save();
            $mentor_id->save();
            DB::commit();
            Log::notice('Mentor : '.$mentor_en->mentor_fullname.' has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Mentor failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$mentor_en->group.'/view')->withSuccess('Mentor Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor_fullname = $mentor[0]->mentor_fullname;
            if ($mentor[0]->blog->count() > 0 || $mentor[1]->blog->count() > 0) {
                return Redirect::back()->withErrors('This Mentor is Still Used');
            } else {
                if ($mentor[0]->mentor_picture == $mentor[1]->mentor_picture) {
                    $old_image_path = $mentor[0]->mentor_picture;
                    $file_path = public_path('uploaded_files/'.'mentor/'.$mentor[0]->created_at->format('Y').'/'.$mentor[0]->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $mentor_videos = MentorVideos::where('mentor_id', $group)->get();
                foreach ($mentor_videos as $video) { 
                    $video->delete();
                }
                $mentor[0]->delete();
                $mentor[1]->delete();
                DB::commit();
                Log::notice('Mentor : '.$mentor_fullname.' has been successfully Delete by '.Auth::guard('web-admin')->user()->name);
            }
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Mentor failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/mentor')->withSuccess('Mentor Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor[0]->mentor_status = 'inactive';
            $mentor[1]->mentor_status = 'inactive';
            $mentor[0]->save();
            $mentor[1]->save();
            DB::commit();
            Log::notice('Mentor : '.$mentor[0]->mentor_fullname.' has been successfully Deactivated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Deactivate Mentor failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $mentor = Mentors::where('group', $group)->get();
            $mentor[0]->mentor_status = 'active';
            $mentor[1]->mentor_status = 'active';
            $mentor[0]->save();
            $mentor[1]->save();
            DB::commit();
            Log::notice('Mentor : '.$mentor[0]->mentor_fullname.' has been successfully Activated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Activate Tutor failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor');
    }
}
