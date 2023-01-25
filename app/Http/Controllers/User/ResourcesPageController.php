<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use Illuminate\Http\Request;

class ResourcesPageController extends Controller
{
    public function success_stories()
    {
        $dummy_data = collect(
            [
                (object)[
                    'id' => 1,
                    'group' => 1,
                    'name' => 'Valencia Kandilla',
                    'badge_1' => 'Admission Mentoring',
                    'badge_2' => 'Neuroscience',
                    'badge_3' => 'University of Pennsylvania Student',
                    'badge_4' => null,
                    'description' => 'Valencia joined ALL-in when she was already in Grade 12 and already had a lot of activities on her plate in the beginning, but not much related to her interest in biology and neuroscience. She followed through with suggestions of things she needed to do such as joining more research competitions even though she already had school activities lined up in her final year. <br/><br/> Even though she has big interests in STEM, she already has stellar writing skills that helped her a lot in her application. Valencia always responds fast and sends her revised essays quickly when it comes the time for the application process. Her personal branding as an aspiring neurologist who is keen to combat dyslexia through digital media & photography shines through her essays. That landed her into 13 top universities, including UPenn, UCLA, King’s College London, and University of British Columbia and finally put her decision to University of Pennsylvania. She’s currently enjoying her first year as a Neuroscience student, which is something that she loves to do and we love her for that!',
                    'status' => 'active',
                    'thumbnail' => 'valencia-702x1024.webp',
                    'thumbnail_alt' => 'thumbnail alt',
                    'achievment_image' => 'achievment-valencia.png',
                    'achievment_alt' => 'achievment alt',
                    'video_link' => null,
                    'lang' => 'en',
                ],
                (object)[
                    'id' => 2,
                    'group' => 1,
                    'name' => 'Valencia Kandilla',
                    'badge_1' => 'Admission Mentoring',
                    'badge_2' => 'Neuroscience',
                    'badge_3' => 'University of Pennsylvania Student',
                    'badge_4' => null,
                    'description' => 'Saat bergabung dengan ALL-in, Valencia sudah punya minat di bidang biologi dan ilmu saraf. Lalu, dia mengikuti beberapa saran mentor mengenai kegiatan apa saja yang harus dia lakukan agar dapat masuk ke universitas top dan jurusan yang sesuai dengan minatnya. Kegiatan tersebut adalah mengikuti beberapa kompetisi riset walaupun sebenarnya dia sudah memiliki banyak kegiatan di tahun terakhir masa sekolahnya. <br/><br/> Meskipun memiliki minat besar di bidang STEM, dia sudah memiliki keterampilan menulis luar biasa yang banyak membantunya dalam proses pendaftaran universitas. Valencia selalu memberikan respon dan mengirimkan esai yang telah direvisi dengan cepat ketika proses pendaftaran universitas. Personal brandingnya sebagai calon ahli saraf yang ingin memerangi disleksia melalui media digital & fotografi dapat ditunjukan dengan baik di esainya. Hal ini membuatnya  bisa masuk ke 13 universitas top dunia seperti UPenn, UCLA, King’s College London, dan University of British Columbia. Akhirnya, dia memutuskan untuk melanjutkan studinya di University of Pennsylvania. Saat ini, dia sedang menikmati tahun pertamanya sebagai mahasiswa Neuroscience, yang merupakan minat yang sangat ia sukai.',
                    'status' => 'active',
                    'thumbnail' => 'valencia-702x1024.webp',
                    'thumbnail_alt' => 'thumbnail alt',
                    'achievment_image' => 'achievment-valencia.png',
                    'achievment_alt' => 'achievment alt',
                    'video_link' => null,
                    'lang' => 'id',
                ],
                (object)[
                    'id' => 5,
                    'group' => 3,
                    'name' => 'Vincent Onggo',
                    'badge_1' => 'UVinci',
                    'badge_2' => 'Grade 11',
                    'badge_3' => 'Series B Project (6-9 months)',
                    'badge_4' => null,
                    'description' => 'With the pandemic happening, people are becoming more aware of the transmission of the viruses, including Vincent. He notes that one of the surfaces that have a high probability of spreading the virus that we touch most often is door handles. While it is common to just clean the door handles with disinfectant, it is very time consuming and can damage the door handles if exposed to harsh chemicals too often. <br/><br/> This inspires him with the idea to start creating UVinci, an automatic UV Door Handle Sanitizer to avoid bacteria and virus transmission that will be useful for everybody. When the device’s motion sensor detects movement, UV light is automatically shone towards the door handle to keep it germ-free. Want to help Vincent in this mission?',
                    'status' => 'active',
                    'thumbnail' => 'VINCENT-1-754x1024.webp',
                    'thumbnail_alt' => 'thumbnail alt',
                    'achievment_image' => 'achievment-vincent.png',
                    'achievment_alt' => 'achievment alt',
                    'video_link' => 'https://youtu.be/-FUv-z69wH8',
                    'lang' => 'en',
                ],
                (object)[
                    'id' => 6,
                    'group' => 3,
                    'name' => 'Vincent Onggo',
                    'badge_1' => 'UVinci',
                    'badge_2' => 'Grade 11',
                    'badge_3' => 'Series B Project (6-9 months)',
                    'badge_4' => null,
                    'description' => 'Dengan adanya pandemi, masyarakat menjadi lebih sadar akan bahaya penularan virus, termasuk Vincent. Dia mencatat bahwa salah satu permukaan yang memiliki kemungkinan tinggi menyebarkan virus yang paling sering kita sentuh adalah gagang pintu. Meskipun biasanya hanya membersihkan gagang pintu dengan disinfektan, hal ini sangat memakan waktu dan dapat merusak gagang pintu jika terlalu sering terkena bahan kimia keras. <br/><br/> Hal ini memberinya ide untuk mulai membuat UVinci. Pembersih Gagang Pintu UV otomatis untuk menghindari penularan bakteri dan virus yang akan berguna bagi semua orang. Saat sensor gerak mendeteksi gerakan, sinar UV secara otomatis menyinari gagang pintu agar terbebas kuman. Tertarik untuk membantu Vincent dalam menangkal penularan virus? Dukung UVinci melalui <a href="http://bit.ly/UVinciProject" class="text-red-500">bit.ly/UVinciProject</a>',
                    'status' => 'active',
                    'thumbnail' => 'VINCENT-1-754x1024.webp',
                    'thumbnail_alt' => 'thumbnail alt',
                    'achievment_image' => 'achievment-vincent-id.png',
                    'achievment_alt' => 'achievment alt',
                    'video_link' => 'https://youtu.be/-FUv-z69wH8',
                    'lang' => 'id',
                ],
                (object)[
                    'id' => 3,
                    'group' => 2,
                    'name' => 'Vincent Onggo',
                    'badge_1' => 'UVinci',
                    'badge_2' => 'Grade 11',
                    'badge_3' => 'Series B Project (6-9 months)',
                    'badge_4' => 'Unicorn Project (9 months+)',
                    'description' => 'With the pandemic happening, people are becoming more aware of the transmission of the viruses, including Vincent. He notes that one of the surfaces that have a high probability of spreading the virus that we touch most often is door handles. While it is common to just clean the door handles with disinfectant, it is very time consuming and can damage the door handles if exposed to harsh chemicals too often. <br/><br/> This inspires him with the idea to start creating UVinci, an automatic UV Door Handle Sanitizer to avoid bacteria and virus transmission that will be useful for everybody. When the device’s motion sensor detects movement, UV light is automatically shone towards the door handle to keep it germ-free. Want to help Vincent in this mission?',
                    'status' => 'active',
                    'thumbnail' => 'VINCENT-1-754x1024.webp',
                    'thumbnail_alt' => 'thumbnail alt',
                    'achievment_image' => 'achievment-vincent.png',
                    'achievment_alt' => 'achievment alt',
                    'video_link' => 'https://youtu.be/-FUv-z69wH8',
                    'lang' => 'en',
                ],
                (object)[
                    'id' => 4,
                    'group' => 2,
                    'name' => 'Vincent Onggo',
                    'badge_1' => 'UVinci',
                    'badge_2' => 'Grade 11',
                    'badge_3' => 'Series B Project (6-9 months)',
                    'badge_4' => 'Unicorn Project (9 months+)',
                    'description' => 'Dengan adanya pandemi, masyarakat menjadi lebih sadar akan bahaya penularan virus, termasuk Vincent. Dia mencatat bahwa salah satu permukaan yang memiliki kemungkinan tinggi menyebarkan virus yang paling sering kita sentuh adalah gagang pintu. Meskipun biasanya hanya membersihkan gagang pintu dengan disinfektan, hal ini sangat memakan waktu dan dapat merusak gagang pintu jika terlalu sering terkena bahan kimia keras. <br/><br/> Hal ini memberinya ide untuk mulai membuat UVinci. Pembersih Gagang Pintu UV otomatis untuk menghindari penularan bakteri dan virus yang akan berguna bagi semua orang. Saat sensor gerak mendeteksi gerakan, sinar UV secara otomatis menyinari gagang pintu agar terbebas kuman. Tertarik untuk membantu Vincent dalam menangkal penularan virus? Dukung UVinci melalui <a href="http://bit.ly/UVinciProject" class="text-red-500">bit.ly/UVinciProject</a>',
                    'status' => 'active',
                    'thumbnail' => 'VINCENT-1-754x1024.webp',
                    'thumbnail_alt' => 'thumbnail alt',
                    'achievment_image' => 'achievment-vincent-id.png',
                    'achievment_alt' => 'achievment alt',
                    'video_link' => 'https://youtu.be/-FUv-z69wH8',
                    'lang' => 'id',
                ],
            ]
        );

        $success_stories = $dummy_data->where('status', 'active')->where('lang', app()->getLocale());

        return view('user.success_stories.main', [
            'success_stories' => $success_stories
        ]);
    }

