@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-20 bg-sg-header bg-cover bg-center">
        <div class="main-container">
            <div class="py-28 flex flex-col items-center md:py-52">
                <img src="{{ asset('assets/logo/allin-big.png') }}" class="w-full max-w-sm">
            </div>
        </div>
    </section>

    {{-- ================================== Descrtiption & List Section  ================================== --}}
    <section class="py-16">
        <div class="flex flex-col items-center main-container">
            <div class="flex flex-col max-w-4xl mt-10 gap-y-4">
                <p class="font-secondary text-xl text-primary text-center">ALL-in Eduspace is an independent
                    university consultant specializing in developing hands-on exploration programs and university
                    preparation advising for students age 13-18.
                </p>
                <p class="font-secondary text-xl text-primary text-center">
                    We provide real-life experiences and professional skills needed, networking opportunities with
                    professionals in various fields, project mentoring, and up to university application preparation.
                </p>
                <p class="font-secondary text-xl text-primary text-center">
                    We help students explore their dream career paths, equipping them with the industry skills that they
                    need to thrive whilst also fostering an awareness of the impact they could have on the community.
                </p>
            </div>
            <div class="flex flex-col gap-y-8 max-w-4xl mt-20">
                <div class="flex flex-col items-center px-16 py-8 rounded-xl bg-primary md:flex-row">
                    <h4 class="mb-6 font-primary font-semibold text-4xl text-[#6696E2] lext-right md:w-1/3 ">
                        All-Around Exploration
                    </h4>
                    <p class="font-primary text-base text-white md:w-2/3">
                        We understand that students are unique in their own interests, especially in their teenage years. We
                        want them to explore these interests broadly by having them engage in workshops that explore various
                        careers and industries, then deepen their understanding of these industries through internships,
                        academic research projects, competitions, or community service activities with our SMEs and start-up
                        partners.
                    </p>
                </div>

                <div class="flex flex-col items-center px-16 py-8 rounded-xl bg-primary md:flex-row">
                    <h4 class="mb-6 font-primary font-semibold text-4xl text-[#6696E2] lext-right md:w-1/3 ">
                        Diverse Area of Expertise
                    </h4>
                    <p class="font-primary text-base text-white md:w-2/3">
                        Our team is localized with relevant first-hand knowledge of various education curricula. We have
                        been there done that. We understand students’ concerns of competing on an international stage. We
                        know how to supplement their educational experiences and bridge the gap.
                    </p>
                </div>

                <div class="flex flex-col items-center px-16 py-8 rounded-xl bg-primary md:flex-row">
                    <h4 class="mb-6 font-primary font-semibold text-4xl text-[#6696E2] lext-right md:w-1/3 ">
                        Long-Term Results
                    </h4>
                    <p class="font-primary text-base text-white md:w-2/3">
                        Our mentors provide insight on the skills, experiences, and industry knowledge students need beyond
                        their academic pursuit. This way, not only do we help students confirm their interests, establish
                        career goals, and find the right university major for them, but we also help them build a profile
                        that stands out for their university applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Team ================================== --}}
    <section class="pt-10 pb-10">
        <div class="main-container flex flex-col">
            <h2 class="mb-2 font-secondary font-black text-4xl text-primary text-center">
                Our Team
            </h2>
            <div class="w-full max-w-7xl px-10 py-10">
                <div class="splide" role="group">
                    <div class="splide__arrows">
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
                                                    class="absolute left-0 bottom-0 pl-6 pb-3  flex flex-col justify-between h-[30%] z-20 lg:pl-3">
                                                    <h3
                                                        class="h-2/3 font-inter font-bold text-2xl text-white leading-7 lg:text-xl lg:leading-5">
                                                        {{ $mentor->mentor_firstname }} <br>
                                                        {{ $mentor->mentor_lastname }}
                                                    </h3>
                                                    <div
                                                        class="mentor_graduation h-1/3 font-inter text-[10px] text-white leading-4 lg:leading-3">
                                                        {!! $mentor->mentor_graduation !!}
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploaded_files/mentor/' . $mentor->mentor_picture) }}"
                                                    alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center">
                                            </div>
                                            <div
                                                class="back overflow-hidden flex justify-center items-center w-full p-2 rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                                                <div class="flex flex-col items-center justify-center">
                                                    <div
                                                        class="mb-6 w-full h-full font-secondary font-medium text-sm text-white text-justify text-ellipsis ">
                                                        {{ html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 60)) }}...

                                                    </div>
                                                    <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                                                        class="px-4 py-2 flex-inline font-inter font-medium text-xs text-white text-center rounded-lg bg-yellow">
                                                        Get to know {{ $mentor->mentor_firstname }}
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
@endsection

@section('script')
    <script>
        const questions = document.querySelectorAll('#question');
        const answers = document.querySelectorAll('#answer');


        // slider
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : 4,
            perMove: 1,
            focus: 0,
            autoplay: true,
            lazyload: true,
            interval: 5000,
            pagination: false,
        }).mount();
    </script>
@endsection