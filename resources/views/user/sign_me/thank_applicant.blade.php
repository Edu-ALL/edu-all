@extends('layout.user.main')
@section('head')
    <title>Thank You for Your Application!</title>
    <meta name="title" content="Thank You for Your Application!" />
    <meta name="description"
        content="We have successfully received your application. Our team will carefully review your submission and
                    follow up with you soon." />
@endsection
@section('content')
    <section class="py-16 h-screen bg-career-banner bg-cover bg-bottom" id="banner">
        <div class="bg-gradient-to-r from-black/100 via-transparent to-transparent h-screen -mt-16">
            <div
                class="flex flex-col h-full items-center md:items-center justify-center md:justify-end main-container md:pb-[18vh] md:pt-[15%] gap-2">
                <h1 class="font-bold text-banner-title text-white text-center">
                    Thank You for Your Application!
                </h1>
                <h2 class="font-medium text-lg text-white text-center mt-2">
                    We have successfully received your application. Our team will carefully review your submission and
                    follow up
                    with you soon.
                </h2>

                <a href="{{ route('partnership_careers', app()->getLocale()) }}" class="flex justify-center w-full pt-8">
                    <span
                        class="block px-4 py-2 rounded-md bg-newprimary font-newprimary font-semibold text-base text-white text-center">
                        <i class="fa fa-arrow-left fa-fw"></i> Back
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
