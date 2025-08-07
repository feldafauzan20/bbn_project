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
            <div class="w-96 lg:w-160 my-5 md:my-8.5 lg:my-3.5">
                <h2
                    class="text-black text-5xl lg:text-7xl leading-[49.92px] lg:leading-18 font-semibold tracking-tightest">
                    Material Terbaik untuk Hasil Terbaik</h2>
            </div>
            <div class="w-96 md:w-160 mb-15 md:mb-20 lg:mb-37">
                <p class="text-black text-lg font-normal leading-relaxed tracking-tightest">Kami hanya menggunakan
                    material unggulan yang telah teruji untuk memastikan hasil konstruksi yang kuat, tahan lama, dan
                    sesuai standar teknis.</p>
            </div>
        </div>
        <div class="lg:bg-blue-400">
            <img src="{{ asset('images/works/img-building-hero-works.webp') }}" class="object-cover lg:h-full"
                alt="image building hero">
        </div>
    </section>
    {{-- HERO END --}}

    {{-- MATERIAL START --}}
    <section>
        <div class="bg-red-400 mx-5 mt-12">
            <div class="flex w-96 flex-wrap gap-y-2.5 gap-x-15 bg-blue-600">
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Material Komofloor</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Material Komowrap</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Material Komoproof</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Mesin dan
                    Perlengkapan</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Perkuatan Struktur</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Mata Gerinda</a>
            </div>

            {{-- Komofloor --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class=" bg-stone-50 w-full md:w-80 md: md:flex-1 rounded-[20px] shadow-sm">
                    <div>
                        <img class="rounded-t-[20px] object-cover w-full h-80"
                            src="{{ asset('images/services/img-water-dam-services.webp') }}" alt="" />
                    </div>
                    <div class="py-5 px-3">
                        <div class="mb-1.5">
                            <h5 class=" text-3xl font-semibold tracking-tightest leading-10 text-black">
                                Bangunan Air</h5>
                        </div>
                        <div class="w-70 mb-25">
                            <p class="text-neutral-400 text-lg tracking-tightest font-normal leading-relaxed">
                                Menyediakan layanan pembangunan bangunan air yang berfungsi untuk mendistribusikan
                                sumber daya air secara efektif dan berkelanjutan.</p>
                        </div>
                        <div>
                            <a href=""
                                class="self-stretch justify-start text-black text-lg font-semibold tracking-tightest underline leading-relaxed">View
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- MATERIAL END --}}

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
