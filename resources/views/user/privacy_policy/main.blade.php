@extends('layout.user.main')
@section('head')
    <title>Privacy Policy</title>
    <meta name="title" content="Mentoring Program; Explore your true potential in business or research" />
    <meta name="description"
        content="This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You." />
@endsection
@section('content')
    <div class="main-container">
        <section class="py-4">
            <div class="privacy_policy">
                {!! __('pages/privacy_policy.body') !!}
            </div>
        </section>
    </div>
@endsection
