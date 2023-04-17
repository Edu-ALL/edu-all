@extends('layout.user.main')

@section('head')
    @if (app()->getLocale() == 'id-en')
        <title>ALL-in Eduspace Privacy Policy: Our Commitment to Protecting Your Data</title>
        <meta name="title" content="ALL-in Eduspace Privacy Policy: Our Commitment to Protecting Your Data" />
    @elseif (app()->getLocale() == 'id-id')
        <title>Kebijakan Privasi ALL-in Eduspace: Komitmen Kami untuk Melindungi Data Anda</title>
        <meta name="title" content="Kebijakan Privasi ALL-in Eduspace: Komitmen Kami untuk Melindungi Data Anda" />
    @else
        <title>ALL-in Eduspace Privacy Policy: Our Commitment to Protecting Your Data</title>
        <meta name="title" content="ALL-in Eduspace Privacy Policy: Our Commitment to Protecting Your Data" />
    @endif
    <meta name="description" content="This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You." />
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
