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
    <section class="py-16 bg-gradient-to-b from-newprimary via-newprimary to-dark">
        <div class="new-main-container w-full">

        <div class="md:col-span-3">
            {{-- Emmbed Form --}}
            <div class="w-full">
                <div class="mx-auto md:max-w-4xl ease-in-out duration-500 z-[999999] flex flex-col items-center " id="formRegist">
                    <div class="flex items-center justify-between w-full my-4">
                        <div>
                            <h2 class="text-white md:text-[40px] text-xl">
                                Get In Touch
                            </h2>
                            <p class="text-white md:text-lg text-base mt-2">Let us know you better by filling out this form</p>
                        </div>
                        <img loading="lazy" src="{{ asset('assets/logo/eduall-white.png') }}" alt="EduAll white logo"
                        class="max-w-[120px] w-full md:mx-0 mx-auto"> 
                    </div>
                
                    <div class="bg-[#EAEAEA] py-8 px-10 rounded-xl shadow-2xl w-full">
                        <div id="myForm">
                            <div class="">
                                <div class="flex flex-col">
                                    <div class="md:mb-3">
                                        <label for="primary_name" class="text-dark text-sm py-2">Full Name</label>
                                        <input type="text"
                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                        placeholder="Full Name *" id="primary_name" required>
                                    </div>
                                    <div class="flex gap-4 md:flex-row flex-col">
                                        <div class="md:mb-3 md:w-1/2 mt-3 md:mt-0">
                                            <label for="company_name" class="text-dark text-sm py-2">Company / Organization Name</label>
                                            <input type="text"
                                            class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                            placeholder="Company / Organization Name *" id="company_name" required>
                                        </div>
                                        <div class="md:mb-3 md:w-1/2 md:mt-0">
                                            <label for="position" class="text-dark text-sm py-2">Position</label>
                                            <input type="text"
                                                class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                placeholder="Position *" id="position" required>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 md:flex-row flex-col">
                                        <div class="md:mb-3 md:w-1/2 mt-3 md:mt-0">
                                            <label for="email" class="text-dark text-sm py-2">Email</label>
                                            <input type="email"
                                            class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                            placeholder="Email *" id="email" required>
                                        </div>
                                        <div class="md:mb-3 md:w-1/2">
                                            <label for="phone_number" class="text-dark text-sm py-2">Phone Number</label>
                                            <input type="text"
                                                class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                placeholder="Phone Number *" id="phone_number" required>
                                        </div>
                                    </div>
                                    <div class="md:mb-3 mt-3 md:mt-0">
                                        <label for="school_name" class="text-dark text-sm py-2">School Name</label>
                                        <textarea
                                            class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                            placeholder="Inquiry *" id="inquiry" name="inquiry" rows="4" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                                        <span id="captcha" class="text-red" />
                                    </div>
                                    <div class="mb-3 flex items-center justify-center">
                                        <button type="button" class="max-w-max bg-newprimary text-white text-center py-2 md:px-20 px-6"
                                            onclick="submit()">
                                            <span id="loading" class="hidden">
                                                <i class="fas fa-spinner fa-spin mr-4"></i>
                                            </span>
                                            Collaborate Now 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="thanksForm" class="hidden">
                            <div class="flex flex-col justify-center">
                                <h4 class="mb-4 mt-4 text-white text-center text-lg">
                                    <span>
                                        Thank You <br />
                                        For Submitting Your Form!
                                    </span>
                                </h4>
                                <p class="text-white text-center">
                                    You will receive a confirmation email and our team will contact you
                                    shortly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection