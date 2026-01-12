@extends('layout.user.landing_page')

@section('head')
    <title>CSCA - EduALL</title>
    <meta name="title" content="CSCA - EduALL" />
    <meta name="description"
        content="Siapkan diri untuk masuk ke universitas di China dengan kelas persiapan CSCA yang fokus pada strategi penyelesaian soal.  大家一起努力，我们一定能行!" />
@endsection

@section('content')
    <section class="md:py-16 py-8 overflow-hidden md:h-[100vh] h-[100dvh] relative">
        <img src="{{ asset('assets/img/csca/banner.png') }}" alt="EduALL - ilustration"
            class="w-full object-cover md:absolute hidden left-0 top-0 h-full">
        <img src="{{ asset('assets/img/csca/mobile-1.png') }}" alt="EduALL - ilustration"
            class="w-full object-cover md:hidden absolute left-0 top-0 h-full">
        <div class="new-main-container relative z-10 h-full">
            <div class="flex max-w-6xl mx-auto h-full gap-8 z-20 relative md:items-center items-start md:pt-0 pt-5">
                <div class="md:w-[55%] gap-4">
                    <h2 class="md:text-6xl text-3xl text-white mb-5 md:text-start text-center">
                        Mulai 2026 <br>
                        Kuliah S1 di China <br>
                        Wajib Ikut CSCA!
                    </h2>
                    <div class="mt-5">
                        <p class="md:text-2xl text-xl text-white md:text-start text-center">
                            Siapkan diri untuk masuk ke universitas di China dengan kelas persiapan CSCA yang fokus pada
                            strategi penyelesaian soal. 大家一起努力，我们一定能行!
                        </p>
                    </div>
                    <div class="md:mt-10 mt-5">
                        <a href="https://lynk.id/eduall.academy/qmn86eend3km" target="_blank"
                            class="bg-gradient-to-l from-[#06087F] via-[#7273C4] to-[#06087F] md:px-10 px-5 py-3 md:text-xl text-[13px] text-white rounded-full shadow-lg font-bold md:inline block md:text-start text-center">
                            Chase your dream Chinese university, today!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-16 py-8 overflow-hidden relative -mt-20 rounded-t-3xl bg-white ">
        <div class="new-main-container relative z-10 h-full">
            <div class="flex max-w-6xl mx-auto h-full gap-8 z-20 relative justify-center">
                <div class="w-full gap-4">
                    <h2 class="md:text-4xl text-2xl text-newprimary mb-5 text-center">
                        China Scholastic Competency Assessment (CSCA)
                    </h2>
                    <div class="flex justify-center md:flex-nowrap flex-wrap mt-5 w-[90%] mx-auto gap-10">
                        <div class="md:w-1/3 w-full p-5">
                            <img src="{{ asset('assets/img/csca/Keylee.png') }}" alt="EduALL Student"
                                class="w-full rounded-xl shadow-lg">
                            <div class="text-center">
                                <h3 class="mt-3 font-bold text-xl">Kaylee Fayola H.</h3>
                                <div class="flex w-[50%] justify-center items-start mx-auto mt-5">
                                    <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/14.png') }}" alt="EduALL Student"
                                        class="w-full">
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/3 w-full p-5">
                            <img src="{{ asset('assets/img/csca/Gregory.png') }}" alt="EduALL Student"
                                class="w-full rounded-xl shadow-lg">
                            <div class="text-center">
                                <h3 class="mt-3 font-bold text-xl">Gregory Pandji</h3>
                                <div class="flex w-[70%] justify-center items-start mx-auto mt-5">
                                    <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/17.png') }}" alt="EduALL Student"
                                        class="w-full">
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/3 w-full p-5">
                            <img src="{{ asset('assets/img/csca/Gisella.png') }}" alt="EduALL Student"
                                class="w-full rounded-xl shadow-lg">
                            <div class="text-center">
                                <h3 class="mt-3 font-bold text-xl">Gisela Natalie K.</h3>
                                <div class="flex w-[60%] justify-center items-start mx-auto mt-5">
                                    <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/19.png') }}" alt="EduALL Student"
                                        class="w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[90%] flex justify-center mx-auto border-b-4 my-5"></div>
                    <div class="flex flex-wrap w-full gap-8 mt-10 justify-center items-center">
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/peking.png') }}" alt="EduALL"
                                class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/15.png') }}" alt="EduALL" class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/16.png') }}" alt="EduALL" class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/17.png') }}" alt="EduALL" class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/19.png') }}" alt="EduALL" class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/14.png') }}" alt="EduALL" class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/shanghai jiao tong.png') }}" alt="EduALL"
                                class="w-full">
                        </div>
                        <div class="md:w-[11%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/18.png') }}" alt="EduALL" class="w-full">
                        </div>
                        <div class="md:w-[18%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/USTC.png') }}" alt="EduALL"
                                class="w-full">
                        </div>
                        <div class="md:w-[10%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/nanjing.png') }}" alt="EduALL"
                                class="w-full">
                        </div>
                        <div class="md:w-[13%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/xian jiaotong.png') }}" alt="EduALL"
                                class="w-full">
                        </div>
                        <div class="md:w-[18%] w-[30%] flex justify-center items-center">
                            <img src="{{ asset('assets/img/csca/CHINA UNIV LOGO/harbin.png') }}" alt="EduALL"
                                class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-16 py-8 px-10 overflow-hidden relative  ">
        <img src="{{ asset('assets/img/csca/8.png') }}" alt="EduALL - ilustration"
            class="md:w-[95%] w-[90%] object-cover object-top absolute md:left-10 left-5 top-0 h-full rounded-3xl">
        <div class="new-main-container relative z-10 h-full py-10">
            <div class="text-center">
                <h2 class="md:text-7xl text-3xl font-bold text-white">Apa Itu CSCA?</h2>
            </div>
            <div class="flex md:flex-nowrap flex-wrap md:w-[90%] w-full justify-center mt-20 mx-auto md:gap-0 gap-5">
                <div class="md:w-2/6 w-full ">
                    <div class="bg-white rounded-2xl p-6 md:h-[270px] h-auto">
                        <div class="bg-dark inline px-4 py-2 rounded">
                            <i class="fa-solid fa-info text-white"></i>
                        </div>
                        <p class="text-xl mt-5">
                            <strong>CSCA</strong> (China Scholastic Competency Assessment) <strong>adalah ujian masuk
                                standar</strong> untuk
                            international
                            students yang ingin melanjutkan <strong>kuliah S1 di China.</strong>
                        </p>
                    </div>
                </div>
                <div class="md:w-2/6 w-full md:px-10">
                    <img src="{{ asset('assets/img/csca/9.png') }}" alt="EduALL"
                        class="w-full md:h-[270px] h-auto object-cover rounded-2xl">

                </div>
                <div class="md:w-2/6 w-full ">
                    <div class="bg-white rounded-2xl p-6 md:h-[270px] h-auto">
                        <div class="bg-dark inline px-4 py-2 rounded">
                            <i class="fa-solid fa-info text-white"></i>
                        </div>
                        <p class="text-xl mt-5">
                            Mulai 2026, <strong>hampir seluruh universitas di China mewajibkan</strong> nilai
                            <strong>CSCA</strong> sebagai bagian dari proses
                            seleksi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-16 py-8 overflow-hidden relative bg-white  ">
        <div class="new-main-container">
            <div class="flex w-[90%] justify-center mx-auto">
                <h2 class="md:text-5xl text-2xl font-bold text-newprimary  text-center">
                    KENAPA HARUS MEMPERSIAPKAN CSCA
                    BERSAMA EDUALL?
                </h2>
            </div>
        </div>
        </div>
    </section>

    <section class="overflow-hidden relative ">
        <div class="grid md:grid-cols-2 grid-cols-1 w-full items-stretch">
            <div class="col h-full bg-newprimary">
                <div class="flex flex-col md:w-[60%] w-full mx-auto text-center p-10">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/img/csca/ICON/people icon@4x.png') }}" alt="EduALL" class="w-14">
                    </div>
                    <h5 class="md:text-2xl text-xl font-bold text-white mb-2 uppercase">Small group learning</h5>
                    <p class="text-white md:text-xl text-lg">
                        Interaktif, terpantau, dan lebih efektif
                        dibanding kelas besar
                    </p>
                </div>
            </div>
            <div class="col h-full bg-dark">
                <div class="flex flex-col md:w-[60%] w-full mx-auto text-center p-10">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/img/csca/ICON/pen on paper icon@4x.png') }}" alt="EduALL"
                            class="w-14">
                    </div>
                    <h5 class="md:text-2xl text-xl font-bold text-white mb-2 uppercase">Syllabus & latihan terarah</h5>
                    <p class="text-white md:text-xl text-lg">
                        Disusun berdasarkan pola soal CSCA dan standar akademik internasional
                    </p>
                </div>
            </div>
            <div class="col h-full md:bg-dark bg-newprimary">
                <div class="flex flex-col md:w-[60%] w-full mx-auto text-center p-10">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/img/csca/ICON/compas icon@4x.png') }}" alt="EduALL" class="w-14">
                    </div>
                    <h5 class="md:text-2xl text-xl font-bold text-white mb-2 uppercase">Pendekatan test-prep,
                        bukan sekadar les</h5>
                    <p class="text-white md:text-xl text-lg">
                        Fokus pada cara mengerjakan soal CSCA dengan cepat, tepat, dan efisien.
                    </p>
                </div>
            </div>
            <div class="col h-full md:bg-newprimary bg-dark">
                <div class="flex flex-col md:w-[60%] w-full mx-auto text-center p-10">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/img/csca/ICON/check icon@4x.png') }}" alt="EduALL" class="w-14">
                    </div>
                    <h5 class="md:text-2xl text-xl font-bold text-white mb-2 uppercase">Mock test & evaluasi</h5>
                    <p class="text-white md:text-xl text-lg">
                        Untuk tahu posisi kemampuanmu sebelum ujian sebenarnya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-16 py-8 overflow-hidden md:h-[100vh] h-[100dvh] relative">
        <img src="{{ asset('assets/img/csca/footer.png') }}" alt="EduALL - ilustration"
            class="w-full object-cover absolute left-0 top-0 h-full md:block hidden">
        <img src="{{ asset('assets/img/csca/mobile-2.png') }}" alt="EduALL - ilustration"
            class="w-full object-cover absolute left-0 top-0 h-full md:hidden block">
        <div class="new-main-container relative z-10 h-full">
            <div class="flex max-w-6xl mx-auto h-full gap-8 z-20 relative md:items-center items-start md:pt-0 pt-20">
                <div class="md:w-[60%] w-full gap-4 text-center">
                    <h2 class="md:text-5xl text-4xl text-white mb-5 md:font-semibold font-bold">
                        HANYA 4 JUTA <br>
                        SIAP KULIAH DI CHINA!
                    </h2>
                    <div class="mt-10">
                        <a href="https://lynk.id/eduall.academy/qmn86eend3km" target="_blank"
                            class="bg-gradient-to-l from-[#C31616] via-[#c47273] to-[#C31616] px-10 py-3 text-2xl text-white rounded-full shadow-lg font-bold">
                            DAFTAR SEKARANG
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
