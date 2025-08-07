<x-layouts.main-layout>
    <x-slot:title>
        Material Kami | BIMA BAHAMA NUSANTARA
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
                    class="text-black text-5xl lg:text-8xl leading-[49.92px] lg:leading-24 font-semibold tracking-tightest">
                    Material Terbaik untuk Hasil Terbaik</h2>
            </div>
            <div class="w-96 md:w-160 mb-15 md:mb-20 lg:mb-37">
                <p class="text-black text-lg font-normal leading-relaxed tracking-tightest">Kami hanya menggunakan
                    material unggulan yang telah teruji untuk memastikan hasil konstruksi yang kuat, tahan lama, dan
                    sesuai standar teknis.</p>
            </div>
        </div>
        <div class="">
            <img src="{{ asset('images/material/img-hero-material.webp') }}" class="object-cover lg:h-full"
                alt="image building hero">
        </div>
    </section>
    {{-- HERO END --}}

    {{-- MATERIAL START --}}
    <section>
        <div class="mx-5 lg:mx-36 2xl:mx-61 mt-12 md:mt-18.5 lg:mt-23 max-w-[1500px]">

            {{-- CONTAINER UNTUK FILTER --}}
            <div id="product-filters-container"
                class="flex w-96 md:w-150 lg:w-full flex-wrap gap-y-2.5 gap-x-15 lg:gap-x-16.5 mb-18">
            </div>

            {{-- CONTAINER UNTUK PRODUK --}}
            <div>
                {{-- Container untuk produk-produk kategori lain --}}
                <div id="product-cards-container"
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-3 lg:gap-x-6.5 gap-y-4 md:gap-y-5 lg:gap-y-6.5">
                </div>

                {{-- KONTENER BARU KHUSUS UNTUK MESIN (Carousel) --}}
                <div id="machines-cards-container"
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-11.5 md:gap-y-10 lg:gap-y-7 md:gap-x-3.5 lg:gap-x-7">
                </div>
                {{-- KONTENER BARU KHUSUS UNTUK PERKUATAN STRUKTUR --}}
                <div id="reinforcement-cards-container"
                    class="grid grid-cols-1 gap-y-12 md:gap-y-7 lg:gap-y-9.5 md:grid-cols-2 md:gap-x-9.5 lg:grid-cols-4">
                </div>
            </div>

                {{-- Mata Gerinda --}}

            </div>
        </div>
    </section>
    {{-- MATERIAL END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-20 lg:mt-26 max-w-[1500px]">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/material.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
