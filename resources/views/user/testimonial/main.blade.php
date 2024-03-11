@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/resources/testimonial.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/resources/testimonial.meta_title') }}" />
    <meta name="description" content="{{ __('pages/resources/testimonial.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Top Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <h2 class="font-newprimary font-bold text-4xl text-[#6696E2] text-center">
                {{ __('pages/resources/testimonial.title') }}
            </h2>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col gap-y-28">
                {{-- Admission Mentoring --}}
                <div class="flex flex-col md:flex-row">
                    <div class="mb-4 sm:mb-0 relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img src="{{ asset('assets/logo/quote-big.svg') }}" alt="Quote" loading="lazy">
                        </div>
                        <h2
                            class="mt-16 font-newprimary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Admission <br> Mentoring</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                                    </button>
                                </div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($admission_mentoring as $testi)
                                            <li class="splide__slide w-full pb-8">
                                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                                    <div
                                                        class="bg-[#F3F3F3] pt-4 flex flex-col justify-between items-start h-full shadow-xl relative hover:scale-105 transition-all duration-500">
                                                        <span class="absolute top-2 left-2 text-6xl font-normal">“</span>
                                                        <div class="px-4 mt-4 text-sm text-justify font-semibold italic">
                                                            {!! $testi->testi_desc !!}
                                                        </div>
                                                        <div class="mt-4 flex flex-col w-full">
                                                            <div class="px-4 font-bold text-lg leading-5">
                                                                {{ $testi->testi_name }}
                                                            </div>
                                                            <div class="px-4 text-xs font-semibold leading-3">
                                                                {!! $testi->testi_subtitle !!}
                                                            </div>
                                                            <span
                                                                class="px-4 mt-2.5 mb-4 text-xs font-semibold text-newprimary">
                                                                {{ $testi->testi_subcategory != null ? $testi->testi_subcategory : $testi->testi_category }}
                                                            </span>
                                                            {{-- <a href="{{ route('testimonial', app()->getLocale()) }}"
                                                                class="w-full flex px-4 py-2 group bg-newprimary justify-end text-sm text-white font-semibold items-center transition-all">Read
                                                                more <i
                                                                    class="ml-2 group-hover:ml-4 fa-solid fa-chevron-right text-xs text-white transition-all"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Experiential Learning --}}
                <div class="flex flex-col md:flex-row">
                    <div class="mb-4 sm:mb-0 relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img src="{{ asset('assets/logo/quote-big.svg') }}" alt="Quote" loading="lazy">
                        </div>
                        <h2
                            class="mt-16 font-newprimary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Experiential <br> Learning</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                                    </button>
                                </div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($experiential_learning as $testi)
                                            <li class="splide__slide w-full pb-8">
                                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                                    <div
                                                        class="bg-[#F3F3F3] pt-4 flex flex-col justify-between items-start h-full shadow-xl relative hover:scale-105 transition-all duration-500">
                                                        <span class="absolute top-2 left-2 text-6xl font-normal">“</span>
                                                        <div class="px-4 mt-4 text-sm text-justify font-semibold italic">
                                                            {!! $testi->testi_desc !!}
                                                        </div>
                                                        <div class="mt-4 flex flex-col w-full">
                                                            <div class="px-4 font-bold text-lg leading-5">
                                                                {{ $testi->testi_name }}
                                                            </div>
                                                            <div class="px-4 text-xs font-semibold leading-3">
                                                                {!! $testi->testi_subtitle !!}
                                                            </div>
                                                            <span
                                                                class="px-4 mt-2.5 mb-4 text-xs font-semibold text-newprimary">
                                                                {{ $testi->testi_subcategory != null ? $testi->testi_subcategory : $testi->testi_category }}
                                                            </span>
                                                            {{-- <a href="{{ route('testimonial', app()->getLocale()) }}"
                                                                class="w-full flex px-4 py-2 group bg-newprimary justify-end text-sm text-white font-semibold items-center transition-all">Read
                                                                more <i
                                                                    class="ml-2 group-hover:ml-4 fa-solid fa-chevron-right text-xs text-white transition-all"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Academic Preparation --}}
                <div class="flex flex-col md:flex-row">
                    <div class="mb-4 sm:mb-0 relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img src="{{ asset('assets/logo/quote-big.svg') }}" alt="Quote" loading="lazy">
                        </div>
                        <h2
                            class="mt-16 font-newprimary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Academic <br> Preparation</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                                    </button>
                                </div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($academic_preparation as $testi)
                                            <li class="splide__slide w-full pb-8">
                                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                                    <div
                                                        class="bg-[#F3F3F3] pt-4 flex flex-col justify-between items-start h-full shadow-xl relative hover:scale-105 transition-all duration-500">
                                                        <span class="absolute top-2 left-2 text-6xl font-normal">“</span>
                                                        <div class="px-4 mt-4 text-sm text-justify font-semibold italic">
                                                            {!! $testi->testi_desc !!}
                                                        </div>
                                                        <div class="mt-4 flex flex-col w-full">
                                                            <div class="px-4 font-bold text-lg leading-5">
                                                                {{ $testi->testi_name }}
                                                            </div>
                                                            <div class="px-4 text-xs font-semibold leading-3">
                                                                {!! $testi->testi_subtitle !!}
                                                            </div>
                                                            <span
                                                                class="px-4 mt-2.5 mb-4 text-xs font-semibold text-newprimary">
                                                                {{ $testi->testi_subcategory != null ? $testi->testi_subcategory : $testi->testi_category }}
                                                            </span>
                                                            {{-- <a href="{{ route('testimonial', app()->getLocale()) }}"
                                                                class="w-full flex px-4 py-2 group bg-newprimary justify-end text-sm text-white font-semibold items-center transition-all">Read
                                                                more <i
                                                                    class="ml-2 group-hover:ml-4 fa-solid fa-chevron-right text-xs text-white transition-all"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-extrabold text-newprimary text-center text-3xl mb-4 md:w-1/2">
                {{ __('pages/resources/testimonial.bottom_title') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}" class="my-btn">
                {{ __('pages/resources/testimonial.bottom_btn') }}
            </a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        var isLargeDevice = window.matchMedia("(min-width: 1024px)").matches

        var splides = document.querySelectorAll('.splide');

        for (var i = 0; i < splides.length; i++) {
            new Splide(splides[i], {
                type: 'slide',
                perPage: isLargeDevice ? 2 : 1,
                arrows: isLargeDevice,
                focus: 0,
                pagination: !isLargeDevice,
                autoplay: true,
                lazyload: true,
                interval: 5000,
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
        }
    </script>
@endsection
