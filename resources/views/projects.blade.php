<x-layouts.main-layout>
    <x-slot:title>
        Client Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section>
        <div class="pt-36 mx-5 lg:mx-36 2xl:mx-61 pb-20 lg:pb-44.5 max-w-[1500px]" id="hero-section">
            <div class="w-80 md:w-96 lg:w-200 mx-auto mb-8.5 lg:mb-5.5 ">
                <h2
                    class="text-black text-5xl lg:text-8xl font-semibold tracking-tightest text-center md:leading-[49.92px] lg:leading-[89.44px]">
                    Desain
                    Inovatif, Hasil yang
                    Berkesan</h2>
            </div>
            <div class="mx-auto w-90 md:w-155 lg:w-214">
                <p
                    class="self-stretch text-neutral-400 text-lg font-normal leading-relaxed tracking-tightest text-center">
                    Telusuri portofolio proyek kami yang unik dan fungsional, menggabungkan kreativitas, ketahanan, dan
                    efisiensi. Setiap karya mencerminkan keahlian kami dalam mengubah ruang menjadi lingkungan yang luar
                    biasa dan bernilai jangka panjang.</p>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- PROJECTS START --}}
    <section>
        <div class="mx-5 lg:mx-24 2xl:mx-61 mb-12.5 max-w-[1500px]">
            <div
                class="grid grid-cols-1  md:grid-cols-2 px-5 md:px-0 gap-y-13 lg:gap-y-0 md:gap-x-12.5 lg:gap-x-0 2xl:gap-x-34">
                <div class="gap-y-13 lg:gap-y-0 grid grid-cols-1">
                    {{-- CARD 1 --}}
                    <div class="w-full bg-white flex flex-col lg:flex-row h-full lg:gap-x-7 md:h-[600px] lg:h-fit"
                        id="card-1-projects">

                        <div class="rounded-2xl overflow-hidden">
                            <img class="w-full lg:w-56 xl:w-72 lg h-80 md:h-64 lg:h-80 lg:rounded-2xl object-cover"
                                src="{{ asset('images/projects/img-room-projects.webp') }}" alt="" />
                        </div>

                        <div
                            class="px-3 lg:px-0 pt-10 md:pt-6 lg:pt-0 pb-5 lg:pb-0 flex flex-col flex-1 justify-between lg:justify-start">
                            <!-- Bagian atas -->
                            <div class="">
                                <h5
                                    class="text-3xl font-semibold tracking-tightest text-black leading-10 2xl:leading-[48px]">
                                    Modern Urban Loft Transformation
                                </h5>
                                <div class="w-80 lg:w-full mt-1.5 lg:mt-4 mb-19 lg:my-4">
                                    <p class="text-neutral-400 text-lg font-normal tracking-tightest ">
                                        Bangunan gedung menciptakan ruang fungsional yang menunjang aktivitas manusia
                                        secara
                                        efisien dan berkelanjutan.
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol tetap di bawah -->
                            <div class="">
                                <a href="#"
                                    class="block text-lg text-black w-fit font-semibold underline tracking-tightest leading-relaxed hover:text-blue-500 transition duration-500">
                                    Lihat proyek
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- CARD 2 --}}
                    <div class="w-full bg-white  flex flex-col h-full md:h-[600px]" id="card-2-projects">

                        <div class="rounded-2xl overflow-hidden">
                            <img class="w-full h-80 md:h-64 lg:h-96 object-cover"
                                src="{{ asset('images/projects/img-landmark-projects.webp') }}" alt="" />
                        </div>

                        <div class="px-3 pt-10 md:pt-6 lg:pt-15 pb-5 flex flex-col flex-1 justify-between ">
                            <!-- Bagian atas -->
                            <div class="">
                                <h5 class="text-3xl font-semibold tracking-tightest text-black leading-10">
                                    Revitalizing Historical Landmarks
                                </h5>
                                <div class="w-75 lg:w-full 2xl:w-140  mt-1.5 mb-19 lg:mb-12 lg:mt-4 lg:my-4">
                                    <p class="text-neutral-400 text-lg font-normal tracking-tightest ">
                                        We revamped a dated urban loft, blending industrial and contemporary design for
                                        a
                                        unique, stylish space.
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol tetap di bawah -->
                            <div class="flex-1  md:flex md:items-end">
                                <a href="#"
                                    class="block text-lg text-black w-fit font-semibold underline tracking-tightest leading-relaxed hover:text-blue-500 transition duration-500">
                                    Lihat proyek
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- CARD 3 --}}
                    <div class="w-full bg-white flex flex-col h-full md:h-[600px] lg:h-fit lg:flex-row" id="card-below">

                        <div class="rounded-2xl overflow-hidden ">
                            <img class="w-full lg:w-64 2xl:w-72 h-80 lg:h-80 lg:rounded-2xl md:h-64 object-cover"
                                src="{{ asset('images/projects/img-tree-and-building-projects.webp') }}"
                                alt="" />
                        </div>

                        <div class="px-3 pt-10 md:pt-6 pb-5 flex flex-col flex-1 justify-between lg:justify-start">
                            <!-- Bagian atas -->
                            <div class="">
                                <div class="lg:w-full 2xl:w-64">
                                    <h5 class="text-3xl font-semibold tracking-tightest text-black leading-10">
                                        Luxury Waterfront Villa
                                    </h5>
                                </div>
                                <div class="w-75 lg:w-full 2xl:w-72 mt-1.5 mb-19 md:mb-28 lg:mb-12">
                                    <p class="text-neutral-400 text-lg font-normal tracking-tightest ">
                                        We revamped a dated urban loft, blending industrial and contemporary design for
                                        a
                                        unique, stylish space.
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol tetap di bawah -->
                            <div class="flex-1 lg:flex-none md:flex md:items-end lg:items-start">
                                <a href="#"
                                    class="block text-lg text-black w-fit font-semibold underline tracking-tightest leading-relaxed hover:text-blue-500 transition duration-500">
                                    Lihat proyek
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-y-13 lg:gap-y-32 grid grid-cols-1 lg:pl-12 lg:w-full">
                    {{-- CARD 4 --}}
                    <div class="w-full bg-white flex flex-col h-full md:h-[600px]" id="card-1-projects">

                        <div class="rounded-2xl overflow-hidden">
                            <img class="w-full h-80 md:h-64 lg:h-96 object-cover "
                                src="{{ asset('images/projects/img-chair-and-swimpool-projects.webp') }}"
                                alt="" />
                        </div>

                        <div class="px-3 pt-10 md:pt-6 lg:pt-15 pb-5 flex flex-col flex-1 justify-between ">
                            <!-- Bagian atas -->
                            <div>
                                <h5 class="text-3xl font-semibold tracking-tightest text-black leading-10">
                                    Eco-Friendly Residential Development
                                </h5>
                                <div class="w-80 lg:w-full mt-1.5 lg:mt-4 mb-19 lg:mb-12">
                                    <p class="text-neutral-400 text-lg font-normal tracking-tightest ">
                                        We revamped a dated urban loft, blending industrial and contemporary design for
                                        a
                                        unique, stylish space.
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol tetap di bawah -->
                            <div class="flex-1 md:flex md:items-end">
                                <a href="#"
                                    class="block text-lg text-black w-fit font-semibold underline tracking-tightest leading-relaxed hover:text-blue-500 transition duration-500">
                                    Lihat proyek
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- CARD 5 --}}
                    <div class="w-full bg-white flex flex-col lg:flex-row-reverse h-full lg:gap-x-7 md:h-[600px] lg:h-[350px]"
                        id="card-5-projects">

                        <div class="rounded-2xl overflow-hidden">
                            <img class="w-full lg:w-72 h-80 md:h-64 lg:h-full lg:rounded-2xl object-cover"
                                src="{{ asset('images/projects/img-office-projects.webp') }}" alt="" />
                        </div>

                        <div
                            class="px-3 lg:px-0 pt-10 md:pt-6 lg:pt-0 pb-5 lg:pb-0 flex flex-col flex-1 justify-between lg:justify-start">
                            <!-- Bagian atas -->
                            <div class="">
                                <div class="2xl:w-64">
                                    <h5
                                        class="text-3xl font-semibold tracking-tightest text-black leading-10 lg:leading-[48px]">
                                        High-Tech Office Space Design
                                    </h5>
                                </div>
                                <div class="w-80 lg:w-full mt-1.5 lg:mt-4 mb-19 lg:mb-12">
                                    <p class="text-neutral-400 text-lg font-normal tracking-tightest ">
                                        We revamped a dated urban loft, blending industrial and contemporary design for
                                        a unique, stylish space.
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol tetap di bawah -->
                            <div class="">
                                <a href="#"
                                    class="block text-lg text-black w-fit font-semibold underline tracking-tightest leading-relaxed hover:text-blue-500 transition duration-500">
                                    Lihat proyek
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- CARD 6 --}}
                    <div class="w-full bg-white flex flex-col h-full md:h-[600px] lg:h-[623px]" id="card-below">

                        <div class="rounded-2xl overflow-hidden">
                            <img class="w-full h-80 md:h-64 lg:h-96 object-cover"
                                src="{{ asset('images/projects/img-park-projects.webp') }}" alt="" />
                        </div>

                        <div class="px-3 pt-10 md:pt-6 lg:pt-15 pb-5 flex flex-col flex-1 justify-between ">
                            <!-- Bagian atas -->
                            <div class="">
                                <div class="w-80 lg:w-96">
                                    <h5 class="text-3xl font-semibold tracking-tightest text-black leading-10">
                                        Sustainable Urban Park Design
                                    </h5>
                                </div>
                                <div class="w-75 lg:w-full mt-1.5 lg:mt-4 mb-19 lg:mb-12">
                                    <p class="text-neutral-400 text-lg font-normal tracking-tightest ">
                                        We revamped a dated urban loft, blending industrial and contemporary design for
                                        a
                                        unique, stylish space.
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol tetap di bawah -->
                            <div class="flex-1 md:flex md:items-end">
                                <a href="#"
                                    class="block text-lg text-black w-fit font-semibold underline tracking-tightest leading-relaxed hover:text-blue-500 transition duration-500">
                                    Lihat proyek
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- PROJECTS END --}}

    {{-- TESTIMONIAL START --}}
    <section>
        <div class="mx-5 lg:mx-36 2xl:mx-61 mb-12.5 lg:mb-24 max-w-[1500px]">
            <div class="">
                <p class="text-sky-700 text-lg font-semibold leading-relaxed tracking-tightest">
                    Testimonials
                </p>
            </div>
            <div id="my-carousel" class="relative w-full">
                <div class="my-8 md:my-13 relative h-75 md:h-44 lg:h-64 overflow-hidden">
                    <div class="hidden duration-700 ease-in-out" id="carousel-item-1">
                        <h2
                            class="text-black text-4xl lg:text-6xl lg:leading-16 font-semibold tracking-tightest leading-10">
                            “Lorem
                            ipsum dolor
                            sit amet
                            consectetur
                            adipiscing elit. Amet consectetur adipiscing elit quisque faucibus ex sapien. Quisque
                            faucibus
                            ex
                            sapien vitae pellentesque sem placerat.”</h2>
                    </div>
                    <div class="hidden duration-700 ease-in-out" id="carousel-item-2">
                        <h2
                            class="text-black text-4xl lg:text-6xl lg:leading-16 font-semibold tracking-tightest leading-10">
                            “Lorem
                            ipsum dolor
                            sit amet
                            consectetur
                            adipiscing elit. Amet consectetur adipiscing elit quisque faucibus ex sapien. Quisque
                            faucibus test 2 jan
                            ex
                            sapien vitae pellentesque sem placerat.”</h2>
                    </div>
                    <div class="hidden duration-700 ease-in-out" id="carousel-item-3">
                        <h2
                            class="text-black text-4xl lg:text-6xl lg:leading-16 font-semibold tracking-tightest leading-10">
                            “Lorem
                            ipsum dolor
                            sit amet
                            consectetur
                            adipiscing elit. Amet consectetur adipiscing elit quisque faucibus ex sapien. Quisque
                            faucibus test 3 jan
                            ex
                            sapien vitae pellentesque sem placerat.”</h2>
                    </div>
                    <div class="hidden duration-700 ease-in-out" id="carousel-item-4">
                        <h2
                            class="text-black text-4xl lg:text-6xl lg:leading-16 font-semibold tracking-tightest leading-10">
                            “Lorem
                            ipsum dolor
                            sit amet
                            consectetur
                            adipiscing elit. Amet consectetur adipiscing elit quisque faucibus ex sapien. Quisque
                            faucibus test 4 jan
                            ex
                            sapien vitae pellentesque sem placerat.”</h2>
                    </div>
                </div>

                {{-- Indicators --}}
                <div class="flex md:w-full ">
                    <div class="block lg:block gap-y-2.5 pt-8 md:pt-13 border-t-1 border-black/60 w-1/2"
                        id="carousel-indicator-1" aria-label="Slide 1">
                        <div>
                            <h2 class="text-black text-lg font-semibold leading-relaxed tracking-tightest">
                                Jane Doe
                            </h2>
                        </div>
                        <div>
                            <h3 class="text-black text-lg font-normal leading-relaxed tracking-tight">
                                CEO of Brand Ipsum
                            </h3>
                        </div>
                    </div>
                    <div class="block lg:block gap-y-2.5 pt-8 md:pt-13 border-t-1 border-black/60 w-1/2"
                        aria-current="false" id="carousel-indicator-2" aria-label="Slide 1">
                        <div>
                            <h2 class="text-black text-lg font-semibold leading-relaxed tracking-tightest">
                                Jane Doe 2
                            </h2>
                        </div>
                        <div>
                            <h3 class="text-black text-lg font-normal leading-relaxed tracking-tight">
                                CEO of Brand Ipsum
                            </h3>
                        </div>
                    </div>
                    <div class="hidden lg:block gap-y-2.5 pt-8 md:pt-13 border-t-1 border-black/60 w-1/2"
                        aria-current="false" id="carousel-indicator-3" aria-label="Slide 1">
                        <div>
                            <h2 class="text-black text-lg font-semibold leading-relaxed tracking-tightest">
                                Jane Doe 3
                            </h2>
                        </div>
                        <div>
                            <h3 class="text-black text-lg font-normal leading-relaxed tracking-tight">
                                CEO of Brand Ipsum
                            </h3>
                        </div>
                    </div>
                    <div class="hidden lg:block gap-y-2.5 pt-8 md:pt-13 border-t-1 border-black/60 w-1/2"
                        aria-current="false" id="carousel-indicator-4" aria-label="Slide 1">
                        <div>
                            <h2 class="text-black text-lg font-semibold leading-relaxed tracking-tightest">
                                Jane Doe 4
                            </h2>
                        </div>
                        <div>
                            <h3 class="text-black text-lg font-normal leading-relaxed tracking-tight">
                                CEO of Brand Ipsum
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TESTIMONIAL END --}}

    {{-- CLIENTS START --}}
    <div class="mx-5 mb-12.5 lg:mb-24 lg:mx-36 2xl:mx-61 max-w-[1500px]">
        <div class="grid grid-cols-2 lg:grid-cols-3 border border-black w-full"
            id="big-hero-content-projects-grid-clients">
            <!-- Telkom Indonesia -->
            <div class="border border-black p-4 lg:p-8 flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/img-telkom-indonesia-black.webp') }}"
                    alt="logo telkom indonesia" class="h-16 lg:h-20">
            </div>
            <!-- Telkomsel -->
            <div class="border border-black p-4 lg:p-8 flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-telkomsel-welcome.webp') }}" alt="logo telkomsel"
                    class="h-16 md:h-20 lg:h-20">
            </div>

            <!-- Jasa Marga -->
            <div class="border border-black p-4 lg:p-8 flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-jasamarga-welcome.webp') }}" alt="logo jasamarga"
                    class="h-16 md:h-20 lg:h-20">
            </div>
            <!-- Bank BRI -->
            <div class="border border-black p-4 lg:p-8 flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-bank-bri-welcome.webp') }}" alt="Logo Bank BRI"
                    class="h-8 md:h-11 lg:h-16">
            </div>

            <!-- Kementerian PUPR -->
            <div class="border border-black p-4 lg:p-8 flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-kementrian-pupr-welcome.webp') }}"
                    alt="logo kementerian pupr" class="h-16 md:h-20 lg:h-20">
            </div>
            <!-- Kementerian Perhubungan -->
            <div class="border border-black p-4 lg:p-8 flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-kementrian-perhubungan-welcome.webp') }}"
                    alt="logo kementerian perhubungan" class="h-16 md:h-20 lg:h-20">
            </div>
            <!-- Kementerian Kelautan -->
            <div class="border border-black p-4 lg:p-8 hidden lg:flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-kementrian-kelautan-welcome.webp') }}"
                    alt="logo kementerian kelautan" class="h-16 md:h-20 lg:h-20">
            </div>
            <!-- Pertamina -->
            <div class="border border-black p-4 lg:p-8 hidden lg:flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/img-pertamina-black.webp') }}" alt="logo pertamina"
                    class="h-16 md:h-20 lg:h-16">
            </div>
            <!-- Angkasa Pura -->
            <div class="border border-black p-4 lg:p-8 hidden lg:flex items-center justify-center">
                <img src="{{ asset('images/welcome/logo/logo-angkasa-pura-welcome.webp') }}" alt="logo angkasa pura"
                    class="h-16 md:h-20 lg:h-20">
            </div>
        </div>
    </div>
    {{-- CLIENTS END --}}

    {{-- CONTACT COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 max-w-[1500px]">
        <x-contact-us-card />
    </section>
    {{-- CONTACT COMPONENT END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-20 lg:mt-22 max-w-[1500px]">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/projects.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
