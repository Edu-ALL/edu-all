@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Careers', 'url' => route('partnership_careers', [app()->getLocale()])],
        ];
    @endphp
    <title>{{ __('pages/partnership_career.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/partnership_career.meta_title') }}" />
    <meta name="description" content="{{ __('pages/partnership_career.meta_description') }}" />
@endsection

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    {{-- Hero banner with CTA --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-white">
                <img src="{{ asset('assets/img/about/partnership-career/2026/1. Background Hero.png') }}"
                    alt="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}"
                    title="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[30vh]">
                <div class="new-main-container relative overflow-hidden">
                    <h1 class="font-normal text-[2rem] md:text-[3.5rem] text-newprimary text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 leading-8 uppercase md:pr-10"
                        itemprop="headline">
                        {{ __('pages/partnership_career.banner_title') }}
                    </h1>
                    <p
                        class="text-xl md:text-2xl font-normal text-center lg:text-left max-w-2xl mx-auto lg:mx-0 mb-5 text-newprimary md:pr-10">
                        {{ __('pages/partnership_career.banner_subtitle') }}
                    </p>

                    <p class="text-newprimary text-base md:text-lg mb-4 md:mb-10 md:text-start text-center max-w-2xl md:pr-10"
                        itemprop="description">
                        {{ __('pages/partnership_career.banner_description') }}
                    </p>

                    <div class="flex md:justify-start justify-center">
                        <a href="#"
                            class="rounded-full py-2 px-5 text-base md:text-lg bg-newprimary text-white inline-block">
                            {{ __('pages/partnership_career.banner_cta') }}
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <div class="absolute w-full md:w-[60%] main-container top-0 -right-[10%] hidden md:block">
                        <div class="flex gap-5">
                            <div class="w-1/2">
                                <img src="{{ asset('assets/img/about/partnership-career/2026/2. Foto Hero 1.png') }}"
                                    alt="EduALL" class="rounded-md w-full mb-5">
                                <img src="{{ asset('assets/img/about/partnership-career/2026/4. Foto Hero 3.png') }}"
                                    alt="EduALL" class="rounded-md w-full">
                            </div>
                            <div class="w-1/2">
                                <img src="{{ asset('assets/img/about/partnership-career/2026/5. Foto Hero 4.png') }}"
                                    alt="EduALL" class="rounded-md w-full mb-5">
                                <img src="{{ asset('assets/img/about/partnership-career/2026/3. Foto Hero 2.png') }}"
                                    alt="EduALL" class="rounded-md w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Culture Section ==================== --}}
    {{-- Company culture and values --}}
    <section class="new-main-container py-10">
        <div class="max-w-6xl mx-auto">
            <p class="uppercase text-center font-light mb-3 text-sm md:text-base">
                {{ __('pages/partnership_career.culture_label') }}
            </p>
            <h2 class="text-3xl md:text-4xl text-center uppercase font-normal text-newprimary mb-5">
                {{ __('pages/partnership_career.culture_title') }}
            </h2>
            <p class="text-base md:text-xl text-center font-light text-newprimary/80">
                {{ __('pages/partnership_career.culture_description') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mt-8 md:mt-10">
            @foreach (__('pages/partnership_career.culture_values') as $value)
                <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                    <img src="{{ asset('assets/img/about/Career/17. Background position.png') }}" alt="EduALL"
                        class="absolute top-0 left-0 w-full h-full object-cover z-0">
                    <div class="p-4 md:p-5 relative z-10">
                        <div class="w-[50px] h-[50px] bg-white rounded-lg p-1 mb-4">
                            <img src="{{ asset($value['image']) }}" alt="{{ $value['title'] }}"
                                class="w-full h-full object-contain">
                        </div>

                        <h3 class="text-white text-xl md:text-xl font-normal mb-3">
                            {{ $value['title'] }}
                        </h3>

                        <p class="text-white/70 leading-6 text-sm md:text-base">
                            {{ $value['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    {{-- ==================== Life at EduALL Section ==================== --}}
    {{-- Gallery and team moments --}}
    <section class="bg-gradient-to-b from-white to-blue-100 py-10 mt-10 md:mt-20">
        <div class="new-main-container">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl text-center uppercase font-normal text-newprimary mb-5">
                    {{ __('pages/partnership_career.life_title') }}
                </h2>
                <p class="text-base md:text-xl text-center font-light text-newprimary/80 mb-5">
                    {{ __('pages/partnership_career.life_description') }}
                </p>
            </div>

            <div class="md:flex gap-5 mt-10 hidden">
                <div class="w-[25%]">
                    <img src="{{ asset('assets\img\about\partnership-career\2026\10. Momen 1.png') }}" alt="EduALL"
                        class="rounded-xl w-full">
                </div>
                <div class="w-[75%]">
                    <div class="flex gap-5 mb-5">
                        <div class="w-2/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\11. Momen 2.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                        <div class="w-1/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\12. Momen 3.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                    </div>
                    <div class="flex gap-5 mb-5">
                        <div class="w-1/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\13. Momen 4.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                        <div class="w-2/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\14. Momen 5.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-5">
                <div class="w-full md:w-[25%]">
                    <img src="{{ asset('assets\img\about\partnership-career\2026\12. Momen 6.png') }}" alt="EduALL"
                        class="rounded-xl w-full">
                </div>
                <div class="w-full md:w-[60%]">
                    <div class="flex flex-col md:flex-row gap-5 mb-5">
                        <div class="w-full md:w-1/2">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\15. Momen 6.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                        <div class="w-full md:w-1/2">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\16. Momen 7.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== The EduALL Experience Section ==================== --}}
    {{-- Career growth and benefits --}}
    <section class="bg-gradient-to-b from-blue-100 to-white py-10 md:py-20">
        <div class="new-main-container mt-10 md:mt-20">
            <div class="w-full mx-auto mb-10">
                <p class="uppercase text-center font-light mb-3 text-sm md:text-base">
                    {{ __('pages/partnership_career.experience_label') }}
                </p>
                <h2 class="text-3xl md:text-4xl text-center uppercase font-normal text-newprimary mb-5">
                    {{ __('pages/partnership_career.experience_title') }}
                </h2>
                <p class="text-base md:text-xl text-center font-light text-newprimary/80">
                    {{ __('pages/partnership_career.experience_description') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
                @foreach (__('pages/partnership_career.experience_items') as $item)
                    @if ($item['number'] != '06')
                        <div class="bg-[#D9EEFF] rounded-xl p-4 md:p-5">
                            <p class="font-normal text-lg mb-2 text-newprimary">{{ $item['number'] }}</p>
                            <p class="font-normal text-lg md:text-xl mb-2 text-newprimary">
                                {{ $item['title'] }}
                            </p>
                            <p class="font-light text-dark/60 text-sm md:text-base">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    @else
                        <div
                            class="bg-gradient-to-br from-newprimary to-newprimary/90 rounded-xl relative overflow-hidden">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\18. CTA.png') }}" alt="EduALL"
                                class="absolute top-0 left-0 w-full h-full object-cover z-0">
                            <div class="flex h-full items-center justify-center p-5 relative z-10">
                                <p class="font-normal text-lg md:text-xl text-white text-center">
                                    {!! $item['title'] !!}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== Join Us / Roles Open Section ==================== --}}
    {{-- Career listings with filters --}}
    <section class="bg-gradient-to-tr from-[#00020E] to-newprimary py-10 md:py-20">
        <div class="new-main-container mt-10 md:mt-20">
            <div class="max-w-4xl mx-auto mb-10">
                <p class="uppercase text-center font-light mb-3 text-white text-sm md:text-base">
                    {{ __('pages/partnership_career.join_us_label') }}
                </p>
                <h2 class="text-3xl md:text-4xl text-center uppercase font-normal mb-5 text-white">
                    {{ __('pages/partnership_career.join_us_title') }}
                </h2>
                <p class="text-base md:text-xl text-center font-light text-white/80">
                    {{ __('pages/partnership_career.join_us_description') }}
                </p>
            </div>

            <section class="py-10" id="career">
                <div class="new-main-container">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 items-center justify-between border-b border-b-[#393636] pb-4">
                        <div class="relative w-full">
                            <input type="text" name="search"
                                placeholder="{{ __('pages/partnership_career.search_placeholder') }}"
                                value="{{ request('search') }}" onchange="applyFilters()"
                                class="w-full pl-4 pr-10 py-2 rounded-full bg-[#EAEAEA] border border-newprimary text-sm focus:outline-none">
                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 pl-4 pr-2 border-l border-l-dark"
                                onclick="applyFilters()">
                                <i class="fa-solid fa-magnifying-glass text-newprimary"></i>
                            </button>
                        </div>
                        <div class="flex flex-col md:flex-row gap-3 md:gap-4 w-full justify-end">
                            <div class="relative flex-1 md:flex-none">
                                <select
                                    class="w-full md:w-44 pl-4 pr-10 py-2 rounded-full text-sm bg-[#EAEAEA] border border-newprimary appearance-none focus:outline-none cursor-pointer"
                                    placeholder="{{ __('pages/partnership_career.department_label') }}"
                                    onchange="applyFilters()">
                                    <option value="" disabled selected hidden>
                                        {{ __('pages/partnership_career.department_label') }}</option>
                                    @if (!(request('department') == '' ? 'selected' : ''))
                                        <option value="" {{ request('department') == '' ? 'selected' : '' }}>
                                            {{ __('pages/partnership_career.all_department') }}
                                        </option>
                                    @endif
                                    @foreach (__('pages/partnership_career.departments') as $department)
                                        <option value="{{ $department }}"
                                            {{ request('department') == $department ? 'selected' : '' }}>
                                            {{ $department }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="relative flex-1 md:flex-none">
                                <select
                                    class="w-full md:w-44 pl-4 pr-10 py-2 rounded-full text-sm bg-[#EAEAEA] border border-newprimary appearance-none focus:outline-none cursor-pointer"
                                    placeholder="{{ __('pages/partnership_career.status_label') }}"
                                    onchange="applyFilters()">
                                    <option value="" disabled selected hidden>
                                        {{ __('pages/partnership_career.status_label') }}</option>
                                    @if (!(request('status') == '' ? 'selected' : ''))
                                        <option value="" {{ request('status') == '' ? 'selected' : '' }}>
                                            {{ __('pages/partnership_career.all_status') }}
                                        </option>
                                    @endif
                                    @foreach (__('pages/partnership_career.statuses') as $status)
                                        <option value="{{ $status }}"
                                            {{ request('status') == $status ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        @if ($careers->isEmpty())
                            <p class="text-center text-lg py-12">{{ __('pages/partnership_career.no_careers_found') }}</p>
                        @else
                            @foreach ($careers as $career)
                                <div class="bg-white rounded-2xl px-6 py-6 md:py-8 text-white shadow-xl">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                                        <div class="">
                                            <h4 class="font-normal text-lg md:text-xl font-newprimary text-newprimary">
                                                {{ $career->job_position }}
                                            </h4>
                                            <div class="flex flex-col md:flex-row md:gap-5">
                                                <p class="font-light text-dark/60 text-sm md:text-base">
                                                    {{ $career->department ?? 'Product' }}
                                                </p>
                                                <p class="font-light text-dark/60 text-sm md:text-base">
                                                    {{ $career->type ?? 'Full-Time' }}
                                                </p>
                                            </div>
                                            <p class="font-light text-dark/60 text-sm md:text-base">
                                                {{ __('pages/partnership_career.job_location') }}
                                            </p>
                                        </div>
                                        <div class="flex justify-end h-full items-center">
                                            <a href="{{ route('detail_careers', ['locale' => app()->getLocale(), 'slug' => $career->slug]) }}"
                                                class="inline-flex items-center gap-2 text-newprimary text-sm md:text-base">
                                                {{ __('pages/partnership_career.view_apply') }}
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="pt-8">
                        {{ $careers->links('layout.user.pagination') }}
                    </div>
                </div>
            </section>
        </div>
    </section>

    {{-- ==================== CTA Section ==================== --}}
    {{-- Call to action for joining the team --}}
    <section class="new-main-container my-10 md:my-20">
        <div class="bg-gradient-to-br from-dark to-newprimary rounded-2xl relative overflow-hidden">
            <img src="{{ asset('assets\img\about\partnership-career\2026\18. CTA.png') }}" alt="EduALL"
                class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <div class="text-center px-5 py-10 md:py-10 max-w-3xl mx-auto relative z-10">
                <h3 class="text-2xl md:text-4xl text-white font-light mb-3 uppercase">
                    {{ __('pages/partnership_career.cta_title') }}
                </h3>
                <p class="text-base md:text-xl text-white/60 font-light mb-10">
                    {{ __('pages/partnership_career.cta_description') }}
                </p>
                <a href="#career" class="bg-dark text-white rounded-2xl py-3 px-8 md:px-10 inline-block">
                    {{ __('pages/partnership_career.cta_button') }}
                </a>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var department = document.querySelector('select[placeholder="Department"]').value;
        var status = document.querySelector('select[placeholder="Status"]').value;
        var search = document.querySelector('input[name="search"]').value;

        if (department || status || search) {
            // Scroll to the career section
            document.getElementById('career').scrollIntoView({
                behavior: 'smooth'
            });
        }

        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        function applyFilters() {
            var department = document.querySelector('select[placeholder="Department"]').value;
            var status = document.querySelector('select[placeholder="Status"]').value;
            var search = document.querySelector('input[name="search"]').value;
            var baseUrl = '{{ route('partnership_careers', ['locale' => app()->getLocale()]) }}';
            var queryParams = [];

            if (department) queryParams.push('department=' + encodeURIComponent(department));
            if (status) queryParams.push('status=' + encodeURIComponent(status));
            if (search) queryParams.push('search=' + encodeURIComponent(search));

            window.location.href = baseUrl + (queryParams.length ? '?' + queryParams.join('&') : '');
        }

        document.querySelector('select[placeholder="Department"]').addEventListener('change', applyFilters);
        document.querySelector('select[placeholder="Status"]').addEventListener('change', applyFilters);
    </script>
@endpush
