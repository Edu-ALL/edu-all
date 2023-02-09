@extends('layout.user.main')

@section('content')
    <section class="main-container">
        <div class="flex flex-col items-center justify-center max-w-2xl w-full  h-[60vh] mx-auto">
            <h1 class="font-primary font-bold text-6xl text-primary text-center">Oops... Page Not Found!</h1>
            <a href="{{ route('home', app()->getLocale()) }}" class="flex justify-center w-full pt-8">
                <span
                    class="block max-w-[200px] w-full px-4 py-2 rounded-md bg-yellow font-primary font-semibold text-base text-white text-center">
                    Back Home
                </span>
            </a>
        </div>
    </section>
@endsection

{{-- @extends('errors::minimal') --}}

{{-- @section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}
