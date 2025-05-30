@extends('layout.user.landing_page')

@section('head')
    <title>SIGN ME</title>
    <meta name="title" content="SIGN ME" />
    <meta name="description"
        content="EduALL offers integrative uni-prep and mentoring for middle & high school students to foster a growth mindset, develop academic & life skills, and facilitate access to high-quality education globally and real-world experiences, all while having fun in the process." />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JXRKLPRKWF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-JXRKLPRKWF');
        // gtag('config', 'AW-329409030')
    </script>

    <!-- Event snippet for Admission-id Leads conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            gtag('event', 'Conversion - Mentoring', {
                'send_to': 'AW-329409030/llL7CPKF0pgYEIbEiZ0B',
                // 'event_callback': callback
            });

            return false;
        }
    </script>
@endsection

@section('content')
    <section class="md:py-16 py-8 overflow-clip">
        <div class="new-main-container relative z-10">
            <div
                class="circular-gradient-1 absolute z-10 -top-40 -left-full md:-left-1/3 md:-top-1/3 h-[1000px] w-[1000px] md:h-[1000px] md:w-[1000px]">
            </div>
            <div
                class="circular-gradient-2 absolute z-10 -right-full bottom-96 md:-right-96 md:-bottom-1/3 h-[700px] w-[700px] md:h-[1000px] md:w-[1000px]">
            </div>
            <div class="circular-gradient-2 absolute z-10 md:hidden -left-96 -bottom-40 h-[700px] w-[700px] "></div>
            <div class="flex flex-col max-w-4xl mx-auto h-full gap-8 z-20 relative">
                <div class="flex flex-col md:flex-row items-stretch gap-8">
                    <div class="md:w-7/12 w-full gap-4 flex flex-col order-2 md:order-1">
                        {{-- EduALL Logo  --}}
                        <div class="h-16 md:block hidden">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-logo.webp') }}" alt="EduAll logo"
                                class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                        </div>
                        {{-- About EduALL --}}
                        <div class="border-[0.5px] border-[#6D6D6D] rounded-2xl py-8 px-6 h-full mt-2">
                            <div class="flex flex-col">
                                <h3 class="text-newprimary text-3xl md:text-3xl font-bold mb-3 font-newprimary">Kenapa
                                    Ratusan Orang Tua
                                    Memilih EduALL?
                                </h3>
                                <p class="text-dark text-sm leading-relaxed text-justify">
                                    EduALL adalah platform mentoring dan persiapan kuliah yang mendukung siswa SMP dan SMA
                                    mengembangkan keterampilan akademik, growth mindset, dan akses pendidikan berkualitas di
                                    dunia. Dengan bimbingan mentor berpengalaman, EduALL berhasil mengantarkan <b>100% siswa
                                        diterima di universitas top dunia</b> setiap tahun — termasuk di <b>Amerika Serikat,
                                        Kanada,
                                        Inggris, Asia, Australia,</b> dan berbagai negara lainnya.
                                </p>
                                <div class="grid grid-cols-3 mt-6 justify-center place-items-center items-start">
                                    {{-- Acceptance --}}
                                    <div class="flex flex-col md:w-auto w-[50%] justify-center items-center">
                                        <h4 class="font-bold text-newprimary text-xl md:text-3xl text-center">
                                            100%
                                        </h4>
                                        <h6 class="font-bold text-dark text-banner-subdescription text-center">
                                            Acceptance
                                        </h6>
                                        <span class="font-light text-dark text-banner-subdescription text-center">
                                            at Best-Fit Universities
                                        </span>
                                    </div>
                                    {{-- Mentees --}}
                                    <div class="flex flex-col justify-center items-center">
                                        <h4 class="font-bold text-newprimary text-xl md:text-3xl text-center">
                                            800+
                                        </h4>
                                        <h6 class="font-bold text-dark text-banner-subdescription text-center">
                                            Mentees
                                        </h6>
                                    </div>
                                    {{-- Scholarship --}}
                                    <div class="flex flex-col justify-center items-center">
                                        <h4 class="font-bold text-newprimary text-xl md:text-3xl text-center">
                                            $1 Million+
                                        </h4>
                                        <h6 class="font-bold text-dark text-banner-subdescription text-center">
                                            in Scholarship
                                        </h6>
                                        <span class="font-light text-dark text-banner-subdescription text-center">
                                            Awards
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-5/12 w-full gap-4 flex flex-col order-1 md:order-2">
                        {{-- EduALL Logo  --}}
                        <div class="md:hidden">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-logo.webp') }}" alt="EduAll logo"
                                class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                        </div>
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 border-[0.5px] bg-[#1E1E1E] rounded-xl w-full h-full">
                            <div id="myForm_header" class="h-full">
                                <div class="mt-5 h-full">
                                    <div class="flex flex-col justify-between h-full pb-8">
                                        <div class="flex flex-col">
                                            <div class="mb-5">
                                                <div class="flex gap-10">
                                                    <div class="flex items-center">
                                                        <input type="radio" name="roles_header" value="student"
                                                            id="student_header" checked required
                                                            onchange="checkRole('_header')">
                                                        <label for="student" class="text-newyellow ml-2">Student</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input type="radio" name="roles_header" value="parent"
                                                            id="parent_header" required onchange="checkRole('_header')">
                                                        <label for="parent" class="text-newyellow ml-2">Parent</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">

                                                <input type="text" class="py-2 text-dark rounded-xl w-full"
                                                    placeholder="Full Name *" id="primary_name_header" required>
                                            </div>
                                            <div>
                                                <input type="text" class="py-2 text-dark rounded-xl w-full hidden mb-5"
                                                    placeholder="Child Name *" id="secondary_name_header" required>
                                            </div>
                                            <div class="mb-5">
                                                <input type="text" class="py-2 text-dark rounded-xl w-full"
                                                    placeholder="Phone Number *" id="phone_number_header" required>
                                            </div>
                                            <div class="mb-5">
                                                <input type="text" class="py-2 text-dark rounded-xl w-full"
                                                    placeholder="School Name *" id="school_name_header" required>
                                            </div>
                                            <div class="mb-5">
                                                <select class="py-2 text-dark rounded-xl w-full" id="graduation_year_header"
                                                    required>
                                                    <option class="text-gray-300" value="">Select Graduation Year
                                                    </option>
                                                    @for ($i = date('Y'); $i < date('Y') + 5; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="button"
                                                class="w-full bg-newyellow text-dark text-center py-2 rounded-xl"
                                                onclick="submit('_header')">
                                                <span id="send_header">
                                                    <i class="fas fa-paper-plane mr-4"></i>
                                                </span>
                                                <span id="loading_header" class="hidden">
                                                    <i class="fas fa-spinner fa-spin mr-4"></i>
                                                </span>
                                                Contact us now! </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-6 h-full mt-8">
                    <div class="flex flex-col items-center w-full">
                        <div class="flex md:flex-row flex-col gap-4 items-center justify-center">
                            <div class="flex flex-col md:w-1/3">
                                <h3
                                    class="text-[#393636] text-2xl md:text-3xl font-bold mb-3 font-newprimary md:text-left text-center">
                                    Apa Layanan
                                    yang
                                    Diberikan EduALL?
                                </h3>
                                <p class="text-dark text-sm leading-4 text-justify">
                                    Kami menawarkan layanan mentoring 1-on-1 yang dipersonalisasi untuk membantu siswa
                                    memahami proses masuk universitas, menemukan kampus yang paling cocok, dan mencapai
                                    impian mereka!
                                </p>
                            </div>
                            <div
                                class="flex flex-wrap items-center justify-evenly md:justify-center gap-8 max-w-2xl mx-auto w-full md:w-2/3">
                                @foreach (__('pages/programs/admission_mentoring.benefits') as $item)
                                    <div class="shadow-clip flex flex-col items-center">
                                        <div class="h-24 w-28 bg-white flex flex-col items-center justify-center py-4 mb-4"
                                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                                            <div class="h-12 relative">
                                                <img data-src="{{ asset('assets/img/admission mentoring/revamp/' . $item['image']) }}"
                                                    alt="EduALL - ilustration"
                                                    class="w-full h-full object-center object-cover lazyload">
                                                <div class="absolute -top-4 -right-4 ">
                                                    <div
                                                        class="h-4 w-4 bg-newprimary flex items-center justify-center rounded-full">
                                                        <i class="fa-solid fa-check fa-xs text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="font-newprimary text-dark text-sm font-bold text-center mt-2 leading-4">
                                            {{ $item['title'] }}
                                        </h4>
                                        <span
                                            class="font-newprimary text-dark text-sm font-normal text-center">{{ $item['tag'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex md:flex-row flex-col gap-4 mt-12 items-center justify-center">
                            <h3
                                class="text-[#393636] text-2xl md:text-3xl font-bold mb-3 font-newprimary md:text-left text-center">
                                Apa yang Akan
                                Anda Dapatkan?
                            </h3>
                            <div class="flex flex-wrap items-start justify-center gap-6 md:gap-4 mt-4 w-full">
                                <div class="flex flex-col items-center gap-3 justify-start">
                                    <img loading="lazy"
                                        src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-1.webp') }}"
                                        alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                    <span class="text-dark text-sm max-w-[120px] text-center">Mentoring Online
                                        atau Offline</span>
                                </div>
                                <div class="flex flex-col items-center gap-3 justify-start">
                                    <img loading="lazy"
                                        src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-2.webp') }}"
                                        alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                    <span class="text-dark text-sm max-w-[120px] text-center">Mentor Berpengalaman
                                        9 Tahun+</span>
                                </div>
                                <div class="flex flex-col items-center gap-3 justify-start">
                                    <img loading="lazy"
                                        src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-3.webp') }}"
                                        alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                    <span class="text-dark text-sm max-w-[120px] text-center">Panduan Essay
                                        Writing</span>
                                </div>
                                <div class="flex flex-col items-center gap-3 justify-start">
                                    <img loading="lazy"
                                        src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-4.webp') }}"
                                        alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                    <span class="text-dark text-sm max-w-[120px] text-center">Persiapan Interview
                                        dengan Mock Questions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-newprimary py-24">
        <div class="new-main-container">
            <div class="flex flex-col max-w-4xl mx-auto gap-8">
                <h4 class="uppercase text-xl md:text-2xl text-white font-semibold text-center">
                    800+ mentee Eduall lolos ke univERSITAS top dunia seperti ...
                </h4>
                <div class="flex items-center gap-4 flex-wrap justify-center">
                    @for ($i = 1; $i <= 19; $i++)
                        <div>
                            <img loading="lazy"
                                src="{{ asset('assets/img/sign-me/sign-me-mentoring/univ-logo/logo-' . $i . '.webp') }}"
                                alt="EduAll logo" class="w-24 md:mx-0 object-contain mx-auto">
                        </div>
                    @endfor
                    <span class="text-white text-base w-24">
                        dan masih banyak lagi
                    </span>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-8">
                    <div class="md:w-5/12 w-full gap-4 flex flex-col order-2 md:order-1">
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 bg-[#1E1E1E] rounded-xl w-full h-full">
                            <div id="myForm_footer" class="h-full">
                                <div class="mt-5 h-full">
                                    <div class="flex flex-col justify-between h-full pb-8">
                                        <div class="flex flex-col">
                                            <div class="mb-5">
                                                <div class="flex gap-10">
                                                    <div class="flex items-center">
                                                        <input type="radio" name="roles_footer" value="student"
                                                            id="student_footer" checked required
                                                            onchange="checkRole('_footer')">
                                                        <label for="student" class="text-newyellow ml-2">Student</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input type="radio" name="roles_footer" value="parent"
                                                            id="parent_footer" required onchange="checkRole('_footer')">
                                                        <label for="parent" class="text-newyellow ml-2">Parent</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">

                                                <input type="text" class="py-2 text-dark rounded-xl w-full"
                                                    placeholder="Full Name *" id="primary_name_footer" required>
                                            </div>
                                            <div>
                                                <input type="text" class="py-2 text-dark rounded-xl w-full hidden mb-5"
                                                    placeholder="Child Name *" id="secondary_name_footer" required>
                                            </div>
                                            <div class="mb-5">
                                                <input type="text" class="py-2 text-dark rounded-xl w-full"
                                                    placeholder="Phone Number *" id="phone_number_footer" required>
                                            </div>
                                            <div class="mb-5">
                                                <input type="text" class="py-2 text-dark rounded-xl w-full"
                                                    placeholder="School Name *" id="school_name_footer" required>
                                            </div>
                                            <div class="mb-5">
                                                <select class="py-2 text-dark rounded-xl w-full"
                                                    id="graduation_year_footer" required>
                                                    <option class="text-gray-300" value="">Select Graduation Year
                                                    </option>
                                                    @for ($i = date('Y'); $i < date('Y') + 5; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button"
                                                class="w-full bg-newyellow text-dark text-center py-2 rounded-xl"
                                                onclick="submit('_footer')">
                                                <span id="send_footer">
                                                    <i class="fas fa-paper-plane mr-4"></i>
                                                </span>
                                                <span id="loading_footer" class="hidden">
                                                    <i class="fas fa-spinner fa-spin mr-4"></i>
                                                </span>
                                                Contact us now! </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-7/12 w-full gap-4 flex flex-col order-1 md:order-2">
                        {{-- About EduALL --}}
                        <div class="border-newprimary rounded-2xl h-full relative overflow-hidden bg-white">
                            <div class="flex flex-col justify-start items-center gap-2 py-6 px-6 absolute inset-0">
                                <h5 class="uppercase text-xl md:text-2xl text-dark font-bold text-center">
                                    JADWALKAN KONSULTASI HARI INI
                                    DAN DAPATKAN GRATIS VOUCHER
                                </h5>
                                <img src="{{ asset('assets/img/sign-me/sign-me-mentoring/free-bonus.webp') }}"
                                    alt="free bonus" class="w-full">
                                <span class="uppercase text-sm md:text-lg text-dark text-center font-semibold">
                                    UNTUK ADMISSION MENTORING PROGRAM!
                                </span>
                            </div>
                            <img src="{{ asset('assets/img/sign-me/sign-me-mentoring/free-bonus-background-white.webp') }}"
                                alt="free bonus background" class="w-full h-[500px] md:min-h-fit object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @push('style')
    {{-- <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };
    </script>
@endpush --}}
@push('script')
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1067393485185284');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1067393485185284&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <script>
        const checkRole = (area = null) => {
            const role = document.querySelector('input[name="roles' + area + '"]:checked');
            const secondaryName = document.getElementById('secondary_name' + area);

            if (role.value === 'parent') {
                secondaryName.classList.remove('hidden')
            } else {
                secondaryName.classList.add('hidden')
                secondaryName.value = ''
            }
        }

        // const checkCaptcha = () => {
        //     var v = grecaptcha.getResponse();

        //     if (v.length == 0) {
        //         document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
        //         return false;
        //     } else {
        //         return true;
        //         // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
        //     }
        // }


        const submit = (area = null) => {
            // Get value
            const role = document.querySelector('input[name="roles' + area + '"]:checked');
            const primaryName = document.getElementById('primary_name' + area);
            const secondaryName = document.getElementById('secondary_name' + area);
            const phoneNumber = document.getElementById('phone_number' + area);
            const schoolName = document.getElementById('school_name' + area);
            const graduationYear = document.getElementById('graduation_year' + area);
            const loadingIcon = document.getElementById('loading' + area)
            const sendIcon = document.getElementById('send' + area)
            const formPage = document.getElementById('myForm' + area)


            loadingIcon.classList.remove('hidden')
            sendIcon.classList.add('hidden')

            const formData = {
                'role': role.value,
                'fullname': primaryName.value,
                'mail': null,
                'phone': phoneNumber.value,
                'secondary_name': secondaryName.value,
                'secondary_mail': null,
                'secondary_phone': null,
                'school_id': 'new',
                'other_school': schoolName.value,
                'graduation_year': graduationYear.value,
                'interest_prog': "AAUP",
                'destination_country': [],
                'lead_id': "LS079",
                'utm_content': "{{ request()->get('utm_content') ?? null }}"
            }

            const inputs = document.querySelectorAll('#myForm' + area + ' input, #myForm' + area + ' select');
            let isValid = true;

            // Loop through inputs and check for validation
            inputs.forEach(function(input) {
                if (input.required && !input.value && input.value != ' ' && !input.classList.contains(
                        'hidden')) {
                    isValid = false;
                    input.setCustomValidity('Please fill in required fields');
                    input.classList.add('border-red'); // Add red border to invalid inputs (optional)
                    input.classList.remove('border-green-500'); // Remove green border if any
                } else {
                    input.setCustomValidity('');
                    input.classList.remove('border-red');
                    input.classList.add('border-green-500');
                }
            });

            // If the form is valid, proceed with submission
            if (isValid) {
                // const captcha = area == '_header' ? checkCaptcha() : true;

                // if (captcha) {
                $.ajax({
                    url: '{{ env('CRM_DOMAIN') }}register/public', // Replace with the API endpoint
                    type: 'POST', // Specify the request type (POST)
                    contentType: 'application/json', // Set content type to JSON
                    data: JSON.stringify(formData), // Convert formData to a JSON string
                    success: function(response) {
                        // Handle the response on success
                        loadingIcon.classList.add('hidden')
                        sendIcon.classList.remove('hidden')

                        location.href =
                            "https://edu-all.com/thanks/mentoring";
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.error(error);
                        loadingIcon.classList.add('hidden')
                        sendIcon.classList.remove('hidden')
                    }
                });


                // } else {
                //     loadingIcon.classList.add('hidden')
                //     sendIcon.classList.remove('hidden')
                // }
                // } else {
                //     loadingIcon.classList.add('hidden')
                //     sendIcon.classList.remove('hidden')
                // }

                return true;
            }
        }
    </script>
@endpush
