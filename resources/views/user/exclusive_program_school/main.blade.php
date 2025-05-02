@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/exclusive_program_school.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/exclusive_program_school.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/exclusive_program_school.meta_description') }}" />
@endsection

{{-- @section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/exclusive-program-school'],
        [
            'title' => __('pages/programs/admission_accelerator.title'),
            'url' => '/programs/exclusive-program-school/admission-accelerator',
        ],
        [
            'title' => __('pages/programs/experiential_learning.title'),
            'url' => '/programs/exclusive-program-school/experiential-learning',
        ],
        [
            'title' => __('pages/programs/teacher_focused.title'),
            'url' => '/programs/exclusive-program-school/teacher-focused',
        ],
    ]" :active="'general'" title="{{ __('pages/programs/exclusive_program_school.title') }}"
        :string-limit="14" />
@endsection --}}

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-exclusive-program-school-header bg-cover bg-top" id="banner">
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full  justify-center md:justify-end main-container py-[18%] md:pt-[15%] gap-2">
                <h2 class="font-bold text-banner-title text-white text-center uppercase md:pb-[2%]">
                    {{ __('pages/programs/exclusive_program_school.title') }}
                </h2>
                {{-- <!-- <x-registration-form :is-button="true" /> --> --}}
            </div>
        </div>
        <div class="absolute md:bottom-10 left-0 right-0">
            <div class="relative h-full">
                <div
                    class="bg-newprimary mix-blend-multiply visible md:h-28 h-[36vh] absolute md:bottom-[8vh] bottom-0 left-0 right-0">
                </div>
                <div
                    class="w-full main-container mx-auto absolute md:bottom-[8vh] bottom-24 left-0 right-0 h-28 flex items-center">
                    <div class="flex md:flex-row flex-wrap gap-6 justify-evenly items-center w-full">
                        @foreach (__('pages/programs/exclusive_program_school.stats') as $item)
                            <div class="flex flex-col md:w-auto justify-start items-center">
                                <h4 class="font-bold text-white text-2xl md:text-3xl text-center">
                                    {{ $item['title'] }}
                                </h4>
                                <span class="font-bold text-white text-banner-subdescription text-center flex items-center">
                                    {!! $item['tag'] !!}
                                </span>
                                <p class="font-light text-white text-banner-subdescription text-center flex items-center">
                                    {!! $item['comment'] !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-wrap items-start justify-center md:justify-between gap-8 max-w-4xl mx-auto">
                @foreach (__('pages/programs/exclusive_program_school.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center">
                        <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-16 relative">
                                <img data-original="{{ asset('assets/img/exclusive_program_school/' . $item['image']) }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                                <div class="absolute top-0 -right-4">
                                    <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-sm text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-6">{{ $item['title'] }}
                        </h4>
                        <span
                            class="font-newprimary text-base font-normal text-center leading-5">{!! $item['tag'] !!}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Programs Section  ================================== --}}
    {{-- <section class="pb-20 pt-12 bg-[#F6F6F6] shadow-2xl mb-32 flex justify-center">
        <div class="new-main-container flex flex-col items-center gap-4 md:gap-8 md:mx-[150px]">
            <h2 class="text-newprimary text-3xl text-center uppercase font-bold">
                {{ __('pages/programs/exclusive_program_school.program_title') }}</h2>
                <div class="md:-mb-40 flex flex-col lg:flex-row items-center w-full gap-8">
                    @foreach (__('pages/programs/exclusive_program_school.programs') as $item)
                    <div class="flex flex-col w-full lg:w-1/3 my-4">
                        <div class="flex flex-col items-center rounded-2xl shadow-xl py-8 px-6 bg-white">
                            <h3 class="font-bold uppercase text-xl text-center">
                                {!! $item['title'] !!}
                            </h3>
                            <div class="rounded-xl h-44 w-full overflow-hidden my-4">
                                <img src="{{ asset('assets/img/exclusive_program_school/' . $item['image']) }}"
                                alt="EduALL" class="h-full w-full object-cover">
                            </div>
                            <div class="w-full md:h-24">
                                <p class="text-base text-start px-0 leading-5">
                                    {{ $item['sub_title'] }}
                                </p>
                            </div>
                            <div class="w-full lg:h-36">
                                <ul class="mt-4 w-full flex flex-col gap-3">
                                    @foreach ($item['items'] as $point)
                                    <li class="flex justify-center items-start gap-2">
                                        <div
                                        class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-xs text-white"></i>
                                    </div>
                                    <p class="flex-1 text-sm font-newprimary">
                                        {{ $point }}
                                    </p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <x-button
                        href="{{ url(app()->getLocale()) }}/programs/exclusive-program-school/{{ $item['link'] }}"
                        title="{{ __('pages/programs/exclusive_program_school.sub_program_button') }}"
                        bg-color="newprimary" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <section class="py-16 bg-gradient-to-b from-newprimary via-newprimary to-dark">
        <div class="new-main-container">
            <h2 class="text-white text-3xl text-center font-bold">
                {{ __('pages/programs/exclusive_program_school.program_title') }}</h2>
            <div class="splide splides pt-12 max-w-5xl mx-auto" role="group">
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/programs/exclusive_program_school.programs') as $program)
                            <li class="splide__slide w-full pb-8 px-3 rounded-2xl">
                                <div class="splide__slide__container pb-8 h-full w-full">
                                    <div class="flex flex-col items-center rounded-2xl shadow-md py-8 bg-white h-full">
                                        <div class="flex flex-col px-5">
                                            <h3 class="font-bold uppercase md:text-lg text-base text-center">
                                                {!! $program['title'] !!}
                                            </h3>
                                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                                <img data-original="{{ asset('assets/img/exclusive_program_school/' . $program['image']) }}"alt="EduALL"
                                                    class="h-full w-full object-cover">
                                            </div>
                                            <div class="w-full md:h-20">
                                                <p class="text-sm text-justify leading-5">
                                                    {{ $program['body'] }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <ul class="mt-4 w-full flex flex-col">
                                                @foreach ($program['items'] as $item)
                                                    <li class="cursor-pointer flex items-center gap-2 py-2 hover:bg-[#F5F5F5] border-b px-5 pb-2"
                                                        data-program-item="{{ json_encode([
                                                            'title' => $item['title'],
                                                            'desc' => $item['desc'],
                                                            'points' => $item['points'] ?? ($item['point'] ?? []),
                                                            'additional' => $item['additional'] ?? '',
                                                        ]) }}">
                                                        <p
                                                            class="flex-1 text-sm font-newprimary text-newprimary font-semibold">
                                                            {!! $item['title'] !!}
                                                        </p>
                                                        <div
                                                            class="h-4 w-4 bg-[#393636] flex items-center justify-center rounded-full">
                                                            <i class="fa-solid fa-info text-[10px] text-white"></i>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="flex justify-center -mt-12">
                <x-button href="#get-in-touch" title="Let's Collaborate" bg-color="red" class="mb-8" padding-x="12"
                    padding-y="2" hover-bg-color="newprimary" hover-padding-x="20" text-color="white" font="medium"
                    text-size="lg" transition="all duration-150" is-rounded />
            </div>
        </div>
    </section>

    <section class="py-16 bg-dark">
        <div class="new-main-container">
            <div class="flex flex-col md:flex-row gap-6 space-y-8 md:space-y-0">
                <div class="w-full md:w-6/12 flex flex-col items-center md:items-start justify-start gap-4">
                    <h2 class="font-newprimary font-bold text-2xl md:text-4xl mb-4 text-white text-center md:text-left">
                        Our Past Collaboration
                    </h2>
                    <div class="grid grid-rows-3 grid-cols-2 gap-4">
                        <img src="{{ asset('assets/img/exclusive_program_school/past_collaboration/image_1.webp') }}"
                            alt="Collaboration 1" class="w-full h-auto object-cover row-span-2">
                        <img src="{{ asset('assets/img/exclusive_program_school/past_collaboration/image_2.webp') }}"
                            alt="Collaboration 2" class="w-full h-auto object-cover">
                        <img src="{{ asset('assets/img/exclusive_program_school/past_collaboration/image_3.webp') }}"
                            alt="Collaboration 3" class="w-full h-auto object-cover">
                        <img src="{{ asset('assets/img/exclusive_program_school/past_collaboration/image_4.webp') }}"
                            alt="Collaboration 4" class="w-full h-auto object-cover">
                        <img src="{{ asset('assets/img/exclusive_program_school/past_collaboration/image_5.webp') }}"
                            alt="Collaboration 5" class="w-full h-auto object-cover">
                    </div>
                </div>
                <div id="get-in-touch"
                    class="w-full md:w-6/12 flex flex-col items-center md:items-start justify-start gap-4">
                    <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-white ml-4 text-center md:text-left">
                        Get In Touch
                    </h2>
                    <h2 class="font-newprimary font-bold text-xl md:text-lg text-white ml-4 text-center md:text-left">
                        Let us know you better by filling out this form
                    </h2>
                    <div class="bg-[#EAEAEA] py-8 px-10 rounded-xl shadow-2xl w-full">
                        <form action="{{ route('submit_partnership', ['locale' => 'id-en', 'slug' => 'school']) }}"
                            method="POST" id="myForm">
                            @csrf
                            <div class="">
                                <div class="flex flex-col">
                                    <div class="mb-3">
                                        <label for="primary_name" class="text-dark text-sm py-2">Full Name</label>
                                        <input type="text" name="fullname"
                                            class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                            placeholder="Full Name *" id="primary_name" required>
                                    </div>
                                    <div class="flex gap-4 flex-col md:flex-row">
                                        <div class="md:mb-3 w-full md:w-1/2">
                                            <label for="company_name" class="text-dark text-sm py-2">
                                                School Name
                                            </label>
                                            <input type="text" name="company_name"
                                                class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                placeholder="School Name *" id="company_name" required>
                                        </div>
                                        <div class="mb-3 w-full md:w-1/2">
                                            <label for="position" class="text-dark text-sm py-2">Position</label>
                                            <input type="text" name="position"
                                                class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                placeholder="Position *" id="position" required>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 flex-col md:flex-row">
                                        <div class="md:mb-3 md:w-1/2">
                                            <label for="email" class="text-dark text-sm py-2">Email</label>
                                            <input type="email" name="email"
                                                class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                placeholder="Email *" id="email" required>
                                        </div>
                                        <div class="mb-3 md:w-1/2">
                                            <label for="phone_number" class="text-dark text-sm py-2">Phone
                                                Number</label>
                                            <input type="text"
                                                class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                                                placeholder="Phone Number *" id="phone_number" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inquiry" class="text-dark text-sm py-2">Inquiry</label>
                                        <textarea class="md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full" placeholder="Inquiry *"
                                            id="inquiry" name="inquiry" rows="4" required></textarea>
                                    </div>
                                    <div class="flex justify-center mb-3">
                                        <div class="text-center">
                                            <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                                            <span id="captcha" class="text-red" />
                                        </div>
                                    </div>
                                    <div class="mb-3 flex items-center justify-center">
                                        <button type="button" class="max-w-max bg-red text-white text-center py-2 px-20"
                                            onclick="submitData()">
                                            <span id="loading" class="hidden">
                                                <i class="fas fa-spinner fa-spin mr-4"></i>
                                            </span>
                                            Collaborate Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div id="thanksForm" class="hidden">
                            <div class="flex flex-col justify-center">
                                <h4 class="mb-4 mt-4 text-newprimary font-bold text-center text-lg leading-6">
                                    Thank you for letting us know a little bit about you! Our partnership team will contact
                                    you in 24 hours for further collaboration
                                </h4>
                                <a href="{{ route('home', app()->getLocale()) }}"
                                    class="flex justify-center w-full pt-4">
                                    <span
                                        class="block px-4 py-2 rounded-sm bg-red font-newprimary font-semibold text-base text-white text-center">
                                        Back to Home
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- ================================== COLLABORATE Section ================================== --}}
    {{-- <section class="pt-16 pb-20 bg-dark">
        <div class="new-main-container">
            <h2 class="font-newprimary font-bold text-center text-2xl md:text-4xl mb-4">
                {{ __('pages/programs/exclusive_program_school.collaborate') }}
            </h2>

            <div class="flex flex-wrap gap-8 justify-center items-stretch">
                @foreach (__('pages/programs/exclusive_program_school.collaborate_item') as $item)
                    <x-collaborate-card :title="$item['title']" :image="$item['image']" :description="$item['description']" />
                @endforeach
            </div>
        </div>
    </section> --}}

    {{-- ================================== Testimonial Section ================================== --}}
    @if ($testimonies)
        <section class="pt-16 pb-20">
            <div class="main-container">
                <h2 class="font-newprimary font-bold text-center text-4xl mb-4">
                    {{ __('pages/programs/exclusive_program_school.what_they_say') }}
                </h2>
                <div class="splide" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                            <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                            <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list font-newprimary text-black px-8">
                            @foreach ($testimonies as $testi)
                                <li class="splide__slide w-full pb-8">
                                    <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                        <x-testimonial-card :testimonial=$testi />
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- ================================== CTA Section ================================== --}}
    {{-- <section class="pt-16 pb-20">
        <div class="main-container flex items-center justify-center">
            <a href="https://wa.me/+6287888827686" target="_blank"
                class="px-8 md:px-16 py-5 font-semibold font-newprimary text-lg md:text-xl text-white text-center bg-newprimary hover:scale-105 transition-all duration-150">
                {{ __('pages/programs/exclusive_program_school.cta_button') }}
            </a>
        </div>
    </section> --}}

    <!-- Modal -->
    <div id="infoModal"
        class="fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm hidden items-center justify-center z-50">
        <div class="bg-[#EAEAEA] p-6 rounded-lg shadow-lg md:max-w-5xl w-full mx-4 relative">
            <h2 id="modalTitle" class="text-2xl font-bold mb-4 max-w-xs"></h2>
            <p id="modalDesc" class="mb-4 text-sm"></p>
            <div id="modalPoints" class="text-sm">
                <ul class="list-disc gap-2 flex flex-col"></ul>
            </div>
            <div id="modalAdditional"></div>
            <button onclick="closeModal()"
                class="mt-4 bg-newprimary text-white rounded-full hover:bg-opacity-90 absolute top-2 right-4">
                <div class="h-6 w-6 flex items-center justify-center rounded-full">
                    <i class="fa-solid fa-close text-[12px] text-white"></i>
                </div>
            </button>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var splides = document.getElementsByClassName('splide');


        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
            perMove: 1,
            arrows: false,
            lazyload: false,
            autoplay: true,
            interval: 4000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();

        new Splide(splides[1], {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 3000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();

        function openModal(item) {
            const modal = document.getElementById('infoModal');
            const title = document.getElementById('modalTitle');
            const desc = document.getElementById('modalDesc');
            const pointsList = document.getElementById('modalPoints').querySelector('ul');
            const additional = document.getElementById('modalAdditional');

            title.textContent = item.title;
            desc.textContent = item.desc;

            // Clear existing points
            pointsList.innerHTML = '';

            // Add points if they exist
            if (item.points && item.points.length > 0) {
                item.points.forEach(point => {
                    const li = document.createElement('li');
                    li.className = 'flex items-start gap-2';
                    const icon = document.createElement('div');
                    icon.className = 'h-5 w-5 bg-newprimary flex items-center justify-center rounded-full';
                    icon.innerHTML = '<i class="fa-solid fa-check text-xs text-white"></i>';
                    const text = document.createElement('p');
                    text.className = 'flex-1 text-sm font-newprimary';
                    text.textContent = point;
                    li.appendChild(icon);
                    li.appendChild(text);
                    pointsList.appendChild(li);
                });
            }

            if (item.additional != "") {
                additional.innerHTML = item.additional;
            } else {
                additional.innerHTML = "";
            }

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            document.getElementById('infoModal').classList.add('hidden');
            document.getElementById('infoModal').classList.remove('flex');
        }

        // Add event listener to list items
        document.querySelectorAll('.cursor-pointer').forEach(item => {
            item.addEventListener('click', function() {
                const itemData = JSON.parse(this.dataset.programItem);
                openModal(itemData);
            });
        });
    </script>
@endpush

@push('style')
    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };

        const checkCaptcha = () => {
            var v = grecaptcha.getResponse();

            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
                return false;
            } else {
                return true
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
            }
        }

        const submitData = () => {
            const inputs = document.querySelectorAll('#myForm input, #myForm textarea');
            let isValid = true;

            // Loop through inputs and check for validation
            inputs.forEach(function(input) {
                if (input.required && !input.value && input.value != ' ' && !input.classList.contains(
                        'hidden')) {

                    isValid = false;
                    input.setCustomValidity('Please fill in required fields');
                    input.classList.add('border-red'); // Add red border to invalid inputs (optional)
                    input.classList.remove('border-none'); // Remove green border if any
                } else {
                    input.setCustomValidity('');
                    input.classList.remove('border-red');
                    input.classList.add('border-none');
                }
            });

            if (isValid) {
                const captcha = checkCaptcha();
                if (captcha) {
                    document.getElementById('myForm').submit();
                }
            }
        }
    </script>
@endpush
