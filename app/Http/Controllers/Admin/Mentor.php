<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Mentor extends Controller
{
    public function index(){
        $mentors = Mentors::get();
        return view('admin.mentor.index', ['mentors' => $mentors]);
    }

    public function create(){
        return view('admin.mentor.create');
    }
}
