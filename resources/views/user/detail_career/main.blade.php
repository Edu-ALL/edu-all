@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/careers.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/careers.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/careers.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :active="__('pages/navbar.about_us.submenu.2.title')" title="{{ __('pages/about_us/careers.title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-career-banner bg-cover bg-top" id="banner">
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div
                class="flex flex-col h-full items-center md:items-center justify-center md:justify-end main-container md:pb-[18vh] md:pt-[15%] gap-2">
                <h2 class="font-bold text-banner-title text-white text-center">
                    {{ __('pages/about_us/careers.tag') }}
                </h2>
                <h2 class="font-medium text-lg text-white text-center mt-2">
                    {{ __('pages/about_us/careers.body') }}
                </h2>
            </div>
        </div>
    </section>

    {{-- ================================== Career Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container">

            <div class="max-w-2xl mx-auto mt-6">
                <h4 class="font-newprimary font-bold text-3xl text-dark text-center md:text-5xl">
                    {{ $career->job_position }}
                </h4>
            </div>

            <div class="flex flex-col w-full mt-16">
                <h3 class="font-bold text-2xl text-newprimary md:text-2xl w-full text-left border-b border-b-black pb-2">
                    About the Role</h3>
                <div class="text-dark text-sm md:text-base py-4 blog_style">
                    {!! $career->about_the_role !!}
                </div>
            </div>

            <div class="flex flex-col w-full mt-4">
                <h3 class="font-bold text-2xl text-newprimary md:text-2xl w-full text-left border-b border-b-black pb-2">
                    Job Description</h3>
                <div class="text-dark text-sm md:text-base py-4 blog_style">
                    {!! $career->job_description !!}
                </div>
            </div>

            <div class="flex flex-col w-full mt-4">
                <h3 class="font-bold text-2xl text-newprimary md:text-2xl w-full text-left border-b border-b-black pb-2">
                    Requirements</h3>
                <div class="text-dark text-sm md:text-base py-4 blog_style">
                    {!! $career->requirements !!}
                </div>
            </div>

            <div class="flex flex-col w-full mt-4 items-center justify-center gap-4">
                <span class="text-center text-dark">If you're interested in this position, please submit your CV to <a
                        href="mailto:careers@edu-all.com" class="text-newprimary">careers@edu-all.com</a> with the subject
                    line: <br> Full Name_Position</span>
                <a href="mailto:careers@edu-all.com"
                    class="inline-flex items-center text-red gap-2 text-sm border border-newprimary rounded-full px-5 py-1.5 hover:bg-white/10 transition-colors duration-300">
                    Apply Here
                    <i class="fa-solid fa-chevron-right text-red"></i>
                </a>
            </div>

            <div class="w-full mt-12">
                <a href="{{ route('partnership_careers', app()->getLocale()) }}"
                    class="flex items-center text-newprimary hover:text-newprimary-dark transition-colors duration-300 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Careers
                </a>
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
