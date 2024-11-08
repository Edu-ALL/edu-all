<?php

use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\BlogPageController;
use App\Http\Controllers\User\HomePageController;
use App\Http\Controllers\User\ProgramPageController;
use App\Http\Controllers\User\RegularTalkPageController;
use App\Http\Controllers\User\ResourcesPageController;
use App\Http\Controllers\User\SitemapController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*t
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('robots.txt', function () {
    return response()->file(public_path('robots.txt'));
});

Route::get('/', [HomePageController::class, 'home']);

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/public/{any}', function ($any) {
    // Redirect to the same URL without the '/public' prefix
    return redirect()->to('/' . $any, 301); // 301 is a permanent redirect
})->where('any', '.*');

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z-]{2,5}'],
        'middleware' => 'setlocale',

    ],
    function () {
        Route::get('sitemap-blogs.xml', [SitemapController::class, 'sitemap_blog']);
        Route::get('sitemap-pages.xml', [SitemapController::class, 'sitemap_pages']);

        Route::controller(HomePageController::class)->group(function () {
            Route::get('/', 'home')->name('home');
            Route::get('/sign-me/admission-mentoring', 'sign_me_adm_mentoring')->name('sign_me_adm_mentoring');
            Route::get('/sign-me/academic-tutoring', 'sign_me_acad_tutoring')->name('sign_me_acad_tutoring');
            Route::get('/sign-me/ib-ee-coaching', 'sign_me_ee_coaching')->name('sign_me_ee_coaching');
            Route::get('/sign-me/sat-preparation', 'sign_me_sat_prep')->name('sign_me_sat_prep');
            Route::get('/sign-me/passion-project', 'sign_me_passion_project')->name('sign_me_passion_project');
            Route::get('/privacy-policy', 'privacy_policy')->name('privacy_policy');
        });

        Route::controller(ProgramPageController::class)->group(function () {
            Route::get('/programs', 'index')->name('programs');
            Route::get('/programs/admissions-mentoring', 'admissions_mentoring')->name('admissions_mentoring');
            Route::get('/programs/admissions-mentoring/undergraduate-program', 'undergraduate_program')->name('undergraduate_program');
            Route::get('/programs/admissions-mentoring/graduate-program', 'graduate_program')->name('graduate_program');
            Route::get('/programs/admissions-mentoring/university-transfer-program', 'university_transfer_program')->name('university_transfer_program');
            Route::get('/programs/passion-project-mentoring', 'passion_project_mentoring')->name('passion_project_mentoring');
            Route::get('/programs/academic-test-preparation', 'academic_test_preparation')->name('academic_test_preparation');
            Route::get('/programs/academic-test-preparation/academic-tutoring', 'academic_tutoring')->name('academic_tutoring');
            Route::get('/programs/academic-test-preparation/ib-ee-coaching-program', 'ib_ee_coaching_program')->name('ib_ee_coaching_program');
            Route::get('/programs/academic-test-preparation/sat-program', 'sat_program')->name('sat_program');
            Route::get('/programs/academic-test-preparation/skillset-tutoring-program', 'skillset_tutoring_program')->name('skillset_tutoring_program');
            Route::get('/programs/global-innovators-project', 'global_innovators_project')->name('global_innovators_project');
            Route::get('/programs/exclusive-program-school','exclusive_program_school')->name('exclusive_program_school');
            Route::get('/programs/exclusive-program-school/admission-accelerator','admission_accelerator')->name('admission_accelerator');
            Route::get('/programs/exclusive-program-school/experiential-learning','experiential_learning')->name('experiential_learning');
            Route::get('/programs/exclusive-program-school/teacher-focused','teacher_focused')->name('teacher_focused');
            Route::get('/programs/thank-you-for-your-interest-in-our-programs', 'thank_page')->name('thank_page');
        });

        Route::controller(AboutPageController::class)->group(function () {
            Route::get('/about', 'about')->name('about');
            Route::get('/about/our-contribution', 'our_contribution')->name('our_contribution');
            Route::get('/about/partnership-careers', 'partnership_careers')->name('partnership_careers');
            Route::get('/contact-us', 'contact_us')->name('contact_us');
            Route::get('/about/mentor', "mentor")->name('mentor');
            Route::get('/about/mentor/{slug}', "detail_mentor")->name('detail_mentor');
        });

        Route::controller(ResourcesPageController::class)->group(function () {
            Route::get('/resources/success-stories', "success_stories")->name('success_stories');
            Route::get('/resources/upcoming-events', "upcoming_events")->name('upcoming_events');
            Route::get('/resources/guidebook', "guidebook")->name('guidebook');
            Route::get('/resources/testimonial', "testimonial")->name('testimonial');
        });

        Route::controller(BlogPageController::class)->group(function () {
            Route::get('blog', "index")->name('blogs');
            Route::get('/blog/{slug}', 'show')->name('detail_blog');
        });

        Route::get('/webinar-workshop', [RegularTalkPageController::class, 'index']);
        Route::get('/webinar-workshop/{slug}', [RegularTalkPageController::class, 'show']);
    },
);


// New Page Regular Talk
Route::get('/regular-talk', function () {
    return view('user.regular_talk.main');
});
