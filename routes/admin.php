<?php

use App\Http\Controllers\Admin\Authentication;
use App\Http\Controllers\Admin\Banner;
use App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Admin\BlogCategory;
use App\Http\Controllers\Admin\BlogWidget;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Guidebook;
use App\Http\Controllers\Admin\Mentor;
use App\Http\Controllers\Admin\MentorVideo;
use App\Http\Controllers\Admin\ProjectShowcase;
use App\Http\Controllers\Admin\SuccessStory;
use App\Http\Controllers\Admin\Testimonial;
use App\Http\Controllers\Admin\Tutor;
use App\Http\Controllers\Admin\UpcomingEvent;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
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
Route::get('/login', [Authentication::class, 'index'])->middleware('guest:web-admin');
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
    Route::get('/banner/{id}/edit', [Banner::class, 'edit']);
    Route::post('/banner/{id}', [Banner::class, 'update'])->name('update-banner');
    Route::post('/banner/deactivate/{id}', [Banner::class, 'deactivate']);
    Route::post('/banner/activate/{id}', [Banner::class, 'activate']);
    Route::post('/banner/delete/{id}', [Banner::class, 'delete']);

    // Blog
    Route::get('/blogs', [Blog::class, 'index']);
    Route::get('/blogs/create', [Blog::class, 'create']);
    Route::post('/blogs', [Blog::class, 'store'])->name('create-blogs');
    Route::get('/blogs/{id}/view', [Blog::class, 'view']);
    Route::get('/blogs/{id}/edit', [Blog::class, 'edit']);
    Route::post('/blogs/{id}', [Blog::class, 'update'])->name('update-blogs');
    Route::post('/blogs/highlight/{id}', [Blog::class, 'set_highlight'])->name('highlight-blogs');
    Route::post('/blogs/draft/{id}', [Blog::class, 'status_draft']);
    Route::post('/blogs/publish/{id}', [Blog::class, 'status_publish']);
    Route::post('/blogs/delete/{id}', [Blog::class, 'delete']);
    Route::post('/blogs/widget/{id}', [BlogWidget::class, 'store']);
    Route::post('/blogs/widget/{blog_id}/{id}', [BlogWidget::class, 'update']);
    Route::post('/blogs/widget/delete/{blog_id}/{id}', [BlogWidget::class, 'delete']);
    Route::post('/blogs/checkPublish', [Blog::class, 'checkPublish']);

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

    // Upcoming Event
    Route::get('/upcoming-event', [UpcomingEvent::class, 'index']);
    Route::get('/upcoming-event/create', [UpcomingEvent::class, 'create']);
    Route::post('/upcoming-event', [UpcomingEvent::class, 'store'])->name('create-upcoming-event');
    Route::get('/upcoming-event/{id}/edit', [UpcomingEvent::class, 'edit']);
    Route::post('/upcoming-event/{id}', [UpcomingEvent::class, 'update'])->name('update-upcoming-event');
    Route::post('/upcoming-event/draft/{id}', [UpcomingEvent::class, 'status_draft']);
    Route::post('/upcoming-event/publish/{id}', [UpcomingEvent::class, 'status_publish']);
    Route::post('/upcoming-event/delete/{id}', [UpcomingEvent::class, 'delete']);
    Route::post('/upcoming-event/checkPublish', [UpcomingEvent::class, 'checkPublish']);
    Route::post('/upcoming-event/checkTakeOff', [UpcomingEvent::class, 'checkTakeOff']);

    // Success Stories
    Route::get('/success-stories', [SuccessStory::class, 'index']);
    Route::get('/success-stories/create', [SuccessStory::class, 'create']);
    Route::post('/success-stories', [SuccessStory::class, 'store'])->name('create-success-stories');
    Route::get('/success-stories/{group}/edit', [SuccessStory::class, 'edit']);
    Route::post('/success-stories/{group}', [SuccessStory::class, 'update'])->name('update-success-stories');
    Route::post('/success-stories/deactivate/{group}', [SuccessStory::class, 'deactivate']);
    Route::post('/success-stories/activate/{group}', [SuccessStory::class, 'activate']);
    Route::post('/success-stories/delete/{group}', [SuccessStory::class, 'delete']);

    // Mentor
    Route::get('/mentor', [Mentor::class, 'index']);
    Route::get('/mentor/create', [Mentor::class, 'create']);
    Route::post('/mentor', [Mentor::class, 'store'])->name('create-mentor');
    Route::get('/mentor/{group}/view', [Mentor::class, 'view']);
    Route::get('/mentor/{group}/edit', [Mentor::class, 'edit']);
    Route::post('/mentor/{group}', [Mentor::class, 'update'])->name('update-mentor');
    Route::post('/mentor/deactivate/{group}', [Mentor::class, 'deactivate']);
    Route::post('/mentor/activate/{group}', [Mentor::class, 'activate']);
    Route::post('/mentor/delete/{group}', [Mentor::class, 'delete']);
    Route::post('/mentor/video/{group}', [MentorVideo::class, 'store']);
    Route::post('/mentor/video/{group}/{id}', [MentorVideo::class, 'update']);
    Route::post('/mentor/video/delete/{group}/{id}', [MentorVideo::class, 'delete']);

    // Tutor
    Route::get('/tutor', [Tutor::class, 'index']);
    Route::get('/tutor/create', [Tutor::class, 'create']);
    Route::post('/tutor', [Tutor::class, 'store'])->name('create-tutor');
    Route::get('/tutor/{id}/edit', [Tutor::class, 'edit']);
    Route::post('/tutor/{id}', [Tutor::class, 'update'])->name('update-tutor');
    Route::post('/tutor/deactivate/{id}', [Tutor::class, 'deactivate']);
    Route::post('/tutor/activate/{id}', [Tutor::class, 'activate']);
    Route::post('/tutor/delete/{id}', [Tutor::class, 'delete']);

    // Project Showcase
    Route::get('/project-showcase', [ProjectShowcase::class, 'index']);
    Route::get('/project-showcase/create', [ProjectShowcase::class, 'create']);
    Route::post('/project-showcase', [ProjectShowcase::class, 'store'])->name('create-project-showcase');
    Route::get('/project-showcase/{id}/edit', [ProjectShowcase::class, 'edit']);
    Route::post('/project-showcase/{id}', [ProjectShowcase::class, 'update'])->name('update-project-showcase');
    Route::post('/project-showcase/deactivate/{id}', [ProjectShowcase::class, 'deactivate']);
    Route::post('/project-showcase/activate/{id}', [ProjectShowcase::class, 'activate']);
    Route::post('/project-showcase/delete/{id}', [ProjectShowcase::class, 'delete']);

    // Clear Cache
    Route::get('/clear-cache', function() {
        Artisan::call('route:cache');     # route cache
        Artisan::call('config:cache');    # config cache
        Artisan::call('cache:clear');     # application cache
        Artisan::call('view:clear');      # view cache
        Artisan::call('optimize:clear');  # cache using reoptimized class
        return redirect()->back()->withSuccess('Successfully Clear Cache');
    });
});





// Route::get('/', function ($locale) {
//     // return $locale;
//     return view('welcome');
// });