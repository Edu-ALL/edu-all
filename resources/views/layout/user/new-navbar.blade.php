<header class="fixed left-1/2 -translate-x-1/2 bottom-8 z-50 transition-all hidden md:block">
    <nav class="bg-black md:rounded-full rounded-3xl shadow-lg md:py-1">
        <div class="container mx-auto px-1">
            <div class="flex justify-between items-center w-full">
                <!-- Navbar Items -->
                <ul id="navbar-items"
                    class="flex-col md:flex-row whitespace-nowrap justify-center gap-1 hidden md:w-auto md:flex md:visible md:relative md:gap-1 transition-all">
                    @foreach (__('pages/navbar') as $itemKey => $item)
                        <li class="navbar-item relative group rounded-full transition-all font-light programs-menu">
                            <a href={{ $item['link'] == '#' ? '#' : url(app()->getLocale() . '/' . $item['link']) }}
                                class="text-white text-base py-2 px-6 block rounded-full">
                                {{ $item['title'] }}
                            </a>

                            {{-- Check if submenu exists --}}
                            @if (isset($item['submenu']))
                                <ul
                                    class="dropdown-menu programs-menu absolute left-1/2 transform -translate-x-1/2 md:bottom-full hidden md:flex-col z-10">
                                    <div
                                        class="flex-col items-center justify-center mb-4 bg-black rounded-3xl shadow-lg pt-2 pb-2 px-2 text-white gap-1">
                                        @foreach ($item['submenu'] as $submenu)
                                            <li class="hover:bg-newprimary text-white rounded-full w-full">
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
        <div class="container mx-auto px-1 flex flex-col justify-end fixed bottom-8 z-50 max-w-xs left-0 right-0">
            <div class="flex flex-col justify-between items-center w-full gap-4 py-4 bg-black rounded-3xl px-4">
                <!-- Navbar Items -->
                <ul
                    class="w-full flex flex-col md:flex-row whitespace-nowrap justify-center gap-1 md:w-auto md:flex md:visible md:relative md:gap-1 transition-all">
                    @foreach (__('pages/navbar') as $itemKey => $item)
                        <li
                            class="navbar-item-mobile relative group rounded-full transitionall font-light programs-menu w-full">
                            <div class="flex items-center justify-between">
                                <a href="{{ $item['link'] == '#' ? '#' : url(app()->getLocale() . $item['link']) }}"
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
                                                    {{ $submenu['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="mobile-navbar-overlay"
            class="w-full h-full fixed inset-0 bg-black opacity-75 z-40 md:hidden transition-all duration-500"></div>
    </nav>
</header>

<script>
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
                activeLink.addClass('active-navbar');
                activeLink.children('a').addClass('font-semibold')
            }
        });

        $('.navbar-item').hover(
            function() {
                $('.navbar-item a.active-navbar').removeClass('active-navbar');
                activeLink.removeClass('active-navbar');
                $(this).children('a').addClass('active-navbar');
            },
            function() {
                $(this).children('a').removeClass('active-navbar');

                if (currentUrl == activeLink.find('a').attr('href') || segmentsUrl == activeLink.find('a')
                    .attr('href')) {
                    activeLink.addClass('active-navbar');
                }
            }
        );

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
