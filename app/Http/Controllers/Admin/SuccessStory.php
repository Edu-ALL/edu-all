<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuccessStories;
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

class SuccessStory extends Controller
{
    public function index(){
        $success_stories = SuccessStories::orderBy('updated_at', 'desc')->get();
        return view('admin.success-stories.index', [
            'success_stories' => $success_stories,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getSuccessStories(Request $request){
        if ($request->ajax()) {
            $data = SuccessStories::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('description', function($d){
                $result = '
                    '.Str::limit($d->description, 120, '...').'
                ';
                return $result;
            })
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'success-stories/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->thumbnail);
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
                if ($d->status == 'active') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this success stories">
                                '.$d->status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this success stories">
                                '.$d->status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/success-stories/'.$d->group.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this success stories"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->group.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this success stories"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['description', 'image', 'language', 'status', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.success-stories.create', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'story_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_alt' => 'required',
            'story_home_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_home_alt' => 'required',
            'story_name' => 'required',
            'story_category' => 'required',
            'story_video_link' => 'nullable|url',
            'story_badge1_en' => 'required',
            'story_badge2_en' => 'nullable',
            'story_badge3_en' => 'nullable',
            'story_badge4_en' => 'nullable',
            'story_summary_description_en' => 'required',
            'story_description_en' => 'required',
            'story_achievement_img_en' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_en' => 'nullable',
            'story_badge1_id' => 'required',
            'story_badge2_id' => 'nullable',
            'story_badge3_id' => 'nullable',
            'story_badge4_id' => 'nullable',
            'story_summary_description_id' => 'required',
            'story_description_id' => 'required',
            'story_achievement_img_id' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_id' => 'nullable',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $success_stories_en = new SuccessStories();
            $success_stories_en->group = date('YmdHis');
            $success_stories_en->thumbnail_alt = $request->story_alt;
            $success_stories_en->name = $request->story_name;
            $success_stories_en->category = $request->story_category;
            $success_stories_en->video_link = $request->story_video_link;
            $success_stories_en->badge_1 = $request->story_badge1_en;
            $success_stories_en->badge_2 = $request->story_badge2_en;
            $success_stories_en->badge_3 = $request->story_badge3_en;
            $success_stories_en->badge_4 = $request->story_badge4_en;
            $success_stories_en->summary_description = $request->story_summary_description_en;
            $success_stories_en->description = $request->story_description_en;
            if ($request->hasFile('story_achievement_img_en')) {
                $file_en = $request->file('story_achievement_img_en');
                $file_format_en = $request->file('story_achievement_img_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/'.'success-stories/'.date('Y').'/'.date('m').'/';
                $time = $success_stories_en->group;
                $fileName_en = 'Success-Stories-achievement-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $success_stories_en->achievement_image = $fileName_en;
            }
            $success_stories_en->achievement_alt = $request->story_achievement_alt_en;
            $success_stories_en->status = 'active';
            $success_stories_en->lang = 'en';

            $success_stories_id = new SuccessStories();
            $success_stories_id->group = $success_stories_en->group;
            $success_stories_id->thumbnail_alt = $request->story_alt;
            $success_stories_id->home_thumbnail_alt = $request->story_home_alt;
            $success_stories_id->name = $request->story_name;
            $success_stories_id->category = $request->story_category;
            $success_stories_id->video_link = $request->story_video_link;
            $success_stories_id->badge_1 = $request->story_badge1_id;
            $success_stories_id->badge_2 = $request->story_badge2_id;
            $success_stories_id->badge_3 = $request->story_badge3_id;
            $success_stories_id->badge_4 = $request->story_badge4_id;
            $success_stories_id->summary_description = $request->story_summary_description_id;
            $success_stories_id->description = $request->story_description_id;
            if ($request->hasFile('story_achievement_img_id')) {
                $file_id = $request->file('story_achievement_img_id');
                $file_format_id = $request->file('story_achievement_img_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/'.'success-stories/'.date('Y').'/'.date('m').'/';
                $time = $success_stories_id->group;
                $fileName_id = 'Success-Stories-achievement-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $success_stories_id->achievement_image = $fileName_id;
            }
            $success_stories_id->achievement_alt = $request->story_achievement_alt_id;
            $success_stories_id->status = 'active';
            $success_stories_id->lang = 'id';

            // Thumbnail 
            if ($request->hasFile('story_thumbnail')) {
                $file = $request->file('story_thumbnail');
                $file_format = $request->file('story_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'success-stories/'.date('Y').'/'.date('m').'/';
                $time = $success_stories_en->group;
                $fileName = 'Success-Stories-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $success_stories_en->thumbnail = $fileName;
                $success_stories_id->thumbnail = $fileName;
            }

            // Home Thumbnail
            if ($request->hasFile('story_home_thumbnail')) {
                $file = $request->file('story_home_thumbnail');
                $file_format = $request->file('story_home_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'success-stories/'.date('Y').'/'.date('m').'/';
                $time = $success_stories_en->group;
                $fileName = 'Success-Stories-home-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $success_stories_en->home_thumbnail = $fileName;
                $success_stories_id->home_thumbnail = $fileName;
            }

            $success_stories_en->save();
            $success_stories_id->save();

            DB::commit();
            Log::notice('New Success Story : '. $success_stories_en->name .', Was Successfully Created');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Success Story Failed To Create: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories')->withSuccess('Success Stories Was Successfully Created');
    }

    public function edit($group){
        $success_stories = SuccessStories::where('group', $group)->get();
        return view('admin.success-stories.update', [
            'success_stories' => $success_stories,
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function update($group, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'story_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_alt' => 'required',
            'story_home_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_home_alt' => 'required',
            'story_name' => 'required',
            'story_category' => 'required',
            'story_video_link' => 'nullable|url',
            'story_badge1_en' => 'required',
            'story_badge2_en' => 'nullable',
            'story_badge3_en' => 'nullable',
            'story_badge4_en' => 'nullable',
            'story_summary_description_en' => 'required',
            'story_description_en' => 'required',
            'story_achievement_img_en' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_en' => 'required',
            'story_badge1_id' => 'required',
            'story_badge2_id' => 'nullable',
            'story_badge3_id' => 'nullable',
            'story_badge4_id' => 'nullable',
            'story_summary_description_id' => 'required',
            'story_description_id' => 'required',
            'story_achievement_img_id' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            $success_stories_en = $success_stories[0];
            $success_stories_en->thumbnail_alt = $request->story_alt;
            $success_stories_en->home_thumbnail_alt = $request->story_home_alt;
            $success_stories_en->name = $request->story_name;
            $success_stories_en->category = $request->story_category;
            $success_stories_en->video_link = $request->story_video_link;
            $success_stories_en->badge_1 = $request->story_badge1_en;
            $success_stories_en->badge_2 = $request->story_badge2_en;
            $success_stories_en->badge_3 = $request->story_badge3_en;
            $success_stories_en->badge_4 = $request->story_badge4_en;
            $success_stories_en->summary_description = $request->story_summary_description_en;
            $success_stories_en->description = $request->story_description_en;
            if ($request->hasFile('story_achievement_img_en')) {
                if ($old_image_path_en = $success_stories_en->achievement_image) {
                    $file_path = public_path('uploaded_files/'.'success-stories/'.$success_stories_en->created_at->format('Y').'/'.$success_stories_en->created_at->format('m').'/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('story_achievement_img_en');
                $file_format_en = $request->file('story_achievement_img_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/'.'success-stories/'.$success_stories_en->created_at->format('Y').'/'.$success_stories_en->created_at->format('m').'/';
                $time = $success_stories_en->group;
                $fileName_en = 'Success-Stories-achievement-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $success_stories_en->achievement_image = $fileName_en;
            }
            $success_stories_en->achievement_alt = $request->story_achievement_alt_en;
            $success_stories_en->updated_at = date('Y-m-d H:i:s');

            $success_stories_id = $success_stories[1];
            $success_stories_id->thumbnail_alt = $request->story_alt;
            $success_stories_id->home_thumbnail_alt = $request->story_home_alt;
            $success_stories_id->name = $request->story_name;
            $success_stories_id->category = $request->story_category;
            $success_stories_id->video_link = $request->story_video_link;
            $success_stories_id->badge_1 = $request->story_badge1_id;
            $success_stories_id->badge_2 = $request->story_badge2_id;
            $success_stories_id->badge_3 = $request->story_badge3_id;
            $success_stories_id->badge_4 = $request->story_badge4_id;
            $success_stories_id->summary_description = $request->story_summary_description_id;
            $success_stories_id->description = $request->story_description_id;
            if ($request->hasFile('story_achievement_img_id')) {
                if ($old_image_path_id = $success_stories_id->achievement_image) {
                    $file_path = public_path('uploaded_files/'.'success-stories/'.$success_stories_id->created_at->format('Y').'/'.$success_stories_id->created_at->format('m').'/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('story_achievement_img_id');
                $file_format_id = $request->file('story_achievement_img_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/'.'success-stories/'.$success_stories_id->created_at->format('Y').'/'.$success_stories_id->created_at->format('m').'/';
                $time = $success_stories_id->group;
                $fileName_id = 'Success-Stories-achievement-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $success_stories_id->achievement_image = $fileName_id;
            }
            $success_stories_id->achievement_alt = $request->story_achievement_alt_id;
            $success_stories_id->updated_at = date('Y-m-d H:i:s');

            // Thumbnail 
            if ($request->hasFile('story_thumbnail')) {
                if ($success_stories_en->thumbnail == $success_stories_id->thumbnail) {
                    $old_image_path = $success_stories_en->thumbnail;
                    $file_path = public_path('uploaded_files/'.'success-stories/'.$success_stories_en->created_at->format('Y').'/'.$success_stories_en->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('story_thumbnail');
                $file_format = $request->file('story_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'success-stories/'.$success_stories_en->created_at->format('Y').'/'.$success_stories_en->created_at->format('m').'/';
                $time = $success_stories_en->group;
                $fileName = 'Success-Stories-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $success_stories_en->thumbnail = $fileName;
                $success_stories_id->thumbnail = $fileName;
            }

            // Home Thumbnail 
            if ($request->hasFile('story_home_thumbnail')) {
                if ($success_stories_en->home_thumbnail == $success_stories_id->home_thumbnail) {
                    $old_image_path = $success_stories_en->home_thumbnail;
                    $file_path = public_path('uploaded_files/'.'success-stories/'.$success_stories_en->created_at->format('Y').'/'.$success_stories_en->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('story_home_thumbnail');
                $file_format = $request->file('story_home_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'success-stories/'.$success_stories_en->created_at->format('Y').'/'.$success_stories_en->created_at->format('m').'/';
                $time = $success_stories_en->group;
                $fileName = 'Success-Stories-home-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $success_stories_en->home_thumbnail = $fileName;
                $success_stories_id->home_thumbnail = $fileName;
            }

            $success_stories_en->save();
            $success_stories_id->save();
            DB::commit();
            Log::notice('Success Story : '. $success_stories_en->name .', Was Successfully Updated  By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Success Story Failed To Update: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories/'.$group.'/edit')->withSuccess('Success Stories Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            if ($success_stories[0]->thumbnail == $success_stories[1]->thumbnail) {
                $old_image_path = $success_stories[0]->thumbnail;
                $file_path = public_path('uploaded_files/'.'success-stories/'.$success_stories[0]->created_at->format('Y').'/'.$success_stories[0]->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            if ($success_stories[0]->home_thumbnail == $success_stories[1]->home_thumbnail) {
                $old_image_path = $success_stories[0]->home_thumbnail;
                $file_path = public_path('uploaded_files/'.'success-stories/'.$success_stories[0]->created_at->format('Y').'/'.$success_stories[0]->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            if ($old_image_path_en = $success_stories[0]->achievement_image) {
                $file_path_en = public_path('uploaded_files/'.'success-stories/'.$success_stories[0]->created_at->format('Y').'/'.$success_stories[0]->created_at->format('m').'/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $success_stories[1]->achievement_image) {
                $file_path_id = public_path('uploaded_files/'.'success-stories/'.$success_stories[1]->created_at->format('Y').'/'.$success_stories[1]->created_at->format('m').'/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $success_stories[0]->delete();
            $success_stories[1]->delete();
            DB::commit();
            Log::notice('Success Story : '. $success_stories[0]->name .', Was Successfully Deleted By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Success Story Failed To Delete:: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories')->withSuccess('Success Stories Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            $success_stories[0]->status = 'inactive';
            $success_stories[1]->status = 'inactive';
            $success_stories[0]->save();
            $success_stories[1]->save();
            DB::commit();
            Log::notice('Success Story : '. $success_stories[0]->name .', Was Successfully Deactivate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Success Story Failed To Deactivate: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            $success_stories[0]->status = 'active';
            $success_stories[1]->status = 'active';
            $success_stories[0]->save();
            $success_stories[1]->save();

            Log::notice('Success Story : '. $success_stories[0]->name .', Was Successfully Activate By : ' . Auth::guard('web-admin')->user()->name);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Success Story Failed To Activate By : ' . Auth::guard('web-admin')->user()->name . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories');
    }
}
