@extends('layout.user.main')
@section('head')
    <title>{{ __('pages/programs/admission_mentoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/admission_mentoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/admission_mentoring.meta_description') }}" />
@endsection
@section('content')
    @include('layout.user.sub-navbar.admission-navbar', ['active' => 'general'])

    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-adm-mentoring-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full justify-center items-center main-container py-20 gap-2">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center uppercase">
                {{ __('pages/programs/admission_mentoring.title') }}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/admission_mentoring.body') }}
            </p>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-wrap items-center justify-evenly gap-8">
                <div class="shadow-clip">
                    <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%, 0 0);">
                        <div class="h-12 relative">
                            <img data-original="{{ asset('assets/img/admission mentoring/revamp/benefit-1.svg') }}"
                                alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                            <div class="absolute top-0 -right-4">
                                <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-sm text-white"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">1-on-1</h4>
                        <span class="font-newprimary text-base font-normal text-center">Mentoring</span>
                    </div>
                </div>
                <div class="shadow-clip">
                    <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%, 0 0);">
                        <div class="h-12 relative">
                            <img data-original="{{ asset('assets/img/admission mentoring/revamp/benefit-2.svg') }}"
                                alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                            <div class="absolute top-0 -right-4">
                                <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-sm text-white"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">Personalized</h4>
                        <span class="font-newprimary text-base font-normal text-center">Strategy Plan</span>
                    </div>
                </div>
                <div class="shadow-clip">
                    <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%, 0 0);">
                        <div class="h-12 relative">
                            <img data-original="{{ asset('assets/img/admission mentoring/revamp/benefit-3.svg') }}"
                                alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                            <div class="absolute top-0 -right-4">
                                <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-sm text-white"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">Well-Rounded</h4>
                        <span class="font-newprimary text-base font-normal text-center">Support</span>
                    </div>
                </div>
                <div class="shadow-clip">
                    <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4"
                        style="clip-path: polygon(50% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%, 0 0);">
                        <div class="h-12 relative">
                            <img data-original="{{ asset('assets/img/admission mentoring/revamp/benefit-4.svg') }}"
                                alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                            <div class="absolute top-0 -right-4">
                                <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-sm text-white"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">Proven</h4>
                        <span class="font-newprimary text-base font-normal text-center">Track Record</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="main-container">
            <div class="flex flex-col md:flex-row items-end justify-center gap-8">
                @foreach (__('pages/programs/admission_mentoring.program_list') as $item)
                    <div class="flex flex-col w-full md:w-1/3 my-4">
                        @if ($item['is_popular'] == true)
                            <div
                                class="px-8 pt-5 pb-12 w-full bg-newprimary rounded-2xl flex items-center justify-center gap-2">
                                <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                                <h3 class="text-newyellow text-lg font-bold text-center">
                                    {{ __('pages/programs/admission_mentoring.popular_choice') }}
                                </h3>
                                <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                            </div>
                        @endif
                        <div class="-mt-8 pt-16 flex flex-col items-center rounded-2xl shadow-md py-8 px-6 bg-white">
                            <h3 class="font-bold uppercase text-2xl text-center">
                                {!! $item['title'] !!}
                            </h3>
                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                <img src="https://via.placeholder.com/80x40" alt=""
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
                {{-- <div class="flex flex-col items-center w-full md:w-1/3 rounded-2xl shadow-md py-8 px-6">
                    <h3 class="font-bold uppercase text-2xl text-center">
                        {{ __('pages/programs/admission_mentoring.undergraduate_program_title') }}
                    </h3>
                    <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                        <img src="https://via.placeholder.com/80x40" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="w-full md:h-36 border-b border-b-[#DEDEDE]">
                        <p class="text-base text-justify px-4 leading-5">
                            {{ __('pages/programs/admission_mentoring.undergraduate_program_description') }}
                        </p>
                    </div>
                    <div class="w-full md:h-52">
                        <ul class="mt-4 w-full flex flex-col gap-3">
                            <li class="flex justify-center items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.all_around_university_application') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.personalized_admission_assessment') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.profile_development_academic_planning') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.academic_advising_support') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.best_fit_university_research_selection') }}
                                </p>
                            </li>
                        </ul>
                    </div>
                    <x-button href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                        title="{{ __('pages/programs/admission_mentoring.learn_more') }}" bg-color="newprimary" />
                    <span class="mt-1 text-sm text-[#9C9C9C]">
                        {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                        <a href="#" class="underline text-newprimary hover:text-black">
                            {{ __('pages/programs/admission_mentoring.book_now') }}
                        </a>
                    </span>
                </div>
                <div class="flex flex-col items-center w-full md:w-1/3 rounded-2xl shadow-md py-8 px-6">
                    <h3 class="font-bold uppercase text-2xl text-center">
                        {{ __('pages/programs/admission_mentoring.undergraduate_program_title') }}
                    </h3>
                    <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                        <img src="https://via.placeholder.com/80x40" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="w-full md:h-36 border-b border-b-[#DEDEDE]">
                        <p class="text-base text-justify px-4 leading-5">
                            {{ __('pages/programs/admission_mentoring.transfer_students_description') }}
                        </p>
                    </div>
                    <div class="w-full md:h-52">
                        <ul class="mt-4 w-full flex flex-col gap-3">
                            <li class="flex justify-center items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.all_around_university_application') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.personalized_admission_assessment') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.profile_development_academic_planning') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.academic_advising_support') }}
                                </p>
                            </li>
                            <li class="flex justify-start items-start gap-2">
                                <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-check fa-xs text-white"></i>
                                </div>
                                <p class="flex-1 text-sm font-newprimary">
                                    {{ __('pages/programs/admission_mentoring.best_fit_university_research_selection') }}
                                </p>
                            </li>
                        </ul>
                    </div>
                    <x-button href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                        title="{{ __('pages/programs/admission_mentoring.learn_more') }}" bg-color="newprimary" />
                    <span class="mt-1 text-sm text-[#9C9C9C]">
                        {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                        <a href="#" class="underline text-newprimary hover:text-black">
                            {{ __('pages/programs/admission_mentoring.book_now') }}
                        </a>
                    </span>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="pt-16 pb-20">
        <div class="main-container">
            <div class="flex flex-col items-center justify-center">
                <h2 class="font-newprimary font-bold text-black text-center text-4xl mb-4 uppercase">
                    {{ __('pages/programs/admission_mentoring.why_us_title') }}
                </h2>
                <p class="text-center text-base max-w-xl mx-auto mb-8">
                    {{ __('pages/programs/admission_mentoring.why_us_description') }}
                </p>
                <img src="{{ asset('assets/img/admission mentoring/revamp/whyus.png') }}" alt=""
                    class="w-full max-w-2xl object-contain">
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="pt-16 pb-20">
        <div class="main-container">
            <h2 class="font-newprimary font-bold text-black text-center text-2xl mb-4">
                {{ __('pages/programs/admission_mentoring.what_our_mentees_say') }}
            </h2>

            <div class="splide" role="group">
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

    <!-- Bottom Section -->
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full mb-6 font-newprimary font-semibold text-white text-center lg:text-3xl text-2xl">
                {{ __('pages/programs/admission_mentoring.bottom_section_title') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                title="{{ __('pages/programs/admission_mentoring.schedule_free_consultation') }}" type='secondary'
                bg-color="red" />
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
@endpush
