@extends('layout.user.landing_page')

@section('content')
    <section class="bg-dark overflow-hidden">
        <div class="new-main-container relative">
            <div class="circular-gradient-1 absolute z-10 -top-40 -left-full md:-left-1/3 md:-top-1/3 h-[1000px] w-[1000px] md:h-[1000px] md:w-[1000px]"></div>
            <div class="circular-gradient-2 absolute z-10 -right-full bottom-96 md:-right-[600px] md:-bottom-1/3 h-[700px] w-[700px] md:h-[1000px] md:w-[1000px]"></div>
            
            <div class="flex flex-col items-center justify-center w-full h-[100vh] mx-auto relative z-10 max-w-sm md:max-w-3xl">
                <h1 class="font-newprimary font-bold md:text-4xl text-2xl text-white text-center">
                    Thank You for Your Recent Payment!
                    
                </h1>
                <a href="{{ route('home', app()->getLocale()) }}" class="flex justify-center w-full pt-8">
                    <span
                        class="block px-4 py-2 rounded-md bg-newprimary font-newprimary font-semibold text-xs md:text-base text-white text-center">
                        Back Home
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <style>
        .circular-gradient-1 {
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,0,255,0.5) 0%, rgba(0,0,255,0.3) 20%, rgba(0,0,255,0.1) 50%, rgba(0,0,0,0) 75%);
            filter: blur(50px);
        }
        .circular-gradient-2 {
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,0,255,0.3) 0%, rgba(0,0,255,0.3) 20%, rgba(0,0,255,0.3) 30%, rgba(0,0,0,0) 75%);
            filter: blur(50px);
        }
    </style> 
@endpush