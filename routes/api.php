<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\BlogCategorys;
use App\Models\Mentors;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category/{lang}', function ($lang) {
    return BlogCategorys::where('lang', $lang)->get();
})->name('select-category');

Route::get('/mentor/{lang}', function ($lang) {
    return Mentors::where('lang', $lang)->get();
})->name('select-mentor');