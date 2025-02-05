@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/success_stories/success_stories.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/success_stories/success_stories.meta_title') }}" />
    <meta name="description" content="{{ __('pages/success_stories/success_stories.meta_description') }}" />
@endsection

@section('content')
    <!-- {{-- ================================== Banner Section  ================================== --}}
            <section class="pb-4 -z-10">
                <div
                    class="relative flex w-full justify-center left-0 overflow-hidden bg-success-stories-header h-[100vh] pt-44 pb-36 main-container bg-left bg-cover md:bg-center">
                    <div class="flex flex-col justify-center h-full w-3/5">
                        <h1 class="font-bold font-newprimary capitalize text-6xl text-white text-center">
                            {{ __('pages/success_stories/success_stories.title') }}
                        </h1>
                        <p class="mt-5 font-newprimary text-white w-full text-center">
                            {!! __('pages/success_stories/success_stories.desc') !!}
                        </p>
                    </div>
                </div>
            </section> -->

    {{-- ================================== Success Story Section  ================================== --}}
    <section class="py-4">
        <div class="main-container">
            <div class="flex gap-6 items-center justify-center">
                <a href="{{ route('success_stories', ['locale' => app()->getLocale(), 'category' => 'admission-mentoring']) }}"
                    class="font-bold py-1 px-2 {{ $tab_section == 'passion_project'
                        ? 'text-newprimary font-newprimary border-b-2 border-newprimary'
                        : 'bg-newprimary  text-white font-newprimary' }}">Admission
                    Mentoring</a>
                <a href="{{ route('success_stories', ['locale' => app()->getLocale(), 'category' => 'passion-project']) }}"
                    class="font-bold py-1 px-2 {{ $tab_section == 'passion_project'
                        ? 'bg-newprimary  text-white font-newprimary'
                        : 'text-newprimary font-newprimary border-b-2 border-newprimary' }}">Passion
                    Project</a>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="new-main-container">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-7 gap-x-7">
                    @foreach ($success_stories as $item)
                        <div
                            class="flex flex-col gap-6 items-end md:flex-row w-full col-span-1 bg-[#F3F3F3] rounded-2xl p-4">
                            <div class="w-3/4 mx-auto md:w-6/12 h-full rounded-xl overflow-hidden"
                                id="{{ explode(' ', trim($item->name))[0] }}">
                                <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                    alt="{{ $item->thumbnail_alt }}" class="w-full h-full object-cover">
                            </div>
                            <div class="w-full md:w-6/12 h-full">
                                <div class="flex flex-col gap-1 h-full justify-between">
                                    <div class="flex flex-col gap-1 items-start">
                                        {{-- Name --}}
                                        <h2 class="font-bold text-4xl font-newprimary">{{ $item->name }}</h2>
                                        <div class="h-0.5 w-2/5 bg-[#393636]"></div>

                                        {{-- Bedge 1 --}}
                                        <div class="font-newprimary text-newprimary text-base font-semibold leading-tight">
                                            {!! $item->badge_1 !!}
                                        </div>
                                        <div class="mt-2 font-newprimary text-dark">
                                            <ul class="flex flex-col gap-1.5">
                                                @foreach (array_filter(
            array_map(function ($item) {
                return trim(strip_tags($item));
            }, explode('<li>', $item->badge_2)),
        ) as $badge)
                                                    <li
                                                        class="font-newprimary text-dark text-xs font-semibold flex items-center gap-1.5">
                                                        <span
                                                            class="h-3 w-3 p-1 bg-newprimary flex items-center justify-center rounded-full">
                                                            <i class="fa-solid fa-check fa-xs text-white"></i>
                                                        </span>
                                                        <p class="w-full leading-[14px]">{!! $badge !!}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        {{-- Achievement --}}
                                        @if ($tab_section != 'passion_project')
                                            <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->achievement_image) }}"
                                                alt="{{ $item->achievement_alt }}" class="mt-2">
                                        @endif
                                    </div>
                                    <div class="mt-4 flex flex-col gap-1 items-start border border-dark rounded-md p-2">
                                        {{-- Short Description --}}
                                        <div class="font-newprimary text-sm">
                                            {!! Str::limit($item->summary_description, 60) !!}
                                        </div>
                                        {{-- Read More --}}
                                        <button id="open-desc-modal"
                                            class="font-newprimary text-white px-1.5 py-0.5 rounded-[4px] font-normal text-sm inline-flex items-center bg-newprimary">
                                            Read More
                                            <div class="w-4">
                                                <svg fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g data-name="Layer 2">
                                                            <g data-name="arrow-ios-forward">
                                                                <rect width="24" height="24"
                                                                    transform="rotate(-90 12 12)" opacity="0"></rect>
                                                                <path
                                                                    d="M10 19a1 1 0 0 1-.64-.23 1 1 0 0 1-.13-1.41L13.71 12 9.39 6.63a1 1 0 0 1 .15-1.41 1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-32">
                    {{ $success_stories->links('layout.user.pagination') }}
                </div>
            </div>
        </div>


    </section>

    {{-- ================================== Bottom Section  ================================== --}}

    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-3xl text-white text-center md:text-4xl">
                {{ __('pages/success_stories/success_stories.bottom_title') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                title="{{ __('pages/success_stories/success_stories.register_btn') }}" type='secondary' />
        </div>
    </section>


    @foreach ($success_stories as $item)
        <!-- Main modal -->
        <div id="desc-modal"
            class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 z-40 w-full inset-0 h-full max-h-full">
            <div class="w-full h-full backdrop-blur-sm flex justify-center items-center z-50">
                <div class="relative p-4 w-full max-w-3xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-xl font-bold text-dark">
                                {{ $item->name }}
                            </h3>
                            <button type="button" id="close-desc-modal"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="text-base leading-relaxed text-dark">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('script')
    <script>
        const openDescModals = document.querySelectorAll('#open-desc-modal');
        const closeDescModals = document.querySelectorAll('#close-desc-modal');
        const descModals = document.querySelectorAll('#desc-modal');

        descModals.forEach((descModal, index) => {
            openDescModals[index].addEventListener('click', () => {
                descModals[index].classList.add('flex');
                descModals[index].classList.remove('hidden');
            });

            closeDescModals[index].addEventListener('click', () => {
                descModals[index].classList.remove('flex');
                descModals[index].classList.add('hidden');
            });

            descModal.addEventListener('click', () => {
                descModals[index].classList.remove('flex');
                descModals[index].classList.add('hidden');
            });
        });
    </script>
@endpush
