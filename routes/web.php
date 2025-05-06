<?php

use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\BlogPageController;
use App\Http\Controllers\User\CallbackController;
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


Route::middleware(['remove_public'])->group(function () {
    Route::get('robots.txt', function () {
        return response()->file(public_path('robots.txt'));
    });

    Route::get('/', [HomePageController::class, 'home']);

    Route::get('/sitemap', [SitemapController::class, 'index']);

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
                Route::get('/contact-us', 'contact_us')->name('contact_us');
                Route::post('/contact-us', 'submit_contact_us')->name('submit_contact_us');
                Route::get('/contact-us/thank', 'thank_contact_us')->name('thank_contact_us');
                Route::get('/about/mentor', "mentor")->name('mentor');
                Route::get('/about/mentor/{slug}', "detail_mentor")->name('detail_mentor');
            });

            Route::controller(ResourcesPageController::class)->group(function () {
                Route::get('/resources/success-stories', "success_stories")->name('success_stories');
                // Route::get('/resources/upcoming-events', "upcoming_events")->name('upcoming_events');
                Route::get('/resources/guidebook', "guidebook")->name('guidebook');
                Route::get('/resources/testimonial', "testimonial")->name('testimonial');
                Route::get('/resources/mentee-project-showcase', function () {
                    return redirect()->to('https://project-showcase.edu-all.com/');
                })->name('testimonial');
            });

            Route::controller(BlogPageController::class)->group(function () {
                Route::get('blog', "index")->name('blogs');
                Route::get('/blog/{slug}', 'show')->name('detail_blog');
            });


            Route::get('/webinar-workshop', [RegularTalkPageController::class, 'index']);
            Route::get('/webinar-workshop/{slug}', [RegularTalkPageController::class, 'show']);
        },
    );

    Route::get('/sign-me/mentoring', [HomePageController::class, 'sign_me_mentoring'])->name('sign_me_mentoring');
    Route::get('/sign-me/sat', [HomePageController::class, 'sign_me_sat'])->name('sign_me_sat');
    Route::get('/sign-me/sat/price', [HomePageController::class, 'sign_me_sat'])->name('sign_me_sat_price');
    Route::get('/thanks/mentoring', [HomePageController::class, 'thank_form_ads'])->name('thank_form_ads_mentoring');
    Route::get('/thanks/sat', [HomePageController::class, 'thank_form_ads'])->name('thank_form_ads_sat');


    // New Page Regular Talk
    Route::get('/regular-talk', function () {
        return view('user.regular_talk.main');
    });
});


