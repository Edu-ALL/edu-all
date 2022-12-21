<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramPageController extends Controller
{
    public function index()
    {
        return view('user.programs.main');
    }

    public function admissions_mentoring()
    {
        $undergraduate_cards_dummy = collect([
            (object) [
                'id' => 1,
                'group' => 1,
                'image' => "assets/img/admission mentoring/undergraduate_1.webp",
                'title' => "All-Around University Application",
                "desc" => "We assist our students with essays, activity resume, letter of recommendation, standardized testing strategy and other information needed for each application.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 2,
                'group' => 1,
                'image' => "assets/img/admission mentoring/undergraduate_1.webp",
                'title' => "Aplikasi Universitas Menyeluruh",
                "desc" => "Kami membantu siswa kami dengan esai, resume aktivitas, surat rekomendasi, strategi SAT dan informasi lain yang diperlukan untuk setiap aplikasi.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 3,
                'group' => 2,
                'image' => "assets/img/admission mentoring/undergraduate_2.webp",
                'title' => "Personalized Admission Assessment",
                "desc" => "We evaluate students’ background in academic, personal and extracurricular areas.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 4,
                'group' => 2,
                'image' => "assets/img/admission mentoring/undergraduate_2.webp",
                'title' => "Penilaian Pendaftaran Universitas yang Disesuaikan",
                "desc" => "Kami mengevaluasi latar belakang siswa di bidang akademik, personal dan ekstrakurikuler.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 5,
                'group' => 3,
                'image' => "assets/img/admission mentoring/undergraduate_3.webp",
                'title' => "Profile Development & Academic Planning",
                "desc" => "Design and plan your courses, extracurricular choices, internship placement, personal project mentoring, subject tutoring and productive holiday planning in order to develop an academic edge.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 6,
                'group' => 3,
                'image' => "assets/img/admission mentoring/undergraduate_3.webp",
                'title' => "Pengembangan Profil & Perencanaan Akademik",
                "desc" => "Rancang dan rencanakan kursusmu, pilihan ekstrakurikuler, penempatan magang, bimbingan proyek pribadi, les mata pelajaran, dan perencanaan liburan yang produktif untuk mengembangkan keunggulan akademis.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 7,
                'group' => 4,
                'image' => "assets/img/admission mentoring/undergraduate_4.webp",
                'title' => "Profile Development & Academic Planning",
                "desc" => "Strategize and guide students on the academic aspect, based on international or national high school curriculum.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 8,
                'group' => 4,
                'image' => "assets/img/admission mentoring/undergraduate_4.webp",
                'title' => "Dukungan Penasihat Akademik",
                "desc" => "Menyusun strategi dan membimbing siswa pada aspek akademik, berdasarkan kurikulum sekolah menengah internasional atau nasional.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 9,
                'group' => 5,
                'image' => "assets/img/admission mentoring/undergraduate_5.webp",
                'title' => "Best-Fit University Research & Selection",
                "desc" => "We recommend a list of schools that fit each student best, taking into account their interests, personalities and dreams and shortlist them.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 10,
                'group' => 5,
                'image' => "assets/img/admission mentoring/undergraduate_5.webp",
                'title' => "Penelitian & Seleksi Universitas yang Paling Sesuai",
                "desc" => "Kami merekomendasikan daftar sekolah yang paling cocok untuk setiap siswa, dengan mempertimbangkan minat, kepribadian, dan impian mereka.Setelah itu, kita bersama-sama akan membuat daftar universitas terbaik dan paling cocok untuk para siswa.",
                'lang' => 'id',
            ],
        ]);

        $graduate_cards_dummy = collect([
            (object) [
                'id' => 1,
                'group' => 1,
                'image' => "assets/img/admission mentoring/graduate_1.webp",
                'title' => "All-Around University Application",
                "desc" => "We assist our students with essays, activity resume, letter of recommendation, standardized testing strategy and other information needed for each application.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 2,
                'group' => 1,
                'image' => "assets/img/admission mentoring/graduate_1.webp",
                'title' => "Aplikasi Universitas Menyeluruh",
                "desc" => "Kami membantu siswa kami dengan esai, resume aktivitas, surat rekomendasi, strategi SAT dan informasi lain yang diperlukan untuk setiap aplikasi.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 3,
                'group' => 2,
                'image' => "assets/img/admission mentoring/graduate_2.webp",
                'title' => "Personalized Admission Assessment",
                "desc" => "We evaluate students’ background in academic, personal and extracurricular areas.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 4,
                'group' => 2,
                'image' => "assets/img/admission mentoring/graduate_2.webp",
                'title' => "Penilaian Pendaftaran Universitas yang Disesuaikan",
                "desc" => "Kami mengevaluasi latar belakang siswa di bidang akademik, personal dan ekstrakurikuler.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 5,
                'group' => 3,
                'image' => "assets/img/admission mentoring/graduate_3.webp",
                'title' => "Profile Development & Academic Planning",
                "desc" => "Design and plan your courses, extracurricular choices, internship placement, personal project mentoring, subject tutoring and productive holiday planning in order to develop an academic edge.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 6,
                'group' => 3,
                'image' => "assets/img/admission mentoring/graduate_3.webp",
                'title' => "Pengembangan Profil & Perencanaan Akademik",
                "desc" => "Rancang dan rencanakan kursusmu, pilihan ekstrakurikuler, penempatan magang, bimbingan proyek pribadi, les mata pelajaran, dan perencanaan liburan yang produktif untuk mengembangkan keunggulan akademis.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 7,
                'group' => 4,
                'image' => "assets/img/admission mentoring/graduate_4.webp",
                'title' => "Profile Development & Academic Planning",
                "desc" => "Strategize and guide students on the academic aspect, based on international or national high school curriculum.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 8,
                'group' => 4,
                'image' => "assets/img/admission mentoring/graduate_4.webp",
                'title' => "Dukungan Penasihat Akademik",
                "desc" => "Menyusun strategi dan membimbing siswa pada aspek akademik, berdasarkan kurikulum sekolah menengah internasional atau nasional.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 9,
                'group' => 5,
                'image' => "assets/img/admission mentoring/graduate_5.webp",
                'title' => "Best-Fit University Research & Selection",
                "desc" => "We recommend a list of schools that fit each student best, taking into account their interests, personalities and dreams and shortlist them.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 10,
                'group' => 5,
                'image' => "assets/img/admission mentoring/graduate_5.webp",
                'title' => "Penelitian & Seleksi Universitas yang Paling Sesuai",
                "desc" => "Kami merekomendasikan daftar sekolah yang paling cocok untuk setiap siswa, dengan mempertimbangkan minat, kepribadian, dan impian mereka.Setelah itu, kita bersama-sama akan membuat daftar universitas terbaik dan paling cocok untuk para siswa.",
                'lang' => 'id',
            ],
        ]);

        $univtransfer_cards_dummy = collect([
            (object) [
                'id' => 1,
                'group' => 1,
                'image' => "assets/img/admission mentoring/transfer_1.webp",
                'title' => "All-Around University Application",
                "desc" => "We assist our students with essays, activity resume, letter of recommendation, standardized testing strategy and other information needed for each application.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 2,
                'group' => 1,
                'image' => "assets/img/admission mentoring/transfer_1.webp",
                'title' => "Aplikasi Universitas Menyeluruh",
                "desc" => "Kami membantu siswa kami dengan esai, resume aktivitas, surat rekomendasi, strategi SAT dan informasi lain yang diperlukan untuk setiap aplikasi.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 3,
                'group' => 2,
                'image' => "assets/img/admission mentoring/transfer_2.webp",
                'title' => "Personalized Admission Assessment",
                "desc" => "We evaluate students’ background in academic, personal and extracurricular areas.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 4,
                'group' => 2,
                'image' => "assets/img/admission mentoring/transfer_2.webp",
                'title' => "Penilaian Pendaftaran Universitas yang Disesuaikan",
                "desc" => "Kami mengevaluasi latar belakang siswa di bidang akademik, personal dan ekstrakurikuler.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 5,
                'group' => 3,
                'image' => "assets/img/admission mentoring/transfer_3.webp",
                'title' => "Profile Development & Academic Planning",
                "desc" => "Design and plan your courses, extracurricular choices, internship placement, personal project mentoring, subject tutoring and productive holiday planning in order to develop an academic edge.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 6,
                'group' => 3,
                'image' => "assets/img/admission mentoring/transfer_3.webp",
                'title' => "Pengembangan Profil & Perencanaan Akademik",
                "desc" => "Rancang dan rencanakan kursusmu, pilihan ekstrakurikuler, penempatan magang, bimbingan proyek pribadi, les mata pelajaran, dan perencanaan liburan yang produktif untuk mengembangkan keunggulan akademis.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 7,
                'group' => 4,
                'image' => "assets/img/admission mentoring/transfer_4.webp",
                'title' => "Profile Development & Academic Planning",
                "desc" => "Strategize and guide students on the academic aspect, based on international or national high school curriculum.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 8,
                'group' => 4,
                'image' => "assets/img/admission mentoring/transfer_4.webp",
                'title' => "Dukungan Penasihat Akademik",
                "desc" => "Menyusun strategi dan membimbing siswa pada aspek akademik, berdasarkan kurikulum sekolah menengah internasional atau nasional.",
                'lang' => 'id',
            ],
            (object) [
                'id' => 9,
                'group' => 5,
                'image' => "assets/img/admission mentoring/transfer_5.webp",
                'title' => "Best-Fit University Research & Selection",
                "desc" => "We recommend a list of schools that fit each student best, taking into account their interests, personalities and dreams and shortlist them.",
                'lang' => 'en',
            ],
            (object) [
                'id' => 10,
                'group' => 5,
                'image' => "assets/img/admission mentoring/transfer_5.webp",
                'title' => "Penelitian & Seleksi Universitas yang Paling Sesuai",
                "desc" => "Kami merekomendasikan daftar sekolah yang paling cocok untuk setiap siswa, dengan mempertimbangkan minat, kepribadian, dan impian mereka.Setelah itu, kita bersama-sama akan membuat daftar universitas terbaik dan paling cocok untuk para siswa.",
                'lang' => 'id',
            ],
        ]);

        $undergraduate_cards = $undergraduate_cards_dummy->where('lang', app()->getLocale());
        $graduate_cards = $graduate_cards_dummy->where('lang', app()->getLocale());
        $univtransfer_cards = $univtransfer_cards_dummy->where('lang', app()->getLocale());

        $testimonies = [
            [
                'name' => "Priyaanka Anasha Nugroho",
                'body' => "There are so many things on college admissions that I don’t know, that’s why I started to seek college counselors that can help me to build my personal brand to “promote” myself as an applicant. I saw ALL-in students’ that are accepted to top universities from previous years so I decided to choose ALL-in to guide my admission process."
            ],
            [
                'name' => "Ravi Harun",
                'body' => "I chose ALL-in because of the mentors! I felt like ALL-in mentors felt the most friendly compared to others, and the mentors are quite a lot so they could focus on each student very well. "
            ],
            [
                'name' => "Priyaanka Anasha Nugroho",
                'body' => "There are so many things on college admissions that I don’t know, that’s why I started to seek college counselors that can help me to build my personal brand to “promote” myself as an applicant. I saw ALL-in students’ that are accepted to top universities from previous years so I decided to choose ALL-in to guide my admission process."
            ],
            [
                'name' => "Ravi Harun",
                'body' => "I chose ALL-in because of the mentors! I felt like ALL-in mentors felt the most friendly compared to others, and the mentors are quite a lot so they could focus on each student very well. "
            ],
            [
                'name' => "Sujar",
                'body' => "There are so many things on college admissions that I don’t know, that’s why I started to seek college counselors that can help me to build my personal brand to “promote” myself as an applicant. I saw ALL-in students’ that are accepted to top universities from previous years so I decided to choose ALL-in to guide my admission process."
            ],
            [
                'name' => "Ravi Harun",
                'body' => "I chose ALL-in because of the mentors! I felt like ALL-in mentors felt the most friendly compared to others, and the mentors are quite a lot so they could focus on each student very well. "
            ],
        ];


        return view('user.admission_mentoring.main', [
            'undergraduate_cards' => $undergraduate_cards,
            'graduate_cards' => $graduate_cards,
            'univtransfer_cards' => $univtransfer_cards,
            'testimonies' => $testimonies,
        ]);
    }

    public function passion_project_mentoring()
    {
        return view('user.passion_project_mentoring.main');
    }

    public function academic_test_preparation()
    {
        return view('user.academic_test_preparation.main');
    }
}
