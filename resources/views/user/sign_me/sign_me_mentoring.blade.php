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
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 border-[0.5px] border-newyellow rounded-xl w-full h-full">
                            <div id="myForm_header">
                                <div class="mt-5">
                                    <div class="flex flex-col">
                                        <div class="mb-5">
                                            <div class="flex gap-10">
                                                <div class="flex items-center">
                                                    <input type="radio" name="roles_header" value="student"
                                                        id="student_header" checked required
                                                        onchange="checkRole('_header')">
                                                    <label for="student" class="text-white ml-2">Student</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="radio" name="roles_header" value="parent"
                                                        id="parent_header" required onchange="checkRole('_header')">
                                                    <label for="parent" class="text-white ml-2">Parent</label>
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
                                        <div class="mb-5">
                                            <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                                            <span id="captcha" class="text-red" />
                                        </div>
                                        <div class="mb-3">
                                            <button type="button"
                                                class="w-full bg-newprimary text-white text-center py-2 rounded-xl"
                                                onclick="submit('_header')">
                                                <span id="send_header">
                                                    <i class="fas fa-paper-plane mr-4"></i>
                                                </span>
                                                <span id="loading_header" class="hidden">
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
                <div class="flex flex-col md:flex-row gap-6 border-[0.5px] border-[#6D6D6D] rounded-2xl py-6 px-6 h-full">
                    <div class="flex flex-col items-center w-full">
                        <div
                            class="flex flex-wrap items-center justify-evenly md:justify-center gap-8 max-w-2xl mx-auto w-full">
                            @foreach (__('pages/programs/admission_mentoring.benefits') as $item)
                                <div class="shadow-clip flex flex-col items-center">
                                    <div class="h-24 w-28 bg-newprimary flex flex-col items-center justify-center py-4 mb-4"
                                        style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                                        <div class="h-12 relative">
                                            <img data-original="{{ asset('assets/img/admission mentoring/revamp/' . $item['image']) }}"
                                                alt="EduALL - ilustration" class="w-full h-full object-center object-cover"
                                                style="filter: brightness(0) invert(1);">
                                            <div class="absolute -top-4 -right-4">
                                                <div
                                                    class="h-4 w-4 bg-white flex items-center justify-center rounded-full">
                                                    <i class="fa-solid fa-check fa-sm text-black"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="font-newprimary text-white text-sm font-bold text-center mt-2 leading-4">
                                        {{ $item['title'] }}
                                    </h4>
                                    <span
                                        class="font-newprimary text-white text-sm font-normal text-center">{{ $item['tag'] }}</span>
                                </div>
                            @endforeach
                        </div>
                        <h3 class="text-[#9C9C9C] text-3xl md:text-4xl font-bold mt-12 mb-3 font-newprimary leading-4">What
                            You Will Get?</h3>
                        <div class="flex flex-wrap items-center justify-center gap-6 md:gap-4 mt-4">
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy"
                                    src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-01.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                <span class="text-white text-sm max-w-[120px] text-center">Personalized online or offline
                                    mentoring</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy"
                                    src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-02.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                <span class="text-white text-sm max-w-[120px] text-center">Well-Rounded Support</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy"
                                    src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-03.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                <span class="text-white text-sm max-w-[120px] text-center">Essay Writing Guidance</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy"
                                    src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-04.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                <span class="text-white text-sm max-w-[120px] text-center">Interview Preparation with Mock
                                    Questions</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 justify-center">
                                <img loading="lazy"
                                    src="{{ asset('assets/img/sign-me/sign-me-mentoring/icons-05.webp') }}"
                                    alt="EduAll logo" class="w-12 h-12 md:mx-0 object-contain mx-auto">
                                <span class="text-white text-sm max-w-[120px] text-center">9+ years of experienced
                                    mentors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-6 border-[0.5px] border-[#6D6D6D] rounded-2xl py-8 px-8 h-full">
                    <div class="flex flex-col items-center w-full relative">
                        <h3
                            class="absolute left-0 top-0 text-[#9C9C9C] text-3xl md:text-2xl font-bold mb-4 font-newprimary md:w-56 text-left">
                            What Makes EduALL Different?</h3>

                        <img src="{{ asset('assets/img/sign-me/sign-me-mentoring/what_make_different.webp') }}"
                            alt="What makes EduAll Different?" class="w-full mt-22 md:block hidden">
                        <img src="{{ asset('assets/img/sign-me/sign-me-mentoring/what_make_different_mobile.webp') }}"
                            alt="What makes EduAll Different?" class="w-full mt-20 md:hidden">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-8">
                    <div class="md:w-5/12 w-full gap-4 flex flex-col order-2 md:order-1">
                        {{-- Form --}}
                        <div class="py-4 md:px-6 px-4 border-[0.5px] border-newyellow rounded-xl w-full h-full">
                            <div id="myForm_footer">
                                <div class="mt-5">
                                    <div class="flex flex-col">
                                        <div class="mb-5">
                                            <div class="flex gap-10">
                                                <div class="flex items-center">
                                                    <input type="radio" name="roles_footer" value="student"
                                                        id="student_footer" checked required
                                                        onchange="checkRole('_footer')">
                                                    <label for="student" class="text-white ml-2">Student</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="radio" name="roles_footer" value="parent"
                                                        id="parent_footer" required onchange="checkRole('_footer')">
                                                    <label for="parent" class="text-white ml-2">Parent</label>
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
                                            <select class="py-2 text-dark rounded-xl w-full" id="graduation_year_footer"
                                                required>
                                                <option class="text-gray-300" value="">Select Graduation Year
                                                </option>
                                                @for ($i = date('Y'); $i < date('Y') + 5; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button"
                                                class="w-full bg-newprimary text-white text-center py-2 rounded-xl"
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
                    <div class="md:w-7/12 w-full gap-4 flex flex-col order-1 md:order-2">
                        {{-- About EduALL --}}
                        <div class="border-[0.5px] border-newyellow rounded-2xl h-full relative overflow-hidden">
                            <div class="flex flex-col justify-start items-center gap-2 py-12 px-6 absolute inset-0">
                                <h5 class="uppercase text-xl md:text-2xl text-white font-bold text-center">
                                    Schedule a consultation today and get a FREE
                                </h5>
                                <img src="{{ asset('assets/img/sign-me/sign-me-mentoring/free-bonus.webp') }}"
                                    alt="free bonus" class="w-full">
                                <span class="uppercase text-sm md:text-lg text-white text-center bg-black/20">
                                    voucher for Admission Mentoring Program!
                                </span>
                            </div>
                            <img src="{{ asset('assets/img/sign-me/sign-me-mentoring/free-bonus-background.webp') }}"
                                alt="free bonus background" class="w-full h-[500px] md:h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };
    </script>
@endpush
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

        const checkCaptcha = () => {
            var v = grecaptcha.getResponse();

            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
                return false;
            } else {
                return true;
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
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
                'interest_prog': "AAUP",
                'destination_country': [],
                'lead_id': "LS079",
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
                const captcha = area == '_header' ? checkCaptcha() : true;

                if (captcha) {
                    $.ajax({
                        url: 'https://crm.edu-all.com/api/v1/register/public', // Replace with the API endpoint
                        type: 'POST', // Specify the request type (POST)
                        contentType: 'application/json', // Set content type to JSON
                        data: JSON.stringify(formData), // Convert formData to a JSON string
                        success: function(response) {
                            // Handle the response on success
                            loadingIcon.classList.add('hidden')
                            sendIcon.classList.remove('hidden')

                            location.href =
                                "https://edu-all.com/id-en/programs/thank-you-for-your-interest-in-our-programs";
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
            } else {
                loadingIcon.classList.add('hidden')
                sendIcon.classList.remove('hidden')
            }

            return true;
        }
    </script>
@endpush
