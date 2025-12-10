@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Program', 'url' => '#'],
            ['name' => 'Tutoring Program', 'url' => route('tutoring', [app()->getLocale()])],
            ['name' => 'Skillset Tutoring', 'url' => url()->current()],
        ];
    @endphp
    <title>{{ __('pages/programs/skillset_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/skillset_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/skillset_tutoring.meta_description') }}" />
    <meta name="keywords"
        content="Sasmo , Hkimo, math, math competition, international math olympiad, olympiad, Singapore math challenge, american math olympiad, olimpiade, matematika" />
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
    ]" :active="__('pages/programs/skillset_tutoring.title')" title="{!! __('pages/programs/academic_test_preparation.navbar_title') !!}" />
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
    <section class="py-16 h-screen bg-skillset-tutoring-header bg-cover bg-top" id="banner">
        <x-registration-form program-id="COMAMO" button-title="Consult Now" />
        <div class="h-screen -mt-16">
            <div class="flex flex-col h-full items-center justify-center gap-2 main-container">
                <div class="flex flex-col gap-2 w-full">
                    <h1
                        class="font-bold text-banner-title text-newprimary md:text-left text-center uppercase md:w-1/2 xl:w-1/3">
                        {!! __('pages/programs/skillset_tutoring.title') !!}
                    </h1>
                    <h3
                        class="font-light text-banner-subtitle md:text-xl text-newprimary md:text-left text-center leading-10 md:w-1/2 xl:w-2/3">
                        {!! __('pages/programs/skillset_tutoring.body') !!}
                    </h3>
                    <div class="flex items-center mb-10 -ml-8 mt-3">
                        @foreach (__('pages/programs/skillset_tutoring.competition') as $item)
                            <div class="md:h-[60px] h-[40px]">
                                <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/') . '/' . $item }}"
                                    alt="EduALL" class="h-full">
                            </div>
                        @endforeach
                    </div>

                    <div class="absolute top-32 md:left-[45%] left-[35%]">
                        <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/Sticker 80 medal won.png') }}"
                            alt="EduALL" class="md:w-[100%] w-[60%]">
                    </div>

                    <x-registration-form :is-button="true" program-id="COMAMO" button-title="Consult Now" />
                </div>
            </div>

            {{-- Wave Shape --}}
            <div class="h-[1rem] w-full bg-[#000076] block"></div>
            <div class="custom-shape-divider-top-1763519181 absolute md:-bottom-[5.2rem] w-full md:block hidden">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    {{-- ================================== Features  ================================== --}}
    <section class="py-24 scroll-mt-10" id="start-your-journey">
        <div class="new-main-container mt-10 md:px-[10%]">
            <h3 class="text-2xl md:text-4xl font-bold text-center mb-5 uppercase">
                {{ __('pages/programs/skillset_tutoring.program_title') }}
            </h3>
            <div class="splide pt-5 w-full" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev rounded-full bg-newprimary p-2 shadow-md"
                        style="background: #120FFD; left: -48px;">
                        <i class="fa-solid fa-arrow-left text-xl text-white"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next rounded-full bg-newprimary p-2 shadow-md"
                        style="background: #120FFD; right: -48px;">
                        <i class="fa-solid fa-arrow-right text-xl text-white"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/programs/skillset_tutoring.features') as $index => $item)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 h-full w-full">
                                    <div class="flex flex-col w-full md:w-full my-4 px-1.5 items-stretch h-full">
                                        <div
                                            class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-xl py-8 px-5 bg-white h-full relative overflow-hidden">
                                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                                <img data-src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/' . $item['image']) }}"alt="EduALL"
                                                    class="h-full w-full object-contain lazyload">
                                            </div>

                                            <p class="text-[14px] text-center leading-4 mb-5">
                                                {!! $item['text'] !!}
                                            </p>

                                            <div class="absolute left-0 bottom-5 w-full text-center text-newprimary">
                                                {{ $index + 1 }}
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
                        <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/Piala putih.png') }}"
                            alt="EduALL" class="md:w-[75%] w-24 mb-5">
                    </div>
                    <h3 class="text-white text-2xl mb-3">
                        {{ __('pages/programs/skillset_tutoring.benefit.session_title') }}:
                    </h3>
                    @foreach (__('pages/programs/skillset_tutoring.benefit.sessions') as $item)
                        <div class="flex gap-2 text-xl space-y-2">
                            <i class="fa-solid fa-circle-check text-green-500 mt-3"></i>
                            <span class="text-white">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="col md:w-[50%] w-full text-white text-center">
                    <img data-src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/Flyer AMO General.png') }}"
                        alt="EduALL" class="rounded-xl lazyload">
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Student Achievements Section  ================================== --}}
    <section class="pt-14 bg-[#F9F9F9] pb-14">
        <div class="flex new-main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_test_preparation.achievement_title') }}</h2>
        </div>
        <div class="new-main-container mb-12 md:my-12">
            <!-- Competition Result Table -->
            <div class="">
                <h2 class="text-center text-2xl font-bold text-[#00008F] py-3">Competition Results</h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full" border="0">
                        <thead class="bg-black text-white sticky top-0 z-10">
                            <tr>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-l-2xl"
                                    width="5%">No</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                    width="15%">
                                    Competition</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                    width="25%">
                                    Name</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                    width="15%">
                                    Medal</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-r-2xl"
                                    width="40%">
                                    Grade & School</th>
                            </tr>
                        </thead>
                    </table>

                    <!-- Scrollable Body -->
                    <div class="max-h-[350px] overflow-y-auto">
                        <table class="min-w-full" border="0">
                            <tbody>
                                @foreach ($competition as $index => $item)
                                    <tr class="text-center border-b-2 border-gray-200 hover:bg-gray-100">
                                        <td class="px-4 py-3 border-0 text-sm" width="5%">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm font-medium text-center" width="15%">
                                            <div class="flex w-full justify-center">
                                                <img src="{{ Storage::url('competition' . '/' . $item->image) }}"
                                                    alt="EduALL" class="w-auto h-[50px]">
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm font-medium text-center uppercase"
                                            width="25%">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm uppercase" width="15%">
                                            <div class="flex gap-3 items-center w-full justify-center">
                                                @if ($item->medal == 'Gold')
                                                    <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/gold.png') }}"
                                                        alt="EduALL" class="w-[40px]"
                                                        title="{{ $item->medal }} Medal">
                                                @elseif($item->medal == 'Silver')
                                                    <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/silver.png') }}"
                                                        alt="EduALL" class="w-[40px]"
                                                        title="{{ $item->medal }} Medal">
                                                @else
                                                    <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/bronze.png') }}"
                                                        alt="EduALL" class="w-[40px]"
                                                        title="{{ $item->medal }} Medal">
                                                @endif

                                                {{ $item->medal }} Medal
                                            </div>



                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm uppercase" width="40%">
                                            Grade {{ $item->grade }} | {{ $item->school }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="bg-white pt-14">
        <div class="flex new-main-container w-full flex-col relative z-0">
            <div class="relative bg-general-olympiad-cta bg-cover bg-center rounded-lg py-14 w-full shadow-lg">
                <div class="flex w-full md:flex-row flex-col justify-end md:items-center items-start">
                    <div class="flex flex-col md:w-2/5 w-full md:ml-14 md:px-0 px-5">
                        <h3 class="text-white md:text-5xl text-2xl mb-3 md:text-start text-center">
                            {{ __('pages/programs/skillset_tutoring.cta_title') }}
                        </h3>
                    </div>
                    <div class="flex md:w-3/5 w-full">
                        <x-form title="Program" program-id="COMAMO" lead-id="LS001" is-transparent="true"
                            submit-title="BOOK FREE CONSULTATION" submit-color="#FF3131" hide-title />
                    </div>
                </div>

                {{-- <div class="absolute md:-bottom-[10%] -bottom-[7%] md:right-[46%] right-14">
                    <img src="{{ asset('assets/img/academic_test_preparation/3.SAT/FREE SAT Placement Test.png') }}"
                        alt="EduALL" class="md:w-[120%] w-[60%]">
                </div> --}}
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

        // SLIDER
        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isMediumDevice ? 2 : 5,
            perMove: 1,
            arrows: false,
            focus: 'center',
            gap: 10,
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: false,
            padding: 36,
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

        new Splide(splides[1], {
            type: 'slide',
            perPage: isSmallDevice ? 2 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 5 : 5,
            padding: isSmallDevice ? '6%' : '0',
            perMove: 1,
            arrows: false,
            lazyload: false,
            autoplay: true,
            interval: 4000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endpush
