<nav class="bg-gradient-to-b from-black to-transparent fixed left-0 right-0 top-0 z-50 new-main-container overflow-hidden">
    <div class="flex items-center">
        <div class="w-4/12 items-center flex nav-title transition-all duration-500 transform -translate-y-[300%]">
            <div class="flex items-center justify-start h-full w-full whitespace-nowrap">
                <h3 class="text-white font-bold text-xl uppercase">Admission Mentoring</h3>
            </div>
            <div class="h-[1px] w-full bg-[#DADADA] ml-4"></div>
        </div>
        <div class="w-6/12 container mx-auto px-4 py-12">
            <ul class="flex justify-center gap-2">
                <li>
                    <a
                        href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/"class=" {{ $active == 'general' ? 'text-black bg-white' : 'text-white bg-white/30' }} text-base rounded-full px-6 py-2 font-semibold">
                        General
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/undergraduate-program"
                        class=" {{ $active == 'undergraduate' ? 'text-black bg-white' : 'text-white bg-white/30' }} text-base rounded-full px-6 py-2 font-semibold">
                        Undergraduate
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/graduate-program"
                        class=" {{ $active == 'graduate' ? 'text-black bg-white' : 'text-white bg-white/30' }} text-base rounded-full px-6 py-2 font-semibold">
                        Graduate
                    </a>
                </li>
                <li>
                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/university-transfer-program"
                        class=" {{ $active == 'transfer' ? 'text-black bg-white' : 'text-white bg-white/30' }} text-base rounded-full px-6 py-2 font-semibold">
                        Transfer
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-4/12 items-center flex nav-title transition-all duration-500 transform -translate-y-[300%]">
            <div class="h-[1px] w-full bg-[#DADADA] mr-4"></div>
            <div class="flex items-center justify-start h-full w-full whitespace-nowrap">
                <img src={{ asset('uploaded_files/'.'website-settings/'. $website_settings->website_secondary_logo) }} width="80" alt="{{ $website_settings->alt_secondary_logo }}" loading="lazy">
            </div>
        </div>
    </div>
</nav>

<script>
    $(window).scroll(function() {
        if ($(window).scrollTop() > $(window).height() / 2) {
            $('.nav-title').removeClass('-translate-y-[300%]').addClass('translate-y-0');
        } else {
            $('.nav-title').addClass('-translate-y-[300%]').removeClass('translate-y-0');
        }
    });
</script>

