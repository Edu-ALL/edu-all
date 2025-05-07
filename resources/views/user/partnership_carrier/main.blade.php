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
                <h1 class="font-bold text-banner-title text-white text-center">
                    {{ __('pages/about_us/careers.tag') }}
                </h1>
                <h2 class="font-medium text-lg text-white text-center mt-2">
                    {{ __('pages/about_us/careers.body') }}
                </h2>
            </div>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-wrap items-start justify-center md:justify-between gap-8 max-w-4xl mx-auto">
                @foreach (__('pages/about_us/careers.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center">
                        <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-16 relative">
                                <img data-original="{{ asset('assets/img/about/partnership-career/benefit/' . $item['image']) }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                                <div class="absolute top-0 -right-4">
                                    <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-sm text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-6">{{ $item['title'] }}
                        </h4>
                        <span
                            class="font-newprimary text-base font-normal text-center leading-5">{!! $item['tag'] !!}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Desc Section  ================================== --}}
    <section class="pt-4">
        <div class="flex flex-col items-center new-main-container">
            <div class="max-w-3xl mx-auto mt-6">
                <h4 class="font-newprimary font-bold text-2xl text-newprimary text-center md:text-5xl">
                    {{ __('pages/about_us/careers.desc') }}
                </h4>
            </div>
        </div>
    </section>

    {{-- ================================== Career Section  ================================== --}}
    <section class="py-24" id="career">
        <div class="new-main-container">
            <div class="grid grid-cols-8 gap-4 mb-6 items-center justify-between border-b border-b-[#393636] pb-4">
                <div class="relative flex-1 w-full col-span-full md:col-span-4">
                    <input type="text" name="search" placeholder="Search Position" value="{{ request('search') }}"
                        onchange="applyFilters()"
                        class="w-full pl-4 pr-10 py-2 rounded-full bg-[#EAEAEA] border border-newprimary text-sm focus:outline-none">
                    <button type="button"
                        class="absolute right-4 top-1/2 -translate-y-1/2 pl-4 pr-2 border-l border-l-dark"
                        onclick="applyFilters()">
                        <i class="fa-solid fa-magnifying-glass text-newprimary"></i>
                    </button>
                </div>
                <div class="flex gap-4 w-full col-span-full md:col-span-4 justify-end">
                    <div class="relative flex-1 md:flex-none">
                        <select
                            class="w-full md:w-44 pl-4 pr-10 py-2 rounded-full text-sm bg-[#EAEAEA] border border-newprimary appearance-none focus:outline-none cursor-pointer"
                            placeholder="Department" onchange="applyFilters()">
                            <option value="" disabled selected hidden>Department</option>
                            @if (!(request('department') == '' ? 'selected' : ''))
                                <option value="" {{ request('department') == '' ? 'selected' : '' }}>All Department
                                </option>
                            @endif
                            @foreach (['IT', 'Product', 'Marketing', 'Finance', 'Human Resource'] as $department)
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
                            placeholder="Status" onchange="applyFilters()">
                            <option value="" disabled selected hidden>Status</option>
                            @if (!(request('status') == '' ? 'selected' : ''))
                                <option value="" {{ request('status') == '' ? 'selected' : '' }}>All Status</option>
                            @endif
                            @foreach (['Part Time', 'Full Time', 'Freelance'] as $status)
                                <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                @if ($careers->isEmpty())
                    <p class="text-center text-lg py-12">No careers found</p>
                @else
                    @foreach ($careers as $career)
                        <div class="bg-black rounded-xl px-6 py-8 text-white shadow-xl">
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-center">
                                <div class="md:col-span-2">
                                    <p class="text-sm text-[#9C9C9C] uppercase mb-3">POSITION</p>
                                    <h4 class="font-bold text-lg font-newprimary text-white">{{ $career->job_position }}
                                    </h4>
                                </div>
                                <div>
                                    <p class="text-sm text-[#9C9C9C] uppercase mb-3">DEPARTMENT</p>
                                    <p class="font-semibold text-lg font-newprimary text-white">
                                        {{ $career->department ?? 'Product' }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-[#9C9C9C] uppercase mb-3">STATUS</p>
                                    <p class="font-semibold text-lg font-newprimary text-white">
                                        {{ $career->type ?? 'Full-Time' }}</p>
                                </div>
                                <div class="flex justify-end h-full items-end">
                                    <a href="{{ route('detail_careers', ['locale' => app()->getLocale(), 'slug' => $career->slug]) }}"
                                        class="inline-flex items-center gap-2 bg-[#0D0D0D] text-sm border border-newprimary rounded-full px-5 py-1.5 hover:bg-white/10 transition-colors duration-300">
                                        Read More
                                        <i class="fa-solid fa-chevron-right text-newprimary"></i>
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

    {{-- ================================================ Gallery ============================================= --}}
    <section class="pb-16 pt-8">
        <div class="new-main-container">
            <div class="flex flex-col items-center gap-8">
                <h4 class="font-newprimary font-bold text-2xl md:text-4xl text-dark text-center">
                    {{ __('pages/about_us/careers.life_at_edu_all') }}
                </h4>
                <div class="splide gallery" id="gallery-carousel" role="group">
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
                            @for ($i = 1; $i < 7; $i++)
                                <li class="splide__slide">
                                    <div class="px-4">
                                        <img data-original="{{ asset('assets/img/about/partnership-career/gallery/gallery_' . $i . '.webp') }}"
                                            alt="EduALL Career Activity" class="w-full rounded-lg">
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
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

        var gallery = new Splide('.gallery', {
            perPage: isMediumDevice ? 1 : 2,
            perMove: 1,
            autoplay: true,
            lazyload: true,
            interval: 3000,
            arrows: isMediumDevice ? false : true,
            pagination: isMediumDevice ? true : false,
        });

        gallery.on('pagination:mounted', function(data) {
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
