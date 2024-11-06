<div id="sub-navbar" class=" bg-gradient-to-b from-black/80 hover:from-black to-transparent fixed left-0 right-0 top-0 pt-10 z-50 transition-all duration-700 ease-in-out">
    <nav class="px-4 lg:px-10 xl:px-12 max-w-screen-2xl mx-auto overflow-hidden">
        <div class="flex items-center flex-col lg:flex-row">
            <div
                class="lg:order-1 order-3 w-full xl:w-4/12 lg:w-4/12 items-center flex nav-title transition-all duration-500 transform -translate-y-[600%] ">
                <div class="flex items-center justify-center lg:justify-start mx-auto">
                    <h3 class="text-white font-bold text-xl uppercase text-center">{{ $title }}</h3>
                </div>
                <div class="h-[1px] bg-[#DADADA] ml-4 hidden lg:block flex-grow"></div>
            </div>
            <div
                class="lg:order-2 order-2 w-full xl:w-7/12 lg:w-8/12 container mx-auto lg:px-4 lg:py-5 overflow-x-auto lg:overflow-visible">
                <ul class="flex items-center md:justify-center gap-2 py-4">
                    @foreach ($menu as $item)
                        <li>
                            <a href="{{ url(app()->getLocale()) . $item['url'] }}"
                                class=" {{ $active == $item['title'] ? 'text-black bg-white' : 'text-white bg-white/30' }} text-sm rounded-full px-6 py-2 font-semibold uppercase whitespace-nowrap hover:bg-white hover:text-black transition-all ease-in-out duration-300">
                                {{ Str::limit($item['title'], $stringLimit ?? 15) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div
                class="lg:order-3 order-1 w-full xl:w-4/12 lg:w-4/12 items-center flex nav-title transition-all duration-500 transform -translate-y-[600%]">
                <div class="h-[1px] bg-[#DADADA] mr-4 hidden lg:block flex-grow"></div>
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

</div>
