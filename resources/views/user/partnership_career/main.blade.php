@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Careers', 'url' => route('partnership_careers', [app()->getLocale()])],
        ];
    @endphp
    <title>Careers | EduALL</title>
    <meta name="title" content="Careers | EduALL" />
    <meta name="description"
        content="Join EduALL and help shape the future of education. A collaborative team where you can do meaningful work, keep learning, and take real ownership. Explore open roles." />
@endsection

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-white">
                <img src="{{ asset('assets/img/about/partnership-career/2026/1. Background Hero.png') }}"
                    alt="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}"
                    title="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full main-container top-[27vh] md:top-[30vh]">
                <h1 class="font-normal text-[2rem] md:text-[3.5rem] text-newprimary text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 leading-8 uppercase"
                    itemprop="headline">
                    Grow with EduALL
                </h1>
                <p class="text-2xl font-normal text-center lg:text-left max-w-3xl mx-auto lg:mx-0 mb-5 text-newprimary">
                    Education changes lives, and behind every impact is a team of passionate people making it happen.
                </p>

                <p class="text-newprimary text-lg md:text-xl mb-4 md:mb-10 md:text-start text-center max-w-3xl"
                    itemprop="description">
                    Every game changer starts with people who believe in them. At EduALL, every learner we support, every
                    program we build, and every milestone we celebrate contributes to something bigger: helping the next
                    generation discover their strengths and shape their future. If you're looking for meaningful work, real
                    ownership, and continuous growth, you'll find it here.
                </p>

                <a href="#" class="rounded-full py-2 px-5 text-lg bg-newprimary text-white">
                    See Open Roles
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="absolute w-[50%] main-container top-[27vh] md:top-[30vh] right-0">
                <div class="flex gap-5">
                    <div class="w-1/2">
                        <img src="{{ asset('assets/img/about/partnership-career/2026/2. Foto Hero 1.png') }}" alt="EduALL"
                            class="rounded-md w-full mb-5">
                        <img src="{{ asset('assets/img/about/partnership-career/2026/4. Foto Hero 3.png') }}" alt="EduALL"
                            class="rounded-md w-full">
                    </div>
                    <div class="w-1/2">
                        <img src="{{ asset('assets/img/about/partnership-career/2026/5. Foto Hero 4.png') }}" alt="EduALL"
                            class="rounded-md w-full mb-5">
                        <img src="{{ asset('assets/img/about/partnership-career/2026/3. Foto Hero 2.png') }}" alt="EduALL"
                            class="rounded-md w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container">
        <div class="max-w-4xl mx-auto">
            <p class="uppercase text-center font-light mb-3">
                Our Culture
            </p>
            <h2 class="text-4xl text-center uppercase font-normal text-newprimary mb-5">
                One Team, One Mission
            </h2>
            <p class="text-xl text-center font-light text-newprimary/80">
                The best work doesn't come from individuals working in silos. It comes from people who trust one another,
                challenge ideas, step up when it matters, and stay committed to a shared mission. These four values guide
                how we work every day.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
            <!-- Caring -->
            <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                <img src="{{ asset('assets\img\about\partnership-career\2026\18. CTA.png') }}" alt="EduALL"
                    class="absolute top-0 left-0 w-full h-full object-cover z-0">
                <div class="p-5 relative z-10">
                    <div class="w-[50px] h-[50px] bg-white rounded-lg p-3 mb-4">
                        <img src="{{ asset('assets/img/about/partnership-career/2026/8. Icon Love.png') }}" alt="Caring"
                            class="w-full h-full object-contain">
                    </div>

                    <h3 class="text-white text-xl font-normal mb-3">
                        Caring
                    </h3>

                    <p class="text-white/70 leading-6">
                        We build trust through empathy, respect, and genuine support for one another.
                    </p>
                </div>
            </div>

            <!-- Learning -->
                <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                    <img src="{{ asset('assets/img/about/partnership-career/2026/18. CTA.png') }}" alt="EduALL"
                        class="absolute top-0 left-0 w-full h-full object-cover z-0">

                    <div class="p-5 relative z-10">
                        <div class="w-[50px] h-[50px] bg-white rounded-lg p-3 mb-4">
                            <img src="{{ asset('assets/img/about/partnership-career/2026/7. Icon Book Pen.png') }}"
                                alt="Learning" class="w-full h-full object-contain">
                        </div>

                        <h3 class="text-white text-xl font-normal mb-3">
                            Learning
                        </h3>

                        <p class="text-white/70 leading-6">
                            We stay curious, embrace feedback, and never stop improving.
                        </p>
                    </div>
                </div>

                <!-- Accountability -->
                <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                    <img src="{{ asset('assets/img/about/partnership-career/2026/18. CTA.png') }}" alt="EduALL"
                        class="absolute top-0 left-0 w-full h-full object-cover z-0">

                    <div class="p-5 relative z-10">
                        <div class="w-[50px] h-[50px] bg-white rounded-lg p-3 mb-4">
                            <img src="{{ asset('assets/img/about/partnership-career/2026/9. Icon Check.png') }}"
                                alt="Accountability" class="w-full h-full object-contain">
                        </div>

                        <h3 class="text-white text-xl font-normal mb-3">
                            Accountability
                        </h3>

                        <p class="text-white/70 leading-6">
                            We take ownership of our work and follow through on our commitments.
                        </p>
                    </div>
                </div>

                <!-- Leadership -->
                <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                    <img src="{{ asset('assets/img/about/partnership-career/2026/18. CTA.png') }}" alt="EduALL"
                        class="absolute top-0 left-0 w-full h-full object-cover z-0">

                    <div class="p-5 relative z-10">
                        <div class="w-[50px] h-[50px] bg-white rounded-lg p-3 mb-4">
                            <img src="{{ asset('assets/img/about/partnership-career/2026/6. Icon Rocket.png') }}"
                                alt="Leadership" class="w-full h-full object-contain">
                        </div>

                        <h3 class="text-white text-xl font-normal mb-3">
                            Leadership
                        </h3>

                        <p class="text-white/70 leading-6">
                            We create impact by empowering others and helping the team succeed.
                        </p>
                    </div>
                </div>
        </div>

    </section>

    <section class="bg-gradient-to-b from-white to-blue-100 py-20 mt-20">
        <div class="new-main-container">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl text-center uppercase font-normal text-newprimary mb-5">
                    Life at EduALL
                </h2>
                <p class="text-xl text-center font-light text-newprimary/80">
                    Meaningful work matters. So do the moments that bring people together. From celebrating milestones and
                    festive occasions to company outings and team activities, we believe shared experiences strengthen
                    collaboration and make every journey more rewarding.
                </p>
            </div>

            <div class="md:flex gap-5 mt-10 hidden">
                <div class="w-[25%]">
                    <img src="{{ asset('assets\img\about\partnership-career\2026\10. Momen 1.png') }}" alt="EduALL"
                        class="rounded-xl w-full">
                </div>
                <div class="w-[75%]">
                    <div class="flex gap-5 mb-5">
                        <div class="w-2/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\11. Momen 2.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                        <div class="w-1/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\12. Momen 3.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                    </div>
                    <div class="flex gap-5 mb-5">
                        <div class="w-1/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\13. Momen 4.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                        <div class="w-2/3">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\14. Momen 5.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="w-[25%]">
                    <img src="{{ asset('assets\img\about\partnership-career\2026\12. Momen 6.png') }}" alt="EduALL"
                        class="rounded-xl w-full">
                </div>
                <div class="w-[60%]">
                    <div class="flex gap-5 mb-5">
                        <div class="w-1/2">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\15. Momen 6.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('assets\img\about\partnership-career\2026\16. Momen 7.png') }}"
                                alt="EduALL" class="rounded-xl w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-blue-100 to-white py-20">
        <div class="new-main-container mt-20">
            <div class="w-full mx-auto mb-10">
                <p class="uppercase text-center font-light mb-3">
                    The EduALL Experience
                </p>
                <h2 class="text-4xl text-center uppercase font-normal text-newprimary mb-5">
                    Grow Every Day
                </h2>
                <p class="text-xl text-center font-light text-newprimary/80">
                    We believe careers are built through continuous learning, meaningful challenges, and the freedom to take
                    ownership.
                </p>
            </div>

            <div class="grid grid-cols-3 gap-5">
                <!-- 01 -->
                <div class="bg-[#D9EEFF] rounded-xl p-5">
                    <p class="font-normal text-lg mb-2 text-newprimary">01</p>
                    <p class="font-normal text-xl mb-2 text-newprimary">
                        Meaningful Impact
                    </p>
                    <p class="font-light text-dark/60">
                        Contribute to work that helps shape the future of education.
                    </p>
                </div>

                <!-- 02 -->
                <div class="bg-[#D9EEFF] rounded-xl p-5">
                    <p class="font-normal text-lg mb-2 text-newprimary">02</p>
                    <p class="font-normal text-xl mb-2 text-newprimary">
                        Continuous Learning
                    </p>
                    <p class="font-light text-dark/60">
                        Develop new skills through hands-on experience, collaboration, and feedback.
                    </p>
                </div>

                <!-- 03 -->
                <div class="bg-[#D9EEFF] rounded-xl p-5">
                    <p class="font-normal text-lg mb-2 text-newprimary">03</p>
                    <p class="font-normal text-xl mb-2 text-newprimary">
                        Ownership & Growth
                    </p>
                    <p class="font-light text-dark/60">
                        Take initiative, solve meaningful problems, and grow alongside the company.
                    </p>
                </div>

                <!-- 04 -->
                <div class="bg-[#D9EEFF] rounded-xl p-5">
                    <p class="font-normal text-lg mb-2 text-newprimary">04</p>
                    <p class="font-normal text-xl mb-2 text-newprimary">
                        Supportive Team
                    </p>
                    <p class="font-light text-dark/60">
                        Work with people who challenge, encourage, and celebrate one another.
                    </p>
                </div>

                <!-- 05 -->
                <div class="bg-[#D9EEFF] rounded-xl p-5">
                    <p class="font-normal text-lg mb-2 text-newprimary">05</p>
                    <p class="font-normal text-xl mb-2 text-newprimary">
                        Moments That Matter
                    </p>
                    <p class="font-light text-dark/60">
                        Enjoy team celebrations, outings, and moments that make the journey memorable.
                    </p>
                </div>

                <!-- 06 -->
                <div class="bg-gradient-to-br from-newprimary to-newprimary/90 rounded-xl relative overflow-hidden">
                    <img src="{{ asset('assets\img\about\partnership-career\2026\18. CTA.png') }}" alt="EduALL"
                        class="absolute top-0 left-0 w-full h-full object-cover z-0">
                    <div class="flex h-full items-center justify-center p-5 relative z-10">
                        <p class="font-normal text-xl mb-2 text-white text-center">
                            Sound like <br>
                            your kind of team?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-tr from-[#00020E] to-newprimary py-20">
        <div class="new-main-container mt-20">
            <div class="max-w-4xl mx-auto mb-10">
                <p class="uppercase text-center font-light mb-3 text-white">
                    Join Us
                </p>
                <h2 class="text-4xl text-center uppercase font-normal mb-5 text-white">
                    Roles Open
                </h2>
                <p class="text-xl text-center font-light text-white/80">
                    Browse our current openings below. Don't see the right role today? We'd still love to hear from you.
                    Share your details, and we'll reach out when an opportunity matches your experience and interests.
                </p>
            </div>

            <section class="py-10" id="career">
                <div class="new-main-container">
                    <div class="grid grid-cols-8 gap-4 mb-6 items-center justify-between border-b border-b-[#393636] pb-4">
                        <div class="relative flex-1 w-full col-span-full md:col-span-4">
                            <input type="text" name="search" placeholder="Search Position"
                                value="{{ request('search') }}" onchange="applyFilters()"
                                class="w-full pl-4 pr-10 py-2 rounded-full bg-[#EAEAEA] border border-newprimary text-sm focus:outline-none">
                            <button type="button"
                                class="absolute right-4 top-1/2 -translate-y-1/2 pl-4 pr-2 border-l border-l-dark"
                                onclick="applyFilters()">
                                <i class="fa-solid fa-magnifying-glass text-newprimary"></i>
                            </button>
                        </div>
                        <div class="flex gap-4 w-full col-span-full md:col-span-4 justify-end">
                            <div class="relative flex-1 md:flex-none">
                                <select
                                    class="w-full md:w-44 pl-4 pr-10 py-2 rounded-full text-sm bg-[#EAEAEA] border border-newprimary appearance-none focus:outline-none cursor-pointer"
                                    placeholder="Department" onchange="applyFilters()">
                                    <option value="" disabled selected hidden>Department</option>
                                    @if (!(request('department') == '' ? 'selected' : ''))
                                        <option value="" {{ request('department') == '' ? 'selected' : '' }}>All
                                            Department
                                        </option>
                                    @endif
                                    @foreach (['IT', 'Product', 'Marketing', 'Finance', 'Human Resource'] as $department)
                                        <option value="{{ $department }}"
                                            {{ request('department') == $department ? 'selected' : '' }}>
                                            {{ $department }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="relative flex-1 md:flex-none">
                                <select
                                    class="w-full md:w-44 pl-4 pr-10 py-2 rounded-full text-sm bg-[#EAEAEA] border border-newprimary appearance-none focus:outline-none cursor-pointer"
                                    placeholder="Status" onchange="applyFilters()">
                                    <option value="" disabled selected hidden>Status</option>
                                    @if (!(request('status') == '' ? 'selected' : ''))
                                        <option value="" {{ request('status') == '' ? 'selected' : '' }}>All Status
                                        </option>
                                    @endif
                                    @foreach (['Part Time', 'Full Time', 'Freelance'] as $status)
                                        <option value="{{ $status }}"
                                            {{ request('status') == $status ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        @if ($careers->isEmpty())
                            <p class="text-center text-lg py-12">No careers found</p>
                        @else
                            @foreach ($careers as $career)
                                <div class="bg-white rounded-2xl px-6 py-8 text-white shadow-xl">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                                        <div class="">
                                            <h4 class="font-normal text-xl font-newprimary text-newprimary">
                                                {{ $career->job_position }}
                                            </h4>
                                            <div class="flex gap-5">
                                                <p class="font-light text-dark/60">
                                                    {{ $career->department ?? 'Product' }}
                                                </p>
                                                <p class="font-light text-dark/60">
                                                    {{ $career->type ?? 'Full-Time' }}
                                                </p>
                                            </div>
                                            <p class="font-light text-dark/60">
                                                Jakarta, Hybrid
                                            </p>
                                        </div>
                                        <div class="flex justify-end h-full items-center">
                                            <a href="{{ route('detail_careers', ['locale' => app()->getLocale(), 'slug' => $career->slug]) }}"
                                                class="inline-flex items-center gap-2 text-newprimary">
                                                View & Apply
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="pt-8">
                        {{ $careers->links('layout.user.pagination') }}
                    </div>
                </div>
            </section>
        </div>
    </section>


    <section class="new-main-container my-20">
        <div class="bg-gradient-to-br from-dark to-newprimary rounded-2xl relative overflow-hidden">
            <img src="{{ asset('assets\img\about\partnership-career\2026\18. CTA.png') }}" alt="EduALL"
                class="absolute top-0 left-0 w-full z-0">
            <div class="text-center px-5 py-10 max-w-3xl mx-auto relative z-10">
                <h3 class="text-4xl text-white font-light mb-3 uppercase">
                    Ready to Make an Impact?
                </h3>
                <p class="text-xl text-white/60 font-light mb-10">
                    If you're looking for meaningful work, continuous growth, and a team that values collaboration, we would
                    love to meet you.
                </p>
                <a href="#career" class="bg-dark text-white rounded-2xl py-3 px-10">
                    Join Our Team
                </a>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var department = document.querySelector('select[placeholder="Department"]').value;
        var status = document.querySelector('select[placeholder="Status"]').value;
        var search = document.querySelector('input[name="search"]').value;

        if (department || status || search) {
            // Scroll to the career section
            document.getElementById('career').scrollIntoView({
                behavior: 'smooth'
            });
        }

        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        var gallery = new Splide('.gallery', {
            perPage: isMediumDevice ? 1 : 2,
            perMove: 1,
            autoplay: true,
            lazyload: true,
            interval: 3000,
            arrows: isMediumDevice ? false : true,
            pagination: isMediumDevice ? true : false,
        });

        gallery.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[110%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();

        function applyFilters() {
            var department = document.querySelector('select[placeholder="Department"]').value;
            var status = document.querySelector('select[placeholder="Status"]').value;
            var search = document.querySelector('input[name="search"]').value;
            var baseUrl = '{{ route('partnership_careers', ['locale' => app()->getLocale()]) }}';
            var queryParams = [];

            if (department) queryParams.push('department=' + encodeURIComponent(department));
            if (status) queryParams.push('status=' + encodeURIComponent(status));
            if (search) queryParams.push('search=' + encodeURIComponent(search));

            window.location.href = baseUrl + (queryParams.length ? '?' + queryParams.join('&') : '');
        }

        document.querySelector('select[placeholder="Department"]').addEventListener('change', applyFilters);
        document.querySelector('select[placeholder="Status"]').addEventListener('change', applyFilters);
    </script>
@endpush
