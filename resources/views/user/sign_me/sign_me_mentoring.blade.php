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
    <section class="md:py-16 py-8 overflow-clip bg-[#000099]">
        <div class="new-main-container relative z-10">
            <div class="circular-gradient-1 absolute z-10 -top-40 -left-full md:-left-1/3 md:-top-1/3 h-[1000px] w-[1000px] md:h-[1000px] md:w-[1000px]"
                style="border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 0, 255, 0.5) 0%, rgba(0, 0, 255, 0.3) 20%, rgba(0, 0, 255, 0.1) 50%, rgba(0, 0, 0, 0) 75%);
            filter: blur(50px);">
            </div>
            <div class="circular-gradient-2 absolute z-10 -right-full top-96 md:-right-96 md:-top-1/3 h-[700px] w-[700px] md:h-[1000px] md:w-[1000px]"
                style="border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 0, 255, 0.3) 0%, rgba(0, 0, 255, 0.3) 20%, rgba(0, 0, 255, 0.3) 30%, rgba(0, 0, 0, 0) 75%);
            filter: blur(50px);">
            </div>
            <div class="flex flex-col max-w-4xl mx-auto h-full gap-8 z-20 relative">
                <div class="flex flex-col md:flex-row items-stretch gap-8 md:gap-20">
                    <div class="w-full gap-4 flex flex-col">
                        {{-- EduALL Logo  --}}
                        <div class="md:h-16 h-auto flex justify-center">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.webp') }}"
                                alt="EduAll logo" class="max-w-[120px] md:max-w-[160px] w-full h-auto md:mx-0 mx-auto">
                        </div>
                        {{-- About EduALL --}}
                        <div class="rounded-2xl h-full mt-2">
                            <div class="flex flex-col">
                                <h3
                                    class="text-white text-2xl md:text-4xl uppercase font-bold mb-3 font-newprimary text-center md:leading-[3rem]">
                                    @if ($lang == 'en')
                                        Your dream university won’t wait. <br>
                                        Start your uni app with EDUALL.
                                    @else
                                        UNIVERSITAS TOP DUNIA TIDAK AKAN MENUNGGUMU. <br>
                                        MULAI PERSIAPAN KULIAH BERSAMA EDUALL
                                    @endif
                                </h3>
                                <p class="text-white text-base md:text-xl leading-relaxed text-center">
                                    @if ($lang == 'en')
                                        Join us and discover the strategies that get you into best-fit universities.
                                    @else
                                        Temukan strategi tepat untuk masuk universitas sesuai dengan potensi anak.
                                    @endif
                                </p>
                                <div class="flex justify-center mt-5">
                                    <a href="#form"
                                        class="inline bg-newyellow text-dark text-center py-2 px-4 rounded-xl">
                                        <span id="send_header">
                                            <i class="fas fa-paper-plane mr-4"></i>
                                        </span>
                                        <span id="loading_header" class="hidden">
                                            <i class="fas fa-spinner fa-spin mr-4"></i>
                                        </span>
                                        PLAN YOUR FUTURE NOW!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="new-main-container">
            <h2 class="font-newprimary text-2xl md:text-3xl font-bold text-center mt-2 leading-4 mb-12 text-newprimary">
                What they say
            </h2>
            <div class="flex flex-col sm:flex-row items-stretch justify-center w-full max-w-4xl mx-auto flex-wrap">
                <div class="md:w-1/2 w-full h-100 p-2">
                    <div class="flex border-2 rounded-xl p-2 items-center gap-5">
                        <div class="w-1/4">
                            <img data-src="{{ asset('assets/img/sign-me/sign-me-mentoring/testi1.png') }}"
                                alt="EduALL - ilustration" class="w-full object-contain lazyload">
                        </div>
                        <div class="w-3/4 text-[13px] text-gray-600">
                            <p class="italic">
                                @if ($lang == 'en')
                                    Before EduALL, I didn’t even know where to begin. Thanks to my mentor, I got into my
                                    dream university AND I also discovered what I truly wanted to be.
                                @else
                                    Sebelum jadi mentee EduALL, aku masih belum tau harus mulai persiapan kuliah gimana.
                                    Tapi
                                    berkat mentorku, aku diterima di universitas impian yang sesuai dengan passionku.
                                @endif
                            </p>
                            <strong class="block mt-3">
                                Tiffany Ali
                            </strong>
                            <strong>
                                University of Sydney
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full h-100 p-2">
                    <div class="flex border-2 rounded-xl p-2 items-center gap-5">
                        <div class="w-1/4">
                            <img data-src="{{ asset('assets/img/sign-me/sign-me-mentoring/testi2.png') }}"
                                alt="EduALL - ilustration" class="w-full object-contain lazyload">
                        </div>
                        <div class="w-3/4 text-[13px] text-gray-600">
                            <p class="italic">
                                @if ($lang == 'en')
                                    I've always dreamed of getting accepted into the Ivy League. Two years with EduALL, and
                                    here I am.
                                @else
                                    Dari dulu mau banget masuk Ivy League. Untungnya setelah dua tahun jadi mentee di EduALL
                                    sekarang aku bisa masuk University of Pennsylvania seperti mimpiku.
                                @endif
                            </p>
                            <strong class="block mt-3">
                                Morgan Wiradharma
                            </strong>
                            <strong>
                                University of Pennsylvania
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full h-100 p-2">
                    <div class="flex border-2 rounded-xl p-2 items-center gap-5">
                        <div class="w-1/4">
                            <img data-src="{{ asset('assets/img/sign-me/sign-me-mentoring/testi3.png') }}"
                                alt="EduALL - ilustration" class="w-full object-contain lazyload">
                        </div>
                        <div class="w-3/4 text-[13px] text-gray-600">
                            <p class="italic">
                                @if ($lang == 'en')
                                    I didn’t realize how important early preparation was until EduALL stepped in. They
                                    didn't just guide my child, they helped her achieve her dream.
                                @else
                                    Saya gatau kalau persiapan sejak dini buat kuliah itu penting. Untung ketemu EduALL,
                                    mereka yang akhirnya bimbing dan bantu anak saya buat kuliah di kampus idaman.
                                @endif
                            </p>
                            <strong class="block mt-3">
                                {{ $lang == 'en' ? '' : 'Ibu' }}
                                Feni Rose
                            </strong>
                            <strong>
                                {{ $lang == 'en' ? 'Parents of ' : 'Mama' }}
                                Audi Herman
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full h-100 p-2">
                    <div class="flex border-2 rounded-xl p-2 items-center gap-5 h-full">
                        <div class="w-1/4">
                            <img data-src="{{ asset('assets/img/sign-me/sign-me-mentoring/testi4.png') }}"
                                alt="EduALL - ilustration" class="w-full object-contain lazyload">
                        </div>
                        <div class="w-3/4 text-[13px] text-gray-600">
                            <p class="italic">
                                @if ($lang == 'en')
                                    As a mom, I just want the best for my child but I didn’t know where to start until we
                                    found EduALL. Now my son is preparing university application process with his mentor.
                                @else
                                    Sebagai orang tua, udah pasti saya mau yang terbaik untuk anak. Awalnya bingung, tapi
                                    setelah bareng EduALL uni app process jadi jelas.
                                @endif
                            </p>
                            <strong class="block mt-3">
                                {{ $lang == 'en' ? '' : 'Ibu' }}
                                Tiara
                            </strong>
                            <strong>
                                {{ $lang == 'en' ? 'Parents of ' : 'Mama' }}
                                Zack
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 md:bg-[#EFEFEF] bg-gradient-to-b from-[#EFEFEF] to-transparent">
        <div class="new-main-container">
            <h2 class="font-newprimary text-2xl md:text-3xl font-bold text-center mt-2 leading-4 mb-3 text-newprimary">
                How we mentor our mentees
            </h2>
            <p class="font-newprimary text-base md:text-xl mb-12 text-center">
                1-on-1 support for full university application process
            </p>
            <div class="flex flex-wrap items-center justify-center gap-8 w-full">
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-36 md:w-48 bg-white flex flex-col items-center justify-start py-8 mb-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                        <div class="h-12 mb-2">
                            <img data-src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/benefit-0.png') }}"
                                alt="EduALL" class="w-full h-full object-center object-contain lazyload">
                        </div>
                        <h4 class="font-newprimary text-xs md:text-base font-bold text-center mt-2 leading-4">
                            Interest Exploration
                        </h4>
                    </div>
                </div>
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-36 md:w-48 bg-white flex flex-col items-center justify-start py-8 mb-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                        <div class="h-12 mb-2">
                            <img data-src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/benefit-1.png') }}"
                                alt="EduALL" class="w-full h-full object-center object-contain lazyload">
                        </div>
                        <h4 class="font-newprimary text-xs md:text-base font-bold text-center mt-2 leading-4">
                            Profile Building
                        </h4>
                    </div>
                </div>
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-36 md:w-48 bg-white flex flex-col items-center justify-start py-8 mb-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                        <div class="h-12 mb-2">
                            <img data-src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/benefit-2.png') }}"
                                alt="EduALL" class="w-full h-full object-center object-contain lazyload">
                        </div>
                        <h4 class="font-newprimary text-xs md:text-base font-bold text-center mt-2 leading-4">
                            Essay Writing
                        </h4>
                    </div>
                </div>
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-36 md:w-48 bg-white flex flex-col items-center justify-start py-8 mb-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                        <div class="h-12 mb-2">
                            <img data-src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/benefit-3.png') }}"
                                alt="EduALL" class="w-full h-full object-center object-contain lazyload">
                        </div>
                        <h4 class="font-newprimary text-xs md:text-[14px] font-bold text-center mt-2 leading-4">
                            University Application Strategy
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-16 py-8 overflow-clip bg-[#1E1E1E]" id="form">
        <div class="new-main-container relative z-10">
            <div class="flex flex-col max-w-4xl mx-auto h-full gap-8 z-20 relative">
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-20">
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- About EduALL --}}
                        <div class="rounded-2xl h-full mt-2">
                            <div class="flex flex-col">
                                <h2
                                    class="text-white text-xl md:text-4xl font-bold mb-3 font-newprimary md:text-left text-center">

                                    Fill the form to get a <span class="text-newyellow">free consultation</span>
                                    & connect with our <span class="text-newyellow"> mentor </span>
                                </h2>

                                <div class="mt-[5rem] md:block hidden">
                                    <img src="{{ asset('assets/img/sign-me/Arrow.png') }}" alt="EduALL - ilustration"
                                        class="w-full object-contain" lazy="loading">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 bg-[#1E1E1E] rounded-xl w-full h-full border-newyellow border-2">
                            <div id="myForm_footer" class="h-full">
                                <div class="mt-5 h-full">
                                    <div class="flex flex-col justify-between h-full">
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
                                                Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-16 py-8 overflow-clip">
        <div class="new-main-container relative z-10">
            <div class="flex flex-col max-w-4xl mx-auto h-full gap-8 z-20 relative">
                <div class="flex flex-col md:flex-row items-stretch gap-8">
                    <div class="w-full gap-4 flex flex-col justify-center order-2 md:order-1">
                        {{-- About EduALL --}}
                        <div class="py-8 px-6 h-full mt-2 text-center">
                            <div class="flex flex-col">
                                <h3 class="text-newprimary text-3xl md:text-3xl font-bold mb-3 font-newprimary">
                                    What is EduALL?
                                </h3>
                                <p class="text-dark text-sm leading-relaxed">
                                    @if ($lang == 'en')
                                        EduALL is a trusted university prep and mentoring platform that supports middle and
                                        high school students in building academic skills, a growth mindset, and access to
                                        top global universities. With personalized one-on-one mentoring and expert guidance,
                                        and every year, 100% of our mentees have been accepted into top universities across
                                        the US, UK, Canada, Asia, and Australia.
                                    @else
                                        EduALL adalah platform persiapan kuliah dan mentoring yang mendukung siswa SMP dan
                                        SMA
                                        untuk mengembangkan keterampilan akademik, pola pikir, profil dan akses menuju
                                        universitas terbaik di dunia.
                                        Dengan bimbingan personal dan mentor berpengalaman, 100% siswa EduALL berhasil
                                        diterima
                                        di universitas top dunia setiap tahunnya, termasuk di Amerika Serikat, Inggris,
                                        Kanada,
                                        Asia, dan Australia.
                                    @endif
                                </p>
                                <strong class="my-5">
                                    Our Mentees get accepted to 200+ universities in the US, UK, Canada, Asia & Australia
                                </strong>

                                <img src="{{ asset('assets/img/sign-me/Univ.png') }}" alt="EduALL - ilustration"
                                    class="w-full object-contain" lazy="loading">

                                <div class="flex justify-center mt-5">
                                    <a href="#form"
                                        class="bg-newprimary text-white inline px-4 text-center py-2 rounded-xl">
                                        <span id="send_footer">
                                            <i class="fas fa-paper-plane mr-4"></i>
                                        </span>
                                        <span id="loading_footer" class="hidden">
                                            <i class="fas fa-spinner fa-spin mr-4"></i>
                                        </span>
                                        Secure your dream now!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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
                return true;
            }
        }
    </script>
@endpush
