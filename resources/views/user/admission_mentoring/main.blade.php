@extends('layout.user.main')
@section('head')
    <title>{{ __('pages/programs/admission_mentoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/admission_mentoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/admission_mentoring.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/admissions-mentoring'],
        ['title' => __('pages/programs/undergraduate_program.navbar_title'), 'url' => '/programs/admissions-mentoring/undergraduate-program'],
        ['title' => __('pages/programs/graduate_program.navbar_title'), 'url' => '/programs/admissions-mentoring/graduate-program'],
        ['title' => __('pages/programs/univ_transfer_program.navbar_title'), 'url' => '/programs/admissions-mentoring/university-transfer-program'],
    ]" :active="'general'" title="{{  __('pages/programs/admission_mentoring.title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-adm-mentoring-header bg-cover bg-top" id="banner">
        <x-registration-form program-id="AAUP" />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full items-center md:items-start justify-center md:justify-end main-container py-[20%] md:pt-[15%] gap-2">
                <h2 class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/3 xl:w-1/3 md:pb-[2%]">
                    {{ __('pages/programs/admission_mentoring.title') }}
                </h2>
                <x-registration-form :is-button="true" />
            </div>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-wrap items-center justify-between gap-8 max-w-4xl mx-auto">
                @foreach (__('pages/programs/admission_mentoring.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center">
                        <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-16 relative">
                                <img data-original="{{ asset('assets/img/admission mentoring/revamp/' . $item['image']) }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                                <div class="absolute top-0 -right-4">
                                    <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-sm text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">{{ $item['title'] }}
                        </h4>
                        <span class="font-newprimary text-base font-normal text-center">{{ $item['tag'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="w-full border-t border-[#DADADA] pt-12 mt-12 max-w-4xl mx-auto">
                <p class="font-newprimary text-center max-w-3xl mx-auto leading-6 text-base">
                    We offer a personalized 1-on-1 admission mentoring service that will serve as an academic walk-through for students to get accepted at their dream schools and find best-fit universities.
                </p>
            </div>
        </div>
    </section>

    {{-- Exclusive Program  --}}
    <section class="py-12 bg-[#F5F5F5] mt-[40%] shadow-2xl">
        <div class="new-main-container -mt-[40%]">
            <div class="new-main-container">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="font-newprimary font-bold text-black text-center md:text-4xl text-2xl mb-12 uppercase">
                        {{ __('pages/programs/admission_mentoring.program_title') }}
                    </h2>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-end justify-center gap-8">
                @foreach (__('pages/programs/admission_mentoring.program_list') as $item)
                    <div class="flex flex-col w-full md:w-1/3 my-4">
                        @if ($item['is_popular'] == true)
                            <div class="px-8 pt-5 pb-12 w-full bg-red rounded-2xl flex items-center justify-center gap-2">
                                <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                                <h3 class="text-white text-lg font-bold text-center">
                                    {{ __('pages/programs/admission_mentoring.popular_choice') }}
                                </h3>
                                <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                            </div>
                        @endif
                        <div class="-mt-8 pt-16 flex flex-col items-center rounded-2xl shadow-md py-8 px-6 bg-white">
                            <h3 class="font-bold uppercase md:text-2xl text-xl text-center">
                                {!! $item['title'] !!}
                            </h3>
                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                <img data-original="{{ asset('assets/img/admission mentoring/revamp/' . $item['image']) }}"alt=""
                                    class="h-full w-full object-cover">
                            </div>
                            <div class="w-full md:h-36 border-b border-b-[#DEDEDE]">
                                <p class="text-base text-justify px-4 leading-5">
                                    {{ $item['desc'] }}
                                </p>
                            </div>
                            <div class="w-full lg:h-56">
                                <ul class="mt-4 w-full flex flex-col gap-3">
                                    @foreach ($item['points'] as $point)
                                        <li class="flex justify-center items-start gap-2">
                                            <div
                                                class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                                <i class="fa-solid fa-check fa-xs text-white"></i>
                                            </div>
                                            <p class="flex-1 text-sm font-newprimary">
                                                {{ $point }}
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <x-button
                                href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/{{ $item['link'] }}"
                                title="{{ __('pages/programs/admission_mentoring.learn_more') }}" bg-color="newprimary" />
                            <span class="mt-1 text-sm text-[#9C9C9C]">
                                {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                                <a href="{{ route($item['sign_me'], ['locale' => app()->getLocale()]) }}"
                                    class="underline text-newprimary hover:text-black">
                                    {{ __('pages/programs/admission_mentoring.book_now') }}
                                </a>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ========================================== New Pathaway Excellence ========================================== --}}
    <section class="py-16 bg-pathaway bg-cover bg-center">
        <div class="new-main-container md:py-12 flex flex-col items-center">
            <div class="flex flex-col justify-center items-center">
                <h2 class="font-bold text-section-title text-white text-center">Your University Admission Process Through</h2>
                <h2 class="font-bold md:text-5xl text-xl text-newyellow text-center uppercase">4 aspects</h2>
            </div>  
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12 relative">
                <div class="md:flex absolute w-52 h-52 hidden justify-center items-center bg-black rounded-full left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                    <img loading="lazy" src="{{ asset('assets/logo/eduall-white.png') }}" alt="EduAll white logo"
                        class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                </div>
                <div
                    class="col-span-2 md:col-span-1 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 md:pr-28">
                    <h3 class="font-bold text-2xl text-newyellow">Interest & Career Exploration</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Discovering interests and future aspiration through various learning experience and exposure to
                        professional opportunities while fostering curiosity for students’ unique paths.
                    </p>
                </div>
                <div
                    class="col-span-2 md:col-span-1 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 md:pl-28">
                    <h3 class="font-bold text-2xl text-newyellow">Profile <br /> Building</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Identify passions, strengths, achievements, and experiences that will set students apart, creating a
                        compelling and authentic students’ profile for university applications.
                    </p>
                </div>
                <div
                    class="col-span-2 md:col-span-1 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 md:pr-28">
                    <h3 class="font-bold text-2xl text-newyellow">University Application Strategy</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Crafting personalized strategies for university applications, ensuring students effectively showcase
                        their strengths, interests, and potential to stand out in competitive admissions processes.
                    </p>
                </div>
                <div
                    class="col-span-2 md:col-span-1 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 md:pl-28">
                    <h3 class="font-bold text-2xl text-newyellow">Writing</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Developing impactful storytelling in personal statements and essays to showcase unique qualities and
                        aspirations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="pt-16 pb-20">
        <div class="new-main-container">
            <div class="flex flex-col items-center justify-center">
                <h2 class="font-newprimary font-bold text-black text-center md:text-4xl text-2xl mb-4 uppercase">
                    {{ __('pages/programs/admission_mentoring.why_us_title') }}
                </h2>
                <p class="text-center text-base max-w-xl mx-auto mb-8">
                    {{ __('pages/programs/admission_mentoring.why_us_description') }}
                </p>
                <img src="{{ app()->getLocale() == 'id-en' ? asset('assets/img/admission mentoring/revamp/why_us_english.webp') : asset('assets/img/admission mentoring/revamp/why_us_bahasa.webp') }}"
                    alt="" class="w-full max-w-4xl object-contain">
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section
        class="md:pt-8 md:pb-20">
        <div class="new-main-container">
            <div class="flex md:flex-row flex-col items-center bg-[#F5F5F5] rounded-2xl overflow-hidden">
                <div class="flex flex-col items-center md:items-start justify-center w-full md:w-1/2 md:mx-16 md:order-1 order-2 py-6 px-6 mt-2 md:mt-0 rounded-t-3xl md:rounded-none">
                    <h2 class="mb-6 font-bold text-dark text-center text-lg md:text-2xl md:max-w-xs md:text-start">
                        {{ __('pages/home.bottom') }}
                    </h2>
                    <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                        title="{{ __('pages/home.bottom_btn') }}" type='secondary' bg-color="newprimary" padding-x="4" />
                </div>
                <div class="w-full md:w-1/2 md:order-2 order-1 mt-4">
                    <img loading="lazy" src="{{ asset('assets/img/home/cta_image.webp') }}" alt="bottom banner"
                        class="w-full h-full object-cover rounded-b-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="pt-16 pb-20">
        <div class="new-main-container">
            <h2 class="font-newprimary font-bold text-black text-center md:text-4xl text-2xl mb-4 uppercase">
                {{ __('pages/programs/admission_mentoring.what_our_mentees_say') }}
            </h2>

            <div class="splide testimonial" role="group">
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
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
            perMove: 1,
            focus: 0,
            width: "100%",
            arrows: isSmallDevice ? false : true,
            pagination: isSmallDevice ? true : false,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[100%]');

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
