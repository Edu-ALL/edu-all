@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/about.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/about.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/about.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        [
            'title' => __('pages/navbar.about_us.submenu.0.title'),
            'url' => '/' . __('pages/navbar.about_us.submenu.0.link'),
        ],
        [
            'title' => __('pages/navbar.about_us.submenu.1.title'),
            'url' => '/' . __('pages/navbar.about_us.submenu.1.link'),
        ],
        [
            'title' => __('pages/navbar.about_us.submenu.2.title'),
            'url' => '/' . __('pages/navbar.about_us.submenu.2.link'),
        ],
    ]" title="{{ __('pages/about_us/about.about_title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="-z-10">
        <div class="relative flex w-full lg:h-screen h-[100vh] left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center justify-center h-full">
                    <div class="flex-row w-3/5">
                        <h1
                            class="font-bold font-newnewprimary text-4xl lg:text-6xl text-white tracking-normal mb-3 text-center capitalize">
                            {{ __('pages/about_us/about.about_title') }}
                        </h1>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/About_Us.webp') }}" alt="EduALL About Us Banner"
                class="lazy w-full h-full object-cover object-center">

        </div>
    </section>

    {{-- ================================== Descrtiption & List Section  ================================== --}}
    <section class="pb-16">
        <div class="flex flex-col items-center main-container">
            <div class="flex flex-col max-w-4xl mt-10 gap-y-4">
                <p class="font-newprimary font-light text-2xl text-newprimary text-center">
                    {{ __('pages/about_us/about.desc.0') }}
                </p>
                <p class="font-newprimary font-light text-2xl text-newprimary text-center italic">
                    {{ __('pages/about_us/about.desc.1') }}
                </p>
            </div>
            <div class="flex flex-col gap-y-8 max-w-4xl mt-20">
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-newprimary font-semibold text-xl text-newyellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.0.title') }}
                    </h4>
                    <p class="font-newprimary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.0.body') }}
                    </p>
                </div>
                <span class="block w-full h-[1px] bg-[#7e7e7e]"></span>
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-newprimary font-semibold text-xl text-newyellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.1.title') }}
                    </h4>
                    <p class="font-newprimary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.1.body') }}
                    </p>
                </div>
                <span class="block w-full h-[1px] bg-[#7e7e7e]"></span>
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-newprimary font-semibold text-xl text-newyellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.2.title') }}
                    </h4>
                    <p class="font-newprimary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.2.body') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Question & Answer ================================== --}}
    <section class="py-16">
        <div class="flex flex-col items-center main-container">
            <img data-original="{{ asset('assets/img/about/Icon_2.png') }}" alt="EduALL Logo">
            <h2 class="mt-4 font-newprimary font-bold text-3xl text-newyellow text-center">Question & Answer</h2>

            <div class="max-w-4xl mt-8 w-full">
                <ul class="flex flex-col gap-y-4">
                    @foreach (__('pages/about_us/about.qna_list') as $item)
                        <li class="flex flex-col w-full">
                            <div id="question" class="flex justify-between items-center cursor-pointer mb-3">
                                <h4 class="mr-4 font-newprimary font-semibold text-xl text-newprimary">
                                    {{ $item['question'] }}
                                </h4>
                                <i class="fa-solid fa-chevron-down text-xl text-newprimary"></i>
                            </div>
                            <p id="answer"
                                class="max-h-0 font-newprimary text-lg text-[#7e7e7e] overflow-hidden transition-all duration-1000"
                                {{-- style="transition: max-height 1s"> --}}>
                                {!! $item['answer'] !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- ================================== Mentors ================================== --}}
    <section class="py-10 bg-newprimary">
        <div class="flex flex-col items-center">
            <div class="new-main-container">
                <div class="flex flex-col max-w-2xl">
                    <h2 class="mt-10 font-newprimary font-bold text-3xl text-white text-center">
                        {{ __('pages/about_us/about.mentor_title') }}</h2>
                    <p class="mt-8 font-newprimary text-lg text-white text-center leading-7">
                        {{ __('pages/about_us/about.mentor_desc') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full py-10 bg-dark">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <div class="w-full max-w-screen-2xl mx-auto">
                    <div class="new-main-container">
                        <div class="splide" role="group">
                            <div class="splide__arrows text-white">
                                <button class="splide__arrow splide__arrow--prev"
                                    style="background: transparent; left: -32px">
                                    <i class="fa-solid fa-chevron-left text-4xl"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next"
                                    style="background: transparent; right: -32px">
                                    <i class="fa-solid fa-chevron-right text-4xl"></i>
                                </button>
                            </div>
                            <div class="splide__track py-12">
                                <ul class="splide__list">
                                    @foreach ($all_mentor as $mentor)
                                        <li class="splide__slide w-full">
                                            <div
                                                class="splide__slide__container relative mx-2 font-secondary h-full program_card hover:rotate-program_card ">
                                                <x-mentor-card :mentor=$mentor />
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <x-button href="{{ route('mentor', app()->getLocale()) }}" title="Click for more details"
                            bg-color="newprimary" class="mb-8" padding-x="4" padding-y="2" hover-bg-color="newprimary"
                            hover-padding-x="20" text-color="white" font="medium" text-size="lg"
                            transition="all duration-150" />
                    </div>
                </div>
            </div>
            <!-- <div class="flex flex-col items-center mt-56">
                        <div class="w-full lg:px-[5rem] px-0 -mt-52">
                            <div class="splide" role="group">
                                <div class="splide__arrows text-white">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -24px">
                                        <i class="fa-solid fa-chevron-left text-4xl"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -24px">
                                        <i class="fa-solid fa-chevron-right text-4xl"></i>
                                    </button>
                                </div>
                                <div class="splide__track py-10">
                                    <ul class="splide__list">
                                        @foreach ($all_mentor as $mentor)
    <li class="splide__slide">
                                                <div class="splide__slide__container px-5 w-full h-full mt-32">
                                                    <div class="flex flex-col rounded-3xl shadow-md relative bg-white">
                                                        {{-- Mentor Image --}}
                                                        <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                                            alt="{{ $mentor->mentor_alt }}"
                                                            class="bg-cover bg-center absolute -top-[12rem]">
                                                        <div class="flex flex-col px-4 lg:mt-[12rem] mt-[10rem] overflow-visible">
                                                            {{-- Mentor Name --}}
                                                            <h2
                                                                class="font-newprimary text-center font-semibold text-3xl text-dark mt-4">
                                                                {{ $mentor->mentor_fullname }}
                                                            </h2>
                                                            <span class="font-newprimary text-newprimary text-xs text-center">
                                                                {!! $mentor->mentor_graduation !!}
                                                            </span>

                                                            <ul class="flex flex-col gap-2 mt-8">
                                                                @if ($mentor->value_1)
    <li class="flex items-start gap-4">
                                                                        <div class="w-4 h-4">
                                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
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
                                                                            class="font-newprimary text-base font-semibold text-dark leading-5">
                                                                            {{ $mentor->value_1 }}
                                                                        </h4>
                                                                    </li>
    @endif
                                                                @if ($mentor->value_2)
    <li class="flex items-start gap-4">
                                                                        <div class="w-4 h-4">
                                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                                <g id="SVGRepo_tracerCarrier"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></g>
                                                                                <g id="SVGRepo_iconCarrier">
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                                        fill="#000000"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        <h4
                                                                            class="font-newprimary text-base font-semibold text-dark leading-5">
                                                                            {{ $mentor->value_2 }}
                                                                        </h4>
                                                                    </li>
    @endif
                                                                @if ($mentor->value_3)
    <li class="flex items-start gap-4">
                                                                        <div class="w-4 h-4">
                                                                            <svg width="24px" height="24px"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                                                </g>
                                                                                <g id="SVGRepo_tracerCarrier"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></g>
                                                                                <g id="SVGRepo_iconCarrier">
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                                        fill="#000000"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        <h4
                                                                            class="font-newprimary text-base font-semibold text-dark leading-5">
                                                                            {{ $mentor->value_3 }}
                                                                        </h4>
                                                                    </li>
    @endif
                                                            </ul>
                                                        </div>

                                                        <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                                                            class="mt-5 mb-4 flex flex-col justify-center items-center gap-1 hover:bg-[#EBEBEB] transition-all group py-3">
                                                            <span
                                                                class="font-newprimary font-semibold text-xs text-newprimary leading-none">Get
                                                                to
                                                                know {{ $mentor->mentor_fullname }}</span>
                                                            <div class="w-24 h-[1px] bg-newprimary group-hover:invisible">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <x-button href="{{ route('mentor', app()->getLocale()) }}" title="{{ __('pages/home.mentor_btn') }}"
                            bg-color="newprimary" />
                    </div> -->
        </div>
    </section>


    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full max-w-3xl mb-6 font-newprimary font-black text-white text-center lg:text-4xl text-2xl">
                {{ __('pages/about_us/about.bottom_title') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                title="{{ __('pages/about_us/about.bottom_btn') }}" type="secondary" bg-color="red" />
        </div>
    </section>
@endsection

@push('script')
    <script>
        const questions = document.querySelectorAll('#question');
        const answers = document.querySelectorAll('#answer');

        let old = 0;

        questions.forEach((question, it) => {
            question.addEventListener('click', () => {
                answers[old].classList.add('max-h-0');
                answers[old].classList.remove('duration-[2s]');
                answers[old].classList.add('duration-500');
                answers[old].classList.remove(`max-h-[400px]`);

                answers[it].classList.remove('max-h-0');
                answers[it].classList.add(`max-h-[400px]`);
                answers[it].classList.add('duration-[2s]');
                answers[it].classList.remove('duration-500');
                old = it;
            })
        })


        // slider
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');


        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ?
                4 : 4,
            perMove: 1,
            arrows: isSmallDevice ? false : true,
            lazyload: false,
            autoplay: true,
            interval: 5000,
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
