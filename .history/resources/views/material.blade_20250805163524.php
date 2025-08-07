<x-layouts.main-layout>
    <x-slot:title>
        Cara Kami Bekerja | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section class="lg:flex lg:gap-x-12" id="hero-section">
        <div class="mx-5 lg:mx-0 lg:ml-36 2xl:ml-61 pt-40 ">
            <div>
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">Material</p>
            </div>
            <div class="w-80 md:w-96 lg:w-160 my-5 md:my-8.5 lg:my-3.5">
                <h2
                    class="text-black text-5xl lg:text-7xl leading-[49.92px] lg:leading-18 font-semibold tracking-tightest">
                    Mitra
                    Terpercaya dan
                    Klien yang Puas</h2>
            </div>
            <div class="w-80 md:w-160 mb-15 md:mb-20 lg:mb-37">
                <p class="text-black text-lg font-normal leading-relaxed tracking-tightest">Kami dipercaya oleh berbagai
                    perusahaan dari beragam sektor industri karena konsistensi kami dalam menghadirkan solusi konstruksi
                    dan perkuatan struktur yang berkualitas, efisien, dan inovatif.</p>
            </div>
        </div>
        <div class="lg:bg-blue-400">
            <img src="{{ asset('images/works/img-building-hero-works.webp') }}" class="object-cover lg:h-full"
                alt="image building hero">
        </div>
    </section>
    {{-- HERO END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-20 lg:mt-26">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/material.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
