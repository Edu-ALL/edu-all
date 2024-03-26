<header class="fixed w-full -top-1 left-0 z-50 bg-white shadow-sm transition-all lg:top-0">
    <div class="main-container">
        <div class="py-4 lg:gap-2 w-full">
            <nav class="flex justify-between items-center text-center z-10 lg:relative lg:gap-x-2">
                <a href="{{ url(app()->getLocale()) }}"
                    class="flex justify-center items-center lg:min-w-fit lg:text-left">
                    <img width="160px" height="80px" src={{ asset('uploaded_files/'.'website-settings/'. $website_settings->website_primary_logo) }} alt="{{ $website_settings->alt_primary_logo }}"
                        class="object-center w-[160px]">
                </a>

                <button title="menus" id='open-nav' type="button" class="mx-4 text-3xl lg:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div id="nav-content"
                    class="absolute top-0 right-0 w-full text-primary bg-white transition-all duration-200 z-50 translate-x-full lg:sticky lg:flex lg:justify-between lg:items-center lg:w-full lg:min-h-fit lg:text-primary lg:bg-transparent lg:translate-x-0">

                    <button title="close menu" id='close-nav' type="button"
                        class="flex justify-end w-full border-b-2 border-primary lg:hidden">
                        <i class="fa-solid fa-xmark py-3 px-4 text-2xl text-primary border-l-2 border-primary"></i>
                    </button>

                    <ul
                        class="justify-center w-full h-screen pb-40 font-newprimary border-l border-primary overflow-auto lg:flex lg:h-fit lg:pb-0 lg:border-0 lg:overflow-hidden xl:gap-3 2xl:gap-x-6">
                        <li
                            class="flex-[0_0_auto] pl-4 text-left border-t border-primary lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <a href="{{ url(app()->getLocale()) }}"
                                class="block my-1.5 font-semibold text-xl text-left lg:font-bold lg:text-base lg:text-center">{{ __('pages/navbar.home') }}</a>
                        </li>

                        <li
                            class="nav_item flex-[0_0_auto] text-left border-t-[1px] border-primary lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="flex justify-between items-center">
                                <a href="{{ url(app()->getLocale(), 'programs') }}"
                                    class="block w-full my-1.5 pl-4 font-semibold text-xl text-left lg:text-center lg:text-base lg:font-bold">{{ __('pages/navbar.programs') }}
                                </a>
                                <button title="submenu" type="button"
                                    class="open-nav-child flex justify-end transition-all duration-300 bg-primary lg:bg-transparent ">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down py-3 px-4 text-base text-white transition-all duration-300 lg:p-0 lg:pl-1 lg:text-primary"></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="nav_item_child  hidden font-semibold text-lg text-white  bg-primary transition-all duration-300 lg:absolute lg:invisible lg:block lg:top-full lg:opacity-0">
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
                                {{-- <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/programs/passion-project-mentoring"
                                        class="child_child_nav_link">
                                        <i class="fa-solid fa-desktop mr-2 text-base"></i>
                                        {{ __('pages/navbar.programs_passion') }}
                                    </a>

                                </li> --}}
                                <li class="child_nav group">
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
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/programs/global-innovators-project"
                                        class="child_child_nav_link">
                                        <i class="fa-solid fa-earth-americas mr-2 text-base"></i>
                                        {{ __('pages/navbar.programs_global_innovators') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav_item flex-[0_0_auto] text-left border-t border-primary lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="flex justify-between items-center">
                                <a href="{{ url(app()->getLocale(), 'about') }}"
                                    class="inline w-full my-1.5 pl-4 font-semibold text-xl text-left lg:font-bold lg:text-base lg:text-center">
                                    {{ __('pages/navbar.about_us') }}
                                </a>
                                <button title="submenu" type="button"
                                    class="open-nav-child flex justify-end bg-primary transition-all duration-300 lg:bg-transparent">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down text-base py-3 px-4 text-white  transition-all duration-300  lg:p-0 lg:pl-1 lg:text-primary"></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="nav_item_child  hidden font-semibold text-lg text-white bg-primary transition-all duration-300 lg:absolute lg:top-full lg:invisible lg:block lg:opacity-0 ">
                                <li class="child_nav group">
                                    <a href="{{ route('mentor', app()->getLocale()) }}"
                                        class="child_child_nav_link">{{ __('pages/navbar.mentor') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/about/our-contribution"
                                        class="child_child_nav_link">{{ __('pages/navbar.our_contribution') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/about/partnership-careers"
                                        class="child_child_nav_link">{{ __('pages/navbar.partnership') }}</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="flex-[0_0_auto] pl-4 text-left border-t border-primary lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <a href="{{ url(app()->getLocale()) }}/blog"
                                class="block my-1.5 font-semibold text-xl text-left lg:font-bold lg:text-base lg:text-center lg:pl-4">{{ __('pages/navbar.blog') }}</a>
                        </li>

                        <li
                            class="nav_item flex-[0_0_auto] text-left border-t border-primary md:border-y lg:flex lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="flex justify-between items-center">
                                <div
                                    class="block my-1.5 pl-4  font-semibold w-full text-xl text-left cursor-pointer lg:font-bold lg:text-base lg:text-center">
                                    {{ __('pages/navbar.resources') }}
                                </div>
                                <button title="submenu" type="button"
                                    class="open-nav-child flex justify-end transition-all duration-300 bg-primary lg:bg-transparent">
                                    <i id='open-nav-child-btn'
                                        class="fa-solid fa-caret-down py-3 px-4 text-base text-white transition-all duration-300 lg:p-0 lg:pl-1 lg:text-primary "></i>
                                </button>
                            </div>
                            <ul id="content-nav-child"
                                class="nav_item_child  hidden font-semibold  text-lg text-white  bg-primary transition-all duration-300 lg:absolute lg:top-full lg:min-w-max lg:invisible lg:block lg:opacity-0">
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/success-stories"
                                        class="child_child_nav_link">{{ __('pages/navbar.success_stories') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/upcoming-events"
                                        class="child_child_nav_link">{{ __('pages/navbar.upcoming_events') }}</a>
                                </li>
                                {{-- <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/guidebook"
                                        class="child_child_nav_link">{{ __('pages/navbar.guidebooks') }}</a>
                                </li> --}}
                                <li class="child_nav group">
                                    <a href="{{ url(app()->getLocale()) }}/resources/testimonial"
                                        class="child_child_nav_link">{{ __('pages/navbar.testimonial') }}</a>
                                </li>
                                <li class="child_nav group">
                                    <a href="https://project-showcase.all-inedu.com/" target="_blank"
                                        class="child_child_nav_link">{{ __('pages/navbar.showcase') }}</a>
                                </li>
                                {{-- <li class="child_nav group">
                                    <a href="{{url(app()->getLocale())}}/webinar-workshop" target="_blank"
                                        class="child_child_nav_link">{{ __('pages/navbar.webinar') }}
                                    </a>
                                </li> --}}
                            </ul>
                        </li>

                        <li
                            class="flex-[0_0_auto] pl-4 text-left border-t border-primary sm:hidden lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <a href="{{ route('contact_us', app()->getLocale()) }}"
                                class="block my-1.5 font-semibold text-xl text-left lg:font-bold lg:text-base lg:text-center lg:pl-4">{{ __('pages/navbar.contact_us') }}</a>
                        </li>

                        <li
                            class="nav_item flex-[0_0_auto] text-left border-y border-primary sm:hidden lg:items-center lg:pl-0 lg:text-center lg:border-0">
                            <div class="relative flex items-center group">
                                <div
                                    class="blockfont-semibold w-full text-xl text-left cursor-pointer lg:font-bold lg:text-base lg:text-center">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center cursor-pointer">
                                            <div class="pl-4 flex items-center">
                                                @if (substr(strtoupper(app()->getLocale()), 0, 2) == 'ID')
                                                    <div>
                                                        <svg class="w-6 h-4 shadow-md"
                                                            xmlns="http://www.w3.org/2000/svg" id="flag-icons-id"
                                                            viewBox="0 0 640 480">
                                                            <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                            <path fill="#fff" d="M0 240h640v240H0Z" />
                                                        </svg>
                                                    </div>
                                                    <span
                                                        class="ml-2 font-semibold whitespace-nowrap">{{ strtoupper(app()->getLocale()) }}
                                                    </span>
                                                @elseif (substr(strtoupper(app()->getLocale()), 0, 2) == 'SG')
                                                    <div>
                                                        <svg class="w-6 h-4 shadow-md"
                                                            xmlns="http://www.w3.org/2000/svg" id="flag-icons-sg"
                                                            viewBox="0 0 640 480">
                                                            <defs>
                                                                <clipPath id="a">
                                                                    <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                                </clipPath>
                                                            </defs>
                                                            <g fill-rule="evenodd" clip-path="url(#a)">
                                                                <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                                <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                                <path fill="#fff"
                                                                    d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                                <path fill="#fff"
                                                                    d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <span
                                                        class="ml-2 whitespace-nowrap">{{ strtoupper(app()->getLocale()) }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <button title="submenu" type="button"
                                            class="open-nav-child flex justify-end transition-all duration-300 bg-primary lg:bg-transparent">
                                            <i id='open-nav-child-btn'
                                                class="fa-solid fa-caret-down py-3 px-4 text-base text-white transition-all duration-300 lg:p-0 lg:pl-1 lg:text-primary "></i>
                                        </button>
                                    </div>

                                    <div
                                        class="text-primary absolute left-0 right-0 invisible translate-x-[1px] translate-y-8 transition-all duration-100 opacity-0 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                                        <div
                                            class="mt-0.5 flex flex-col py-4  items-start font-bold bg-white shadow-xl">
                                            @if (Route::currentRouteName() == 'detail_blog')
                                                <div class="flex items-center gap-3 px-4">
                                                    <a href="{{ route('blogs', ['locale' => 'id-en']) }}"
                                                        class="flex items-center hover:text-[#819CCB]">
                                                        <div>
                                                            <svg class="w-6 h-4 shadow-md"
                                                                xmlns="http://www.w3.org/2000/svg" id="flag-icons-id"
                                                                viewBox="0 0 640 480">
                                                                <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                                <path fill="#fff" d="M0 240h640v240H0Z" />
                                                            </svg>
                                                        </div>
                                                        <span class="inline-flex ml-2 whitespace-nowrap gap-1">(ID)
                                                            <span class="hidden sm:block">Indonesia</span></span>
                                                        <span class="w-5 h-px ml-3 bg-primary"></span>

                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <a href="{{ route('blogs', ['locale' => 'id-en']) }}"
                                                            class="font-medium hover:text-[#819CCB]">English</a>
                                                        <span>/</span>
                                                        <a href="{{ route('blogs', ['locale' => 'id-id']) }}"
                                                            class="font-medium hover:text-[#819CCB]">Bahasa</a>
                                                    </div>
                                                </div>

                                                <span class="block w-full h-px my-4 bg-primary"></span>

                                                <div class="flex items-center gap-3 px-4 ">
                                                    <a href="{{ route('blogs', ['locale' => 'sg-en']) }}"
                                                        class="flex items-center hover:text-[#819CCB]">
                                                        <div>
                                                            <svg class="w-6 h-4 shadow-md"
                                                                xmlns="http://www.w3.org/2000/svg" id="flag-icons-sg"
                                                                viewBox="0 0 640 480">
                                                                <defs>
                                                                    <clipPath id="a">
                                                                        <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g fill-rule="evenodd" clip-path="url(#a)">
                                                                    <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                                    <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                                    <path fill="#fff"
                                                                        d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                                    <path fill="#fff"
                                                                        d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG)
                                                            <span class="hidden sm:block">Singapore</span></span>
                                                        <span class="w-5 h-px ml-3 bg-primary"></span>
                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <a href="{{ route('blogs', ['locale' => 'sg-en']) }}"
                                                            class="font-medium hover:text-[#819CCB]">English</a>
                                                    </div>
                                                </div>
                                            @elseif (Route::currentRouteName())
                                                <div class="flex items-center gap-3 px-4">
                                                    <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'id-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'id-en') }} @endif"
                                                        class="flex items-center hover:text-[#819CCB]">
                                                        <div>
                                                            <svg class="w-6 h-4 shadow-md"
                                                                xmlns="http://www.w3.org/2000/svg" id="flag-icons-id"
                                                                viewBox="0 0 640 480">
                                                                <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                                <path fill="#fff" d="M0 240h640v240H0Z" />
                                                            </svg>
                                                        </div>
                                                        <span class="inline-flex ml-2 whitespace-nowrap gap-1">(ID)
                                                            <span class="hidden sm:block">Indonesia</span></span>
                                                        <span class="w-5 h-px ml-3 bg-primary"></span>

                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'id-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'id-en') }} @endif"
                                                            class="font-medium hover:text-[#819CCB]">English</a>
                                                        <span>/</span>
                                                        <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'id-id', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'id-id') }} @endif"
                                                            class="font-medium hover:text-[#819CCB]">Bahasa</a>
                                                    </div>
                                                </div>

                                                <span class="block w-full h-px my-4 bg-primary"></span>

                                                <div class="flex items-center gap-3 px-4 ">
                                                    <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'sg-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'sg-en') }} @endif"
                                                        class="flex items-center hover:text-[#819CCB]">
                                                        <div>
                                                            <svg class="w-6 h-4 shadow-md"
                                                                xmlns="http://www.w3.org/2000/svg" id="flag-icons-sg"
                                                                viewBox="0 0 640 480">
                                                                <defs>
                                                                    <clipPath id="a">
                                                                        <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g fill-rule="evenodd" clip-path="url(#a)">
                                                                    <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                                    <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                                    <path fill="#fff"
                                                                        d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                                    <path fill="#fff"
                                                                        d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG)
                                                            <span class="hidden sm:block">Singapore</span></span>
                                                        <span class="w-5 h-px ml-3 bg-primary"></span>
                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'sg-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'sg-en') }} @endif"
                                                            class="font-medium hover:text-[#819CCB]">English</a>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="flex items-center gap-3 px-4">
                                                    <a href="{{ route('home', ['locale' => 'id-en']) }}"
                                                        class="flex items-center hover:text-[#819CCB]">
                                                        <div>
                                                            <svg class="w-6 h-4 shadow-md"
                                                                xmlns="http://www.w3.org/2000/svg" id="flag-icons-id"
                                                                viewBox="0 0 640 480">
                                                                <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                                <path fill="#fff" d="M0 240h640v240H0Z" />
                                                            </svg>
                                                        </div>
                                                        <span class="inline-flex ml-2 whitespace-nowrap gap-1">(ID)
                                                            <span class="hidden sm:block">Indonesia</span></span>
                                                        <span class="w-5 h-px ml-3 bg-primary"></span>

                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <a href="{{ route('home', ['locale' => 'id-en']) }}"
                                                            class="font-medium hover:text-[#819CCB]">English</a>
                                                        <span>/</span>
                                                        <a href="{{ route('home', ['locale' => 'id-id']) }}"
                                                            class="font-medium hover:text-[#819CCB]">Bahasa</a>
                                                    </div>
                                                </div>

                                                <span class="block w-full h-px my-4 bg-primary"></span>

                                                <div class="flex items-center gap-3 px-4 ">
                                                    <a href="{{ route('home', ['locale' => 'sg-en']) }}"
                                                        class="flex items-center hover:text-[#819CCB]">
                                                        <div>
                                                            <svg class="w-6 h-4 shadow-md"
                                                                xmlns="http://www.w3.org/2000/svg" id="flag-icons-sg"
                                                                viewBox="0 0 640 480">
                                                                <defs>
                                                                    <clipPath id="a">
                                                                        <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                                <g fill-rule="evenodd" clip-path="url(#a)">
                                                                    <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                                    <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                                    <path fill="#fff"
                                                                        d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                                    <path fill="#fff"
                                                                        d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG)
                                                            <span class="hidden sm:block">Singapore</span></span>
                                                        <span class="w-5 h-px ml-3 bg-primary"></span>
                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <a href="{{ route('home', ['locale' => 'sg-en']) }}"
                                                            class="font-medium hover:text-[#819CCB]">English</a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        </li>
                    </ul>
                </div>

                <div
                    class="hidden sm:flex justify-between items-center min-w-fit mt-1 gap-4 font-newprimary font-medium text-base sm:mt-0 lg:text-base">
                    <div class="relative flex items-center group">
                        <a href="{{ route('contact_us', app()->getLocale()) }}"
                            class="flex items-center font-newprimary font-bold text-sm text-[#819CCB] cursor-pointer  sm:text-base mr-2">
                            {{ __('pages/navbar.contact_us') }}</i>
                        </a>
                    </div>
                    <div class="relative flex items-center group">
                        <div
                            class="flex items-center font-newprimary font-bold text-sm text-[#819CCB] cursor-pointer  sm:text-base">
                            <div class="flex items-center">
                                @if (substr(strtoupper(app()->getLocale()), 0, 2) == 'ID')
                                    <div>
                                        <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                            id="flag-icons-id" viewBox="0 0 640 480">
                                            <path fill="#e70011" d="M0 0h640v240H0Z" />
                                            <path fill="#fff" d="M0 240h640v240H0Z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="inline-flex ml-2 whitespace-nowrap">{{ strtoupper(app()->getLocale()) }}
                                    </span>
                                @elseif (substr(strtoupper(app()->getLocale()), 0, 2) == 'SG')
                                    <div>
                                        <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                            id="flag-icons-sg" viewBox="0 0 640 480">
                                            <defs>
                                                <clipPath id="a">
                                                    <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                </clipPath>
                                            </defs>
                                            <g fill-rule="evenodd" clip-path="url(#a)">
                                                <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                <path fill="#fff"
                                                    d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                <path fill="#fff"
                                                    d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span
                                        class="inline-flex ml-2 whitespace-nowrap">{{ strtoupper(app()->getLocale()) }}
                                    </span>
                                @endif

                            </div>
                            <i class="fa-solid fa-caret-down ml-1"></i>
                        </div>
                        <div
                            class="text-primary absolute top-full right-0 invisible translate-x-[1px] translate-y-8 transition-all duration-100 opacity-0 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="mt-6 flex flex-col py-4  items-start font-bold bg-white shadow-xl">

                                @if (Route::currentRouteName() == 'detail_blog')
                                    <div class="flex items-center gap-3 px-4">
                                        <a href="{{ route('blogs', ['locale' => 'id-en']) }}"
                                            class="flex items-center hover:text-[#819CCB]">
                                            <div>
                                                <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                    id="flag-icons-id" viewBox="0 0 640 480">
                                                    <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                    <path fill="#fff" d="M0 240h640v240H0Z" />
                                                </svg>
                                            </div>
                                            <span class="inline-flex ml-2 whitespace-nowrap gap-1">(ID) <span
                                                    class="hidden sm:block">Indonesia</span></span>
                                            <span class="w-5 h-px ml-3 bg-primary"></span>

                                        </a>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('blogs', ['locale' => 'id-en']) }}"
                                                class="font-medium hover:text-[#819CCB]">English</a>
                                            <span>/</span>
                                            <a href="{{ route('blogs', ['locale' => 'id-id']) }}"
                                                class="font-medium hover:text-[#819CCB]">Bahasa</a>
                                        </div>
                                    </div>

                                    <span class="block w-full h-px my-4 bg-primary"></span>

                                    <div class="flex items-center gap-3 px-4 ">
                                        <a href="{{ route('blogs', ['locale' => 'sg-en']) }}"
                                            class="flex items-center hover:text-[#819CCB]">
                                            <div>
                                                <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                    id="flag-icons-sg" viewBox="0 0 640 480">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                        </clipPath>
                                                    </defs>
                                                    <g fill-rule="evenodd" clip-path="url(#a)">
                                                        <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                        <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                        <path fill="#fff"
                                                            d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                        <path fill="#fff"
                                                            d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG) <span
                                                    class="hidden sm:block">Singapore</span></span>
                                            <span class="w-5 h-px ml-3 bg-primary"></span>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('blogs', ['locale' => 'sg-en']) }}"
                                                class="font-medium hover:text-[#819CCB]">English</a>
                                        </div>
                                    </div>
                                @elseif (Route::currentRouteName())
                                    <div class="flex items-center gap-3 px-4">
                                        <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'id-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'id-en') }} @endif"
                                            class="flex items-center hover:text-[#819CCB]">
                                            <div>
                                                <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                    id="flag-icons-id" viewBox="0 0 640 480">
                                                    <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                    <path fill="#fff" d="M0 240h640v240H0Z" />
                                                </svg>
                                            </div>
                                            <span class="inline-flex ml-2 whitespace-nowrap gap-1">(ID) <span
                                                    class="hidden sm:block">Indonesia</span></span>
                                            <span class="w-5 h-px ml-3 bg-primary"></span>

                                        </a>
                                        <div class="flex items-center gap-2">
                                            <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'id-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'id-en') }} @endif"
                                                class="font-medium hover:text-[#819CCB]">English</a>
                                            <span>/</span>
                                            <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'id-id', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'id-id') }} @endif"
                                                class="font-medium hover:text-[#819CCB]">Bahasa</a>
                                        </div>
                                    </div>

                                    <span class="block w-full h-px my-4 bg-primary"></span>

                                    <div class="flex items-center gap-3 px-4 ">
                                        <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'sg-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'sg-en') }} @endif"
                                            class="flex items-center hover:text-[#819CCB]">
                                            <div>
                                                <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                    id="flag-icons-sg" viewBox="0 0 640 480">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                        </clipPath>
                                                    </defs>
                                                    <g fill-rule="evenodd" clip-path="url(#a)">
                                                        <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                        <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                        <path fill="#fff"
                                                            d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                        <path fill="#fff"
                                                            d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG) <span
                                                    class="hidden sm:block">Singapore</span></span>
                                            <span class="w-5 h-px ml-3 bg-primary"></span>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <a href="@if (Route::currentRouteName() == 'detail_mentor') {{ route(Route::currentRouteName(), ['locale' => 'sg-en', 'slug' => $mentor_slug]) }} @else {{ route(Route::currentRouteName(), 'sg-en') }} @endif"
                                                class="font-medium hover:text-[#819CCB]">English</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="flex items-center gap-3 px-4">
                                        <a href="{{ route('home', ['locale' => 'id-en']) }}"
                                            class="flex items-center hover:text-[#819CCB]">
                                            <div>
                                                <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                    id="flag-icons-id" viewBox="0 0 640 480">
                                                    <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                    <path fill="#fff" d="M0 240h640v240H0Z" />
                                                </svg>
                                            </div>
                                            <span class="inline-flex ml-2 whitespace-nowrap gap-1">(ID) <span
                                                    class="hidden sm:block">Indonesia</span></span>
                                            <span class="w-5 h-px ml-3 bg-primary"></span>

                                        </a>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('home', ['locale' => 'id-en']) }}"
                                                class="font-medium hover:text-[#819CCB]">English</a>
                                            <span>/</span>
                                            <a href="{{ route('home', ['locale' => 'id-id']) }}"
                                                class="font-medium hover:text-[#819CCB]">Bahasa</a>
                                        </div>
                                    </div>

                                    <span class="block w-full h-px my-4 bg-primary"></span>

                                    <div class="flex items-center gap-3 px-4 ">
                                        <a href="{{ route('home', ['locale' => 'sg-en']) }}"
                                            class="flex items-center hover:text-[#819CCB]">
                                            <div>
                                                <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                    id="flag-icons-sg" viewBox="0 0 640 480">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill-opacity=".7" d="M0 0h640v480H0z" />
                                                        </clipPath>
                                                    </defs>
                                                    <g fill-rule="evenodd" clip-path="url(#a)">
                                                        <path fill="#fff" d="M-20 0h720v480H-20z" />
                                                        <path fill="#df0000" d="M-20 0h720v240H-20z" />
                                                        <path fill="#fff"
                                                            d="M146 40.2a84.4 84.4 0 0 0 .8 165.2 86 86 0 0 1-106.6-59 86 86 0 0 1 59-106c16-4.6 30.8-4.7 46.9-.2z" />
                                                        <path fill="#fff"
                                                            d="m133 110 4.9 15-13-9.2-12.8 9.4 4.7-15.2-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.5 52 5 15.1-13-9.2-12.9 9.3 4.8-15.1-12.8-9.4 15.9-.1 4.9-15.1 5 15h16zm58.5-.4 4.9 15.2-13-9.3-12.8 9.3 4.7-15.1-12.8-9.3 15.9-.2 5-15 5 15h15.8zm17.4-51.6 4.9 15.1-13-9.2-12.8 9.3 4.8-15.1-12.9-9.4 16-.1 4.8-15.1 5 15h16zm-46.3-34.3 5 15.2-13-9.3-12.9 9.4 4.8-15.2-12.8-9.4 15.8-.1 5-15.1 5 15h16z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG) <span
                                                    class="hidden sm:block">Singapore</span></span>
                                            <span class="w-5 h-px ml-3 bg-primary"></span>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('home', ['locale' => 'sg-en']) }}"
                                                class="font-medium hover:text-[#819CCB]">English</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

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
</script>
