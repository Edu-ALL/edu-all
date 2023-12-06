<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RegularTalks;
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

class RegularTalk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.regular-talk.index', [
            'website_data' => WebsiteSettings::first(),
        ]);
    }

    public function getRegularTalk(Request $request)
    {
        if ($request->ajax()) {
            $data = RegularTalks::orderBy('updated_at', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('topic', function ($d) {
                    $result = '
                    ' . $d->topic . '
                ';
                    return $result;
                })
                ->editColumn('date', function ($d) {
                    $result = '
                    ' . date('M, dS Y', strtotime($d->date)) . ' - ' . date('H:i A', strtotime($d->time)) . '
                ';
                    return $result;
                })
                ->editColumn('recommended_for', function ($d) {
                    $recommended = $d->recommended_for == 'both' ? 'Both (Parents & Students)' : ucfirst($d->recommended_for);
                    $result = '
                    ' . $recommended . '
                ';
                    return $result;
                })
                ->editColumn('speaker_image', function ($d) {
                    $count_image = count(json_decode($d->speaker_image));
                    if ($count_image > 1) {
                        $path0 = asset('uploaded_files/' . 'regular-talk/' . $d->created_at->format('Y') . '/' . $d->created_at->format('m')) . '/' . json_decode($d->speaker_image)[0];
                        $path1 = asset('uploaded_files/' . 'regular-talk/' . $d->created_at->format('Y') . '/' . $d->created_at->format('m')) . '/' . json_decode($d->speaker_image)[1];
                        $output = '
                        <div class="cointainer-fluid p-0">
                            <img class="position-absolute first-img" data-original="' . $path0 . '" src="' . $path0 . '" alt="" width="100">
                            <img data-original="' . $path1 . '" src="' . $path1 . '" alt="" width="100">
                        </div>
                        <span class="position-absolute translate-middle badge border border-light rounded-pill bg-primary">
                            ' . ($count_image - 1) . '+
                        </span>
                    ';
                    } elseif ($count_image <= 1) {
                        $output = 'only 1';
                        $path0 = asset('uploaded_files/' . 'regular-talk/' . $d->created_at->format('Y') . '/' . $d->created_at->format('m')) . '/' . json_decode($d->speaker_image)[0];
                        $output = '
                        <div class="cointainer-fluid p-0">
                            <img data-original="' . $path0 . '" src="' . $path0 . '" alt="" width="100">
                        </div>
                    ';
                    }
                    $result = '
                    <div class="container-fluid position-relative p-0 my-2">
                        ' . $output . '
                    </div>
                ';
                    return $result;
                })
                ->editColumn('status', function ($d) {
                    if ($d->status == 'active') {
                        $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate(' . $d->id . ')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this regular talk">
                                ' . $d->status . '
                            </span>
                        </button>
                    ';
                    } else {
                        $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate(' . $d->id . ')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this regular talk">
                                ' . $d->status . '
                            </span>
                        </button>
                    ';
                    }
                    return $result;
                })
                ->editColumn('action', function ($d) {
                    $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/regular-talk/' . $d->id . '/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this regular talk"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete(' . $d->id . ')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this regular talk"></i>
                    </button>
                </div>
                ';
                    return $result;
                })
                ->rawColumns(['topic', 'recommended_for', 'date', 'speaker_image', 'status', 'action'])
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
        return view('admin.regular-talk.create', [
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
            'topic' => 'required',
            'topic_slug' => 'required',
            'date' => 'required',
            'time' => 'required',
            'recommended_for' => 'required',
            'description' => 'required',
            'key_takeaways' => 'required',
            'form_link' => 'required',
            'speaker.*' => 'image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $regular_talk = new RegularTalks();
            $regular_talk->topic = $request->topic;
            $regular_talk->topic_slug = $request->topic_slug;
            $regular_talk->date = $request->date;
            $regular_talk->time = $request->time;
            $regular_talk->recommended_for = $request->recommended_for;
            $regular_talk->form_link = $request->form_link;
            $regular_talk->description = $request->description;
            $regular_talk->key_takeaways = $request->key_takeaways;
            $regular_talk->status = 'active';
            $regular_talk->created_at = date('Y-m-d H:i:s');
            $regular_talk->updated_at = date('Y-m-d H:i:s');
            if ($request->hasFile('speaker')) {
                $i = 1;
                foreach ($request->file('speaker') as $imagefile) {
                    $file_format = $imagefile->getClientOriginalExtension();
                    $destinationPath = public_path() . '/uploaded_files/' . 'regular-talk/' . date('Y') . '/' . date('m') . '/';
                    $time = date('YmdHis');
                    $fileName = 'Speaker-image-' . $time . '-' . $i++ . '.' . $file_format;
                    $fileName = str_replace(' ', '-', $fileName);
                    $imagefile->move($destinationPath, $fileName);
                    $images[] = $fileName;
                }
                $regular_talk->speaker_image = json_encode($images);
            }

            $regular_talk->save();
            DB::commit();
            Log::notice('New Regular Talk : '. $regular_talk->topic .', Was Successfully Created By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Regular Was Failed To Create: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/regular-talk')->withSuccess('Regular Talk Was Successfully Created');
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
        $project_showcase = RegularTalks::find($id);
        return view('admin.regular-talk.update', [
            'regular_talk' => $project_showcase,
            'website_data' => WebsiteSettings::first(),
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
        $id = $request->id;
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'topic' => 'required',
            'topic_slug' => 'required',
            'date' => 'required',
            'time' => 'required',
            'recommended_for' => 'required',
            'description' => 'required',
            'key_takeaways' => 'required',
            'form_link' => 'required',
            'speaker.*' => 'image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $regular_talk = RegularTalks::find($id);
            $regular_talk->topic = $request->topic;
            $regular_talk->topic_slug = $request->topic_slug;
            $regular_talk->date = $request->date;
            $regular_talk->time = $request->time;
            $regular_talk->recommended_for = $request->recommended_for;
            $regular_talk->form_link = $request->form_link;
            $regular_talk->description = $request->description;
            $regular_talk->key_takeaways = $request->key_takeaways;
            $regular_talk->status = 'active';

            $regular_talk->updated_at = date('Y-m-d H:i:s');
            if ($request->hasFile('speaker')) {
                foreach (json_decode($regular_talk->speaker_image) as $image) {
                    if ($old_image_path = $image) {
                        $file_path = public_path('uploaded_files/'.'project-showcase/'.$regular_talk->created_at->format('Y').'/'.$regular_talk->created_at->format('m').'/'.$old_image_path);
                        if (File::exists($file_path)) {
                            File::delete($file_path);
                        }
                    }
                }

                $i = 1;
                foreach ($request->file('speaker') as $imagefile) {
                    $file_format = $imagefile->getClientOriginalExtension();
                    $destinationPath = public_path() . '/uploaded_files/' . 'regular-talk/' . date('Y') . '/' . date('m') . '/';
                    $time = date('YmdHis');
                    $fileName = 'Speaker-image-' . $time . '-' . $i++ . '.' . $file_format;
                    $fileName = str_replace(' ', '-', $fileName);
                    $imagefile->move($destinationPath, $fileName);
                    $images[] = $fileName;
                }
                $regular_talk->speaker_image = json_encode($images);
            }

            $regular_talk->save();
            DB::commit();
            Log::notice('Regular Talk : '. $regular_talk->topic .', Was Successfully Updated By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Regular Was Failed To Update: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/regular-talk')->withSuccess('Regular Talk Was Successfully Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $regular_talk = RegularTalks::find($id);
            foreach (json_decode($regular_talk->speaker_image) as $image) {
                if ($old_image_path = $image) {
                    $file_path = public_path('uploaded_files/' . 'regular-talk/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
            }
            $regular_talk->delete();
            DB::commit();
            Log::notice('Regular Talk : '. $regular_talk->topic .', Was Successfully Deleted By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Regular Talk Was Failed To Delete: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/regular-talk')->withSuccess('Reqgular Talk Was Successfully Deleted');
    }

    public function deactivate($id)
    {
        DB::beginTransaction();
        try {
            $regular_talk = RegularTalks::find($id);
            $regular_talk->status = 'inactive';
            $regular_talk->save();
            DB::commit();
            Log::notice('Regular Talk : '. $regular_talk->topic .', Was Successfully Deactivate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Regular Talk Was Failed To Deactivate: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/regular-talk')->withSuccess('Regular talk deactivated');
    }

    public function activate($id)
    {
        DB::beginTransaction();
        try {
            $regular_talk = RegularTalks::find($id);
            $regular_talk->status = 'active';
            $regular_talk->save();
            DB::commit();
            Log::notice('Regular Talk : '. $regular_talk->topic .', Was Successfully Activate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Regular Talk Was Failed To Activate: ' . $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/regular-talk')->withSuccess('Regular talk activated');
    }
}
