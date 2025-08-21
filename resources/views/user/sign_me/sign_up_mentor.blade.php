@extends('layout.user.landing_page')
{{-- SIGNUP MENTOR  --}}
@section('head')
    <title>Become a mentor and empower future changemakers!</title>
    <meta name="title" content="Become a mentor and empower future changemakers!" />
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
    <section class="md:py-16 py-8 bg-dark overflow-clip">
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
                    <div class="md:w-1/2 w-full gap-4 flex flex-col order-2 md:order-1">
                        {{-- EduALL Logo  --}}
                        <div class="h-16 md:block hidden">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.png') }}" alt="EduAll logo"
                                class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                        </div>
                        {{-- About EduALL --}}
                        <div class="border-[0.5px] border-[#6D6D6D] rounded-2xl py-6 px-6 h-full mt-2">
                            <div class="flex flex-col">
                                <h3 class="text-[#9C9C9C] text-3xl md:text-4xl font-bold mb-3 font-newprimary">Who We Are?
                                </h3>
                                <p class="text-white text-sm leading-relaxed text-justify">
                                    EduALL offers integrative uni-prep and mentoring for middle & high school students to
                                    foster a growth mindset, develop academic & life skills, and facilitate access to
                                    high-quality education globally and real-world experiences, all while having fun in the
                                    process.
                                    <br>
                                    Our students come from many cities such as Jakarta, Bandung, Semarang, and Surabaya,
                                    even outside of Indonesia; Singapore, US, and many more.
                                </p>
                                <h3 class="text-[#9C9C9C] text-3xl md:text-4xl font-bold mb-3 mt-6">What We Do?</h3>
                                <p class="text-white text-sm leading-relaxed text-justify">
                                    We offer personalized 1-on-1 admissions mentoring service that will serve as an academic
                                    walk-through for students to get accepted at their dream schools and find best
                                    fit-universities.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full gap-4 flex flex-col order-1 md:order-2">
                        {{-- EduALL Logo  --}}
                        <div class="md:hidden">
                            <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.png') }}" alt="EduAll logo"
                                class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                        </div>
                        {{-- From Description --}}
                        <div class="h-16">
                            <h4 class="font-bold text-xl md:text-2xl text-white md:text-left text-center">
                                Become a mentor and <br> empower future changemakers!
                            </h4>
                        </div>
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 border-[0.5px] border-newyellow rounded-xl w-full h-full">
                            <form action="" method="POST" id="myForm">
                                @csrf
                                <span class="text-white text-lg">* Fluent english required</span>
                                <div class="flex flex-col justify-between h-full mt-4">
                                    <div class="flex flex-col h-full flex-1">
                                        <div class="mb-4">
                                            <div class="flex space-x-4 items-center">
                                                <label class="inline-flex items-center flex-1 gap-2">
                                                    <input type="radio" class="form-radio w-6 h-6" name="mentor_type"
                                                        value="Full Time" required>
                                                    <span class="ml-2 text-white text-md">Full-time (Hybrid)</span>
                                                </label>
                                                <label class="inline-flex items-center flex-1 gap-2">
                                                    <input type="radio" class="form-radio w-6 h-6" name="mentor_type"
                                                        value="Part Time" required>
                                                    <span class="ml-2 text-white text-md">Part-time (Remote)</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="primary_name" class="text-white text-sm py-2">Full Name</label>
                                            <input type="text" name="fullname"
                                                class="md:py-2 text-dark border-none shadow-sm focus:ring-newyellow py-1 my-1 w-full"
                                                placeholder="Full Name *" id="primary_name" required>
                                            @error('fullname')
                                                <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex gap-4 flex-col md:flex-row">
                                            <div class="md:mb-3 md:w-1/2">
                                                <label for="email" class="text-white text-sm py-2">Email</label>
                                                <input type="email" name="email"
                                                    class="md:py-2 text-dark border-none shadow-sm focus:ring-newyellow py-1 my-1 w-full"
                                                    placeholder="Email *" id="email" required>
                                                @error('email')
                                                    <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 md:w-1/2">
                                                <label for="phone_number" class="text-white text-sm py-2">Phone
                                                    Number</label>
                                                <input type="text"
                                                    class="md:py-2 text-dark border-none shadow-sm focus:ring-newyellow py-1 my-1 w-full"
                                                    placeholder="Phone Number *" id="phone_number" name="phone_number"
                                                    required>
                                                @error('phone_number')
                                                    <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="linkedin_link" class="text-white text-sm py-2">Linkedin Link</label>
                                            <input type="text" name="linkedin_link"
                                                class="md:py-2 text-dark border-none shadow-sm focus:ring-newyellow py-1 my-1 w-full"
                                                placeholder="Linkedin Link *" id="linkedin_link" required>
                                            @error('linkedin_link')
                                                <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="flex justify-center mb-5">
                                            <div class="text-center">
                                                <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                                                <span id="captcha" class="text-red" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 flex items-center justify-center w-full">
                                        <button type="button"
                                            class="rounded-md bg-newyellow text-dark font-bold w-full text-center py-2 px-20"
                                            onclick="submitData()">
                                            <span id="loading" class="hidden">
                                                <i class="fas fa-spinner fa-spin mr-4"></i>
                                            </span>
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div id="thanksForm" class="hidden">
                                <div class="flex flex-col justify-center">
                                    <h4 class="mb-4 mt-4 text-newprimary font-bold text-center text-lg leading-6">
                                        Thank you for letting us know a little bit about you! Our partnership team will
                                        contact you in 24 hours for further collaboration
                                    </h4>
                                    <a href="{{ route('home', app()->getLocale()) }}"
                                        class="flex justify-center w-full pt-4">
                                        <span
                                            class="block px-4 py-2 rounded-sm bg-red font-newprimary font-semibold text-base text-white text-center">
                                            Back to Home
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-6 border-[0.5px] border-[#6D6D6D] rounded-2xl py-6 px-6 h-full">
                    <div class="flex flex-col flex-1">
                        <div class="flex flex-col md:flex-row md:items-center md:gap-5">
                            <h3 class="text-[#9C9C9C] text-3xl md:text-4xl font-bold mb-3 font-newprimary leading-4">Why
                                Us?</h3>
                            <span class="text-white md:text-base md:font-bold text-sm font-semibold">At EduALL, you'll
                                enjoy</span>
                        </div>
                        <div class="flex flex-wrap items-center justify-center gap-6 md:gap-4 mt-4">
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy" src="{{ asset('assets/img/sign-me/sign-up-mentor/icons-01.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 mx-auto">
                                <span class="text-white text-xs max-w-[120px] text-center">An attractive compensation
                                    package</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy" src="{{ asset('assets/img/sign-me/sign-up-mentor/icons-02.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 mx-auto">
                                <span class="text-white text-xs md:max-w-[150px] max-w-[120px] text-center">Hybrid working
                                    arrangement (2 days of WFO for Full-timers)</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy" src="{{ asset('assets/img/sign-me/sign-up-mentor/icons-03.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 mx-auto">
                                <span class="text-white text-xs md:max-w-[100px] max-w-[120px] text-center">Opportunities
                                    for professional growth</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy" src="{{ asset('assets/img/sign-me/sign-up-mentor/icons-04.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 mx-auto">
                                <span class="text-white text-xs max-w-[120px] text-center">A vibrant and collaborative
                                    workplace</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy" src="{{ asset('assets/img/sign-me/sign-up-mentor/icons-05.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 mx-auto">
                                <span class="text-white text-xs max-w-[120px] text-center">Training and development to
                                    boost your skills</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h3 class="text-[#9C9C9C] text-3xl md:text-4xl font-bold mb-3 font-newprimary w-10 md:w-full">Role
                            description</h3>
                        <div class="flex flex-col">
                            <ol class="list-decimal list-outside ml-4 text-white space-y-1 text-sm">
                                <li>Conduct individual sessions to understand each student's interests, academic and career
                                    aspirations</li>
                                <li>Assess their skills and potential to tailor a personalized development plan</li>
                                <li>Provide expert advice on academic planning, career paths, and profile building</li>
                                <li>Provide guidance on career paths and opportunities that align with their interest and
                                    goal</li>
                                <li>Stay updated of admission trends, and requirements at top world universities</li>
                                <li>Establish strong relationships with students, parents, and other stakeholders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <style>
        .circular-gradient-1 {
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 0, 255, 0.5) 0%, rgba(0, 0, 255, 0.3) 20%, rgba(0, 0, 255, 0.1) 50%, rgba(0, 0, 0, 0) 75%);
            filter: blur(50px);
        }

        .circular-gradient-2 {
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 0, 255, 0.3) 0%, rgba(0, 0, 255, 0.3) 20%, rgba(0, 0, 255, 0.3) 30%, rgba(0, 0, 0, 0) 75%);
            filter: blur(50px);
        }
    </style>

    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };

        const checkCaptcha = () => {
            var v = grecaptcha.getResponse();

            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
                return false;
            } else {
                return true
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
            }
        }

        const submitData = () => {
            const inputs = document.querySelectorAll('#myForm input, #myForm textarea');
            let isValid = true;

            // Loop through inputs and check for validation
            inputs.forEach(function(input) {
                if (input.required && !input.value && input.value != ' ' && !input.classList.contains(
                        'hidden')) {
                    console.log(input);

                    isValid = false;
                    input.setCustomValidity('Please fill in required fields');
                    input.classList.add('border-red'); // Add red border to invalid inputs (optional)
                    input.classList.remove('border-none'); // Remove green border if any
                } else {
                    input.setCustomValidity('');
                    input.classList.remove('border-red');
                    input.classList.add('border-none');
                }
            });

            if (isValid) {
                const captcha = checkCaptcha();
                if (captcha) {
                    document.getElementById('myForm').submit();
                }
            }
        }
    </script>
@endpush
