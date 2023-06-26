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
        <div class="flex flex-row justify-center">
            <div class="main grid md:grid-cols-3 grid-cols-1 p-0 m-0">
                <div class="md:col-span-2 section-1">
                    <nav class="navbar md:mb-2 mb-2">
                        <div class="flex flex-row items-end justify-start p-0 py-7 md:gap-8 gap-6">
                            <a class="navbar-brand">
                                <img src="{{ asset('assets/logo/allin-big.png') }}" alt="ALL-In" width="100">
                            </a>
                            <a class="leading-4">About us</a>
                        </div>
                    </nav>
                    <h3 class="leading-tight">Breaking Down the Journey to a Winning TOP University Application</h3>
                    <h5 class="leading-tight md:pr-8 md:mt-4 mt-4">
                        Discover the essential elements to maximize your chances of acceptance and unlock opportunities for a successful academic journey!
                    </h5>
                    <div class="flex flex-row mt-6">
                        <div class="md:basis-2/5 basis-2/4 flex flex-col gap-2">
                            <div class="flex items-center md:gap-5 gap-3">
                                <i class="icon fa-solid fa-calendar-days"></i>
                                <h5 class="m-0">Saturday, 29 July 2023</h5>
                            </div>
                            <div class="flex items-center md:gap-5 gap-3">
                                <i class="icon fa-regular fa-clock"></i>
                                <h5 class="m-0">10 AM WIB</h5>
                            </div>
                        </div>
                        <div class="md:basis-1/6 basis-1/4 flex flex-row items-center justify-center md:px-3 px-2">
                            <img src="{{ asset('assets/img/regular_talk/online-free.png') }}" alt="">
                        </div>
                        <div class="md:basis-1/6 basis-1/4 flex flex-row items-center justify-center md:px-3 px-2">
                            <img src="{{ asset('assets/img/regular_talk/recommended.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex flex-row items-end md:mt-2 mt-5 md:mb-6 mb-8">
                        <div class="col p-0">
                            <img class="" src="{{ asset('assets/img/regular_talk/profile-1.png') }}" alt="">
                        </div>
                        <div class="col p-0">
                            <img class="" src="{{ asset('assets/img/regular_talk/profile-2.png') }}" alt="">
                        </div>
                        <div class="col p-0">
                            <img class="" src="{{ asset('assets/img/regular_talk/profile-3.png') }}" alt="">
                        </div>
                        <div class="col p-0">
                            <img class="" src="{{ asset('assets/img/regular_talk/profile-4.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="section-2 grid place-items-center md:py-0 py-5 md:pb-0 pb-8">
                    <div class="flex flex-col w-full md:px-12 px-8 mt-3 gap-2">
                        <h3 class="text-center leading-tight mb-4">REGIST YOURSELF</h3>
                        <input class="rounded" type="text" placeholder="Name" name="name">
                        <input class="rounded" type="text" placeholder="My Child’s Name" name="child_name">
                        <input class="rounded" type="email" placeholder="Email" name="email">
                        <input class="rounded" type="text" placeholder="Phone Number" name="phone_number">
                        <div class="flex flex-col">
                            <label for="expected_graduation" class="mb-1">Expected Graduation Year</label>
                            <input type="text" class="rounded" id="expected_graduation" name="expected_graduation">
                        </div>
                        <div class="flex flex-col">
                            <label for="study_destination" class="mb-1">Study Destination</label>
                            <input type="text" class="rounded" id="study_destination" name="study_destination">
                        </div>
                        <button type="submit" class="btn rounded py-2 mt-6">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>