@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Program', 'url' => '#'],
            ['name' => 'Tutoring Program', 'url' => route('tutoring', [app()->getLocale()])],
            ['name' => 'Standardized Test', 'url' => url()->current()],
        ];
    @endphp
    <title>{{ __('pages/programs/sat_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/sat_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/sat_program.meta_description') }}" />
    <meta name="keywords"
        content="sat, sat test, satdate, satbook, sat preparation, sat bahasa inggris, daftar sat, harga SAT, SAT EXAM, sat practice test" />
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
    ]" :active="__('pages/programs/sat_program.navbar_title')" title="{!! __('pages/programs/academic_test_preparation.navbar_title') !!}" />
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
    <section class="py-16 h-screen bg-sat-prep-header bg-cover bg-top" id="banner">
        <x-registration-form program-id="SATPRIV" button-title='Take FREE Placement Test now' />
        <div class="h-screen -mt-16">
            <div class="flex flex-col h-full items-center justify-center gap-2 main-container">
                <div class="flex flex-col gap-2 w-full">
                    <h1
                        class="font-bold text-banner-title text-newprimary md:text-left text-center uppercase md:w-1/2 xl:w-1/3">
                        {!! __('pages/programs/sat_program.title') !!}
                    </h1>
                    <h3
                        class="font-light text-banner-subtitle md:text-xl text-newprimary md:text-left text-center leading-10 md:w-1/2 xl:w-2/3">
                        {!! __('pages/programs/sat_program.body') !!}
                    </h3>

                    <div class="absolute bottom-24 md:left-[30%] left-14">
                        <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/Sticker free sat.png') }}"
                            alt="EduALL" class="md:w-[70%] w-[60%]">
                    </div>

                    <x-registration-form :is-button="true" program-id="SATPRIV"
                        button-title='Take FREE Placement Test now' />
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
                        @foreach (__('pages/programs/sat_program.summary') as $item)
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

    {{-- ================================== Score Section  ================================== --}}
    <section class="py-16">
        <div class="new-main-container mt-24">
            <div class="flex md:flex-row flex-col items-center justify-center gap-8 w-full">
                <div class="md:w-1/2 w-full">
                    <div class="md:text-6xl text-2xl font-bold md:text-start text-center">
                        SAT:
                    </div>
                    <p class="md:text-4xl text-xl font-bold md:text-start text-center">
                        Your Way to World's Top Universities
                    </p>
                </div>
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/Ivy Leagues Campus SAT Scores.png') }}"
                        alt="EduALL" class="w-full">
                </div>
            </div>

            <div class="flex md:mt-10 mt-5">
                <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/SAT flow.png') }}" alt="EduALL"
                    class="w-full">
            </div>
        </div>
    </section>

    {{-- ================================== Pricing Section  ================================== --}}
    <section class="relative pb-24">
        <div class="bg-newprimary relative h-[350px] w-full">

        </div>
        <div class="flex main-container w-full md:flex-row flex-col items-center relative -mt-[300px] mb-10">
            <div class="md:w-[350px]">
                <div class="text-4xl font-bold text-white md:-mt-32 md:text-start text-center">
                    Private <br>Class
                </div>
            </div>
            <div class="splide w-full" role="group">
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black">
                        @foreach (__('pages/programs/sat_program.pricing.private') as $item)
                            <li class="splide__slide w-full">
                                <div class="splide__slide__container py-8 pt-16 h-full w-full">
                                    <div class="flex flex-col w-full md:w-full my-4 px-1.5 items-stretch">
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
                                            <div
                                                class="rounded-xl bg-white flex flex-col w-full shadow-xl py-4 px-6 h-[420px] relative overflow-hidden">
                                                <h4
                                                    class="font-newprimary font-bold text-black text-start md:text-4xl text-2xl uppercase py-2">
                                                    {!! $item['title'] !!}
                                                </h4>
                                                <div class="flex flex-nowrap w-fullgap-0">
                                                    <p class="w-[90px] text-base leading-0">
                                                        {{ __('pages/programs/sat_program.start_from') }}
                                                    </p>
                                                    <div class="md:text-6xl text-4xl font-bold">
                                                        {{ $item['price'] }}
                                                    </div>
                                                    <div class="md:mt-7 mt-5">
                                                        Jt
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                                <div class="flex justify-between py-1 w-full">
                                                    <div class="flex flex-col">
                                                        @foreach ($item['features'] as $f)
                                                            <div class="flex items-start gap-4 space-y-2">
                                                                <div
                                                                    class="h-6 w-6 bg-[#74C774] flex items-center justify-center rounded-full mt-3">
                                                                    <i class="fa-solid fa-check fa-base text-white"></i>
                                                                </div>
                                                                <h4
                                                                    class="font-newprimary font-semibold text-newprimary text-xl">
                                                                    {!! $f !!}
                                                                </h4>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="absolute bottom-5 left-0 w-full flex justify-center">
                                                    <x-button
                                                        href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                                        title="Book FREE trial now" bg-color="newprimary" padding-x="8"
                                                        padding-y="1.5" rounded="rounded-full" font-size="base" />
                                                </div>
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
        <div class="flex md:flex-row flex-col main-container w-full items-center relative">
            <div class="md:w-[350px]">
                <div class="text-4xl font-bold text-newprimary md:text-start text-center">
                    Semi Private <br>Class
                </div>
            </div>
            <div class="w-full px-7">
                <div class="rounded-xl bg-white flex flex-col w-full shadow-xl py-4 px-5">
                    <div class="flex md:flex-row flex-col md:gap-20 items-center md:justify-between justify-start w-full">
                        <div class="flex flex-nowrap gap-1 md:w-auto w-full">
                            <p class="md:text-lg leading-0 md:w-auto w-[40%] md:ml-0 ml-4">
                                {{ __('pages/programs/sat_program.start_from') }}
                            </p>
                            <div class="md:text-8xl text-4xl font-bold">
                                {{ __('pages/programs/sat_program.pricing.semi_private.price') }}
                            </div>
                            <div class="md:text-lg md:mt-14 mt-5 md:ml-2">
                                Jt
                            </div>
                        </div>

                        <div class="flex flex-col md:mb-0 mb-10">
                            @foreach (__('pages/programs/sat_program.pricing.semi_private.features') as $i)
                                <div class="flex items-start gap-4 space-y-2">
                                    <div class="h-6 w-6 bg-[#74C774] flex items-center justify-center rounded-full mt-3">
                                        <i class="fa-solid fa-check fa-base text-white"></i>
                                    </div>
                                    <h4 class="font-newprimary font-semibold text-newprimary text-2xl">
                                        {{ $i }}
                                    </h4>
                                </div>
                            @endforeach
                        </div>

                        <x-button href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                            title="Book FREE trial now" bg-color="newprimary" padding-x="8" padding-y="1.5"
                            rounded="rounded-full" font-size="base" margin-top="0" />
                    </div>
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
                        <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/Menulis putih.png') }}"
                            alt="EduALL" class="md:w-[75%] w-24 mb-5">
                    </div>
                    <h3 class="text-white text-2xl mb-3">
                        {{ __('pages/programs/sat_program.benefit.session_title') }}:
                    </h3>
                    @foreach (__('pages/programs/sat_program.benefit.sessions') as $item)
                        <div class="flex gap-2 text-xl space-y-2">
                            <i class="fa-solid fa-circle-check text-green-500 mt-3"></i>
                            <span class="text-white">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="col md:w-[50%] w-full text-white text-center">
                    <div class="flex flex-col w-full gap-5">
                        @foreach (__('pages/programs/sat_program.testi') as $item)
                            <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/') . '/' . $item }}"
                                alt="" class="w-full rounded-lg">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="bg-white pt-14">
        <div class="flex new-main-container w-full flex-col relative z-0">
            <div class="relative bg-general-sat-cta bg-cover bg-center rounded-lg py-14 w-full shadow-lg">
                <div class="flex w-full md:flex-row flex-col justify-end md:items-center items-start">
                    <div class="flex flex-col md:w-2/5 w-full md:ml-14 md:px-0 px-5 -mt-[7%]">
                        <h3 class="text-white md:text-5xl text-2xl mb-3 md:text-start text-center">
                            {{ __('pages/programs/sat_program.cta_title') }}
                        </h3>
                        <h5 class="text-white md:text-2xl text-xl mb-3 leading-6 md:text-start text-center">
                            {{ __('pages/programs/sat_program.cta_subtitle') }}
                        </h5>
                    </div>
                    <div class="flex md:w-3/5 w-full">
                        <x-form title="Program" program-id="SATPRIV" lead-id="LS001" is-transparent="true"
                            submit-title="BOOK FREE CONSULTATION" submit-color="#FF3131" hide-title />
                    </div>
                </div>

                <div class="absolute md:-bottom-[10%] -bottom-[7%] md:right-[46%] right-14">
                    <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/FREE SAT Placement Test.png') }}"
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
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        const s4_item = document.querySelectorAll('.sat-program-s3-item');
        let s4ActiveIndex = 0;

        s4_item.forEach((item, it) => {
            item.addEventListener('mouseover', () => {
                if (it != s4ActiveIndex) {
                    s4_item[s4ActiveIndex].classList.add('sat-program-s3-inactive');
                    s4_item[s4ActiveIndex].classList.remove('sat-program-s3-active');
                    s4_item[it].classList.remove('sat-program-s3-inactive');
                    s4_item[it].classList.add('sat-program-s3-active');
                    s4_item[it].querySelector('span').classList.add('opacity-0');
                    s4_item[it].querySelector('span').classList.remove('opacity-100');
                    setTimeout(() => {
                        s4_item[it].querySelector('span').classList.remove('opacity-0');
                        s4_item[it].querySelector('span').classList.add('opacity-100');
                    }, 300);
                    s4ActiveIndex = it;
                }
            })
        });

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
