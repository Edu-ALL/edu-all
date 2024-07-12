<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Languages;
use App\Models\Regions;
use App\Models\UpcomingEvents;
use App\Models\WebsiteSettings;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UpcomingEvent extends Controller
{
    public function index(){
        return view('admin.upcoming-event.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getUpcomingEvent(Request $request){
        if ($request->ajax()) {
            $data = UpcomingEvents::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'upcoming-event/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->event_thumbnail);
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
                if ($d->event_status == 'publish') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#draft" style="text-transform: capitalize;" onclick="formDraft('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Set to Draft">
                                '.$d->event_status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#publish" style="text-transform: capitalize;" onclick="formPublish('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Set to Publish">
                                '.$d->event_status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/upcoming-event/'.$d->id.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this upcoming event"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this upcoming event"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['image', 'region', 'language', 'status', 'action'])
            ->make(true);
        }
    }

    public function checkPublish(){
        $upcoming_events = UpcomingEvents::where('event_status', 'draft')->get();
        foreach ($upcoming_events as $event) {
            if (date('Y-m-d', strtotime($event->publish_date)) == date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $event->event_status = 'publish';
                    $event->updated_at = date('Y-m-d');
                    $event->save();
                    Log::info('check publish is running');
                    DB::commit();
                } catch (Exception $e) {
                    Log::error('check publish not running');
                    DB::rollBack();
                    return Redirect::back()->withErrors($e->getMessage());
                }
            }
        }
    }

    public function checkTakeOff(){
        $upcoming_events = UpcomingEvents::where('event_status', 'publish')->get();
        foreach ($upcoming_events as $event) {
            if (date('Y-m-d', strtotime($event->take_off_date)) <= date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $event->event_status = 'draft';
                    $event->updated_at = date('Y-m-d');
                    $event->save();
                    Log::info('check publish is running');
                    DB::commit();
                } catch (Exception $e) {
                    Log::error('check publish not running');
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
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

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
            'category' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
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
            $upcoming_event->category = $request->category;
            // $upcoming_event->created_at = date('Y-m-d H:i:s');
            // $upcoming_event->updated_at = date('Y-m-d H:i:s');
            $upcoming_event->save();

            DB::commit();
            Log::notice('New Upcomming Event : '. $upcoming_event->event_title .', Was Successfully Created By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Upcoming Event Failed To Create: : ' .  $e);
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
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function update($id, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

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
            'category' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
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
            $upcoming_event->category = $request->category;
            // $upcoming_event->updated_at = date('Y-m-d H:i:s');
            $upcoming_event->save();

            DB::commit();
            Log::notice('Upcomming Event : '. $upcoming_event->event_title .', Was Successfully Updated By: ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Upcoming Event Failed To Update: : ' .  $e);
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
            Log::notice('Upcomming Event : '. $upcoming_event->event_title . ', Was Successfully Deleted By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Upcoming Event Failed To Delete: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event')->withSuccess('Upcoming Event Was Successfully Deleted By : ' . Auth::guard('web-admin')->user()->name);
    }

    public function status_draft($id){
        DB::beginTransaction();
        try {
            $upcoming_event = UpcomingEvents::find($id);
            $upcoming_event->event_status = 'draft';
            $upcoming_event->save();

            Log::notice('Upcomming Event : '. $upcoming_event->event_title .' Status Was Set To Draft By : ' . Auth::guard('web-admin')->user()->name);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Upcomming Event Status Was Failed To Set By: ' . Auth::guard('web-admin')->user()->name . ' ' . $e);
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
            Log::notice('Upcomming Event : '. $upcoming_event->event_title .' Status Was Set To Publish By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Upcomming Event Status Was Failed To Set: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/upcoming-event');
    }
}
