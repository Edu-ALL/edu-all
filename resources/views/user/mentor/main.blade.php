@extends('layout.user.main')

@section('content')
    {{-- Header Section --}}
    <section class="py-24 bg-mentor-header bg-cover bg-top">
        <div class="main-container">
            <div class="flex flex-col">
                <h1 class="mb-4 font-secondary font-bold text-4xl text-white md:mb-8 md:text-6xl">Our Mentors</h1>
                <p class="mb-6 w-full font-inter text-base text-white text-justify md:w-2/3 lg:w-1/2 md:mb-12">ALL-in mentors
                    are graduates
                    from the world’s top universities with varied academic backgrounds and work experiences.
                    <br>
                    <br>
                    We leverage diverse voices to accomplish our common vision to empower you with requisite real-world
                    skills and an extensive network to achieve your dreams beyond college.
                </p>
                <a href="#">
                    <span class="px-10 py-2 font-inter font-medium text-base text-white rounded-md bg-yellow">More</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Mentor List Section --}}
    <section class="py-10">
        <div class="main-container">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:gap-12">
                @foreach ($all_mentor as $mentor)
                    <div class="mentor_card flex flex-col rounded-xl">
                        <div class="front cursor-pointer w-full rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('uploaded_files/mentor/' . $mentor->mentor_picture) }}"
                                alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center">
                        </div>
                        <div
                            class="back overflow-hidden flex justify-center items-center w-full p-8 rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                            <div class="flex flex-col items-center justify-center">
                                <div
                                    class="mb-6 w-full h-full font-secondary font-medium text-xl text-white text-justify text-ellipsis ">
                                    {{ html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 150)) }}...

                                </div>
                                <a href="{{ route('detail_mentor', ['locale' => $locale, 'group' => $mentor->group]) }}"
                                    class="flex-inline px-4 py-2 font-inter font-medium text-base text-white text-center rounded-md bg-yellow">
                                    Get to know {{ $mentor->mentor_firstname }}

                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mentor List Section --}}
    <section class="pt-32 pb-10">
        <div class="main-container flex flex-col">
            <h2 class="mb-8 font-secondary font-bold text-4xl text-primary text-center">
                PROFILE BUILDING MENTORS
            </h2>
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                        <i class="fa-solid fa-chevron-left text-4xl"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                        <i class="fa-solid fa-chevron-right text-4xl"></i>
                    </button>
                </div>
                <div class="splide__track  py-20">
                    <ul class="splide__list">
                        @foreach ($all_mentor as $mentor)
                            <li class="splide__slide">
                                <div class="splide__slide__container px-4 w-full h-full">
                                    <div class="mentor_card flex flex-col group">
                                        <div class="front w-full h-full rounded-xl shadow-lg overflow-hidden">
                                            <img src="{{ asset('uploaded_files/mentor/' . $mentor->mentor_picture) }}"
                                                alt="{{ $mentor->mentor_alt }}" class="h-full bg-cover bg-center">
                                        </div>
                                        <div
                                            class="back w-full h-full px-10 py-20  flex items-center justify-center rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                                            <div class="flex flex-col items-center">
                                                <div class="mb-8">
                                                    <h5 class="font-secondary font-bold text-xl text-yellow text-center">
                                                        Currently working as:
                                                    </h5>
                                                    <p
                                                        class="font-secondary font-medium text-lg text-white text-center leading-5">
                                                        Co-Founder and COO at Octopus Indonesia
                                                    </p>
                                                </div>
                                                <div>
                                                    <h5 class="font-secondary font-bold text-xl text-yellow text-center">
                                                        Expertise:
                                                    </h5>
                                                    <p
                                                        class="font-secondary font-medium text-lg text-white text-center leading-5">
                                                        Business <br>
                                                        Management Consultant<br>
                                                        Finance/Banking

                                                    </p>
                                                </div>
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
    </section>

    {{-- Bottom Section --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="mb-8 font-secondary font-bold text-4xl text-primary text-center">
                    SIGN UP FOR A FREE INITIAL CONSULTATION
                </h2>
                <a href="#">
                    <span class="px-10 py-2 font-inter font-medium text-base text-white rounded-md bg-yellow">More</span>
                </a>
            </div>
        </div>
    </section>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches

        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            // pagination: isMediumDevice ? true : false,
        });

        splide.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '10px';
                item.button.style.height = '10px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
