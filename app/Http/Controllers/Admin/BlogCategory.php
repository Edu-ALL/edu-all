<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategorys;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogCategory extends Controller
{
    public function index(){
        $blogs = BlogCategorys::get();
        return view('admin.blog-category.index', ['blogs' => $blogs]);
    }

    public function create(){
        return view('admin.blog-category.create');
    }
}
