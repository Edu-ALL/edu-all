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
            gtag('event', 'Conversion - SAT', {
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
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- EduALL Logo  --}}
                        <div class="h-16">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.webp') }}"
                                alt="EduAll logo" class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                        </div>
                        {{-- About EduALL --}}
                        <div class="rounded-2xl h-full mt-2">
                            <div class="flex flex-col">
                                <h2
                                    class="text-white text-6xl md:text-9xl font-bold mb-3 font-newprimary md:text-left text-center">
                                    SAT</h2>
                                <h3
                                    class="text-white text-2xl md:text-5xl font-bold mb-3 font-newprimary md:text-left text-center md:leading-[4rem]">
                                    PREPARATION
                                    CLASS
                                </h3>
                                <p class="text-white text-base md:text-xl leading-relaxed text-center md:text-justify">
                                    200+ students have already navigated to their best fit universities with stellar
                                    test scores. Now, it's your turn!
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 border-[0.5px] bg-white rounded-xl w-full h-full">
                            <div id="myForm_header">
                                <div class="mt-5">
                                    <div class="flex flex-col">
                                        <div class="mb-5">
                                            <div class="flex gap-10">
                                                <div class="flex items-center">
                                                    <input type="radio" name="roles_header" value="student"
                                                        id="student_header" checked required
                                                        onchange="checkRole('_header')">
                                                    <label for="student"
                                                        class="text-dark font-semibold ml-2">Student</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="radio" name="roles_header" value="parent"
                                                        id="parent_header" required onchange="checkRole('_header')">
                                                    <label for="parent"
                                                        class="text-dark font-semibold ml-2">Parent</label>
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
                                                <option class="text-gray-300" value="">Select Graduation Year</option>
                                                @for ($i = date('Y'); $i < date('Y') + 5; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
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
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="new-main-container">
            <div class="flex flex-wrap gap-8 justify-evenly items-center px-6 md:px-0">
                {{-- Acceptance --}}
                <div
                    class="flex md:flex-col justify-start md:justify-center items-center gap-6 border-b-[1px] border-b-dark md:border-b-0 md:gap-2 pb-8 w-full md:w-fit md:pb-0">
                    <h4 class="font-bold text-newprimary text-4xl w-32 md:w-40 md:text-5xl text-left md:text-center">
                        1,500+
                    </h4>
                    <span
                        class="text-dark text-banner-subdescription font-semibold text-left uppercase max-w-[12rem] md:text-center">
                        practice questions to take
                    </span>
                </div>
                {{-- Mentees --}}
                <div
                    class="flex md:flex-col justify-start md:justify-center items-center gap-6 border-b-[1px] border-b-dark md:border-b-0 md:gap-2 pb-8 w-full md:w-fit md:pb-0">
                    <h4 class="font-bold text-newprimary text-4xl w-32 md:w-40 md:text-5xl text-left md:text-center">
                        95%
                    </h4>
                    <span
                        class="text-dark text-banner-subdescription font-semibold text-left uppercase max-w-[12rem] md:text-center">
                        students hit above average score
                    </span>
                </div>
                {{-- Scholarship --}}
                <div class="flex md:flex-col justify-start md:justify-center items-center gap-6 md:gap-2 w-full md:w-fit">
                    <h4 class="font-bold text-newprimary text-4xl w-32 md:w-40 md:text-5xl text-left md:text-center">
                        90%
                    </h4>
                    <span
                        class="text-dark text-banner-subdescription font-semibold text-left uppercase max-w-[12rem] md:text-center">
                        got accepted
                        to their best fit universities
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 md:bg-[#EFEFEF] bg-gradient-to-b from-[#EFEFEF] to-transparent">
        <div class="new-main-container">
            <h2 class="font-newprimary text-2xl md:text-3xl font-bold text-center mt-2 leading-4 mb-12 text-newprimary">
                What
                you will get
            </h2>
            <div class="flex flex-wrap items-center justify-center gap-8 w-full">
                @foreach (__('pages/programs/sat_program.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center relative">
                        <div class="h-full w-36 md:w-48 bg-white flex flex-col items-center justify-start py-8 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-12 mb-2">
                                <img data-src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/' . $item['image']) }}"
                                    alt="EduALL - ilustration"
                                    class="w-full h-full object-center object-contain lazyload">
                            </div>
                            <h4 class="font-newprimary text-xs md:text-base font-bold text-center mt-2 leading-4">
                                {{ $item['title'] }}
                            </h4>
                            @if (isset($item['tag']))
                                <span
                                    class="font-newprimary text-xs md:text-base font-normal text-center">{{ $item['tag'] }}</span>
                            @else
                                <span class="h-6"></span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if ($price_page)
        <section class="py-8">
            <div class="new-main-container">
                @php
                    $sat_programs = [
                        [
                            'title' => 'SAT EXPRESS',
                            'tags' => [
                                ['label' => 'ONLINE', 'type' => 'online'],
                                ['label' => 'PRIVATE CLASS', 'type' => 'private'],
                            ],
                            'features' => [
                                [
                                    'title' => 'Quick SAT Readiness',
                                    'description' => 'Perfect for those taking the test soon.',
                                ],
                                [
                                    'title' => 'All Essential Knowledge Covered',
                                    'description' => 'Get all the SAT basics in one go.',
                                ],
                                [
                                    'title' => 'Time-Management Strategies',
                                    'description' =>
                                        'Master key techniques for the English & Math sections. (Including Desmos Calculator)',
                                ],
                            ],
                            'price' => 'Rp6.000.000',
                        ],
                        [
                            'title' => 'SAT FULL PREP',
                            'tags' => [
                                ['label' => 'ONLINE', 'type' => 'online'],
                                ['label' => 'PRIVATE CLASS', 'type' => 'private'],
                            ],
                            'features' => [
                                [
                                    'title' => 'Score Boost Focused',
                                    'description' => 'Ideal for students needing serious score improvement',
                                ],
                                [
                                    'title' => 'Full Curriculum Mastery',
                                    'description' => 'Covers everything from foundational to essential SAT material.',
                                ],
                                [
                                    'title' => 'For students who need to start from the basics in Math or English.',
                                    'description' => 'No prior skills needed',
                                ],
                            ],
                            'price' => 'Rp18.500.000',
                        ],
                    ];
                @endphp

                <div
                    class="flex flex-col sm:flex-row items-stretch justify-center gap-3 md:gap-8 w-full max-w-4xl mx-auto">
                    @foreach ($sat_programs as $program)
                        <div class="flex flex-col w-full sm:w-1/2 my-4">
                            <div
                                class="rounded-2xl bg-white p-6 flex flex-col gap-4 h-full shadow-[0_-4px_6px_-1px_rgb(0,0,0,0.1),_0_2px_4px_2px_rgb(0,0,0,0.1)]">
                                <h2
                                    class="text-2xl md:text-3xl font-bold text-indigo-600 uppercase text-center md:text-left">
                                    {{ $program['title'] }}
                                </h2>

                                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                                    @foreach ($program['tags'] as $tag)
                                        @if ($tag['type'] == 'online')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                                <span class="h-1.5 w-1.5 bg-green-500 rounded-full"></span>
                                                {{ $tag['label'] }}
                                            </span>
                                        @elseif ($tag['type'] == 'private')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-newyellow/20 text-dark">
                                                <span class="h-1.5 w-1.5 bg-newyellow rounded-full"></span>
                                                {{ $tag['label'] }}
                                            </span>
                                        @endif
                                    @endforeach
                                </div>

                                <hr class="my-2 border-t-3 border-gray-300">

                                <ul class="flex flex-col gap-3 flex-grow">
                                    @foreach ($program['features'] as $feature)
                                        <li class="flex items-start gap-2">
                                            <div
                                                class="mt-1 h-5 w-5 bg-indigo-600 flex items-center justify-center rounded-full flex-shrink-0">
                                                <i class="fa-solid fa-check fa-xs text-white"></i>
                                            </div>
                                            <div class="flex-1">
                                                <p class="font-bold text-base text-gray-800 leading-5">
                                                    {{ $feature['title'] }}
                                                </p>
                                                <p class="text-sm text-gray-600 leading-5">{{ $feature['description'] }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <hr class="my-2 border-t-3 border-gray-300">

                                <div class="text-center mt-auto">
                                    <p class="text-2xl md:text-2xl font-bold text-indigo-600">
                                        {{ $program['price'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="py-8">
        <div class="new-main-container">
            <h2 class="font-newprimary text-2xl md:text-3xl font-bold text-center mt-2 leading-4 mb-12 text-newprimary">
                What they
                say
            </h2>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 md:gap-8 w-full max-w-4xl mx-auto">
                <div class="w-full">
                    <img data-src="{{ asset('assets/img/sign-me/sat/what_they_say_1.webp') }}" alt="EduALL - ilustration"
                        class="w-full object-contain lazyload">
                </div>
                <div class="w-full">
                    <img data-src="{{ asset('assets/img/sign-me/sat/what_they_say_2.webp') }}" alt="EduALL - ilustration"
                        class="w-full object-contain lazyload">
                </div>
            </div>
            <div class="w-full mt-8">
                <h6 class="font-newprimary text-sm italic font-light text-center text-gray-600">Maximum score 1600
                </h6>
            </div>
        </div>
    </section>


    <section class="bg-[#1E1E1E] py-24">
        <div class="new-main-container">
            <div class="flex flex-col max-w-4xl mx-auto gap-8">
                <div class="flex flex-col md:flex-row items-stretch gap-8">
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- About EduALL --}}
                        <div class="rounded-2xl h-full relative overflow-hidden ">
                            <img src="{{ asset('assets/img/sign-me/sat/parent_question.webp') }}" alt="Parent Question"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-6/12 w-full gap-4 flex flex-col">
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 bg-[#1E1E1E] rounded-xl w-full h-full border border-newyellow">
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

                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @push('style')
    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
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
                // const captcha = area == '_header' ? checkCaptcha() : true;

                // if (captcha) {
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


                // } else {
                //     loadingIcon.classList.add('hidden')
                //     sendIcon.classList.remove('hidden')
                // }
            } else {
                loadingIcon.classList.add('hidden')
                sendIcon.classList.remove('hidden')
            }

            return true;
        }
    </script>
@endpush
