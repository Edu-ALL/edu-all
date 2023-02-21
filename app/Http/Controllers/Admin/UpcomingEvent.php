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
        $upcoming_events = UpcomingEvents::orderBy('updated_at', 'desc')->get();
        // $this->checkPublish();
        // $this->checkTakeOff();
        return view('admin.upcoming-event.index', ['upcoming_events' => $upcoming_events]);
    }

    public function checkPublish(){
        $upcoming_events = UpcomingEvents::get();
        foreach ($upcoming_events as $event) {
            if ($event->publish_date == date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $event->event_status = 'publish';
                    $event->save();
                    DB::commit();
                } catch (Exception $e) {
                    DB::rollBack();
                    return Redirect::back()->withErrors($e->getMessage());
                }
            }
        }
    }

    public function checkTakeOff(){
        $upcoming_events = UpcomingEvents::get();
        foreach ($upcoming_events as $event) {
            if ($event->take_off_date == date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $event->event_status = 'draft';
                    $event->save();
                    DB::commit();
                } catch (Exception $e) {
                    DB::rollBack();
                    return Redirect::back()->withErrors($e->getMessage());
                }
            }
        }
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
                $destinationPath = public_path().'/uploaded_files/'.'upcoming-event/'.date('Y').'/'.date('m').'/';
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
            $upcoming_event->region = $request->region;
            $upcoming_event->lang = $request->lang;
            $upcoming_event->publish_date = $request->publish_date;
            $upcoming_event->take_off_date = $request->take_off_date;
            $upcoming_event->event_status = 'draft';
            $upcoming_event->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event')->withSuccess('Upcoming Event Was Successfully Created');
    }

    public function edit($id){
        $upcoming_event = UpcomingEvents::find($id);
        return view('admin.upcoming-event.update', [
            'upcoming_event' => $upcoming_event,
            'regions' => Regions::get(),
            'languages' => Languages::get(),
        ]);
    }

    public function update($id, Request $request){
        $rules = [
            'event_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
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
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::find($id);
            if ($request->hasFile('event_thumbnail')) {
                if ($old_image_path = $upcoming_event->event_thumbnail) {
                    $file_path = public_path('uploaded_files/'.'upcoming-event/'.$upcoming_event->created_at->format('Y').'/'.$upcoming_event->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('event_thumbnail');
                $file_format = $request->file('event_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'upcoming-event/'.$upcoming_event->created_at->format('Y').'/'.$upcoming_event->created_at->format('m').'/';
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
            $upcoming_event->region = $request->region;
            $upcoming_event->lang = $request->lang;
            $upcoming_event->publish_date = $request->publish_date;
            $upcoming_event->take_off_date = $request->take_off_date;
            $upcoming_event->updated_at = date('Y-m-d H:i:s');
            $upcoming_event->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event/'.$id.'/edit')->withSuccess('Upcoming Event Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::find($id);
            if ($old_image_path = $upcoming_event->event_thumbnail) {
                $file_path = public_path('uploaded_files/'.'upcoming-event/'.$upcoming_event->created_at->format('Y').'/'.$upcoming_event->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $upcoming_event->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event')->withSuccess('Upcoming Event Was Successfully Deleted');
    }

    public function status_draft($id){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::find($id);
            $upcoming_event->event_status = 'draft';
            $upcoming_event->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event');
    }

    public function status_publish($id){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::find($id);
            $upcoming_event->event_status = 'publish';
            $upcoming_event->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event');
    }
}
