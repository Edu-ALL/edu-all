<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guidebooks;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Guidebook extends Controller
{
    public function index(){
        $guidebooks = Guidebooks::get();
        return view('admin.guidebook.index', ['guidebooks' => $guidebooks]);
    }

    public function create(){
        // return view('admin.testimonial.create');
    }

    public function store(Request $request){
        
    }

    public function edit($group){
        // $testimonial = Testimonials::where('group', $group)->get();
        // return view('admin.testimonial.update', ['testimonial' => $testimonial]);
    }

    public function update($group, Request $request){
        
    }

    public function delete($group){
        
    }

    public function deactivate($group){
        
    }

    public function activate($group){
        
    }
}
