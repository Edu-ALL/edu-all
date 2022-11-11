<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach (config('app.available_locales') as $locale)
        <a href="{{ route(Route::currentRouteName(), $locale) }}">
            @if (app()->getLocale() == $locale)
                <b>
                    {{ strtoupper($locale) }}
                </b>
            @else
                {{ strtoupper($locale) }}
            @endif

        </a>
    @endforeach

    <h1>
        {{ __('pages/home.greeting') }}
    </h1>
    <a href="{{ url(app()->getLocale(), 'sample') }}">Link</a>
</body>

</html>
