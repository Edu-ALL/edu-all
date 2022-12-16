<?php

use App\Http\Controllers\Admin\Authentication;
use App\Http\Controllers\Admin\Banner;
use App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Admin\BlogCategory;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Guidebook;
use App\Http\Controllers\Admin\Mentor;
use App\Http\Controllers\Admin\Testimonial;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*--------------------------------------------------------------
# Login Logout Admin
--------------------------------------------------------------*/
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [Authentication::class, 'loginAdmin'])->name('admin-login');
Route::get('logout', [Authentication::class, 'logout'])->name('logout');

/*--------------------------------------------------------------
# Admin
--------------------------------------------------------------*/
Route::middleware('is_admin')->group(function(){
    Route::get('/dashboard', [Dashboard::class, 'index']);

    // Banner
    Route::get('/banner', [Banner::class, 'index']);
    Route::get('/banner/create', [Banner::class, 'create']);
    Route::post('/banner', [Banner::class, 'store'])->name('create-banner');
    Route::get('/banner/{group}/edit', [Banner::class, 'edit']);
    Route::post('/banner/{group}', [Banner::class, 'update'])->name('update-banner');
    Route::post('/banner/deactivate/{group}', [Banner::class, 'deactivate']);
    Route::post('/banner/activate/{group}', [Banner::class, 'activate']);
    Route::post('/banner/delete/{group}', [Banner::class, 'delete']);

    // Blog
    Route::get('/blogs', [Blog::class, 'index']);

    // Blog Category
    Route::get('/blog-category', [BlogCategory::class, 'index']);
    Route::get('/blog-category/create', [BlogCategory::class, 'create']);
    Route::post('/blog-category', [BlogCategory::class, 'store'])->name('create-blog-category');
    Route::get('/blog-category/{group}/edit', [BlogCategory::class, 'edit']);
    Route::post('/blog-category/{group}', [BlogCategory::class, 'update'])->name('update-blog-category');
    Route::post('/blog-category/delete/{group}', [BlogCategory::class, 'delete']);

    // Testimonial
    Route::get('/testimonial', [Testimonial::class, 'index']);
    Route::get('/testimonial/create', [Testimonial::class, 'create']);
    Route::post('/testimonial', [Testimonial::class, 'store'])->name('create-testimonial');
    Route::get('/testimonial/{group}/edit', [Testimonial::class, 'edit']);
    Route::post('/testimonial/{group}', [Testimonial::class, 'update'])->name('update-testimonial');
    Route::post('/testimonial/deactivate/{group}', [Testimonial::class, 'deactivate']);
    Route::post('/testimonial/activate/{group}', [Testimonial::class, 'activate']);
    Route::post('/testimonial/delete/{group}', [Testimonial::class, 'delete']);

    // Guidebook
    Route::get('/guidebook', [Guidebook::class, 'index']);
    Route::get('/guidebook/create', [Guidebook::class, 'create']);
    Route::post('/guidebook', [Guidebook::class, 'store'])->name('create-guidebook');
    Route::get('/guidebook/{group}/edit', [Guidebook::class, 'edit']);
    Route::post('/guidebook/{group}', [Guidebook::class, 'update'])->name('update-guidebook');
    Route::post('/guidebook/deactivate/{group}', [Guidebook::class, 'deactivate']);
    Route::post('/guidebook/activate/{group}', [Guidebook::class, 'activate']);
    Route::post('/guidebook/delete/{group}', [Guidebook::class, 'delete']);

    // Mentor
    Route::get('/mentor', [Mentor::class, 'index']);
});





// Route::get('/', function ($locale) {
//     // return $locale;
//     return view('welcome');
// });