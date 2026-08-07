<?php

use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\BlogPageController;
use App\Http\Controllers\User\CallbackController;
use App\Http\Controllers\User\HomePageController;
use App\Http\Controllers\User\ProgramPageController;
use App\Http\Controllers\User\RegularTalkPageController;
use App\Http\Controllers\User\ResourcesPageController;
use App\Http\Controllers\User\SitemapController;
use Revolution\Google\Sheets\Facades\Sheets;
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
                Route::post('/sign-me/partnership', 'submit_partnership')->name('submit_partnership');
                Route::get('/sign-me/thank-partnership', 'thanks_partnership')->name('thank_partnership');
                Route::get('/sign-up/mentor', 'sign_up_mentor')->name('sign_up_mentor');
                Route::post('/sign-up/mentor', 'submit_mentor')->name('submit_mentor');
                Route::get('/sign-up/mentor/thank', 'thank_mentor')->name('thank_mentor');
                Route::get('/privacy-policy', 'privacy_policy')->name('privacy_policy');
            });

            Route::controller(ProgramPageController::class)->group(function () {
                // MENTORING 
                Route::get('/programs/admissions-mentoring/ultimate-mentoring', 'ultimate_mentoring')->name('ultimate_mentoring');
                Route::get('/programs/admissions-mentoring/epb', 'epb')->name('epb');

                // TUTORING 
                Route::get('/programs/tutoring', 'academic_test_preparation')->name('tutoring');
                Route::get('/programs/tutoring/subject', 'academic_tutoring')->name('subject_tutoring');
                Route::get('/programs/tutoring/sat', 'sat_program')->name('sat');
                Route::get('/programs/tutoring/olympiad', 'skillset_tutoring_program')->name('olympiad');

                Route::get('/programs/thank-you-for-your-interest-in-our-programs', 'thank_page')->name('thank_page');
            });

            Route::controller(AboutPageController::class)->group(function () {
                Route::get('/about', 'about')->name('about');
                Route::get('/about/our-team', 'our_team')->name('our_team');
                Route::get('/about/our-contribution', 'our_contribution')->name('our_contribution');
                Route::get('/about/partnership', 'partnership')->name('partnership');
                Route::get('/about/careers', 'partnership_careers')->name('partnership_careers');
                Route::get('/about/careers/{slug}', 'detail_careers')->name('detail_careers');
                Route::post('/about/careers/{slug}', 'submit_job_applicant')->name('submit_job_applicant');
                Route::get('/thanks/career', 'thanks_career')->name('thanks_career');
            });

            Route::controller(BlogPageController::class)->group(function () {
                Route::get('blog', "index")->name('blogs');
                Route::get('/blog/{slug}', 'show')->name('detail_blog');
            });

            Route::get(
                '/event',
                function () {
                    return view('user.event.main');
                }
            )->name('event');

            Route::get(
                '/impact-project',
                function () {
                    return view('user.impact_project.main');
                }
            )->name('impact-project');
        },
    );

    Route::get('/sign-me/mentoring/{lang?}', [HomePageController::class, 'sign_me_mentoring'])->name('sign_me_mentoring');
    Route::get('/sign-me/sat', [HomePageController::class, 'sign_me_sat'])->name('sign_me_sat');
    Route::get('/sign-me/sat/price', [HomePageController::class, 'sign_me_sat'])->name('sign_me_sat_price');
    Route::get('/thanks/mentoring', [HomePageController::class, 'thank_form_ads'])->name('thank_form_ads_mentoring');
    Route::get('/thanks/sat', [HomePageController::class, 'thank_form_ads'])->name('thank_form_ads_sat');

    // Sales Page 
    Route::get('/page/csca', function () {
        return view('sales_pages.csca');
    });


    // New Page Regular Talk
    Route::get('/regular-talk', function () {
        return view('user.regular_talk.main');
    });
});
