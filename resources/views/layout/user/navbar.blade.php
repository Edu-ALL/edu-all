@php
    function isValidUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    $dark_navbar = [
        'partnership_careers', 'detail_careers',
    ];


@endphp

{{-- ==================== DESKTOP NAVBAR ==================== --}}
<header class="fixed w-full top-0 z-50 transition-all hidden md:block duration-[600ms] ease-in-out {{request()->routeIs($dark_navbar) ? 'bg-newprimary/70' : ''}}" id="top-navbar">
    <div class="transition-all duration-500 ease-in-out" id="navbar-top-bar">
        <div class="new-main-container flex justify-between items-center py-2 transition-all duration-500">
            {{-- Logo --}}
            <div class="">
                <img src="{{ asset('assets/logo/eduall-white-2026.png') }}" width="140" height="auto" class="-ml-2"
                    alt="{{ $website_settings->alt_secondary_logo }}"
                    title="{{ $website_settings->alt_secondary_logo }}" loading="lazy">
            </div>

            {{-- CTA Button --}}
            <div class="py-3 ">
                <a href="https://bit.ly/eduall-contactus" id="navbar-cta"
                    class="py-1 px-5 bg-white text-sm flex items-center justify-between rounded-lg shadow-lg gap-5 text-black font-semibold text-[14px] transition-all duration-500">
                    Consult Now
                </a>
            </div>
        </div>


        {{-- Divider --}}
        <div class="new-main-container">
            <div class="border-b-2 border-white transition-all duration-500" id="navbar-divider"></div>
        </div>
    </div>

    {{-- Navigation --}}
    <nav class="md:py-1 transition-all duration-500 ease-in-out" id="navbar-nav">
        <div class="new-main-container mx-auto px-1">
            <div class="flex justify-between items-center w-full">
                {{-- Navbar Links --}}
                <ul id="navbar-items"
                    class="flex-col md:flex-row whitespace-nowrap justify-start gap-1 hidden md:w-auto md:flex md:visible md:relative md:gap-1 transition-all">
                    @foreach (__('pages/navbar') as $itemKey => $item)
                        <li
                            class="navbar-item relative group rounded-full font-light programs-menu transition-all duration-100 ease-in-out hover:underline pr-5">
                            <div class="flex items-center gap-2">
                                <a href={{ $item['link'] == '#' ? '#' : url(app()->getLocale() . '/' . $item['link']) }}
                                    class="text-white text-base py-2 block text-[14px] transition-colors duration-500 navbar-link">
                                    {{ $item['title'] }}
                                </a>
                                @if (isset($item['submenu']))
                                    <i
                                        class="fa-solid fa-chevron-down text-white text-[14px] transition-colors duration-500 navbar-icon"></i>
                                @endif
                            </div>

                            {{-- Submenu Dropdown (Desktop) --}}
                            @if (isset($item['submenu']))
                                <ul
                                    class="dropdown-menu programs-menu absolute left-1/2 transform -translate-x-1/2 md:top-full hidden md:flex-col z-10">
                                    <div
                                        class="flex-col items-center justify-center mb-2 bg-newprimary rounded-lg shadow-lg text-white gap-1">
                                        @foreach ($item['submenu'] as $submenu)
                                            <li
                                                class="hover:bg-white/80 text-white hover:text-newprimary rounded-lg w-full text-[14px] {{ url(app()->getLocale() . '/' . $submenu['link']) == URL::current() ? 'bg-newprimary active-sub-navbar border-[#727272] border' : '' }}">
                                                <a href="{{ isValidUrl($submenu['link']) ? $submenu['link'] : url(app()->getLocale() . '/' . $submenu['link']) }}"
                                                    {{ isValidUrl($submenu['link']) ? 'target="_blank" rel="noopener noreferrer"' : '' }}
                                                    class="text-[14px] py-2 px-2 text-center rounded-lg flex w-full justify-between items-center gap-10">
                                                    {{ $submenu['title'] }}

                                                    <i class="fa-solid fa-arrow-circle-right"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>

                {{-- Social Icons --}}
                <div class="flex items-center gap-3 text-white text-2xl transition-colors duration-500"
                    id="navbar-socials">
                    <a href="{{ $website_settings->instagram }}" rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="{{ $website_settings->linkedin }}" rel="noopener noreferrer">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>


