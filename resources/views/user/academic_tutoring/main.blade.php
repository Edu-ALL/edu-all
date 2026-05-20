@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Program', 'url' => '#'],
            ['name' => 'Tutoring Program', 'url' => route('tutoring', [app()->getLocale()])],
            ['name' => 'Academic Tutoring', 'url' => url()->current()],
        ];
    @endphp
    <title>{{ __('pages/programs/academic_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_tutoring.meta_description') }}" />
    <meta name="keywords"
        content="ib, igsce, math , international curriculum, international baccalaureate, tutoring, private tutoring, subject selection, online tutoring, math tutor" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/tutoring'],
        [
            'title' => __('pages/programs/academic_tutoring.title'),
            'url' => '/programs/tutoring/subject',
        ],
        [
            'title' => __('pages/programs/sat_program.navbar_title'),
            'url' => '/programs/tutoring/sat',
        ],
        [
            'title' => __('pages/programs/skillset_tutoring.title'),
            'url' => '/programs/tutoring/olympiad',
        ],
    ]" :active="__('pages/programs/academic_tutoring.title')" title="{!! __('pages/programs/academic_test_preparation.navbar_title') !!}" />
@endsection

@push('style')
    <style>
        .custom-shape-divider-top-1763519181 {
            position: relative;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1763519181 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 67px;
        }

        .custom-shape-divider-top-1763519181 .shape-fill {
            fill: #000076;
        }
    </style>
