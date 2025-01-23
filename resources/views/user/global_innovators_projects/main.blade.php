@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/global_innovators_projects.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/global_innovators_projects.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/global_innovators_projects.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        [
            'title' => __('pages/navbar.programs.submenu.0.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.0.link'),
        ],
        [
            'title' => __('pages/navbar.programs.submenu.1.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.1.link'),
        ],
        [
            'title' => __('pages/navbar.programs.submenu.2.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.2.link'),
        ],
        [
            'title' => __('pages/navbar.programs.submenu.3.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.3.link'),
        ],
    ]" active="Global Innovators Project" title="{{ __('pages/programs/programs.title') }}"
        :string-limit="12" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-global-innovators-project-header bg-cover bg-top" id="banner">
        <x-registration-form />
        <div class="flex flex-col h-full items-center justify-center gap-2 new-main-container">
            <div class="flex flex-col gap-2">
                <h2 class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/2 xl:w-1/3 md:pb-[2%]">
                    Global Innovators Project
                </h2>
                <!-- <p class="ml-0.5 text-white text-center md:text-left max-w-2xl leading-6 text-banner-description font-light md:w-1/2 xl:w-2/3">
                    {{ __('pages/programs/global_innovators_projects.description') }}
                </p> -->
                <x-registration-form :is-button="true" />
            </div>
        </div>
    </section>

    {{-- ================================== Community Empowerment Program  ================================== --}}
    <section class="py-14">
        <div class="new-main-container flex flex-col items-center">
            <h3 class="font-newprimary font-black text-2xl text-center md:text-3xl uppercase">
                Community Empowerment Program
            </h3>
            <div class="flex flex-col items-center justify-between mt-12 w-full">
                <div class="splide w-full" role="group">
                    <div class="splide__track md:mx-14">
                        <ul class="splide__list mx-10 w-full">
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/N2_p7gUaa_E?si=gsVIYEWjGyVd6wGF" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/r9JziM1yv50?si=1Qs326kLa7Jn_gjb" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/MrAHg47yYEw?si=cNlUBdONraOgEztY" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Global Immersion Program ================================== --}}
    <section class="py-14">
        <div class="new-main-container flex flex-col items-center">
            <h3 class="font-newprimary font-black text-2xl text-center md:text-3xl uppercase">
                Global Immersion Program
            </h3>
            <div class="flex flex-col items-center justify-between mt-12 w-full">
                <div class="splide w-full" role="group">
                    <div class="splide__track md:mx-14">
                        <ul class="splide__list md:mx-10 w-full">
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/R4Lw4-ODJYg?si=r2PHa_Dz1a1nsIWR" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/1F262wkev0A?si=bx8-wfX0b7v1l0Pm" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/IVMpG0DRqiU?si=g6_YNcWPlZTBrKpC" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                            <li class="splide__slide mb-4">
                                <div class="splide__slide__container mx-2">
                                    <iframe width="100%" height="315"
                                        src="https://www.youtube.com/embed/qmxW3l3w1QE?si=vcBYzKaE6WJob5IO" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches;
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches;
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches;
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches;

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: isSmallDevice ? 'loop' : 'slide',
            perPage: isSmallDevice ? 1 : 2,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            autoplay: isSmallDevice ? true : false,
            lazyload: true,
            interval: 4000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px';
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();

        new Splide(splides[1], {
            type: isSmallDevice ? 'loop' : 'slide',
            perPage: isSmallDevice ? 1 : 2,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            autoplay: isSmallDevice ? true : false,
            lazyload: true,
            interval: 4000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px';
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endpush
