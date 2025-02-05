@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_tutoring.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/academic-test-preparation'],
        [
            'title' => __('pages/programs/academic_tutoring.title'),
            'url' => '/programs/academic-test-preparation/academic-tutoring',
        ],
        [
            'title' => __('pages/programs/sat_program.navbar_title'),
            'url' => '/programs/academic-test-preparation/sat-program',
        ],
        [
            'title' => __('pages/programs/skillset_tutoring.title'),
            'url' => '/programs/academic-test-preparation/skillset-tutoring-program',
        ],
    ]" :active="__('pages/programs/academic_tutoring.title')" title="{!! __('pages/programs/academic_test_preparation.navbar_title') !!}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-academic-tutoring-header bg-cover bg-top" id="banner">
        <x-registration-form program-id="ACADX" />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full items-center justify-center gap-2 new-main-container">
                <div class="flex flex-col gap-2 w-full">
                    <h2 class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/2 xl:w-1/3 md:ml-12">
                        {{ __('pages/programs/academic_tutoring.title') }}
                    </h2>
                    <x-registration-form :is-button="true" program-id="ACADX" />
                </div>
            </div>
            <div class="absolute md:bottom-0 left-0 right-0">
                <div class="relative h-full">
                    <div
                        class="bg-newprimary mix-blend-multiply visible md:h-24 h-[36vh] absolute md:bottom-[0] bottom-0 left-0 right-0">
                    </div>
                    <div
                        class="w-full main-container mx-auto absolute md:bottom-[0] bottom-20 left-0 right-0 h-24 flex items-center">
                        <div class="flex md:flex-row flex-wrap gap-6 justify-evenly items-center w-full">
                            @foreach (__('pages/programs/academic_tutoring.summary') as $item)
                                <div class="flex flex-col md:w-auto justify-center items-center">
                                    <p class="font-bold text-white text-xl md:text-2xl text-center">
                                        {{ $item['title'] }}
                                    </p>
                                    <!-- <p class="font-bold text-white text-banner-subdescription text-center">
                                        {{ $item['sub_title'] }}
                                    </p> -->
                                    <p class="font-light text-white text-banner-subdescription text-center max-w-[240px]">
                                        {!! $item['sub_title'] !!}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col">
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                    @foreach (__('pages/programs/academic_tutoring.benefit_section') as $item)
                        <div class="relative w-min">
                            <div class="shadow-clip flex flex-col items-center relative">
                                <div class="h-40 md:h-48 w-40 md:w-52 bg-white flex flex-col items-center justify-center py-4 mb-4"
                                style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                                <div class="h-12">
                                    <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/benefits/benefit-0' . $loop->iteration . '.png') }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                                </div>
                                <h4 class="font-newprimary text-base font-bold text-center mt-4 leading-4">{{ $item['title'] }}
                                    </h4>
                                    <span class="font-newprimary text-base font-normal text-center">{{ $item['description'] }}</span>
                                </div>
                            </div>
                            <div class="absolute -top-3 -right-3">
                                <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-sm text-white"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- @foreach (__('pages/programs/academic_tutoring.benefit_section') as $item)
                        <div class="p-2 w-full h-full">
                            <div class="flex flex-col items-start bg-[#F2F1F1] p-4 rounded-xl shadow-lg h-full">
                                <div class="flex items-center justify-start gap-2">
                                    <div class="w-10 h-10">
                                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/benefits/benefit-0' . $loop->iteration . '.png') }}"
                                            alt="" class="w-full h-full object-contain">
                                    </div>
                                    <h4 class="font-semibold text-lg leading-6 flex-1">{{ $item['title'] }}</h4>
                                </div>
                                <div class="flex-1">
                                    <p class="text-justify mt-2 text-sm">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach -->
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-4xl uppercase text-center">
                    {{ __('pages/programs/academic_tutoring.subjects_title') }}
                </h2>
                <p class="mt-4 leading-5 text-base text-center max-w-2xl mx-auto">
                    {{ __('pages/programs/academic_tutoring.subjects_desc') }}</p>
                <div class="flex flex-wrap gap-4 mt-4 justify-center">
                    @foreach (__('pages/programs/academic_tutoring.subjects_tag') as $item)
                        <div class="pl-2 pr-3 py-1 rounded-md border-black border flex items-center justify-center gap-2">
                            <div class="w-6 h-5">
                                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/icons/' . $item['image']) }}"
                                    alt="icons" class="w-full h-full object-contain">
                            </div>
                            <span class="text-semibold flex-1">{{ $item['title'] }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="mt-8 flex flex-wrap justify-center items-center">
                    <div class="flex flex-col md:flex-row w-full h-[180vh] md:h-[60vh]">
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-active relative overflow-hidden">
                            <span class="bg-newprimary">IBDP</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li class="leading-6">Physics</li>
                                    <li class="leading-6">Chemistry</li>
                                    <li class="leading-6">Biology</li>
                                    <li class="leading-6">English</li>
                                    <li class="leading-6">Mathematics</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/2">
                                    <li>Environmental System & Societies</li>
                                    <li>Business Management</li>
                                    <li>Economics</li>
                                    <li>Extended Essay (EE) / <br /> Internal Assessment (IA) Guidance</li>
                                </ul>
                            </div>
                            <div class="polygon bg-newprimary"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-1.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                            <span>IB MYP</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Mathematics</li>
                                    <li>Chemistry</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li> Physics</li>
                                    <li> Biology</li>

                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>English</li>
                                </ul>
                            </div>
                            <div class="polygon bg-black"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-2.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                            <span>Cambridge
                                A-Levels</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Physics</li>
                                    <li>Biology</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Mathematics</li>
                                    <li>Economics</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Chemistry</li>
                                </ul>
                            </div>
                            <div class="polygon bg-newprimary"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-3.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                            <span>Cambridge
                                IGCSE</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Mathematics</li>
                                    <li>Physics</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Computer <br /> Science</li>
                                </ul>
                            </div>
                            <div class="polygon bg-black"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-4.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                            <span>Advanced
                                Placement</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Pre-Calculus</li>
                                    <li>Calculus AB</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Calculus BC</li>
                                    <li>Physics</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                </ul>
                            </div>
                            <div class="polygon bg-newprimary"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-5.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="py-16">
        <div class="flex new-main-container w-full flex-col items-center relative">
            <!-- <div
                class="absolute top-0 left-0 right-0 px-8 py-8 h-[105%] md:h-2/3 max-w-4xl mx-auto w-full bg-newprimary rounded-2xl -z-10">
                <div class="flex items-center justify-center gap-4 md:gap-8">
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                    <h3 class="text-white text-2xl md:text-3xl font-bold text-center">
                        {{ __('pages/programs/academic_tutoring.private_class_title') }}
                    </h3>
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                </div>
            </div> -->
            <div class="flex flex-col w-full md:flex-row gap-8 mt-32 md:mt-24 md:px-12">
                @foreach (__('pages/programs/academic_tutoring.private_class_list') as $item)
                    <div class="w-full flex flex-col items-center @if (isset($item['is_popular']) && $item['is_popular'] == true) -mt-[72px] @endif">
                        @if (isset($item['is_popular']) && $item['is_popular'] == true)
                            <div class="px-8 pt-5 pb-12 -mb-6 -z-10 w-full bg-red rounded-2xl flex items-center justify-center gap-2">
                                <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                                <h3 class="text-white text-lg font-bold text-center">
                                    {{ __('pages/programs/admission_mentoring.popular_choice') }}
                                </h3>
                                <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                            </div>
                        @endif
                        <div class="rounded-md bg-white flex flex-col w-full shadow-xl py-4 px-4">
                            <h4 class="font-newprimary font-bold text-black text-center text-4xl uppercase py-2">
                                {{ $item['title'] }}
                            </h4>
                            <div class="flex justify-between py-4 w-full">
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-4">
                                        <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                            <i class="fa-solid fa-check fa-base text-white"></i>
                                        </div>
                                        <h4 class="font-newprimary font-semibold text-newprimary text-xl">
                                            {{ $item['duration'] }}
                                        </h4>
                                    </div>
                                    <h4 class="ml-10 font-newprimary text-black text-base">
                                        {{ $item['duration_text'] }}
                                    </h4>
                                </div>
                            </div>
                            <div class="flex justify-between w-full">
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-4">
                                        <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                            <i class="fa-solid fa-check fa-base text-white"></i>
                                        </div>
                                        <h4 class="font-newprimary font-semibold text-newprimary text-xl">
                                            {{ $item['sessions'] }}
                                        </h4>
                                    </div>
                                    <h4 class="ml-10 font-newprimary text-black text-base">
                                        {!! $item['sessions_text'] !!}
                                    </h4>
                                </div>
                            </div>
                            <x-button href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                title="{{ __('pages/programs/admission_mentoring.learn_more') }}" bg-color="newprimary"
                                padding-x="8" padding-y="1.5" />
                            <span class="mt-1 text-sm text-[#9C9C9C] text-center">
                                {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                                <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                    class="underline text-newprimary hover:text-black">
                                    {{ __('pages/programs/admission_mentoring.book_now') }}
                                </a>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-20">
        <div class="flex new-main-container w-full flex-col items-center">
            <!-- <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_tutoring.why_us_title') }}</h2> -->
            <div class="mt-8">
                <img src="{{ app()->getLocale() == 'id-en' ? asset('assets/img/academic_test_preparation/academic_tutoring/revamp/why_us_english.webp') : asset('assets/img/academic_test_preparation/academic_tutoring/revamp/why_us_bahasa.webp') }}"
                    alt="" class="w-full h-full object-contain">
            </div>
            <!-- <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                @foreach (__('pages/programs/academic_tutoring.why_us_list') as $item)
                    <div class="p-2 w-full h-full">
                        <div
                            class="flex flex-col items-center justify-start bg-[#F2F1F1] p-4 rounded-xl shadow-lg h-full relative">
                            <div class="w-10 h-10 absolute top-0 -translate-y-1/2">
                                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/why-us/why-us-0' . $loop->iteration . '.png') }}"
                                    alt="" class="w-full h-full object-contain">
                            </div>
                            <h4 class="mt-4 font-semibold text-lg leading-6">{{ $item['title'] }}</h4>
                            <p class="text-center mt-2 text-sm">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div> -->
        </div>
    </div>

    {{-- ================================== Bottom Section  ================================== --}}
    <section
        class="md:pt-8 md:pb-20">
        <div class="new-main-container">
            <div class="flex md:flex-row flex-col items-center bg-dark rounded-2xl overflow-hidden">
                <div class="flex flex-col items-center md:items-start justify-center w-full md:w-1/2 md:mx-16 md:order-1 order-2 py-6 px-6 mt-2 md:mt-0 rounded-t-3xl md:rounded-none">
                    <h2 class="font-newprimary font-bold text-2xl text-white text-center md:text-left md:text-2xl uppercase mb-4">
                        {{ __('pages/programs/academic_tutoring.free_trial_title') }}
                    </h2>
                    <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center md:text-left">
                        {{ __('pages/programs/academic_tutoring.free_trial_desc') }}
                    </p>
                    <x-button type="secondary" href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                        title="{{ __('pages/programs/academic_tutoring.free_trial_button') }}"/>
                </div>
                <div class="w-full md:w-1/2 md:order-2 order-1 mt-4">
                    <img loading="lazy" src="{{ asset('assets/img/home/cta_image.webp') }}" alt="bottom banner"
                        class="w-full h-full object-cover rounded-b-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="flex new-main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center uppercase">
                {{ __('pages/programs/academic_tutoring.tetimony_title') }}</h2>
        </div>
        <div class="new-main-container mt-12">
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                    <x-testimonial-card :testimonial=$testi />
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        const acad_tutor_items = document.querySelectorAll('.acad-program-acad-tutor-item');
        let s1ActiveIndex = 0;

        acad_tutor_items.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s1ActiveIndex) {
                    acad_tutor_items[s1ActiveIndex].classList.add(
                        'acad-program-acad-tutor-inactive');
                    acad_tutor_items[s1ActiveIndex].classList.remove(
                        'acad-program-acad-tutor-active');
                    acad_tutor_items[it].classList.remove('acad-program-acad-tutor-inactive');
                    acad_tutor_items[it].classList.add('acad-program-acad-tutor-active');
                    if (it % 2 == 0) {
                        acad_tutor_items[it].querySelector('span').classList.add(
                            'bg-newprimary');
                    } else {
                        acad_tutor_items[it].querySelector('span').classList.add('bg-black');
                    }
                    acad_tutor_items[it].classList.add('acad-program-acad-tutor-active');
                    s1ActiveIndex = it;
                }
            })
        });

        // animation
        const benefit_element = document.getElementById("banner");
        const animation_circle_persentage = document.querySelectorAll(".animation_circle_persentage");
        const persentages = [97, 98, 100];
        const animation_times = [1970, 1980, 2000];
        const position = benefit_element.offsetTop;

        window.addEventListener('scroll', () => {
            if (window.pageYOffset >= position) {
                animation_circle_persentage.forEach((element, it) => {
                    persentage = animation_circle_persentage[it].textContent.trim();
                    if (persentage == '0%') {
                        persentage_animation(animation_circle_persentage[it], persentages[it],
                            animation_times[it]);
                    }
                })
            }
        });

        function persentage_animation(persentage_element, persentage, animation_time) {
            let percent = 0;
            let intervalID = setInterval(() => {
                percent++;
                persentage_element.textContent = `${percent}%`;
                if (percent >= persentage) {
                    clearInterval(intervalID);
                }
            }, animation_time / persentage);
        }

        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
            perMove: 1,
            focus: 0,
            width: "100%",
            arrows: isSmallDevice ? false : true,
            pagination: isSmallDevice ? true : false,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[100%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endpush
