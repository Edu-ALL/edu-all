<header
    class="fixed left-1/2 -translate-x-1/2 bottom-12 z-50 transition-all hidden md:block duration-[600ms] ease-in-out"
    id="bottom-navbar">
    <nav class="bg-black/80 md:rounded-full rounded-3xl shadow-lg md:py-1 transition-all duration-500 ease-in-out">
        <div class="container mx-auto px-1">
            <div class="flex justify-between items-center w-full">
                <!-- Navbar Items -->
                <ul id="navbar-items"
                    class="flex-col md:flex-row whitespace-nowrap justify-center gap-1 hidden md:w-auto md:flex md:visible md:relative md:gap-1 transition-all">
                    @foreach (__('pages/navbar') as $itemKey => $item)
                        <li
                            class="navbar-item relative group rounded-full font-light programs-menu transition-all duration-100 ease-in-out hover:bg-newprimary">
                            <a href={{ $item['link'] == '#' ? '#' : url(app()->getLocale() . '/' . $item['link']) }}
                                class="text-white text-base py-2 px-6 block rounded-full">
                                {{ $item['title'] }}
                            </a>

                            {{-- Check if submenu exists --}}

                            @if (isset($item['submenu']))
                                <ul
                                    class="dropdown-menu programs-menu absolute left-1/2 transform -translate-x-1/2 md:bottom-full hidden md:flex-col z-10">
                                    <div
                                        class="flex-col items-center justify-center mb-2 bg-black/80 rounded-3xl shadow-lg pt-2 pb-2 px-2 text-white gap-1">
                                        @foreach ($item['submenu'] as $submenu)
                                            <li
                                                class="hover:bg-newprimary text-white rounded-full w-full {{ url(app()->getLocale() . '/' . $submenu['link']) == URL::current() ? 'active-sub-navbar border-[#727272] border' : '' }}">
                                                <a href="{{ url(app()->getLocale() . '/' . $submenu['link']) }}"
                                                    class="text-white text-base py-2 px-6 block text-center rounded-full">
                                                    {{ $submenu['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    @if (!str_contains(request()->url(), 'partnership-careers'))
                        <li class="bg-[#1f9034]/80 hover:bg-[#1f9034] text-white rounded-l-full w-full">
                            <a href="https://api.whatsapp.com/send?phone=62{{ $website_settings->phone_number_wa }}&text=Hello%20ALL-in,%20I%20am%0AName%20:%0AGrade%20:%0ASchool%20:%0ADestination%20Country%20:%0AMajor%20:%0A%0A*I*%20*want*%20*to*%20*ask*%20*about...*"
                                target="_blank" class="pl-[15px] pr-[5px] text-center flex items-center h-full">
                                <i class="fa-brands fa-whatsapp text-[30px]"></i>
                            </a>
                        </li>
                    @endif
                    <li class="bg-red/80 hover:bg-red text-white w-full rounded-r-full">
                        <button onclick="popupForm('open')" id="newsButton"
                            class="text-white text-base py-2 px-3 block text-center">
                            <i class="fa fa-newspaper mr-2"></i>
                            Get Updates
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<header class="transition-all md:hidden">
    <!-- Mobile Menu Button -->
    <div class="fixed bottom-8 transform -translate-x-1/2 left-1/2 bg-black rounded-xl z-50">
        <span id="mobile-menu-toggle"
            class="md:hidden flex items-center justify-center text-white text-2xl focus:outline-none p-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg> </span>
    </div>

    <nav id="mobile-navbar" class="hidden z-50 fixed inset-0 h-screen md:rounded-full shadow-lg pb-12 md:py-1 w-full">
        <div class="container mx-auto px-1 flex flex-col justify-end fixed bottom-8 z-50 max-w-[22rem] left-0 right-0"
            id="mobile-bottom-navbar">
            <div class="flex flex-col justify-between items-center w-full gap-4 py-4 bg-black/70 rounded-3xl px-4 border border-newprimary">
                <!-- Navbar Items -->
                <ul
                    class="w-full flex flex-col md:flex-row whitespace-nowrap justify-center gap-1 md:w-auto md:flex md:visible md:relative md:gap-1 transition-all">
                    @foreach (__('pages/navbar') as $itemKey => $item)
                        <li
                            class="navbar-item-mobile relative group rounded-full transitionall font-light programs-menu w-full">
                            <div class="flex items-center justify-between">
                                <a href="{{ $item['link'] == '#' ? '#' : url(app()->getLocale() . '/' . $item['link']) }}"
                                    class="text-white text-base py-2 px-6 block rounded-full">
                                    {{ $item['title'] }}
                                </a>

                                @if (isset($item['submenu']))
                                    <div class="mr-4 mobile-dropdown-menu">
                                        <i class="fa-solid fa-chevron-down text-white transition-all duration-300"></i>
                                    </div>
                                @endif

                            </div>

                            {{-- Check if submenu exists --}}
                            @if (isset($item['submenu']))
                                <ul
                                    class="mobile-dropdown-menu-content hidden programs-menu md:bottom-full md:flex-col z-10 ml-4">
                                    <div
                                        class="flex-col items-center justify-center bg-black rounded-3xl shadow-lg pt-2 pb-2 px-2 text-white gap-1">
                                        @foreach ($item['submenu'] as $submenu)
                                            <li class="text-white w-full">
                                                <a href="{{ url(app()->getLocale() . '/' . ltrim($submenu['link'], '/')) }}"
                                                    class="text-white text-sm py-2 px-6 block rounded-full">
                                                   <i class="fa fa-arrow-right mr-2"></i> {{ $submenu['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    <li
                        class="navbar-item-mobile relative group rounded-full transitionall font-light programs-menu w-full">
                        <div class="flex items-center justify-center px-6">
                            <a href="https://api.whatsapp.com/send?phone=62{{ $website_settings->phone_number_wa }}&text=Hello%20ALL-in,%20I%20am%0AName%20:%0AGrade%20:%0ASchool%20:%0ADestination%20Country%20:%0AMajor%20:%0A%0A*I*%20*want*%20*to*%20*ask*%20*about...*"
                                target="_blank"
                                class="text-white text-base py-2 w-full block rounded-md bg-[#1f9034] text-center">
                                <i class="fa-brands fa-whatsapp mr-2"></i> Chat Now!
                            </a>
                        </div>
                    </li>
                    <li
                        class="navbar-item-mobile relative group rounded-full transitionall font-light programs-menu w-full">
                        <div class="flex items-center justify-center w-full px-6">
                            <button onclick="popupForm('open')" id="newsButton"
                                class="text-white text-base py-2 w-full block text-center bg-red rounded-md">
                                <i class="fa fa-newspaper mr-2"></i>
                                Get Updates
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="mobile-navbar-overlay"
            class="w-full h-full fixed inset-0 bg-black opacity-75 z-40 md:hidden transition-all duration-500"></div>
    </nav>
</header>

<script>
    $(window).scroll(function() {
        if ($(window).scrollTop() > $(window).height() / 10) {
            $('#bottom-navbar').removeClass('bottom-12').addClass('bottom-5');
            $('#bottom-navbar nav').removeClass('bg-black/80').addClass('bg-newprimary/80');
            $('#navbar-items li').removeClass('hover:bg-newprimary').addClass('hover:bg-black')
            $('#navbar-items li a').removeClass('bg-black/80').removeClass('bg-newprimary/80')
            $('.active-navbar').removeClass('bg-newprimary/80').addClass('bg-black/80');
            $('.active-sub-navbar').removeClass('bg-newprimary/80').addClass('bg-black/80');
            $('.dropdown-menu div').removeClass('bg-black/80').addClass('bg-newprimary/80')
            $('#mobile-bottom-navbar').removeClass('bottom-8').addClass('bottom-2');
        } else {
            $('#bottom-navbar').addClass('bottom-12').removeClass('bottom-5');
            $('#bottom-navbar nav').addClass('bg-black/80').removeClass('bg-newprimary/80');
            $('#navbar-items li').addClass('hover:bg-newprimary').removeClass('hover:bg-black')
            $('#navbar-items li a').removeClass('bg-newprimary/80').removeClass('bg-black/80')
            $('.dropdown-menu div').addClass('bg-black/80').removeClass('bg-newprimary/80')
            $('.active-sub-navbar').addClass('bg-newprimary/80').removeClass('bg-black/80');
            $('.active-navbar').addClass('bg-newprimary/80').removeClass('bg-black/80');
            $('#mobile-bottom-navbar').addClass('bottom-8').removeClass('bottom-2');
        }
    });

    $(document).ready(function() {
        // Get the current URL
        var currentUrl = window.location.href;
        const parsedUrl = new URL(currentUrl);

        // Get the path and split it into segments
        const segments = parsedUrl.pathname.split('/').filter(segment => segment);
        const segmentsUrl = parsedUrl.origin + '/' + segments[0] + '/' + segments[1]

        // Cache the home link element
        var activeLink = $('.navbar-item').first();

        $('.navbar-item').each(function() {
            if (currentUrl == $(this).find('a').attr('href') || segmentsUrl == $(this).find('a').attr(
                    'href')) {
                activeLink = $(this);
                activeLink.addClass('active-navbar').addClass('bg-newprimary');
                activeLink.children('a').addClass('font-semibold')
            }
        });

        // Handle hover for the "Programs" dropdown menu
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

        $(document).ready(function() {
            // Toggle submenu on chevron icon click
            $('.mobile-dropdown-menu').click(function() {
                // Find the closest submenu to the clicked chevron
                var $submenu = $(this).parent().next('.mobile-dropdown-menu-content');
                // Hide other submenus
                $('.mobile-dropdown-menu-content').not($submenu).slideUp(300);
                // Toggle the submenu visibility
                $submenu.slideToggle(300);
                // Rotate the chevron icon for visual feedback
                $(this).find('i').toggleClass('rotate-180');
            });
        });

        // Mobile Menu Toggle
        $('#mobile-menu-toggle').click(function() {
            $('#mobile-navbar').stop(true, true).fadeIn(300);
            $('body').css('overflow', 'hidden');
        });

        $('#mobile-navbar-overlay').click(function() {
            $('#mobile-navbar').stop(true, true).fadeOut(300);
            $('body').css('overflow', 'auto');
        })
    });
</script>
