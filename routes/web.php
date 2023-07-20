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

Route::get('robots.txt', function () {
    return response()->file(public_path('robots.txt'));
});

Route::get('/', [HomePageController::class, 'home']);

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// BLOG ID
// Route::get('id/{slug}/{att?}', function ($slug, $att = null) {
//     return Redirect::to('id-id/blog/' . $slug, 301);
// });

// Redirect Old Website
Route::redirect('/id/daftar-universitas-jurusan-tata-boga-atau-culinary-arts-terbaik-di-dunia-﻿/', '/id-id/blog/daftar-universitas-jurusan-tata-boga-atau-culinary-arts-terbaik-di-dunia', 301);
Route::redirect('/id/universitas-jurusan-teknik-industri-berikut-adalah-5-yang-terbaik-di-asia/', '/id-id/blog/universitas-jurusan-teknik-industri-berikut-adalah-5-yang-terbaik-di-asia', 301);
Route::redirect('/id/jurusan-kuliah-di-korea-ini-5-yang-terbaik/', '/id-id/blog/jurusan-kuliah-di-korea-ini-5-yang-terbaik', 301);
Route::redirect('/admissions-mentoring/', '/id-en/programs/admissions-mentoring', 301);
Route::redirect('/id/ingin-tahu-biaya-kuliah-di-korea-cari-tahu-di-sini/ucqwtpat3dwfwgpmg6yavxie-srotahh1rkxygublo29pphvcgwaq_iqdvtj57boz_9vgo-kqsoy4yx9h8pdewsm0-egzb0hck4u/', '/id-id/blog/ingin-tahu-biaya-kuliah-di-korea-cari-tahu-di-sini', 301);
Route::redirect('/id/programs/admissions-mentoring/', '/id-id/programs/admissions-mentoring', 301);
Route::redirect('/whats-the-difference-between-a-university-college-and-community-college/', '/id-en/blog/whats-the-difference-between-a-university-college-and-community-college', 301);
Route::redirect('/this-is-why-you-need-a-tutor-for-your-university-application/feed/', '/id-en/blog/this-is-why-you-need-a-tutor-for-your-university-application', 301);
Route::redirect('/id/jurusan-kuliah-di-jepang-ini-5-yang-terpopuler/', '/id-id/blog/jurusan-kuliah-di-jepang-ini-5-yang-terpopuler', 301);
Route::redirect('/academic-test-preparation/', '/id-en/programs/academic-test-preparation', 301);
Route::redirect('/id/kemitraan-dan-karir/', '/id-id/about/partnership-careers', 301);
Route::redirect('/id/teknik-sipil-pengertian-dan-prospek-kerja/', '/id-id/blog/teknik-sipil-pengertian-dan-prospek-kerja', 301);
Route::redirect('/id/', '/id-id', 301);
Route::redirect('/what-is-ucas-guide-to-study-in-the-uk-', '/id-en/blog/what-is-ucas-guide-to-study-in-the-uk', 301);
Route::redirect('/id/academic-tutoring', '/id-id/programs/academic-test-preparation/academic-tutoring', 301);
Route::redirect('/program/admissions-mentoring/', '/id-en/programs/admissions-mentoring', 301);
Route::redirect('/id/mau-kuliah-di-jurusan-hukum-kenali-seluk-beluknya/llabw7rog7z0osqlhix_ion8dwcviw_mdprd1eimevk7mwce8pyoylzbh9xkvjnsqx9z5uds9rvyzkpsuwhe65e7lzzc0cyty6gn/', '/id-id/blog/mau-kuliah-di-jurusan-hukum-kenali-seluk-beluknya', 301);
Route::redirect('/tips-diversity-question-supplemental-essay/', '/id-en/blog/tips-diversity-question-supplemental-essay', 301);
Route::redirect('/id/nggak-cuman-arsitek-ini-daftar-jurusan-arsitektur-kerja-apa-di-masa-depa/', '/id-id/blog/nggak-cuman-arsitek-ini-daftar-jurusan-arsitektur-kerja-apa-di-masa-depan', 301);
Route::redirect('/id/syarat-kuliah-di-china-yang-wajib-kamu-persiapkan/gflud-qj_hlhxxqfll1pxwth3oqii-vxlbi4woxq42oq5ouqicxjvszubog1udswp_qzdmvqcil9fbsdlbamjfjwj9rei_uj61ap/', '/id-id/blog/syarat-kuliah-di-china-yang-wajib-kamu-persiapkan', 301);
Route::redirect('/id/kisaran-biaya-kuliah-di-jepang-terbaru/', '/id-id/blog/kisaran-biaya-kuliah-di-jepang-terbaru', 301);
Route::redirect('/volunteering-experience-why-it-brings-many-benefits/', '/id-en/blog/volunteering-experience-why-it-brings-many-benefits', 301);
Route::redirect('/id/daftar-universitas-jurusan-hukum-terbaik-di-dunia/8gxfq9ftk75rp6xh22fki-gblizxgbdllkuolve_fzzaefni6xvkohgfc1eck2vfytt0ozog3cilas5gukbmryowkgs_r1vezsek/', '/id-en/blog/daftar-universitas-jurusan-hukum-terbaik-di-dunia', 301);
Route::redirect('/full-overview-of-harvard-acceptance-rate/', '/id-en/blog/full-overview-of-harvard-acceptance-rate', 301);
Route::redirect('/id-en/about/contact-us', '/id-en/contact-us', 301);
Route::redirect('/id/tentang-kami/kontribusi-kami/', '/id-id/about/our-contribution', 301);
Route::redirect('/5-summer-activities-for-junior-high-school-students/', '/id-id/blog/5-summer-activities-for-junior-high-school-students', 301);
Route::redirect('/harvard-medical-school-history-and-facts/', '/id-id/blog/harvard-medical-school-history-and-facts', 301);
Route::redirect('/id/simak-syarat-masuk-jurusan-hubungan-internasional-di-sini/', '/id-id/blog/serba-serbi-jurusan-hubungan-internasional-yang-wajib-kamu-ketahui', 301);
Route::redirect('/a-glance-at-the-university-of-melbourne-acceptance-rate/', '/id-id/blog/a-glance-at-the-university-of-melbourne-acceptance-rate', 301);
Route::redirect('/id/beasiswa-kuliah-di-korea-global-korea-scholarship/chhnecy1rpofjeadmljjnljzdo8hqpkcyqgl5vm8_kei_6onmhpfgiyuaxl3ih_7qka7eimuprrg_edotfwpqvucfkvkk-cksydd/', '/id-id/blog/beasiswa-kuliah-di-korea-global-korea-scholarship', 301);
Route::redirect('/id/tentang-kami/', '/id-id/about', 301);
Route::redirect('/corporate-lawyer-facts-you-need-to-know/', '/id-id/blog/corporate-lawyer-facts-you-need-to-know', 301);
Route::redirect('/here-is-how-university-application-consultant-helps-students/', '/id-id/blog/here-is-how-university-application-consultant-helps-students', 301);
Route::redirect('/87-of-indonesian-youths-study-the-wrong-major-what-does-this-mean/', '/id-id/blog/87-of-indonesian-youths-study-the-wrong-major-what-does-this-mean', 301);
Route::redirect('/id/serba-serbi-jurusan-farmasi-yang-perlu-kamu-tahu/', '/id-id/blog/serba-serbi-jurusan-farmasi-yang-perlu-kamu-tahu', 301);
Route::redirect('/id/biaya-kuliah-di-singapura-yang-harus-kamu-perhatikan/', '/id-id/blog/biaya-kuliah-di-singapura-yang-harus-kamu-perhatikan', 301);
Route::redirect('/id/belum-tahu-cara-kuliah-di-amerika-cek-di-sini/107157486_students8/feed/', '/id-id/blog/belum-tahu-cara-kuliah-di-amerika-cek-di-sini', 301);
Route::redirect('/3-things-about-the-ivy-league-fact-or-myth/', '/id-id/blog/3-things-about-the-ivy-league-fact-or-myth', 301);
Route::redirect('/id/ini-alasan-kenapa-kamu-harus-kuliah-jurusan-hubungan-internasional/', '/id-id/blog/ini-alasan-kenapa-kamu-harus-kuliah-jurusan-hubungan-internasional', 301);
Route::redirect('/what-is-ucas-guide-to-study-in-the-uk/', '/id-id/blog/what-is-ucas-guide-to-study-in-the-uk', 301);
Route::redirect('/id/syarat-kuliah-di-inggris-yang-harus-kamu-tahu/', '/id-id/blog/syarat-kuliah-di-inggris-yang-harus-kamu-tahu', 301);
Route::redirect('/id/daftar-universitas-dengan-jurusan-farmasi-terbaik-di-asia/', '/id-id/blog/daftar-universitas-dengan-jurusan-farmasi-terbaik-di-asia', 301);
Route::redirect('/scholarships-in-new-zealand-you-need-to-apply/', '/id-id/blog/scholarships-in-new-zealand-you-need-to-apply', 301);
Route::redirect('/id/berikut-adalah-5-universitas-jurusan-gizi-terbaik-di-asia/', '/id-id/blog/berikut-adalah-5-universitas-jurusan-gizi-terbaik-di-asia', 301);
Route::redirect('/about/', '/id-en/about', 301);
Route::redirect('/program/admissions-mentoring/graduate-1/', '/id-en/programs/admissions-mentoring/graduate-program', 301);
Route::redirect('/id/yuk-ketahui-rincian-biaya-kuliah-di-belanda/lcdqnmrsu5hf5oppbzyb192mz5cfunitifcyevcts7q6wgtp_ctvsrzfyp5qu20ylcknsyie-sttqw8bppkt3b569o5ak4oyb2i7/', '/id-en/blog/yuk-ketahui-rincian-biaya-kuliah-di-belanda', 301);
Route::redirect('/edinburgh-university-acceptance-rate-heres-what-you-should-know/', '/id-en/blog/edinburgh-university-acceptance-rate-heres-what-you-should-know', 301);
Route::redirect('/id/mengenal-lebih-dekat-profesi-dokter-anak/mybt-bbbv2fzrncsfczekfzulfdzn4p5zccnwyxl_7hmj7lrpg0rrjhixfwdopqir5hxip9wcfk311m7rycir0gkmcort44sgmij/feed/', '/id-en/blog/mengenal-lebih-dekat-profesi-dokter-anak', 301);
Route::redirect('/5-best-scholarships-in-australia/istockphoto-818087910-612x612-1/', '/id-en/blog/5-best-scholarships-in-australia', 301);
Route::redirect('/reasons-why-you-should-study-a-level-math/hands-using-laptop-with-mathematical-formulas-online-education-concept/', '/id-en/blog/reasons-why-you-should-study-a-level-math', 301);
Route::redirect('/id/jurusan-kuliah-di-amerika-ini-5-yang-terbaik/', '/id-en/blog/jurusan-kuliah-di-amerika-ini-5-yang-terbaik', 301);
Route::redirect('/contact-us/', '/id-en/contact-us', 301);
Route::redirect('/the-university-of-melbourne-scholarships-for-international-students/downloader-la-62e25c846dec6/', '/id-en/blog/the-university-of-melbourne-scholarships-for-international-students', 301);
Route::redirect('/id/kuliah-di-kanada-bukan-hanya-sekedar-mimpi/w9aaly44fyncrp2dct8dr5xswleal1sc22iqj6soyaoxa_oonykuxwguu0webwffokx9nplopgef7zzg-8mysfrbhyomy8pbrepl/', '/id-id/blog/kuliah-di-kanada-bukan-hanya-sekedar-mimpi', 301);
Route::redirect('/programs/', '/id-en/programs', 301);
Route::redirect('/id/programs/', '/id-id/programs', 301);
Route::redirect('/id/id-blog/', '/id-id/blog', 301);
Route::redirect('/human-resource-development-the-heart-of-a-company/', '/id-en/blog/human-resource-development-the-heart-of-a-company', 301);
Route::redirect('/id/programs/admissions-mentoring', '/id-id/programs/admissions-mentoring', 301);
Route::redirect('/id/programs/academic-test-preparation', '/id-id/programs/academic-test-preparation', 301);
Route::redirect('/id/programs/passion-project-mentoring', '/id-id/programs/passion-project-mentoring', 301);
Route::redirect('/princeton-university-notable-alumni-discover-these-famous-figure/', '/id-en/blog/princeton-university-notable-alumni-discover-these-famous-figure', 301);
Route::redirect('/id/simak-syarat-kuliah-di-belanda-berikut-ini/rvxhdyusjd7qc-vtvburnhtdyxwn9f38xxak8khii1fzth7esgwg0_ia4yd2j1-rpih67ykycta2j5tcxujehgawkcl1crioc-qq/', '/id-id/blog/simak-syarat-kuliah-di-belanda-berikut-ini', 301);
Route::redirect('/university-of-hong-kong-acceptance-rate-get-the-inside-scoop/', '/id-en/blog/university-of-hong-kong-acceptance-rate-get-the-inside-scoop', 301);
Route::redirect('/id/prospek-kerja-jurusan-hukum-di-masa-depan/j1r-nh5qahsetpwtz77wf-qejkx-mlwg8qjunzlv9lo7folvbz5vkajeirkzptlpvpff3wxgq8rqfarjtujszpuujv2ykklpfovw/', '/id-id/blog/prospek-kerja-jurusan-hukum-di-masa-depan', 301);
Route::redirect('/id/mengenal-lebih-dekat-profesi-dokter-anak/mybt-bbbv2fzrncsfczekfzulfdzn4p5zccnwyxl_7hmj7lrpg0rrjhixfwdopqir5hxip9wcfk311m7rycir0gkmcort44sgmij/', '/id-id/blog/mengenal-lebih-dekat-profesi-dokter-anak', 301);
Route::redirect('/id/ingin-tahu-fakta-menarik-seputar-jurusan-multimedia-baca-di-sini/happy-female-graphic-designer-working-from-home-office-using-graphic-tablet/', '/id-id/blog/ingin-tahu-fakta-menarik-seputar-jurusan-multimedia-baca-di-sini', 301);
Route::redirect('/learn-the-complete-insight-about-human-resource-here/', '/id-en/blog/learn-the-complete-insight-about-human-resource-here', 301);
Route::redirect('/job-hunting-usa-fresh-graduates/', '/id-en/blog/job-hunting-usa-fresh-graduates', 301);
Route::redirect('/id/teknik-industri-jurusan-universitas-dan-prospek-kerja-di-masa-depan/hands-holding-tablet-on-blurred-automation-machine-as-background/', '/id-id/blog/teknik-industri-jurusan-universitas-dan-prospek-kerja-di-masa-depan', 301);
Route::redirect('/id/5-beasiswa-di-inggris-yang-kamu-wajib-tahu/students-walk-and-talk-using-mobile-devices-in-university-2/feed/', '/id-id/blog/5-beasiswa-di-inggris-yang-kamu-wajib-tahu', 301);
Route::redirect('/your-complete-guide-on-international-lawyer/', '/id-en/blog/your-complete-guide-on-international-lawyer', 301);
Route::redirect('/choose-major-wisely-5-key-factors-to-consider/', '/id-en/blog/choose-major-wisely-5-key-factors-to-consider', 301);
Route::redirect('/id/jurusan-kuliah-yang-paling-dibutuhkan-di-dunia-kerja/group-of-diverse-multiethnic-people-with-various-jobs/', '/id-id/blog/jurusan-kuliah-yang-paling-dibutuhkan-di-dunia-kerja', 301);
Route::redirect('/study-and-work-in-the-usa-is-it-possible/', '/id-en/blog/study-and-work-in-the-usa-is-it-possible', 301);
Route::redirect('/compelling-college-application-portfolio-tips/', '/id-en/blog/compelling-college-application-portfolio-tips', 301);
Route::redirect('/human-resource-management-degree-lets-gain-all-the-insight/', '/id-en/blog/human-resource-management-degree-lets-gain-all-the-insight', 301);
Route::redirect('/id/jurusan-pertambangan-hal-hal-penting-yang-wajib-kamu-tahu/', '/id-id/blog/jurusan-pertambangan-hal-hal-penting-yang-wajib-kamu-tahu', 301);
Route::redirect('/harvard-law-school-worlds-leading-law-school/', '/id-en/blog/harvard-law-school-worlds-leading-law-school', 301);
Route::redirect('/5-essay-writing-steps-for-beginner/', '/id-en/blog/5-essay-writing-steps-for-beginner', 301);
Route::redirect('/success-stories/', '/id-en/resources/success-stories', 301);
Route::redirect('/cornell-university-master-program:-heres-your-guide!/', '/id-en/blog/cornell-university-master-program-heres-your-guide', 301);
Route::redirect('/resources/success-stories/', '/id-en/resources/success-stories', 301);
Route::redirect('/all-about-harvard-university-post-graduate-program/', '/id-en/blog/all-about-harvard-university-post-graduate-program', 301);
Route::redirect('/id/serba-serbi-jurusan-matematika/hands-using-laptop-with-mathematical-formulas-online-education-concept-2/', '/id-id/blog/serba-serbi-jurusan-matematika', 301);
Route::redirect('/attractive-university-of-hong-kong-scholarships-that-you-should-try/', '/id-en/blog/attractive-university-of-hong-kong-scholarships-that-you-should-try', 301);
Route::redirect('/heres-what-you-should-know-about-nus-admission-process/', '/id-en/blog/heres-what-you-should-know-about-nus-admission-process', 301);
Route::redirect('/the-beginning-of-21st-century-skills/', '/id-en/blog/the-beginning-of-21st-century-skills', 301);
Route::redirect('/breaking-down-university-of-oxford-acceptance-rate/', '/id-en/blog/breaking-down-university-of-oxford-acceptance-rate', 301);
Route::redirect('/university-of-manchester-acceptance-rate-heres-what-you-should-know/', '/id-en/blog/university-of-manchester-acceptance-rate-heres-what-you-should-know', 301);
Route::redirect('/sg/', '/sg-en', 301);
Route::redirect('/breaking-down-the-complete-ntu-admissions-process/', '/id-en/blog/breaking-down-the-complete-ntu-admissions-process', 301);
Route::redirect('/civil-engineering-why-you-should-consider-studying-it/', '/id-en/blog/civil-engineering-why-you-should-consider-studying-it', 301);
Route::redirect('/id/beranda/', '/id-id', 301);
Route::redirect('/should-you-take-the-new-sat-or-act/sat-act/', '/id-en/blog/should-you-take-the-new-sat-or-act', 301);
Route::redirect('/academic-tutoring/', '/id-en/programs/academic-test-preparation/academic-tutoring', 301);
Route::redirect('/id/ayo-simak-universitas-dengan-jurusan-teknik-lingkungan-terbaik-di-asia/getpaidstock-com-633e771a5f5ad/', '/id-id/blog/ayo-simak-universitas-dengan-jurusan-teknik-lingkungan-terbaik-di-asia', 301);
Route::redirect('/id/biaya-kuliah-jurusan-tata-boga-atau-culinary-di-le-cordon-bleu/downloader-la-630aec47ee6e9/', '/id-id/blog/biaya-kuliah-jurusan-tata-boga-atau-culinary-di-le-cordon-bleu', 301);
Route::redirect('/upcoming-events/upcoming-event/', '/id-en/resources/upcoming-events', 301);
Route::redirect('/full-overview-on-columbia-university-profile/7xm-xyz685893/', '/id-en/blog/full-overview-on-columbia-university-profile', 301);
Route::redirect('/sg/home/', '/sg-en', 301);
Route::redirect('/id/6-manfaat-kuliah-jurusan-teknik-elektro-khusus-untuk-kamu/', '/id-id/blog/6-manfaat-kuliah-jurusan-teknik-elektro-khusus-untuk-kamu', 301);
Route::redirect('/program/academic-test-preparation/ib-extended-essay-coaching/', '/id-id/programs/academic-test-preparation/ib-ee-coaching-program', 301);
Route::redirect('/id/daftar-jurusan-yang-banyak-peluang-kerja-di-masa-depan/connecting-last-jigsaw-puzzle-piece/', '/id-id/blog/daftar-jurusan-yang-banyak-peluang-kerja-di-masa-depan', 301);
Route::redirect('/id/semua-hal-yang-wajib-kamu-tahu-untuk-kuliah-jurusan-teknik-elektro/', '/id-id/blog/semua-hal-yang-wajib-kamu-tahu-untuk-kuliah-jurusan-teknik-elektro', 301);
Route::redirect('/id/biaya-kuliah-jurusan-farmasi-di-jepang-yang-wajib-kamu-tahu/getpaidstock-com-62c830f3cdf28/', '/id-id/blog/biaya-kuliah-jurusan-farmasi-di-jepang-yang-wajib-kamu-tahu', 301);
Route::redirect('/id/manajemen-macam-macam-pilihan-peminatan/', '/id-id/blog/manajemen-macam-macam-pilihan-peminatan', 301);
Route::redirect('/private-universities-in-the-usa-know-the-features/', '/id-en/blog/private-universities-in-the-usa-know-the-features', 301);
Route::redirect('/personal-branding-strategy-perfecting-uni-application/', '/id-en/blog/personal-branding-strategy-perfecting-uni-application', 301);
Route::redirect('/tackling-the-pandemic-influenced-us-university-application/', '/id-en/blog/tackling-the-pandemic-influenced-us-university-application', 301);
Route::redirect('/top-seoul-national-university-majors-for-undergraduate-degree/', '/id-en/blog/top-seoul-national-university-majors-for-undergraduate-degree', 301);
Route::redirect('/career-preparation-101-for-high-schoolers/', '/id-en/blog/career-preparation-101-for-high-schoolers', 301);
Route::redirect('/study-at-university-in-singapore-what-to-know/', '/id-en/blog/study-at-university-in-singapore-what-to-know', 301);
Route::redirect('/applying-uk-universities', '/id-en/blog/applying-uk-universities', 301);
Route::redirect('/applying-uk-universities/', '/id-en/blog/applying-uk-universities', 301);
Route::redirect('/ntu-the-absolutely-complete-facts-you-should-know/', '/id-en/blog/ntu-the-absolutely-complete-facts-you-should-know', 301);
Route::redirect('/program/academic-test-preparation/academic-tutoring/', '/id-en/programs/academic-test-preparation/academic-tutoring', 301);
Route::redirect('/id/tertarik-masuk-jurusan-ekonomi-bisnis-baca-artikel-ini/currency-and-exchange-stock-chart-for-finance-and-economy-display/', '/id-id/blog/tertarik-masuk-jurusan-ekonomi-bisnis-baca-artikel-ini', 301);
Route::redirect('/id/mengenal-luar-dalam-mengenai-jurusan-ekonomi-pembangunan/business-meeting-to-manage-sale-marketing-finance-strategy/', '/id-id/blog/mengenal-luar-dalam-mengenai-jurusan-ekonomi-pembangunan', 301);
Route::redirect('/id/jurusan-ekonomi-macam-macam-penjurusan-ini-yang-perlu-kamu-tahu/bitcoin-abstract-3d-concept/', '/id-id/blog/jurusan-ekonomi-macam-macam-penjurusan-ini-yang-perlu-kamu-tahu', 301);
Route::redirect('/id/10-jurusan-kuliah-anak-ips-yang-paling-dicari/istockphoto-1158889603-612x612-1/', '/id-id/blog/10-jurusan-kuliah-anak-ips-yang-paling-dicari', 301);
Route::redirect('/partnership-careers/', '/id-en/about/partnership-careers', 301);
Route::redirect('/let’s-discover-the-full-breakdown-of-nus-application!/', '/id-en/blog/lets-discover-the-full-breakdown-of-nus-application', 301);
Route::redirect('/faq/what-are-the-differences-between-community-college-and-4-year-college-and-university/', '/id-en/blog/whats-the-difference-between-a-university-college-and-community-college', 301);
Route::redirect('/sat-prep/', '/id-en/programs/academic-test-preparation/sat-program', 301);
Route::redirect('/program/admissions-mentoring/graduate-4/', '/id-en/programs/admissions-mentoring/graduate-program', 301);
Route::redirect('/id/programs/immersion-program/', '/id-en/programs/passion-project-mentoring', 301);
Route::redirect('/id/programs/admissions-mentoring-id/', '/id-id/programs/admissions-mentoring', 301);
Route::redirect('/id/academic-tutoring-2/', '/id-id/programs/academic-test-preparation/academic-tutoring', 301);
Route::redirect('/id/acad-tutor-indo/', '/id-id/programs/academic-test-preparation/academic-tutoring', 301);
Route::redirect('/university-of-manchester-acceptance-rate:-here’s-what-you-should-know/', '/id-en/blog/university-of-manchester-acceptance-rate-heres-what-you-should-know', 301);
Route::redirect('/programs-experiental-learning-immersion-program/', '/id-en/programs/passion-project-mentoring', 301);
Route::redirect('/id/academic-tutoring/', '/id-id/programs/academic-test-preparation/academic-tutoring', 301);
Route::redirect('/id/programs/sat-program/', '/id-id/programs/academic-test-preparation/sat-program', 301);
Route::redirect('/manajemen-operasional-penjelasan-dan-prospek-kerja/', '/id-id/blog/manajemen-operasional-penjelasan-dan-prospek-kerja', 301);
Route::redirect('/peking-university-master-program:-your-', '/id-en/blog/peking-university-master-program-your-1-study-destination-in-china', 301);
Route::redirect('/id/kontribusi-kami/', '/id-id/about/our-contribution', 301);
Route::redirect('/testimonial/', '/id-en/resources/testimonial', 301);
Route::redirect('/id-id/blog/corporate-lawyer-facts-you-need-to-know', '/id-en/blog/corporate-lawyer-facts-you-need-to-know', 301);
Route::redirect('/our-contribution/', '/id-en/about/our-contribution', 301);
Route::redirect('/daftar-lengkap-universitas-jurusan-multimedia-terbaik-di-asia/', '/id-id/blog/daftar-lengkap-universitas-jurusan-multimedia-terbaik-di-asia', 301);
Route::redirect('/id/10-jurusan-kuliah-anak-ipa-yang-paling-populer-%EF%BB%BF/', '/id-id/blog/10-jurusan-kuliah-anak-ipa-yang-paling-populer', 301);
Route::redirect('/admission-mentoring/', '/id-en/programs/admissions-mentoring', 301);
Route::redirect('/dokter-penjelasan-dan-spesialisasi/', '/id-id/blog/dokter-penjelasan-dan-spesialisasi', 301);
Route::redirect('/mimpi-kuliah-di-china-cari-tahu-semuanya-di-sini/', '/id-id/blog/mimpi-kuliah-di-china-cari-tahu-semuanya-di-sini', 301);


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
            Route::get('/programs/global-innovators-project', 'global_innovators_project')->name('global_innovators_project');
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