<?php

use App\Http\Controllers\Admin\Authentication;
use App\Http\Controllers\Admin\Banner;
use App\Http\Controllers\Admin\Dashboard;
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
});





// Route::get('/', function ($locale) {
//     // return $locale;
//     return view('welcome');
// });