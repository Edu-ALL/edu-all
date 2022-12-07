<?php

use App\Http\Controllers\Admin\Authentication;
use App\Http\Controllers\Admin\Banner;
use App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Admin\BlogCategory;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Mentor;
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
    Route::post('banner', [Banner::class, 'store'])->name('create-banner');
    Route::get('/banner/{group}/edit', [Banner::class, 'edit']);
    Route::post('/banner/{group}', [Banner::class, 'update'])->name('update-banner');
    Route::post('/banner/deactivate/{group}', [Banner::class, 'deactivate']);
    Route::post('/banner/activate/{group}', [Banner::class, 'activate']);

    // Blog
    Route::get('/blogs', [Blog::class, 'index']);

    // Blog Category
    Route::get('/blog-category', [BlogCategory::class, 'index']);
    Route::get('/blog-category/create', [BlogCategory::class, 'create']);

    // Mentor
    Route::get('/mentor', [Mentor::class, 'index']);
});





// Route::get('/', function ($locale) {
//     // return $locale;
//     return view('welcome');
// });