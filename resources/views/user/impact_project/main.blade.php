{{-- ==================== Impact Project Page ==================== --}}
{{-- Main page for displaying student projects and research papers --}}

@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => __('Home', [], app()->getLocale()), 'url' => url('/' . app()->getLocale())],
            ['name' => __('pages.about_us.title', [], app()->getLocale()), 'url' => '#'],
            [
                'name' => __('pages/impact_project.banner.title', [], app()->getLocale()),
                'url' => route('impact-project', [app()->getLocale()]),
            ],
        ];
    @endphp
    <title>{{ __('pages/impact_project.meta_title', [], app()->getLocale()) }}</title>
    <meta name="title" content="{{ __('pages/impact_project.meta_title', [], app()->getLocale()) }}" />
    <meta name="description" content="{{ __('pages/impact_project.meta_description', [], app()->getLocale()) }}" />
@endsection

{{-- Custom CSS Styles --}}
@push('style')
    <style>
        /* ==================== Mentee Slider Styles ==================== */
        #slider {
            padding: 60px 0;
        }

        #slider .splide__track {
            overflow: visible;
        }

        #slider .splide__list {
            align-items: center;
        }

        #slider .splide__slide {
            transition: all .4s ease;
            transform: scale(.75);
            opacity: .2;
            z-index: 1;
        }

        #slider .splide__slide img {
            width: 100%;
            border-radius: 24px;
            transition: all .4s ease;
        }

        #slider .splide__slide.is-active {
            transform: scale(1.2);
            opacity: 1;
            z-index: 10;
        }

        /* Hide scrollbar for project slider */
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    {{-- Hero section with main heading and project introduction --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="pt-10">
                <div class="flex pt-20 gap-5 items-center flex-col md:flex-row">
                    <div class="w-full md:w-[60%]">
                        <div class="md:pl-[18%] md:pr-[5%] min-[1600px]:pl-[32%]">
                            <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-newprimary text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8 uppercase"
                                itemprop="headline">
                                {{ __('pages/impact_project.banner.title', [], app()->getLocale()) }}
                            </h1>

                            <p class="text-gray-500 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                                itemprop="description">
                                {{ __('pages/impact_project.banner.description', [], app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-[40%] mt-6 md:mt-0">
                        <img src="{{ asset('assets/img/impact-project/bg-banner.png') }}"
                            alt="EduALL Impact Projects - Student Innovation and Research" loading="lazy" decoding="async"
                            width="600" height="400" class="w-full object-cover">
                    </div>
                </div>
            </div>
            <div class="bg-[#EEF2FB] py-5">
                <div class="new-main-container">
                    <div class="flex gap-5 justify-start">
                        <button
                            class="tab-btn active bg-newprimary border border-newprimary text-white rounded-full py-2 px-4 md:px-5 text-sm md:text-base"
                            data-tab="passion_projects">
                            {{ __('pages/impact_project.banner.buttons.passion_projects', [], app()->getLocale()) }}
                        </button>

                        <button
                            class="tab-btn bg-white border border-newprimary text-newprimary rounded-full py-2 px-4 md:px-5 text-sm md:text-base"
                            data-tab="student_research">
                            {{ __('pages/impact_project.banner.buttons.student_research', [], app()->getLocale()) }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Notable Projects Slider ==================== --}}
    {{-- Horizontal scrolling showcase of featured projects --}}
    <section class="bg-newprimary py-12 md:py-20">
        <div class="new-main-container">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-5">
                <h2 class="text-white text-3xl md:text-5xl mb-4 md:mb-0 font-normal text-center md:text-left">
                    Notable Projects
                </h2>

                <div class="flex gap-3">
                    <button onclick="scrollProjects(-1)"
                        class="w-[40px] h-[40px] rounded-full flex items-center justify-center bg-white/50 hover:bg-white transition">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button onclick="scrollProjects(1)"
                        class="w-[40px] h-[40px] rounded-full flex items-center justify-center bg-white/50 hover:bg-white transition">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            @php
                $projects = __('pages/impact_project.passion_projects.projects', [], app()->getLocale());
            @endphp

            <div id="projectSlider" class="overflow-x-auto scrollbar-hide md:overflow-hiden">
                <div class="flex gap-5 transition-transform duration-500 ease-in-out">
                    @foreach ($projects as $project)
                        <div class="w-full md:w-[calc(25%-15px)] flex-shrink-0 group">
                            <div class="overflow-hidden rounded-xl aspect-[4/2.2] bg-gray-200">
                                <img src="{{ $project['image'] ? asset('assets/img/impact-project/') . '/' . $project['image'] : 'https://placehold.net/default.svg' }}"
                                    alt="{{ $project['title'] }} - {{ $project['category'] }} by {{ $project['author'] }}"
                                    loading="lazy" decoding="async" width="800" height="440"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>

                            <h3 class="text-lg md:text-xl font-normal text-white mt-3">
                                {{ $project['title'] }}
                            </h3>

                            <p class="text-white/60 text-xs md:text-sm">
                                {{ $project['category'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Passion Projects Section ==================== --}}
    {{-- Tab content: Student passion projects with category filters --}}
    <section class="py-12 md:py-20" id="passion_projects" data-tab-content="passion_projects">
        <div class="new-main-container py-6 md:py-10">
            <div class="max-w-4xl mx-auto text-center px-4">
                <h2 class="text-newprimary uppercase text-4xl md:text-6xl font-normal mb-2">
                    {{ __('pages/impact_project.passion_projects.title', [], app()->getLocale()) }}
                </h2>
                <p class="text-gray-600 text-base md:text-xl font-light">
                    {{ __('pages/impact_project.passion_projects.description', [], app()->getLocale()) }}
                </p>
            </div>

            <div class="mt-6 md:mt-10">
                {{-- Filter Buttons --}}
                <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-6 md:mb-8 px-4">
                    @foreach (__('pages/impact_project.passion_projects.filters', [], app()->getLocale()) as $key => $label)
                        <button
                            class="filter-btn {{ $key === 'all' ? 'active bg-newprimary text-white' : 'bg-gray-200 text-dark' }} px-4 md:px-6 py-1 md:py-2 rounded-full transition hover:bg-newprimary hover:text-white text-xs md:text-sm"
                            data-filter="{{ $key }}" data-section="passion_projects">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 px-4 md:px-0">
                    {{-- CARD --}}
                    @foreach ($projects as $project)
                        <div class="cursor-pointer modal-trigger" data-target="modal-{{ $project['id'] }}">
                            <img src="{{ $project['image'] ? asset('assets/img/impact-project/') . '/' . $project['image'] : 'https://placehold.net/default.svg' }}"
                                alt="{{ $project['title'] }} - {{ $project['category'] }}" loading="lazy" decoding="async"
                                width="800" height="300" class="w-full h-[300px] object-cover rounded-xl mb-2">
                            <div class="flex items-center justify-between mb-5">

                                <h3 class="text-newprimary text-xl">
                                    {{ $project['title'] }}
                                </h3>

                                <div class="text-newprimary bg-[#E7ECFB] rounded-xl px-5 py-1 uppercase">
                                    {{ $project['category'] }}
                                </div>
                            </div>

                            <p class="text-gray-600 font-light">
                                {{ $project['short'] }}
                            </p>

                            <hr class="my-3">

                            <p class="text-gray-700">
                                {{ $project['author'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                {{-- MODAL --}}
                @foreach ($projects as $project)
                    <div id="modal-{{ $project['id'] }}"
                        class="modal fixed inset-0 bg-black/60 hidden items-center justify-center z-50">

                        <div class="bg-white rounded-xl p-6 w-[90%] max-w-2xl relative">

                            <button class="close-modal absolute right-4 top-3 text-3xl">
                                &times;
                            </button>

                            <h3 class="text-2xl font-bold text-newprimary mb-3">
                                {{ $project['title'] }}
                            </h3>

                            <div class="flex gap-4 items-center mb-3">
                                <p class="text-newprimary">
                                    {{ $project['author'] }}
                                </p>

                                <div class="text-newprimary bg-[#E7ECFB] rounded-xl px-5 py-1 uppercase text-sm">
                                    {{ $project['category'] }}
                                </div>
                            </div>

                            <hr>

                            <img src="{{ $project['image'] ? asset('assets/img/impact-project/') . '/' . $project['image'] : 'https://placehold.net/default.svg' }}"
                                alt="{{ $project['title'] }} - {{ $project['category'] }} - Detailed view" loading="lazy"
                                decoding="async" width="800" height="450" class="w-full rounded-xl my-3">

                            <p class="text-gray-600 font-light mb-3">
                                {{ $project['desc1'] }}
                            </p>

                            <p class="text-gray-600 font-light">
                                {{ $project['desc2'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== Student Research Section ==================== --}}
    {{-- Tab content: Academic research papers with field filters --}}
    <section class="py-12 md:py-20 hidden" id="student_research" data-tab-content="student_research">
        <div class="new-main-container py-6 md:py-10">
            <div class="max-w-4xl mx-auto mb-10 text-center px-4">
                <h2 class="text-newprimary uppercase text-4xl md:text-6xl font-normal mb-2">
                    {{ __('pages/impact_project.student_research.title', [], app()->getLocale()) }}
                </h2>
                <p class="text-gray-600 text-base md:text-xl font-light">
                    {{ __('pages/impact_project.student_research.description', [], app()->getLocale()) }}
                </p>
            </div>

            <div class="w-full">
                {{-- Filter Buttons --}}
                <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-6 md:mb-8 px-4">
                    @foreach (__('pages/impact_project.student_research.filters', [], app()->getLocale()) as $key => $label)
                        <button
                            class="filter-btn {{ $key === 'all' ? 'active bg-newprimary text-white' : 'bg-gray-200 text-dark' }} px-4 md:px-6 py-1 md:py-2 rounded-full transition hover:bg-newprimary hover:text-white text-xs md:text-sm"
                            data-filter="{{ $key }}" data-section="student_research">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                @php
                    $research = __('pages/impact_project.student_research.research', [], app()->getLocale());
                @endphp

                <ul class="px-4 md:px-0">
                    @foreach ($research as $item)
                        <li class="border-t border-b py-4 md:py-5">
                            <div class="flex flex-col md:flex-row gap-3 md:gap-5 items-start">
                                {{-- CATEGORY --}}
                                <div class="w-full md:w-[15%]">
                                    <p class="uppercase text-gray-600 text-xs md:text-sm">
                                        {{ $item['category'] }}
                                    </p>
                                </div>

                                {{-- CONTENT --}}
                                <div class="flex-1">
                                    <p class="font-semibold text-newprimary mb-1 text-base md:text-base">
                                        {{ $item['title'] }}
                                    </p>
                                    <p class="text-xs md:text-sm text-blue-500 mb-2">
                                        {{ $item['author'] }}
                                    </p>
                                    <p class="text-xs md:text-sm text-gray-600">
                                        {{ $item['description'] }}
                                    </p>
                                </div>

                                {{-- LINK --}}
                                <div class="w-full md:w-auto md:text-right">
                                    <a href="{{ $item['link'] }}"
                                        class="font-bold whitespace-nowrap text-sm md:text-base">
                                        {{ __('pages/impact_project.student_research.read_paper', [], app()->getLocale()) }}

                                        <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- ==================== Call to Action Section ==================== --}}
    {{-- CTA with image slider for engagement --}}
    <section class="bg-gradient-to-b from-white to-[#305692] py-12 md:py-20">
        <div class="new-main-container py-10 md:py-20">
            <div class="text-center px-4">
                <h2 class="font-light text-3xl md:text-6xl mb-3">
                    {!! __('pages/impact_project.cta.title', [], app()->getLocale()) !!}
                </h2>
                <p class="mb-6 md:mb-10 text-sm md:text-base">
                    {{ __('pages/impact_project.cta.description', [], app()->getLocale()) }}
                </p>

                <a href="https://bit.ly/eduall-contactus" class="bg-dark text-white rounded-xl px-5 py-2 text-sm md:text-base">
                    {{ __('pages/impact_project.cta.button', [], app()->getLocale()) }}
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="max-w-6xl mx-auto mb-10 overflow-hidden pt-10">
                <div id="slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide rounded-2xl">
                                <img src="{{ asset('assets/img/Events/12. Event CTA foto 1.png') }}"
                                    alt="EduALL students participating in hands-on workshops and activities"
                                    loading="lazy" decoding="async" width="800" height="600"
                                    class="rounded-lg shadow-sm w-full">
                            </li>

                            <li class="splide__slide rounded-2xl">
                                <img src="{{ asset('assets/img/Events/13. Event CTA foto 2.png') }}"
                                    alt="EduALL community outreach and student engagement programs" loading="lazy"
                                    decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                            </li>

                            <li class="splide__slide rounded-2xl">
                                <img src="{{ asset('assets/img/Events/14. Event CTA foto 3.png') }}"
                                    alt="EduALL mentorship programs providing quality learning experiences" loading="lazy"
                                    decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                            </li>

                            <li class="splide__slide rounded-2xl">
                                <img src="{{ asset('assets/img/Events/15. Event CTA foto 4.png') }}"
                                    alt="EduALL educational events connecting students and educators" loading="lazy"
                                    decoding="async" width="800" height="600" class="rounded-lg shadow-sm w-full">
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- ==================== JavaScript Functions ==================== --}}
@push('script')
    <script>
        {{-- Project slider scroll function --}}

        function scrollProjects(direction) {
            const slider = document.querySelector('#projectSlider');

            const amount = slider.clientWidth * 0.7;

            slider.scrollBy({
                left: direction * amount,
                behavior: 'smooth'
            });
        }
    </script>

    {{-- Modal functionality --}}
    <script>
        // Buka modal
        document.querySelectorAll(".modal-trigger").forEach(trigger => {
            trigger.addEventListener("click", () => {
                const target = trigger.dataset.target;
                const modal = document.getElementById(target);

                if (modal) {
                    modal.classList.remove("hidden");
                    modal.classList.add("flex");
                }
            });
        });

        // Tombol close
        document.querySelectorAll(".close-modal").forEach(btn => {
            btn.addEventListener("click", () => {
                const modal = btn.closest(".modal");

                modal.classList.remove("flex");
                modal.classList.add("hidden");
            });
        });

        // Klik backdrop untuk menutup
        document.querySelectorAll(".modal").forEach(modal => {
            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    modal.classList.remove("flex");
                    modal.classList.add("hidden");
                }
            });
        });

        // Tutup dengan tombol ESC
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                document.querySelectorAll(".modal").forEach(modal => {
                    modal.classList.remove("flex");
                    modal.classList.add("hidden");
                });
            }
        });
    </script>

    {{-- Tab switching functionality --}}
    <script>
        // Tab functionality for Passion Projects and Student Research
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-btn');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabName = this.getAttribute('data-tab');

                    // Update active button state
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-newprimary', 'text-white');
                        btn.classList.add('bg-white', 'text-newprimary');
                    });
                    this.classList.add('active', 'bg-newprimary', 'text-white');
                    this.classList.remove('bg-white', 'text-newprimary');

                    // Show/hide tab content
                    document.querySelectorAll('[data-tab-content]').forEach(content => {
                        content.classList.add('hidden');
                    });
                    document.querySelector(`[data-tab-content="${tabName}"]`).classList.remove(
                        'hidden');

                    // Scroll to the section smoothly
                    const section = document.getElementById(tabName);
                    if (section) {
                        section.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });

        {{-- Filter functionality for projects and research --}}
        // Filter functionality for Passion Projects and Student Research
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');
                    const section = this.getAttribute('data-section');

                    // Update active button state
                    const sectionButtons = document.querySelectorAll(`[data-section="${section}"]`);
                    sectionButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-newprimary', 'text-white');
                        btn.classList.add('bg-gray-200', 'text-dark');
                    });
                    this.classList.add('active', 'bg-newprimary', 'text-white');
                    this.classList.remove('bg-gray-200', 'text-dark');

                    // Filter items based on section
                    if (section === 'passion_projects') {
                        filterPassionProjects(filterValue);
                    } else if (section === 'student_research') {
                        filterStudentResearch(filterValue);
                    }
                });
            });

            function filterPassionProjects(filter) {
                const projectCards = document.querySelectorAll('#passion_projects .grid > div');

                projectCards.forEach(card => {
                    const categoryText = card.querySelector('.bg-\\[\\#E7ECFB\\]')?.textContent
                        ?.toLowerCase() || '';

                    if (filter === 'all') {
                        card.style.display = 'block';
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.transition = 'opacity 0.3s ease-in';
                            card.style.opacity = '1';
                        }, 10);
                    } else {
                        const categoryMap = {
                            'stem': ['stem', 'science & tech', 'health & tech', 'social / tech',
                                'science / tech / sustainability'
                            ],
                            'business': ['business', 'business / art'],
                            'social_science': ['social / tech', 'social science'],
                            'art': ['art', 'business / art'],
                            'health': ['health', 'health & tech'],
                            'sustainability': ['sustainability', 'science & tech / sustainability',
                                'engineering / sustainability'
                            ]
                        };

                        const allowedCategories = categoryMap[filter] || [];
                        const matches = allowedCategories.some(cat => categoryText.includes(cat));

                        if (matches) {
                            card.style.display = 'block';
                            card.style.opacity = '0';
                            setTimeout(() => {
                                card.style.transition = 'opacity 0.3s ease-in';
                                card.style.opacity = '1';
                            }, 10);
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            }

            function filterStudentResearch(filter) {
                const researchItems = document.querySelectorAll('#student_research ul li');

                researchItems.forEach(item => {
                    const categoryText = item.querySelector('.uppercase')?.textContent?.toLowerCase() || '';

                    if (filter === 'all') {
                        item.style.display = 'block';
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.transition = 'opacity 0.3s ease-in';
                            item.style.opacity = '1';
                        }, 10);
                    } else {
                        const categoryMap = {
                            'science': ['science', 'science / biomedical', 'science / health',
                                'science / astrobiology', 'science / environmental',
                                'stem / materials'
                            ],
                            'technology': ['technology', 'technology / computer science',
                                'technology / health ai', 'science & tech', 'health & tech',
                                'social / tech'
                            ],
                            'engineering': ['engineering', 'engineering / sustainability',
                                'engineering / environmental'
                            ],
                            'health': ['health', 'science / health', 'technology / health ai',
                                'health & tech'
                            ],
                            'sustainability': ['sustainability', 'engineering / sustainability',
                                'stem / sustainability', 'science & tech / sustainability'
                            ]
                        };

                        const allowedCategories = categoryMap[filter] || [];
                        const matches = allowedCategories.some(cat => categoryText.includes(cat));

                        if (matches) {
                            item.style.display = 'block';
                            item.style.opacity = '0';
                            setTimeout(() => {
                                item.style.transition = 'opacity 0.3s ease-in';
                                item.style.opacity = '1';
                            }, 10);
                        } else {
                            item.style.display = 'none';
                        }
                    }
                });
            }
        });
    </script>

    {{-- Splide slider initialization --}}
    <script>
        // ==================== Mentee Slider (Splide) ====================
        // Initialize testimonial slider with autoplay
        document.addEventListener('DOMContentLoaded', function() {
            const isMobile = window.innerWidth < 768;

            new Splide('#slider', {
                type: 'loop',
                perPage: isMobile ? 1 : 3,
                perMove: isMobile ? 1 : 1,
                focus: isMobile ? 0 : 'center',
                gap: isMobile ? '1rem' : '-90px',
                padding: isMobile ? '0' : '50px',
                autoplay: true,
                interval: 4000,
                arrows: isMobile ? false : true,
                pagination: isMobile ? true : false,
                easing: 'cubic-bezier(0.25, 1, 0.5, 1)',
                speed: 600,
            }).mount();
        });
    </script>
@endpush