// SEO Optimization 
Route::redirect('https://edu-all.com/5-essay-writing-steps-for-beginner/', 'https://edu-all.com/id-en/blog/5-essay-writing-steps-for-beginner/', 301);
Route::redirect('https://edu-all.com/87-of-indonesian-youths-study-the-wrong-major-what-does-this-mean/', 'https://edu-all.com/id-en/blog/87-of-indonesian-youths-study-the-wrong-major-what-does-this-mean/', 301);
Route::redirect('https://edu-all.com/a-complete-and-thorough-look-at-nus-scholarships/', 'https://edu-all.com/id-en/blog/a-complete-and-thorough-look-at-nus-scholarships/', 301);
Route::redirect('https://edu-all.com/a-completely-thorough-overview-of-the-university-of-toronto/', 'https://edu-all.com/id-en/blog/a-completely-thorough-overview-of-the-university-of-toronto/', 301);
Route::redirect('https://edu-all.com/a-full-scoop-of-university-of-cambridge-acceptance-rate/', 'https://edu-all.com/id-en/blog/a-full-scoop-of-university-of-cambridge-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/a-glance-at-mechanical-engineering-major/', 'https://edu-all.com/id-en/blog/a-glance-at-mechanical-engineering-major/', 301);
Route::redirect('https://edu-all.com/a-glance-at-the-mit-acceptance-rate/', 'https://edu-all.com/id-en/blog/a-glance-at-the-mit-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/a-glance-at-the-university-of-melbourne-acceptance-rate/', 'https://edu-all.com/id-en/blog/a-glance-at-the-university-of-melbourne-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/a-glimpse-of-psychology-jobs-and-careers/', 'https://edu-all.com/id-en/blog/a-glimpse-of-psychology-jobs-and-careers/', 301);
Route::redirect('https://edu-all.com/a-level-biology-all-you-need-to-know/', 'https://edu-all.com/id-en/blog/a-level-biology-all-you-need-to-know/', 301);
Route::redirect('https://edu-all.com/about', 'https://edu-all.com/id-id/about', 301);
Route::redirect('https://edu-all.com/about/', 'https://edu-all.com/id-id/about/', 301);
Route::redirect('https://edu-all.com/all-about-harvard-university-post-graduate-program/', 'https://edu-all.com/id-en/blog/all-about-harvard-university-post-graduate-program/', 301);
Route::redirect('https://edu-all.com/all-about-the-university-of-oxford/', 'https://edu-all.com/id-en/blog/all-about-the-university-of-oxford/', 301);
Route::redirect('https://edu-all.com/all-in-one-information-about-the-university-of-cambridge/', 'https://edu-all.com/id-en/blog/all-in-one-information-about-the-university-of-cambridge/', 301);
Route::redirect('https://edu-all.com/all-you-need-to-know-about-computer-science/', 'https://edu-all.com/id-en/blog/all-you-need-to-know-about-computer-science/', 301);
Route::redirect('https://edu-all.com/applying-uk-universities/', 'https://edu-all.com/id-en/blog/applying-uk-universities/', 301);
Route::redirect('https://edu-all.com/attractive-ntu-scholarships-you-should-know/', 'https://edu-all.com/id-en/blog/attractive-ntu-scholarships-you-should-know/', 301);
Route::redirect('https://edu-all.com/attractive-university-of-hong-kong-scholarships-that-you-should-try/', 'https://edu-all.com/id-en/blog/attractive-university-of-hong-kong-scholarships-that-you-should-try/', 301);
Route::redirect('https://edu-all.com/back-end-developer-heres-what-you-should-know/', 'https://edu-all.com/id-en/blog/back-end-developer-heres-what-you-should-know/', 301);
Route::redirect('https://edu-all.com/benefits-of-a-university-admissions-consultant-for-aspiring-students/', 'https://edu-all.com/id-en/blog/benefits-of-a-university-admissions-consultant-for-aspiring-students/', 301);
Route::redirect('https://edu-all.com/breaking-down-the-complete-ntu-admissions-process/', 'https://edu-all.com/id-en/blog/breaking-down-the-complete-ntu-admissions-process/', 301);
Route::redirect('https://edu-all.com/breaking-down-university-of-oxford-acceptance-rate/', 'https://edu-all.com/id-en/blog/breaking-down-university-of-oxford-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/civil-engineering-why-you-should-consider-studying-it/', 'https://edu-all.com/id-en/blog/civil-engineering-why-you-should-consider-studying-it/', 301);
Route::redirect('https://edu-all.com/columbia-university-rankings-the-new-york-based-ivy-league-university/', 'https://edu-all.com/id-en/blog/columbia-university-rankings-the-new-york-based-ivy-league-university/', 301);
Route::redirect('https://edu-all.com/computer-science-jobs-outlook/', 'https://edu-all.com/id-en/blog/computer-science-jobs-outlook/', 301);
Route::redirect('https://edu-all.com/contact-us/', 'https://edu-all.com/id-id/contact-us/', 301);
Route::redirect('https://edu-all.com/cornell-university-acceptance-rate:-the-complete-information/', 'https://edu-all.com/id-en/blog/cornell-university-acceptance-rate-the-complete-information', 301);
Route::redirect('https://edu-all.com/cornell-university-master-program:-here\'s-your-guide!/', 'https://edu-all.com/id-en/blog/cornell-university-master-program-heres-your-guide', 301);
Route::redirect('https://edu-all.com/cornell-university-ranking:-your-guide-to-this-ivy-league-institution/', 'https://edu-all.com/id-en/blog/cornell-university-ranking-your-guide-to-this-ivy-league-institution', 301);
Route::redirect('https://edu-all.com/corporate-lawyer-facts-you-need-to-know/', 'https://edu-all.com/id-en/blog/corporate-lawyer-facts-you-need-to-know/', 301);
Route::redirect('https://edu-all.com/debugging-the-software-engineering-major/', 'https://edu-all.com/id-en/blog/debugging-the-software-engineering-major/', 301);
Route::redirect('https://edu-all.com/developer-career-overview/', 'https://edu-all.com/id-en/blog/developer-career-overview/', 301);
Route::redirect('https://edu-all.com/discover-the-top-five-list-of-the-best-nus-majors-in-here!/', 'https://edu-all.com/id-en/blog/discover-the-top-five-list-of-the-best-nus-majors-in-here', 301);
Route::redirect('https://edu-all.com/discover-the-us-top-university-acceptance-rate/', 'https://edu-all.com/id-en/blog/discover-the-us-top-university-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/dreaming-to-go-to-uc-universities-lets-get-to-know-some-of-them/', 'https://edu-all.com/id-en/blog/dreaming-to-go-to-uc-universities-lets-get-to-know-some-of-them/', 301);
Route::redirect('https://edu-all.com/dreaming-to-study-in-australia-read-this-first/', 'https://edu-all.com/id-en/blog/dreaming-to-study-in-australia-read-this-first/', 301);
Route::redirect('https://edu-all.com/edinburgh-university-acceptance-rate-heres-what-you-should-know/', 'https://edu-all.com/id-en/blog/edinburgh-university-acceptance-rate-heres-what-you-should-know/', 301);
Route::redirect('https://edu-all.com/edinburgh-university-all-you-need-to-know-before-applying/', 'https://edu-all.com/id-en/blog/edinburgh-university-all-you-need-to-know-before-applying/', 301);
Route::redirect('https://edu-all.com/edinburgh-university-scholarships-find-out-here/', 'https://edu-all.com/id-en/blog/edinburgh-university-scholarships-find-out-here/', 301);
Route::redirect('https://edu-all.com/electrical-engineering-a-thriving-field/', 'https://edu-all.com/id-en/blog/electrical-engineering-a-thriving-field/', 301);
Route::redirect('https://edu-all.com/engineering-degree-the-ins-and-outs/', 'https://edu-all.com/id-en/blog/engineering-degree-the-ins-and-outs/', 301);
Route::redirect('https://edu-all.com/essay-for-study-abroad-everything-you-should-know/', 'https://edu-all.com/id-en/blog/essay-for-study-abroad-everything-you-should-know/', 301);
Route::redirect('https://edu-all.com/essay-writing-one-guide-to-master-them-all/', 'https://edu-all.com/id-en/blog/essay-writing-one-guide-to-master-them-all/', 301);
Route::redirect('https://edu-all.com/everything-on-how-to-apply-to-universities-in-the-usa/', 'https://edu-all.com/id-en/blog/everything-on-how-to-apply-to-universities-in-the-usa/', 301);
Route::redirect('https://edu-all.com/everything-to-know-about-universities-in-the-usa/', 'https://edu-all.com/id-en/blog/everything-to-know-about-universities-in-the-usa/', 301);
Route::redirect('https://edu-all.com/facts-and-outlook-of-criminal-lawyer/', 'https://edu-all.com/id-en/blog/facts-and-outlook-of-criminal-lawyer/', 301);
Route::redirect('https://edu-all.com/finance-the-everlasting-field-with-great-potential/', 'https://edu-all.com/id-en/blog/finance-the-everlasting-field-with-great-potential/', 301);
Route::redirect('https://edu-all.com/find-out-about-seoul-national-university-scholarship-here/', 'https://edu-all.com/id-en/blog/find-out-about-seoul-national-university-scholarship-here/', 301);
Route::redirect('https://edu-all.com/front-end-developer-what-is-it/', 'https://edu-all.com/id-en/blog/front-end-developer-what-is-it/', 301);
Route::redirect('https://edu-all.com/full-overview-of-harvard-acceptance-rate/', 'https://edu-all.com/id-en/blog/full-overview-of-harvard-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/full-overview-on-columbia-university-profile/', 'https://edu-all.com/id-en/blog/full-overview-on-columbia-university-profile/', 301);
Route::redirect('https://edu-all.com/full-scoop-and-facts-on-mentoring-programs-for-students/', 'https://edu-all.com/id-en/blog/full-scoop-and-facts-on-mentoring-programs-for-students/', 301);
Route::redirect('https://edu-all.com/full-scoop-on-cornell-university-profile-just-for-you!/', 'https://edu-all.com/id-en/blog/full-scoop-on-cornell-university-profile-just-for-you', 301);
Route::redirect('https://edu-all.com/full-scope-of-university-of-sydney-acceptance-rate/', 'https://edu-all.com/id-en/blog/full-scope-of-university-of-sydney-acceptance-rate/', 301);
Route::redirect('https://edu-all.com/get-the-full-info-on-the-uc-berkeley-acceptance-rate-only-in-this-article/', 'https://edu-all.com/id-en/blog/get-the-full-info-on-the-uc-berkeley-acceptance-rate-only-in-this-article/', 301);
Route::redirect('https://edu-all.com/get-to-know-all-about-university-education-consultant/', 'https://edu-all.com/id-en/blog/get-to-know-all-about-university-education-consultant/', 301);
Route::redirect('https://edu-all.com/get-to-know-all-kinds-of-lawyer/', 'https://edu-all.com/id-en/blog/get-to-know-all-kinds-of-lawyer/', 301);
Route::redirect('https://edu-all.com/get-to-know-software-developer-career/', 'https://edu-all.com/id-en/blog/get-to-know-software-developer-career/', 301);
Route::redirect('https://edu-all.com/harvard-business-school-facts-you-should-know/', 'https://edu-all.com/id-en/blog/harvard-business-school-facts-you-should-know/', 301);
Route::redirect('https://edu-all.com/harvard-law-school-worlds-leading-law-school/', 'https://edu-all.com/id-en/blog/harvard-law-school-worlds-leading-law-school/', 301);
Route::redirect('https://edu-all.com/harvard-majors-learning-from-a-world-class-faculty/', 'https://edu-all.com/id-en/blog/harvard-majors-learning-from-a-world-class-faculty/', 301);
Route::redirect('https://edu-all.com/harvard-master-program-what-you-should-know/', 'https://edu-all.com/id-en/blog/harvard-master-program-what-you-should-know/', 301);
Route::redirect('https://edu-all.com/harvard-medical-school-history-and-facts/', 'https://edu-all.com/id-en/blog/harvard-medical-school-history-and-facts/', 301);
Route::redirect('https://edu-all.com/harvard-scholarship-keep-an-eye-on-these-opportunities/', 'https://edu-all.com/id-en/blog/harvard-scholarship-keep-an-eye-on-these-opportunities/', 301);
Route::redirect('https://edu-all.com/harvard-university-mba-gain-a-world-class-education/', 'https://edu-all.com/id-en/blog/harvard-university-mba-gain-a-world-class-education/', 301);
Route::redirect('https://edu-all.com/here-are-the-top-5-in-demand-human-resource-skills-in-the-industry/', 'https://edu-all.com/id-en/blog/here-are-the-top-5-in-demand-human-resource-skills-in-the-industry/', 301);
Route::redirect('https://edu-all.com/here-is-how-university-application-consultant-helps-students/', 'https://edu-all.com/id-en/blog/here-is-how-university-application-consultant-helps-students/', 301);
Route::redirect('https://edu-all.com/heres-what-you-should-know-about-nus-admission-process/', 'https://edu-all.com/id-en/blog/heres-what-you-should-know-about-nus-admission-process/', 301);
Route::redirect('https://edu-all.com/how-to-build-personal-branding-for-university-admission/', 'https://edu-all.com/id-en/blog/how-to-build-personal-branding-for-university-admission/', 301);
Route::redirect('https://edu-all.com/how-to-study-abroad-for-free-a-complete-guide/', 'https://edu-all.com/id-en/blog/how-to-study-abroad-for-free-a-complete-guide/', 301);
Route::redirect('https://edu-all.com/how-to-use-time-management-matrix/', 'https://edu-all.com/id-en/blog/how-to-use-time-management-matrix/', 301);
Route::redirect('https://edu-all.com/human-resource-development-the-heart-of-a-company/', 'https://edu-all.com/id-en/blog/human-resource-development-the-heart-of-a-company/', 301);
Route::redirect('https://edu-all.com/human-resource-management-degree-lets-gain-all-the-insight/', 'https://edu-all.com/id-en/blog/human-resource-management-degree-lets-gain-all-the-insight/', 301);
Route::redirect('https://edu-all.com/interested-in-a-human-resource-internship-know-this-before-you-apply/', 'https://edu-all.com/id-en/blog/interested-in-a-human-resource-internship-know-this-before-you-apply/', 301);
Route::redirect('https://edu-all.com/internship-experience-why-is-it-good-for-students/', 'https://edu-all.com/id-en/blog/internship-experience-why-is-it-good-for-students/', 301);
Route::redirect('https://edu-all.com/kyoto-university-master-program-a-glimpse-of-japans-university/', 'https://edu-all.com/id-en/blog/kyoto-university-master-program-a-glimpse-of-japans-university/', 301);
Route::redirect('https://edu-all.com/id/3-beasiswa-kuliah-di-belanda-yang-cocok-untukmu!/', 'https://edu-all.com/id-id/blog/3-beasiswa-kuliah-di-belanda-yang-cocok-untukmu', 301);
Route::redirect('https://edu-all.com/id/3-beasiswa-kuliah-di-china-terpopuler/', 'https://edu-all.com/id-id/blog/3-beasiswa-kuliah-di-china-terpopuler/', 301);
Route::redirect('https://edu-all.com/id/4-alasan-terbaik-kenapa-kamu-harus-kuliah-jurusan-biologi/', 'https://edu-all.com/id-id/blog/4-alasan-terbaik-kenapa-kamu-harus-kuliah-jurusan-biologi/', 301);
Route::redirect('https://edu-all.com/id/4-aplikasi-produktif-untuk-pelajar/', 'https://edu-all.com/id-id/blog/4-aplikasi-produktif-untuk-pelajar/', 301);
Route::redirect('https://edu-all.com/id/5-alasan-kenapa-kamu-harus-kuliah-jurusan-perpajakan/', 'https://edu-all.com/id-id/blog/5-alasan-kenapa-kamu-harus-kuliah-jurusan-perpajakan/', 301);
Route::redirect('https://edu-all.com/id/5-beasiswa-di-inggris-yang-kamu-wajib-tahu/', 'https://edu-all.com/id-id/blog/5-beasiswa-di-inggris-yang-kamu-wajib-tahu/', 301);
Route::redirect('https://edu-all.com/id/5-jurusan-kuliah-di-belanda-untuk-pelajar-indonesia/', 'https://edu-all.com/id-id/blog/5-jurusan-kuliah-di-belanda-untuk-pelajar-indonesia/', 301);
Route::redirect('https://edu-all.com/id/5-universitas-jurusan-desain-interior-terbaik-di-australia/', 'https://edu-all.com/id-id/blog/5-universitas-jurusan-desain-interior-terbaik-di-australia/', 301);
Route::redirect('https://edu-all.com/id/analisis-penuh-mengenai-teknik-informatika/', 'https://edu-all.com/id-id/blog/analisis-penuh-mengenai-teknik-informatika/', 301);
Route::redirect('https://edu-all.com/id/apa-saja-sih-tugas-public-relation-ayo-simak-lengkapnya-di-sini/', 'https://edu-all.com/id-id/blog/apa-saja-sih-tugas-public-relation-ayo-simak-lengkapnya-di-sini/', 301);
Route::redirect('https://edu-all.com/id/ayo-cari-tahu-info-lengkap-seputar-jurusan-marketing/', 'https://edu-all.com/id-id/blog/ayo-cari-tahu-info-lengkap-seputar-jurusan-marketing/', 301);
Route::redirect('https://edu-all.com/id/ayo-cari-tahu-seluk-beluk-jurusan-perhotelan-di-artikel-ini/', 'https://edu-all.com/id-id/blog/ayo-cari-tahu-seluk-beluk-jurusan-perhotelan-di-artikel-ini/', 301);
Route::redirect('https://edu-all.com/id/ayo-kupas-tuntas-informasi-lengkap-mengenai-jurusan-dkv!/', 'https://edu-all.com/id-id/blog/ayo-kupas-tuntas-informasi-lengkap-mengenai-jurusan-dkv', 301);
Route::redirect('https://edu-all.com/id/ayo-pahami-teknik-elektro-dengan-lebih-rinci/', 'https://edu-all.com/id-id/blog/ayo-pahami-teknik-elektro-dengan-lebih-rinci/', 301);
Route::redirect('https://edu-all.com/id/ayo-simak-daftar-universitas-jurusan-pertanian-terbaik-di-asia-berikut-ini/', 'https://edu-all.com/id-id/blog/ayo-simak-daftar-universitas-jurusan-pertanian-terbaik-di-asia-berikut-ini/', 301);
Route::redirect('https://edu-all.com/id/ayo-simak-informasi-lengkap-mengenai-jurusan-biologi-di-sini/', 'https://edu-all.com/id-id/blog/ayo-simak-informasi-lengkap-mengenai-jurusan-biologi-di-sini/', 301);
Route::redirect('https://edu-all.com/id/ayo-simak-rentetan-universitas-jurusan-perhotelan-terbaik-di-dunia/', 'https://edu-all.com/id-id/blog/ayo-simak-rentetan-universitas-jurusan-perhotelan-terbaik-di-dunia/', 301);
Route::redirect('https://edu-all.com/id/beasiswa-kuliah-di-amerika-ini-wajib-kamu-coba/', 'https://edu-all.com/id-id/blog/beasiswa-kuliah-di-amerika-ini-wajib-kamu-coba/', 301);
Route::redirect('https://edu-all.com/id/beasiswa-kuliah-di-jepang-mext-scholarship/', 'https://edu-all.com/id-id/blog/beasiswa-kuliah-di-jepang-mext-scholarship/', 301);
Route::redirect('https://edu-all.com/id/beasiswa-kuliah-di-kanada-inilah-7-terbaik/', 'https://edu-all.com/id-id/blog/beasiswa-kuliah-di-kanada-inilah-7-terbaik/', 301);
Route::redirect('https://edu-all.com/id/beasiswa-kuliah-di-korea-global-korea-scholarship/', 'https://edu-all.com/id-id/blog/beasiswa-kuliah-di-korea-global-korea-scholarship/', 301);
Route::redirect('https://edu-all.com/id/beasiswa-kuliah-di-singapura-untuk-s1/', 'https://edu-all.com/id-id/blog/beasiswa-kuliah-di-singapura-untuk-s1/', 301);
Route::redirect('https://edu-all.com/id/belum-tahu-cara-kuliah-di-amerika-cek-di-sini/', 'https://edu-all.com/id-id/blog/belum-tahu-cara-kuliah-di-amerika-cek-di-sini/', 301);
Route::redirect('https://edu-all.com/id/belum-tahu-jurusan-kesehatan-masyarakat-kerja-apa-baca-di-sini/', 'https://edu-all.com/id-id/blog/belum-tahu-jurusan-kesehatan-masyarakat-kerja-apa-baca-di-sini/', 301);
Route::redirect('https://edu-all.com/id/berikut-adalah-5-universitas-jurusan-gizi-terbaik-di-asia/', 'https://edu-all.com/id-id/blog/berikut-adalah-5-universitas-jurusan-gizi-terbaik-di-asia/', 301);
Route::redirect('https://edu-all.com/id/berikut-adalah-daftar-teratas-universitas-yang-ada-jurusan-marketing/', 'https://edu-all.com/id-id/blog/berikut-adalah-daftar-teratas-universitas-yang-ada-jurusan-marketing/', 301);
Route::redirect('https://edu-all.com/id/biaya-kuliah-di-amerika-serikat-ini-lengkapnya/', 'https://edu-all.com/id-id/blog/biaya-kuliah-di-amerika-serikat-ini-lengkapnya/', 301);
Route::redirect('https://edu-all.com/id/biaya-kuliah-di-kanada-yang-perlu-kamu-persiapkan/', 'https://edu-all.com/id-id/blog/biaya-kuliah-di-kanada-yang-perlu-kamu-persiapkan/', 301);
Route::redirect('https://edu-all.com/id/biaya-kuliah-di-singapura-yang-harus-kamu-perhatikan/', 'https://edu-all.com/id-id/blog/biaya-kuliah-di-singapura-yang-harus-kamu-perhatikan/', 301);
Route::redirect('https://edu-all.com/id/biaya-kuliah-jurusan-farmasi-di-jepang-yang-wajib-kamu-tahu/', 'https://edu-all.com/id-id/blog/biaya-kuliah-jurusan-farmasi-di-jepang-yang-wajib-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/id/biaya-kuliah-jurusan-tata-boga-atau-culinary-di-le-cordon-bleu/', 'https://edu-all.com/id-id/blog/biaya-kuliah-jurusan-tata-boga-atau-culinary-di-le-cordon-bleu/', 301);
Route::redirect('https://edu-all.com/id/bingung-pilih-jurusan-kuliah-ini-solusinya/', 'https://edu-all.com/id-id/blog/bingung-pilih-jurusan-kuliah-ini-solusinya/', 301);
Route::redirect('https://edu-all.com/id/bukan-cuman-tentang-hotel-ayo-cari-tahu-jurusan-perhotelan-kerja-apa/', 'https://edu-all.com/id-id/blog/bukan-cuman-tentang-hotel-ayo-cari-tahu-jurusan-perhotelan-kerja-apa/', 301);
Route::redirect('https://edu-all.com/id/cara-kuliah-di-kanada-yang-perlu-kamu-tahu/', 'https://edu-all.com/id-id/blog/cara-kuliah-di-kanada-yang-perlu-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/id/cara-kuliah-di-luar-negeri-dengan-beasiswa/', 'https://edu-all.com/id-id/blog/cara-kuliah-di-luar-negeri-dengan-beasiswa/', 301);
Route::redirect('https://edu-all.com/id/cari-tahu-manfaat-kuliah-jurusan-marketing-di-sini!/', 'https://edu-all.com/id-id/blog/cari-tahu-manfaat-kuliah-jurusan-marketing-di-sini', 301);
Route::redirect('https://edu-all.com/id/daftar-5-universitas-jurusan-hubungan-internasional-terbaik-di-asia/', 'https://edu-all.com/id-id/blog/daftar-5-universitas-jurusan-hubungan-internasional-terbaik-di-asia/', 301);
Route::redirect('https://edu-all.com/id/daftar-beasiswa-kuliah-di-luar-negeri-terpopuler/', 'https://edu-all.com/id-id/blog/daftar-beasiswa-kuliah-di-luar-negeri-terpopuler/', 301);
Route::redirect('https://edu-all.com/id/daftar-jurusan-sastra-terpopuler/', 'https://edu-all.com/id-id/blog/daftar-jurusan-sastra-terpopuler/', 301);
Route::redirect('https://edu-all.com/id/daftar-lengkap-biaya-kuliah-jurusan-desain-interior-di-australia/', 'https://edu-all.com/id-id/blog/daftar-lengkap-biaya-kuliah-jurusan-desain-interior-di-australia/', 301);
Route::redirect('https://edu-all.com/id/daftar-prospek-kerja-jurusan-pertanian-di-masa-depan/', 'https://edu-all.com/id-id/blog/daftar-prospek-kerja-jurusan-pertanian-di-masa-depan/', 301);
Route::redirect('https://edu-all.com/id/daftar-universitas-dengan-jurusan-farmasi-terbaik-di-asia/', 'https://edu-all.com/id-id/blog/daftar-universitas-dengan-jurusan-farmasi-terbaik-di-asia/', 301);
Route::redirect('https://edu-all.com/id/daftar-universitas-jurusan-arsitektur-terbaik-di-asia-khusus-untuk-kamu/', 'https://edu-all.com/id-id/blog/daftar-universitas-jurusan-arsitektur-terbaik-di-asia-khusus-untuk-kamu/', 301);
Route::redirect('https://edu-all.com/id/daftar-universitas-jurusan-hukum-terbaik-di-dunia/', 'https://edu-all.com/id-id/blog/daftar-universitas-jurusan-hukum-terbaik-di-dunia/', 301);
Route::redirect('https://edu-all.com/id/daftar-universitas-jurusan-tata-boga-atau-culinary-arts-terbaik-di-dunia-﻿/', 'https://edu-all.com/id-id/blog/daftar-universitas-jurusan-tata-boga-atau-culinary-arts-terbaik-di-dunia', 301);
Route::redirect('https://edu-all.com/id/dokter-gigi-profesi-di-balik-sebuah-senyuman/', 'https://edu-all.com/id-id/blog/dokter-gigi-profesi-di-balik-sebuah-senyuman/', 301);
Route::redirect('https://edu-all.com/id/dokter-hewan-si-paling-ngerti-hewan/', 'https://edu-all.com/id-id/blog/dokter-hewan-si-paling-ngerti-hewan/', 301);
Route::redirect('https://edu-all.com/id/hal-yang-harus-kamu-tau-tentang-teknik-industri/', 'https://edu-all.com/id-id/blog/hal-yang-harus-kamu-tau-tentang-teknik-industri/', 301);
Route::redirect('https://edu-all.com/id/hal-yang-wajib-kamu-tahu-tentang-jurusan-bisnis-internasional/', 'https://edu-all.com/id-id/blog/hal-yang-wajib-kamu-tahu-tentang-jurusan-bisnis-internasional/', 301);
Route::redirect('https://edu-all.com/id/informasi-lengkap-seputar-jurusan-kesehatan-masyarakat-berikut-ini/', 'https://edu-all.com/id-id/blog/informasi-lengkap-seputar-jurusan-kesehatan-masyarakat-berikut-ini/', 301);
Route::redirect('https://edu-all.com/id/ingin-lanjut-kuliah-di-belanda-baca-ini/', 'https://edu-all.com/id-id/blog/ingin-lanjut-kuliah-di-belanda-baca-ini/', 301);
Route::redirect('https://edu-all.com/id/ingin-tahu-biaya-kuliah-di-inggris-cek-di-sini/', 'https://edu-all.com/id-id/blog/ingin-tahu-biaya-kuliah-di-inggris-cek-di-sini/', 301);
Route::redirect('https://edu-all.com/id/ingin-tahu-biaya-kuliah-di-korea-cari-tahu-di-sini/', 'https://edu-all.com/id-id/blog/ingin-tahu-biaya-kuliah-di-korea-cari-tahu-di-sini/', 301);
Route::redirect('https://edu-all.com/id/ingin-tahu-fakta-menarik-seputar-jurusan-multimedia-baca-di-sini/', 'https://edu-all.com/id-id/blog/ingin-tahu-fakta-menarik-seputar-jurusan-multimedia-baca-di-sini/', 301);
Route::redirect('https://edu-all.com/id/ingin-tahu-jurusan-multimedia-kerja-apa-baca-di-sini/', 'https://edu-all.com/id-id/blog/ingin-tahu-jurusan-multimedia-kerja-apa-baca-di-sini/', 301);
Route::redirect('https://edu-all.com/id/ini-alasan-kenapa-kamu-harus-kuliah-jurusan-hubungan-internasional/', 'https://edu-all.com/id-id/blog/ini-alasan-kenapa-kamu-harus-kuliah-jurusan-hubungan-internasional/', 301);
Route::redirect('https://edu-all.com/id/inilah-info-unik-mengenai-jurusan-kedokteran-fisik-dan-rehabilitasi/', 'https://edu-all.com/id-id/blog/inilah-info-unik-mengenai-jurusan-kedokteran-fisik-dan-rehabilitasi/', 301);
Route::redirect('https://edu-all.com/id/inilah-rincian-biaya-kuliah-di-china/', 'https://edu-all.com/id-id/blog/inilah-rincian-biaya-kuliah-di-china/', 301);
Route::redirect('https://edu-all.com/id/jurusan-ekonomi-macam-macam-penjurusan-ini-yang-perlu-kamu-tahu/', 'https://edu-all.com/id-id/blog/jurusan-ekonomi-macam-macam-penjurusan-ini-yang-perlu-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-amerika-ini-5-yang-terbaik/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-amerika-ini-5-yang-terbaik/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-china-dengan-peluang-kerja-tinggi/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-china-dengan-peluang-kerja-tinggi/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-inggris-ini-yang-paling-dicari/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-inggris-ini-yang-paling-dicari/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-jepang-ini-5-yang-terpopuler/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-jepang-ini-5-yang-terpopuler/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-kanada-ini-5-terpopuler/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-kanada-ini-5-terpopuler/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-korea-ini-5-yang-terbaik/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-korea-ini-5-yang-terbaik/', 301);
Route::redirect('https://edu-all.com/id/jurusan-kuliah-di-singapura-yang-paling-diminati/', 'https://edu-all.com/id-id/blog/jurusan-kuliah-di-singapura-yang-paling-diminati/', 301);
Route::redirect('https://edu-all.com/id/jurusan-tata-boga-universitas-biaya-dan-persyaratan/', 'https://edu-all.com/id-id/blog/jurusan-tata-boga-universitas-biaya-dan-persyaratan/', 301);
Route::redirect('https://edu-all.com/id/kampus-fakultas-ilmu-komunikasi-terbaik-di-dunia/', 'https://edu-all.com/id-id/blog/kampus-fakultas-ilmu-komunikasi-terbaik-di-dunia/', 301);
Route::redirect('https://edu-all.com/id/kampus-kuliah-jurusan-matematika-terbaik-di-asia/', 'https://edu-all.com/id-id/blog/kampus-kuliah-jurusan-matematika-terbaik-di-asia/', 301);
Route::redirect('https://edu-all.com/id/ketahui-seluk-beluk-jurusan-public-relation-ini-ya/', 'https://edu-all.com/id-id/blog/ketahui-seluk-beluk-jurusan-public-relation-ini-ya/', 301);
Route::redirect('https://edu-all.com/id/ketahui-syarat-kuliah-di-korea-berikut-ini/', 'https://edu-all.com/id-id/blog/ketahui-syarat-kuliah-di-korea-berikut-ini/', 301);
Route::redirect('https://edu-all.com/id/kisaran-biaya-kuliah-di-jepang-terbaru/', 'https://edu-all.com/id-id/blog/kisaran-biaya-kuliah-di-jepang-terbaru/', 301);
Route::redirect('https://edu-all.com/id/kuliah-di-amerika-bukan-cuman-sekedar-mimpi/', 'https://edu-all.com/id-id/blog/kuliah-di-amerika-bukan-cuman-sekedar-mimpi/', 301);
Route::redirect('https://edu-all.com/id/kuliah-di-jepang-kamu-wajib-tahu-ini/', 'https://edu-all.com/id-id/blog/kuliah-di-jepang-kamu-wajib-tahu-ini/', 301);
Route::redirect('https://edu-all.com/id/kuliah-di-kanada-bukan-hanya-sekedar-mimpi/', 'https://edu-all.com/id-id/blog/kuliah-di-kanada-bukan-hanya-sekedar-mimpi/', 301);
Route::redirect('https://edu-all.com/id/kuliah-di-luar-negeri-udah-bukan-mimpi/', 'https://edu-all.com/id-id/blog/kuliah-di-luar-negeri-udah-bukan-mimpi/', 301);
Route::redirect('https://edu-all.com/id/kuliah-di-singapura-ini-ulasan-terlengkapnya/', 'https://edu-all.com/id-id/blog/kuliah-di-singapura-ini-ulasan-terlengkapnya/', 301);
Route::redirect('https://edu-all.com/id/kupas-tuntas-jurusan-bisnis-digital-yang-sedang-trendy/', 'https://edu-all.com/id-id/blog/kupas-tuntas-jurusan-bisnis-digital-yang-sedang-trendy/', 301);
Route::redirect('https://edu-all.com/id/kupas-tuntas-pendaftaran-universitas-di-australia/', 'https://edu-all.com/id-id/blog/kupas-tuntas-pendaftaran-universitas-di-australia/', 301);
Route::redirect('https://edu-all.com/id/kupas-tuntas-semua-fakta-tentang-jurusan-arsitektur/', 'https://edu-all.com/id-id/blog/kupas-tuntas-semua-fakta-tentang-jurusan-arsitektur/', 301);
Route::redirect('https://edu-all.com/id/kupas-tuntas-semua-informasi-mengenai-jurusan-teknik-sipil/', 'https://edu-all.com/id-id/blog/kupas-tuntas-semua-informasi-mengenai-jurusan-teknik-sipil/', 301);
Route::redirect('https://edu-all.com/id/lulusan-jurusan-biologi-kerja-apa-inilah-daftar-lengkapnya/', 'https://edu-all.com/id-id/blog/lulusan-jurusan-biologi-kerja-apa-inilah-daftar-lengkapnya/', 301);
Route::redirect('https://edu-all.com/id/lulusan-jurusan-matematika-kerja-apa-baca-di-sini/', 'https://edu-all.com/id-id/blog/lulusan-jurusan-matematika-kerja-apa-baca-di-sini/', 301);
Route::redirect('https://edu-all.com/id/macam-macam-konsentrasi-jurusan-hukum/', 'https://edu-all.com/id-id/blog/macam-macam-konsentrasi-jurusan-hukum/', 301);
Route::redirect('https://edu-all.com/id/macam-macam-spesialisasi-kedokteran-yang-jarang-orang-tahu/', 'https://edu-all.com/id-id/blog/macam-macam-spesialisasi-kedokteran-yang-jarang-orang-tahu/', 301);
Route::redirect('https://edu-all.com/id/maksimalkan-hari-dengan-menjadi-produktif/', 'https://edu-all.com/id-id/blog/maksimalkan-hari-dengan-menjadi-produktif/', 301);
Route::redirect('https://edu-all.com/id/manajemen-bisnis-peran-dan-prospek/', 'https://edu-all.com/id-id/blog/manajemen-bisnis-peran-dan-prospek/', 301);
Route::redirect('https://edu-all.com/id/manajemen-macam-macam-pilihan-peminatan/', 'https://edu-all.com/id-id/blog/manajemen-macam-macam-pilihan-peminatan/', 301);
Route::redirect('https://edu-all.com/id/manajemen-pemasaran-jurusan-dan-prospek-kerja/', 'https://edu-all.com/id-id/blog/manajemen-pemasaran-jurusan-dan-prospek-kerja/', 301);
Route::redirect('https://edu-all.com/id/mau-kuliah-di-jurusan-hukum-kenali-seluk-beluknya/', 'https://edu-all.com/id-id/blog/mau-kuliah-di-jurusan-hukum-kenali-seluk-beluknya/', 301);
Route::redirect('https://edu-all.com/id/mau-masuk-jurusan-animasi-baca-dulu-faktanya/', 'https://edu-all.com/id-id/blog/mau-masuk-jurusan-animasi-baca-dulu-faktanya/', 301);
Route::redirect('https://edu-all.com/id/mau-masuk-universitas-di-australia-ketahui-hal-ini/', 'https://edu-all.com/id-id/blog/mau-masuk-universitas-di-australia-ketahui-hal-ini/', 301);
Route::redirect('https://edu-all.com/id/membedah-biaya-kuliah-di-luar-negeri/', 'https://edu-all.com/id-id/blog/membedah-biaya-kuliah-di-luar-negeri/', 301);
Route::redirect('https://edu-all.com/id/membedah-profesi-dokter-kulit/', 'https://edu-all.com/id-id/blog/membedah-profesi-dokter-kulit/', 301);
Route::redirect('https://edu-all.com/id/mengenal-jurusan-manajemen-sumber-daya-manusia/', 'https://edu-all.com/id-id/blog/mengenal-jurusan-manajemen-sumber-daya-manusia/', 301);
Route::redirect('https://edu-all.com/id/mengenal-lebih-dalam-tentang-jurusan-akuntansi/', 'https://edu-all.com/id-id/blog/mengenal-lebih-dalam-tentang-jurusan-akuntansi/', 301);
Route::redirect('https://edu-all.com/id/mengenal-lebih-dekat-profesi-dokter-anak/', 'https://edu-all.com/id-id/blog/mengenal-lebih-dekat-profesi-dokter-anak/', 301);
Route::redirect('https://edu-all.com/id/mengenal-luar-dalam-mengenai-jurusan-ekonomi-pembangunan/', 'https://edu-all.com/id-id/blog/mengenal-luar-dalam-mengenai-jurusan-ekonomi-pembangunan/', 301);
Route::redirect('https://edu-all.com/id/mimpi-kuliah-di-inggris-pahami-beberapa-hal-ini/', 'https://edu-all.com/id-id/blog/mimpi-kuliah-di-inggris-pahami-beberapa-hal-ini/', 301);
Route::redirect('https://edu-all.com/id/nggak-usah-bingung-jurusan-animasi-kerja-apa-ini-daftar-lengkapnya/', 'https://edu-all.com/id-id/blog/nggak-usah-bingung-jurusan-animasi-kerja-apa-ini-daftar-lengkapnya/', 301);
Route::redirect('https://edu-all.com/id/penasaran-manfaat-kuliah-jurusan-pertanian-simak-lengkapnya-di-sini/', 'https://edu-all.com/id-id/blog/penasaran-manfaat-kuliah-jurusan-pertanian-simak-lengkapnya-di-sini/', 301);
Route::redirect('https://edu-all.com/id/pernah-dengar-tentang-kedokteran-nuklir-cari-tahu-lengkapnya-di-sini/', 'https://edu-all.com/id-id/blog/pernah-dengar-tentang-kedokteran-nuklir-cari-tahu-lengkapnya-di-sini/', 301);
Route::redirect('https://edu-all.com/id/profil-lengkap-mengenai-teknik-lingkungan-khusus-buat-kamu/', 'https://edu-all.com/id-id/blog/profil-lengkap-mengenai-teknik-lingkungan-khusus-buat-kamu/', 301);
Route::redirect('https://edu-all.com/id/prospek-kerja-ilmu-komunikasi-di-masa-depan/', 'https://edu-all.com/id-id/blog/prospek-kerja-ilmu-komunikasi-di-masa-depan/', 301);
Route::redirect('https://edu-all.com/id/prospek-kerja-jurusan-hukum-di-masa-depan/', 'https://edu-all.com/id-id/blog/prospek-kerja-jurusan-hukum-di-masa-depan/', 301);
Route::redirect('https://edu-all.com/id/ranking-universitas-di-australia-ini-5-terbaik/', 'https://edu-all.com/id-id/blog/ranking-universitas-di-australia-ini-5-terbaik/', 301);
Route::redirect('https://edu-all.com/id/sastra-inggris-penjelasan-dan-prospek-kerja/', 'https://edu-all.com/id-id/blog/sastra-inggris-penjelasan-dan-prospek-kerja/', 301);
Route::redirect('https://edu-all.com/id/selain-biaya-universitas-di-australia-ini-biaya-yang-harus-kamu-tau/', 'https://edu-all.com/id-id/blog/selain-biaya-universitas-di-australia-ini-biaya-yang-harus-kamu-tau/', 301);
Route::redirect('https://edu-all.com/id/semua-hal-yang-wajib-kamu-tahu-untuk-kuliah-jurusan-teknik-elektro/', 'https://edu-all.com/id-id/blog/semua-hal-yang-wajib-kamu-tahu-untuk-kuliah-jurusan-teknik-elektro/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-jurusan-desain-interior-untuk-kuliah-di-australia/', 'https://edu-all.com/id-id/blog/serba-serbi-jurusan-desain-interior-untuk-kuliah-di-australia/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-jurusan-farmasi-yang-perlu-kamu-tahu/', 'https://edu-all.com/id-id/blog/serba-serbi-jurusan-farmasi-yang-perlu-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-jurusan-hubungan-internasional-yang-wajib-kamu-ketahui/', 'https://edu-all.com/id-id/blog/serba-serbi-jurusan-hubungan-internasional-yang-wajib-kamu-ketahui/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-jurusan-ilmu-komunikasi/', 'https://edu-all.com/id-id/blog/serba-serbi-jurusan-ilmu-komunikasi/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-jurusan-matematika/', 'https://edu-all.com/id-id/blog/serba-serbi-jurusan-matematika/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-kuliah-di-korea-yang-kamu-harus-tahu/', 'https://edu-all.com/id-id/blog/serba-serbi-kuliah-di-korea-yang-kamu-harus-tahu/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-mengenai-jurusan-teknik/', 'https://edu-all.com/id-id/blog/serba-serbi-mengenai-jurusan-teknik/', 301);
Route::redirect('https://edu-all.com/id/serba-serbi-mengenai-sastra-jepang/', 'https://edu-all.com/id-id/blog/serba-serbi-mengenai-sastra-jepang/', 301);
Route::redirect('https://edu-all.com/id/simak-semua-info-lengkap-tentang-jurusan-teknik-informatika/', 'https://edu-all.com/id-id/blog/simak-semua-info-lengkap-tentang-jurusan-teknik-informatika/', 301);
Route::redirect('https://edu-all.com/id/simak-syarat-kuliah-di-belanda-berikut-ini!/', 'https://edu-all.com/id-id/blog/simak-syarat-kuliah-di-belanda-berikut-ini', 301);
Route::redirect('https://edu-all.com/id/simak-syarat-masuk-jurusan-hubungan-internasional-di-sini/', 'https://edu-all.com/id-id/blog/simak-syarat-masuk-jurusan-hubungan-internasional-di-sini/', 301);
Route::redirect('https://edu-all.com/id/syarat-kuliah-di-china-yang-wajib-kamu-persiapkan/', 'https://edu-all.com/id-id/blog/syarat-kuliah-di-china-yang-wajib-kamu-persiapkan/', 301);
Route::redirect('https://edu-all.com/id/syarat-kuliah-di-inggris-yang-harus-kamu-tahu/', 'https://edu-all.com/id-id/blog/syarat-kuliah-di-inggris-yang-harus-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/id/syarat-kuliah-di-jepang-yang-kamu-harus-tahu/', 'https://edu-all.com/id-id/blog/syarat-kuliah-di-jepang-yang-kamu-harus-tahu/', 301);
Route::redirect('https://edu-all.com/id/syarat-kuliah-di-singapura-berikut-daftar-lengkapnya/', 'https://edu-all.com/id-id/blog/syarat-kuliah-di-singapura-berikut-daftar-lengkapnya/', 301);
Route::redirect('https://edu-all.com/id/syarat-masuk-jurusan-desain-interior-yang-wajib-kamu-tahu/', 'https://edu-all.com/id-id/blog/syarat-masuk-jurusan-desain-interior-yang-wajib-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/id/syarat-masuk-jurusan-tata-boga-atau-culinary-arts/', 'https://edu-all.com/id-id/blog/syarat-masuk-jurusan-tata-boga-atau-culinary-arts/', 301);
Route::redirect('https://edu-all.com/id/teknik-industri-jurusan-universitas-dan-prospek-kerja-di-masa-depan/', 'https://edu-all.com/id-id/blog/teknik-industri-jurusan-universitas-dan-prospek-kerja-di-masa-depan/', 301);
Route::redirect('https://edu-all.com/id/teknik-sipil-pengertian-dan-prospek-kerja/', 'https://edu-all.com/id-id/blog/teknik-sipil-pengertian-dan-prospek-kerja/', 301);
Route::redirect('https://edu-all.com/id/tertarik-masuk-jurusan-ekonomi-bisnis-baca-artikel-ini/', 'https://edu-all.com/id-id/blog/tertarik-masuk-jurusan-ekonomi-bisnis-baca-artikel-ini/', 301);
Route::redirect('https://edu-all.com/id/tertarik-masuk-ke-jurusan-pertanian-simak-info-lengkapnya-di-sini/', 'https://edu-all.com/id-id/blog/tertarik-masuk-ke-jurusan-pertanian-simak-info-lengkapnya-di-sini/', 301);
Route::redirect('https://edu-all.com/id/tertarik-masuk-ke-public-relation-baca-informasi-lengkapnya-di-sini/', 'https://edu-all.com/id-id/blog/tertarik-masuk-ke-public-relation-baca-informasi-lengkapnya-di-sini/', 301);
Route::redirect('https://edu-all.com/id/tertarik-masuk-sastra-korea-cari-tahu-di-sini/', 'https://edu-all.com/id-id/blog/tertarik-masuk-sastra-korea-cari-tahu-di-sini/', 301);
Route::redirect('https://edu-all.com/id/tips-tetap-produktif-di-masa-pandemi-untuk-pelajar/', 'https://edu-all.com/id-id/blog/tips-tetap-produktif-di-masa-pandemi-untuk-pelajar/', 301);
Route::redirect('https://edu-all.com/id/universitas-dengan-jurusan-kesehatan-masyarakat-terbaik-di-australia/', 'https://edu-all.com/id-id/blog/universitas-dengan-jurusan-kesehatan-masyarakat-terbaik-di-australia/', 301);
Route::redirect('https://edu-all.com/id/universitas-jurusan-animasi-ini-daftar-5-terbaik-di-asia/', 'https://edu-all.com/id-id/blog/universitas-jurusan-animasi-ini-daftar-5-terbaik-di-asia/', 301);
Route::redirect('https://edu-all.com/id/universitas-jurusan-perpajakan-di-dunia-ini-5-terbaik/', 'https://edu-all.com/id-id/blog/universitas-jurusan-perpajakan-di-dunia-ini-5-terbaik/', 301);
Route::redirect('https://edu-all.com/id/yuk-ketahui-rincian-biaya-kuliah-di-belanda/', 'https://edu-all.com/id-id/blog/yuk-ketahui-rincian-biaya-kuliah-di-belanda/', 301);
Route::redirect('https://edu-all.com/kyoto-university-ranking-application-complete-facts-and-figures/', 'https://edu-all.com/id-en/blog/kyoto-university-ranking-application-complete-facts-and-figures/', 301);
Route::redirect('https://edu-all.com/kyoto-university-scholarship-you-need-to-check-on/', 'https://edu-all.com/id-en/blog/kyoto-university-scholarship-you-need-to-check-on/', 301);
Route::redirect('https://edu-all.com/learn-the-complete-insight-about-human-resource-here/', 'https://edu-all.com/id-en/blog/learn-the-complete-insight-about-human-resource-here/', 301);
Route::redirect('https://edu-all.com/learn-to-choose-a-level-subjects-here/', 'https://edu-all.com/id-en/blog/learn-to-choose-a-level-subjects-here/', 301);
Route::redirect('https://edu-all.com/lets-deep-dive-into-yale-university-complete-profile/', 'https://edu-all.com/id-en/blog/lets-deep-dive-into-yale-university-complete-profile/', 301);
Route::redirect('https://edu-all.com/lets-discover-the-full-insight-about-sat-to-optimize-your-preparation/', 'https://edu-all.com/id-en/blog/lets-discover-the-full-insight-about-sat-to-optimize-your-preparation/', 301);
Route::redirect('https://edu-all.com/lets-get-to-know-about-the-full-kyoto-university-info/', 'https://edu-all.com/id-en/blog/lets-get-to-know-about-the-full-kyoto-university-info/', 301);
Route::redirect('https://edu-all.com/lets-learn-the-scope-of-human-resource-management/', 'https://edu-all.com/id-en/blog/lets-learn-the-scope-of-human-resource-management/', 301);
Route::redirect('https://edu-all.com/letter-of-recommendation-for-scholarship-what-you-should-know/', 'https://edu-all.com/id-en/blog/letter-of-recommendation-for-scholarship-what-you-should-know/', 301);
Route::redirect('https://edu-all.com/letter-of-recommendation-for-university-your-go-to-guide/', 'https://edu-all.com/id-en/blog/letter-of-recommendation-for-university-your-go-to-guide/', 301);
Route::redirect('https://edu-all.com/list-of-the-best-universities-for-psychology-major/', 'https://edu-all.com/id-en/blog/list-of-the-best-universities-for-psychology-major/', 301);
Route::redirect('https://edu-all.com/looking-for-mentoring-programs-for-youth-here-it-is/', 'https://edu-all.com/id-en/blog/looking-for-mentoring-programs-for-youth-here-it-is/', 301);
Route::redirect('https://edu-all.com/mentoring-programs-these-are-all-reasons-why-you-need-it/', 'https://edu-all.com/id-en/blog/mentoring-programs-these-are-all-reasons-why-you-need-it/', 301);
Route::redirect('https://edu-all.com/ntu-the-absolutely-complete-facts-you-should-know/', 'https://edu-all.com/id-en/blog/ntu-the-absolutely-complete-facts-you-should-know/', 301);
Route::redirect('https://edu-all.com/nus-complete-application-and-scholarship-profile/', 'https://edu-all.com/id-en/blog/nus-complete-application-and-scholarship-profile/', 301);
Route::redirect('https://edu-all.com/nus-master-degree:-all-insight-you-need-for-postgraduate-study/', 'https://edu-all.com/id-en/blog/nus-master-degree-all-insight-you-need-for-postgraduate-study', 301);
Route::redirect('https://edu-all.com/nyu-acceptance-rate-facts-you-need-to-know/', 'https://edu-all.com/id-en/blog/nyu-acceptance-rate-facts-you-need-to-know/', 301);
Route::redirect('https://edu-all.com/online-tutor-getting-yourself-ahead-in-high-school/', 'https://edu-all.com/id-en/blog/online-tutor-getting-yourself-ahead-in-high-school/', 301);
Route::redirect('https://edu-all.com/peking-university-master-program:-your-', 'https://edu-all.com/id-en/blog/peking-university-master-program-your-1-study-destination-in-china', 301);
Route::redirect('https://edu-all.com/peking-university:-your-recommended-study-destination-in-asia/', 'https://edu-all.com/id-en/blog/peking-university-your-recommended-study-destination-in-asia', 301);
Route::redirect('https://edu-all.com/personal-branding-strategy-perfecting-uni-application/', 'https://edu-all.com/id-en/blog/personal-branding-strategy-perfecting-uni-application/', 301);
Route::redirect('https://edu-all.com/personal-branding-tips-to-gain-yourself-an-edge/', 'https://edu-all.com/id-en/blog/personal-branding-tips-to-gain-yourself-an-edge/', 301);
Route::redirect('https://edu-all.com/personal-branding-why-is-it-important-for-students/', 'https://edu-all.com/id-en/blog/personal-branding-why-is-it-important-for-students/', 301);
Route::redirect('https://edu-all.com/princeton-university-complete-and-thorough-profile-breakdown/', 'https://edu-all.com/id-en/blog/princeton-university-complete-and-thorough-profile-breakdown/', 301);
Route::redirect('https://edu-all.com/princeton-university-ranking-get-to-know-this-picturesque-university/', 'https://edu-all.com/id-en/blog/princeton-university-ranking-get-to-know-this-picturesque-university/', 301);
Route::redirect('https://edu-all.com/private-tutor-a-gateway-to-enter-top-universities/', 'https://edu-all.com/id-en/blog/private-tutor-a-gateway-to-enter-top-universities/', 301);
Route::redirect('https://edu-all.com/private-universities-in-the-usa-know-the-features/', 'https://edu-all.com/id-en/blog/private-universities-in-the-usa-know-the-features/', 301);
Route::redirect('https://edu-all.com/psychology-the-famous-major-for-students/', 'https://edu-all.com/id-en/blog/psychology-the-famous-major-for-students/', 301);
Route::redirect('https://edu-all.com/read-the-full-scoop-on-seoul-national-university-here/', 'https://edu-all.com/id-en/blog/read-the-full-scoop-on-seoul-national-university-here/', 301);
Route::redirect('https://edu-all.com/reasons-why-you-should-study-a-level-math/', 'https://edu-all.com/id-en/blog/reasons-why-you-should-study-a-level-math/', 301);
Route::redirect('https://edu-all.com/sat-score-your-golden-ticket-to-enter-us-universities/', 'https://edu-all.com/id-en/blog/sat-score-your-golden-ticket-to-enter-us-universities/', 301);
Route::redirect('https://edu-all.com/scholarship-to-study-abroad-that-you-can-try-applying-to/', 'https://edu-all.com/id-en/blog/scholarship-to-study-abroad-that-you-can-try-applying-to/', 301);
Route::redirect('https://edu-all.com/programs/admissions-mentoring/', 'https://edu-all.com/id-id/programs/admissions-mentoring/', 301);
Route::redirect('https://edu-all.com/programs/passion-project-mentoring/', 'https://edu-all.com/id-id/programs/passion-project-mentoring/', 301);
Route::redirect('https://edu-all.com/should-you-choose-a-level-accounting/', 'https://edu-all.com/id-en/blog/should-you-choose-a-level-accounting/', 301);
Route::redirect('https://edu-all.com/simple-essay-writing-structure-for-everything/', 'https://edu-all.com/id-en/blog/simple-essay-writing-structure-for-everything/', 301);
Route::redirect('https://edu-all.com/special-tips-on-mastering-your-sat-test-from-all-in/', 'https://edu-all.com/id-en/blog/special-tips-on-mastering-your-sat-test-from-all-in/', 301);
Route::redirect('https://edu-all.com/stanford-business-school-what-does-it-offer/', 'https://edu-all.com/id-en/blog/stanford-business-school-what-does-it-offer/', 301);
Route::redirect('https://edu-all.com/stanford-law-school-your-dream-destination-to-be-master-of-law/', 'https://edu-all.com/id-en/blog/stanford-law-school-your-dream-destination-to-be-master-of-law/', 301);
Route::redirect('https://edu-all.com/stanford-medical-school-heres-your-guide/', 'https://edu-all.com/id-en/blog/stanford-medical-school-heres-your-guide/', 301);
Route::redirect('https://edu-all.com/stanford-postgraduate-profile/', 'https://edu-all.com/id-en/blog/stanford-postgraduate-profile/', 301);
Route::redirect('https://edu-all.com/study-abroad-your-ultimate-guide-to-be-an-international-students/', 'https://edu-all.com/id-en/blog/study-abroad-your-ultimate-guide-to-be-an-international-students/', 301);
Route::redirect('https://edu-all.com/study-in-us-heres-what-you-should-know/', 'https://edu-all.com/id-en/blog/study-in-us-heres-what-you-should-know/', 301);
Route::redirect('https://edu-all.com/the-best-universities-for-computer-science-major/', 'https://edu-all.com/id-en/blog/the-best-universities-for-computer-science-major/', 301);
Route::redirect('https://edu-all.com/the-complete-essay-writing-examples/', 'https://edu-all.com/id-en/blog/the-complete-essay-writing-examples/', 301);
Route::redirect('https://edu-all.com/the-complete-list-of-sat-subject-test-to-complete-your-preparation/', 'https://edu-all.com/id-en/blog/the-complete-list-of-sat-subject-test-to-complete-your-preparation/', 301);
Route::redirect('https://edu-all.com/the-complete-list-of-university-of-manchester-ranking-of-subjects/', 'https://edu-all.com/id-en/blog/the-complete-list-of-university-of-manchester-ranking-of-subjects/', 301);
Route::redirect('https://edu-all.com/the-ins-and-outs-of-internship/', 'https://edu-all.com/id-en/blog/the-ins-and-outs-of-internship/', 301);
Route::redirect('https://edu-all.com/the-top-4-popular-ucla-majors/', 'https://edu-all.com/id-en/blog/the-top-4-popular-ucla-majors/', 301);
Route::redirect('https://edu-all.com/the-top-rank-of-the-universities-in-the-usa/', 'https://edu-all.com/id-en/blog/the-top-rank-of-the-universities-in-the-usa/', 301);
Route::redirect('https://edu-all.com/the-ultimate-guide-to-columbia-university-master-programs/', 'https://edu-all.com/id-en/blog/the-ultimate-guide-to-columbia-university-master-programs/', 301);
Route::redirect('https://edu-all.com/the-ultimate-ucas-application-guide-2023-for-students/', 'https://edu-all.com/id-en/blog/the-ultimate-ucas-application-guide-2023-for-students/', 301);
Route::redirect('https://edu-all.com/the-ultimately-effective-essay-writing-tips/', 'https://edu-all.com/id-en/blog/the-ultimately-effective-essay-writing-tips/', 301);
Route::redirect('https://edu-all.com/the-university-of-melbourne-all-you-need-to-know-in-one-swipe/', 'https://edu-all.com/id-en/blog/the-university-of-melbourne-all-you-need-to-know-in-one-swipe/', 301);
Route::redirect('https://edu-all.com/the-university-of-melbourne-scholarships-for-international-students/', 'https://edu-all.com/id-en/blog/the-university-of-melbourne-scholarships-for-international-students/', 301);
Route::redirect('https://edu-all.com/the-university-of-pennsylvania-a-thorough-profile-breakdown/', 'https://edu-all.com/id-en/blog/the-university-of-pennsylvania-a-thorough-profile-breakdown/', 301);
Route::redirect('https://edu-all.com/the-university-of-pennsylvania-master-program-debunked/', 'https://edu-all.com/id-en/blog/the-university-of-pennsylvania-master-program-debunked/', 301);
Route::redirect('https://edu-all.com/the-university-of-pennsylvania-ranking-subject-wise-and-overall/', 'https://edu-all.com/id-en/blog/the-university-of-pennsylvania-ranking-subject-wise-and-overall/', 301);
Route::redirect('https://edu-all.com/this-is-how-you-ace-the-ucas-personal-statement/', 'https://edu-all.com/id-en/blog/this-is-how-you-ace-the-ucas-personal-statement/', 301);
Route::redirect('https://edu-all.com/this-is-how-you-prepare-thoroughly-for-your-sat-exam/', 'https://edu-all.com/id-en/blog/this-is-how-you-prepare-thoroughly-for-your-sat-exam/', 301);
Route::redirect('https://edu-all.com/this-is-why-you-need-a-tutor-for-your-university-application/', 'https://edu-all.com/id-en/blog/this-is-why-you-need-a-tutor-for-your-university-application/', 301);
Route::redirect('https://edu-all.com/this-is-why-you-should-study-a-level-economics/', 'https://edu-all.com/id-en/blog/this-is-why-you-should-study-a-level-economics/', 301);
Route::redirect('https://edu-all.com/time-management-importance-for-students/', 'https://edu-all.com/id-en/blog/time-management-importance-for-students/', 301);
Route::redirect('https://edu-all.com/time-management-take-charge-of-your-day/', 'https://edu-all.com/id-en/blog/time-management-take-charge-of-your-day/', 301);
Route::redirect('https://edu-all.com/time-management-tools-every-student-should-have/', 'https://edu-all.com/id-en/blog/time-management-tools-every-student-should-have/', 301);
Route::redirect('https://edu-all.com/top-5-university-of-melbourne-courses-you-should-consider-taking/', 'https://edu-all.com/id-en/blog/top-5-university-of-melbourne-courses-you-should-consider-taking/', 301);
Route::redirect('https://edu-all.com/top-seoul-national-university-majors-for-undergraduate-degree/', 'https://edu-all.com/id-en/blog/top-seoul-national-university-majors-for-undergraduate-degree/', 301);
Route::redirect('https://edu-all.com/top-university-of-oxford-majors-in-2022/', 'https://edu-all.com/id-en/blog/top-university-of-oxford-majors-in-2022/', 301);
Route::redirect('https://edu-all.com/top-university-of-sydney-scholarships-for-international-students/', 'https://edu-all.com/id-en/blog/top-university-of-sydney-scholarships-for-international-students/', 301);
Route::redirect('https://edu-all.com/tsinghua-university-ranking-study-in-chinas-top-university/', 'https://edu-all.com/id-en/blog/tsinghua-university-ranking-study-in-chinas-top-university/', 301);
Route::redirect('https://edu-all.com/tsinghua-university-scholarship-know-the-ins-and-outs/', 'https://edu-all.com/id-en/blog/tsinghua-university-scholarship-know-the-ins-and-outs/', 301);
Route::redirect('https://edu-all.com/types-of-volunteering-work-for-high-school-students/', 'https://edu-all.com/id-en/blog/types-of-volunteering-work-for-high-school-students/', 301);
Route::redirect('https://edu-all.com/uc-berkeley-application-turn-your-uc-dream-into-a-reality/', 'https://edu-all.com/id-en/blog/uc-berkeley-application-turn-your-uc-dream-into-a-reality/', 301);
Route::redirect('https://edu-all.com/uc-berkeley-californias-prime-top-university-profile/', 'https://edu-all.com/id-en/blog/uc-berkeley-californias-prime-top-university-profile/', 301);
Route::redirect('https://edu-all.com/uc-berkeley-ranking-learn-more-about-californias-top-university/', 'https://edu-all.com/id-en/blog/uc-berkeley-ranking-learn-more-about-californias-top-university/', 301);
Route::redirect('https://edu-all.com/uc-davis-a-popular-school-that-was-once-a-farm/', 'https://edu-all.com/id-en/blog/uc-davis-a-popular-school-that-was-once-a-farm/', 301);
Route::redirect('https://edu-all.com/uc-irvine-here-is-everything-you-need-to-know-about-uc-irvine/', 'https://edu-all.com/id-en/blog/uc-irvine-here-is-everything-you-need-to-know-about-uc-irvine/', 301);
Route::redirect('https://edu-all.com/ucla-a-dive-into-californias-academic-powerhouse/', 'https://edu-all.com/id-en/blog/ucla-a-dive-into-californias-academic-powerhouse/', 301);
Route::redirect('https://edu-all.com/ucla-acceptance-rate-everything-you-should-know/', 'https://edu-all.com/id-en/blog/ucla-acceptance-rate-everything-you-should-know/', 301);
Route::redirect('https://edu-all.com/ucla-in-depth-views/', 'https://edu-all.com/id-en/blog/ucla-in-depth-views/', 301);
Route::redirect('https://edu-all.com/uncover-the-full-scoop-and-insight-of-tsinghua-university/', 'https://edu-all.com/id-en/blog/uncover-the-full-scoop-and-insight-of-tsinghua-university/', 301);
Route::redirect('https://edu-all.com/understanding-full-stack-developer-career/', 'https://edu-all.com/id-en/blog/understanding-full-stack-developer-career/', 301);
Route::redirect('https://edu-all.com/university-admissions-consultant-reliable-partner-for-your-application/', 'https://edu-all.com/id-en/blog/university-admissions-consultant-reliable-partner-for-your-application/', 301);
Route::redirect('https://edu-all.com/university-of-cambridge-master-program-for-your-amazing-study-journey/', 'https://edu-all.com/id-en/blog/university-of-cambridge-master-program-for-your-amazing-study-journey/', 301);
Route::redirect('https://edu-all.com/university-of-cambridge-ranking-all-world-class-subject/', 'https://edu-all.com/id-en/blog/university-of-cambridge-ranking-all-world-class-subject/', 301);
Route::redirect('https://edu-all.com/university-of-hong-kong-acceptance-rate-get-the-inside-scoop/', 'https://edu-all.com/id-en/blog/university-of-hong-kong-acceptance-rate-get-the-inside-scoop/', 301);
Route::redirect('https://edu-all.com/university-of-hong-kong-all-essential-facts-and-figures/', 'https://edu-all.com/id-en/blog/university-of-hong-kong-all-essential-facts-and-figures/', 301);
Route::redirect('https://edu-all.com/university-of-manchester-acceptance-rate-heres-what-you-should-know/', 'https://edu-all.com/id-en/blog/university-of-manchester-acceptance-rate-heres-what-you-should-know/', 301);
Route::redirect('https://edu-all.com/university-of-manchester-master-program:-what-to-look-for!/', 'https://edu-all.com/id-en/blog/university-of-manchester-master-program-what-to-look-for', 301);
Route::redirect('https://edu-all.com/university-of-sydney-full-profile-insight-and-overview/', 'https://edu-all.com/id-en/blog/university-of-sydney-full-profile-insight-and-overview/', 301);
Route::redirect('https://edu-all.com/university-of-sydney-ranking-this-is-the-best-subjects/', 'https://edu-all.com/id-en/blog/university-of-sydney-ranking-this-is-the-best-subjects/', 301);
Route::redirect('https://edu-all.com/university-of-toronto-acceptance-rate-turn-your-dream-into-a-reality/', 'https://edu-all.com/id-en/blog/university-of-toronto-acceptance-rate-turn-your-dream-into-a-reality/', 301);
Route::redirect('https://edu-all.com/university-of-toronto-ranking-the-top-list-of-subject/', 'https://edu-all.com/id-en/blog/university-of-toronto-ranking-the-top-list-of-subject/', 301);
Route::redirect('https://edu-all.com/university-of-toronto-scholarships-study-at-canadas-top-university/', 'https://edu-all.com/id-en/blog/university-of-toronto-scholarships-study-at-canadas-top-university/', 301);
Route::redirect('https://edu-all.com/usa-as-study-destination/', 'https://edu-all.com/id-en/blog/usa-as-study-destination/', 301);
Route::redirect('https://edu-all.com/volunteering-experience-why-it-brings-many-benefits/', 'https://edu-all.com/id-en/blog/volunteering-experience-why-it-brings-many-benefits/', 301);
Route::redirect('https://edu-all.com/want-to-succeed-in-your-ucas-application-find-the-secret-here/', 'https://edu-all.com/id-en/blog/want-to-succeed-in-your-ucas-application-find-the-secret-here/', 301);
Route::redirect('https://edu-all.com/what-is-a-motivation-letter-for-internships/', 'https://edu-all.com/id-en/blog/what-is-a-motivation-letter-for-internships/', 301);
Route::redirect('https://edu-all.com/why-studying-in-australia-these-are-the-5-reasons/', 'https://edu-all.com/id-en/blog/why-studying-in-australia-these-are-the-5-reasons/', 301);
Route::redirect('https://edu-all.com/yale-university-master-program-discover-what-this-institution-offers/', 'https://edu-all.com/id-en/blog/yale-university-master-program-discover-what-this-institution-offers/', 301);
Route::redirect('https://edu-all.com/yale-university-ranking-dive-into-this-ivy-league-institution/', 'https://edu-all.com/id-en/blog/yale-university-ranking-dive-into-this-ivy-league-institution/', 301);
Route::redirect('https://edu-all.com/your-complete-guide-on-international-lawyer/', 'https://edu-all.com/id-en/blog/your-complete-guide-on-international-lawyer/', 301);
Route::redirect('https://edu-all.com/daftar-lengkap-universitas-jurusan-multimedia-terbaik-di-asia/', 'https://edu-all.com/id-id/blog/daftar-lengkap-universitas-jurusan-multimedia-terbaik-di-asia/', 301);
Route::redirect('https://edu-all.com/dokter-penjelasan-dan-spesialisasi/', 'https://edu-all.com/id-id/blog/dokter-penjelasan-dan-spesialisasi/', 301);
Route::redirect('https://edu-all.com/fakta-lengkap-seputar-jurusan-gizi-yang-wajib-kamu-tahu/', 'https://edu-all.com/id-id/blog/fakta-lengkap-seputar-jurusan-gizi-yang-wajib-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/manajemen-operasional-penjelasan-dan-prospek-kerja/', 'https://edu-all.com/id-id/blog/manajemen-operasional-penjelasan-dan-prospek-kerja/', 301);
Route::redirect('https://edu-all.com/mimpi-kuliah-di-china-cari-tahu-semuanya-di-sini/', 'https://edu-all.com/id-id/blog/mimpi-kuliah-di-china-cari-tahu-semuanya-di-sini/', 301);
Route::redirect('https://edu-all.com/syarat-kuliah-di-luar-negeri-yang-perlu-kamu-tahu/', 'https://edu-all.com/id-id/blog/syarat-kuliah-di-luar-negeri-yang-perlu-kamu-tahu/', 301);
Route::redirect('https://edu-all.com/tips-hidup-produktif-untuk-pelajar/', 'https://edu-all.com/id-id/blog/tips-hidup-produktif-untuk-pelajar/', 301);

