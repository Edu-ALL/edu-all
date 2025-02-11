<footer class="bg-dark font-secondary">
    <div class="main-container py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 md:gap-4 lg:gap-x-10 gap-y-12">
            <div class="flex flex-col sm:col-span-2">
                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.address') }}
                </h4>
                <div class="font-normal text-base text-white">
                    {!! $website_settings->address !!}
                </div>

                <hr class="my-8">

                <h4 class="font-bold text-base text-white mb-4">
                    {{ __('pages/footer.consultation') }}
                </h4>
                <p class="font-normal text-base text-white mb-4">
                    {{ __('pages/footer.consultation_sub') }}
                </p>
                <div class="font-normal text-base text-white">
                    <p>
                        {{ __('pages/footer.consultation_desc') }}
                    </p>
                    <div class="flex flex-col">
                        {{-- <a target="_blank" href="tel:+62{{ $website_settings->phone_number_1 }}" class="font-newprimary text-lg">+62 {{ $website_settings->phone_number_1 }}</a>
                        @if ($website_settings->phone_number_2 != null)
                            <a target="_blank" href="tel:+62{{ $website_settings->phone_number_2 }}" class="font-newprimary text-lg">+62 {{ $website_settings->phone_number_2 }}</a>
                        @endif --}}
                        @if ($website_settings->phone_number_3 != null)
                            <a target="_blank" href="tel:+62{{ $website_settings->phone_number_3 }}"
                                class="font-newprimary text-lg">+62 {{ $website_settings->phone_number_3 }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:col-span-2">
                @php
                    use App\Models\Blogs;
                    $lang = substr(app()->getLocale(), 3, 2);
                    $latest = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->take(2)->get();
                @endphp

                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.article') }}
                </h4>
                <div class="grid grid-cols-2 gap-3">
                    @foreach ($latest as $blog)
                        <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                            class="block p-2 bg-[#f4f3f3] hover:bg-[#dfdfdf] rounded transition-all duration-300">
                            <div class="flex flex-col gap-1">
                                <img width="100%" height="95px"
                                    data-original="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                    alt="EduALL | {{ $blog->blog_thumbnail_alt }}"
                                    class="h-[95px] object-cover object-center">
                                <h2
                                    class="font-newprimary font-extrabold text-sm text-newprimary lg:text-sm lg:tracking-normal lg:leading-6">
                                    {{ html_entity_decode(substr(strip_tags($blog->blog_title), 0, 35)) }}...
                                </h2>
                                <span class="inline-flex font-newprimary font-semibold text-xs text-yellow">
                                    {{ $blog->blog_category->category_name }}
                                </span>
                                <p class="font-newprimary font-medium text-sm text-newprimary">
                                    {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 50)) }}...
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ url(app()->getLocale()) }}/blog"
                        class="bg-red py-1 px-4 text-white shadow hover:bg-red/75">
                        {{ __('pages/footer.article_button') }}
                    </a>
                </div>

            </div>
            <div class="flex flex-col sm:col-span-2 lg:col-span-4 xl:col-span-2">
                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.company') }}
                </h4>
                <ul class="flex flex-col items-start gap-2 w-full">
                    @foreach (__('pages/footer.page_list') as $item)
                        <li class="border-b-[1px] border-light w-full">
                            <a href="{{ url(app()->getLocale() . $item['link']) }}"
                                class="flex justify-between text-white py-1 lg:py-2 hover:text-white/70">
                                <p class="">{{ $item['title'] }}</p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </li>
                    @endforeach
                    <li class="w-full">
                        <div class="flex items-center group relative">
                            <div class="flex items-center justify-between w-full">
                                <div class="text-white">
                                    Language
                                </div>
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center cursor-pointer">
                                        <div class="pl-4 flex items-center">
                                            @if (substr(strtoupper(app()->getLocale()), 0, 2) == 'ID')
                                                <div>
                                                    <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                        id="flag-icons-id" viewBox="0 0 640 480">
                                                        <path fill="#e70011" d="M0 0h640v240H0Z" />
                                                        <path fill="#fff" d="M0 240h640v240H0Z" />
                                                    </svg>
                                                </div>
                                                <span
                                                    class="mx-2 text-white whitespace-nowrap">{{ strtoupper(app()->getLocale()) }}
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
                                                <label
                                                    class="mx-2 whitespace-nowrap text-white">{{ strtoupper(app()->getLocale()) }}
                                                </label>
                                            @endif
                                        </div>
                                    </div>
                                    <button title="submenu" type="button"
                                        class="open-nav-child flex justify-end transition-all duration-300 bg-primary lg:bg-transparent">
                                        <i id='open-nav-child-btn'
                                            class="fa-solid fa-caret-down py-3 px-4 text-base text-white transition-all duration-300 lg:p-0 lg:pl-1 lg:text-primary "></i>
                                    </button>
                                </div>
                            </div>

                            <div
                                class="text-primary absolute left-0 right-0 invisible translate-x-[1px] translate-y-8 transition-all duration-100 opacity-0 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                                <div
                                    class="mt-0.5 flex flex-col py-4  items-start font-bold bg-white rounded-lg shadow-xl">
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
                                                <span class="inline-flex ml-2 whitespace-nowrap gap-1">(SG)
                                                    <span class="hidden sm:block">Singapore</span></span>
                                                <span class="w-5 h-px ml-3 bg-primary"></span>
                                            </a>
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('blogs', ['locale' => 'sg-en']) }}"
                                                    class="font-medium hover:text-[#819CCB]">English</a>
                                            </div>
                                        </div>
                                    @elseif (Route::currentRouteName() == 'detail_mentor')
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
                                                    <svg class="w-6 h-4 shadow-md" xmlns="http://www.w3.org/2000/svg"
                                                        id="flag-icons-id" viewBox="0 0 640 480">
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
        </div>
        <div
            class="mt-14 border-t-2 border-light pt-10 gap-8 flex flex-wrap justify-center md:justify-between items-center">
            <img src={{ Storage::url('website-settings/' . $website_settings->website_secondary_logo) }}
                width="160" alt="{{ $website_settings->alt_secondary_logo }}" loading="lazy">

            <div class="flex gap-4 items-center justify-between">
                <a href="mailto:{{ $website_settings->email }}" target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/email.png') }}" alt="instagram logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
                <a href={{ $website_settings->instagram }} target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/instagram.png') }}" alt="instagram logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
                <a href={{ $website_settings->linkedin }} target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/linkedin.png') }}" alt="linkedin logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
                <a href={{ $website_settings->youtube_channel }} target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/youtube.png') }}" alt="youtube logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
            </div>
            <p class="text-sm text-white">Copyright © {{ date('Y') }}. PT. Jawara Edukasih Indonesia</p>
        </div>
    </div>
</footer>
