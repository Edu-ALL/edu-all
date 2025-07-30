@extends('layout.user.landing_page')

@section('head')
    <title>SIGN ME</title>
    <meta name="title" content="SIGN ME" />
    <meta name="description"
        content="EduALL offers integrative uni-prep and mentoring for middle & high school students to foster a growth mindset, develop academic & life skills, and facilitate access to high-quality education globally and real-world experiences, all while having fun in the process." />
@endsection

@section('content')
    <section class="h-[80vh] relative overflow-hidden z-10">
        <img src="{{ asset('assets/img/sign-me/sat/banner.png') }}" alt="SAT"
            class="absolute md:h-auto h-[85vh] object-cover">
        <div class="new-main-container relative md:py-16 py-8 z-10">
            <div class="flex flex-col max-w-5xl mx-auto h-full gap-8 z-20 relative">
                <div class="flex flex-col md:flex-row items-stretch gap-8 md:gap-20">
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- EduALL Logo  --}}
                        <div class="h-16">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.webp') }}"
                                alt="EduAll logo" class="max-w-[100px] md:max-w-[120px] w-full md:mx-0 mx-auto">
                        </div>
                        {{-- About EduALL --}}
                        <div class="rounded-2xl h-full">
                            <div class="flex flex-col md:w-full w-[85%]">
                                <h3
                                    class="text-white text-lg md:text-5xl font-bold mb-3 font-newprimary text-left md:leading-[4rem]">
                                    TINGKATKAN SKOR SAT HINGGA
                                </h3>
                                <h2 class="text-white text-6xl md:text-7xl font-bold mb-3 font-newprimary text-left">
                                    200 POIN
                                </h2>
                                <p class="text-white text-base md:text-lg leading-relaxed md:text-justify text-left">
                                    Siapkan diri untuk tambahan hingga 200 poin dengan kelas persiapan SAT. Chase your dream
                                    university, today!
                                </p>
                                <div class="flex mt-5">
                                    <a href="#form"
                                        class="inline md:text-base text-[10px] bg-newyellow text-dark text-center py-2 px-8 rounded-xl font-bold">
                                        NAIKAN SKOR SAT KAMU SEKARANG
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        <img src="{{ asset('assets/img/sign-me/sat/kaylee.png') }}" alt="Kaylee Husni"
                            class="w-[52%] absolute bottom-0 right-0 md:block hidden">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/sign-me/sat/kaylee-mobile.png') }}" alt="Kaylee Husni"
            class="w-[90%] absolute bottom-0 right-0 md:hidden block">
    </section>

    <section class="md:mt-0">
        <div class="flex md:flex-row flex-col items-stretch">
            <div class="md:w-3/12 w-full bg-black text-white text-center md:py-5 py-3 px-10">
                <p class="font-bold md:text-xl text-base">
                    NEGARA TUJUAN
                </p>
            </div>
            <div class="md:w-9/12 w-full overflow-auto">
                <div
                    class="flex flex-nowrap h-full items-center md:justify-center justify-start md:px-10 px-5 py-5 md:gap-20 gap-[3rem]">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/img/sign-me/sat/us.png') }}" alt="US" class="md:w-[45px] w-[30px]">
                        <p class="font-bold md:text-xl text-base" style="text-wrap:nowrap;">
                            UNITED STATES
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/img/sign-me/sat/uk.png') }}" alt="UK" class="md:w-[45px] w-[30px]">
                        <p class="font-bold md:text-xl text-base" style="text-wrap:nowrap;">
                            UNITED KINGDOM
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/img/sign-me/sat/au.png') }}" alt="AUSTRALIA"
                            class="md:w-[45px] w-[30px]">
                        <p class="font-bold md:text-xl text-base" style="text-wrap:nowrap;">
                            AUSTRALIA
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/img/sign-me/sat/china.png') }}" alt="CHINA"
                            class="md:w-[45px] w-[30px]">
                        <p class="font-bold md:text-xl text-base" style="text-wrap:nowrap;">
                            CHINA &nbsp; &nbsp;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 md:bg-[#EFEFEF]">
        <div class="new-main-container">
            <h2 class="font-newprimary text-2xl md:text-3xl font-bold text-center mt-5 leading-6 mb-12 text-newprimary md:px-0 px-10">
                Kenaikan Skor SAT Mentee EduALL
            </h2>
            <div class="flex flex-wrap items-center justify-center md:gap-8 gap-2 w-full">
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-[300px] md:w-64 bg-black py-2 px-4 mb-4 rounded-xl">
                        <h3 class="text-white text-lg">
                            Vaneea Phallasa
                        </h3>
                        <div class="flex justify-between items-center my-2">
                            <p class="text-white text-xl">
                                1310
                            </p>
                            <img src="{{ asset('assets/img/sign-me/sat/arrow.png') }}" alt="SAT" class="w-[50px]">
                            <p class="text-white text-3xl font-bold">
                                1400
                            </p>
                        </div>
                        <hr class="border-2 border-white w-full">
                        <div class="bg-newprimary text-white text-lg font-bold w-full text-center my-2">
                            + 90 SAT Points
                        </div>
                        <small class="italic text-[10px] text-white">
                            SAT Score (Maxium score 1600)
                        </small>
                    </div>
                </div>
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-[300px] md:w-64 bg-black py-2 px-4 mb-4 rounded-xl">
                        <h3 class="text-white text-lg">
                            Jaslene Orianna Yang
                        </h3>
                        <div class="flex justify-between items-center my-2">
                            <p class="text-white text-xl">
                                1380
                            </p>
                            <img src="{{ asset('assets/img/sign-me/sat/arrow.png') }}" alt="SAT" class="w-[50px]">
                            <p class="text-white text-3xl font-bold">
                                1500
                            </p>
                        </div>
                        <hr class="border-2 border-white w-full">
                        <div class="bg-newprimary text-white text-lg font-bold w-full text-center my-2">
                            + 120 SAT Points
                        </div>
                        <small class="italic text-[10px] text-white">
                            SAT Score (Maxium score 1600)
                        </small>
                    </div>
                </div>
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-[300px] md:w-64 bg-black py-2 px-4 mb-4 rounded-xl">
                        <h3 class="text-white text-lg">
                            Alexandra Martina
                        </h3>
                        <div class="flex justify-between items-center my-2">
                            <p class="text-white text-xl">
                                1280
                            </p>
                            <img src="{{ asset('assets/img/sign-me/sat/arrow.png') }}" alt="SAT" class="w-[50px]">
                            <p class="text-white text-3xl font-bold">
                                1470
                            </p>
                        </div>
                        <hr class="border-2 border-white w-full">
                        <div class="bg-newprimary text-white text-lg font-bold w-full text-center my-2">
                            + 190 SAT Points
                        </div>
                        <small class="italic text-[10px] text-white">
                            SAT Score (Maxium score 1600)
                        </small>
                    </div>
                </div>
                <div class="shadow-clip flex flex-col items-center relative">
                    <div class="h-full w-[300px] md:w-64 bg-black py-2 px-4 mb-4 rounded-xl">
                        <h3 class="text-white text-lg">
                            Josephine Aurelia
                        </h3>
                        <div class="flex justify-between items-center my-2">
                            <p class="text-white text-xl">
                                1300
                            </p>
                            <img src="{{ asset('assets/img/sign-me/sat/arrow.png') }}" alt="SAT" class="w-[50px]">
                            <p class="text-white text-3xl font-bold">
                                1460
                            </p>
                        </div>
                        <hr class="border-2 border-white w-full">
                        <div class="bg-newprimary text-white text-lg font-bold w-full text-center my-2">
                            + 160 SAT Points
                        </div>
                        <small class="italic text-[10px] text-white">
                            SAT Score (Maxium score 1600)
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="py-8 bg-[#fff]">
        <div class="new-main-container">
            <h2 class="font-newprimary text-2xl md:text-3xl font-bold text-center mt-10 leading-6 mb-12 text-newprimary md:px-0 px-10">
                Tingkatkan Skor SAT-mu Hari Ini!
            </h2>

            <div class="flex md:flex-row flex-col flex-wrap items-stretch justify-center w-full">
                <div class="shadow-clip flex flex-col h-full items-center relative z-40">
                    <div
                        class="h-[180px] w-[250px] md:w-72 bg-white text-center py-8 md:pr-10 mb-4 md:clip-hex-right clip-hex-bottom">
                        <h3 class="text-newprimary text-6xl font-bold mb-3">
                            1
                        </h3>
                        <h4 class="text-xl font-bold leading-5">
                            <p class="text-red">FREE</p>
                            Placement Test
                        </h4>
                    </div>
                </div>

                <div class="shadow-clip flex flex-col h-full items-center md:-ml-[40px] md:mt-0 -mt-[40px] relative z-30">
                    <div
                        class="h-[180px] w-[250px] md:w-72 bg-white text-center py-8 md:pr-5 mb-4 md:clip-hex-right clip-hex-bottom">
                        <h3 class="text-newprimary text-6xl font-bold mb-3">
                            2
                        </h3>
                        <h4 class="text-xl font-bold leading-5">
                            Assigined to <br> Recommended <br> Class
                        </h4>
                    </div>
                </div>

                <div class="shadow-clip flex flex-col h-full items-center md:-ml-[40px] md:mt-0 -mt-[40px] relative z-20">
                    <div
                        class="h-[180px] w-[250px] md:w-72 bg-white text-center py-8 md:pr-5 mb-4 md:clip-hex-right clip-hex-bottom">
                        <h3 class="text-newprimary text-6xl font-bold mb-3">
                            3
                        </h3>
                        <h4 class="text-xl font-bold leading-5">
                            Start Your <br> SAT Class
                        </h4>
                    </div>
                </div>

                <div class="shadow-clip flex flex-col h-full items-center md:-ml-[40px] md:mt-0 -mt-[40px] relative z-10">
                    <div
                        class="h-[180px] w-[250px] md:w-72 bg-white text-center py-8 md:pr-5 mb-4 md:clip-hex-right clip-hex-bottom">
                        <h3 class="text-newprimary text-6xl font-bold mb-3">
                            4
                        </h3>
                        <h4 class="text-xl font-bold leading-5">
                            Watch Your SAT <br> Score Increased
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
                                <p class="text-white text-2xl md:text-4xl mb-5 font-newprimary md:text-left text-center">
                                    Daftar Kelas Persiapan SAT Test Hari Ini
                                </p>
                                <h2
                                    class="text-[#FED017] text-2xl md:text-5xl font-bold mb-3 font-newprimary md:text-left text-center">
                                    Harga Special Mulai Dari <span
                                        class="text-[#FED017]/80 md:text-3xl text-xl font-normal line-through ">10 Juta</span> <br>
                                    6 Juta
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

    <section class="md:py-16 py-8 overflow-clip" id="form">
        <div class="new-main-container relative z-10">
            <div class="flex flex-col max-w-4xl mx-auto h-full gap-8 z-20 relative">
                <table class="w-full border-0">
                    <tr class=" text-white font-bold md:text-md text-[12px]">
                        <th class="bg-[#393636] rounded-l-lg border-0 py-5" width="30%">TIER</th>
                        <th class="bg-[#393636]  border-0 py-5" width="30%">DIAGNOSTIC SCORE RANGE</th>
                        <th class="bg-[#393636] rounded-r-lg border-0 py-5" width="40%">TOTAL HOURS (PREP + MOCK)</th>
                    </tr>
                    <tr class="font-bold md:text-lg text-[14px]">
                        <th class="rounded-l-lg border-0 py-5">SAT FUNDAMENTALS</th>
                        <th class=" border-0 py-5">
                            < 1200</th>
                        <th class="rounded-r-lg border-0 py-5">20 Prep + 4 Mock Test</th>
                    </tr>
                    <tr class="md:text-md text-[12px] text-center">
                        <td class="bg-[#DDDDFF] rounded-lg border-0 py-3" colspan="3">
                            Mulai dari dasar-dasar konsep cocok untuk murid yang belum punya paham konsep soal.
                        </td>
                    </tr>

                    <tr class="font-bold md:text-lg text-[14px]">
                        <th class="rounded-l-lg border-0 py-5">SAT INTERMEDIATE</th>
                        <th class=" border-0 py-5">
                            1200 - 1340
                        </th>
                        <th class="rounded-r-lg border-0 py-5">14 Prep + 2 Mock Test</th>
                    </tr>
                    <tr class="md:text-md text-[12px] text-center">
                        <td class="bg-[#DDDDFF] rounded-lg border-0 py-3" colspan="3">
                            Perbaiki pemahaman konsep dan latih trik soal untuk quick fix
                        </td>
                    </tr>

                    <tr class="font-bold md:text-lg text-[14px]">
                        <th class="rounded-l-lg border-0 py-5">SAT PRO</th>
                        <th class=" border-0 py-5">
                            1350 - 1450+
                        </th>
                        <th class="rounded-r-lg border-0 py-5">12 Prep + 2 Mock Test</th>
                    </tr>
                    <tr class="md:text-md text-[12px] text-center">
                        <td class="bg-[#DDDDFF] rounded-lg border-0 py-3" colspan="3">
                            Fokus ke strategi dan latihan intensif untuk mempertajam hasil akhir
                        </td>
                    </tr>
                </table>

                <div class="flex justify-center my-5">
                    <a href="#form" class="bg-[#FED017] inline px-8 text-center py-2 rounded-xl uppercase font-bold md:text-base text-[14px]">
                        TAKE YOUR FREE PLACEMENT TEST NOW!
                    </a>
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
                'interest_prog': "SATPRIV",
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
                    url: '{{ env('CRM_DOMAIN') }}register/public',
                    type: 'POST', // Specify the request type (POST)
                    contentType: 'application/json', // Set content type to JSON
                    data: JSON.stringify(formData), // Convert formData to a JSON string
                    success: function(response) {
                        // Handle the response on success
                        loadingIcon.classList.add('hidden')
                        sendIcon.classList.remove('hidden')

                        location.href =
                            "https://edu-all.com/thanks/sat";
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.error(error);
                        loadingIcon.classList.add('hidden')
                        sendIcon.classList.remove('hidden')
                    }
                });
            } else {
                loadingIcon.classList.add('hidden')
                sendIcon.classList.remove('hidden')
            }

            return true;
        }
    </script>
@endpush