{{-- ==================== MOBILE NAVBAR ==================== --}}
<header class="transition-all md:hidden">
    {{-- Fixed Top Bar with Logo & Hamburger --}}
    <div class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10">
        <div class="flex items-center justify-between px-4 py-3">
            <img src="{{ asset('assets/logo/eduall-white-2026.png') }}" width="110" height="auto" class="-ml-2"
                alt="{{ $website_settings->alt_secondary_logo }}" title="{{ $website_settings->alt_secondary_logo }}"
                loading="lazy">

            <button id="mobile-menu-toggle"
                class="flex items-center justify-center text-white focus:outline-none p-2 rounded-lg bg-white/10"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Overlay & Bottom Sheet --}}
    <nav id="mobile-navbar" class="hidden z-50 fixed inset-0 h-dvh overflow-y-auto">
        {{-- Bottom Sheet Panel --}}
        <div id="mobile-top-navbar"
            class="fixed bottom-0 left-0 right-0 z-50 max-h-[85vh] overflow-y-auto rounded-t-3xl border-t border-newprimary bg-black/95 backdrop-blur-lg">
            <div class="flex flex-col w-full gap-2 py-5 px-4">
                {{-- Drag Handle --}}
                <div class="flex justify-center mb-2">
                    <div class="w-10 h-1 rounded-full bg-white/30"></div>
                </div>

                {{-- Logo inside Menu --}}
                <div class="flex justify-center mb-3">
                    <img src="{{ asset('assets/logo/eduall-white-2026.png') }}" width="120" height="auto"
                        alt="{{ $website_settings->alt_secondary_logo }}"
                        title="{{ $website_settings->alt_secondary_logo }}" loading="lazy">
                </div>

                {{-- Navigation Items --}}
                <ul class="w-full flex flex-col gap-1">
                    @foreach (__('pages/navbar') as $itemKey => $item)
                        <li class="navbar-item-mobile relative rounded-xl programs-menu w-full">
                            <div
                                class="flex items-center justify-between px-3 py-2 hover:bg-white/5 rounded-xl transition-colors">
                                <a href="{{ $item['link'] == '#' ? '#' : url(app()->getLocale() . '/' . $item['link']) }}"
                                    class="text-white/90 text-base font-normal block w-full">
                                    {{ $item['title'] }}
                                </a>

                                {{-- Chevron for items with submenu --}}
                                @if (isset($item['submenu']))
                                    <div class="mobile-dropdown-menu cursor-pointer p-1">
                                        <i
                                            class="fa-solid fa-chevron-down text-white/60 text-xs transition-all duration-300"></i>
                                    </div>
                                @endif
                            </div>

                            {{-- Submenu (Mobile) --}}
                            @if (isset($item['submenu']))
                                <ul
                                    class="mobile-dropdown-menu-content hidden programs-menu ml-4 pl-3 border-l border-white/10">
                                    <div class="flex flex-col gap-1 py-1">
                                        @foreach ($item['submenu'] as $submenu)
                                            <li class="w-full">
                                                <a href="{{ isValidUrl($submenu['link']) ? $submenu['link'] : url(app()->getLocale() . '/' . $submenu['link']) }}"
                                                    {{ isValidUrl($submenu['link']) ? 'target="_blank" rel="noopener noreferrer"' : '' }}
                                                    class="text-white/70 text-sm py-2 px-4 block rounded-lg hover:bg-white/5 hover:text-white transition-colors">
                                                    <i class="fa fa-arrow-right mr-2 text-newprimary"></i>
                                                    {{ $submenu['title'] }}
                                                </a>
                                            </li>
                                        @endforeach

                                        {{-- Extra "Mentee Project Showcase" link under Resources --}}
                                        @if ($item['title'] == 'Resources')
                                            <li class="w-full">
                                                <a href="https://project-showcase.edu-all.com" target="_blank"
                                                    class="text-white/70 text-sm py-2 px-4 block rounded-lg hover:bg-white/5 hover:text-white transition-colors">
                                                    <i class="fa fa-arrow-right mr-2 text-newprimary"></i> Mentee
                                                    Project Showcase
                                                </a>
                                            </li>
                                        @endif
                                    </div>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>

                {{-- Social Icons --}}
                <div class="flex items-center justify-center gap-6 mt-4 pt-4 border-t border-white/10">
                    <a href="#" class="text-white/60 hover:text-white transition-colors text-xl">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white/60 hover:text-white transition-colors text-xl">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Overlay --}}
        <div id="mobile-navbar-overlay"
            class="w-full h-full fixed inset-0 bg-black/60 z-40 transition-all duration-300"></div>
    </nav>