@endpush

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-academic-tutoring-header bg-cover bg-top" id="banner">
        <x-registration-form program-id="ACADX" button-title="Book Your Trial Session" />
        <div class="h-screen -mt-16">
            <div class="flex flex-col h-full items-center justify-center gap-2 main-container">
                <div class="flex flex-col gap-2 w-full">
                    <h1
                        class="font-bold text-banner-title text-newprimary md:text-left text-center uppercase md:w-1/2 xl:w-1/3">
                        {{ __('pages/programs/academic_tutoring.title') }}
                    </h1>
                    <h3
                        class="font-light text-banner-subtitle md:text-xl text-newprimary md:text-left text-center leading-10 md:w-1/2 xl:w-2/3">
                        {!! __('pages/programs/academic_tutoring.description') !!}
                    </h3>
                    <div class="flex items-center flex-wrap md:gap-5 gap-1 md:justify-start justify-center md:w-[50%] w-full">
                        <div class="md:w-[150px] w-1/3">
                            <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Curriculum IBDP.png') }}"
                                alt="IBDP" class="w-full">
                        </div>
                        <div class="md:w-[150px] w-1/3">
                            <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Curriculum IBMYP.png') }}"
                                alt="IBMYP" class="w-full">
                        </div>
                        <div class="md:w-[150px] w-1/3">
                            <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Curriculum A level.png') }}"
                                alt="A Level" class="w-full">
                        </div>
                        <div class="md:w-[150px] w-1/3">
                            <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Curriculum Cambridge.png') }}"
                                alt="Cambridge" class="w-full">
                        </div>
                        <div class="md:w-[150px] w-1/3">
                            <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Curriculum AP.png') }}"
                                alt="AP" class="w-full">
                        </div>
                    </div>
                    <x-registration-form :is-button="true" program-id="ACADX" button-title="Book Your Trial Session" />
                </div>
            </div>
        </div>
        <div class="-mt-24">
            <div class="h-auto md:h-24 w-full bg-[#000076] relative">
                <div
                    class="main-container w-full h-full flex flex-col md:flex-row items-center md:items-center md:justify-center py-6 md:py-0">
                    {{-- Achievements Numbers --}}
                    <div
                        class="flex w-full flex-row md:flex-nowrap flex-wrap justify-center items-center md:items-start gap-0 md:gap-6">
                        @foreach (__('pages/programs/academic_tutoring.summary') as $item)
                            <div class="flex flex-col items-center md:w-1/4 w-2/4">
                                <p class="font-bold text-[#B2DCFA] text-3xl"> {{ $item['title'] }}</p>
                                <span class="text-white text-banner-subdescription text-center">
                                    {!! $item['sub_title'] !!}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Wave Shape --}}
            <div class="custom-shape-divider-top-1763519181 absolute md:-bottom-[4rem] w-full md:block hidden">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>


    {{-- ================================== Subject Section  ================================== --}}
    <section class="py-16 bg-[#EFEEEE]">
        <div class="main-container mt-24 mb-10">
            <div class="flex flex-col items-center w-full">
                <h2 class="font-bold md:text-4xl text-2xl uppercase text-center">
                    {{ __('pages/programs/academic_tutoring.subjects_title') }}
                </h2>
                <p class="mt-4 leading-5 text-base text-center max-w-2xl mx-auto">
                    {{ __('pages/programs/academic_tutoring.subjects_desc') }}</p>

                <div class="flex md:flex-row flex-col md:gap-5 gap:2 md:items-stretch w-full justify-center">
                    @foreach (__('pages/programs/academic_tutoring.subjects') as $item)
                        <div class="flex md:w-1/6 w-full">
                            <div class="shadow-lg rounded-lg overflow-hidden mt-8 h-full w-full bg-white">
                                <div class="px-4 flex justify-center items-center">
                                    <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/') . '/' . $item['curriculum_logo'] }}"
                                        alt="{{ $item['curriculum'] }}" class="w-[200px]">
                                </div>
                                <div class="bg-newprimary text-white text-center text-sm font-bold py-2">
                                    {{ $item['curriculum'] }}
                                </div>
                                <div class="p-4">
                                    @foreach ($item['subject'] as $s)
                                        <div class="flex gap-2">
                                            <i class="fa-solid fa-circle text-[5px] mt-2"></i>
                                            <span class="text-[12px]">
                                                {{ $s }}
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>

    {{-- ================================== Pricing Section  ================================== --}}
    <section class="relative">
        <div class="flex w-full flex-col items-center bg-newprimary relative">
            <div class="new-main-container pt-12 pb-36 w-full">
                <div class="hidden flex-col justify-start w-full md:ml-10 md:px-0 px-10">
                    <p class="text-white text-2xl font-bold">
                        {{ __('pages/programs/academic_tutoring.pricing_title') }}
                    </p>
                    <div class="flex gap-2">
                        <p class="text-white md:text-4xl text-2xl font-bold">IDR</p>
                        <h2 class="text-white md:text-7xl text-4xl font-bold">500.000</h2>
                        <p class="text-white md:text-2xl text-xl font-bold md:mt-8 mt-4"> /
                            {{ __('pages/programs/academic_tutoring.pricing_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex new-main-container w-full flex-col items-center relative -mt-40">
            <div class="splide w-full" role="group">
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black">
                        @foreach (__('pages/programs/academic_tutoring.private_class_list') as $item)
                            <li class="splide__slide w-full">
                                <div class="splide__slide__container py-8 pt-16 h-full w-full">
                                    <div class="flex flex-col w-full md:w-full my-4 px-1.5">
                                        <div
                                            class="w-full flex flex-col items-center @if (isset($item['is_popular']) && $item['is_popular'] == true) -mt-[72px] @endif">
                                            @if (isset($item['is_popular']) && $item['is_popular'] == true)
                                                <div
                                                    class="px-8 mt-8 pt-2 pb-6 -mb-5 -z-10 w-full bg-[#BF0000] rounded-2xl flex items-center justify-center gap-2">
                                                    <h3 class="text-white text-lg font-bold text-center">
                                                        {{ __('pages/programs/academic_tutoring.popular_choice') }}
                                                    </h3>
                                                </div>
                                            @endif
                                            <div class="rounded-xl bg-white flex flex-col w-full shadow-xl py-4 px-4">
                                                <h4
                                                    class="font-newprimary font-bold text-black text-center text-3xl uppercase py-2">
                                                    {{ $item['title'] }}
                                                </h4>
                                                <div class="flex justify-between py-1 w-full">
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center gap-4">
                                                            <div
                                                                class="h-6 w-6 bg-[#74C774] flex items-center justify-center rounded-full">
                                                                <i class="fa-solid fa-check fa-base text-white"></i>
                                                            </div>
                                                            <h4
                                                                class="font-newprimary font-semibold text-newprimary text-xl">
                                                                {{ $item['type'] }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between py-1 w-full">
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center gap-4">
                                                            <div
                                                                class="h-6 w-6 bg-[#74C774] flex items-center justify-center rounded-full">
                                                                <i class="fa-solid fa-check fa-base text-white"></i>
                                                            </div>
                                                            <h4
                                                                class="font-newprimary font-semibold text-newprimary text-xl">
                                                                {{ $item['class'] }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between py-1 w-full">
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center gap-4">
                                                            <div
                                                                class="h-6 w-6 bg-[#74C774] flex items-center justify-center rounded-full">
                                                                <i class="fa-solid fa-check fa-base text-white"></i>
                                                            </div>
                                                            <h4
                                                                class="font-newprimary font-semibold text-newprimary text-xl">
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
                                                            <div
                                                                class="h-6 w-6 bg-[#74C774] flex items-center justify-center rounded-full">
                                                                <i class="fa-solid fa-check fa-base text-white"></i>
                                                            </div>
                                                            <h4
                                                                class="font-newprimary font-semibold text-newprimary text-xl">
                                                                {{ $item['sessions'] }}
                                                            </h4>
                                                        </div>
                                                        <h4 class="ml-10 font-newprimary text-black text-base">
                                                            {!! $item['sessions_text'] !!}
                                                        </h4>
                                                    </div>
                                                </div>
                                                <x-button href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                                    title="Book DEPOSIT TRIAL now" bg-color="newprimary" padding-x="8"
                                                    padding-y="1.5" rounded="rounded-full" font-size="base" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Benefit Section  ================================== --}}
    <section class="relative bg-general-benefit py-16">
        <div class="new-main-container w-full">
            <div class="flex md:flex-row flex-col flex-wrap justify-between items-center w-full">
                <div class="col mb-5">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Buku putih.png') }}"
                            alt="EduALL" class="md:w-[75%] w-24 mb-5">
                    </div>
                    <h3 class="text-white text-2xl mb-3">
                        {{ __('pages/programs/academic_tutoring.benefit.session_title') }}:
                    </h3>
                    @foreach (__('pages/programs/academic_tutoring.benefit.sessions') as $item)
                        <div class="flex gap-2 text-xl space-y-2">
                            <i class="fa-solid fa-circle-check text-green-500 mt-3"></i>
                            <span class="text-white">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="col md:w-[50%] w-full">
                    <h3 class="text-[#FEF100] text-3xl mb-4 md:text-center text-start">
                        {{ __('pages/programs/academic_tutoring.tetimony_title') }}</h3>
                    <div class="h-[400px] overflow-auto md:px-4 p-0">
                        @foreach ($testimonies as $testi)
                            <div class="bg-white py-5 px-4 rounded-lg shadow-lg mb-2 w-full">
                                <div class="italic font-bold mb-3 text-sm">
                                    {!! $testi->testi_desc !!}
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="mt-3">
                                        <div class="uppercase text-[#00008F] text-md leading-3 font-bold">
                                            {{ $testi->testi_name }}
                                        </div>
                                        <div class="text-sm mb-0 font-light">
                                            {!! $testi->testi_subcategory !!}
                                        </div>
                                    </div>
                                    {{-- <i class="fa-solid fa-thumbs-up text-2xl text-[#74C774]"></i> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="bg-white pt-14">
        <div class="flex new-main-container w-full flex-col relative z-0">
            <div class="relative bg-general-tutoring-cta bg-cover bg-center rounded-lg py-14 w-full shadow-lg">
                <div class="flex w-full md:flex-row flex-col justify-end md:items-center items-start">
                    <div class="flex flex-col md:w-2/5 w-full md:ml-14 md:px-0 px-5 -mt-[7%]">
                        <h3 class="text-white md:text-5xl text-2xl mb-3 md:text-start text-center">
                            {{ __('pages/programs/academic_tutoring.cta_title') }}
                        </h3>
                        <h5 class="text-white md:text-2xl text-xl mb-3 leading-6 md:text-start text-center">
                            {{ __('pages/programs/academic_tutoring.cta_subtitle') }}
                        </h5>
                    </div>
                    <div class="flex md:w-3/5 w-full">
                        <x-form title="Program" program-id="ACADX" lead-id="LS001" is-transparent="true"
                            submit-title="BOOK FREE CONSULTATION" submit-color="#FF3131" hide-title />
                    </div>
                </div>

                <div class="absolute md:-bottom-[10%] -bottom-[7%] md:right-[46%] right-14">
                    <img src="{{ asset('/assets/img/academic_test_preparation/2.SUBJECT/Free academic tutoring trial.png') }}"
                        alt="EduALL" class="md:w-[120%] w-[60%]">
                </div>
            </div>
            <div class="new-main-containter w-full -mt-[17%] relative md:ml-[10%] ml-0 z-10">
                <div class="flex justify-end">
                    <img src="{{ asset('assets/img/academic_test_preparation/2.SUBJECT/Katyana subject.png') }}"
                        alt="EduALL" class="w-[40%]">
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
            perPage: isMediumDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            // focus: 'center',
            gap: 10,
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: false,
            padding: 24,
        }).on('pagination:mounted', function(data) {
            if (isSmallDevice || isMediumDevice) {
                // You can add your class to the UL element
                data.list.classList.add('splide__pagination--custom');
                data.list.classList.add('top-[105%]');

                // `items` contains all dot items
                data.items.forEach(function(item) {
                    item.button.style.margin = '0 6px'
                    item.button.style.backgroundColor = '#0367BF';
                });
            }
        }).mount();
    </script>
@endpush
