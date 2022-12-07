<?php

use App\Http\Controllers\UserHomePageController;
use App\Http\Controllers\UserProgramPageController;
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

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale',
    ],
    function () {
        Route::controller(UserHomePageController::class)->group(function () {
            Route::get('/', 'home')->name('home');
        });

        Route::controller(UserProgramPageController::class)->group(function () {
            Route::get('/programs', 'index')->name('programs');
        });

        Route::get('/sample', function () {
            return view('sample');
        })->name('sample');
    },
);
