@extends('layout.user.main')

@section('content')
    {{-- ================================== Top Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <h2 class="mb-8 font-primary font-bold text-4xl text-[#6696E2] text-center">Student Acceptance List</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <div class="student__acceptance__btn student__acceptance__btn--active ">
                    USA</div>
                <div class="student__acceptance__btn">
                    UK</div>
                <div class="student__acceptance__btn">
                    Singapore</div>
                <div class="student__acceptance__btn">
                    ALL*</div>
            </div>
        </div>
    </section>

    {{-- ================================== List Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col main-container">
            <div class="student__acceptance__wrap__list">
                <h4 class="mb-3 font-primary font-semibold text-lg text-[#54595F]">USA</h4>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student__acceptance__wrap__list hidden">
                <h4 class="mb-3 font-primary font-semibold text-lg text-[#54595F]">UK</h4>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student__acceptance__wrap__list hidden">
                <h4 class="mb-3 font-primary font-semibold text-lg text-[#54595F]">Singapore</h4>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                    <div
                        class="student__acceptance__card flex justify-center items-center h-48 border-t-[1px] border-dotted border-black">
                        <div class="front flex justify-center items-center px-6">
                            <img data-original="{{ asset('assets/img/student-acceptance/pennlogo.webp') }}" alt="pennlogo">
                        </div>
                        <div
                            class="back flex flex-col justify-between items-center px-4 bg-gradient-to-b from-[#6f85e9] to-[#b9bfe3]">
                            <h6
                                class="flex items-end h-1/2 font-primary font-semibold text-sm text-white text-center align-baseline">
                                University
                                of
                                Pennyslvania</h6>
                            <h6
                                class="pb-8 flex items-end h-1/2 font-primary text-[13px] text-black text-center align-baseline">
                                Major
                                : <br>
                                Business</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const student_acceptance_wrap_lists = document.querySelectorAll('.student__acceptance__wrap__list');
        const student_acceptance_btns = document.querySelectorAll('.student__acceptance__btn');

        let pos = 0;

        student_acceptance_btns.forEach((el, it) => {
            el.addEventListener('click', () => {
                // elemen terakhir tidak memiliki kondisi yang sama
                if (it != student_acceptance_btns.length - 1) {
                    // hilangkan list dengan menambankan kelas hidden
                    student_acceptance_btns.forEach((el2, it2) => {
                        if (it2 != student_acceptance_btns.length - 1) {
                            student_acceptance_wrap_lists[it2].classList.add('hidden')
                        }
                        student_acceptance_btns[it2].classList.remove(
                            'student__acceptance__btn--active')
                    });

                    // tampilkan list dengan menghapus kelas hidden
                    student_acceptance_wrap_lists[it].classList.remove('hidden')
                    student_acceptance_btns[it].classList.add('student__acceptance__btn--active')

                    // ubah posisis array lama menjadi posisi sekarang
                    pos = it;
                } else {
                    student_acceptance_btns.forEach((el2, it2) => {
                        if (it2 != student_acceptance_btns.length - 1) {
                            student_acceptance_wrap_lists[it2].classList.remove('hidden');
                            student_acceptance_btns[it2].classList.remove(
                                'student__acceptance__btn--active');
                        }
                    });
                    student_acceptance_btns[student_acceptance_btns.length - 1].classList.add(
                        'student__acceptance__btn--active')
                }
            })
        })
    </script>
@endsection
