@extends('layout.user.main')
@section('head')
    <title>{{ __('pages/programs/admission_mentoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/admission_mentoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/admission_mentoring.meta_description') }}" />
@endsection
@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center h-full lg:max-w-xl">
                    <div class="flex-row">
                        <h1
                            class="font-bold font-newprimary text-5xl text-white tracking-normal mb-3 lg:text-start text-center capitalize">
                            {{ __('pages/programs/admission_mentoring.title') }}
                        </h1>
                        <p class="mt-2 font-newprimary font-normal text-xl text-white lg:text-start text-center">
                            {{ __('pages/programs/admission_mentoring.body') }}</p>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/Mentoring.webp') }}"
                alt="EduALL - Admission Mentoring Banner" class="w-full h-[400px] object-cover object-center md:h-[450px]">

        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="relative md:mb-28 mx-6 md:h-10">
        <div
            class="max-w-5xl mx-auto min-w-max bg-white shadow-[0px_0px_10px_5px] shadow-black/20 md:absolute-center md:-top-[180px]">
            <div class="grid grid-cols-2 px-4 py-8 gap-6 md:px-10 md:py-4 md:gap-y-14 md:gap-x-10 md:grid-cols-4">
                <div class="flex flex-1">
                    <div class="flex flex-1 flex-col items-center gap-2 md:gap-6">
                        <img data-original="{{ asset('assets/img/admission mentoring/benefit-1.png') }}"
                            alt="EduALL - ilustration 1" class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-newprimary text-xl  font-normal text-center text-newprimary tracking-tight leading-6 md:text-sm md:leading-4">
                            <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_1') }}
                            </span>{{ __('pages/programs/admission_mentoring.benefit_1_sub') }}
                        </h4>
                    </div>
                    <div class="hidden md:block min-h-full w-[1px] bg-black"></div>
                </div>
                <div class="flex flex-1">
                    <div class="flex flex-1 flex-col items-center gap-2 md:gap-6">
                        <img data-original="{{ asset('assets/img/admission mentoring/benefit-2.png') }}" alt="ilustration"
                            class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-newprimary text-xl  font-normal text-center text-newprimary tracking-tight leading-6 md:text-sm md:leading-4">
                            <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_2') }}
                            </span>{{ __('pages/programs/admission_mentoring.benefit_2_sub') }}
                        </h4>
                    </div>
                    <div class="hidden md:block min-h-full w-[1px] bg-black"></div>
                </div>
                <div class="flex flex-1">
                    <div class="flex flex-1 flex-col items-center gap-2 md:gap-6">
                        <img data-original="{{ asset('assets/img/admission mentoring/benefit-3.png') }}"
                            alt="EduALL - ilustration" class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-newprimary text-xl  font-normal text-center text-newprimary tracking-tight leading-6 md:text-sm md:leading-4">
                            <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_3') }}
                            </span>{{ __('pages/programs/admission_mentoring.benefit_3_sub') }}
                        </h4>
                    </div>
                    <div class="hidden md:block min-h-full w-[1px] bg-black"></div>
                </div>
                <div class="flex flex-1">
                    <div class="flex flex-1 flex-col items-center gap-2 md:gap-6">
                        <img data-original="{{ asset('assets/img/admission mentoring/benefit-4.png') }}"
                            alt="EduALL - ilustration" class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-newprimary text-xl  font-normal text-center text-newprimary tracking-tight leading-6 md:text-sm md:leading-4">
                            <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_4') }}
                            </span>{{ __('pages/programs/admission_mentoring.benefit_4_sub') }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Undergraduate Program Section ================================== --}}
    <section id="undergraduate" class="py-16">
        {{-- Undergraduate Program Title --}}
        <div class="main-container">
            <h2 class="font-newprimary font-extrabold text-newprimary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.undergraduate_title') }}
                <span
                    class=" block text-newyellow">{{ __('pages/programs/admission_mentoring.undergraduate_subtitle') }}</span>
            </h2>

            <p class="max-w-3xl mx-auto font-newprimary text-xl text-center">
                {{ __('pages/programs/admission_mentoring.undergraduate_desc') }}
            </p>

        </div>

        {{-- Undergraduate Program Cards --}}
        <div class="relative">
            <div class="splide mt-8 main-container" aria-label="Basic Structure Example">
                <div class="md:position: md:relative">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-3xl text-white"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-3xl text-white"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list flex">
                            @foreach (__('pages/programs/admission_mentoring.undergraduate_list') as $item)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full px-1 lg:px-2 xl:px-4 2xl:px-6">
                                        <div class="flex flex-col h-full bg-white overflow-hidden">
                                            <img data-original="{{ asset('assets/img/admission mentoring/' . $item['image']) }}"
                                                alt="EduALL - Undergraduate">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-newprimary font-bold text-newprimary text-2xl">
                                                    {{ $item['title'] }}</h4>
                                                <p>{{ $item['desc'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="absolute top-[100px] -z-10 bg-[#0000FF] w-full h-[90%]"></div>
        </div>

    </section>

    {{-- ================================== Graduate Program Section ================================== --}}
    <section id="graduate" class="py-16">
        {{-- Graduate Program Title --}}
        <div class="main-container">
            <h2 class="font-newprimary font-extrabold text-newprimary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.graduate_title') }}
                <span class=" block text-newyellow">{{ __('pages/programs/admission_mentoring.graduate_subtitle') }}</span>
            </h2>

            <p class="max-w-3xl mx-auto font-newprimary text-xl text-center">
                {{ __('pages/programs/admission_mentoring.graduate_desc') }}
            </p>

        </div>

        {{-- Graduate Program Cards --}}
        <div class="relative">
            <div class="splide splide__testi  mt-8 main-container" aria-label="Basic Structure Example">
                <div class="md:position: md:relative">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-3xl text-white"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-3xl text-white"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list flex">
                            @foreach (__('pages/programs/admission_mentoring.graduate_list') as $item)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full px-1 lg:px-2 xl:px-4 2xl:px-6">
                                        <div class="flex flex-col h-full bg-white overflow-hidden">
                                            <img data-original="{{ asset('assets/img/admission mentoring/' . $item['image']) }}"
                                                alt="EduALL - Graduate">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-newprimary font-bold text-newprimary text-2xl">
                                                    {{ $item['title'] }}</h4>
                                                <p>{{ $item['desc'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="absolute top-[100px] -z-10 bg-[#0000FF] w-full min-h-full"></div>
        </div>

    </section>

    {{-- ================================== Univtransfer Program Section ================================== --}}
    <section id="univ-transfer" class="py-16">
        {{-- univtransfer Program Title --}}
        <div class="main-container">
            <h2 class="font-newprimary font-extrabold text-newprimary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.univtransfer_title') }}
                <span
                    class=" block text-newyellow">{{ __('pages/programs/admission_mentoring.univtransfer_subtitle') }}</span>
            </h2>

            <p class="max-w-3xl mx-auto font-newprimary text-xl text-center">
                {{ __('pages/programs/admission_mentoring.univtransfer_desc') }}
            </p>

        </div>

        {{-- univtransfer Program Cards --}}
        <div class="relative">
            <div class="splide mt-8 main-container" aria-label="Basic Structure Example">
                <div class="md:position: md:relative">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-3xl text-white"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-3xl text-white"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list flex">
                            @foreach (__('pages/programs/admission_mentoring.univtransfer_list') as $item)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full px-1 lg:px-2 xl:px-4 2xl:px-6">
                                        <div class="flex flex-col h-full bg-white overflow-hidden">
                                            <img data-original="{{ asset('assets/img/admission mentoring/' . $item['image']) }}"
                                                alt="EduALL - University Transfer">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-newprimary font-bold text-newprimary text-2xl">
                                                    {{ $item['title'] }}</h4>
                                                <p>{{ $item['desc'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="absolute top-[100px] -z-10 bg-[#0000FF] w-full min-h-full"></div>
        </div>

    </section>

    {{-- ================================== Testimonial Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="main-container">
            <h2 class="font-newprimary font-bold text-newprimary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.testimony') }}
            </h2>

            <div class="splide" role="group">
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

    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full max-w-3xl mb-6 font-newprimary font-black text-white text-center lg:text-4xl text-2xl">
                {{ __('pages/programs/graduate_program.bottom_title') }}
                <strong class="mt-3 block lg:text-3xl text-xl text-newyellow">
                    {{ __('pages/programs/graduate_program.bottom_subtitle') }}
                </strong>
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                class="px-5 py-2 mt-4 font-newprimary font-medium text-base text-white text-center bg-red">
                {{ __('pages/programs/graduate_program.bottom_btn') }}
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

        for (var i = 0; i < splides.length - 1; i++) {
            new Splide(splides[i], {
                type: 'slide',
                perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : 3,
                arrows: isLargeDevice ? false : true,
                perMove: 1,
                pagination: false,
                autoplay: true,
                lazyload: true,
                interval: 5000,
            }).mount();
        }

        new Splide(splides[3], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
            perMove: 1,
            focus: 0,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[110%]');

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
