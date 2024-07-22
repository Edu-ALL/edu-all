@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/skillset_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/skillset_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/skillset_tutoring.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 bg-skillset-tutoring-header bg-cover bg-left md:bg-center" id="banner">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-24 gap-8">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center uppercase">
                {{ __('pages/programs/skillset_tutoring.title') }}</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-md">
                {{ __('pages/programs/skillset_tutoring.body') }}
            </p>
            <x-button type='secondary' href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                title="{{ __('pages/programs/skillset_tutoring.header_button') }}" />
        </div>
    </section>

    {{-- SECTION 1 --}}
    <section class="md:bg-newprimary">
        <div class="w-full flex justify-center">
            <div class="flex flex-col w-[1024px] bg-white py-12 px-12 group-hover:w-[1280px] transition-all duration-500"
                style="clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%);">
                <div class="flex flex-col gap-4  group-hover:scale-105 transition-all duration-700">
                    <h2 class="font-newprimary font-semibold text-2xl text-dark text-center md:text-4xl">
                        {{ __('pages/programs/skillset_tutoring.elevate_unique_passion') }}
                    </h2>
                    <p class="mb-8 font-newprimary text-sm md:text-base text-dark text-center max-w-2xl mx-auto">
                        {{ __('pages/programs/skillset_tutoring.elevate_unique_passion_desc') }}
                    </p>

                </div>
            </div>
        </div>
    </section>


    {{-- WHY US 5 --}}
    <section class="py-12 md:py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/skillset_tutoring.program_title') }}</h2>
            <div class="flex flex-col gap-8 py-12">
                @foreach (__('pages/programs/skillset_tutoring.program_list') as $item)
                    <div class="relative" style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 92% 100%, 0 100%)">
                        <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/program/program-' . $loop->iteration . '.webp') }}"
                            alt="EduALL Skillset Tutoring Program"
                            class="object-center object-cover rounded-md group-hover:scale-105 transition-all duration-700">
                        <div
                            class="flex flex-col justify-center items-center gap-4 absolute inset-0 p-4 group-hover:scale-95 transition-all duration-700">
                            <h4 class="font-newprimary font-bold text-white text-3xl uppercase">{{ $item['title'] }}</h4>
                            <p class="font-newprimary text-base text-white max-w-2xl mx-auto leading-6 text-center">
                                {{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="flex w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/skillset_tutoring.why_us_title') }}</h2>
            <div class="flex flex-col gap-6 py-12">
                @foreach (__('pages/programs/skillset_tutoring.why_us_list') as $item)
                    @if ($loop->iteration % 2 == 1)
                        <div class="flex relative h-48">
                            <div class="bg-dark h-full w-[53%] absolute left-0"
                                style="clip-path: polygon(0 0, 100% 0%, 100% 0%, 85% 100%, 0 100%)">
                                <div class="flex flex-col gap-4 max-w-lg ml-auto justify-center h-full 2xl:max-w-2xl">
                                    <h4 class="font-newprimary font-bold text-white text-start text-2xl uppercase">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p class="font-newprimary text-sm text-white text-start max-w-md leading-4 pr-4 2xl-max-w-xl">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="bg-newprimary h-full w-[53%] absolute right-0"
                                style="clip-path: polygon(15% 0, 100% 0%, 100% 0%, 100% 100%, 0 100%)">
                                <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/why-us/why-us-' . $loop->iteration . '.webp') }}"
                                    alt="EduALL why us" class="w-full h-full object-center object-cover">
                            </div>
                        </div>
                    @else
                        <div class="flex relative h-48">
                            <div class="bg-dark h-full w-[53%] absolute left-0"
                                style="clip-path: polygon(0 0, 100% 0%, 100% 0%, 85% 100%, 0 100%)">
                                <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/why-us/why-us-' . $loop->iteration . '.webp') }}"
                                    alt="EduALL why us" class="w-full h-full object-center object-cover">
                            </div>
                            <div class="bg-newprimary h-full w-[53%] absolute right-0"
                                style="clip-path: polygon(15% 0, 100% 0%, 100% 0%, 100% 100%, 0 100%)">
                                <div class="flex flex-col gap-4 max-w-lg mr-auto justify-center h-full ml-[15%]">
                                    <h4 class="font-newprimary font-bold text-white text-start text-2xl uppercase">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p class="font-newprimary text-sm text-white text-start max-w-md leading-4 pr-4">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 12 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/programs/skillset_tutoring.free_trial2_title') }}
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                {{ __('pages/programs/skillset_tutoring.free_trial2_description') }}
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-bold
                font-newprimary text-xs md:text-base text-white text-center bg-newprimary hover:scale-110 transition-all
                duration-150">
                {{ __('pages/programs/skillset_tutoring.free_trial2_button') }}
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

        const s4_item = document.querySelectorAll('.sat-program-s3-item');
        let s4ActiveIndex = 0;

        s4_item.forEach((item, it) => {
            item.addEventListener('click', () => {
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

        const slide_button_left = document.querySelector('.slide-button-left');
        const slide_button_right = document.querySelector('.slide-button-right');
        const private_class = document.querySelector('.private-class');
        const semi_private_class = document.querySelector('.semi-private-class');
        const slide_background = document.querySelector('.slide-background');

        if (!isMediumDevice) {
            slide_button_left.addEventListener('click', () => {
                private_class.classList.remove('opacity-100');
                private_class.classList.add('opacity-0');
                private_class.classList.add('translate-x-2/3');
                private_class.classList.remove('visible');
                private_class.classList.add('invisible');
                private_class.classList.remove('duration-1000')
                private_class.classList.add('duration-700')
                semi_private_class.classList.add('opacity-100');
                semi_private_class.classList.remove('opacity-0');
                semi_private_class.classList.remove('-translate-x-2/3');
                semi_private_class.classList.add('visible');
                semi_private_class.classList.remove('invisible');
                semi_private_class.classList.add('duration-1000')
                semi_private_class.classList.remove('duration-700')
                slide_background.classList.remove('-translate-x-[68%]');
                slide_background.classList.add('translate-x-[14%]');
            });

            slide_button_right.addEventListener('click', () => {
                private_class.classList.add('opacity-100');
                private_class.classList.remove('opacity-0');
                private_class.classList.add('visible');
                private_class.classList.remove('translate-x-2/3');
                private_class.classList.add('duration-1000')
                private_class.classList.remove('invisible');
                private_class.classList.remove('duration-700')

                semi_private_class.classList.remove('opacity-100');
                semi_private_class.classList.add('opacity-0');
                semi_private_class.classList.add('-translate-x-2/3');
                semi_private_class.classList.remove('visible');
                semi_private_class.classList.add('invisible');
                semi_private_class.classList.remove('duration-1000')
                semi_private_class.classList.add('duration-700')
                slide_background.classList.remove('translate-x-[14%]');
                slide_background.classList.add('-translate-x-[68%]');
            });
        }


        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : 3,
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
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endpush
