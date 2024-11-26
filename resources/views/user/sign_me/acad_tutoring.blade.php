@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/sign_me/acad_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/sign_me/acad_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/sign_me/acad_tutoring.meta_description') }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JXRKLPRKWF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-JXRKLPRKWF');
        // gtag('config', 'AW-329409030')
    </script>
    
    <!-- Event snippet for Admission-id Leads conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {            
            gtag('event', 'Conversion - Tutoring', {
                'send_to': 'AW-329409030/llL7CPKF0pgYEIbEiZ0B',
                // 'event_callback': callback
            });
            
            return false;
        }
    </script>
@endsection

@section('content')
    <section class="py-16 bg-sign-me-banner bg-cover bg-center">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">
            <div class="flex flex-col justify-between pt-10 pb-6">
                <h2 class="font-newprimary text-3xl md:text-4xl font-bold text-white">
                    WHAT’S NEXT?
                </h2>
                <p class="mt-4 w-full font-newprimary text-lg text-white md:max-w-lg">
                    <span class="block font-bold mb-3">Prepare, Achieve, Flourish Together with EduALL!</span>
                    Let’s find out how to maximize your academic performance with our Academic Tutoring programs FREE trial. Our expert and professional tutors will help you through them all!
                </p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">
            <div class="grid grid-cols-1 gap-x-6 md:grid-cols-7">
                <div class="flex flex-col w-full md:col-span-3">
                    <div class="mb-6 flex flex-col gap-x-10">
                        <h4 class="font-newprimary font-bold text-2xl text-newprimary">
                            What you will earn in the free trial:
                        </h4>
                        <ul class="mt-4 font-newprimary text-lg text-black">
                            <li class="flex">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span>
                                    Big picture of what you will face in your dream universities’ application process and how your academic performance will affect them
                                </span>
                            </li>
                            <li class="flex">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span>
                                    Personalized assessment of strengths and areas of improvement on your profile
                                </span>
                            </li>
                            <li class="flex justify-start">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span class="w-full">
                                    Your needs and how EduALL can help you professionally
                                </span>
                            </li>
                            <li class="flex">
                                <i class="fa-solid fa-check text-newprimary mt-1 mr-2"></i>
                                <span>
                                    Recommendation and timeline on the next action to take for your application
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-x-10">
                        <h4 class="mb-6 font-newprimary font-bold text-2xl text-newprimary">
                            Your current profile will be assessed based on:
                        </h4>
                        <img data-original="{{ asset('assets/img/sign-me/four-pillars.webp') }}" alt="four pillars">
                    </div>
                </div>
                <div class="md:col-span-4">
                    {{-- Emmbed Form --}}
                    <div class="w-full">
                      @include('layout.user.external-form.registration', ['prog_id' => 'ACADX', 'extClass' => '', 'scrolling' => 'no', 'height' => 1000, 'width' => '95%'])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="flex flex-col main-container">
            <h4 class="font-newprimary font-bold text-2xl text-newprimary">
                FAQ
            </h4>
            <div class="mt-4 w-full">
                <ul class="flex flex-col gap-y-4">
                    @foreach (__('pages/sign_me/acad_tutoring.qna_list') as $item)
                        <li class="flex flex-col w-full rounded-[10px] bg-[#F2F7FF] overflow-hidden">
                            <div id="question"
                                class="flex justify-between items-center cursor-pointer px-4 py-2 rounded-[10px]">
                                <h4 class="mr-4 font-newprimary font-semibold text-xl text-newprimary">
                                    {{ $item['question'] }}
                                </h4>
                                <i class="fa-solid fa-chevron-down text-xl text-newprimary mr-3"></i>
                            </div>
                            <div id="answer"
                                class="max-h-0 px-4 invisible overflow-hidden transition-all ease-linear duration-1000">
                                <p class="font-newprimary py-5 text-lg text-newprimary">
                                    {!! $item['answer'] !!}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        const questions = document.querySelectorAll('#question');
        const answers = document.querySelectorAll('#answer');
        const answers_texts = document.querySelectorAll('#question h4');
        const answers_icons = document.querySelectorAll('#question i');

        let old = 0;

        questions.forEach((question, it) => {
            question.addEventListener('click', () => {
                answers[old].classList.add('max-h-0');
                answers[old].classList.remove('duration-[1s]');
                answers[old].classList.add('duration-500');
                answers[old].classList.remove(`max-h-[400px]`);
                answers[old].classList.add('invisible');
                questions[old].classList.remove('bg-[#EAB91F]');

                answers[it].classList.remove('max-h-0');
                answers[it].classList.add(`max-h-[400px]`);
                answers[it].classList.add('duration-[1s]');
                answers[it].classList.remove('duration-500');
                answers[it].classList.remove('invisible');
                questions[it].classList.add('bg-[#EAB91F]');
                old = it;
            })
        })
    </script>
@endpush
