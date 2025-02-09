<div id="sub-navbar"
    class=" bg-gradient-to-b from-black/80 hover:from-black to-transparent fixed left-0 right-0 top-0 pt-10 z-50 transition-all duration-700 ease-in-out">
    <nav class="px-4 lg:px-10 xl:px-12 max-w-screen-2xl mx-auto overflow-hidden">
        <div class="flex items-center flex-col lg:flex-row">
            <div
                class="lg:order-1 order-3 w-full xl:w-4/12 lg:w-4/12 items-center flex nav-title transition-all duration-500 transform -translate-y-[600%] ">
                <div class="flex items-center justify-center lg:justify-start mx-auto">
                    <h3 class="text-white font-bold text-xl uppercase text-center">{{ $title }}</h3>
                </div>
                @if ($menu)
                    <div class="h-[1px] bg-[#DADADA] ml-4 hidden lg:block flex-grow"></div>
                @endif
            </div>
            
            @if ($menu)
                <div
                    class="lg:order-2 order-2 w-full xl:w-7/12 lg:w-8/12 container mx-auto lg:px-4 lg:py-5 overflow-x-auto lg:overflow-visible">
                    <div class="tags-slider-container flex relative w-full px-10">
                        <div class="outer w-full overflow-x-auto scrollbar-hidden scroll-smooth" id="scroll-container">
                            <div class="tags-track w-max">
                                @foreach ($menu as $item)
                                    <a href="{{ url(app()->getLocale()) . $item['url'] }}"
                                        class=" {{ $active == $item['title'] ? 'text-black bg-white' : 'text-white bg-white/30' }} md:text-sm text-[10px] rounded-full text-center py-2 px-6 font-semibold uppercase whitespace-nowrap hover:bg-white hover:text-black transition-all ease-in-out duration-300 inline-block tag md:mx-1 mx-0">
                                        {{ $item['title'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <button id="btn-prev"
                            class="absolute left-0 px-3 md:py-1 py-[0.45rem] md:mt-[2px] mt-[0px] bg-white/60 rounded-full md:text-base text-[10px]">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button id="btn-next"
                            class="absolute right-0 px-3 md:py-1 py-[0.45rem] md:mt-[2px] mt-[0px] bg-white/60 rounded-full md:text-base text-[10px]">
                            <i class="fas fa-chevron-right "></i>
                        </button>
                    </div>
                </div>
            @else   
                <div
                    class="lg:order-2 order-2 w-full xl:w-7/12 lg:w-8/12 container mx-auto lg:py-12 overflow-x-auto lg:overflow-visible nav-title  transition-all duration-500 transform -translate-y-[600%]">
                    <div class="h-[1px] bg-[#DADADA] hidden lg:block flex-grow"></div> 
                </div>
            @endif

            <div
                class="lg:order-3 order-1 w-full xl:w-4/12 lg:w-4/12 items-center flex nav-title transition-all duration-500 transform -translate-y-[600%]">
                @if ($menu)
                    <div class="h-[1px] bg-[#DADADA] mr-4 hidden lg:block flex-grow"></div>
                @endif
                <div class="flex items-center justify-center lg:justify-end h-full mx-auto">
                    <img src={{ asset('uploaded_files/' . 'website-settings/' . $website_settings->website_secondary_logo) }}
                        width="100" alt="{{ $website_settings->alt_secondary_logo }}" loading="lazy">
                </div>
            </div>
        </div>
    </nav>

    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() > $(window).height() / 10) {
                $('.nav-title').removeClass('-translate-y-[550%]').addClass('translate-y-0');
                $('#sub-navbar').addClass('md:pt-0 pt-5').removeClass('pt-10');
            } else {
                $('.nav-title').addClass('-translate-y-[550%]').removeClass('translate-y-0');
                $('#sub-navbar').removeClass('md:pt-0 pt-5').addClass('pt-10');
            }
        });
    </script>

    <script>
        const scrollContainer = document.getElementById('scroll-container');
        const prevButton = document.getElementById('btn-prev');
        const nextButton = document.getElementById('btn-next');

        let isMouseDown = false;
        let startX;
        let scrollLeft;

        // Scroll previous (by 300px)
        prevButton.addEventListener('click', () => {
            scrollContainer.scrollLeft -= 300; // Adjust the scroll distance as needed
            toggleButtonsVisibility()
        });

        // Scroll next (by 300px)
        nextButton.addEventListener('click', () => {
            scrollContainer.scrollLeft += 300; // Adjust the scroll distance as needed
            toggleButtonsVisibility()
        });

        function toggleButtonsVisibility() {
            // Hide prev button when at the far left
            if (scrollContainer.scrollLeft === 0) {
                prevButton.classList.add('hidden');
            } else {
                prevButton.classList.remove('hidden');
            }

            // Hide next button when at the far right
            if (scrollContainer.clientWidth === scrollContainer.scrollWidth) {
                nextButton.classList.add('hidden');
            } else {
                nextButton.classList.remove('hidden');
            }
        }

        scrollContainer.addEventListener('scroll', () => {
            toggleButtonsVisibility()
            if (scrollContainer.scrollLeft + scrollContainer.clientWidth + 10 >= scrollContainer.scrollWidth) {
                nextButton.classList.add('hidden'); // Hide next button when at the far right
            } else {
                nextButton.classList.remove('hidden'); // Show next button when not at the far right
            }
        });

        toggleButtonsVisibility()
    </script>
</div>
