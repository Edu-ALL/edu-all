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

class ProjectShowcase extends Controller
{
    public function index(){
        $project_showcase = ProjectShowcases::orderBy('updated_at', 'desc')->get();
        return view('admin.project-showcase.index', ['project_showcase' => $project_showcase]);
    }

    public function create(){
        return view('admin.project-showcase.create');
    }

    public function store(Request $request){
        $rules = [
            'full_name' => 'required',
            'category' => 'required',
            'project_name' => 'required',
            'gallery' => 'required',
            'gallery.*' => 'image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $project_showcase = new ProjectShowcases();
            $project_showcase->name = $request->full_name;
            $project_showcase->category = $request->category;
            $project_showcase->project_name = $request->project_name;
            $project_showcase->status = 'active';
            // $images = [];
            if ($request->hasFile('gallery')) {
                $i = 1;
                foreach ($request->file('gallery') as $imagefile) {
                    $file_format = $imagefile->getClientOriginalExtension();
                    $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.date('Y').'/'.date('m').'/';
                    $time = date('YmdHis');
                    $fileName = 'Project-image-'.$time.'-'.$i++.'.'.$file_format;
                    $imagefile->move($destinationPath, $fileName);
                    // array_push($images, $fileName);
                    $images[] = $fileName;
                }
                $project_showcase->gallery = json_encode($images);
            }
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
        $rules = [
            'full_name' => 'required',
            'category' => 'required',
            'project_name' => 'required',
            'gallery' => 'nullable',
            'gallery.*' => 'image|mimes:jpeg,jpg,png,bmp,webp|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $project_showcase = ProjectShowcases::find($id);
            $project_showcase->name = $request->full_name;
            $project_showcase->category = $request->category;
            $project_showcase->project_name = $request->project_name;
            $project_showcase->status = 'active';
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
                    $imagefile->move($destinationPath, $fileName);
                    $images[] = $fileName;
                }
                $project_showcase->gallery = json_encode($images);
            }
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
