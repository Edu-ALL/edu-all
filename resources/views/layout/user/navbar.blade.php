<header class="fixed w-full top-0 left-0 z-40 bg-white shadow-sm">
    <div class="main-container">
        <div class="py-4 lg:gap-2 w-full">
            <nav
                class="text-center flex justify-between 2xl:justify-between items-center lg:justify-center flex-wrap lg:relative lg:gap-x-6">
                <a href="{{ url(app()->getLocale()) }}"
                    class="pb-2 2xl:pb-0 flex items-center justify-center lg:text-left lg:min-w-fit">
                    <img src="/assets/img/navbar/ALLIN-LOGO-LONG-NEW.png" alt="All In Logo New" class="w-48 xl:w-56">
                </a>
                <button id='open-nav' type="button" class="text-3xl lg:hidden ml-4">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div id="nav-content"
                    class="lg:flex lg:justify-between lg:items-center absolute top-0 right-0 text-light translate-x-full bg-dark w-[320px] lg:w-full transition-all duration-200 z-50 lg:sticky 2xl:w-fit lg:translate-x-0 lg:bg-transparent lg:text-primary lg:min-h-fit 2xl:justify-center">
                    <button id='close-nav' type="button"
                        class="w-full flex justify-end border-b-2 border-top-navbar lg:hidden">
                        <i class="fa-solid fa-xmark text-2xl text-white border-l-2 border-top-navbar py-3 px-4"></i>
                    </button>
                    <ul
                        class="w-full border-l-[1px] border-top-navbar font-secondary justify-between lg:flex 2xl:gap-x-6 lg:gap-3 h-screen overflow-auto pb-40 lg:h-fit lg:overflow-auto lg:border-0 lg:pb-0 ">
                        <li class="li-nav">
                            <a href="{{ url(app()->getLocale()) }}"
                                class="li-link-nav">{{ __('pages/navbar.navbar_home') }}</a>
                        </li>
                        <li
                            class="border-t-[1px] border-top-navbar text-left lg:pl-0 lg:border-0 lg:text-center lg:items-center lg:flex programs">
                            <div class="flex justify-between items-center ">
                                <a href="{{ url(app()->getLocale(), 'programs') }}"
                                    class="block my-1.5 pl-4 text-xl text-left w-full  lg:text-center lg:text-base lg:font-bold">{{ __('pages/navbar.navbar_programs') }}
                                </a>
                                <button id='open-nav-child' type="button"
                                    class="flex justify-end bg-body lg:bg-transparent transition-all duration-300">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down text-2xl text-white py-3 px-4 lg:text-primary lg:p-0 lg:pl-1 transition-all duration-300"></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="bg-body text-light font-semibold text-lg transition-all duration-300 hidden lg:block lg:absolute lg:top-full lg:invisible lg:opacity-0 programs-child">
                                <li class="child-nav group">
                                    <a href="#"
                                        class="child-child-li-link">{{ __('pages/navbar.navbar_programs_admission') }}</a>
                                    <ul class="child-child-ul">
                                        <li class="child-child-li">
                                            <a href="#"
                                                class="child-child-link">{{ __('pages/navbar.navbar_programs_admission_undergraduate') }}</a>
                                        </li>
                                        <li class="child-child-li">
                                            <a href="#"
                                                class="child-child-link">{{ __('pages/navbar.navbar_programs_admission_graduate') }}</a>
                                        </li>
                                        <li class="child-child-li lg:border-b-0">
                                            <a href="#"
                                                class="child-child-link">{{ __('pages/navbar.navbar_programs_admission_university') }}</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="child-nav group">
                                    <a href="#"
                                        class="child-child-li-link">{{ __('pages/navbar.navbar_programs_passion') }}</a>

                                </li>
                                <li class="child-nav group border-b-0">
                                    <a href="#"
                                        class="child-child-li-link">{{ __('pages/navbar.navbar_programs_academic') }}</a>
                                    <ul class="child-child-ul">
                                        <li class="child-child-li">
                                            <a href="#"
                                                class="child-child-link">{{ __('pages/navbar.navbar_programs_academic_tutoring') }}</a>
                                        </li>
                                        <li class="child-child-li">
                                            <a href="#"
                                                class="child-child-link">{{ __('pages/navbar.navbar_programs_academic_ib') }}</a>
                                        </li>
                                        <li class="child-child-li lg:border-b-0">
                                            <a href="#"
                                                class="child-child-link">{{ __('pages/navbar.navbar_programs_academic_sat') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="li-link-nav">{{ __('pages/navbar.navbar_about_us') }}</a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="li-link-nav">{{ __('pages/navbar.navbar_success_stories') }}</a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="li-link-nav ">{{ __('pages/navbar.navbar_upcoming_events') }}</a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="li-link-nav">{{ __('pages/navbar.navbar_partnership') }}</a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="li-link-nav">{{ __('pages/navbar.navbar_blog') }}</a>
                        </li>
                        <li class="li-nav">
                            <a href="#" class="li-link-nav">{{ __('pages/navbar.navbar_guidebooks') }}</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div
                        class="font-secondary min-w-fit flex font-medium justify-between items-center text-base mt-1 sm:mt-0 gap-4 lg:text-base">
                        <div class="flex items-start justify-start lg:items-center lg:justify-center">
                            <a href="#" class="text-[#819CCB] text-center font-bold">Contact Us <i
                                    class="fa-solid fa-caret-down ml-1"></i></a>
                        </div>
                        <div class="relative flex items-center cursor-pointer group">
                            <div class="text-[#819CCB] font-body flex items-center font-bold">
                                {{ strtoupper(app()->getLocale()) }} <i class="fa-solid fa-caret-down ml-1"></i>
                            </div>
                            <div
                                class="flex flex-col font-bold items-start bg-white border-2 absolute top-full right-0 translate-x-[1px] translate-y-8 invisible transition-all duration-100 opacity-0 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                                @foreach (config('app.available_locales') as $locale)
                                    <a href="{{ route(Route::currentRouteName(), $locale) }}"
                                        class=" w-full px-4 py-2 text-left @if (app()->getLocale() == $locale) text-[#819CCB] @endif @if ($locale == 'id') border-t-2 @else @endif">
                                        {{ strtoupper($locale) }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<script>
    const openBtn = document.querySelector("#open-nav"),
        closeBtn = document.querySelector("#close-nav"),
        navContent = document.querySelector("#nav-content");

    openBtn.addEventListener('click', () => {
        navContent.classList.toggle('translate-x-0');
        childBtnIcon.classList.remove('rotate-180');
    })

    closeBtn.addEventListener('click', () => {
        navContent.classList.toggle('translate-x-0');
        childBtnIcon.classList.remove('rotate-180');
    })

    const openChildBtn = document.querySelector("#open-nav-child"),
        navChildContent = document.querySelector("#content-nav-child"),
        childBtnIcon = document.querySelector("#open-nav-child-btn");

    document.addEventListener('DOMContentLoaded', () => {
        openChildBtn.addEventListener('click', () => {
            navChildContent.classList.toggle('hidden');
            childBtnIcon.classList.toggle('rotate-180');
        })
    })
</script>
