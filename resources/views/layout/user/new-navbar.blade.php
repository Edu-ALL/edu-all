<header class="fixed left-1/2 -translate-x-1/2 bottom-16 z-50 transition-all">
    <nav class="bg-white/75 rounded-full shadow-lg py-2">
        <div class="w-6/12 container mx-auto px-1">
            <ul class="flex whitespace-nowrap justify-center relative">
                <!-- Animated background -->
                <div id="active-indicator"
                    class="absolute bg-newprimary py-4 -translate-y-1 transition-all duration-300 ease-in-out rounded-full"></div>

                    <li>
                    <a href="{{ url(app()->getLocale()) }}"
                        class="navbar-item text-black text-base rounded-full px-6 py-2 font-light">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale(), 'programs') }}"
                        class="navbar-item text-black text-base rounded-full px-6 py-2 font-light">
                        Programs
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale(), 'about') }}"
                        class="navbar-item text-black text-base rounded-full px-6 py-2 font-light">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale(), 'blog') }}"
                        class="navbar-item text-black text-base rounded-full px-6 py-2 font-light">
                        EduJournal
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/resources/success-stories"
                        class="navbar-item text-black text-base rounded-full px-6 py-2 font-light">
                        Resources
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact_us', app()->getLocale()) }}"
                        class="navbar-item text-black text-base rounded-full px-6 py-2 font-light">
                        Contacts
                    </a>
                </li>
            </ul>

            {{-- <ul class="flex whitespace-nowrap justify-center">
                <li>
                    <a href="{{ url(app()->getLocale()) }}"
                        class="active-navbar text-black text-base rounded-full px-6 py-2 font-light">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/undergraduate-program"
                        class="text-black  text-base rounded-full px-6 py-2 font-light">
                        Programs
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/graduate-program"
                        class="text-black  text-base rounded-full px-6 py-2 font-light">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/university-transfer-program"
                        class="text-black  text-base rounded-full px-6 py-2 font-light">
                        EduJournal
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/university-transfer-program"
                        class="text-black  text-base rounded-full px-6 py-2 font-light">
                        Resources
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/university-transfer-program"
                        class="text-black  text-base rounded-full px-6 py-2 font-light">
                        Contacts
                    </a>
                </li>
            </ul> --}}
        </div>
    </nav>
</header>

<script>
   $(document).ready(function () {
    var $activeItem = $('.navbar-item').first();  // Set the initial active item
    var $indicator = $('#active-indicator');

    $('.navbar-item').each(function() {
        if ($(this).attr('href') === window.location.href) {
            $(this).addClass('active-navbar');
        }
    });

    function moveIndicator($item) {
        var itemPos = $item.position();
        $indicator.css({
            left: itemPos.left,
            width: $item.outerWidth()
        });
    }

    // Initialize the position of the indicator
    moveIndicator($activeItem);

    // On hover over a navbar item
    $('.navbar-item').hover(
        function () {
            // Move the indicator to the hovered item
            moveIndicator($(this));
        },
        function () {
            // Return the indicator to the active item when mouse leaves
            moveIndicator($('.navbar-item.active-navbar'));
        }
    );

    // On clicking a navbar item
    $('.navbar-item').on('click', function () {
        $('.navbar-item').removeClass('active-navbar'); // Remove active class from all items
        $(this).addClass('active-navbar');              // Add active class to the clicked item
    });

    // Optional: On window resize, update the indicator position
    $(window).on('resize', function () {
        moveIndicator($('.navbar-item.active-navbar'));  // Reposition indicator on resize
    });
});
</script>
{{--
<script>
    window.addEventListener("scroll", function() {
        var navbar = document.querySelector("header");
        if (window.scrollY > 0) {
            navbar.classList.remove("shadow-sm");
            navbar.classList.add("shadow-lg");
        } else {
            navbar.classList.remove("shadow-lg");
            navbar.classList.add("shadow-sm");
        }
    });

    const openBtn = document.querySelector("#open-nav"),
        closeBtn = document.querySelector("#close-nav"),
        navContent = document.querySelector("#nav-content");

    openBtn.addEventListener('click', () => {
        navContent.classList.remove('translate-x-full');
        navContent.classList.add('translate-x-0');
    })

    closeBtn.addEventListener('click', () => {
        navContent.classList.remove('translate-x-0');
        navContent.classList.add('translate-x-full');
    })

    const openChildBtns = document.querySelectorAll(".open-nav-child"),
        navChildContents = document.querySelectorAll("#content-nav-child"),
        childBtnIcons = document.querySelectorAll("#open-nav-child-btn");

    var isSmallDevice = window.matchMedia("(max-width: 640px)").matches


    document.addEventListener('DOMContentLoaded', () => {
        openChildBtns.forEach((element, it) => {
            openChildBtns[it].addEventListener('click', () => {
                navChildContents[it].classList.toggle('hidden');
            })
        });
    })
</script> --}}
