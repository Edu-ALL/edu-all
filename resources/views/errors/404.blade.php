@extends('layout.user.main')

@section('content')
    <section class="main-container">
        <div class="flex md:flex-row flex-col items-center justify-between max-w-5xl w-full  md:h-[70vh] h-auto mx-auto">
            <div class="md:text-start text-center md:mt-0 mt-[40px]  w-50">
                <h1 class="font-primary font-bold md:text-6xl text-4xl text-primary">Oops!</h1>
                <h2 class="font-primary mt-5 md:text-3xl text-2xl font-normal">Error 404 - Page Not Found</h2>
                <h2 class="font-primary mt-3 md:text-2xl text-xl font-normal">
                    The page you requested could not be found. <br>
                    We're working on it :)
                </h2>
                <a href="{{ route('home', app()->getLocale()) }}" class="flex md:justify-start justify-center w-full pt-8">
                    <span
                        class="block px-4 py-2 rounded-md bg-yellow font-primary font-semibold text-base text-white text-center">
                      <i class="fa fa-arrow-left fa-fw"></i>  Back Home
                    </span>
                </a>
            </div>
            <div class="w-50">
                <img src="{{asset('assets/img/404.png')}}" alt="404" class="w-[100%]" loading="lazy">
            </div>
        </div>
    </section>
@endsection

{{-- @extends('errors::minimal') --}}

{{-- @section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}
