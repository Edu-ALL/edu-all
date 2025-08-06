@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/sign_me/sat_prep.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/sign_me/sat_prep.meta_title') }}" />
    <meta name="description" content="{{ __('pages/sign_me/sat_prep.meta_description') }}" />

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
    <section class="flex flex-col md:flex-row items-center">
        <div class="px-12 bg-white w-full md:w-1/2 order-2 md:order-1">
            <div class="w-full flex flex-col items-center md:items-end justify-center gap-4 h-full py-8 md:py-0 md:mt-12">
                <h2 class="font-newprimary font-bold text-2xl md:text-3xl mb-4 text-dark text-center md:text-left">
                    @if ($slug == 'company')
                        Event & Program Collaboration
                    @else
                        Volunteer & Project Collaboration
                    @endif
                </h2>
                <div class="grid grid-rows-3 grid-cols-2 gap-4 max-w-md w-full h-full">
                    @if ($slug == 'company')
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_1.webp') }}"
                            alt="Collaboration 1" class="w-full h-full rounded-xl object-cover row-span-2">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_3.webp') }}"
                            alt="Collaboration 3" class="w-full h-full rounded-xl object-cover">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_4.webp') }}"
                            alt="Collaboration 4" class="w-full h-full rounded-xl object-cover">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_2.webp') }}"
                            alt="Collaboration 2" class="w-full h-full rounded-xl object-cover">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_5.webp') }}"
                            alt="Collaboration 5" class="w-full h-full rounded-xl object-cover">
                    @else
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_1.webp') }}"
                            alt="Collaboration 1" class="w-full h-full rounded-xl object-cover col-span-2 row-span-1">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_3.webp') }}"
                            alt="Collaboration 3" class="w-full h-full rounded-xl object-cover col-span-1 row-span-1">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_4.webp') }}"
                            alt="Collaboration 4" class="w-full h-full rounded-xl object-cover col-span-1 row-span-2">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_2.webp') }}"
                            alt="Collaboration 2" class="w-full h-full rounded-xl object-cover col-span-1 row-span-1">
                    @endif
                </div>
            </div>
        </div>
        <div class="py-16 bg-gradient-to-b from-[#000099] to-dark w-full md:w-1/2 order-1 md:order-2">
            <div class="new-main-container w-full">
                <div class="md:col-span-3">
                    {{-- Emmbed Form --}}
                    <div class="w-full max-w-xl">
                        <div class="mx-auto md:max-w-4xl ease-in-out duration-500 z-[999999] flex flex-col items-center "
                            id="formRegist">
                            <div class="w-full flex md:justify-end justify-center md:mb-8">
                                <img loading="lazy" src="{{ asset('assets/logo/eduall-white.png') }}"
                                    alt="EduAll white logo" class="md:max-w-[120px] max-w-[80px] w-full md:mx-0 mx-auto">
                            </div>
                            <div class="flex items-center md:justify-between justify-center w-full my-4">
                                <div>
                                    <h2 class="text-white md:text-[40px] text-xl text-center md:text-left">
                                        Get In Touch
                                    </h2>
                                    <p class="text-white md:text-lg text-base mt-2 text-center md:text-left">Let us know you
                                        better by filling out this
                                        form</p>
                                </div>
                            </div>

                            <div class="bg-[#EAEAEA] py-8 px-10 rounded-xl shadow-2xl w-full">
                                <form action="" method="POST" id="myForm">
                                    @csrf
                                    <div>
                                        <div class="flex flex-col">
                                            <div class="mb-3">
                                                <label for="primary_name" class="text-dark text-sm py-2">Full Name</label>
                                                <input type="text" name="fullname"
                                                    class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                    placeholder="Full Name *" id="primary_name" required>
                                                @error('fullname')
                                                    <div class="text-red text-sm mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="flex gap-4 flex-col md:flex-row">
                                                <div class="md:mb-3 w-full md:w-1/2">
                                                    <label for="company_name" class="text-dark text-sm py-2">
                                                        {{ ucfirst($slug) }} Name
                                                    </label>
                                                    <input type="text" name="company_name"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="{{ ucfirst($slug) }} Name *" id="company_name"
                                                        required>
                                                    @error('company_name')
                                                        <div class="text-red text-sm mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 w-full md:w-1/2">
                                                    <label for="position" class="text-dark text-sm py-2">Position</label>
                                                    <input type="text" name="position"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="Position *" id="position" required>
                                                    @error('position')
                                                        <div class="text-red text-sm mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="flex gap-4 flex-col md:flex-row">
                                                <div class="md:mb-3 md:w-1/2">
                                                    <label for="email" class="text-dark text-sm py-2">Email</label>
                                                    <input type="email" name="email"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="Email *" id="email" required>
                                                    @error('email')
                                                        <div class="text-red text-sm mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 md:w-1/2">
                                                    <label for="phone_number" class="text-dark text-sm py-2">Phone
                                                        Number</label>
                                                    <input type="text" name="phone_number"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="Phone Number *" id="phone_number" required>
                                                    @error('phone_number')
                                                        <div class="text-red text-sm mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inquiry" class="text-dark text-sm py-2">Inquiry</label>
                                                <textarea class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full" placeholder="Inquiry *"
                                                    id="inquiry" name="inquiry" rows="4" required></textarea>
                                                @error('inquiry')
                                                    <div class="text-red text-sm mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="flex justify-center mb-3">
                                                <div class="text-center">
                                                    <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                                                    <span id="captcha" class="text-red" />
                                                </div>
                                            </div>
                                            <div class="mb-3 flex items-center justify-center">
                                                <button type="button"
                                                    class="max-w-max bg-red text-white text-center py-2 px-20"
                                                    onclick="submitData()">
                                                    <span id="loading" class="hidden">
                                                        <i class="fas fa-spinner fa-spin mr-4"></i>
                                                    </span>
                                                    Collaborate Now
                                                </button>
                                            </div>
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
