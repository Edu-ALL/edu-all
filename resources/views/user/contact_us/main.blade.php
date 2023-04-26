@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/contact_us/contact_us.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/contact_us/contact_us.meta_title') }}" />
    <meta name="description" content="{{ __('pages/contact_us/contact_us.meta_description') }}" />
@endsection

@section('content')
    <section class="pt-20 pb-10">
        <div class="main-container">

            <div class="flex flex-col max-w-4xl mx-auto gap-x-20 md:flex-row">
                <div class="flex flex-col w-full md:w-1/2">
                    <h2 class="mb-6 font-primary font-bold text-2xl text-primary uppercase">
                        {{ __('pages/contact_us/contact_us.title') }}
                    </h2>

                    <form action="">
                        <div class="flex flex-col">
                            <h4 class="font-primary text-base">Fields marked with an <span class="text-red-500">*</span> are
                                required</h4>
                            <div class="flex flex-col mb-4">
                                <label for="name">Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" class="border-[#e3e3e3] rounded-[4px]"
                                    required="">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label for="email">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" class="border-[#e3e3e3] rounded-[4px]"
                                    required="">
                            </div>
                            <div class="flex flex-col mb-6">
                                <label for="message">Message <span class="text-red-500">*</span></label>
                                <textarea name="message" id="message" cols="20" rows="3" class="border-[#e3e3e3] rounded-[4px]"></textarea>
                            </div>
                            <button type="submit" class="w-full text-left"><span
                                    class="inline-block px-6 py-1.5 font-primary font-semibold text-base text-white rounded-sm bg-yellow">SEND</span></button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-col w-full md:w-1/2">
                    <div class="flex flex-col gap-y-3 mb-6">
                        <h5 class="font-primary font-semibold text-xl text-[#7A7A7A] ">Address</h5>
                        <p class="font-primary text-lg text-[#7a7a7a]">{!! __('pages/contact_us/contact_us.address') !!}</p>
                    </div>

                    <div class="flex flex-col gap-y-3 mb-6">
                        <h5 class="font-primary font-semibold text-xl text-[#7A7A7A] ">Telephone</h5>
                        <div class="flex flex-col">
                            @foreach (__('pages/contact_us/contact_us.telephone') as $item)
                                <a target="_blank" href="tel:{{ $item[0] }}"
                                    class="font-primary text-lg">{{ $item[1] }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3 mb-6">
                        <h5 class="font-primary font-semibold text-xl text-[#7A7A7A] ">E-mail</h5>
                        <a target="_blank" href="mailto:info@all-inedu.com"
                            class="font-primary text-lg">{!! __('pages/contact_us/contact_us.email') !!}</a>
                    </div>
                    <div class="flex flex-col gap-y-3 mb-6">
                        <h5 class="font-primary font-semibold text-xl text-[#7A7A7A] ">Youtube</h5>
                        <a target="_blank" href="https://www.youtube.com/channel/UCLZ0P-RRdr7k5j2dxhNlObg"
                            class="font-primary text-lg">{{ __('pages/contact_us/contact_us.youtube') }}</a>
                    </div>
                    <div class="flex flex-col gap-y-3 mb-6">
                        <h5 class="font-primary font-semibold text-xl text-[#7A7A7A] ">Instagram</h5>
                        <a target="_blank" href="https://www.instagram.com/allineduspace/"
                            class="font-primary text-lg">{{ __('pages/contact_us/contact_us.instagram') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-10">
        <iframe loading="lazy"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5379219112997!2d106.7667993143701!3d-6.192523662392545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f71dc19d8199%3A0xa93c41d312faa651!2sALL-in%20Eduspace!5e0!3m2!1sen!2sid!4v1598844119982!5m2!1sen!2sid"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0" data-rocket-lazyload="fitvidscompatible" class="lazyloaded" data-ll-status="loaded"></iframe>
    </div>
@endsection
