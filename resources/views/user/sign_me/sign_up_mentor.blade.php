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
        <div class="py-16 bg-gradient-to-b from-[#000099] to-dark w-full">
            <div class="new-main-container w-full">
                <div class="md:col-span-3">
                    {{-- Emmbed Form --}}
                    <div class="w-full">
                    <h2 class="font-newprimary font-bold text-3xl text-white text-center mb-6">
                        Sign Up Mentor
                    </h2>

                        {{-- <div class="mx-auto md:max-w-4xl ease-in-out duration-500 z-[999999] flex flex-col items-center "
                            id="formRegist">
                            <div class="w-full flex md:justify-end justify-center md:mb-8">
                                <img loading="lazy" src="{{ asset('assets/logo/eduall-white.png') }}" alt="EduAll white logo"
                                class="md:max-w-[120px] max-w-[80px] w-full md:mx-0 mx-auto">
                            </div>
                            <div class="flex items-center md:justify-between justify-center w-full my-4">
                                <div>
                                    <h2 class="text-white md:text-[40px] text-xl text-center md:text-left">
                                        Get In Touch
                                    </h2>
                                    <p class="text-white md:text-lg text-base mt-2 text-center md:text-left">Let us know you better by filling out this
                                        form</p>
                                </div>
                            </div>
    
                            <div class="bg-[#EAEAEA] py-8 px-10 rounded-xl shadow-2xl w-full">
                                <form action="" method="POST" id="myForm">
                                    @csrf
                                    <div class="">
                                        <div class="flex flex-col">
                                            <div class="mb-3">
                                                <label for="primary_name" class="text-dark text-sm py-2">Full Name</label>
                                                <input type="text" name="fullname"
                                                    class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                    placeholder="Full Name *" id="primary_name" required>
                                            </div>
                                            <div class="flex gap-4 flex-col md:flex-row">
                                                <div class="md:mb-3 w-full md:w-1/2">
                                                    <label for="company_name" class="text-dark text-sm py-2">
                                                        {{ ucfirst($slug) }} Name
                                                    </label>
                                                    <input type="text" name="company_name"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="{{ ucfirst($slug) }} Name *" id="company_name" required>
                                                </div>
                                                <div class="mb-3 w-full md:w-1/2">
                                                    <label for="position" class="text-dark text-sm py-2">Position</label>
                                                    <input type="text" name="position"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="Position *" id="position" required>
                                                </div>
                                            </div>
                                            <div class="flex gap-4 flex-col md:flex-row">
                                                <div class="md:mb-3 md:w-1/2">
                                                    <label for="email" class="text-dark text-sm py-2">Email</label>
                                                    <input type="email" name="email"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="Email *" id="email" required>
                                                </div>
                                                <div class="mb-3 md:w-1/2">
                                                    <label for="phone_number" class="text-dark text-sm py-2">Phone
                                                        Number</label>
                                                    <input type="text"
                                                        class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                        placeholder="Phone Number *" id="phone_number" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inquiry" class="text-dark text-sm py-2">Inquiry</label>
                                                <textarea class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full" placeholder="Inquiry *"
                                                    id="inquiry" name="inquiry" rows="4" required></textarea>
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
                                            Thank you for letting us know a little bit about you! Our partnership team will contact you in 24 hours for further collaboration
                                        </h4>
                                        <a href="{{ route('home', app()->getLocale()) }}" class="flex justify-center w-full pt-4">
                                            <span class="block px-4 py-2 rounded-sm bg-red font-newprimary font-semibold text-base text-white text-center">
                                               Back to Home
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