Route::redirect('https://edu-all.com/experiental-learning/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/experiental-learning/?utm_source=ALL-in+Eduspace+Newsletter&utm_campaign=c525db989d-EMAIL_CAMPAIGN_2019_05_15_05_52&utm_medium=email&utm_term=0_ae17e6b79a-c525db989d-218818141', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/academic-tutoring-2/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/jurusan-pertambangan-hal-hal-penting-yang-wajib-kamu-tahu/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/nggak-cuman-arsitek-ini-daftar-jurusan-arsitektur-kerja-apa-di-masa-depa/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/programs/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/programs/academic-test-preparation/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/programs/academic-test-preparation/sat-program/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/programs/admissions-mentoring-page/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/id/programs/passion-project-mentoring-id/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/index.php/2016/09/04/applying-uk-universities/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/index.php/2016/12/04/junior-senior-university-application-checklist-u-s-uk-singapore-australia/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/index.php/2016/12/30/success-students/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/index.php/careers/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/index.php/contact-us/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/index.php/programs/enrichment-programs/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/program/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/program/academic-test-preparation/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/program/academic-test-preparation/ib-extended-essay-coaching/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/program/admissions-mentoring/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/program/passionxplorer/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/program/writing-skills/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/programs/admissions-advisory/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/programs/enrichment-programs/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/programs/passion-mentoring/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/scholarships-government-sponsorship-ii/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/public/id-en/programs/academic-test-preparation', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/scholarships-government-sponsorship/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/sat-practice-test-maximizing-your-college-preparation/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/sat-prep/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/sign-me/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/state-finance-lets-get-to-know-what-this-field-is-about-?/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/study-abroad-scholarship-application-prep/', 'https://edu-all.com/id-id', 301);
Route::redirect('https://edu-all.com/university-of-manchester:-a-full-essential-profile-overview!/', 'https://edu-all.com/id-id', 301);
