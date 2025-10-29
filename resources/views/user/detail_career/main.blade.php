@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => route('about', [app()->getLocale()])],
            ['name' => 'Careers', 'url' => route('partnership_careers', [app()->getLocale()])],
            ['name' => $career->job_position, 'url' => url()->current()],
        ];
    @endphp
    <title>{{ __('pages/about_us/careers.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/careers.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/careers.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :active="__('pages/navbar.about_us.submenu.2.title')" title="{{ __('pages/about_us/careers.title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-career-banner bg-cover bg-top" id="banner">
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div
                class="flex flex-col h-full items-center md:items-center justify-center md:justify-end main-container md:pb-[18vh] md:pt-[15%] gap-2">
                <h1 class="font-bold text-banner-title text-white text-center">
                    {{ __('pages/about_us/careers.tag') }}
                </h1>
                <h2 class="font-medium text-lg text-white text-center mt-2">
                    {{ __('pages/about_us/careers.body') }}
                </h2>
            </div>
        </div>
    </section>

    {{-- ================================== Career Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container">
            <div class="grid grid-cols-12 gap-8 w-full">
                <div class=" col-span-12 md:col-span-8">
                    <h4 class="font-bold text-3xl flex w-full justify-start text-dark md:text-5xl">
                        {{ $career->job_position }}
                    </h4>

                    <div class="flex flex-col w-full mt-16">
                        <h3
                            class="font-bold text-2xl text-newprimary md:text-2xl w-full text-left border-b border-b-black pb-2">
                            About the Role</h3>
                        <div class="text-dark text-sm md:text-base py-4 blog_style">
                            {!! $career->about_the_role !!}
                        </div>
                    </div>

                    <div class="flex flex-col w-full mt-4">
                        <h3
                            class="font-bold text-2xl text-newprimary md:text-2xl w-full text-left border-b border-b-black pb-2">
                            Job Description</h3>
                        <div class="text-dark text-sm md:text-base py-4 blog_style">
                            {!! $career->job_description !!}
                        </div>
                    </div>

                    <div class="flex flex-col w-full mt-4">
                        <h3
                            class="font-bold text-2xl text-newprimary md:text-2xl w-full text-left border-b border-b-black pb-2">
                            Requirements</h3>
                        <div class="text-dark text-sm md:text-base py-4 blog_style">
                            {!! $career->requirements !!}
                        </div>
                    </div>

                    {{-- <div class="flex flex-col w-full mt-4 items-center justify-center gap-4">
                        <span class="text-center text-dark">If you're interested in this position, please submit your CV to
                            <a href="mailto:careers@edu-all.com" class="text-newprimary">careers@edu-all.com</a> with the
                            subject
                            line: <br> Full Name_Position</span>
                        <a href="mailto:careers@edu-all.com"
                            class="inline-flex items-center text-red gap-2 text-sm border border-newprimary rounded-full px-5 py-1.5 hover:bg-white/10 transition-colors duration-300">
                            Apply Here
                            <i class="fa-solid fa-chevron-right text-red"></i>
                        </a>
                    </div> --}}

                    <div class="w-full mt-12">
                        <a href="{{ route('partnership_careers', app()->getLocale()) }}"
                            class="flex items-center text-newprimary hover:text-newprimary-dark transition-colors duration-300 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Careers
                        </a>
                    </div>

                </div>

                <div class="col-span-12 md:col-span-4">
                    <form
                        action="{{ route('submit_job_applicant', ['locale' => app()->getLocale(), 'slug' => $career->slug]) }}"
                        method="POST" enctype="multipart/form-data"
                        class="max-w-2xl mx-auto bg-primary p-8 rounded-lg shadow-md space-y-3">
                        @csrf

                        <h2 class="text-2xl font-semibold text-white pb-5">Job Application Form</h2>

                        <!-- Job ID -->
                        <input type="number" name="job_id" id="job_id" value="{{ $career->id }}" hidden>

                        <input type="text" name="utm_code" value="{{ old('utm_code', Request::get('utm_code')) }}" hidden>

                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-white mb-1">
                                Full Name <span class="text-red">*</span>
                            </label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm"
                                required>

                            @error('name')
                                <p class="text-red text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-white mb-1">
                                Email <span class="text-red">*</span>
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm"
                                required>

                            @error('email')
                                <p class="text-red text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-white mb-1">
                                Phone Number <span class="text-red">*</span>
                            </label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm">

                            @error('phone')
                                <p class="text-red text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- CV Upload -->
                        <div>
                            <label for="cv_path" class="block text-sm font-medium text-white mb-1">
                                Upload CV <span class="text-red">*</span>
                            </label>
                            <input type="file" name="cv_path" id="cv_path" accept=".pdf,.doc,.docx"
                                class="w-full text-sm text-white border border-gray-300 rounded-md
               file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0
               file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700
               hover:file:bg-indigo-100"
                                required>

                            @error('cv_path')
                                <p class="text-red text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <hr class="border-gray-300 my-6">

                        <!-- Screening Questions -->
                        <div class="space-y-6">
                            @if ($career->screen_question_1)
                                <div>
                                    <label for="screen_question_1" class="block text-sm font-medium text-white mb-1">
                                        {{ $career->screen_question_1 }} <span class="text-red">*</span>
                                    </label>

                                    <!-- Hidden field to store the question text -->
                                    <input type="text" name="screen_question_1" id="screen_question_1"
                                        value="{{ old('screen_question_1', $career->screen_question_1) }}" hidden>

                                    <div class="mt-2 flex items-center space-x-4">
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="screen_answer_1" value="Yes"
                                                class="text-indigo-600 focus:ring-indigo-500"
                                                {{ old('screen_answer_1') === 'yes' ? 'checked' : '' }}>
                                            <span class="text-white">Yes</span>
                                        </label>
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="screen_answer_1" value="No"
                                                class="text-indigo-600 focus:ring-indigo-500"
                                                {{ old('screen_answer_1') === 'no' ? 'checked' : '' }}>
                                            <span class="text-white">No</span>
                                        </label>
                                    </div>

                                    @error('screen_answer_1')
                                        <p class="text-red text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endif

                            @if ($career->screen_question_2)
                                <div>
                                    <label for="screen_question_2" class="block text-sm font-medium text-white mb-1">
                                        {{ $career->screen_question_2 }} <span class="text-red">*</span>
                                    </label>

                                    <input type="text" name="screen_question_2" id="screen_question_2"
                                        value="{{ old('screen_question_2', $career->screen_question_2) }}" hidden>

                                    <div class="mt-2 flex items-center space-x-4">
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="screen_answer_2" value="Yes"
                                                class="text-indigo-600 focus:ring-indigo-500"
                                                {{ old('screen_answer_2') === 'yes' ? 'checked' : '' }}>
                                            <span class="text-white">Yes</span>
                                        </label>
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="screen_answer_2" value="No"
                                                class="text-indigo-600 focus:ring-indigo-500"
                                                {{ old('screen_answer_2') === 'no' ? 'checked' : '' }}>
                                            <span class="text-white">No</span>
                                        </label>
                                    </div>

                                    @error('screen_answer_2')
                                        <p class="text-red text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endif

                            @if ($career->screen_question_3)
                                <div>
                                    <label for="screen_question_3" class="block text-sm font-medium text-white mb-1">
                                        {{ $career->screen_question_3 }} <span class="text-red">*</span>
                                    </label>

                                    <input type="text" name="screen_question_3" id="screen_question_3"
                                        value="{{ old('screen_question_3', $career->screen_question_3) }}" hidden>

                                    <div class="mt-2 flex items-center space-x-4">
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="screen_answer_3" value="Yes"
                                                class="text-indigo-600 focus:ring-indigo-500"
                                                {{ old('screen_answer_3') === 'yes' ? 'checked' : '' }}>
                                            <span class="text-white">Yes</span>
                                        </label>
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="screen_answer_3" value="No"
                                                class="text-indigo-600 focus:ring-indigo-500"
                                                {{ old('screen_answer_3') === 'no' ? 'checked' : '' }}>
                                            <span class="text-white">No</span>
                                        </label>
                                    </div>

                                    @error('screen_answer_3')
                                        <p class="text-red text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endif

                            <div class="mb-3">
                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                @error('g-recaptcha-response')
                                    <p class="text-red text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <!-- Submit -->
                        <div class="pt-6">
                            <button type="submit"
                                class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-full hover:bg-indigo-700 transition-colors">
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('style')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
