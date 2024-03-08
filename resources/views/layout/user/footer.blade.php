<footer class="bg-dark font-secondary">
    <div class="main-container py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 md:gap-4 lg:gap-x-10 gap-y-12">
            <div class="flex flex-col sm:col-span-2">
                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.address') }}
                </h4>
                <div class="font-normal text-base text-white">
                   {!! $website_settings->address !!}
                </div>

                <hr class="my-8">

                <h4 class="font-bold text-base text-white mb-4">
                    {{ __('pages/footer.consultation') }}
                </h4>
                <p class="font-normal text-base text-white mb-4">
                    {{ __('pages/footer.consultation_sub') }}
                </p>
                <div class="font-normal text-base text-white">
                    <p>
                        {{ __('pages/footer.consultation_desc') }}
                    </p>
                   <div class="flex flex-col">
                        <a target="_blank" href="tel:+62{{ $website_settings->phone_number_1 }}" class="font-newprimary text-lg">+62 {{ $website_settings->phone_number_1 }}</a>
                        @if ($website_settings->phone_number_2 != null)
                            <a target="_blank" href="tel:+62{{ $website_settings->phone_number_2 }}" class="font-newprimary text-lg">+62 {{ $website_settings->phone_number_2 }}</a>
                        @endif
                        @if ($website_settings->phone_number_3 != null)
                            <a target="_blank" href="tel:+62{{ $website_settings->phone_number_3 }}" class="font-newprimary text-lg">+62 {{ $website_settings->phone_number_3 }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:col-span-2">
                @php
                    use App\Models\Blogs;
                    $lang = substr(app()->getLocale(), 3, 2);
                    $latest = Blogs::latest()
                        ->where('lang', $lang)
                        ->where('blog_status', 'publish')
                        ->take(2)
                        ->get();
                @endphp

                <h4 class="font-bold text-base text-white mb-8">
                    {{ __('pages/footer.article') }}
                </h4>
                <div class="grid grid-cols-2 gap-3">
                    @foreach ($latest as $blog)
                        <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                            class="block p-2 bg-[#f4f3f3] hover:bg-[#dfdfdf] rounded transition-all duration-300">
                            <div class="flex flex-col gap-1">
                                <img width="100%" height="95px" data-original="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                    alt="Allineduspace {{ $blog->blog_thumbnail_alt }}"
                                    class="h-[95px] object-cover object-center">
                                <h2
                                    class="font-newprimary font-extrabold text-sm text-newprimary lg:text-sm lg:tracking-normal lg:leading-6">
                                    {{ html_entity_decode(substr(strip_tags($blog->blog_title), 0, 35)) }}...
                                </h2>
                                <span class="inline-flex font-newprimary font-semibold text-xs text-yellow">
                                    {{ $blog->blog_category->category_name }}
                                </span>
                                <p class="font-newprimary font-medium text-sm text-newprimary">
                                    {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 50)) }}...
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <button class="bg-red rounded py-1 px-4 text-white shadow hover:bg-red/75">
                        {{ __('pages/footer.article_button') }}
                    </button>
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
            <img src={{ asset('uploaded_files/'.'website-settings/'. $website_settings->website_secondary_logo) }} width="160" alt="{{ $website_settings->alt_secondary_logo }}" loading="lazy">

            <div class="flex gap-4 items-center justify-between">
                <a href="mailto:{{ $website_settings->email }}" target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/email.png') }}" alt="instagram logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
                <a href={{ $website_settings->instagram }} target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/instagram.png') }}" alt="instagram logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
                <a href={{ $website_settings->linkedin }} target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/linkedin.png') }}" alt="linkedin logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
                <a href={{ $website_settings->youtube_channel }} target="_blank"
                    class="flex items-center justify-center p-2.5 text-2xl text-white rounded-full border border-white bg-[#7e7e7e]/0 transition-all hover:bg-[#7e7e7e]/40">
                    <img src="{{ asset('assets/logo/youtube.png') }}" alt="youtube logo"
                        class="w-5 h-5 object-contain" loading="lazy">
                </a>
            </div>
            <p class="text-sm text-white">Copyright © {{ date('Y') }}. ALL-in Eduspace. All rights reserved</p>
        </div>
    </div>
</footer>
