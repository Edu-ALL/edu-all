<?php

use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\BlogPageController;
use App\Http\Controllers\User\CallbackController;
use App\Http\Controllers\User\HomePageController;
use App\Http\Controllers\User\ProgramPageController;
use App\Http\Controllers\User\RegularTalkPageController;
use App\Http\Controllers\User\ResourcesPageController;
use App\Http\Controllers\User\SitemapController;
use Illuminate\Support\Facades\Log;
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

Route::redirect('/', '/id-en', 301);

// SEO Optimization 
Route::redirect('/id-en/contact-us/', '/id-en', 301);
Route::redirect('/id-id/contact-us/', '/id-id', 301);


Route::middleware(['remove_public', 'cache_header'])->group(function () {
    Route::get('robots.txt', function () {
        return response()->file(public_path('robots.txt'));
    });

    Route::get('/id-en', [HomePageController::class, 'home']);

    Route::get('/sitemap', [SitemapController::class, 'index']);
    Route::get('/sitemap.xml', [SitemapController::class, 'index']);

    // WebHook
    Route::get('callback/facebook', [CallbackController::class, 'verify']);
    Route::post('callback/facebook', [CallbackController::class, 'read_lead']);

    Route::group(
        [
            'prefix' => '{locale}',
            'where' => ['locale' => '[a-zA-Z-]{2,5}'],
            'middleware' => 'setlocale',

        ],
        function () {
            Route::get('sitemap-blogs', [SitemapController::class, 'sitemap_blog']);
            Route::get('sitemap-pages', [SitemapController::class, 'sitemap_pages']);

            Route::controller(HomePageController::class)->group(function () {
                Route::get('/', 'home')->name('home');
                Route::get('/sign-me/admission-mentoring', 'sign_me_adm_mentoring')->name('sign_me_adm_mentoring');
                Route::get('/sign-me/academic-tutoring', 'sign_me_acad_tutoring')->name('sign_me_acad_tutoring');
                Route::get('/sign-me/ib-ee-coaching', 'sign_me_ee_coaching')->name('sign_me_ee_coaching');
                Route::get('/sign-me/sat-preparation', 'sign_me_sat_prep')->name('sign_me_sat_prep');
                Route::get('/sign-me/skillset-tutoring', 'sign_me_skillset_tutoring')->name('sign_me_skillset_tutoring');
                Route::get('/sign-me/passion-project', 'sign_me_passion_project')->name('sign_me_passion_project');
                Route::get('/sign-me/partnership/{slug}', 'sign_me_partnership')->name('sign_me_partnership');
                Route::post('/sign-me/partnership/{slug}', 'submit_partnership')->name('submit_partnership');
                Route::get('/sign-me/thank-partnership', 'thanks_partnership')->name('thank_partnership');
                Route::get('/sign-up/mentor', 'sign_up_mentor')->name('sign_up_mentor');
                Route::post('/sign-up/mentor', 'submit_mentor')->name('submit_mentor');
                Route::get('/sign-up/mentor/thank', 'thank_mentor')->name('thank_mentor');
                Route::get('/privacy-policy', 'privacy_policy')->name('privacy_policy');
            });

            Route::controller(ProgramPageController::class)->group(function () {
                // Route::get('/programs', 'index')->name('programs');
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
                Route::get('/programs/exclusive-program-school', 'exclusive_program_school')->name('exclusive_program_school');
                Route::get('/programs/exclusive-program-school/admission-accelerator', 'admission_accelerator')->name('admission_accelerator');
                Route::get('/programs/exclusive-program-school/experiential-learning', 'experiential_learning')->name('experiential_learning');
                Route::get('/programs/exclusive-program-school/teacher-focused', 'teacher_focused')->name('teacher_focused');
                Route::get('/programs/thank-you-for-your-interest-in-our-programs', 'thank_page')->name('thank_page');
            });

            Route::controller(AboutPageController::class)->group(function () {
                Route::get('/about', 'about')->name('about');
                Route::get('/about/our-contribution', 'our_contribution')->name('our_contribution');
                Route::get('/partnership', 'partnership')->name('partnership');
                Route::get('/about/careers', 'partnership_careers')->name('partnership_careers');
                Route::get('/about/careers/{slug}', 'detail_careers')->name('detail_careers');
                // Route::get('/contact-us', 'contact_us')->name('contact_us');
                // Route::post('/contact-us', 'submit_contact_us')->name('submit_contact_us');
                // Route::get('/contact-us/thank', 'thank_contact_us')->name('thank_contact_us');
                Route::get('/about/mentor', "mentor")->name('mentor');
                Route::get('/about/mentor/{slug}', "detail_mentor")->name('detail_mentor');
            });

            Route::controller(ResourcesPageController::class)->group(function () {
                Route::get('/resources/success-stories', "success_stories")->name('success_stories');
                // Route::get('/resources/upcoming-events', "upcoming_events")->name('upcoming_events');
                Route::get('/resources/guidebook', "guidebook")->name('guidebook');
                Route::get('/resources/testimonial', "testimonial")->name('testimonial');
                Route::get('/resources/mentee-project-showcase', function () {
                    return redirect()->to('http://project-showcase.edu-all.com/');
                })->name('showcase');
            });

            Route::controller(BlogPageController::class)->group(function () {
                Route::get('blog', "index")->name('blogs');
                Route::get('/blog/{slug}', 'show')->name('detail_blog');
            });


            Route::get('/webinar-workshop', [RegularTalkPageController::class, 'index']);
            Route::get('/webinar-workshop/{slug}', [RegularTalkPageController::class, 'show']);
        },
    );

    Route::get('/sign-me/mentoring/{lang?}', [HomePageController::class, 'sign_me_mentoring'])->name('sign_me_mentoring');
    Route::get('/sign-me/sat', [HomePageController::class, 'sign_me_sat'])->name('sign_me_sat');
    Route::get('/sign-me/sat/price', [HomePageController::class, 'sign_me_sat'])->name('sign_me_sat_price');
    Route::get('/thanks/mentoring', [HomePageController::class, 'thank_form_ads'])->name('thank_form_ads_mentoring');
    Route::get('/thanks/sat', [HomePageController::class, 'thank_form_ads'])->name('thank_form_ads_sat');


    // New Page Regular Talk
    Route::get('/regular-talk', function () {
        return view('user.regular_talk.main');
    });
});
