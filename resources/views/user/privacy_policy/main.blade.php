@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/privacy_policy.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/privacy_policy.meta_title') }}" />
    <meta name="description" content="{{ __('pages/privacy_policy.meta_description') }}" />
@endsection

@section('content')
    <div class="new-main-container py-20">
        <section class="py-10">
            <div class="privacy_policy">
                {!! __('pages/privacy_policy.body') !!}
            </div>
        </section>
    </div>
@endsection
