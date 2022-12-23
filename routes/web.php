<?php

use App\Http\Controllers\User\HomePageController;
use App\Http\Controllers\User\ProgramPageController;
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
        Route::controller(HomePageController::class)->group(function () {
            Route::get('/', 'home')->name('home');
        });

        Route::controller(ProgramPageController::class)->group(function () {
            Route::get('/programs', 'index')->name('programs');
            Route::get('/programs/admissions-mentoring', 'admissions_mentoring')->name('admissions_mentoring');
            Route::get('/programs/passion-project-mentoring', 'passion_project_mentoring')->name('passion_project_mentoring');
            Route::get('/programs/academic-test-preparation', 'academic_test_preparation')->name('academic_test_preparation');
            Route::get('/programs/academic-tutoring', 'academic_tutoring')->name('academic_tutoring');
        });

        Route::get('/sample', function () {
            return view('sample');
        })->name('sample');
    },
);
