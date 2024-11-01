@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/resources/upcoming_events.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/resources/upcoming_events.meta_title') }}" />
    <meta name="description" content="{{ __('pages/resources/upcoming_events.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="bg-upcomming-header bg-bottom bg-cover bg-fixed">
        <div class="py-20 lg:bg-transparent bg-newprimary/70 h-[100vh]">
            <div class="main-container h-full">
                <div class="flex items-center h-full justify-center">
                    <div class="flex-row">
                        <h1 class="mb-4 font-bold font-newnewprimary text-4xl lg:text-6xl text-white text-center">
                            {{ __('pages/resources/upcoming_events.title') }}
                        </h1>
                        <p
                            class="font-newprimary font-light text-lg text-white text-center leading-6 mb-5 md:text-xl">
                            {{ __('pages/resources/upcoming_events.body') }}
                        </p>
                        <div class="flex justify-center">
                            <a href="{{ asset('assets/files/upcoming-event/2024_merchandise_calendar_pdf.pdf') }}"
                                target="_blank" class="mt-5">
                                <span class="px-6 py-2 font-newprimary font-semibold text-base text-white bg-red shadow-md">
                                    <i class="fa-solid fa-file-pdf mr-2"></i>
                                    {{ __('pages/resources/upcoming_events.btn') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Events Section  ================================== --}}
    <section class="py-10">
        <div class="main-container">
            <h2 class="lg:text-4xl text-2xl text-start mb-5">Upcoming Events</h2>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-1 lg:grid-cols-3">
                @foreach ($events as $event)
                    <a href="{{ $event->event_rsvp_link }}" class="cursor-pointer" target="_blank">
                        <img src="{{ asset('uploaded_files/upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                            alt="{{ $event->event_alt }}" class="object-cover w-full h-full">
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="main-container">
            <h2 class="lg:text-4xl text-2xl text-start mb-5">Talk Sessions</h2>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-1 lg:grid-cols-2">
                @foreach ($talks as $regular_talk)
                    <a href="{{ $regular_talk->event_rsvp_link }}" class="cursor-pointer" target="_blank">
                        <div class="relative">
                            <img src="{{ asset('uploaded_files/upcoming-event/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $regular_talk->event_thumbnail) }}"
                                alt="{{ $regular_talk->event_alt }}" class="w-full object-cover object-center h-72">

                            <div class="absolute top-0 left-5 h-60">
                                <div class="flex flex-col justify-end h-full mt-8">
                                    <h4 class="font-newprimary text-newyellow text-lg">
                                        {{ $regular_talk->event_date }}</h4>
                                    <h4 class="font-newprimary text-white text-2xl font-bold mb-0">
                                        {{ html_entity_decode(substr(strip_tags($regular_talk->event_title), 0, 80)) }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Modal Detail Section  ================================== --}}
    {{-- <section class="event__detail--wrapper hidden fixed top-0 left-0 w-screen h-screen z-40">
        <div class="flex justify-center items-center w-full h-full bg-black/70">
            <div class="flex flex-col w-full max-w-3xl mx-6 bg-white rounded-md overflow-hidden z-50 ">
                <div class="flex justify-between items-center px-6 py-4 bg-[#4054b2]">
                    <h5 class="font-newprimary font-semibold text-lg text-white">{{ $event->event_title }}
                    </h5>
                    <div class="event__detail--close text-white text-2xl cursor-pointer"><i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <div class="px-6 py-4 font-newprimary text-base text-[#7e7e7e] leading-7 bg-white">
                    {!! $event->event_detail !!}
                </div>
            </div>
        </div>
    </section> --}}

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="pt-10 pb-28">
        <div class="flex flex-col items-center main-container">
            <h1 class="mb-4 font-newprimary font-semibold text-2xl text-newprimary text-center">
                {{ __('pages/resources/upcoming_events.bottom_title') }}
            </h1>
            <x-button href="{{ route('contact_us', ['locale' => app()->getLocale()]) }}"
                title="{{__('pages/resources/upcoming_events.bottom_btn') }}" type='secondary' bg-color="red" />
        </div>
    </section>
@endsection

@push('script')
    <script>
        const event_detail_wrapper = document.querySelectorAll('.event__detail--wrapper');
        const event_detail_btn = document.querySelectorAll('.event__detail--btn');
        const event_detail_close = document.querySelectorAll('.event__detail--close');

        event_detail_btn.forEach((el, it) => {
            el.addEventListener('click', () => {
                event_detail_wrapper[it].classList.remove('hidden')
            })

            event_detail_wrapper[it].addEventListener('click', () => {
                event_detail_wrapper[it].classList.add('hidden')
            })
            event_detail_close[it].addEventListener('click', () => {
                event_detail_wrapper[it].classList.add('hidden')
            })
        });
    </script>
@endpush
