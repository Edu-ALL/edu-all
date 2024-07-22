@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/univ_transfer_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/univ_transfer_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/univ_transfer_program.meta_description') }}" />
@endsection

@section('content')
    {{-- ==================================== Header Section ========================================= --}}
    <section class="py-28 bg-transfer-header bg-cover bg-center md:py-48 ">
        <div class="relative main-container">
            <div class="flex items-center gap-y-4 md:max-w-xl lg:pb-[10px]">
                <div class="flex-col">
                    <div class="w-full">
                        <h4 class="mb-2 font-newprimary font-semibold text-xl text-white lg:text-start text-center md:text-2xl">
                            {{ __('pages/programs/univ_transfer_program.subtitle') }}
                        </h4>
                        <span class="flex items-center mb-5">
                            <span class="block w-2 h-2 rounded-full bg-white"></span>
                            <span class="block w-full h-0.5 bg-white"></span>
                            <span class="block w-2 h-2 rounded-full bg-white"></span>
                        </span>
                    </div>
                    <h1
                        class="font-newprimary font-black text-4xl text-newyellow lg:text-start text-center tracking-normal md:text-3xl lg:text-4xl xl:text-5xl">
                        {{ __('pages/programs/univ_transfer_program.title') }}
                    </h1>
                    <p class="mt-4 font-newprimary text-base text-white lg:text-start text-center md:text-xl md:leading-6">
                        {{ __('pages/programs/univ_transfer_program.body') }}</p>
                </div>
            </div>
            <div
                class="hidden absolute -bottom-[70%] left-[50%] max-w-full w-full px-10 -translate-x-[50%] translate-y-[50%] md:block lg:max-w-4xl">
                <div class="w-full shadow-md rounded-3xl">
                    <img loading="lazy" src="{{ asset('assets/img/admission mentoring/benefit.webp') }}"
                        alt="EduALL admission mentoring benefit" class="w-full">
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== What Will You Do Section ========================================= --}}
    <section class="py-10 md:py-40">
        <div class="flex flex-col w-full">
            <div class="main-container z-10">
                <div class="flex justify-center">
                    <h2
                        class="w-full px-4 py-3 font-newprimary font-extrabold text-3xl text-newprimary text-center tracking-tight shadow-md bg-newyellow md:w-4/6 md:text-4xl lg:w-2/5">
                        {{ __('pages/programs/univ_transfer_program.do_title') }}
                    </h2>
                </div>
            </div>
            <div class="flex flex-col items-stretch gap-6 -mt-8 pl-4 pr-4 lg:pl-0 lg:pr-20 xl:pr-40 lg:flex-row">
                <div class="w-full min-h-full bg-transfer-do bg-cover bg-center rounded-r-3xl lg:w-1/2"></div>
                <div class="flex flex-col gap-4 w-full py-12 lg:w-1/2">
                    @foreach (__('pages/programs/univ_transfer_program.do_list') as $item)
                        <div
                            class="flex justify-between items-stretch gap-4 w-full min-h-full bg-gradient-to-r from-[#0000FF] via-primary to-[#0000FF] overflow-hidden lg:min-h-max">
                            <div
                                class="relative flex items-center w-1/5 min-h-full px-2 overflow-hidden lg:w-1/3 lg:px-6">
                                <span
                                    class="font-newprimary font-extrabold text-8xl md:text-9xl text-newprimary leading-none opacity-80 z-10">
                                    {{ $loop->iteration }}
                                </span>
                                <img data-original="{{ asset('assets/img/admission mentoring/Master transfer/Transfer ' . $loop->iteration . '.webp') }}"
                                    alt="EduALL"
                                    class="absolute w-full h-full -m-2 sm:-m-6 object-cover object-center">
                            </div>
                            <div class="flex flex-col justify-center gap-2 w-4/5 lg:w-2/3 h-full pr-10 py-3">
                                <h4 class="font-newprimary font-semibold text-xl text-newyellow">{{ $item['title'] }}</h4>
                                <p class="font-newprimary text-base text-white leading-4">
                                    {{ $item['body'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== 4 PILLARS ========================================= --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="max-w-3xl mx-auto font-newprimary font-bold text-4xl text-newprimary text-center leading-8">
                    {{ __('pages/programs/univ_transfer_program.pilar_title') }}
                </h2>
                <div class="my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    @foreach (__('pages/programs/univ_transfer_program.pilar_list') as $item)
                        <div class="pilar_card h-72 md:h-60">
                            <div class="front flex items-center justify-center w-full overflow-hidden">
                                <img data-original="{{ asset('assets/img/admission mentoring/' . $item['img']) }}"
                                    alt="EduALL 4 pilar" class="w-full bg-cover bg-center">
                            </div>
                            <div
                                class="back flex flex-col justify-center items-center w-full h-full px-4 bg-{{ $item['color'] }}">
                                <h4 class="mb-4 font-newprimary font-bold text-3xl text-white text-center leading-6">
                                    {{ $item['title'] }}</h4>
                                <p class="font-newprimary text-base text-white text-center leading-4">{{ $item['body'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center mt-16">
                    <p class="w-full max-w-3xl mx-auto font-newprimary font-semibold text-newprimary text-center">
                        {{ __('pages/programs/univ_transfer_program.pilar_desc') }}
                    </p>
                    <a href="https://drive.google.com/file/d/1kenqeMGb2C6rjRILuMFgbHODZxtze-yL/view?usp=sharing"
                        target="_blank" class="mt-8">
                        <span
                            class="px-6 py-2 font-newprimary font-semibold text-white text-center rounded-md bg-[#F90C0C]">{{ __('pages/programs/univ_transfer_program.pilar_btn') }}
                        </span>
                    </a>
                    <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}" target="_block"
                        class="mt-8 rounded-xl overflow-hidden">
                        <img data-original="{{ asset('assets/img/admission mentoring/Graduate/Graduate IC.webp') }}"
                            alt="EduALL graduate ic" class="mt-12 w-full max-w-2xl mx-auto object-contain">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== Why us section ========================================= --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <div class="flex justify-center">
                    <h2
                        class="w-full px-4 py-3 font-newprimary font-extrabold text-3xl text-newprimary text-center tracking-tight shadow-md bg-newyellow md:w-4/6 md:text-4xl lg:w-2/5">
                        {{ __('pages/programs/univ_transfer_program.why_us_title') }}
                    </h2>
                </div>
                <p class="max-w-2xl my-8 mx-auto font-newprimary font-medium text-newprimary text-center">
                    {{ __('pages/programs/univ_transfer_program.why_us_desc') }}
                </p>
                @if (app()->getLocale() == 'id')
                    <img data-original="{{ asset('assets/img/admission mentoring/Why Us (adm mentoring) id.webp') }}"
                        alt="why us mentoring curr" class="w-full max-w-4xl mx-auto">
                @else
                    <img data-original="{{ asset('assets/img/admission mentoring/Why Us (adm mentoring).webp') }}"
                        alt="why us mentoring curr" class="w-full max-w-4xl mx-auto">
                @endif
            </div>
        </div>
    </section>

    {{-- ====================================  Testimonial Section ========================================= --}}
    @if(count($testimonies) > 0)
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <div class="flex justify-center">
                    <h2
                        class="w-full px-4 py-3 font-newprimary font-extrabold text-3xl text-newprimary text-center tracking-tight shadow-md bg-newyellow md:w-4/6 md:text-4xl xl:w-3/6">
                        {{ __('pages/programs/univ_transfer_program.testimony_title') }}
                    </h2>
                </div>
                <div class="mt-16 splide" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                            <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                            <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list font-newprimary text-black px-8">
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
        </div>
    </section>
    @endif


    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full max-w-3xl mb-6 font-newprimary font-black text-white text-center lg:text-4xl text-2xl">
                {{ __('pages/programs/univ_transfer_program.bottom_title') }}
                <span class="mt-3 block lg:text-3xl text-xl text-newyellow">
                    {{ __('pages/programs/univ_transfer_program.bottom_subtitle') }}
                </span>
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                class="px-5 py-2 mt-4 font-newprimary font-medium text-base text-white text-center bg-red">{{ __('pages/programs/univ_transfer_program.bottom_btn') }}
            </a>
        </div>
    </section>
@endsection

@push('script')
    <script>
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
            arrows: isMediumDevice ? false : true,
            autoplay: true,
            lazyload: true,
            interval: 4000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endpush
