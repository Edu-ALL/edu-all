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

Route::redirect('/', '/id-en', 301);

Route::middleware(['remove_public'])->group(function () {
    Route::get('robots.txt', function () {
        return response()->file(public_path('robots.txt'));
    });

    Route::get('/id-en', [HomePageController::class, 'home']);

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
Route::redirect('/5-essay-writing-steps-for-beginner/', '/id-en/blog/5-essay-writing-steps-for-beginner/', 301);
Route::redirect('/87-of-indonesian-youths-study-the-wrong-major-what-does-this-mean/', '/id-en/blog/87-of-indonesian-youths-study-the-wrong-major-what-does-this-mean/', 301);
Route::redirect('/a-complete-and-thorough-look-at-nus-scholarships/', '/id-en/blog/a-complete-and-thorough-look-at-nus-scholarships/', 301);
Route::redirect('/a-completely-thorough-overview-of-the-university-of-toronto/', '/id-en/blog/a-completely-thorough-overview-of-the-university-of-toronto/', 301);
Route::redirect('/a-full-scoop-of-university-of-cambridge-acceptance-rate/', '/id-en/blog/a-full-scoop-of-university-of-cambridge-acceptance-rate/', 301);
Route::redirect('/a-glance-at-mechanical-engineering-major/', '/id-en/blog/a-glance-at-mechanical-engineering-major/', 301);
Route::redirect('/a-glance-at-the-mit-acceptance-rate/', '/id-en/blog/a-glance-at-the-mit-acceptance-rate/', 301);
Route::redirect('/a-glance-at-the-university-of-melbourne-acceptance-rate/', '/id-en/blog/a-glance-at-the-university-of-melbourne-acceptance-rate/', 301);
Route::redirect('/a-glimpse-of-psychology-jobs-and-careers/', '/id-en/blog/a-glimpse-of-psychology-jobs-and-careers/', 301);
Route::redirect('/a-level-biology-all-you-need-to-know/', '/id-en/blog/a-level-biology-all-you-need-to-know/', 301);
Route::redirect('/about', '/id-id/about', 301);
Route::redirect('/about/', '/id-id/about/', 301);
Route::redirect('/all-about-harvard-university-post-graduate-program/', '/id-en/blog/all-about-harvard-university-post-graduate-program/', 301);
Route::redirect('/all-about-the-university-of-oxford/', '/id-en/blog/all-about-the-university-of-oxford/', 301);
Route::redirect('/all-in-one-information-about-the-university-of-cambridge/', '/id-en/blog/all-in-one-information-about-the-university-of-cambridge/', 301);
Route::redirect('/all-you-need-to-know-about-computer-science/', '/id-en/blog/all-you-need-to-know-about-computer-science/', 301);
Route::redirect('/applying-uk-universities/', '/id-en/blog/applying-uk-universities/', 301);
Route::redirect('/attractive-ntu-scholarships-you-should-know/', '/id-en/blog/attractive-ntu-scholarships-you-should-know/', 301);
Route::redirect('/attractive-university-of-hong-kong-scholarships-that-you-should-try/', '/id-en/blog/attractive-university-of-hong-kong-scholarships-that-you-should-try/', 301);
Route::redirect('/back-end-developer-heres-what-you-should-know/', '/id-en/blog/back-end-developer-heres-what-you-should-know/', 301);
Route::redirect('/benefits-of-a-university-admissions-consultant-for-aspiring-students/', '/id-en/blog/benefits-of-a-university-admissions-consultant-for-aspiring-students/', 301);
Route::redirect('/breaking-down-the-complete-ntu-admissions-process/', '/id-en/blog/breaking-down-the-complete-ntu-admissions-process/', 301);
Route::redirect('/breaking-down-university-of-oxford-acceptance-rate/', '/id-en/blog/breaking-down-university-of-oxford-acceptance-rate/', 301);
Route::redirect('/civil-engineering-why-you-should-consider-studying-it/', '/id-en/blog/civil-engineering-why-you-should-consider-studying-it/', 301);
Route::redirect('/columbia-university-rankings-the-new-york-based-ivy-league-university/', '/id-en/blog/columbia-university-rankings-the-new-york-based-ivy-league-university/', 301);
Route::redirect('/computer-science-jobs-outlook/', '/id-en/blog/computer-science-jobs-outlook/', 301);
Route::redirect('/contact-us/', '/id-id/contact-us/', 301);
Route::redirect('/cornell-university-acceptance-rate:-the-complete-information/', '/id-en/blog/cornell-university-acceptance-rate-the-complete-information', 301);
Route::redirect('/cornell-university-master-program:-here\'s-your-guide!/', '/id-en/blog/cornell-university-master-program-heres-your-guide', 301);
Route::redirect('/cornell-university-ranking:-your-guide-to-this-ivy-league-institution/', '/id-en/blog/cornell-university-ranking-your-guide-to-this-ivy-league-institution', 301);
Route::redirect('/corporate-lawyer-facts-you-need-to-know/', '/id-en/blog/corporate-lawyer-facts-you-need-to-know/', 301);
Route::redirect('/debugging-the-software-engineering-major/', '/id-en/blog/debugging-the-software-engineering-major/', 301);
Route::redirect('/developer-career-overview/', '/id-en/blog/developer-career-overview/', 301);
Route::redirect('/discover-the-top-five-list-of-the-best-nus-majors-in-here!/', '/id-en/blog/discover-the-top-five-list-of-the-best-nus-majors-in-here', 301);
Route::redirect('/discover-the-us-top-university-acceptance-rate/', '/id-en/blog/discover-the-us-top-university-acceptance-rate/', 301);
Route::redirect('/dreaming-to-go-to-uc-universities-lets-get-to-know-some-of-them/', '/id-en/blog/dreaming-to-go-to-uc-universities-lets-get-to-know-some-of-them/', 301);
Route::redirect('/dreaming-to-study-in-australia-read-this-first/', '/id-en/blog/dreaming-to-study-in-australia-read-this-first/', 301);
Route::redirect('/edinburgh-university-acceptance-rate-heres-what-you-should-know/', '/id-en/blog/edinburgh-university-acceptance-rate-heres-what-you-should-know/', 301);
Route::redirect('/edinburgh-university-all-you-need-to-know-before-applying/', '/id-en/blog/edinburgh-university-all-you-need-to-know-before-applying/', 301);
Route::redirect('/edinburgh-university-scholarships-find-out-here/', '/id-en/blog/edinburgh-university-scholarships-find-out-here/', 301);
Route::redirect('/electrical-engineering-a-thriving-field/', '/id-en/blog/electrical-engineering-a-thriving-field/', 301);
Route::redirect('/engineering-degree-the-ins-and-outs/', '/id-en/blog/engineering-degree-the-ins-and-outs/', 301);
Route::redirect('/essay-for-study-abroad-everything-you-should-know/', '/id-en/blog/essay-for-study-abroad-everything-you-should-know/', 301);
Route::redirect('/essay-writing-one-guide-to-master-them-all/', '/id-en/blog/essay-writing-one-guide-to-master-them-all/', 301);
Route::redirect('/everything-on-how-to-apply-to-universities-in-the-usa/', '/id-en/blog/everything-on-how-to-apply-to-universities-in-the-usa/', 301);
Route::redirect('/everything-to-know-about-universities-in-the-usa/', '/id-en/blog/everything-to-know-about-universities-in-the-usa/', 301);
Route::redirect('/facts-and-outlook-of-criminal-lawyer/', '/id-en/blog/facts-and-outlook-of-criminal-lawyer/', 301);
Route::redirect('/finance-the-everlasting-field-with-great-potential/', '/id-en/blog/finance-the-everlasting-field-with-great-potential/', 301);
Route::redirect('/find-out-about-seoul-national-university-scholarship-here/', '/id-en/blog/find-out-about-seoul-national-university-scholarship-here/', 301);
Route::redirect('/front-end-developer-what-is-it/', '/id-en/blog/front-end-developer-what-is-it/', 301);
Route::redirect('/full-overview-of-harvard-acceptance-rate/', '/id-en/blog/full-overview-of-harvard-acceptance-rate/', 301);
Route::redirect('/full-overview-on-columbia-university-profile/', '/id-en/blog/full-overview-on-columbia-university-profile/', 301);
Route::redirect('/full-scoop-and-facts-on-mentoring-programs-for-students/', '/id-en/blog/full-scoop-and-facts-on-mentoring-programs-for-students/', 301);
Route::redirect('/full-scoop-on-cornell-university-profile-just-for-you!/', '/id-en/blog/full-scoop-on-cornell-university-profile-just-for-you', 301);
Route::redirect('/full-scope-of-university-of-sydney-acceptance-rate/', '/id-en/blog/full-scope-of-university-of-sydney-acceptance-rate/', 301);
Route::redirect('/get-the-full-info-on-the-uc-berkeley-acceptance-rate-only-in-this-article/', '/id-en/blog/get-the-full-info-on-the-uc-berkeley-acceptance-rate-only-in-this-article/', 301);
Route::redirect('/get-to-know-all-about-university-education-consultant/', '/id-en/blog/get-to-know-all-about-university-education-consultant/', 301);
Route::redirect('/get-to-know-all-kinds-of-lawyer/', '/id-en/blog/get-to-know-all-kinds-of-lawyer/', 301);
Route::redirect('/get-to-know-software-developer-career/', '/id-en/blog/get-to-know-software-developer-career/', 301);
Route::redirect('/harvard-business-school-facts-you-should-know/', '/id-en/blog/harvard-business-school-facts-you-should-know/', 301);
Route::redirect('/harvard-law-school-worlds-leading-law-school/', '/id-en/blog/harvard-law-school-worlds-leading-law-school/', 301);
Route::redirect('/harvard-majors-learning-from-a-world-class-faculty/', '/id-en/blog/harvard-majors-learning-from-a-world-class-faculty/', 301);
Route::redirect('/harvard-master-program-what-you-should-know/', '/id-en/blog/harvard-master-program-what-you-should-know/', 301);
Route::redirect('/harvard-medical-school-history-and-facts/', '/id-en/blog/harvard-medical-school-history-and-facts/', 301);
Route::redirect('/harvard-scholarship-keep-an-eye-on-these-opportunities/', '/id-en/blog/harvard-scholarship-keep-an-eye-on-these-opportunities/', 301);
Route::redirect('/harvard-university-mba-gain-a-world-class-education/', '/id-en/blog/harvard-university-mba-gain-a-world-class-education/', 301);
Route::redirect('/here-are-the-top-5-in-demand-human-resource-skills-in-the-industry/', '/id-en/blog/here-are-the-top-5-in-demand-human-resource-skills-in-the-industry/', 301);
Route::redirect('/here-is-how-university-application-consultant-helps-students/', '/id-en/blog/here-is-how-university-application-consultant-helps-students/', 301);
Route::redirect('/heres-what-you-should-know-about-nus-admission-process/', '/id-en/blog/heres-what-you-should-know-about-nus-admission-process/', 301);
Route::redirect('/how-to-build-personal-branding-for-university-admission/', '/id-en/blog/how-to-build-personal-branding-for-university-admission/', 301);
Route::redirect('/how-to-study-abroad-for-free-a-complete-guide/', '/id-en/blog/how-to-study-abroad-for-free-a-complete-guide/', 301);
Route::redirect('/how-to-use-time-management-matrix/', '/id-en/blog/how-to-use-time-management-matrix/', 301);
Route::redirect('/human-resource-development-the-heart-of-a-company/', '/id-en/blog/human-resource-development-the-heart-of-a-company/', 301);
Route::redirect('/human-resource-management-degree-lets-gain-all-the-insight/', '/id-en/blog/human-resource-management-degree-lets-gain-all-the-insight/', 301);
Route::redirect('/interested-in-a-human-resource-internship-know-this-before-you-apply/', '/id-en/blog/interested-in-a-human-resource-internship-know-this-before-you-apply/', 301);
Route::redirect('/internship-experience-why-is-it-good-for-students/', '/id-en/blog/internship-experience-why-is-it-good-for-students/', 301);
Route::redirect('/kyoto-university-master-program-a-glimpse-of-japans-university/', '/id-en/blog/kyoto-university-master-program-a-glimpse-of-japans-university/', 301);
Route::redirect('/id/3-beasiswa-kuliah-di-belanda-yang-cocok-untukmu!/', '/id-id/blog/3-beasiswa-kuliah-di-belanda-yang-cocok-untukmu', 301);
Route::redirect('/id/3-beasiswa-kuliah-di-china-terpopuler/', '/id-id/blog/3-beasiswa-kuliah-di-china-terpopuler/', 301);
Route::redirect('/id/4-alasan-terbaik-kenapa-kamu-harus-kuliah-jurusan-biologi/', '/id-id/blog/4-alasan-terbaik-kenapa-kamu-harus-kuliah-jurusan-biologi/', 301);
Route::redirect('/id/4-aplikasi-produktif-untuk-pelajar/', '/id-id/blog/4-aplikasi-produktif-untuk-pelajar/', 301);
Route::redirect('/id/5-alasan-kenapa-kamu-harus-kuliah-jurusan-perpajakan/', '/id-id/blog/5-alasan-kenapa-kamu-harus-kuliah-jurusan-perpajakan/', 301);
Route::redirect('/id/5-beasiswa-di-inggris-yang-kamu-wajib-tahu/', '/id-id/blog/5-beasiswa-di-inggris-yang-kamu-wajib-tahu/', 301);
Route::redirect('/id/5-jurusan-kuliah-di-belanda-untuk-pelajar-indonesia/', '/id-id/blog/5-jurusan-kuliah-di-belanda-untuk-pelajar-indonesia/', 301);
Route::redirect('/id/5-universitas-jurusan-desain-interior-terbaik-di-australia/', '/id-id/blog/5-universitas-jurusan-desain-interior-terbaik-di-australia/', 301);
Route::redirect('/id/analisis-penuh-mengenai-teknik-informatika/', '/id-id/blog/analisis-penuh-mengenai-teknik-informatika/', 301);
Route::redirect('/id/apa-saja-sih-tugas-public-relation-ayo-simak-lengkapnya-di-sini/', '/id-id/blog/apa-saja-sih-tugas-public-relation-ayo-simak-lengkapnya-di-sini/', 301);
Route::redirect('/id/ayo-cari-tahu-info-lengkap-seputar-jurusan-marketing/', '/id-id/blog/ayo-cari-tahu-info-lengkap-seputar-jurusan-marketing/', 301);
Route::redirect('/id/ayo-cari-tahu-seluk-beluk-jurusan-perhotelan-di-artikel-ini/', '/id-id/blog/ayo-cari-tahu-seluk-beluk-jurusan-perhotelan-di-artikel-ini/', 301);
Route::redirect('/id/ayo-kupas-tuntas-informasi-lengkap-mengenai-jurusan-dkv!/', '/id-id/blog/ayo-kupas-tuntas-informasi-lengkap-mengenai-jurusan-dkv', 301);
Route::redirect('/id/ayo-pahami-teknik-elektro-dengan-lebih-rinci/', '/id-id/blog/ayo-pahami-teknik-elektro-dengan-lebih-rinci/', 301);
Route::redirect('/id/ayo-simak-daftar-universitas-jurusan-pertanian-terbaik-di-asia-berikut-ini/', '/id-id/blog/ayo-simak-daftar-universitas-jurusan-pertanian-terbaik-di-asia-berikut-ini/', 301);
Route::redirect('/id/ayo-simak-informasi-lengkap-mengenai-jurusan-biologi-di-sini/', '/id-id/blog/ayo-simak-informasi-lengkap-mengenai-jurusan-biologi-di-sini/', 301);
Route::redirect('/id/ayo-simak-rentetan-universitas-jurusan-perhotelan-terbaik-di-dunia/', '/id-id/blog/ayo-simak-rentetan-universitas-jurusan-perhotelan-terbaik-di-dunia/', 301);
Route::redirect('/id/beasiswa-kuliah-di-amerika-ini-wajib-kamu-coba/', '/id-id/blog/beasiswa-kuliah-di-amerika-ini-wajib-kamu-coba/', 301);
Route::redirect('/id/beasiswa-kuliah-di-jepang-mext-scholarship/', '/id-id/blog/beasiswa-kuliah-di-jepang-mext-scholarship/', 301);
Route::redirect('/id/beasiswa-kuliah-di-kanada-inilah-7-terbaik/', '/id-id/blog/beasiswa-kuliah-di-kanada-inilah-7-terbaik/', 301);
Route::redirect('/id/beasiswa-kuliah-di-korea-global-korea-scholarship/', '/id-id/blog/beasiswa-kuliah-di-korea-global-korea-scholarship/', 301);
Route::redirect('/id/beasiswa-kuliah-di-singapura-untuk-s1/', '/id-id/blog/beasiswa-kuliah-di-singapura-untuk-s1/', 301);
Route::redirect('/id/belum-tahu-cara-kuliah-di-amerika-cek-di-sini/', '/id-id/blog/belum-tahu-cara-kuliah-di-amerika-cek-di-sini/', 301);
Route::redirect('/id/belum-tahu-jurusan-kesehatan-masyarakat-kerja-apa-baca-di-sini/', '/id-id/blog/belum-tahu-jurusan-kesehatan-masyarakat-kerja-apa-baca-di-sini/', 301);
Route::redirect('/id/berikut-adalah-5-universitas-jurusan-gizi-terbaik-di-asia/', '/id-id/blog/berikut-adalah-5-universitas-jurusan-gizi-terbaik-di-asia/', 301);
Route::redirect('/id/berikut-adalah-daftar-teratas-universitas-yang-ada-jurusan-marketing/', '/id-id/blog/berikut-adalah-daftar-teratas-universitas-yang-ada-jurusan-marketing/', 301);
Route::redirect('/id/biaya-kuliah-di-amerika-serikat-ini-lengkapnya/', '/id-id/blog/biaya-kuliah-di-amerika-serikat-ini-lengkapnya/', 301);
Route::redirect('/id/biaya-kuliah-di-kanada-yang-perlu-kamu-persiapkan/', '/id-id/blog/biaya-kuliah-di-kanada-yang-perlu-kamu-persiapkan/', 301);
Route::redirect('/id/biaya-kuliah-di-singapura-yang-harus-kamu-perhatikan/', '/id-id/blog/biaya-kuliah-di-singapura-yang-harus-kamu-perhatikan/', 301);
Route::redirect('/id/biaya-kuliah-jurusan-farmasi-di-jepang-yang-wajib-kamu-tahu/', '/id-id/blog/biaya-kuliah-jurusan-farmasi-di-jepang-yang-wajib-kamu-tahu/', 301);
Route::redirect('/id/biaya-kuliah-jurusan-tata-boga-atau-culinary-di-le-cordon-bleu/', '/id-id/blog/biaya-kuliah-jurusan-tata-boga-atau-culinary-di-le-cordon-bleu/', 301);
Route::redirect('/id/bingung-pilih-jurusan-kuliah-ini-solusinya/', '/id-id/blog/bingung-pilih-jurusan-kuliah-ini-solusinya/', 301);
Route::redirect('/id/bukan-cuman-tentang-hotel-ayo-cari-tahu-jurusan-perhotelan-kerja-apa/', '/id-id/blog/bukan-cuman-tentang-hotel-ayo-cari-tahu-jurusan-perhotelan-kerja-apa/', 301);
Route::redirect('/id/cara-kuliah-di-kanada-yang-perlu-kamu-tahu/', '/id-id/blog/cara-kuliah-di-kanada-yang-perlu-kamu-tahu/', 301);
Route::redirect('/id/cara-kuliah-di-luar-negeri-dengan-beasiswa/', '/id-id/blog/cara-kuliah-di-luar-negeri-dengan-beasiswa/', 301);
Route::redirect('/id/cari-tahu-manfaat-kuliah-jurusan-marketing-di-sini!/', '/id-id/blog/cari-tahu-manfaat-kuliah-jurusan-marketing-di-sini', 301);
Route::redirect('/id/daftar-5-universitas-jurusan-hubungan-internasional-terbaik-di-asia/', '/id-id/blog/daftar-5-universitas-jurusan-hubungan-internasional-terbaik-di-asia/', 301);
Route::redirect('/id/daftar-beasiswa-kuliah-di-luar-negeri-terpopuler/', '/id-id/blog/daftar-beasiswa-kuliah-di-luar-negeri-terpopuler/', 301);
Route::redirect('/id/daftar-jurusan-sastra-terpopuler/', '/id-id/blog/daftar-jurusan-sastra-terpopuler/', 301);
Route::redirect('/id/daftar-lengkap-biaya-kuliah-jurusan-desain-interior-di-australia/', '/id-id/blog/daftar-lengkap-biaya-kuliah-jurusan-desain-interior-di-australia/', 301);
Route::redirect('/id/daftar-prospek-kerja-jurusan-pertanian-di-masa-depan/', '/id-id/blog/daftar-prospek-kerja-jurusan-pertanian-di-masa-depan/', 301);
Route::redirect('/id/daftar-universitas-dengan-jurusan-farmasi-terbaik-di-asia/', '/id-id/blog/daftar-universitas-dengan-jurusan-farmasi-terbaik-di-asia/', 301);
Route::redirect('/id/daftar-universitas-jurusan-arsitektur-terbaik-di-asia-khusus-untuk-kamu/', '/id-id/blog/daftar-universitas-jurusan-arsitektur-terbaik-di-asia-khusus-untuk-kamu/', 301);
Route::redirect('/id/daftar-universitas-jurusan-hukum-terbaik-di-dunia/', '/id-id/blog/daftar-universitas-jurusan-hukum-terbaik-di-dunia/', 301);
Route::redirect('/id/daftar-universitas-jurusan-tata-boga-atau-culinary-arts-terbaik-di-dunia-﻿/', '/id-id/blog/daftar-universitas-jurusan-tata-boga-atau-culinary-arts-terbaik-di-dunia', 301);
Route::redirect('/id/dokter-gigi-profesi-di-balik-sebuah-senyuman/', '/id-id/blog/dokter-gigi-profesi-di-balik-sebuah-senyuman/', 301);
Route::redirect('/id/dokter-hewan-si-paling-ngerti-hewan/', '/id-id/blog/dokter-hewan-si-paling-ngerti-hewan/', 301);
Route::redirect('/id/hal-yang-harus-kamu-tau-tentang-teknik-industri/', '/id-id/blog/hal-yang-harus-kamu-tau-tentang-teknik-industri/', 301);
Route::redirect('/id/hal-yang-wajib-kamu-tahu-tentang-jurusan-bisnis-internasional/', '/id-id/blog/hal-yang-wajib-kamu-tahu-tentang-jurusan-bisnis-internasional/', 301);
Route::redirect('/id/informasi-lengkap-seputar-jurusan-kesehatan-masyarakat-berikut-ini/', '/id-id/blog/informasi-lengkap-seputar-jurusan-kesehatan-masyarakat-berikut-ini/', 301);
Route::redirect('/id/ingin-lanjut-kuliah-di-belanda-baca-ini/', '/id-id/blog/ingin-lanjut-kuliah-di-belanda-baca-ini/', 301);
Route::redirect('/id/ingin-tahu-biaya-kuliah-di-inggris-cek-di-sini/', '/id-id/blog/ingin-tahu-biaya-kuliah-di-inggris-cek-di-sini/', 301);
Route::redirect('/id/ingin-tahu-biaya-kuliah-di-korea-cari-tahu-di-sini/', '/id-id/blog/ingin-tahu-biaya-kuliah-di-korea-cari-tahu-di-sini/', 301);
Route::redirect('/id/ingin-tahu-fakta-menarik-seputar-jurusan-multimedia-baca-di-sini/', '/id-id/blog/ingin-tahu-fakta-menarik-seputar-jurusan-multimedia-baca-di-sini/', 301);
Route::redirect('/id/ingin-tahu-jurusan-multimedia-kerja-apa-baca-di-sini/', '/id-id/blog/ingin-tahu-jurusan-multimedia-kerja-apa-baca-di-sini/', 301);
Route::redirect('/id/ini-alasan-kenapa-kamu-harus-kuliah-jurusan-hubungan-internasional/', '/id-id/blog/ini-alasan-kenapa-kamu-harus-kuliah-jurusan-hubungan-internasional/', 301);
Route::redirect('/id/inilah-info-unik-mengenai-jurusan-kedokteran-fisik-dan-rehabilitasi/', '/id-id/blog/inilah-info-unik-mengenai-jurusan-kedokteran-fisik-dan-rehabilitasi/', 301);
Route::redirect('/id/inilah-rincian-biaya-kuliah-di-china/', '/id-id/blog/inilah-rincian-biaya-kuliah-di-china/', 301);
Route::redirect('/id/jurusan-ekonomi-macam-macam-penjurusan-ini-yang-perlu-kamu-tahu/', '/id-id/blog/jurusan-ekonomi-macam-macam-penjurusan-ini-yang-perlu-kamu-tahu/', 301);
Route::redirect('/id/jurusan-kuliah-di-amerika-ini-5-yang-terbaik/', '/id-id/blog/jurusan-kuliah-di-amerika-ini-5-yang-terbaik/', 301);
Route::redirect('/id/jurusan-kuliah-di-china-dengan-peluang-kerja-tinggi/', '/id-id/blog/jurusan-kuliah-di-china-dengan-peluang-kerja-tinggi/', 301);
Route::redirect('/id/jurusan-kuliah-di-inggris-ini-yang-paling-dicari/', '/id-id/blog/jurusan-kuliah-di-inggris-ini-yang-paling-dicari/', 301);
Route::redirect('/id/jurusan-kuliah-di-jepang-ini-5-yang-terpopuler/', '/id-id/blog/jurusan-kuliah-di-jepang-ini-5-yang-terpopuler/', 301);
Route::redirect('/id/jurusan-kuliah-di-kanada-ini-5-terpopuler/', '/id-id/blog/jurusan-kuliah-di-kanada-ini-5-terpopuler/', 301);
Route::redirect('/id/jurusan-kuliah-di-korea-ini-5-yang-terbaik/', '/id-id/blog/jurusan-kuliah-di-korea-ini-5-yang-terbaik/', 301);
Route::redirect('/id/jurusan-kuliah-di-singapura-yang-paling-diminati/', '/id-id/blog/jurusan-kuliah-di-singapura-yang-paling-diminati/', 301);
Route::redirect('/id/jurusan-tata-boga-universitas-biaya-dan-persyaratan/', '/id-id/blog/jurusan-tata-boga-universitas-biaya-dan-persyaratan/', 301);
Route::redirect('/id/kampus-fakultas-ilmu-komunikasi-terbaik-di-dunia/', '/id-id/blog/kampus-fakultas-ilmu-komunikasi-terbaik-di-dunia/', 301);
Route::redirect('/id/kampus-kuliah-jurusan-matematika-terbaik-di-asia/', '/id-id/blog/kampus-kuliah-jurusan-matematika-terbaik-di-asia/', 301);
Route::redirect('/id/ketahui-seluk-beluk-jurusan-public-relation-ini-ya/', '/id-id/blog/ketahui-seluk-beluk-jurusan-public-relation-ini-ya/', 301);
Route::redirect('/id/ketahui-syarat-kuliah-di-korea-berikut-ini/', '/id-id/blog/ketahui-syarat-kuliah-di-korea-berikut-ini/', 301);
Route::redirect('/id/kisaran-biaya-kuliah-di-jepang-terbaru/', '/id-id/blog/kisaran-biaya-kuliah-di-jepang-terbaru/', 301);
Route::redirect('/id/kuliah-di-amerika-bukan-cuman-sekedar-mimpi/', '/id-id/blog/kuliah-di-amerika-bukan-cuman-sekedar-mimpi/', 301);
Route::redirect('/id/kuliah-di-jepang-kamu-wajib-tahu-ini/', '/id-id/blog/kuliah-di-jepang-kamu-wajib-tahu-ini/', 301);
Route::redirect('/id/kuliah-di-kanada-bukan-hanya-sekedar-mimpi/', '/id-id/blog/kuliah-di-kanada-bukan-hanya-sekedar-mimpi/', 301);
Route::redirect('/id/kuliah-di-luar-negeri-udah-bukan-mimpi/', '/id-id/blog/kuliah-di-luar-negeri-udah-bukan-mimpi/', 301);
Route::redirect('/id/kuliah-di-singapura-ini-ulasan-terlengkapnya/', '/id-id/blog/kuliah-di-singapura-ini-ulasan-terlengkapnya/', 301);
Route::redirect('/id/kupas-tuntas-jurusan-bisnis-digital-yang-sedang-trendy/', '/id-id/blog/kupas-tuntas-jurusan-bisnis-digital-yang-sedang-trendy/', 301);
Route::redirect('/id/kupas-tuntas-pendaftaran-universitas-di-australia/', '/id-id/blog/kupas-tuntas-pendaftaran-universitas-di-australia/', 301);
Route::redirect('/id/kupas-tuntas-semua-fakta-tentang-jurusan-arsitektur/', '/id-id/blog/kupas-tuntas-semua-fakta-tentang-jurusan-arsitektur/', 301);
Route::redirect('/id/kupas-tuntas-semua-informasi-mengenai-jurusan-teknik-sipil/', '/id-id/blog/kupas-tuntas-semua-informasi-mengenai-jurusan-teknik-sipil/', 301);
Route::redirect('/id/lulusan-jurusan-biologi-kerja-apa-inilah-daftar-lengkapnya/', '/id-id/blog/lulusan-jurusan-biologi-kerja-apa-inilah-daftar-lengkapnya/', 301);
Route::redirect('/id/lulusan-jurusan-matematika-kerja-apa-baca-di-sini/', '/id-id/blog/lulusan-jurusan-matematika-kerja-apa-baca-di-sini/', 301);
Route::redirect('/id/macam-macam-konsentrasi-jurusan-hukum/', '/id-id/blog/macam-macam-konsentrasi-jurusan-hukum/', 301);
Route::redirect('/id/macam-macam-spesialisasi-kedokteran-yang-jarang-orang-tahu/', '/id-id/blog/macam-macam-spesialisasi-kedokteran-yang-jarang-orang-tahu/', 301);
Route::redirect('/id/maksimalkan-hari-dengan-menjadi-produktif/', '/id-id/blog/maksimalkan-hari-dengan-menjadi-produktif/', 301);
Route::redirect('/id/manajemen-bisnis-peran-dan-prospek/', '/id-id/blog/manajemen-bisnis-peran-dan-prospek/', 301);
Route::redirect('/id/manajemen-macam-macam-pilihan-peminatan/', '/id-id/blog/manajemen-macam-macam-pilihan-peminatan/', 301);
Route::redirect('/id/manajemen-pemasaran-jurusan-dan-prospek-kerja/', '/id-id/blog/manajemen-pemasaran-jurusan-dan-prospek-kerja/', 301);
Route::redirect('/id/mau-kuliah-di-jurusan-hukum-kenali-seluk-beluknya/', '/id-id/blog/mau-kuliah-di-jurusan-hukum-kenali-seluk-beluknya/', 301);
Route::redirect('/id/mau-masuk-jurusan-animasi-baca-dulu-faktanya/', '/id-id/blog/mau-masuk-jurusan-animasi-baca-dulu-faktanya/', 301);
Route::redirect('/id/mau-masuk-universitas-di-australia-ketahui-hal-ini/', '/id-id/blog/mau-masuk-universitas-di-australia-ketahui-hal-ini/', 301);
Route::redirect('/id/membedah-biaya-kuliah-di-luar-negeri/', '/id-id/blog/membedah-biaya-kuliah-di-luar-negeri/', 301);
Route::redirect('/id/membedah-profesi-dokter-kulit/', '/id-id/blog/membedah-profesi-dokter-kulit/', 301);
Route::redirect('/id/mengenal-jurusan-manajemen-sumber-daya-manusia/', '/id-id/blog/mengenal-jurusan-manajemen-sumber-daya-manusia/', 301);
Route::redirect('/id/mengenal-lebih-dalam-tentang-jurusan-akuntansi/', '/id-id/blog/mengenal-lebih-dalam-tentang-jurusan-akuntansi/', 301);
Route::redirect('/id/mengenal-lebih-dekat-profesi-dokter-anak/', '/id-id/blog/mengenal-lebih-dekat-profesi-dokter-anak/', 301);
Route::redirect('/id/mengenal-luar-dalam-mengenai-jurusan-ekonomi-pembangunan/', '/id-id/blog/mengenal-luar-dalam-mengenai-jurusan-ekonomi-pembangunan/', 301);
Route::redirect('/id/mimpi-kuliah-di-inggris-pahami-beberapa-hal-ini/', '/id-id/blog/mimpi-kuliah-di-inggris-pahami-beberapa-hal-ini/', 301);
Route::redirect('/id/nggak-usah-bingung-jurusan-animasi-kerja-apa-ini-daftar-lengkapnya/', '/id-id/blog/nggak-usah-bingung-jurusan-animasi-kerja-apa-ini-daftar-lengkapnya/', 301);
Route::redirect('/id/penasaran-manfaat-kuliah-jurusan-pertanian-simak-lengkapnya-di-sini/', '/id-id/blog/penasaran-manfaat-kuliah-jurusan-pertanian-simak-lengkapnya-di-sini/', 301);
Route::redirect('/id/pernah-dengar-tentang-kedokteran-nuklir-cari-tahu-lengkapnya-di-sini/', '/id-id/blog/pernah-dengar-tentang-kedokteran-nuklir-cari-tahu-lengkapnya-di-sini/', 301);
Route::redirect('/id/profil-lengkap-mengenai-teknik-lingkungan-khusus-buat-kamu/', '/id-id/blog/profil-lengkap-mengenai-teknik-lingkungan-khusus-buat-kamu/', 301);
Route::redirect('/id/prospek-kerja-ilmu-komunikasi-di-masa-depan/', '/id-id/blog/prospek-kerja-ilmu-komunikasi-di-masa-depan/', 301);
Route::redirect('/id/prospek-kerja-jurusan-hukum-di-masa-depan/', '/id-id/blog/prospek-kerja-jurusan-hukum-di-masa-depan/', 301);
Route::redirect('/id/ranking-universitas-di-australia-ini-5-terbaik/', '/id-id/blog/ranking-universitas-di-australia-ini-5-terbaik/', 301);
Route::redirect('/id/sastra-inggris-penjelasan-dan-prospek-kerja/', '/id-id/blog/sastra-inggris-penjelasan-dan-prospek-kerja/', 301);
Route::redirect('/id/selain-biaya-universitas-di-australia-ini-biaya-yang-harus-kamu-tau/', '/id-id/blog/selain-biaya-universitas-di-australia-ini-biaya-yang-harus-kamu-tau/', 301);
Route::redirect('/id/semua-hal-yang-wajib-kamu-tahu-untuk-kuliah-jurusan-teknik-elektro/', '/id-id/blog/semua-hal-yang-wajib-kamu-tahu-untuk-kuliah-jurusan-teknik-elektro/', 301);
Route::redirect('/id/serba-serbi-jurusan-desain-interior-untuk-kuliah-di-australia/', '/id-id/blog/serba-serbi-jurusan-desain-interior-untuk-kuliah-di-australia/', 301);
Route::redirect('/id/serba-serbi-jurusan-farmasi-yang-perlu-kamu-tahu/', '/id-id/blog/serba-serbi-jurusan-farmasi-yang-perlu-kamu-tahu/', 301);
Route::redirect('/id/serba-serbi-jurusan-hubungan-internasional-yang-wajib-kamu-ketahui/', '/id-id/blog/serba-serbi-jurusan-hubungan-internasional-yang-wajib-kamu-ketahui/', 301);
Route::redirect('/id/serba-serbi-jurusan-ilmu-komunikasi/', '/id-id/blog/serba-serbi-jurusan-ilmu-komunikasi/', 301);
Route::redirect('/id/serba-serbi-jurusan-matematika/', '/id-id/blog/serba-serbi-jurusan-matematika/', 301);
Route::redirect('/id/serba-serbi-kuliah-di-korea-yang-kamu-harus-tahu/', '/id-id/blog/serba-serbi-kuliah-di-korea-yang-kamu-harus-tahu/', 301);
Route::redirect('/id/serba-serbi-mengenai-jurusan-teknik/', '/id-id/blog/serba-serbi-mengenai-jurusan-teknik/', 301);
Route::redirect('/id/serba-serbi-mengenai-sastra-jepang/', '/id-id/blog/serba-serbi-mengenai-sastra-jepang/', 301);
Route::redirect('/id/simak-semua-info-lengkap-tentang-jurusan-teknik-informatika/', '/id-id/blog/simak-semua-info-lengkap-tentang-jurusan-teknik-informatika/', 301);
Route::redirect('/id/simak-syarat-kuliah-di-belanda-berikut-ini!/', '/id-id/blog/simak-syarat-kuliah-di-belanda-berikut-ini', 301);
Route::redirect('/id/simak-syarat-masuk-jurusan-hubungan-internasional-di-sini/', '/id-id/blog/simak-syarat-masuk-jurusan-hubungan-internasional-di-sini/', 301);
Route::redirect('/id/syarat-kuliah-di-china-yang-wajib-kamu-persiapkan/', '/id-id/blog/syarat-kuliah-di-china-yang-wajib-kamu-persiapkan/', 301);
Route::redirect('/id/syarat-kuliah-di-inggris-yang-harus-kamu-tahu/', '/id-id/blog/syarat-kuliah-di-inggris-yang-harus-kamu-tahu/', 301);
Route::redirect('/id/syarat-kuliah-di-jepang-yang-kamu-harus-tahu/', '/id-id/blog/syarat-kuliah-di-jepang-yang-kamu-harus-tahu/', 301);
Route::redirect('/id/syarat-kuliah-di-singapura-berikut-daftar-lengkapnya/', '/id-id/blog/syarat-kuliah-di-singapura-berikut-daftar-lengkapnya/', 301);
Route::redirect('/id/syarat-masuk-jurusan-desain-interior-yang-wajib-kamu-tahu/', '/id-id/blog/syarat-masuk-jurusan-desain-interior-yang-wajib-kamu-tahu/', 301);
Route::redirect('/id/syarat-masuk-jurusan-tata-boga-atau-culinary-arts/', '/id-id/blog/syarat-masuk-jurusan-tata-boga-atau-culinary-arts/', 301);
Route::redirect('/id/teknik-industri-jurusan-universitas-dan-prospek-kerja-di-masa-depan/', '/id-id/blog/teknik-industri-jurusan-universitas-dan-prospek-kerja-di-masa-depan/', 301);
Route::redirect('/id/teknik-sipil-pengertian-dan-prospek-kerja/', '/id-id/blog/teknik-sipil-pengertian-dan-prospek-kerja/', 301);
Route::redirect('/id/tertarik-masuk-jurusan-ekonomi-bisnis-baca-artikel-ini/', '/id-id/blog/tertarik-masuk-jurusan-ekonomi-bisnis-baca-artikel-ini/', 301);
Route::redirect('/id/tertarik-masuk-ke-jurusan-pertanian-simak-info-lengkapnya-di-sini/', '/id-id/blog/tertarik-masuk-ke-jurusan-pertanian-simak-info-lengkapnya-di-sini/', 301);
Route::redirect('/id/tertarik-masuk-ke-public-relation-baca-informasi-lengkapnya-di-sini/', '/id-id/blog/tertarik-masuk-ke-public-relation-baca-informasi-lengkapnya-di-sini/', 301);
Route::redirect('/id/tertarik-masuk-sastra-korea-cari-tahu-di-sini/', '/id-id/blog/tertarik-masuk-sastra-korea-cari-tahu-di-sini/', 301);
Route::redirect('/id/tips-tetap-produktif-di-masa-pandemi-untuk-pelajar/', '/id-id/blog/tips-tetap-produktif-di-masa-pandemi-untuk-pelajar/', 301);
Route::redirect('/id/universitas-dengan-jurusan-kesehatan-masyarakat-terbaik-di-australia/', '/id-id/blog/universitas-dengan-jurusan-kesehatan-masyarakat-terbaik-di-australia/', 301);
Route::redirect('/id/universitas-jurusan-animasi-ini-daftar-5-terbaik-di-asia/', '/id-id/blog/universitas-jurusan-animasi-ini-daftar-5-terbaik-di-asia/', 301);
Route::redirect('/id/universitas-jurusan-perpajakan-di-dunia-ini-5-terbaik/', '/id-id/blog/universitas-jurusan-perpajakan-di-dunia-ini-5-terbaik/', 301);
Route::redirect('/id/yuk-ketahui-rincian-biaya-kuliah-di-belanda/', '/id-id/blog/yuk-ketahui-rincian-biaya-kuliah-di-belanda/', 301);
Route::redirect('/kyoto-university-ranking-application-complete-facts-and-figures/', '/id-en/blog/kyoto-university-ranking-application-complete-facts-and-figures/', 301);
Route::redirect('/kyoto-university-scholarship-you-need-to-check-on/', '/id-en/blog/kyoto-university-scholarship-you-need-to-check-on/', 301);
Route::redirect('/learn-the-complete-insight-about-human-resource-here/', '/id-en/blog/learn-the-complete-insight-about-human-resource-here/', 301);
Route::redirect('/learn-to-choose-a-level-subjects-here/', '/id-en/blog/learn-to-choose-a-level-subjects-here/', 301);
Route::redirect('/lets-deep-dive-into-yale-university-complete-profile/', '/id-en/blog/lets-deep-dive-into-yale-university-complete-profile/', 301);
Route::redirect('/lets-discover-the-full-insight-about-sat-to-optimize-your-preparation/', '/id-en/blog/lets-discover-the-full-insight-about-sat-to-optimize-your-preparation/', 301);
Route::redirect('/lets-get-to-know-about-the-full-kyoto-university-info/', '/id-en/blog/lets-get-to-know-about-the-full-kyoto-university-info/', 301);
Route::redirect('/lets-learn-the-scope-of-human-resource-management/', '/id-en/blog/lets-learn-the-scope-of-human-resource-management/', 301);
Route::redirect('/letter-of-recommendation-for-scholarship-what-you-should-know/', '/id-en/blog/letter-of-recommendation-for-scholarship-what-you-should-know/', 301);
Route::redirect('/letter-of-recommendation-for-university-your-go-to-guide/', '/id-en/blog/letter-of-recommendation-for-university-your-go-to-guide/', 301);
Route::redirect('/list-of-the-best-universities-for-psychology-major/', '/id-en/blog/list-of-the-best-universities-for-psychology-major/', 301);
Route::redirect('/looking-for-mentoring-programs-for-youth-here-it-is/', '/id-en/blog/looking-for-mentoring-programs-for-youth-here-it-is/', 301);
Route::redirect('/mentoring-programs-these-are-all-reasons-why-you-need-it/', '/id-en/blog/mentoring-programs-these-are-all-reasons-why-you-need-it/', 301);
Route::redirect('/ntu-the-absolutely-complete-facts-you-should-know/', '/id-en/blog/ntu-the-absolutely-complete-facts-you-should-know/', 301);
Route::redirect('/nus-complete-application-and-scholarship-profile/', '/id-en/blog/nus-complete-application-and-scholarship-profile/', 301);
Route::redirect('/nus-master-degree:-all-insight-you-need-for-postgraduate-study/', '/id-en/blog/nus-master-degree-all-insight-you-need-for-postgraduate-study', 301);
Route::redirect('/nyu-acceptance-rate-facts-you-need-to-know/', '/id-en/blog/nyu-acceptance-rate-facts-you-need-to-know/', 301);
Route::redirect('/online-tutor-getting-yourself-ahead-in-high-school/', '/id-en/blog/online-tutor-getting-yourself-ahead-in-high-school/', 301);
Route::redirect('/peking-university-master-program:-your-', '/id-en/blog/peking-university-master-program-your-1-study-destination-in-china', 301);
Route::redirect('/peking-university:-your-recommended-study-destination-in-asia/', '/id-en/blog/peking-university-your-recommended-study-destination-in-asia', 301);
Route::redirect('/personal-branding-strategy-perfecting-uni-application/', '/id-en/blog/personal-branding-strategy-perfecting-uni-application/', 301);
Route::redirect('/personal-branding-tips-to-gain-yourself-an-edge/', '/id-en/blog/personal-branding-tips-to-gain-yourself-an-edge/', 301);
Route::redirect('/personal-branding-why-is-it-important-for-students/', '/id-en/blog/personal-branding-why-is-it-important-for-students/', 301);
Route::redirect('/princeton-university-complete-and-thorough-profile-breakdown/', '/id-en/blog/princeton-university-complete-and-thorough-profile-breakdown/', 301);
Route::redirect('/princeton-university-ranking-get-to-know-this-picturesque-university/', '/id-en/blog/princeton-university-ranking-get-to-know-this-picturesque-university/', 301);
Route::redirect('/private-tutor-a-gateway-to-enter-top-universities/', '/id-en/blog/private-tutor-a-gateway-to-enter-top-universities/', 301);
Route::redirect('/private-universities-in-the-usa-know-the-features/', '/id-en/blog/private-universities-in-the-usa-know-the-features/', 301);
Route::redirect('/psychology-the-famous-major-for-students/', '/id-en/blog/psychology-the-famous-major-for-students/', 301);
Route::redirect('/read-the-full-scoop-on-seoul-national-university-here/', '/id-en/blog/read-the-full-scoop-on-seoul-national-university-here/', 301);
Route::redirect('/reasons-why-you-should-study-a-level-math/', '/id-en/blog/reasons-why-you-should-study-a-level-math/', 301);
Route::redirect('/sat-score-your-golden-ticket-to-enter-us-universities/', '/id-en/blog/sat-score-your-golden-ticket-to-enter-us-universities/', 301);
Route::redirect('/scholarship-to-study-abroad-that-you-can-try-applying-to/', '/id-en/blog/scholarship-to-study-abroad-that-you-can-try-applying-to/', 301);
Route::redirect('/programs/admissions-mentoring/', '/id-id/programs/admissions-mentoring/', 301);
Route::redirect('/programs/passion-project-mentoring/', '/id-id/programs/passion-project-mentoring/', 301);
Route::redirect('/should-you-choose-a-level-accounting/', '/id-en/blog/should-you-choose-a-level-accounting/', 301);
Route::redirect('/simple-essay-writing-structure-for-everything/', '/id-en/blog/simple-essay-writing-structure-for-everything/', 301);
Route::redirect('/special-tips-on-mastering-your-sat-test-from-all-in/', '/id-en/blog/special-tips-on-mastering-your-sat-test-from-all-in/', 301);
Route::redirect('/stanford-business-school-what-does-it-offer/', '/id-en/blog/stanford-business-school-what-does-it-offer/', 301);
Route::redirect('/stanford-law-school-your-dream-destination-to-be-master-of-law/', '/id-en/blog/stanford-law-school-your-dream-destination-to-be-master-of-law/', 301);
Route::redirect('/stanford-medical-school-heres-your-guide/', '/id-en/blog/stanford-medical-school-heres-your-guide/', 301);
Route::redirect('/stanford-postgraduate-profile/', '/id-en/blog/stanford-postgraduate-profile/', 301);
Route::redirect('/study-abroad-your-ultimate-guide-to-be-an-international-students/', '/id-en/blog/study-abroad-your-ultimate-guide-to-be-an-international-students/', 301);
Route::redirect('/study-in-us-heres-what-you-should-know/', '/id-en/blog/study-in-us-heres-what-you-should-know/', 301);
Route::redirect('/the-best-universities-for-computer-science-major/', '/id-en/blog/the-best-universities-for-computer-science-major/', 301);
Route::redirect('/the-complete-essay-writing-examples/', '/id-en/blog/the-complete-essay-writing-examples/', 301);
Route::redirect('/the-complete-list-of-sat-subject-test-to-complete-your-preparation/', '/id-en/blog/the-complete-list-of-sat-subject-test-to-complete-your-preparation/', 301);
Route::redirect('/the-complete-list-of-university-of-manchester-ranking-of-subjects/', '/id-en/blog/the-complete-list-of-university-of-manchester-ranking-of-subjects/', 301);
Route::redirect('/the-ins-and-outs-of-internship/', '/id-en/blog/the-ins-and-outs-of-internship/', 301);
Route::redirect('/the-top-4-popular-ucla-majors/', '/id-en/blog/the-top-4-popular-ucla-majors/', 301);
Route::redirect('/the-top-rank-of-the-universities-in-the-usa/', '/id-en/blog/the-top-rank-of-the-universities-in-the-usa/', 301);
Route::redirect('/the-ultimate-guide-to-columbia-university-master-programs/', '/id-en/blog/the-ultimate-guide-to-columbia-university-master-programs/', 301);
Route::redirect('/the-ultimate-ucas-application-guide-2023-for-students/', '/id-en/blog/the-ultimate-ucas-application-guide-2023-for-students/', 301);
Route::redirect('/the-ultimately-effective-essay-writing-tips/', '/id-en/blog/the-ultimately-effective-essay-writing-tips/', 301);
Route::redirect('/the-university-of-melbourne-all-you-need-to-know-in-one-swipe/', '/id-en/blog/the-university-of-melbourne-all-you-need-to-know-in-one-swipe/', 301);
Route::redirect('/the-university-of-melbourne-scholarships-for-international-students/', '/id-en/blog/the-university-of-melbourne-scholarships-for-international-students/', 301);
Route::redirect('/the-university-of-pennsylvania-a-thorough-profile-breakdown/', '/id-en/blog/the-university-of-pennsylvania-a-thorough-profile-breakdown/', 301);
Route::redirect('/the-university-of-pennsylvania-master-program-debunked/', '/id-en/blog/the-university-of-pennsylvania-master-program-debunked/', 301);
Route::redirect('/the-university-of-pennsylvania-ranking-subject-wise-and-overall/', '/id-en/blog/the-university-of-pennsylvania-ranking-subject-wise-and-overall/', 301);
Route::redirect('/this-is-how-you-ace-the-ucas-personal-statement/', '/id-en/blog/this-is-how-you-ace-the-ucas-personal-statement/', 301);
Route::redirect('/this-is-how-you-prepare-thoroughly-for-your-sat-exam/', '/id-en/blog/this-is-how-you-prepare-thoroughly-for-your-sat-exam/', 301);
Route::redirect('/this-is-why-you-need-a-tutor-for-your-university-application/', '/id-en/blog/this-is-why-you-need-a-tutor-for-your-university-application/', 301);
Route::redirect('/this-is-why-you-should-study-a-level-economics/', '/id-en/blog/this-is-why-you-should-study-a-level-economics/', 301);
Route::redirect('/time-management-importance-for-students/', '/id-en/blog/time-management-importance-for-students/', 301);
Route::redirect('/time-management-take-charge-of-your-day/', '/id-en/blog/time-management-take-charge-of-your-day/', 301);
Route::redirect('/time-management-tools-every-student-should-have/', '/id-en/blog/time-management-tools-every-student-should-have/', 301);
Route::redirect('/top-5-university-of-melbourne-courses-you-should-consider-taking/', '/id-en/blog/top-5-university-of-melbourne-courses-you-should-consider-taking/', 301);
Route::redirect('/top-seoul-national-university-majors-for-undergraduate-degree/', '/id-en/blog/top-seoul-national-university-majors-for-undergraduate-degree/', 301);
Route::redirect('/top-university-of-oxford-majors-in-2022/', '/id-en/blog/top-university-of-oxford-majors-in-2022/', 301);
Route::redirect('/top-university-of-sydney-scholarships-for-international-students/', '/id-en/blog/top-university-of-sydney-scholarships-for-international-students/', 301);
Route::redirect('/tsinghua-university-ranking-study-in-chinas-top-university/', '/id-en/blog/tsinghua-university-ranking-study-in-chinas-top-university/', 301);
Route::redirect('/tsinghua-university-scholarship-know-the-ins-and-outs/', '/id-en/blog/tsinghua-university-scholarship-know-the-ins-and-outs/', 301);
Route::redirect('/types-of-volunteering-work-for-high-school-students/', '/id-en/blog/types-of-volunteering-work-for-high-school-students/', 301);
Route::redirect('/uc-berkeley-application-turn-your-uc-dream-into-a-reality/', '/id-en/blog/uc-berkeley-application-turn-your-uc-dream-into-a-reality/', 301);
Route::redirect('/uc-berkeley-californias-prime-top-university-profile/', '/id-en/blog/uc-berkeley-californias-prime-top-university-profile/', 301);
Route::redirect('/uc-berkeley-ranking-learn-more-about-californias-top-university/', '/id-en/blog/uc-berkeley-ranking-learn-more-about-californias-top-university/', 301);
Route::redirect('/uc-davis-a-popular-school-that-was-once-a-farm/', '/id-en/blog/uc-davis-a-popular-school-that-was-once-a-farm/', 301);
Route::redirect('/uc-irvine-here-is-everything-you-need-to-know-about-uc-irvine/', '/id-en/blog/uc-irvine-here-is-everything-you-need-to-know-about-uc-irvine/', 301);
Route::redirect('/ucla-a-dive-into-californias-academic-powerhouse/', '/id-en/blog/ucla-a-dive-into-californias-academic-powerhouse/', 301);
Route::redirect('/ucla-acceptance-rate-everything-you-should-know/', '/id-en/blog/ucla-acceptance-rate-everything-you-should-know/', 301);
Route::redirect('/ucla-in-depth-views/', '/id-en/blog/ucla-in-depth-views/', 301);
Route::redirect('/uncover-the-full-scoop-and-insight-of-tsinghua-university/', '/id-en/blog/uncover-the-full-scoop-and-insight-of-tsinghua-university/', 301);
Route::redirect('/understanding-full-stack-developer-career/', '/id-en/blog/understanding-full-stack-developer-career/', 301);
Route::redirect('/university-admissions-consultant-reliable-partner-for-your-application/', '/id-en/blog/university-admissions-consultant-reliable-partner-for-your-application/', 301);
Route::redirect('/university-of-cambridge-master-program-for-your-amazing-study-journey/', '/id-en/blog/university-of-cambridge-master-program-for-your-amazing-study-journey/', 301);
Route::redirect('/university-of-cambridge-ranking-all-world-class-subject/', '/id-en/blog/university-of-cambridge-ranking-all-world-class-subject/', 301);
Route::redirect('/university-of-hong-kong-acceptance-rate-get-the-inside-scoop/', '/id-en/blog/university-of-hong-kong-acceptance-rate-get-the-inside-scoop/', 301);
Route::redirect('/university-of-hong-kong-all-essential-facts-and-figures/', '/id-en/blog/university-of-hong-kong-all-essential-facts-and-figures/', 301);
Route::redirect('/university-of-manchester-acceptance-rate-heres-what-you-should-know/', '/id-en/blog/university-of-manchester-acceptance-rate-heres-what-you-should-know/', 301);
Route::redirect('/university-of-manchester-master-program:-what-to-look-for!/', '/id-en/blog/university-of-manchester-master-program-what-to-look-for', 301);
Route::redirect('/university-of-sydney-full-profile-insight-and-overview/', '/id-en/blog/university-of-sydney-full-profile-insight-and-overview/', 301);
Route::redirect('/university-of-sydney-ranking-this-is-the-best-subjects/', '/id-en/blog/university-of-sydney-ranking-this-is-the-best-subjects/', 301);
Route::redirect('/university-of-toronto-acceptance-rate-turn-your-dream-into-a-reality/', '/id-en/blog/university-of-toronto-acceptance-rate-turn-your-dream-into-a-reality/', 301);
Route::redirect('/university-of-toronto-ranking-the-top-list-of-subject/', '/id-en/blog/university-of-toronto-ranking-the-top-list-of-subject/', 301);
Route::redirect('/university-of-toronto-scholarships-study-at-canadas-top-university/', '/id-en/blog/university-of-toronto-scholarships-study-at-canadas-top-university/', 301);
Route::redirect('/usa-as-study-destination/', '/id-en/blog/usa-as-study-destination/', 301);
Route::redirect('/volunteering-experience-why-it-brings-many-benefits/', '/id-en/blog/volunteering-experience-why-it-brings-many-benefits/', 301);
Route::redirect('/want-to-succeed-in-your-ucas-application-find-the-secret-here/', '/id-en/blog/want-to-succeed-in-your-ucas-application-find-the-secret-here/', 301);
Route::redirect('/what-is-a-motivation-letter-for-internships/', '/id-en/blog/what-is-a-motivation-letter-for-internships/', 301);
Route::redirect('/why-studying-in-australia-these-are-the-5-reasons/', '/id-en/blog/why-studying-in-australia-these-are-the-5-reasons/', 301);
Route::redirect('/yale-university-master-program-discover-what-this-institution-offers/', '/id-en/blog/yale-university-master-program-discover-what-this-institution-offers/', 301);
Route::redirect('/yale-university-ranking-dive-into-this-ivy-league-institution/', '/id-en/blog/yale-university-ranking-dive-into-this-ivy-league-institution/', 301);
Route::redirect('/your-complete-guide-on-international-lawyer/', '/id-en/blog/your-complete-guide-on-international-lawyer/', 301);
Route::redirect('/daftar-lengkap-universitas-jurusan-multimedia-terbaik-di-asia/', '/id-id/blog/daftar-lengkap-universitas-jurusan-multimedia-terbaik-di-asia/', 301);
Route::redirect('/dokter-penjelasan-dan-spesialisasi/', '/id-id/blog/dokter-penjelasan-dan-spesialisasi/', 301);
Route::redirect('/fakta-lengkap-seputar-jurusan-gizi-yang-wajib-kamu-tahu/', '/id-id/blog/fakta-lengkap-seputar-jurusan-gizi-yang-wajib-kamu-tahu/', 301);
Route::redirect('/manajemen-operasional-penjelasan-dan-prospek-kerja/', '/id-id/blog/manajemen-operasional-penjelasan-dan-prospek-kerja/', 301);
Route::redirect('/mimpi-kuliah-di-china-cari-tahu-semuanya-di-sini/', '/id-id/blog/mimpi-kuliah-di-china-cari-tahu-semuanya-di-sini/', 301);
Route::redirect('/syarat-kuliah-di-luar-negeri-yang-perlu-kamu-tahu/', '/id-id/blog/syarat-kuliah-di-luar-negeri-yang-perlu-kamu-tahu/', 301);
Route::redirect('/tips-hidup-produktif-untuk-pelajar/', '/id-id/blog/tips-hidup-produktif-untuk-pelajar/', 301);

Route::redirect('/experiental-learning/', '/id-id', 301);
Route::redirect('/experiental-learning/?utm_source=ALL-in+Eduspace+Newsletter&utm_campaign=c525db989d-EMAIL_CAMPAIGN_2019_05_15_05_52&utm_medium=email&utm_term=0_ae17e6b79a-c525db989d-218818141', '/id-id', 301);
Route::redirect('/id/academic-tutoring-2/', '/id-id', 301);
Route::redirect('/id/jurusan-pertambangan-hal-hal-penting-yang-wajib-kamu-tahu/', '/id-id', 301);
Route::redirect('/id/nggak-cuman-arsitek-ini-daftar-jurusan-arsitektur-kerja-apa-di-masa-depa/', '/id-id', 301);
Route::redirect('/id/programs/', '/id-id', 301);
Route::redirect('/id/programs/academic-test-preparation/', '/id-id', 301);
Route::redirect('/id/programs/academic-test-preparation/sat-program/', '/id-id', 301);
Route::redirect('/id/programs/admissions-mentoring-page/', '/id-id', 301);
Route::redirect('/id/programs/passion-project-mentoring-id/', '/id-id', 301);
Route::redirect('/index.php/2016/09/04/applying-uk-universities/', '/id-id', 301);
Route::redirect('/index.php/2016/12/04/junior-senior-university-application-checklist-u-s-uk-singapore-australia/', '/id-id', 301);
Route::redirect('/index.php/2016/12/30/success-students/', '/id-id', 301);
Route::redirect('/index.php/careers/', '/id-id', 301);
Route::redirect('/index.php/contact-us/', '/id-id', 301);
Route::redirect('/index.php/programs/enrichment-programs/', '/id-id', 301);
Route::redirect('/program/', '/id-id', 301);
Route::redirect('/program/academic-test-preparation/', '/id-id', 301);
Route::redirect('/program/academic-test-preparation/ib-extended-essay-coaching/', '/id-id', 301);
Route::redirect('/program/admissions-mentoring/', '/id-id', 301);
Route::redirect('/program/passionxplorer/', '/id-id', 301);
Route::redirect('/program/writing-skills/', '/id-id', 301);
Route::redirect('/programs/admissions-advisory/', '/id-id', 301);
Route::redirect('/programs/enrichment-programs/', '/id-id', 301);
Route::redirect('/programs/passion-mentoring/', '/id-id', 301);
Route::redirect('/scholarships-government-sponsorship-ii/', '/id-id', 301);
Route::redirect('/public/id-en/programs/academic-test-preparation', '/id-id', 301);
Route::redirect('/scholarships-government-sponsorship/', '/id-id', 301);
Route::redirect('/sat-practice-test-maximizing-your-college-preparation/', '/id-id', 301);
Route::redirect('/sat-prep/', '/id-id', 301);
Route::redirect('/sign-me/', '/id-id', 301);
Route::redirect('/state-finance-lets-get-to-know-what-this-field-is-about-?/', '/id-id', 301);
Route::redirect('/study-abroad-scholarship-application-prep/', '/id-id', 301);
Route::redirect('/university-of-manchester:-a-full-essential-profile-overview!/', '/id-id', 301);