    public function upcoming_events()
    {
        $dummy_data = collect([
            (object)[
                "id" => 1,
                "group" => 1,
                "event_date" => "21 JANUARY 2023",
                "event_thumbnail" => "image1.webp",
                "event_alt" => "image alt",
                "event_title" => "Nailing Subject Selections for Your Dream Major",
                "event_subtitle" => "Come upon how to properly select subjects to prepare yourself for a smooth university application!",
                "event_detail" => "Join this 5-day program in Singapore and experience hands-on workshops, company visits, and networking lunches and dinners, where you will be exposed to real business dealings and develop business acumen!",
                "event_rsvp_link" => "https://bit.ly/allinsubjectselection",
                "event_status" => "active",
                "lang" => "en",
            ],
            (object)[
                "id" => 2,
                "group" => 1,
                "event_date" => "21 JANUARY 2023",
                "event_thumbnail" => "image1.webp",
                "event_alt" => "image alt",
                "event_title" => "Nailing Subject Selections for Your Dream Major",
                "event_subtitle" => "Come upon how to properly select subjects to prepare yourself for a smooth university application!",
                "event_detail" => "Join this 5-day program in Singapore and experience hands-on workshops, company visits, and networking lunches and dinners, where you will be exposed to real business dealings and develop business acumen!",
                "event_rsvp_link" => "https://bit.ly/allinsubjectselection",
                "event_status" => "active",
                "lang" => "id",
            ],
            (object)[
                "id" => 3,
                "group" => 2,
                "event_date" => "11 FEBRUARY 2022",
                "event_thumbnail" => "image2.webp",
                "event_alt" => "image2 alt",
                "event_title" => "Acing the New Digital SAT for a Successful University Application",
                "event_subtitle" => "Make your university application stands out with high score on new digital SAT",
                "event_detail" => "Join this 5-day program in Singapore and experience hands-on lab work using cutting-edge equipment and witness the forefront of technologies in STEM research process!",
                "event_rsvp_link" => "https://bit.ly/allindigital-sat",
                "event_status" => "active",
                "lang" => "en",
            ],
            (object)[
                "id" => 4,
                "group" => 2,
                "event_date" => "11 FEBRUARY 2022",
                "event_thumbnail" => "image2.webp",
                "event_alt" => "image2 alt",
                "event_title" => "Acing the New Digital SAT for a Successful University Application",
                "event_subtitle" => "Make your university application stands out with high score on new digital SAT",
                "event_detail" => "Join this 5-day program in Singapore and experience hands-on lab work using cutting-edge equipment and witness the forefront of technologies in STEM research process!",
                "event_rsvp_link" => "https://bit.ly/allindigital-sat",
                "event_status" => "active",
                "lang" => "id",
            ],
        ]);

        $events = $dummy_data->where('event_status', 'active')->where('lang', app()->getLocale());

        return view('user.upcoming_events.main', [
            'events' => $events
        ]);
    }

    public function guidebook()
    {
        return view('user.guidebooks.main');
    }

    public function testimonial()
    {
        return view('user.testimonial.main');
    }

    public function student_acceptances()
    {
        return view('user.student_acceptances.main');
    }

    public function mentor($locale)
    {
        $all_mentor = Mentors::all()->where('lang', $locale);

        return view('user.mentor.main', [
            'locale' => $locale,
            'all_mentor' => $all_mentor
        ]);
    }

    public function detail_mentor($locale, $group)
    {
        $mentor = Mentors::where('group', $group)->where('lang', $locale)->first();
        return view('user.detail_mentor.main', [
            'mentor' => $mentor
        ]);
    }
}
