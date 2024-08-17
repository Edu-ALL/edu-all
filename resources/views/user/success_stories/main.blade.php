@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/success_stories/success_stories.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/success_stories/success_stories.meta_title') }}" />
    <meta name="description" content="{{ __('pages/success_stories/success_stories.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-4 -z-10">
        <div
            class="relative flex w-full left-0 overflow-hidden bg-success-stories-header pt-44 pb-36 main-container bg-left bg-cover md:bg-center">
            <div class="flex flex-col justify-center h-full">
                <h1 class="font-bold font-newprimary capitalize text-6xl text-white text-center md:text-left">
                    {{ __('pages/success_stories/success_stories.title') }}
                </h1>
                <p class="mt-5 font-newprimary font-semibold text-sm text-white max-w-lg text-center md:text-left">
                    {!! __('pages/success_stories/success_stories.desc') !!}
                </p>
            </div>
        </div>
    </section>

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
        <div class="main-container">
            <div class="flex flex-col gap-y-16">
                @foreach ($success_stories as $item)
                    <div class="flex flex-col gap-9 items-end md:flex-row">
                        <div class="w-3/4 mx-auto md:w-5/12">
                            <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                alt="{{ $item->thumbnail_alt }}">
                        </div>
                        <div class="w-full md:w-7/12">
                            <div class="flex flex-col gap-1 items-start">
                                {{-- Name --}}
                                <h2 class="font-bold text-5xl font-newprimary">{{ $item->name }}</h2>
                                {{-- Bedge 1 --}}
                                <div class="font-newprimary text-newprimary text-base font-bold">
                                    {!! $item->badge_1 !!}
                                </div>
                                {{-- Bedge 2 --}}
                                <div class="mt-4 font-newprimary text-newprimary text-base">
                                    {!! $item->badge_2 !!}
                                </div>
                                {{-- Achievement --}}
                                @if ($tab_section != 'passion_project')
                                    <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->achievement_image) }}"
                                        alt="{{ $item->achievement_alt }}">
                                @endif
                                {{-- Short Description --}}
                                <div class="mt-4 font-newprimary text-base">
                                    {!! $item->summary_description !!}
                                </div>
                                {{-- Read More --}}
                                <button id="open-desc-modal"
                                    class="font-newprimary text-newprimary font-bold inline-flex items-center">
                                    Read More
                                    <div class="w-5">
                                        <svg fill="#120FFD" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrow-ios-forward">
                                                        <rect width="24" height="24" transform="rotate(-90 12 12)"
                                                            opacity="0"></rect>
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
                @endforeach
            </div>

            <div class="mt-32">
                {{ $success_stories->links('layout.user.pagination') }}
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
                title="{{__('pages/success_stories/success_stories.register_btn') }}" type='secondary' />
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
