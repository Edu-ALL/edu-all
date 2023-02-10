@extends('layout.user.main')

@section('content')
    <section class="main-container">
        <div class="flex flex-col items-center justify-center max-w-2xl w-full">
            <h1 class="font-primary font-bold text-6xl text-primary text-center">Oop Page Not Found!</h1>
            <a href="{{ route('home', app()->getLocale()) }}">Back Home</a>
        </div>
    </section>
@endsection
