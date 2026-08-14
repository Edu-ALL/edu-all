<footer class="bg-[#00003F] font-secondary">
    <div class="new-main-container py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 md:gap-4 lg:gap-x-10 gap-y-12">
            <div class="flex flex-col sm:col-span-2">
                <img src="{{ asset('assets/logo/eduall-white-2026.png') }}" width="140" height="auto" class="-ml-2"
                    alt="{{ $website_settings->alt_secondary_logo }}" title="{{ $website_settings->alt_secondary_logo }}"
                    loading="lazy">

                <p class="text-gray-400 my-5">
                    Independent university admissions consultant based in Jakarta. Helping students around the world to build standout profiles and secure places at top universities worldwide.
                </p>

                <a href="#" class="text-gray-400 mb-2">
                    <i class="fa-solid fa-phone mr-2"></i>
                    @if ($website_settings->phone_number_3 != null)
                        +62 {{ $website_settings->phone_number_3 }}
                    @endif
                </a>

                <a href="mailto:{{ $website_settings->email }}" class="text-gray-400 mb-2">
                    <i class="fa-solid fa-envelope mr-2"></i>
                    {{ $website_settings->email }}
                </a>

                <div class="font-normal text-base text-gray-400 flex">
                    <i class="fa-solid fa-location-dot mr-2"></i>
                    {!! $website_settings->address !!}
                </div>
            </div>
            <div class="flex flex-col sm:col-span-2">
                @php
                    use App\Models\Blogs;
                    $lang = substr(app()->getLocale(), 3, 2);
                    $latest = Blogs::latest()->where('lang', $lang)->where('blog_status', 'publish')->take(2)->get();
                @endphp

                <h4 class="text-lg text-white mb-8">
                    Recent Posts
                </h4>
                <div class="grid grid-cols-1 gap-3">
                    @foreach ($latest as $blog)
                        <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                            class="block mb-3">
                            <div class="flex gap-3">
                                <div class="w-[23%]">
                                    <img width="100%" height="95px"
                                        data-original="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                        alt="EduALL | {{ $blog->blog_thumbnail_alt }}"
                                        class="h-[70px] object-cover object-center rounded-md">
                                </div>
                                <div class="w-[77%]">
                                    <p class="text-gray-200 leading-5 mb-3">
                                        {{ $blog->blog_title }}
                                    </p>

                                    <p class="text-sm text-gray-400 leading-5">
                                        {{ Carbon\Carbon::parse($blog->updated_at)->format('F d, Y') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
            <div class="flex flex-col">
                <h4 class="text-lg text-white mb-8">
                    Informations
                </h4>
                @foreach (__('pages/footer.informations') as $item)
                    <a href="{{ url(app()->getLocale() . $item['link']) }}"
                        class="flex justify-between items-center text-gray-400 mb-2 hover:text-white/90">
                        <p class="">{{ $item['title'] }}</p>
                    </a>
                @endforeach


                 <h4 class="text-lg text-white mt-8 mb-5">
                     Language
                 </h4>
                 <select id="language-selector" class="bg-[#00003F] text-gray-400 border border-gray-600 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-white cursor-pointer hover:text-white/90">
                     <option value="id-en" {{ app()->getLocale() == 'id-en' ? 'selected' : '' }}>English</option>
                     <option value="id-id" {{ app()->getLocale() == 'id-id' ? 'selected' : '' }}>Indonesia</option>
                 </select>
            </div>
            <div class="flex flex-col">
                <h4 class="text-lg text-white mb-8">
                    Categories
                </h4>

                @foreach (__('pages/footer.categories') as $item)
                    <a href="{{ url(app()->getLocale() . $item['link']) }}"
                        class="flex justify-between items-center text-gray-400 mb-2 hover:text-white/90">
                        <p class="">{{ $item['title'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        <div
            class="mt-14 border-t-2 border-light pt-10 gap-8 flex flex-wrap justify-center md:justify-between items-center">
            <p class="text-sm text-gray-400">Copyright © {{ date('Y') }}. PT. Jawara Edukasih Indonesia</p>

            <a href="#" class="text-sm text-gray-400 hover:text-white flex items-center justify-end gap-5">
                Back to Top
                <div class="bg-dark py-1 px-3 rounded-md text-center">
                    <i class="fa-solid fa-angles-up "></i>
                </div>
            </a>
        </div>
    </div>
</footer>

<script>
    document.getElementById('language-selector').addEventListener('change', function() {
        const selectedLocale = this.value;
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        
        // Replace the locale in the URL path
        // Pattern: /{locale}/... or /{locale}
        const pathParts = url.pathname.split('/');
        
        // Check if first part is a locale (id-en or id-id)
        if (pathParts[1] === 'id-en' || pathParts[1] === 'id-id') {
            pathParts[1] = selectedLocale;
            url.pathname = pathParts.join('/');
        }
        
        // Redirect to the new URL
        window.location.href = url.toString();
    });
</script>
