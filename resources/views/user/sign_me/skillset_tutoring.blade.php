@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/sign_me/sat_prep.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/sign_me/sat_prep.meta_title') }}" />
    <meta name="description" content="{{ __('pages/sign_me/sat_prep.meta_description') }}" />
@endsection

@section('content')
    <section class="py-16">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">

        <div class="md:col-span-3">
            {{-- Emmbed Form --}}
            <div class="w-full">
                <x-form title="Program" program-id="SKLTO" program-name="Skillset Tutoring - Skillset Tutoring General" lead-name="Website" font-size="15" />
            </div>
        </div>
    </section>
@endsection