@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/partnership_careers.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/partnership_careers.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/partnership_careers.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="-mt-16 pb-16 -z-10">
        <div class="relative flex w-full h-screen left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center h-full lg:max-w-xl lg:pt-[50px]">
                    <div class="flex-row">
                        <h1
                            class="font-bold font-newnewnewprimary text-4xl lg:text-6xl text-white tracking-normal mb-3 lg:text-start text-center capitalize">
                            {{ __('pages/about_us/partnership_careers.title') }}
                        </h1>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/Partnership.webp') }}" alt="EduALL Partnership Banner"
                class="lazy w-full h-full object-cover object-center">
        </div>
    </section>

    {{-- ================================== Desc Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container">
            <img data-original="{{ asset('assets/img/about/partnership-career/Icon_2-2.png') }}"
                alt="EduALL Partnership Icon">
            <div class="max-w-3xl mx-auto mt-6">
                <p class="font-newprimary text-lg text-newprimary text-center md:text-2xl">
                    {{ __('pages/about_us/partnership_careers.desc') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ================================== Collaborative Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col main-container">
            <h2 class="font-newprimary font-semibold text-newprimary text-center text-3xl mb-4">
                {{ __('pages/about_us/partnership_careers.colab_title') }}</h2>
            <div class="max-w-4xl mx-auto  pb-20">
                <div class="splide px-16" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                            <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                            <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img data-original="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-01-min.png') }}"
                                        alt="EduALL Partnertship Logo Partners">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img data-original="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-02-min.png') }}"
                                        alt="EduALL Partnertship Logo Partners">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img data-original="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-03-min.png') }}"
                                        alt="EduALL Partnertship Logo Partners">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img data-original="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-04.webp') }}"
                                        alt="EduALL Partnertship Logo Partners">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img data-original="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-05.webp') }}"
                                        alt="EduALL Partnertship Logo Partners">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-yellow text-center text-3xl mb-4">
                {{ __('pages/about_us/partnership_careers.colab_bottom') }}
            </h2>
            <x-button href="https://api.whatsapp.com/send?phone=6287888827686&text=Hello%20ALL-in" target="_blank"
                title="{{__('pages/about_us/partnership_careers.colab_btn') }}" bg-color="red" />
        </div>
    </section>

    {{-- ================================== Carrers Section  ================================== --}}
    <section class="pt-20 pb-10">
        <div class="main-container">
            <div class="flex flex-col gap-x-20 max-w-4xl mx-auto md:flex-row">
                <div class="flex flex-col w-full gap-y-5 md:w-1/3">
                    <h4 class="font-newprimary font-semibold text-2xl text-[#71747B]">
                        {{ __('pages/about_us/partnership_careers.careers_title') }}</h4>
                    <p class="font-newprimary text-lg text-[#71747B] leading-8">
                        {{ __('pages/about_us/partnership_careers.careers_desc') }}</p>
                    <p class="font-newprimary text-lg text-[#71747B] leading-8">
                        Send your resume to <a href="mailto:careers@edu-all.com"
                            class="text-black">careers@edu-all.com.</a>
                        We have opportunities for a full-time or part-time or an internship. We even offer internship
                        opportunities for high-school students.</p>
                </div>
                <div class="w-full md:w-2/3">
                    <ul class="flex flex-col">
                        @foreach (__('pages/about_us/partnership_careers.careers_list') as $item)
                            <li class="py-4 mb-4 @if ($loop->iteration <= 4) border-b-[1px] border-[#71747B] @endif)">
                                <p class="font-newprimary text-lg text-[#71747B]">{!! $item !!}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            arrows: !isSmallDevice,
            autoplay: true,
            lazyload: true,
            interval: 3000,
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
