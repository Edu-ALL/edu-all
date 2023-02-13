<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Languages;
use App\Models\Regions;
use App\Models\UpcomingEvents;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UpcomingEvent extends Controller
{
    public function index(){
        $upcoming_events = UpcomingEvents::get();
        return view('admin.upcoming-event.index', ['upcoming_events' => $upcoming_events]);
    }

    public function create(){
        return view('admin.upcoming-event.create', [
            'regions' => Regions::get(),
            'languages' => Languages::get(),
        ]);
    }

    public function store(Request $request){
        $rules = [
            'event_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'event_alt' => 'required',
            'event_title' => 'required',
            'event_short_description' => 'required',
            'event_date' => 'required',
            'event_detail' => 'required',
            'event_rsvp' => 'nullable|url',
            'region' => 'required',
            'lang' => 'required',
            'publish_date' => 'required',
            'take_off_date' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $upcoming_event = new UpcomingEvents();
            $upcoming_event->group = date('YmdHis');
            if ($request->hasFile('event_thumbnail')) {
                $file = $request->file('event_thumbnail');
                $file_format = $request->file('event_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/upcoming-event';
                $time = $upcoming_event->group;
                $fileName = 'Upcoming-Event-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $upcoming_event->event_thumbnail = $fileName;
            }
            $upcoming_event->event_alt = $request->event_alt;
            $upcoming_event->event_title = $request->event_title;
            $upcoming_event->event_subtitle = $request->event_short_description;
            $upcoming_event->event_date = $request->event_date;
            $upcoming_event->event_detail = $request->event_detail;
            $upcoming_event->event_rsvp_link = $request->event_rsvp;
            $upcoming_event->event_status = 'active';
            $upcoming_event->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event')->withSuccess('Upcoming Event Was Successfully Created');
    }

    public function edit($group){
        $upcoming_event = UpcomingEvents::where('group', $group)->get();
        return view('admin.upcoming-event.update', ['upcoming_event' => $upcoming_event]);
    }

    public function update($group, Request $request){
        $rules = [
            'event_thumbnail_en' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'event_alt_en' => 'required',
            'event_title_en' => 'required',
            'event_subtitle_en' => 'required',
            'event_date_en' => 'required',
            'event_detail_en' => 'required',
            'event_rsvp_en' => 'nullable|url',
            'event_thumbnail_id' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'event_alt_id' => 'required',
            'event_title_id' => 'required',
            'event_subtitle_id' => 'required',
            'event_date_id' => 'required',
            'event_detail_id' => 'required',
            'event_rsvp_id' => 'nullable|url',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::where('group', $group)->get();
            $upcoming_event_en = $upcoming_event[0];
            if ($request->hasFile('event_thumbnail_en')) {
                if ($old_image_path_en = $upcoming_event_en->event_thumbnail) {
                    $file_path = public_path('uploaded_files/upcoming-event/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('event_thumbnail_en');
                $file_format_en = $request->file('event_thumbnail_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/upcoming-event';
                $time = $upcoming_event_en->group;
                $fileName_en = 'Upcoming-Event-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $upcoming_event_en->event_thumbnail = $fileName_en;
            }
            $upcoming_event_en->event_alt = $request->event_alt_en;
            $upcoming_event_en->event_title = $request->event_title_en;
            $upcoming_event_en->event_subtitle = $request->event_subtitle_en;
            $upcoming_event_en->event_date = $request->event_date_en;
            $upcoming_event_en->event_detail = $request->event_detail_en;
            $upcoming_event_en->event_rsvp_link = $request->event_rsvp_en;
            $upcoming_event_en->updated_at = date('Y-m-d H:i:s');
            $upcoming_event_en->save();

            $upcoming_event_id = $upcoming_event[1];
            if ($request->hasFile('event_thumbnail_id')) {
                if ($old_image_path_id = $upcoming_event_id->event_thumbnail) {
                    $file_path = public_path('uploaded_files/upcoming-event/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('event_thumbnail_id');
                $file_format_id = $request->file('event_thumbnail_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/upcoming-event';
                $time = $upcoming_event_id->group;
                $fileName_id = 'Upcoming-Event-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $upcoming_event_id->event_thumbnail = $fileName_id;
            }
            $upcoming_event_id->event_alt = $request->event_alt_id;
            $upcoming_event_id->event_title = $request->event_title_id;
            $upcoming_event_id->event_subtitle = $request->event_subtitle_id;
            $upcoming_event_id->event_date = $request->event_date_id;
            $upcoming_event_id->event_detail = $request->event_detail_id;
            $upcoming_event_id->event_rsvp_link = $request->event_rsvp_id;
            $upcoming_event_id->updated_at = date('Y-m-d H:i:s');
            $upcoming_event_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event/'.$group.'/edit')->withSuccess('Upcoming Event Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::where('group', $group)->get();
            if ($old_image_path_en = $upcoming_event[0]->event_thumbnail) {
                $file_path_en = public_path('uploaded_files/upcoming-event/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $upcoming_event[1]->event_thumbnail) {
                $file_path_id = public_path('uploaded_files/upcoming-event/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $upcoming_event[0]->delete();
            $upcoming_event[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event')->withSuccess('Upcoming Event Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::where('group', $group)->get();
            $upcoming_event[0]->event_status = 'inactive';
            $upcoming_event[1]->event_status = 'inactive';
            $upcoming_event[0]->save();
            $upcoming_event[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::where('group', $group)->get();
            $upcoming_event[0]->event_status = 'active';
            $upcoming_event[1]->event_status = 'active';
            $upcoming_event[0]->save();
            $upcoming_event[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event');
    }
}
