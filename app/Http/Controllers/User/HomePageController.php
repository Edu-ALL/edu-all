<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
        // buat dummy data, sesuai dari table
        $banners_dummy = collect([
            (object)[
                'id' => 1,
                'group' => 1,
                'banner_img' => "banner1.jpg",
                'banner_alt' => 'graduation toga',
                'banner_title' => 'Academic & Test Preparation',
                'banner_description' => 'Build the academic foundation for your top university application success  with our tried-and-tested method to boost your transcript and standardized test scores.', 'banner_button' => 'learn more',
                'banner_link' => 'https://all-inedu.com/programs/admissions-mentoring/',
                'banner_status' => 'active',
                'lang' => 'en',
                'created_at' => '2022-11-26 19:33:10',
                'updated_at' => '2022-11-26 19:33:10'
            ],
            (object)[
                'id' => 2,
                'group' => 1,
                'banner_img' => "banner1.jpg",
                'banner_alt' => 'graduation toga',
                'banner_title' => 'Persiapan Akademis dan Test',
                'banner_description' => 'Kembangkan personal brand Anda, CV, dapatkan Magang, tulis esai, raih skor tinggi yang diperlukan untuk masuk ke universitas top dunia.', 'banner_button' => 'pelajari lebih lanjut',
                'banner_link' => 'https://all-inedu.com/programs/admissions-mentoring/',
                'banner_status' => 'active',
                'lang' => 'id',
                'created_at' => '2022-11-26 19:33:10',
                'updated_at' => '2022-11-26 19:33:10'
            ],
            (object)[
                'id' => 3,
                'group' => 2,
                'banner_img' => "banner2.jpg",
                'banner_alt' => 'graduation toga',
                'banner_title' => 'Admission Mentoring',
                'banner_description' => 'Personalized 1-on-1 mentoring service that will serve as a holistic academic and non-academic walk-through to help you get into your dream universities.', 'banner_button' => 'learn more',
                'banner_link' => 'https://all-inedu.com/programs/admissions-mentoring/',
                'banner_status' => 'active',
                'lang' => 'en',
                'created_at' => '2022-11-26 19:33:10',
                'updated_at' => '2022-11-26 19:33:10'
            ],
            (object)[
                'id' => 4,
                'group' => 2,
                'banner_img' => "banner2.jpg",
                'banner_alt' => 'graduation toga',
                'banner_title' => 'Admissions Mentoring',
                'banner_description' => 'Kami menawarkan layanan bimbingan penerimaan 1-on-1 yang dipersonalisasi yang akan berfungsi sebagai panduan akademis bagi siswa untuk diterima di sekolah impian mereka dan menemukan universitas yang paling sesuai.',
                'banner_button' => 'pelajari lebih lanjut',
                'banner_link' => 'https://all-inedu.com/programs/admissions-mentoring/',
                'banner_status' => 'active',
                'lang' => 'id',
                'created_at' => '2022-11-26 19:33:10',
                'updated_at' => '2022-11-26 19:33:10'
            ],
        ]);

        $banners = $banners_dummy->where('lang', app()->getLocale());

        return view('user.home.region.id', [
            'banners' => $banners,
        ]);

        // for singapore region
        // return view('user.home.sg', [
        //     'banners' => $banners,
        // ]);
    }

    public function sign_me()
    {
        return view('user.sign_me.main');
    }
}
