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
            $images = [];
            if ($request->hasFile('gallery')) {
                $i = 1;
                foreach ($request->file('gallery') as $imagefile) {
                    $file_format = $imagefile->getClientOriginalExtension();
                    $destinationPath = public_path().'/uploaded_files/'.'project-showcase/'.date('Y').'/'.date('m').'/';
                    $time = date('YmdHis');
                    $fileName = 'Project-image-'.$time.'-'.$i++.'.'.$file_format;
                    $imagefile->move($destinationPath, $fileName);
                    array_push($images, $fileName);
                }
            }
            $project_showcase->gallery = json_encode($images);
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
        
    }

    public function delete($id){
        
    }

    public function deactivate($id){
        
    }

    public function activate($id){
        
    }
}