</header>


{{-- ==================== WHATSAPP BUTTON ==================== --}}
<div class="fixed lg:bottom-9 bottom-[15px] lg:right-5 right-5 z-[45] transition-all duration-1000" id="wa_button">
    <div class="relative group cursor-pointer">

        <div
            class="absolute md:right-[35px] right-[15px] md:bottom-[7px] bottom-[3px] bg-gradient-to-b from-[#25CF43] to-[#0F8224] group-hover:from-white group-hover:to-gray-100 group-hover:text-[#25CF43]
            py-2 pl-2 pr-5 md:flex justify-center items-center
            text-white w-[150px] text-[14px] shadow rounded-xl font-bold border border-[#25CF43]
            ">
            Consult now
        </div>

        <div
            class="absolute right-5 bottom-[1em] text-white
            bg-[#25CF43] group-hover:bg-white group-hover:text-[#25CF43]
            rounded-xl md:w-[50px] md:h-[50px] w-[40px] h-[40px]
            flex justify-center items-center shadow border border-[#25CF43] 
            ">
            <i class="fa-brands fa-whatsapp text-[25px]"></i>
        </div>

    </div>
</div>

{{-- WhatsApp Form Popup --}}
<div id="whatsappForm"
    class="fixed -bottom-[50rem] right-5 md:w-[400px] w-[350px] z-[999999] rounded-2xl shadow-xl transition-all ease-in-out duration-1000">
    <div class="bg-[#008069] text-white flex rounded-t-2xl p-4 gap-5 items-center">
        <i class="fas fa-user text-xl p-2 bg-white text-black rounded-full"></i>
        <div>
            <h2 class="text-white text-lg leading-5">
                {{ __('pages/home.wa.title') }}
            </h2>
            <h3 class="text-white text-base mt-2">
                {{ __('pages/home.wa.sub_title') }}
            </h3>
        </div>
    </div>
    <div class="bg-white rounded-b-2xl p-4">
        @if (str_contains(request()->url(), 'careers') || str_contains(request()->url(), 'partnership'))
        <a href="https://bit.ly/partnerwithus-website" @else <a href="https://bit.ly/eduall-contactus"
                @endif
                target="_blank"
                class="bg-[#25D366]/50 shadow-lg rounded-xl p-3 flex items-center justify-between hover:bg-[#25D366] transition-all ease-in-out duration-300">
                <h4 class="text-base">{{ __('pages/home.wa.message') }}</h4 class="text-xl">

                <i class="fas fa-paper-plane text-2xl"></i>
            </a>
            <p class="text-[10px] text-gray-500 mt-2 text-end">
                {{ date('Y/m/d') }}
            </p>
    </div>
</div>

<script>
    // =====================================================
    // Scroll: adjust navbar & WA button position
    // =====================================================
    $(window).scroll(function() {
        const scrollTop = $(window).scrollTop();
        const threshold = $(window).height() * 0.2;

        if (scrollTop > threshold) {
            $('#top-navbar').addClass('shadow-xl');
            $('#navbar-top-bar').addClass('bg-newprimary/90 shadow-xl');
            $('#navbar-cta').removeClass('bg-white text-black').addClass('bg-white/10 text-white');
            $('#navbar-divider').removeClass('border-white').addClass('border-white/30');
            $('#navbar-nav').addClass('bg-newprimary/90');
            $('#navbar-socials').removeClass('text-white').addClass('text-white');
            $('.navbar-link').removeClass('text-white').addClass('text-white');
            $('.navbar-icon').removeClass('text-white').addClass('text-white');
        } else {
            $('#top-navbar').removeClass('shadow-xl');
            $('#navbar-top-bar').removeClass('bg-newprimary/90 shadow-xl');
            $('#navbar-cta').removeClass('bg-white/10 text-white').addClass('bg-white text-black');
            $('#navbar-divider').removeClass('border-white/30').addClass('border-white');
            $('#navbar-nav').removeClass('bg-newprimary/90');
            $('#navbar-socials').removeClass('text-white').addClass('text-white');
            $('.navbar-link').removeClass('text-white').addClass('text-white');
            $('.navbar-icon').removeClass('text-white').addClass('text-white');
        }

        if (scrollTop > $(window).height() / 10) {
            $('#wa_button').removeClass('lg:bottom-9').addClass('lg:bottom-5');
        } else {
            $('#wa_button').addClass('lg:bottom-9').removeClass('lg:bottom-5');
        }
    });

    $(document).ready(function() {
        // =====================================================
        // Highlight active navbar item based on current URL
        // =====================================================
        var currentUrl = window.location.href;
        const parsedUrl = new URL(currentUrl);

        const segments = parsedUrl.pathname.split('/').filter(segment => segment);
        const segmentsUrl = parsedUrl.origin + '/' + segments[0] + '/' + segments[1]

        var activeLink = $('.navbar-item').first();

        $('.navbar-item').each(function() {
            if (currentUrl == $(this).find('a').attr('href') || segmentsUrl == $(this).find('a').attr(
                    'href')) {
                activeLink = $(this);
                activeLink.addClass('active-navbar').find('a').addClass('font-semibold underline');
                activeLink.children('a').addClass('font-semibold');
            }
        });

        // =====================================================
        // Desktop: dropdown on hover
        // =====================================================
        $('.programs-menu').hover(
            function() {
                $(this).children('a').addClass('active-navbar');
                $(this).find('.dropdown-menu').stop(true, true).slideDown(200).fadeIn(200);
            },
            function() {
                $(this).children('a').removeClass('active-navbar');
                $(this).find('.dropdown-menu').stop(true, true).slideUp(200).fadeOut(200);
            }
        );

        // =====================================================
        // Mobile: toggle submenu on chevron click
        // =====================================================
        $(document).ready(function() {
            $('.mobile-dropdown-menu').click(function() {
                var $submenu = $(this).parent().next('.mobile-dropdown-menu-content');
                $('.mobile-dropdown-menu-content').not($submenu).slideUp(300);
                $submenu.slideToggle(300);
                $(this).find('i').toggleClass('rotate-180');
            });
        });

        // =====================================================
        // Mobile: open/close menu
        // =====================================================
        $('#mobile-menu-toggle').click(function() {
            const isOpen = $('#mobile-navbar').is(':visible');
            if (!isOpen) {
                $('#mobile-navbar').stop(true, true).fadeIn(300);
                $('body').css('overflow', 'hidden');
                $('#whatsappForm').addClass('-bottom-[50rem]').removeClass('bottom-24');
            } else {
                $('#mobile-navbar').stop(true, true).fadeOut(300);
                $('body').css('overflow', 'auto');
            }
            $(this).attr('aria-expanded', !isOpen);
        });

        // Close mobile menu when clicking overlay
        $('#mobile-navbar-overlay').click(function() {
            $('#mobile-navbar').stop(true, true).fadeOut(300);
            $('#mobile-menu-toggle').attr('aria-expanded', 'false');
            $('body').css('overflow', 'auto');
        });

        // Prevent clicks inside menu panel from closing it
        $('#mobile-top-navbar').click(function(e) {
            e.stopPropagation();
        });

        // =====================================================
        // WhatsApp: toggle form popup
        // =====================================================
        $('#wa_button').click(function() {
            $('#mobile-navbar').stop(true, true).fadeOut(300);
            $('body').css('overflow', 'auto');

            if ($('#whatsappForm.bottom-24').length == 0) {
                $('#whatsappForm').removeClass('-bottom-[50rem]').addClass('bottom-24');
            } else {
                $('#whatsappForm').addClass('-bottom-[50rem]').removeClass('bottom-24');
            }
        });
    });

    // =====================================================
    // Helper: toggle newsletter popup form
    // =====================================================
    function popupForm(params) {
        var newsForm = document.querySelector("#newsForm");
        var newsButton = document.querySelector("#newsButton");

        if (params == "open") {
            newsButton.classList.remove('lg:bottom-8', 'bottom-[15px]');
            newsForm.classList.remove('-bottom-[500%]');
            newsButton.classList.add('-bottom-[500%]');
            newsForm.classList.add('lg:bottom-8', 'bottom-[15px]');
        } else {
            newsForm.classList.remove('lg:bottom-8', 'bottom-[15px]');
            newsButton.classList.remove('-bottom-[500%]');
            newsForm.classList.add('-bottom-[500%]');
            newsButton.classList.add('lg:bottom-8', 'bottom-[15px]');
        }
    }
</script>
