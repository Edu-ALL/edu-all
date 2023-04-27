@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/about.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/about.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/about.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full h-screen left-0 overflow-hidden">
            <img loading="lazy" src="{{ asset('assets/img/banner/About us banner.webp') }}" alt="allineduspace about banner image"
                class="w-full h-full object-cover object-center">
        </div>
    </section>

    {{-- ================================== Descrtiption & List Section  ================================== --}}
    <section class="pb-16">
        <div class="flex flex-col items-center main-container">
            <div class="flex flex-col max-w-4xl mt-10 gap-y-4">
                <p class="font-primary font-light text-2xl text-primary text-center">
                    {{ __('pages/about_us/about.desc.0') }}
                </p>
                <p class="font-primary font-light text-2xl text-primary text-center italic">
                    {{ __('pages/about_us/about.desc.1') }}
                </p>
            </div>
            <div class="flex flex-col gap-y-8 max-w-4xl mt-20">
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-primary font-semibold text-xl text-yellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.0.title') }}
                    </h4>
                    <p class="font-primary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.0.body') }}
                    </p>
                </div>
                <span class="block w-full h-[1px] bg-[#7e7e7e]"></span>
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-primary font-semibold text-xl text-yellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.1.title') }}
                    </h4>
                    <p class="font-primary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.1.body') }}
                    </p>
                </div>
                <span class="block w-full h-[1px] bg-[#7e7e7e]"></span>
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-primary font-semibold text-xl text-yellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.2.title') }}
                    </h4>
                    <p class="font-primary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.2.body') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Question & Answer ================================== --}}
    <section class="py-16">
        <div class="flex flex-col items-center main-container">
            <img data-original="{{ asset('assets/img/about/Icon_2.png') }}" alt="allineduspace Logo">
            <h2 class="mt-4 font-primary font-bold text-3xl text-yellow text-center">Question & Answer</h2>

            <div class="max-w-4xl mt-8 w-full">
                <ul class="flex flex-col gap-y-4">
                    @foreach (__('pages/about_us/about.qna_list') as $item)
                        <li class="flex flex-col w-full">
                            <div id="question" class="flex justify-between items-center cursor-pointer mb-3">
                                <h4 class="mr-4 font-primary font-semibold text-xl text-primary"> {{ $item['question'] }}
                                </h4>
                                <i class="fa-solid fa-chevron-down text-xl text-primary"></i>
                            </div>
                            <p id="answer"
                                class="max-h-0 font-primary text-lg text-[#7e7e7e] overflow-hidden transition-all duration-1000"
                                {{-- style="transition: max-height 1s"> --}}>
                                {!! $item['answer'] !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- ================================== Mentors ================================== --}}
    <section class="py-10 bg-primary">
        <div class="flex flex-col items-center">
            <div class=" main-container">
                <div class="flex flex-col max-w-2xl">
                    <h2 class="mt-10 font-primary font-bold text-3xl text-white text-center">
                        {{ __('pages/about_us/about.mentor_title') }}</h2>
                    <p class="mt-8 font-primary text-lg text-white text-center leading-7">
                        {{ __('pages/about_us/about.mentor_desc') }}</p>
                </div>
            </div>
            <div class="w-full px-10 py-10">
                <div class="splide" role="group">
                    <div class="splide__arrows text-white">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -24px">
                            <i class="fa-solid fa-chevron-left text-4xl"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -24px">
                            <i class="fa-solid fa-chevron-right text-4xl"></i>
                        </button>
                    </div>
                    <div class="splide__track py-10">
                        <ul class="splide__list">
                            @foreach ($all_mentor as $mentor)
                                <li class="splide__slide">
                                    <div class="splide__slide__container px-4 w-full h-full">
                                        <div class="mentor_card flex flex-col group">
                                            <div
                                                class="front relative cursor-pointer w-full rounded-lg shadow-lg overflow-hidden">
                                                <div
                                                    class="absolute left-4 right-4 bottom-4 flex flex-col justify-between z-20">
                                                    <h3
                                                        class="font-primary font-bold text-2xl text-white leading-7 lg:text-xl lg:leading-4">
                                                        {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}
                                                        <br>
                                                        {{ substr($mentor->mentor_fullname, strpos($mentor->mentor_fullname, ' ') + 1) }}
                                                    </h3>
                                                    <div
                                                        class="mt-4 font-primary text-xs text-white leading-4 lg:leading-3">
                                                        {!! $mentor->mentor_graduation !!}
                                                    </div>
                                                </div>
                                                <img data-original="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                                    alt="allineduspace mentor {{ $mentor->mentor_alt }}"
                                                    class="bg-cover bg-center">
                                            </div>
                                            <div
                                                class="back overflow-hidden flex justify-center items-center w-full p-2 rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                                                <div class="flex flex-col items-center justify-center">
                                                    <div
                                                        class="mb-6 px-4 w-full h-full font-primary font-medium text-sm text-white text-center text-ellipsis ">
                                                        {{ html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 60)) }}...

                                                    </div>
                                                    <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                                                        class="px-4 py-2 flex-inline font-primary font-medium text-xs text-white text-center rounded-lg bg-yellow">
                                                        Get to know
                                                        {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ================================== Bottom Section ================================== --}}
    <section class="-mt-2 py-16 ">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-primary font-semibold text-yellow text-center text-3xl mb-4">
                {{ __('pages/about_us/about.bottom_title') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                class="my-btn">{{ __('pages/about_us/about.bottom_btn') }}</a>
        </div>
    </section>
@endsection

@section('script')
    <script>
        const questions = document.querySelectorAll('#question');
        const answers = document.querySelectorAll('#answer');

        let old = 0;

        questions.forEach((question, it) => {
            question.addEventListener('click', () => {
                answers[old].classList.add('max-h-0');
                answers[old].classList.remove('duration-[2s]');
                answers[old].classList.add('duration-500');
                answers[old].classList.remove(`max-h-[400px]`);

                answers[it].classList.remove('max-h-0');
                answers[it].classList.add(`max-h-[400px]`);
                answers[it].classList.add('duration-[2s]');
                answers[it].classList.remove('duration-500');
                old = it;
            })
        })


        // slider
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 4 : 5,
            perMove: 1,
            // arrows: isMediumDevice ? false : true,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[100%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
