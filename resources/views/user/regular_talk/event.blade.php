<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('favicon.png') }}" rel="icon">
    <title>Regular Talk</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d11faf3e43.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="{{ asset('css/user/regular-talk.css') }}" rel="stylesheet">
    @vite('public/css/user/regular-talk.css')
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Prev Button  --}}
    @if ($prev_regtalk)
        <div class="h-[100vh] w-[60px] fixed top-0 left-0 flex items-center justify-center z-[999]">
            <a href="{{ url('/id-en/webinar-workshop/' . $prev_regtalk->topic_slug) }}"
                class="bg-gray-200/30 hover:bg-slate-500 hover:text-white w-[45px] h-[45px] flex items-center justify-center rounded-full transition-all ease-in-out duration-300">
                <i class="fa-solid fa-chevron-left text-[20px]"></i>
            </a>
        </div>
    @endif
    {{-- Next Button  --}}

    @if ($next_regtalk)
        <div class="h-[100vh] w-[60px] fixed top-0 right-0 flex items-center justify-center z-[999]">
            <a href="{{ url('/id-en/webinar-workshop/' . $next_regtalk->topic_slug) }}"
                class="bg-gray-100/30 hover:bg-slate-500 hover:text-white w-[45px] h-[45px] flex items-center justify-center rounded-full transition-all ease-in-out duration-300">
                <i class="fa-solid fa-chevron-right text-[20px]"></i>
            </a>
        </div>
    @endif


    <div class="flex flex-row justify-center">
        <div class="main grid md:grid-cols-5 grid-cols-1 p-0 m-0 md:h-[100vh] h-auto">
            <div class="md:col-span-3 section-1 h-full">
                <nav class="navbar md:mb-3 mb-2">
                    <div class="flex flex-row items-end justify-start p-0 py-7 md:gap-8 gap-6">
                        <a class="navbar-brand">
                            <img loading="lazy" src="{{ asset('assets/logo/allin-big.png') }}" alt="EduALL"
                                width="100">
                        </a>
                        <a class="leading-4" href="https://all-inedu.com/id-en/about" target="_blank">About us</a>
                    </div>
                </nav>
                <div class="relative">
                    <img class="sticker absolute" loading="lazy"
                        src="{{ asset('assets/img/regular_talk/'.$regular_talk->recommended_for).'.webp' }}" alt="EduALL">

                    <h3 class="w-[95%]">{{ $regular_talk->topic }}</h3>
                </div>
                <h5 class="leading-tight md:pr-8 md:mt-5 mt-4">
                    {!! $regular_talk->description !!}
                </h5>
                <div class="flex flex-row mt-8">
                    <div class="flex flex-row md:gap-6 gap-4">
                        <div class="flex items-center md:gap-4 gap-2">
                            <i class="icon fa-solid fa-calendar-days"></i>
                            <h5 class="m-0">{{ date('F, jS Y', strtotime($regular_talk->date)) }}</h5>
                        </div>
                        <div class="flex items-center md:gap-4 gap-2">
                            <i class="icon fa-regular fa-clock"></i>
                            <h5 class="m-0">{{ date('H:i A', strtotime($regular_talk->time)) }} WIB</h5>
                        </div>
                    </div>
                </div>
                <div
                    class="speaker grid md:grid-cols-4 grid-cols-2 items-end justify-start md:mt-[25px] mt-5 md:mb-6 mb-8 gap-5">
                    @foreach (json_decode($regular_talk->speaker_image) as $image)
                        <div class="col p-0">
                            <img loading="lazy" class="w-full"
                                src="{{ Storage::url('regular-talk/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $image) }}"
                                alt="Speaker">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="md:col-span-2 section-2 grid place-items-center md:py-3 py-5 md:pb-0 pb-4 h-full">
                <div class="flex flex-col w-full md:px-10 px-4 my-3 gap-2">
                    @if ($regular_talk->date >= date('Y-m-d'))
                        <iframe src="{{ $regular_talk->form_link }}" frameborder="0" class="w-100"
                            style="height: 80vh"></iframe>
                    @else
                        <div class="bg-white w-full rounded-xl px-4 py-4">
                            <h4 class="text-[#27387A] text-[25px] font-extrabold">
                                <i class="fa-solid fa-key mr-2"></i>
                                Key Takeaways
                            </h4>
                            <hr class="my-2">
                            <div class="text-[18px] key-benefit">
                                {!! $regular_talk->key_takeaways !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
