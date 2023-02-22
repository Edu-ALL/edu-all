<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectShowcase extends Controller
{
    public function index(){
        return view('admin.project-showcase.index');
    }

    public function create(){
        // return view('admin.tutor.create');
    }

    public function store(Request $request){
        
    }

    public function edit($id){
        
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
