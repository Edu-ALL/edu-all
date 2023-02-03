<header class="fixed w-full top-0 left-0 z-20 bg-white shadow-sm">
    <div class="main-container">
        <div class="py-4 lg:gap-2 w-full">
            <nav class="flex justify-between items-center text-center z-10 lg:relative lg:gap-x-2">
                <a href="{{ url(app()->getLocale()) }}"
                    class="flex justify-center items-center lg:min-w-fit lg:text-left">
                    <img src="/assets/img/navbar/ALLIN-LOGO-LONG-NEW.png" alt="All In Logo New"
                        class=" object-center w-48 xl:w-56">
                </a>

                <button id='open-nav' type="button" class="mx-4 text-3xl lg:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div id="nav-content"
                    class="absolute top-0 right-0 w-[320px] text-white bg-[#1d1d1d] transition-all duration-200 z-50 translate-x-full lg:sticky lg:flex lg:justify-between lg:items-center lg:w-full lg:min-h-fit lg:text-primary lg:bg-transparent lg:translate-x-0">

                    <button id='close-nav' type="button"
                        class="flex justify-end w-full border-b-2 border-[#666666] lg:hidden">
                        <i class="fa-solid fa-xmark py-3 px-4 text-2xl text-white border-l-2 border-[#666666]"></i>
                    </button>

                    <ul
                        class="justify-center w-full h-screen pb-40 font-secondary border-l border-[#666666] overflow-auto lg:flex lg:h-fit lg:pb-0 lg:border-0 lg:overflow-hidden xl:gap-3 xl:mx-10 2xl:gap-x-6">
                        <li
                            class="flex-[0_0_auto] pl-4 text-left border-t border-[#666666] lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <a href="{{ url(app()->getLocale()) }}"
                                class="block my-1.5 text-xl text-left lg:font-bold lg:text-base lg:text-center">{{ __('pages/navbar.home') }}</a>
                        </li>

                        <li
                            class="programs flex-[0_0_auto] text-left border-t-[1px] border-[#666666] lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="flex justify-between items-center">
                                <a href="{{ url(app()->getLocale(), 'programs') }}"
                                    class="block w-full my-1.5 pl-4 text-xl text-left lg:text-center lg:text-base lg:font-bold">{{ __('pages/navbar.programs') }}
                                </a>
                                <button id='open-nav-child' type="button"
                                    class="flex justify-end transition-all duration-300 bg-[#303030] lg:bg-transparent ">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down py-3 px-4 text-base text-white transition-all duration-300 lg:p-0 lg:pl-1 lg:text-primary"></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="programs-child hidden font-semibold text-lg text-white  bg-[#7A7A7A] transition-all duration-300 lg:absolute lg:invisible lg:block lg:top-full lg:opacity-0">
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring"
                                        class="child_child_nav_link">
                                        <i class="fa-solid fa-graduation-cap mr-2 text-base"></i>
                                        {{ __('pages/navbar.programs_admission') }}</a>
                                    <ul
                                        class="text-[#1d1d1d] bg-white transition-all duration-300 lg:absolute lg:left-full lg:top-0 lg:invisible lg:w-full lg:text-[#aaaaaa] lg:opacity-0 group-hover:lg:opacity-100 group-hover:lg:visible group-hover:lg:block lg:bg-[#333333]">
                                        <li class="child_child_nav">
                                            <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/undergraduate-program"
                                                class="child_child_link">
                                                {{ __('pages/navbar.programs_admission_undergraduate') }}
                                            </a>
                                        </li>
                                        <li class="child_child_nav">
                                            <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/graduate-program"
                                                class="child_child_link">{{ __('pages/navbar.programs_admission_graduate') }}
                                            </a>
                                        </li>
                                        <li class="child_child_nav lg:border-b-0">
                                            <a href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/university-transfer-program"
                                                class="child_child_link">{{ __('pages/navbar.programs_admission_university') }}
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/programs/passion-project-mentoring"
                                        class="child_child_nav_link">
                                        <i class="fa-solid fa-desktop mr-2 text-base"></i>
                                        {{ __('pages/navbar.programs_passion') }}
                                    </a>

                                </li>
                                <li class="child_nav group border-b-0">
                                    <a href="{{ url(app()->getLocale()) }}/programs/academic-test-preparation"
                                        class="child_child_nav_link">
                                        <i class="fa-solid fa-pencil mr-2 text-base"></i>
                                        {{ __('pages/navbar.programs_academic') }}
                                    </a>
                                    <ul
                                        class="text-[#1d1d1d] bg-white transition-all duration-300 lg:absolute lg:left-full lg:top-0 lg:invisible lg:w-full lg:text-[#aaaaaa] lg:opacity-0 group-hover:lg:opacity-100 group-hover:lg:visible group-hover:lg:block lg:bg-[#333333]">
                                        <li class="child_child_nav">
                                            <a href="{{ url(app()->getLocale()) }}/programs/academic-test-preparation/academic-tutoring"
                                                class="child_child_link">
                                                {{ __('pages/navbar.programs_academic_tutoring') }}
                                            </a>
                                        </li>
                                        <li class="child_child_nav">
                                            <a href="{{ url(app()->getLocale()) }}/programs/academic-test-preparation/ib-ee-coaching-program"
                                                class="child_child_link">
                                                {{ __('pages/navbar.programs_academic_ib') }}
                                            </a>
                                        </li>
                                        <li class="child_child_nav lg:border-b-0">
                                            <a href="{{ url(app()->getLocale()) }}/programs/academic-test-preparation/sat-program"
                                                class="child_child_link">
                                                {{ __('pages/navbar.programs_academic_sat') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="programs flex-[0_0_auto] text-left border-t border-[#666666] lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="flex justify-between items-center">
                                <a href="{{ url(app()->getLocale(), 'about') }}"
                                    class="inline w-full my-1.5 pl-4 text-xl text-left lg:font-bold lg:text-base lg:text-center">
                                    {{ __('pages/navbar.about_us') }}
                                </a>
                                <button id='open-nav-child' type="button"
                                    class="flex justify-end bg-[#303030] transition-all duration-300 lg:bg-transparent">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down text-base py-3 px-4 text-white  transition-all duration-300  lg:p-0 lg:pl-1 lg:text-primary"></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="programs-child hidden font-semibold text-lg text-white bg-[#7A7A7A] transition-all duration-300 lg:absolute lg:top-full lg:invisible lg:block lg:opacity-0 ">
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/about/our-contribution"
                                        class="child_child_nav_link">{{ __('pages/navbar.our_contribution') }}</a>
                                </li>
                                <li class="child_nav group border-b-0">
                                    <a href="{{ url(app()->getLocale()) }}/about/partnership-careers"
                                        class="child_child_nav_link">{{ __('pages/navbar.partnership') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="flex-[0_0_auto] pl-4 text-left border-t border-[#666666] lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <a href="{{ url(app()->getLocale()) }}/blog"
                                class="block my-1.5 text-xl text-left lg:font-bold lg:text-base lg:text-center lg:pl-4">{{ __('pages/navbar.blog') }}</a>
                        </li>

                        <li
                            class="programs flex-[0_0_auto] text-left border-y border-[#666666] lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="flex justify-between items-center">
                                <a href="#"
                                    class="block my-1.5 pl-4  w-full text-xl text-left lg:font-bold lg:text-base lg:text-center">{{ __('pages/navbar.resources') }}
                                </a>
                                <button id='open-nav-child' type="button"
                                    class="flex justify-end transition-all duration-300 bg-[#303030] lg:bg-transparent">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down py-3 px-4 text-base text-white transition-all duration-300 lg:p-0 lg:pl-1 lg:text-primary "></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="programs-child hidden font-semibold  text-lg text-white  bg-[#7A7A7A] transition-all duration-300 lg:absolute lg:top-full lg:invisible lg:block lg:opacity-0">
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/success-stories"
                                        class="child_child_nav_link">{{ __('pages/navbar.success_stories') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/upcoming-events"
                                        class="child_child_nav_link">{{ __('pages/navbar.upcoming_events') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/guidebook"
                                        class="child_child_nav_link">{{ __('pages/navbar.guidebooks') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/testimonial"
                                        class="child_child_nav_link">{{ __('pages/navbar.testimonial') }}</a>
                                </li>
                                <li class="child_nav group border-b-0">
                                    <a href="{{ url(app()->getLocale()) }}/resources/student-acceptances"
                                        class="child_child_nav_link">{{ __('pages/navbar.student_acceptances') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div
                    class="flex justify-between items-center min-w-fit mt-1 gap-4 font-secondary font-medium text-base sm:mt-0 lg:text-base">
                    <div class="block lg:justify-center lg:items-center">
                        <a href="{{ url(app()->getLocale()) }}/contact-us"
                            class="font-bold text-sm text-[#819CCB] text-center sm:text-base">{{ __('pages/navbar.contact_us') }}<i
                                class="fa-solid fa-caret-down ml-1"></i></a>
                    </div>
                    <div class="relative flex items-center cursor-pointer group">
                        <div class="flex items-center  font-body font-bold text-sm text-[#819CCB] sm:text-base">
                            {{ strtoupper(app()->getLocale()) }} <i class="fa-solid fa-caret-down ml-1"></i>
                        </div>
                        <div
                            class="absolute top-full right-0 invisible flex flex-col  items-start font-bold bg-white border-2 translate-x-[1px] translate-y-8 transition-all duration-100 opacity-0 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                            @foreach (config('app.available_locales') as $locale)
                                @if (str_contains(request()->path(), 'blog'))
                                    <a href="{{ route('blogs', $locale) }}"
                                        class=" w-full px-4 py-2 text-left text-primary @if (app()->getLocale() == $locale) text-[#819CCB] @endif @if ($locale == 'id') border-t-2 @else @endif">
                                        {{ strtoupper($locale) }}
                                    </a>
                                @elseif (str_contains(request()->path(), 'mentor/'))
                                    @php
                                        $url_path = explode('/', request()->path());
                                        $id_mentor = end($url_path);
                                    @endphp
                                    <a href="{{ route(Route::currentRouteName(), ['locale' => $locale, 'group' => $id_mentor]) }}"
                                        class=" w-full px-4 py-2 text-left text-primary @if (app()->getLocale() == $locale) text-[#819CCB] @endif @if ($locale == 'id') border-t-2 @else @endif">
                                        {{ strtoupper($locale) }}
                                    </a>
                                @else
                                    <a href="{{ route(Route::currentRouteName(), $locale) }}"
                                        class=" w-full px-4 py-2 text-left text-primary @if (app()->getLocale() == $locale) text-[#819CCB] @endif @if ($locale == 'id') border-t-2 @else @endif">
                                        {{ strtoupper($locale) }}
                                    </a>
                                @endif
                            @endforeach
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
    })

    closeBtn.addEventListener('click', () => {
        navContent.classList.toggle('translate-x-0');
    })

    const openChildBtns = document.querySelectorAll("#open-nav-child"),
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
</script>
