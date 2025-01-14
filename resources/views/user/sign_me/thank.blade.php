@extends('layout.user.main')

@section('content')
    <section class="main-container">
        <div class="flex flex-col items-center justify-center max-w-4xl w-full  h-[60vh] mx-auto">
            <div class="flex justify-center">
                <img src="{{asset('assets/img/send.webp')}}" alt="Send" width="20%" class="mb-5">
            </div>
            <h1 class="font-newprimary font-bold md:text-3xl text-xl text-newprimary text-center">
                Thank you for letting us know a little bit about you, our sales team will contact you soon for the
                further consultation
            </h1>
            <a href="{{ route('home', app()->getLocale()) }}" class="flex justify-center w-full pt-8">
                <span
                    class="block px-4 py-2 rounded-md bg-newyellow font-newprimary font-semibold text-base text-white text-center">
                    <i class="fa fa-arrow-left fa-fw"></i> Back Home
                </span>
            </a>
        </div>
    </section>
@endsection
