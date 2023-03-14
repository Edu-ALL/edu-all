<footer class="bg-primary font-primary">
    <div class="main-container py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 md:gap-4 lg:gap-x-10 gap-y-12">
            <div class="flex flex-col sm:col-span-2">
                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.address') }}
                </h4>
                <p class="font-normal text-base text-white">
                    Jl Jeruk Kembar Blok Q9 No. 15 Srengseng, <br>
                    Kec. Kembangan, Kota Jakarta Barat, DKI Jakarta
                </p>

                <hr class="my-8">

                <h4 class="font-bold text-base text-white mb-4">
                    {{ __('pages/footer.consultation') }}
                </h4>
                <p class="font-normal text-base text-white mb-4">Walk-in Consultation available on Mon-Fri, 09.00-17.00
                    WIB With appointment only.</p>
                <p class="font-normal text-base text-white">Book your appointment now
                    <br /> +62 818-0808-1363
                    <br /> +62 878-6081-1413
                </p>
            </div>
            <div class="flex flex-col sm:col-span-2">
                <h4 class="flex items-center font-bold text-base text-white mb-4">
                    <a href="https://www.instagram.com" target="_blank"
                        class="p-3 rounded-full border border-white block mr-3 bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                        <img data-original="{{ asset('assets/logo/instagram.png') }}" alt="instagram logo"
                            class="w-4 h-4">
                    </a>
                    <a href="https://instagram.com/{{ app()->getLocale() == 'sg' ? env('IG_GLOBAL_NAME') : env('IG_NAME') }}"
                        target="_blank">
                        <span>{{ app()->getLocale() == 'sg' ? env('IG_GLOBAL_NAME') : env('IG_NAME') }}</span>
                    </a>
                </h4>
                <div class="flex flex-col justify-evenly items-start gap-4 sm:flex-row">
                    @include('layout.user.instagram')
                </div>
            </div>
            <div class="flex flex-col sm:col-span-2 lg:col-span-4 xl:col-span-2">
                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.company') }}
                </h4>
                <ul class="flex flex-col items-start gap-2 w-full">
                    @foreach (__('pages/footer.page_list') as $item)
                        <li class="border-b-[1px] border-light w-full">
                            <a href="{{ url(app()->getLocale() . $item['link']) }}"
                                class="flex justify-between text-white py-1 lg:py-2 hover:text-white/70">
                                <p class="">{{ $item['title'] }}</p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div
            class="mt-14 border-t-2 border-light pt-10 gap-8 flex flex-wrap justify-center md:justify-between items-center">
            <img data-original="/assets/img/footer/ALL-in Eduspace Logo White.png" alt="image 1 footer">
            <div class="flex gap-4 items-center justify-between">

                <a href="mailto:info@all-inedu.com" target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img data-original="{{ asset('assets/logo/email.png') }}" alt="instagram logo"
                        class="w-5 h-5 object-contain">
                </a>
                <a href="https://www.facebook.com/allineduspace/" target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img data-original="{{ asset('assets/logo/facebook.png') }}" alt="facebook logo"
                        class="w-5 h-5 object-contain">
                </a>
                <a href="https://www.linkedin.com/company/all-in-eduspace" target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img data-original="{{ asset('assets/logo/linkedin.png') }}" alt="linkedin logo"
                        class="w-5 h-5 object-contain">
                </a>
                <a href="https://www.youtube.com/channel/UCLZ0P-RRdr7k5j2dxhNlObg" target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img data-original="{{ asset('assets/logo/youtube.png') }}" alt="youtube logo"
                        class="w-5 h-5 object-contain">
                </a>
            </div>
            <p class="text-sm text-white">Copyright c 2021. ALL-in Eduspace.All rights reserved</p>
        </div>
    </div>
</footer>
