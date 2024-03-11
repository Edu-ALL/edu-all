@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/mentor.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/mentor.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/mentor.meta_description') }}" />
@endsection

@section('content')
    {{-- Header Section --}}
    <section class="py-20 flex items-center justify-start h-screen bg-mentor-header bg-cover bg-center">
        <div class="main-container">
            <div class="flex flex-col">
                <h1 class="mb-4 font-newprimary font-bold text-4xl text-white md:mb-8 md:text-6xl">
                    {{ __('pages/about_us/mentor.banner_title') }}</h1>
                <div class="mb-6 w-full font-newprimary font-medium text-lg text-white  lg:max-w-xl md:mb-12">
                    {!! __('pages/about_us/mentor.benner_body') !!}
                </div>
                <a href="#mentor">
                    <span
                        class="px-10 py-2 font-newprimary font-semibold text-base text-white rounded-md bg-newyellow">{{ __('pages/about_us/mentor.banner_btn') }}</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Mentor List Section --}}
    <section id="mentor" class="py-20 mt-[15rem] bg-dark">
        <div class="main-container lg:max-w-10xl lg:mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 xl:gap-12">
                @foreach ($allin_mentor as $mentor)
                    <div class="flex flex-col rounded-3xl shadow-md relative lg:-mt-[8rem] -mt-[11rem] lg:mb-[15rem] mb-[20rem] bg-white">
                        {{-- Mentor Image --}}
                        <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                            alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center absolute lg:-top-[10rem] -top-[15rem]">
                        <div class="flex flex-col px-4 lg:mt-[11rem] mt-[15rem] overflow-visible">
                            {{-- Mentor Name --}}
                            <h2 class="font-newprimary text-center font-semibold text-2xl text-dark mt-4">
                                {{ $mentor->mentor_fullname }}
                            </h2>
                            <span class="font-newprimary text-newprimary text-xs text-center">
                                {!! $mentor->mentor_graduation !!}
                            </span>

                            <ul class="flex flex-col gap-2 mt-5">
                                @if ($mentor->value_1)
                                    <li class="flex items-start gap-4">
                                        <div class="w-4 h-4">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="font-newprimary text-[.75rem] font-semibold text-dark leading-5">
                                            {{ $mentor->value_1 }}
                                        </h4>
                                    </li>
                                @endif
                                @if ($mentor->value_2)
                                    <li class="flex items-start gap-4">
                                        <div class="w-4 h-4">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="font-newprimary text-[.75rem] font-semibold text-dark leading-5">
                                            {{ $mentor->value_2 }}
                                        </h4>
                                    </li>
                                @endif
                                @if ($mentor->value_3)
                                    <li class="flex items-start gap-4">
                                        <div class="w-4 h-4">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="font-newprimary text-[.75rem] font-semibold text-dark leading-5">
                                            {{ $mentor->value_3 }}
                                        </h4>
                                    </li>
                                @endif
                            </ul>
                        </div>

                        <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                            class="mt-2 mb-4 flex flex-col justify-center items-center gap-1 hover:bg-[#EBEBEB] transition-all group py-3">
                            <span class="font-newprimary font-semibold text-xs text-newprimary leading-none">Get
                                to
                                know {{ $mentor->mentor_fullname }}</span>
                            <div class="w-24 h-[1px] bg-newprimary group-hover:invisible"></div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mentor List Section --}}
    <section class="pt-32 pb-10">
        <div class="main-container lg:max-w-10xl lg:mx-auto flex flex-col">
            <h2 class="mb-8 font-newprimary font-bold text-4xl text-newprimary text-center">
                {{ __('pages/about_us/mentor.mentor_building_title') }}
            </h2>
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                    </button>
                </div>
                <div class="splide__track  py-20">
                    <ul class="splide__list">
                        @foreach ($building_mentor as $mentor)
                            <li class="splide__slide">
                                <div class="splide__slide__container px-4 w-full h-full">
                                    <div class="flex flex-col rounded-3xl shadow-md relative mt-[5rem]">
                                        {{-- Mentor Image --}}
                                        <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                            alt="{{ $mentor->mentor_alt }}"
                                            class="bg-cover bg-center absolute -top-[10rem]">
                                        <div class="flex flex-col px-4 lg:mt-[11rem] mt-[17rem] overflow-visible">
                                            {{-- Mentor Name --}}
                                            <h2 class="font-newprimary text-center font-semibold text-2xl text-dark mt-4">
                                                {{ $mentor->mentor_fullname }}
                                            </h2>
                                            <span class="font-newprimary text-newprimary text-xs text-center">
                                                {!! $mentor->mentor_graduation !!}
                                            </span>

                                            <ul class="flex flex-col gap-2 mt-5">
                                                @if ($mentor->value_1)
                                                    <li class="flex items-start gap-4">
                                                        <div class="w-4 h-4">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                        fill="#000000"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <h4
                                                            class="font-newprimary text-[.75rem] font-semibold text-dark leading-5">
                                                            {{ $mentor->value_1 }}
                                                        </h4>
                                                    </li>
                                                @endif
                                                @if ($mentor->value_2)
                                                    <li class="flex items-start gap-4">
                                                        <div class="w-4 h-4">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                        fill="#000000"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <h4
                                                            class="font-newprimary text-[.75rem] font-semibold text-dark leading-5">
                                                            {{ $mentor->value_2 }}
                                                        </h4>
                                                    </li>
                                                @endif
                                                @if ($mentor->value_3)
                                                    <li class="flex items-start gap-4">
                                                        <div class="w-4 h-4">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                    stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                        fill="#000000"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <h4
                                                            class="font-newprimary text-[.75rem] font-semibold text-dark leading-5">
                                                            {{ $mentor->value_3 }}
                                                        </h4>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>

                                        <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                                            class="mt-2 mb-4 flex flex-col justify-center items-center gap-1 hover:bg-[#EBEBEB] transition-all group py-3">
                                            <span
                                                class="font-newprimary font-semibold text-xs text-newprimary leading-none">Get
                                                to
                                                know {{ $mentor->mentor_fullname }}</span>
                                            <div class="w-24 h-[1px] bg-newprimary group-hover:invisible"></div>
                                        </a>
                                    </div>
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
            <h2 class="mb-6 font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/about_us/mentor.bottom_title') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}">
                <span class="px-8 md:px-12 py-1.5 font-newprimary text-base text-white text-center bg-red">
                    {{ __('pages/about_us/mentor.bottom_btn') }}
                </span>
            </a>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches

        var splide = new Splide('.splide', {
            perPage: isSmallDevice ? 1 : 4,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
        });

        splide.on('pagination:mounted', function(data) {
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
    </script>
@endsection
