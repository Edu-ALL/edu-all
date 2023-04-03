@extends('layout.user.main')

@section('content')
    {{-- ========================================== Banner Section ========================================== --}}
    <div class="relative left-0 w-full h-screen -mt-16 overflow-hidden">
        <section class="splide" aria-labelledby="carousel-heading" id="home_banner">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($banners as $banner)
                        <li class="splide__slide relative">
                            <img class="object-top object-cover w-full h-screen md:block hidden"
                                src="{{ asset('uploaded_files/banner/' . $banner->created_at->format('Y') . '/' . $banner->created_at->format('m') . '/' . $banner->banner_img) }}"
                                alt="{{ $banner->banner_alt }}">
                            <img class="object-top object-contain w-full h-screen md:hidden block"
                                src="{{ asset('uploaded_files/banner/' . $banner->created_at->format('Y') . '/' . $banner->created_at->format('m') . '/' . $banner->banner_img_mobile) }}"
                                alt="{{ $banner->banner_alt }}">
                            <div
                                class="absolute left-0 top-0 flex items-center w-full h-full pt-16 md:items-start {{ !$banner->banner_img_mobile ? 'bg-gradient-to-r from-primary/90' : '' }}">
                                <div
                                    class="flex flex-col justify-center items-center w-full h-full max-w-5xl px-6 lg:px-40 2xl:px-44 font-primary lg:items-start">
                                    <h2
                                        class="font-primary text-3xl font-bold text-white text-center mb-6 sm:text-4xl lg:text-5xl lg:text-left xl:text-6xl">
                                        {{ $banner->banner_title }}</h2>
                                    <div
                                        class="text-sm font-semibold text-white text-center sm:text-lg lg:text-lg lg:text-left xl:text-xl">
                                        {!! $banner->banner_description !!}
                                    </div>
                                    <a href="{{ $banner->banner_link }}">
                                        <span
                                            class="inline-block mt-10 bg-primary py-2.5 px-8 rounded-lg font-bold text-white text-base capitalize">
                                            {{ $banner->banner_button }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>

    {{-- ========================================== Benefits Section ======================================= --}}
    <section class="mx-6 pt-8 md:pt-24">
        <div class="max-w-4xl w-full mx-auto">
            <div class="grid grid-cols-1 justify-center gap-8 sm:grid-cols-2 md:grid-cols-3">
                @foreach (__('pages/home.benefit_list') as $item)
                    <div
                        class="flex flex-col justify-start items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                        <img data-original="{{ asset('assets/img/home/' . $item['image']) }}"
                            alt="Allineduspace ilustration" class="w-[120px] h-[auto]">
                        <h4 class="mt-4 font-primary font-semibold text-lg text-[#7895C7] text-center">
                            {{ $item['title'] }}
                        </h4>
                        <p class="mt-2 font-primary text-sm text-center text-[#7A7A7A]">
                            {{ $item['body'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== About Us Section ======================================= --}}
    <section class="pt-10 max-w-4xl w-full px-6 mx-auto my-20">
        <div class="flex flex-col items-center">
            <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-[#7895C7]">
                {{ __('pages/home.about') }}
            </h2>
            <p class="mb-6 font-primary font-medium text-base text-center text-[#7A7A7A]">
                {{ __('pages/home.about_body') }}
            </p>
            <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                class="inline-block px-6 py-2 mb-10 font-primary font-semibold text-base text-white capitalize bg-yellow rounded-[4px]">
                {{ __('pages/home.about_btn') }}
            </a>

            <div class="grid grid-cols-2 justify-center gap-y-8 md:grid-cols-3">
                @foreach (__('pages/home.about_list') as $item)
                    <div class="flex flex-col items-center p-4">
                        <img data-original="{{ asset('assets/icon/about-us/about us icons_' . $loop->index . '.webp') }}"
                            alt="Allineduspace About Us Icon" class="mb-4 w-[90px] h-[90px] object-contain">
                        <p class="font-primary text-sm text-[#7A7A7A] text-center">{{ $item }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== Program Section ======================================= --}}
    <section class="py-16">
        <div class="max-w-3xl w-full mx-auto px-6 mb-10 flex flex-col items-center">
            <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-[#7895C7]">{{ __('pages/home.program') }}
            </h2>
            <p class="mb-6 font-primary font-medium text-base text-center text-[#7A7A7A]">
                {{ __('pages/home.program_body') }}
            </p>
        </div>
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach (__('pages/programs/programs.program_list') as $item)
                    <div class="program_card hover:rotate-program_card">
                        <div class="relative front bg-cover bg-center">
                            <div
                                class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-white flex flex-col pt-[230px] lg:pt-[200px] xl:pt-[250px]">
                                <h4 class="font-semibold text-3xl font-primary mb-4 leading-7">
                                    {{ $item['title'] }}
                                </h4>
                                <ul class="flex flex-col">
                                    @foreach ($item['points'] as $point)
                                        <li class="inline-flex items-start gap-1.5">
                                            <i class="fa-solid text-sm fa-circle-check mt-1 text-yellow"></i>
                                            <p class="text-sm">{{ $point }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <img data-original="{{ asset('assets/img/programs/' . $item['img']) }}"
                                alt="{{ $item['title'] }}"
                                class="absolute w-full h-full top-0 right-0 object-cover object-center -z-10">
                        </div>
                        <div
                            class="back face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-[#7895C7]  text-white">
                            <div class="flex flex-col justify-center items-center h-full">
                                <p class="font-semibold text-base lg:text-lg font-primary mb-4 leading-7 text-center">
                                    {{ $item['body'] }}
                                </p>
                                <a href="{{ route($item['route'], ['locale' => app()->getLocale()]) }}"
                                    class="my-btn text-sm">View More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Mentors ================================== --}}
    <section class="pt-16">
        <div class="flex flex-col items-center">
            <div class="main-container">
                <div class="flex flex-col max-w-2xl">
                    <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-[#7895C7]">
                        {{ __('pages/home.mentor') }}
                    </h2>
                    <p class="font-primary text-lg text-[#7A7A7A] text-center leading-7">
                        {{ __('pages/home.mentor_body') }}</p>
                </div>
            </div>
            <div class="flex flex-col items-center w-full mt-12 bg-primary">
                <div class="w-full px-10 pt-10 md:px-20">
                    <div class="splide" role="group">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                                <i class="fa-solid fa-chevron-left text-3xl text-white"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                                <i class="fa-solid fa-chevron-right text-3xl text-white"></i>
                            </button>
                        </div>
                        <div class="splide__track py-10">
                            <ul class="splide__list">
                                @foreach ($all_mentor as $mentor)
                                    <li class="splide__slide">
                                        <div
                                            class="splide__slide__container px-4 w-full h-full min-h-[350px] flex items-center">
                                            <div class="mentor_card flex flex-col group">
                                                <div
                                                    class="front relative cursor-pointer w-full rounded-lg shadow-lg overflow-hidden">
                                                    <div
                                                        class="absolute left-4 right-4 bottom-4 flex flex-col justify-between z-20">
                                                        <h3
                                                            class="font-primary font-bold text-2xl text-white leading-7 lg:leading-5">
                                                            {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}
                                                            <br>
                                                            {{ substr($mentor->mentor_fullname, strpos($mentor->mentor_fullname, ' ') + 1) }}
                                                        </h3>
                                                        <div
                                                            class="mt-3 font-primary text-xs text-white leading-4 lg:leading-3">
                                                            {!! $mentor->mentor_graduation !!}
                                                        </div>
                                                    </div>
                                                    <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                                        alt="{{ $mentor->mentor_alt }}" loading="lazy"
                                                        class="bg-cover bg-center h-auto">
                                                </div>
                                                <div
                                                    class="back overflow-hidden flex justify-center items-center w-full p-2 rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                                                    <div class="flex flex-col items-center justify-center">
                                                        <div
                                                            class="mb-6 px-4 w-full h-full font-primary font-medium text-sm text-white text-center text-ellipsis ">
                                                            {{ html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 60)) }}...

                                                        </div>
                                                        <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                                                            class="px-4 py-2 flex-inline font-primary font-medium text-xs text-white text-center rounded-lg bg-yellow">
                                                            Get to know
                                                            {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}
                                                        </a>
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
                <a href="{{ route('mentor', app()->getLocale()) }}"
                    class="block max-w-[200px] w-full mb-8 px-4 py-2 rounded-md bg-yellow font-primary font-semibold text-base text-white text-center">
                    {{ __('pages/home.mentor_btn') }}
                </a>
            </div>
        </div>
    </section>

    {{-- ========================================== What They Say Section ======================================= --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <div class="flex flex-col max-w-2xl mb-8">
                <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-[#7895C7]">
                    {{ __('pages/home.testi') }}
                </h2>
            </div>
            <div class="w-full py-5">
                <div class="splide" aria-label="Slide Container Example">
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
            <a href="{{ route('testimonial', app()->getLocale()) }}"
                class="block max-w-[200px] w-full mt-8 px-4 py-2 rounded-md bg-primary font-primary font-semibold text-base text-white text-center">
                {{ __('pages/home.testi_btn') }}
            </a>
        </div>
    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="-mt-2 py-16 ">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-primary font-semibold text-yellow text-center text-3xl mb-4">
                {{ __('pages/home.bottom') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                class="block max-w-[200px] w-full px-4 py-2 rounded-md bg-yellow font-primary font-semibold text-base text-white text-center">
                {{ __('pages/home.bottom_btn') }}
            </a>
        </div>
    </section>
@endsection

@section('script')
    <script>
        // slider
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide(splides[0], {
                wheel: false,
                isNavigation: false,
                arrows: false,
                pagination: isMediumDevice ? false : true,
                type: 'fade',
                autoplay: true,
                lazyload: true,
                interval: 5000,
                pauseOnHover: true,
            }).mount();
        });

        new Splide(splides[1], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 4 : 5,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            lazyload: true,
            autoplay: true,
            interval: 4000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();

        new Splide(splides[2], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: isSmallDevice,
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

    <style>
        #home_banner .splide__pagination {
            display: block !important;
            flex-direction: column !important;
            right: 0 !important;
            top: 50%;
            transform: translate(0, -50%);
        }

        #home_banner .splide__pagination li {
            display: block !important;
        }

        #home_banner .splide__pagination .splide__pagination__page {
            background: #233873 !important;
            border: 2px solid #d2d2d2 !important;
            height: 12px !important;
            width: 12px !important;
        }

        #home_banner .splide__pagination .splide__pagination__page.is-active {
            background: #F78614 !important;
        }
    </style>
@endsection
