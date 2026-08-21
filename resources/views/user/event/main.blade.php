@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Event', 'url' => route('event', [app()->getLocale()])],
        ];
    @endphp
    <title>{{ __('pages/event.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/event.meta_title') }}" />
    <meta name="description" content="{{ __('pages/event.meta_description') }}" />
@endsection

@push('style')
    <style>
        /* ==================== Mentee Slider Styles ==================== */
        #slider {
            padding: 60px 0;
        }

        #slider .splide__slide {
            opacity: .4;
        }

        #slider .splide__slide .card {
            transform: scale(.6);
            transform-origin: center center;
            will-change: transform;
        }

        #slider .splide__slide.is-active {
            opacity: 1;
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-white">
                <img src="{{ asset('assets/img/Events/1. Event_background hero.png') }}" alt="EduALL" loading="lazy"
                    decoding="async" width="100%" height="auto"
                    class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[30vh]">
                <div class="new-main-container h-[100vh] relative overflow-hidden">
                    <h1 class="font-normal text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-2xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 leading-8 uppercase"
                        itemprop="headline">
                        {!! __('pages/event.banner.title') !!}
                    </h1>

                    <p class="text-white text-lg md:text-xl mb-4 md:mb-10 md:text-start text-center max-w-2xl"
                        itemprop="description">
                        {{ __('pages/event.banner.subtitle') }}
                    </p>

                    <div class="flex md:justify-start justify-center gap-5">
                        <a href="#event" class="rounded-full py-2 px-5 text-lg bg-newprimary text-white">
                            {{ __('pages/event.banner.cta') }}
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <div class="absolute w-[60%] main-container top-0 -right-[10%] hidden md:block -scroll-mt-[50vh]"
                        id="event">
                        <div class="flex gap-5">
                            <div class="w-1/2">
                                <img src="{{ asset('assets/img/Events/2. Event hero foto 1.png') }}"
                                    alt="Students participating in EduALL events and conferences" loading="lazy"
                                    decoding="async" width="400" height="500" class="rounded-md w-full mb-5">
                                <img src="{{ asset('assets/img/Events/3. Event hero foto 2.png') }}"
                                    alt="EduALL event showcase and student presentations" loading="lazy" decoding="async"
                                    width="400" height="500" class="rounded-md w-full">
                            </div>
                            <div class="w-1/2">
                                <img src="{{ asset('assets/img/Events/4. Event hero foto 3.png') }}"
                                    alt="Students collaborating at EduALL community initiatives" loading="lazy"
                                    decoding="async" width="400" height="500" class="rounded-md w-full mb-5">
                                <img src="{{ asset('assets/img/Events/5. Event hero foto 4.png') }}"
                                    alt="EduALL mentorship and learning activities" loading="lazy" decoding="async"
                                    width="400" height="500" class="rounded-md w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl text-center uppercase font-normal text-newprimary mb-5">
                {{ __('pages/event.section_title') }}
            </h2>
            <p class="text-md md:text-xl text-center font-light text-newprimary/80">
                {{ __('pages/event.section_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
            @foreach (__('pages/event.events') as $event)
                <div class="">
                    <div class="h-[400px]">
                        <img src="{{ asset('assets/img/Events/' . $event['image']) }}"
                            alt="{{ $event['title'] }} - {{ $event['category'] }}" loading="lazy" decoding="async"
                            width="600" height="400" class="rounded-xl w-full mb-5 shadow-sm">
                        <p class="uppercase text-sm font-bold text-dark/60">
                            {{ $event['category'] }}
                        </p>
                        <h3 class="font-normal text-newprimary text-2xl mb-3">
                            {{ $event['title'] }}
                        </h3>
                        <p class="text-sm text-dark/50">
                            {{ $event['description'] }}
                        </p>
                    </div>
                    <hr class="my-2">
                    @if ($event['link'] != '')
                        <a href="{{ $event['link'] == '' ? '#' : $event['link'] }}" target="_blank"
                            class="text-newprimary font-semibold text-sm">
                            {{ $event['cta'] }}
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-gradient-to-b from-newprimary to-newprimary/10 relative overflow-hidden">
        <img src="{{ asset('assets/img/Events/bg.png') }}" alt="EduALL" loading="lazy" decoding="async" width="100%"
            height="auto" class="w-full object-cover object-bottom absolute left-0 top-0 z-0">
        <div class="new-main-container py-10 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-10 mb-10">
                <div class="w-full md:w-[30%]">
                    <h2 class="text-3xl md:text-5xl text-start font-normal text-white mb-5">
                        {{ __('pages/event.story_section.title') }}
                    </h2>
                </div>
                <div class="w-full md:w-[50%]">
                    <p class="text-base md:text-lg text-start font-light text-white/80">
                        {{ __('pages/event.story_section.description') }}
                    </p>
                </div>
            </div>


            <div class="max-w-6xl mx-auto mb-10 overflow-hidden">
                <div id="slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide rounded-2xl">
                                <div class="card">
                                    <img src="{{ asset('assets/img/Events/12. Event CTA foto 1.png') }}"
                                        alt="EduALL event photo gallery - students activities and workshops" loading="lazy"
                                        decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                                </div>
                            </li>

                            <li class="splide__slide rounded-2xl">
                                <div class="card">
                                    <img src="{{ asset('assets/img/Events/13. Event CTA foto 2.png') }}"
                                        alt="EduALL community initiative and student engagement" loading="lazy"
                                        decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                                </div>
                            </li>

                            <li class="splide__slide rounded-2xl">
                                <div class="card">
                                    <img src="{{ asset('assets/img/Events/14. Event CTA foto 3.png') }}"
                                        alt="EduALL mentorship programs and learning experiences" loading="lazy"
                                        decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                                </div>
                            </li>

                            <li class="splide__slide rounded-2xl">
                                <div class="card">
                                    <img src="{{ asset('assets/img/Events/15. Event CTA foto 4.png') }}"
                                        alt="EduALL events bringing students and educators together" loading="lazy"
                                        decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto text-center relative z-10">
                <h2 class="text-2x md:text-4xl font-normal text-white mb-4">
                    {!! __('pages/event.cta_section.title') !!}
                </h2>
                <p class="max-w-6xl mx-auto text-white/70 mb-5">
                    {{ __('pages/event.cta_section.description') }}
                </p>

                <div class="max-w-3xl mx-auto relative z-10">
                    <div
                        class="bg-gradient-to-b from-[#3C74B5] to-white py-6 md:py-5 px-6 md:px-10 rounded-xl shadow-2xl w-full">
                        <form action="{{ route('submit_partnership', ['locale' => 'id-en']) }}" method="POST"
                            id="myForm">
                            @csrf
                            <div class="text-start">
                                <div class="flex gap-4 flex-col md:flex-row">
                                    <div class="md:mb-1 w-full md:w-1/2">
                                        <label for="primary_name"
                                            class="text-white text-sm py-2">{{ __('pages/event.cta_section.form_fields.fullname') }}</label>
                                        <input type="text" name="fullname"
                                            class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                            placeholder="{{ __('pages/event.cta_section.form_fields.fullname') }}"
                                            id="primary_name" required oninput="checkValidation('primary_name')">
                                        <div id="primary_name_error" class="text-red text-[10px] mt-1 hidden"></div>
                                        @error('fullname')
                                            <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="md:mb-1 w-full md:w-1/2">
                                        <label for="company_name" class="text-white text-sm py-2">
                                            {{ __('pages/event.cta_section.form_fields.company_name') }}
                                        </label>
                                        <input type="text" name="company_name"
                                            class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                            placeholder="{{ __('pages/event.cta_section.form_fields.company_name') }} *"
                                            id="company_name" required oninput="checkValidation('company_name')">
                                        <div id="company_name_error" class="text-red text-[10px] mt-1 hidden"></div>
                                        @error('company_name')
                                            <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex gap-4 flex-col md:flex-row">
                                    <div class="mb-3 w-full md:w-1/2">
                                        <label for="position"
                                            class="text-white text-sm py-2">{{ __('pages/event.cta_section.form_fields.position') }}</label>
                                        <input type="text" name="position"
                                            class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                            placeholder="{{ __('pages/event.cta_section.form_fields.position') }}"
                                            id="position" required oninput="checkValidation('position')">
                                        <div id="position_error" class="text-red text-[10px] mt-1 hidden"></div>
                                        @error('position')
                                            <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="md:mb-1 md:w-1/2">
                                        <label for="email"
                                            class="text-white text-sm py-2">{{ __('pages/event.cta_section.form_fields.email') }}</label>
                                        <input type="email" name="email"
                                            class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                            placeholder="you@example.com" id="email" required
                                            oninput="checkValidation('email')">
                                        <div id="email_error" class="text-red text-[10px] mt-1 hidden"></div>
                                        @error('email')
                                            <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex gap-4 flex-col md:flex-row">
                                    <div class="mb-3 md:w-1/2">
                                        <label for="phone_number"
                                            class="text-white text-sm py-2">{{ __('pages/event.cta_section.form_fields.phone_number') }}</label>
                                        <input type="text" name="phone_number"
                                            class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                            placeholder="+62 ..." id="phone_number" required
                                            oninput="checkValidation('phone_number')">
                                        <div id="phone_number_error" class="text-red text-[10px] mt-1 hidden"></div>
                                        @error('phone_number')
                                            <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 md:w-1/2">
                                        <label for="partnership_type"
                                            class="text-white text-sm py-2">{{ __('pages/event.cta_section.form_fields.partnership_type') }}</label>
                                        <select name="partnership_type"
                                            class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                            id="partnership_type" required oninput="checkValidation('partnership_type')">
                                            <option value="">
                                                {{ __('pages/event.cta_section.form_fields.partnership_type') }}</option>
                                            <option value="School">
                                                {{ __('pages/event.cta_section.partnership_types.school') }}</option>
                                            <option value="Company">
                                                {{ __('pages/event.cta_section.partnership_types.company') }}</option>
                                            <option value="Community">
                                                {{ __('pages/event.cta_section.partnership_types.community') }}</option>
                                        </select>
                                        <div id="partnership_type_error" class="text-red text-[10px] mt-1 hidden"></div>
                                        @error('partnership_type')
                                            <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inquiry"
                                        class="text-white text-sm py-2">{{ __('pages/event.cta_section.form_fields.inquiry') }}</label>
                                    <textarea class="md:py-2 text-dark rounded-lg border-none shadow-sm py-2 text-sm my-1 w-full"
                                        placeholder="{{ __('pages/event.cta_section.form_fields.inquiry') }} *" id="inquiry" name="inquiry"
                                        rows="2" required oninput="checkValidation('inquiry')"></textarea>
                                    <div id="inquiry_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('inquiry')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
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
                                        class="w-full bg-black rounded-xl text-white text-center py-2 px-20"
                                        onclick="submitData()">
                                        <span id="loading" class="hidden">
                                            <i class="fas fa-spinner fa-spin mr-4"></i>
                                        </span>
                                        {{ __('pages/event.cta_section.submit_button') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        // ==================== Mentee Slider (Splide) ====================
        // Initialize testimonial slider with autoplay
        document.addEventListener('DOMContentLoaded', function() {
            const isMobile = window.innerWidth < 768;

            const slider = new Splide('#slider', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                interval: 4000,
                speed: 600,
                drag: false,
                arrows: true,
                pagination: false,
                fixedWidth: '450px',
                fixedHeight: 'auto',
                gap: '-3rem',
                padding: '5%',

                breakpoints: {
                    1024: {
                        perPage: 2,
                        fixedWidth: '300px',
                        gap: '1rem',
                        padding: '3%',
                    },

                    768: {
                        perPage: 1,
                        fixedWidth: '280px',
                        gap: '1rem',
                        padding: '2%',
                    },
                },
            });

            slider.mount();


            /*
             * Scale mengikuti posisi card secara realtime.
             */
            function updateScale() {

                const root = document.querySelector('#slider');
                const slides = root.querySelectorAll('.splide__slide');

                const rootRect = root.getBoundingClientRect();
                const centerX = rootRect.left + rootRect.width / 2;

                slides.forEach(slide => {

                    const card = slide.querySelector('.card');

                    if (!card) return;

                    const rect = slide.getBoundingClientRect();

                    const slideCenter = rect.left + rect.width / 2;

                    const distance = Math.abs(centerX - slideCenter);

                    const maxDistance = rect.width;

                    const progress = Math.min(
                        distance / maxDistance,
                        1
                    );

                    /*
                     * =========================
                     * SCALE
                     * =========================
                     *
                     * Center  = 1
                     * Samping = 0.6
                     */
                    const scale = 1 - (progress * 0.4);


                    /*
                     * =========================
                     * OPACITY
                     * =========================
                     *
                     * Center  = 1
                     * Samping = 0.4
                     */
                    const opacity = 1 - (progress * 0.6);


                    card.style.transform = `scale(${scale})`;
                    slide.style.opacity = opacity;

                });

                requestAnimationFrame(updateScale);
            }

            requestAnimationFrame(updateScale);
        });
    </script>
@endpush

@push('style')
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
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

        let validation = []

        const checkValidation = (id) => {
            const element = document.getElementById(id);
            const errorMsg = document.getElementById(id + '_error');
            const forbiddenSymbols = /[<>'"();{}$%&#!?+=\/\\|\[\]*^`~]/;
            let msg = ''

            if (forbiddenSymbols.test(element.value)) msg = 'This field must not contain symbols.';

            errorMsg.textContent = msg;
            errorMsg.classList.toggle('hidden', !msg);
            element.classList.toggle('border-none', !msg);
            element.classList.toggle('border-red', !!msg);

            validation[id] = msg ? false : true
        }

        const submitData = () => {
            const checkValidation = Object.values(validation).includes(false)
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

            if (isValid && !checkValidation) {
                const captcha = checkCaptcha();
                if (captcha) {
                    document.getElementById('myForm').submit();
                }
            }
        }
    </script>
@endpush
