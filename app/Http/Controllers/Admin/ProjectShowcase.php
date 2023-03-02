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
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'alt' => 'required',
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
            $project_showcase->description = $request->description;
            $project_showcase->alt = $request->alt;
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $file_format = $request->file('thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.date('Y').'/'.date('m').'/';
                $time = date('YmdHis');
                $fileName = 'Project-thumbnail-'.$request->project_name.'-'.$time.'.'.$file_format;
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
                    $fileName = 'Project-image-'.$request->project_name.'-'.$time.'-'.$i++.'.'.$file_format;
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
                $fileName = 'Project-thumbnail-'.$request->project_name.'-'.$time.'.'.$file_format;
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
                    $fileName = 'Project-image-'.$request->project_name.'-'.$time.'-'.$i++.'.'.$file_format;
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
