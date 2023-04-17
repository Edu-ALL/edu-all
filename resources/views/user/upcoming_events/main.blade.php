@extends('layout.user.main')

@section('head')
    @if (app()->getLocale() == 'id-en')
        <title>Upcoming Events: Join ALL-in Eduspace for Education and Career Insights</title>
        <meta name="title" content="Upcoming Events: Join ALL-in Eduspace for Education and Career Insights" />
    @elseif (app()->getLocale() == 'id-id')
        <title>Event Mendatang: Bergabunglah dengan ALL-in Eduspace untuk Wawasan Pendidikan dan Karir</title>
        <meta name="title" content="Event Mendatang: Bergabunglah dengan ALL-in Eduspace untuk Wawasan Pendidikan dan Karir" />
    @else
        <title>Upcoming Events: Join ALL-in Eduspace for Education and Career Insights</title>
        <meta name="title" content="Upcoming Events: Join ALL-in Eduspace for Education and Career Insights" />
    @endif
	<meta name="description" content="You have dreams entering world top uni? Check this page &amp; participate to our free &amp; premium events &amp; bootcamps." />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="bg-upcomming-header bg-bottom bg-cover bg-fixed">
        <div class="py-20 bg-primary/70">
            <div class="main-container">
                <div class="flex flex-col items-center">
                    <h1 class="mb-4 font-primary font-semibold text-4xl text-white text-center">
                        {{ __('pages/resources/upcoming_events.title') }}
                    </h1>
                    <p class="font-primary font-light text-lg text-white text-center leading-6 md:text-xl">
                        {{ __('pages/resources/upcoming_events.body') }}
                    </p>
                    <a href="{{ asset('assets/files/upcoming-event/ALL IN CALENDAR 2023 WEB.pdf') }}" target="_blank"
                        class="my-6"><span
                            class="px-6 py-2 font-primary font-semibold text-base text-white bg-yellow rounded-[4px]"><i
                                class="fa-solid fa-file-pdf mr-2"></i> {{ __('pages/resources/upcoming_events.btn') }}
                        </span></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Events Section  ================================== --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col gap-y-4">
                @foreach ($events as $event)
                    {{-- ================================== Modal Detail Section  ================================== --}}
                    <section class="event__detail--wrapper hidden fixed top-0 left-0 w-screen h-screen z-40">
                        <div class="flex justify-center items-center w-full h-full bg-black/70">
                            <div class="flex flex-col w-full max-w-3xl mx-6 bg-white rounded-md overflow-hidden z-50 ">
                                <div class="flex justify-between items-center px-6 py-4 bg-[#4054b2]">
                                    <h5 class="font-primary font-semibold text-lg text-white">{{ $event->event_title }}
                                    </h5>
                                    <div class="event__detail--close text-white text-2xl cursor-pointer"><i
                                            class="fa-solid fa-xmark"></i></div>
                                </div>
                                <div class="px-6 py-4 font-primary text-base text-[#7e7e7e] leading-7 bg-white">
                                    {!! $event->event_detail !!}
                                </div>
                            </div>
                        </div>
                    </section>

                    <div
                        class="px-12 py-6 flex flex-col items-stretch gap-8 @if ($loop->iteration % 2 == 0) bg-yellow @else bg-primary @endif md:flex-row">
                        <div class="flex justify-center items-center w-full md:w-1/6">
                            <h4 class="font-primary font-semibold text-2xl text-white text-center">{{ $event->event_date }}
                            </h4>
                        </div>
                        <img data-original="{{ asset('uploaded_files/upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                            alt="{{ $event->event_alt }}" class="w-full object-contain md:w-1/6">
                        <div class="flex flex-col justify-between gap-3 w-full py-4 md:w-4/6">
                            <h2 class="font-primary font-semibold text-3xl text-white text-center md:text-left">
                                {{ $event->event_title }}</h2>
                            <div class="font-primary font-light text-lg text-white text-center md:text-left">
                                {!! $event->event_subtitle !!}</div>
                            <div class="flex flex-col gap-x-4 gap-y-6 mt-2 mb-2 items-center md:flex-row">
                                <div class="event__detail--btn cursor-pointer"><span
                                        class="px-6 py-3 font-primary font-medium text-base text-white bg-[#4abf5a] rounded-[4px]">Click
                                        for more info <i class="fa-regular fa-note-sticky ml-2"></i></span></div>
                                @if ($event->event_rsvp_link != null)
                                    <a href="{{ $event->event_rsvp_link }}" target="_blank"><span
                                            class="px-6 py-3 font-primary font-medium text-base text-white bg-[#4abf5a] rounded-[4px]">RSVP
                                            <i class="fa-regular fa-circle-right ml-2"></i></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="pt-10 pb-28">
        <div class="flex flex-col items-center main-container">
            <h1 class="mb-4 font-primary font-semibold text-2xl text-yellow text-center">
                {{ __('pages/resources/upcoming_events.bottom_title') }}
            </h1>
            <a href="{{ route('contact_us', ['locale' => app()->getLocale()]) }}"><span
                    class="px-6 py-2 font-primary font-semibold text-base text-white bg-yellow rounded-[4px]">
                    {{ __('pages/resources/upcoming_events.bottom_btn') }}
                </span></a>
        </div>
    </section>
@endsection

@section('script')
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
@endsection
