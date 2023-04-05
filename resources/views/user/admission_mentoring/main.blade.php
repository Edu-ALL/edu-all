@extends('layout.user.main')
@section('head')
    <title>We offer personalized 1-on-1 admissions mentoring service</title>
    <meta name="title" content="We offer personalized 1-on-1 admissions mentoring service" />
    <meta name="description"
        content="personalized 1-on-1 admissions mentoring service that will serve as an academic walk-through for students to get accepted at their dream schools and find best fit universities" />
@endsection
@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full bg-primary/50">
                <div class="flex flex-col justify-center items-center h-full md:pb-20 lg:max-w-3xl lg:mx-auto">
                    <h1 class="font-semibold font-primary capitalize text-4xl text-white tracking-widest text-center">
                        {{ __('pages/programs/admission_mentoring.title') }}
                    </h1>
                    <p class="mt-2 font-primary font-normal text-xl text-white text-center">
                        {{ __('pages/programs/admission_mentoring.body') }}</p>
                </div>
            </div>

            <img data-original="{{ asset('assets/img/banner/Admission mentoring banner.webp') }}"
                alt="Allineduspace Admission Mentoring Banner"
                class="w-full h-[400px] object-cover object-center md:h-[450px]">

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
                            alt="Allineduspace ilustration 1" class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-primary text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
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
                            class="font-primary text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
                            <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_2') }}
                            </span>{{ __('pages/programs/admission_mentoring.benefit_2_sub') }}
                        </h4>
                    </div>
                    <div class="hidden md:block min-h-full w-[1px] bg-black"></div>
                </div>
                <div class="flex flex-1">
                    <div class="flex flex-1 flex-col items-center gap-2 md:gap-6">
                        <img data-original="{{ asset('assets/img/admission mentoring/benefit-3.png') }}"
                            alt="Allineduspace ilustration" class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-primary text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
                            <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_3') }}
                            </span>{{ __('pages/programs/admission_mentoring.benefit_3_sub') }}
                        </h4>
                    </div>
                    <div class="hidden md:block min-h-full w-[1px] bg-black"></div>
                </div>
                <div class="flex flex-1">
                    <div class="flex flex-1 flex-col items-center gap-2 md:gap-6">
                        <img data-original="{{ asset('assets/img/admission mentoring/benefit-4.png') }}"
                            alt="Allineduspace ilustration" class="h-20 object-center object-cover md:h-24">
                        <h4
                            class="font-primary text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
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
            <h2 class="font-primary font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.undergraduate_title') }}
                <span
                    class=" block text-yellow">{{ __('pages/programs/admission_mentoring.undergraduate_subtitle') }}</span>
            </h2>

            <p class="max-w-3xl mx-auto font-primary text-xl text-center">
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
                                        <div class="flex flex-col h-full bg-white rounded-xl overflow-hidden">
                                            <img data-original="{{ asset('assets/img/admission mentoring/' . $item['image']) }}"
                                                alt="Allineduspace Undergraduate">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-primary font-bold text-primary text-2xl">
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
            <div class="absolute top-[100px] -z-10 bg-primary w-full h-[90%]"></div>
        </div>

    </section>

    {{-- ================================== Graduate Program Section ================================== --}}
    <section id="graduate" class="py-16">
        {{-- Graduate Program Title --}}
        <div class="main-container">
            <h2 class="font-primary font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.graduate_title') }}
                <span class=" block text-yellow">{{ __('pages/programs/admission_mentoring.graduate_subtitle') }}</span>
            </h2>

            <p class="max-w-3xl mx-auto font-primary text-xl text-center">
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
                                        <div class="flex flex-col h-full bg-white rounded-xl overflow-hidden">
                                            <img data-original="{{ asset('assets/img/admission mentoring/' . $item['image']) }}"
                                                alt="Allineduspace Graduate">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-primary font-bold text-primary text-2xl">
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
            <div class="absolute top-[100px] -z-10 bg-primary w-full min-h-full"></div>
        </div>

    </section>

    {{-- ================================== Univtransfer Program Section ================================== --}}
    <section id="univ-transfer" class="py-16">
        {{-- univtransfer Program Title --}}
        <div class="main-container">
            <h2 class="font-primary font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.univtransfer_title') }}
                <span
                    class=" block text-yellow">{{ __('pages/programs/admission_mentoring.univtransfer_subtitle') }}</span>
            </h2>

            <p class="max-w-3xl mx-auto font-primary text-xl text-center">
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
                                        <div class="flex flex-col h-full bg-white rounded-xl overflow-hidden">
                                            <img data-original="{{ asset('assets/img/admission mentoring/' . $item['image']) }}"
                                                alt="Allineduspace University Transfer">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-primary font-bold text-primary text-2xl">
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
            <div class="absolute top-[100px] -z-10 bg-primary w-full min-h-full"></div>
        </div>

    </section>

    {{-- ================================== Testimonial Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="main-container">
            <h2 class="font-primary font-bold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.testimony') }}
            </h2>

            <div class="splide" aria-labelledby="carousel-heading">
                <ul class="splide__pagination"></ul>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full">
                                <div class="splide__slide__container h-full">
                                    <div
                                        class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                        <div class="flex flex-col">
                                            <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                alt="Allineduspace Testimony" class="w-7 mb-3 h-auto">
                                            <div class="font-primary text-sm text-white text-justify">
                                                {!! $testi->testi_desc !!}
                                            </div>
                                        </div>
                                        <div class="mt-4 flex flex-col">
                                            <div class="font-primary font-semibold text-base text-yellow">
                                                {{ $testi->testi_name }}
                                            </div>
                                            <div class="font-primary text-sm text-white">
                                                {!! $testi->testi_subtitle !!}
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

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class=" font-primary font-extrabold text-primary text-center text-4xl mb-4 md:w-1/2">
                {{ __('pages/programs/admission_mentoring.sign_up_text') }}
                <span class="block text-yellow">{{ __('pages/programs/admission_mentoring.sign_up_text_sub') }}</span>
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                class="my-btn">{{ __('pages/programs/admission_mentoring.sign_up_btn') }}</a>
        </div>

    </section>
@endsection

@section('script')
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
@endsection
