@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/our_contribution.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/our_contribution.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/our_contribution.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-[90vh] bg-our-contribution-banner bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full items-center new-main-container justify-center gap-2">
            <h2 class="font-newprimary font-bold text-4xl md:text-5xl text-white text-center uppercase max-w-3xl">
                {{ __('pages/about_us/our_contribution.title') }}
            </h2>
        </div>
    </section>

    <section class="py-14">
        <div class="new-main-container">
            <p class="font-newprimary font-semibold text-lg text-black max-w-3xl text-center mx-auto">
                {{ __('pages/about_us/our_contribution.body') }}
            </p>
            <div class="flex items-center justify-center mt-12">
                <div class="flex flex-col">
                    <span class="font-newprimary text-sm md:text-xl">
                        BUT,
                    </span>
                    <span class="font-newprimary text-newprimary font-bold text-4xl md:text-6xl text-center">
                        WHAT'S NEXT
                    </span>
                </div>
                <span class="ml-4 font-newprimary text-newprimary text-5xl md:text-8xl">
                    ?
                </span>
            </div>
            <p class="mt-2 font-newprimary font-semibold text-lg text-newprimary max-w-3xl text-center mx-auto">
                {{ __('pages/about_us/our_contribution.body2') }}
            </p>
            <div class="h-1 w-full max-w-4xl mx-auto mt-6 bg-gradient-to-r from-white via-newprimary to-white"></div>
        </div>
    </section>

    {{-- ================================== Contribution List Section  ================================== --}}
    <section class="py-10">
        <div class="new-main-container">
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach (__('pages/about_us/our_contribution.contribution_list') as $item)
                            <li class="splide__slide">
                                <div class="splide__slide__container flex px-3">
                                    <div
                                        class="bg-newprimary border-newprimary border rounded-lg p-4 hover:bg-white transition-all duration-700 group relative w-full">
                                        <div class="flex flex-col justify-between">
                                            <div class="rounded-lg overflow-hidden h-52">
                                                <img data-original="{{ asset('assets/img/about/our-contribution/our-contribution-' . $loop->iteration . '.png') }}"
                                                    alt="EduALL Contribution aset"
                                                    class="object-cover w-full h-full aspect-[3/2] group-hover:hidden">
                                            </div>
                                            <div
                                                class="flex items-end h-36 absolute bottom-12 group-hover:bottom-[72%] transition-all duration-700 pr-4">
                                                <h2
                                                    class="font-newprimary font-bold text-xl text-white group-hover:text-newprimary leading-6">
                                                    {{ $item['title'] }}
                                                </h2>
                                            </div>
                                            <div class="flex items-end h-36">
                                                <h2 class="font-newprimary font-bold text-2xl text-white leading-7 hidden">
                                                    {{ $item['title'] }}
                                                </h2>
                                            </div>
                                            <div class="flex flex-col items-start gap-4 mt-2">
                                                <span class="text-white">
                                                    <i class="fa-regular fa-calendar-days mr-1 text-white"></i>
                                                    {{ $item['date'] }}
                                                </span>
                                            </div>
                                            <div
                                                class="flex flex-col items-start absolute top-1/4 left-1/2 -translate-x-1/2 w-full p-4">
                                                <div>
                                                    @foreach ($item['body'] as $body)
                                                        <p
                                                            class="opacity-0 group-hover:opacity-100 text-black text-xs py-1 transition-all duration-500 text-justify">
                                                            {{ $body }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($loop->index != count(__('pages/about_us/our_contribution.contribution_list')) - 1)
                                        <div class="w-0.5 py-8 bg-gradient-to-b from-transparent via-black to-transparent ml-6 hidden md:block">
                                        </div>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="pt-8 pb-14">
        <div class="new-main-container">
            <p class="font-newprimary font-normal text-lg text-black max-w-3xl text-center mx-auto">
                {{ __('pages/about_us/our_contribution.bottom_section') }}
            </p>
        </div>
    </div>
@endsection


@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splide = new Splide('.splide', {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            lazyload: true,
            autoplay: false,
            arrows: isSmallDevice ? true : false,
        });

        splide.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

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
