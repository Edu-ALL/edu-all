@extends('layout.user.main')

@section('head')
    <title>Partnership</title>
    <meta name="title" content="Partnership" />
    <meta name="description" content="Partner with Us to Make an Impact, Explore different ways we can work together and create meaningful impact" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :active="__('pages/navbar.partnership.2.title')" title="{{ __('pages/about_us/partnership.title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    {{-- <section class="-z-10">
        <div class="relative flex w-full h-screen left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center h-full justify-center">
                    <div class="flex-row w-3/5">
                        <h1
                            class="font-bold text-banner-title text-white tracking-normal mb-3 lg:text-start text-center capitalize">
                            {{ __('pages/about_us/partnership_careers.title') }}
                        </h1>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/partnership_carreer.webp') }}" alt="EduALL Partnership Banner"
                class="lazy w-full h-full object-cover object-center">
        </div>
    </section> --}}

    <section class="py-16 h-screen bg-our-partnership-banner bg-cover bg-top" id="banner">
        {{-- <!-- <x-registration-form /> --> --}}
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full items-center md:items-center justify-center md:justify-end main-container md:pb-[32vh] md:pt-[15%] gap-2">
                <h2 class="font-bold text-banner-title text-white text-center uppercase md:w-1/2 xl:w-1/2">
                    {{ __('pages/about_us/partnership.title') }}
                </h2>
                {{-- <!-- <x-registration-form :is-button="true" /> --> --}}
            </div>
        </div>

        <div class="absolute md:bottom-10 left-0 right-0">
            <div class="relative h-full">
                <div
                    class="bg-newprimary mix-blend-multiply visible md:h-28 h-[36vh] absolute md:bottom-[8vh] bottom-0 left-0 right-0">
                </div>
                <div
                    class="w-full main-container mx-auto absolute md:bottom-[8vh] bottom-24 left-0 right-0 h-28 flex items-center">
                    <div class="flex md:flex-row flex-wrap gap-6 justify-evenly items-center w-full">
                        @foreach (__('pages/about_us/partnership.stats') as $item)
                            <div class="flex flex-col md:w-auto justify-start items-center">
                                <p class="font-bold text-white text-3xl md:text-4xl text-center">
                                    {{ $item['title'] }}
                                </p>
                                <p class="font-light text-white text-banner-subdescription text-center h-10 flex items-center">
                                    {!! $item['comment'] !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Desc Section  ================================== --}}
    <section class="pt-16">
        <div class="flex flex-col items-center main-container">
            <div class="max-w-3xl mx-auto mt-6">
                <h2 class="font-newprimary text-2xl text-center md:text-[40px]">
                    {!! __('pages/about_us/partnership.desc') !!}
                </h2>
                <p class="font-newprimary text-sm text-center md:text-lg mt-2">
                    {!! __('pages/about_us/partnership.sub_desc') !!}
                </p>
            </div>
        </div>
    </section>

    {{-- ========================================== Partnertship Section ======================================= --}}
    <section class="pb-8">
        <div class="new-main-container">
            <div class="splide splides pt-12 max-w-5xl mx-auto" role="group">
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/about_us/partnership.offer_list') as $item)
                            <li class="splide__slide w-full pb-8 px-3">
                                <div class="splide__slide__container pb-8 h-full w-full">
                                    <div
                                        class="flex flex-col items-center rounded-md border border-[#DEDEDE] pb-8 bg-white overflow-hidden">
                                        <div class="h-40 w-full overflow-hidden">
                                            <img  data-src="{{ asset('assets/img/about/partnership/' . $item['image']) }}"alt=""
                                            class="h-full w-full object-cover lazyload">
                                        </div>
                                        <h3 class="font-bold text-2xl text-center mt-8">
                                            {!! $item['title'] !!}
                                        </h3>
                                        <div class="w-full lg:h-8 mt-4 lg:mt-4 lg:mb-4 flex items-start justify-center px-2">
                                            <p class="text-sm font-newprimary text-center">
                                                {{ $item['body'] }}
                                            </p>
                                        </div>
                                        <x-button href="{{ url(app()->getLocale()) }}/{{ $item['link'] }}"
                                            title="{!! $item['btn'] !!}"
                                            bg-color="newprimary" padding-y="1.5" is-rounded />
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Endless Running Image Section ================================== --}}
    <section class="overflow-hidden pb-16">
        <div class="new-main-container overflow-hidden relative">
            <div class="relative max-w-4xl mx-auto">
                <div class="absolute h-full md:w-24 w-12 bg-gradient-to-r from-white to-transparent z-10 -left-4"></div>
                <div class="absolute h-full md:w-24 w-12 bg-gradient-to-l from-white to-transparent z-10 -right-4"></div>

                <div class="h-full overflow-hidden">
                    <div class="flex endless-scroll">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex-none md:mx-8">
                                <img src="{{ asset('assets/img/about/partnership/logo-partners-new.webp') }}"
                                     alt="Partnership Image"
                                     class="md:h-[450px] h-80 w-auto object-contain">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
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
