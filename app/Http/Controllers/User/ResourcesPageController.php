<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mentors;
use App\Models\MentorVideos;
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
        $dummy_data = collect([
            (object)[
                'id' => 1,
                'group' => 20230102,
                'testi_name' => 'Rachinta Marpaung',
                'testi_desc' => 'ALL-IN has helped me tremendously throughout my uni application endeavors. From brainstorming essay ideas to editing the essays, to helping find internships, ALL-in has made the process so easy while ensuring my uni application is of top-notch quality. Also, the mentors are really hip and cool, so they’re really approachable!',
                'testi_subtitle' => '(Columbia University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'undergraduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 2,
                'group' => 20230102,
                'testi_name' => 'Rachinta Marpaung',
                'testi_desc' => 'ALL-in telah sangat membantu saya selama proses aplikasi universitas saya. Dari brainstorming ide dan mengedit esai, sampai membantu menemukan magang, ALL-in telah membuat prosesnya begitu mudah sambil memastikan aplikasi saya memiliki kualitas terbaik. Para mentornya juga sangat keren, jadi mereka sangat mudah didekati dan diajak berdiskusi!',
                'testi_subtitle' => '(Columbia University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'undergraduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 3,
                'group' => 20230103,
                'testi_name' => 'Helena Helga',
                'testi_desc' => 'ALL-IN has helped me tremendously throughout my uni application endeavors. From brainstorming essay ideas to editing the essays, to helping find internships, ALL-in has made the process so easy while ensuring my uni application is of top-notch quality. Also, the mentors are really hip and cool, so they’re really approachable!',
                'testi_subtitle' => '(Penn State University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'undergraduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 4,
                'group' => 20230103,
                'testi_name' => 'Helena Helga',
                'testi_desc' => 'ALL-in telah sangat membantu saya selama proses aplikasi universitas saya. Dari brainstorming ide dan mengedit esai, sampai membantu menemukan magang, ALL-in telah membuat prosesnya begitu mudah sambil memastikan aplikasi saya memiliki kualitas terbaik. Para mentornya juga sangat keren, jadi mereka sangat mudah didekati dan diajak berdiskusi!',
                'testi_subtitle' => '(Penn State University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'undergraduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 5,
                'group' => 20230104,
                'testi_name' => 'Nathasya Tiaraputri',
                'testi_desc' => 'ALL-IN has helped me tremendously throughout my uni application endeavors. From brainstorming essay ideas to editing the essays, to helping find internships, ALL-in has made the process so easy while ensuring my uni application is of top-notch quality. Also, the mentors are really hip and cool, so they’re really approachable!',
                'testi_subtitle' => '(Hong Kong University of Science and Technology)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'undergraduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 6,
                'group' => 20230104,
                'testi_name' => 'Nathasya Tiaraputri',
                'testi_desc' => 'ALL-in benar-benar membuka mata saya. Ketika masih kelas 11, saya masih mencoba mencari jurusan yang ingin saya ambil, dan setelah bertemu mentor saya untuk pertama kalinya dan mulai berdiskusi, saya menyadari bahwa ada begitu banyak langkah dalam aplikasi untuk masuk universitas! Saya pikir saya hanya perlu mengirimkan rapor, nilai A-level saya nanti dan "esai", bahkan tidak tahu perbedaan antara pernyataan pribadi dan esai atau CV. Jadi saya pasti merasa lebih nyaman selama kelas 12 mengetahui bahwa saya berada di jalur yang benar, dan saya tidak perlu terlalu panik karena pertanyaan apa pun yang saya ajukan langsung ke mentor saya!',
                'testi_subtitle' => '(Hong Kong University of Science and Technology)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'undergraduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 7,
                'group' => 20230105,
                'testi_name' => 'Dian Ariesta',
                'testi_desc' => 'My mentor and her team helped me shape my Harvard admission essay into perfection. Thanks to the team’s creative and technical insights, I was able to express who I am and emphasize my achievements in a concise and well-articulated essay. I highly recommend the services of ALL-in!',
                'testi_subtitle' => '(Harvard University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'graduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 8,
                'group' => 20230105,
                'testi_name' => 'Dian Ariesta',
                'testi_desc' => 'Mentor saya dan timnya membantu saya membentuk esai masuk Harvard saya menjadi sempurna. Berkat wawasan kreatif dan teknis tim, saya dapat mengungkapkan siapa saya dan menekankan pencapaian saya dalam esai yang ringkas dan diartikulasikan dengan baik. Saya sangat merekomendasikan layanan ALL-in!',
                'testi_subtitle' => '(Harvard University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'graduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 9,
                'group' => 20230106,
                'testi_name' => 'Sarah Sentoso',
                'testi_desc' => 'My mentor and her team helped me shape my Harvard admission essay into perfection. Thanks to the team’s creative and technical insights, I was able to express who I am and emphasize my achievements in a concise and well-articulated essay. I highly recommend the services of ALL-in!',
                'testi_subtitle' => '(LPDP Awardee; Columbia University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'graduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 10,
                'group' => 20230106,
                'testi_name' => 'Sarah Sentoso',
                'testi_desc' => 'Mentor saya dan timnya membantu saya membentuk esai masuk Harvard saya menjadi sempurna. Berkat wawasan kreatif dan teknis tim, saya dapat mengungkapkan siapa saya dan menekankan pencapaian saya dalam esai yang ringkas dan diartikulasikan dengan baik. Saya sangat merekomendasikan layanan ALL-in!',
                'testi_subtitle' => '(LPDP Awardee; Columbia University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'graduate',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 11,
                'group' => 20230108,
                'testi_name' => 'Carlix Andra Hasim',
                'testi_desc' => 'ALL-in Eduspace has contributed majorly to my admissions for BU. The amazing mentors have guided me from the very beginning. My mentor assisted me in planning the development of my experiences and resume which greatly impacted the college’s decision. She also offered her connections to help me achieve that goal. Not only that, she and the ALL-in essay editors also helped me greatly in writing my application essay. Overall I believe I wouldn’t be where I am without ALL-in!',
                'testi_subtitle' => '(Shoreline Community College → Boston University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'univ transfer',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 12,
                'group' => 20230108,
                'testi_name' => 'Carlix Andra Hasim',
                'testi_desc' => 'Mentor saya dan timnya membantu saya membentuk esai masuk Harvard saya menjadi sempurna. Berkat wawasan kreatif dan teknis tim, saya dapat mengungkapkan siapa saya dan menekankan pencapaian saya dalam esai yang ringkas dan diartikulasikan dengan baik. Saya sangat merekomendasikan layanan ALL-in!',
                'testi_subtitle' => '(Shoreline Community College → Boston University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'univ transfer',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 13,
                'group' => 20230109,
                'testi_name' => 'Kenneth Sutedjo',
                'testi_desc' => 'ALL-in Eduspace has contributed majorly to my admissions for BU. The amazing mentors have guided me from the very beginning. My mentor assisted me in planning the development of my experiences and resume which greatly impacted the college’s decision. She also offered her connections to help me achieve that goal. Not only that, she and the ALL-in essay editors also helped me greatly in writing my application essay. Overall I believe I wouldn’t be where I am without ALL-in!',
                'testi_subtitle' => '(Shoreline Community College → Boston University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'univ transfer',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 14,
                'group' => 20230109,
                'testi_name' => 'Kenneth Sutedjo',
                'testi_desc' => 'Mentor saya dan timnya membantu saya membentuk esai masuk Harvard saya menjadi sempurna. Berkat wawasan kreatif dan teknis tim, saya dapat mengungkapkan siapa saya dan menekankan pencapaian saya dalam esai yang ringkas dan diartikulasikan dengan baik. Saya sangat merekomendasikan layanan ALL-in!',
                'testi_subtitle' => '(Shoreline Community College → Boston University)',
                'testi_category' => 'admission mentoring',
                'testi_subcategory' => 'univ transfer',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 15,
                'group' => 20230110,
                'testi_name' => 'Dave',
                'testi_desc' => 'Program ini menunjukkan kepadaku bahwa mengambil sains dapat membawa aku menjadi peneliti seperti yang ada di SCELSE atau A Star.',
                'testi_subtitle' => '(Science Research Program 2019)',
                'testi_category' => 'passion project mentoring',
                'testi_subcategory' => 'Science Research Program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 16,
                'group' => 20230110,
                'testi_name' => 'Dave',
                'testi_desc' => 'Program ini menunjukkan kepadaku bahwa mengambil sains dapat membawa aku menjadi peneliti seperti yang ada di SCELSE atau A Star.',
                'testi_subtitle' => '(Science Research Program 2019)',
                'testi_category' => 'passion project mentoring',
                'testi_subcategory' => 'Science Research Program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 17,
                'group' => 20230111,
                'testi_name' => 'Kezia Lauren',
                'testi_desc' => 'Program ini membantuku dalam mengeksplorasi bidang karir yang mungkin aku minati. Sekarang, aku tahu bagaimana rasanya menjadi seorang ilmuwan atau orang yang bekerja di laboratorium.',
                'testi_subtitle' => '(Science Research Program 2019)',
                'testi_category' => 'passion project mentoring',
                'testi_subcategory' => 'Science Research Program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 18,
                'group' => 20230111,
                'testi_name' => 'Kezia Lauren',
                'testi_desc' => 'Program ini membantuku dalam mengeksplorasi bidang karir yang mungkin aku minati. Sekarang, aku tahu bagaimana rasanya menjadi seorang ilmuwan atau orang yang bekerja di laboratorium.',
                'testi_subtitle' => '(Science Research Program 2019)',
                'testi_category' => 'passion project mentoring',
                'testi_subcategory' => 'Science Research Program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 19,
                'group' => 20230112,
                'testi_name' => 'Nayla',
                'testi_desc' => 'I like the program so much! It helps me understand better in class and my friends even like to gather at my desk and discuss Math with me at school now!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'academic tutoring',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 20,
                'group' => 20230112,
                'testi_name' => 'Nayla',
                'testi_desc' => 'I like the program so much! It helps me understand better in class and my friends even like to gather at my desk and discuss Math with me at school now!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'academic tutoring',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 21,
                'group' => 20230113,
                'testi_name' => 'Evangeline',
                'testi_desc' => 'It was nice! The tutor was nice working together with, easy going and helped me a lot!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'academic tutoring',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 22,
                'group' => 20230113,
                'testi_name' => 'Evangeline',
                'testi_desc' => 'It was nice! The tutor was nice working together with, easy going and helped me a lot!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'academic tutoring',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 23,
                'group' => 20230114,
                'testi_name' => 'Samuel Jovaren',
                'testi_desc' => ' The duration is perfectly fine with me, it&#039;s not too long but the tutor can cover all the materials!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'sat program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 24,
                'group' => 20230114,
                'testi_name' => 'Samuel Jovaren',
                'testi_desc' => ' The duration is perfectly fine with me, it&#039;s not too long but the tutor can cover all the materials!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'sat program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 25,
                'group' => 20230114,
                'testi_name' => 'Vincent Onggo',
                'testi_desc' => 'This program helped me a lot in improving my SAT score. Thank you!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'sat program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'en',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],
            (object)[
                'id' => 26,
                'group' => 20230114,
                'testi_name' => 'Vincent Onggo',
                'testi_desc' => 'This program helped me a lot in improving my SAT score. Thank you!',
                'testi_subtitle' => 'Grade 11',
                'testi_category' => 'academic test preparation',
                'testi_subcategory' => 'sat program',
                'testi_thumbnail' => 'https://dummyimage.com/600x400/000/fff',
                'testi_alt' => 'Testi alt 1',
                'testi_status' => 'active',
                'lang' => 'id',
                'created_at' => '2021-01-01 12:00:00',
                'updated_at' => '2021-01-01 12:00:00'
            ],

        ]);

        $admission_mentoring = $dummy_data->where('testi_category', 'admission mentoring')->where('lang', app()->getLocale())->where('testi_status', 'active');
        $experiential_learning = $dummy_data->where('testi_category', 'passion project mentoring')->where('lang', app()->getLocale())->where('testi_status', 'active');
        $academic_preparation = $dummy_data->where('testi_category', 'academic test preparation')->where('lang', app()->getLocale())->where('testi_status', 'active');

        return view('user.testimonial.main', [
            'admission_mentoring' => $admission_mentoring,
            'experiential_learning' => $experiential_learning,
            'academic_preparation' => $academic_preparation,
        ]);
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
        $mentor_videos = MentorVideos::where('mentor_id', $mentor->group)->get();

        return view('user.detail_mentor.main', [
            'mentor' => $mentor,
            'mentor_videos' => $mentor_videos
        ]);
    }
}
