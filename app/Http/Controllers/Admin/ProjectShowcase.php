<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectShowcases;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ProjectShowcase extends Controller
{
    public function index(){
        return view('admin.project-showcase.index');
    }

    public function getProjectShowcase(Request $request){
        if ($request->ajax()) {
            $data = ProjectShowcases::orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('projectName', function($d){
                $result = '
                    '.$d->project_name.'
                ';
                return $result;
            })
            ->editColumn('thumbnail', function($d){
                $path = asset('uploaded_files/'.'project-showcase/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->thumbnail);
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="80">
                ';
                return $result;
            })
            ->editColumn('gallery', function($d){
                if (count(json_decode($d->gallery)) > 1) {
                    $path0 = asset('uploaded_files/'.'project-showcase/'.$d->created_at->format('Y').'/'.$d->created_at->format('m')).'/'.json_decode($d->gallery)[0];
                    $path1 = asset('uploaded_files/'.'project-showcase/'.$d->created_at->format('Y').'/'.$d->created_at->format('m')).'/'.json_decode($d->gallery)[1];
                    $output = '
                        <div class="cointainer-fluid p-0">
                            <img class="position-absolute first-img" data-original="'.$path0.'" src="'.$path0.'" alt="" width="100">
                            <img data-original="'.$path1.'" src="'.$path1.'" alt="" width="100">
                        </div>
                        <span class="position-absolute translate-middle badge border border-light rounded-pill bg-primary">
                            '.(count(json_decode($d->gallery)) - 1).'+
                        </span>
                    ';
                } elseif (count(json_decode($d->gallery)) <= 1) {
                    $path0 = asset('uploaded_files/'.'project-showcase/'.$d->created_at->format('Y').'/'.$d->created_at->format('m')).'/'.json_decode($d->gallery)[0];
                    $output = '
                        <div class="cointainer-fluid p-0">
                            <img data-original="'.$path0.'" src="'.$path0.'" alt="" width="100">
                        </div>
                    ';
                }
                $result = '
                    <div class="container-fluid position-relative p-0 my-2">
                        '.$output.'
                    </div>
                ';
                return $result;
            })
            ->editColumn('status', function($d){
                if ($d->status == 'active') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this project showcase">
                                '.$d->status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this project showcase">
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
                    <a type="button" class="btn btn-warning" href="/admin/project-showcase/'.$d->id.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this project showcase"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this project showcase"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['projectName', 'thumbnail', 'gallery', 'status', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.project-showcase.create');
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'full_name' => 'required',
            'category' => 'required',
            'project_name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
            'gallery' => 'required',
            'gallery.*' => 'image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $project_showcase = new ProjectShowcases();
            $project_showcase->name = $request->full_name;
            $project_showcase->category = $request->category;
            $project_showcase->project_name = $request->project_name;
            $project_showcase->description = $request->description;
            $project_showcase->alt = $request->alt;
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.date('Y').'/'.date('m').'/';
                $time = date('YmdHis');
                $fileName = 'Project-thumbnail-'.$time.'.'.$file_format;
                $fileName = str_replace(' ', '-', $fileName);
                $file->move($destinationPath, $fileName);
                $project_showcase->thumbnail = $fileName;
            }
            if ($request->hasFile('gallery')) {
                $i = 1;
                foreach ($request->file('gallery') as $imagefile) {
                    $file_format = $imagefile->getClientOriginalExtension();
                    $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.date('Y').'/'.date('m').'/';
                    $time = date('YmdHis');
                    $fileName = 'Project-image-'.$time.'-'.$i++.'.'.$file_format;
                    $fileName = str_replace(' ', '-', $fileName);
                    $imagefile->move($destinationPath, $fileName);
                    $images[] = $fileName;
                }
                $project_showcase->gallery = json_encode($images);
            }
            $project_showcase->status = 'active';
            $project_showcase->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/project-showcase')->withSuccess('Project Showcase Was Successfully Created');
    }

    public function edit($id){
        $project_showcase = ProjectShowcases::find($id);
        return view('admin.project-showcase.update', ['project_showcase' => $project_showcase]);
    }

    public function update(Request $request, $id){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'full_name' => 'required',
            'category' => 'required',
            'project_name' => 'required',
            'description' => 'required',
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
            'gallery' => 'nullable',
            'gallery.*' => 'image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $project_showcase = ProjectShowcases::find($id);
            $project_showcase->name = $request->full_name;
            $project_showcase->category = $request->category;
            $project_showcase->project_name = $request->project_name;
            $project_showcase->description = $request->description;
            $project_showcase->alt = $request->alt;
            if ($request->hasFile('thumbnail')) {
                if ($old_image_path = $project_showcase->thumbnail) {
                    $file_path = public_path('uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/';
                $time = date('YmdHis');
                $fileName = 'Project-thumbnail-'.$time.'.'.$file_format;
                $fileName = str_replace(' ', '-', $fileName);
                $file->move($destinationPath, $fileName);
                $project_showcase->thumbnail = $fileName;
            }
            if ($request->hasFile('gallery')) {
                foreach (json_decode($project_showcase->gallery) as $image) {
                    if ($old_image_path = $image) {
                        $file_path = public_path('uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/'.$old_image_path);
                        if (File::exists($file_path)) {
                            File::delete($file_path);
                        }
                    }
                }
                $i = 1;
                foreach ($request->file('gallery') as $imagefile) {
                    $file_format = $imagefile->getClientOriginalExtension();
                    $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.date('Y').'/'.date('m').'/';
                    $time = date('YmdHis');
                    $fileName = 'Project-image-'.$time.'-'.$i++.'.'.$file_format;
                    $fileName = str_replace(' ', '-', $fileName);
                    $imagefile->move($destinationPath, $fileName);
                    $images[] = $fileName;
                }
                $project_showcase->gallery = json_encode($images);
            }
            $project_showcase->updated_at = date('Y-m-d H:i:s');
            $project_showcase->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect('/admin/project-showcase/'.$id.'/edit')->withSuccess('Project Showcase Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $project_showcase = ProjectShowcases::find($id);
            if ($old_image_path = $project_showcase->thumbnail) {
                $file_path = public_path('uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            foreach (json_decode($project_showcase->gallery) as $image) {
                if ($old_image_path = $image) {
                    $file_path = public_path('uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
            }
            $project_showcase->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/project-showcase')->withSuccess('Project Showcase Was Successfully Deleted');
    }

    public function deactivate($id){
        DB::beginTransaction();
        try {
            $project_showcase = ProjectShowcases::find($id);
            $project_showcase->status = 'inactive';
            $project_showcase->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/project-showcase');
    }

    public function activate($id){
        DB::beginTransaction();
        try {
            $project_showcase = ProjectShowcases::find($id);
            $project_showcase->status = 'active';
            $project_showcase->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/project-showcase');
    }
}
