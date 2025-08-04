<x-layouts.main-layout>
    <x-slot:title>
        Sertifikat Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 ">
        <div class="max-w-[1500px] lg:mx-36 2xl:mx-61">
            <div class="relative flex py-6 items-center justify-between md:px-3 lg:px-0">

                <!-- Mobile menu button -->
                <div class="absolute inset-y-0 left-0 flex items-center w-full lg:hidden justify-end pr-3">
                    <button id="mobile-menu-button" type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2  text-black hover:cursor-pointer hover:text-white focus:outline-none">
                        <span class="sr-only">Toggle menu</span>
                        <svg id="icon-open" class="block size-6 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <!-- Bar atas -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18" />
                            <!-- Bar tengah (lebih panjang ke kiri) -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M0 12h21" />
                            <!-- Bar bawah -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 18h18" />
                        </svg>
                        <svg id="icon-close" class="hidden size-6 text-black" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Logo dan menu desktop -->
                <div class="flex items-center justify-between w-full">
                    <div class="flex pl-3 items-center">
                        {{-- <img id="logo-white" class="h-8 md:h-10" src="{{ asset('images/logo/logo-bbn-white.webp') }}"
                            alt="Logo"> --}}
                        <img id="logo-blue" class="h-8 md:h-10" src="{{ asset('images/logo/logo-bbn-biru.webp') }}"
                            alt="Logo">
                    </div>

                    <div class="hidden sm:block md:hidden lg:block">
                        <div
                            class="flex space-x-4 text-white tracking-tighter text-lg bg-black rounded-full gap-2.5 pr-2 pl-7 py-3">
                            <a href="#"
                                class="block rounded-md hover:text-blue-500 transition duration-500">Home</a>
                            <a href="#"
                                class="block rounded-md hover:text-blue-500 transition duration-500">Company</a>
                            <a href="#"
                                class="block rounded-md hover:text-blue-500 transition duration-500">Services</a>
                            <a href="#"
                                class="block rounded-md hover:text-blue-500 transition duration-500">Projects</a>
                            <a href="#"
                                class="block rounded-md hover:text-blue-500 transition duration-500">Contact</a>
                            <div class="w-7 h-7 bg-white rounded-full flex items-center justify-center">
                                <a href="" class="text-black text-sm"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:hidden lg:block" id="whatsapp-chat-md-to-lg">
                        <a href="#"
                            class="block text-white w-fit font-semibold border-b pb-2 hover:text-blue-500 transition duration-500 hover:border-b-blue-500 border-b-white">CHAT
                            ON
                            WHATSAPP</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden px-3 pt-6 pb-4 space-y-3 tracking-tighter text-lg">
            <a href="#" class="block rounded-md">Home</a>
            <a href="#" class="block rounded-md">Company</a>
            <a href="#" class="block rounded-md">Services</a>
            <a href="#" class="block rounded-md">Projects</a>
            <a href="#" class="block rounded-md">Contact</a>
            <a href="#"
                class="block text-black w-fit mt-4 font-semibold border-b pb-2 hover:text-blue-500 transition duration-500 hover:border-b-blue-500 border-b-black">CHAT
                ON
                WHATSAPP</a>
        </div>
    </nav>
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section>
        <div class="relative">
            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('/images/certificate/img-building-certificate.webp');">
            </div>
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-black/70"></div>
            <!-- Konten lain di sini jika perlu -->
            <div class="relative h-fit w-full">
                <div class="pt-32 pb-5 md:pb-20 mx-5 lg:mx-36 2xl:mx-61 flex flex-col lg:flex-row lg:justify-between max-w-[1500px]"
                    id="hero-section">
                    <div class="">
                        <div class="w-96 mx-auto mb-8">
                            <h2
                                class="text-white text-center text-5xl font-semibold tracking-tightest leading-[49.92px]">
                                Kualitas yang <br />Teruji dan Diakui
                            </h2>
                        </div>
                        <div class="w-96 mx-auto mb-15">
                            <p
                                class="text-neutral-400 text-center text-lg font-normal tracking-tightest leading-relaxed">
                                Kami memiliki sertifikat uji internasional yang membuktikan kualitas material dan
                                keandalan sistem konstruksi serta perkuatan struktur kami.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 px-5 gap-y-15">

                            {{-- CERTIIFICATE 1 --}}
                            <div class="">
                                <div class="pb-3.5">
                                    <img src="{{ asset('images/certificate/img-certificate-komoproxy-and-komoproof.webp') }}"
                                        class="w-full h-full object-cover" alt="komoproxy and komoproof certificate">
                                </div>
                                <div class="">
                                    <p
                                        class="text-white text-center text-base font-semibold leading-normal tracking-tightest">
                                        KOMOPOXY & KOMOPROOF
                                    </p>
                                </div>
                            </div>

                            {{-- CERTIIFICATE 2 --}}
                            <div class="">
                                <div class="pb-3.5">
                                    <img src="{{ asset('images/certificate/img-certificate-komowrap.webp') }}"
                                        class="w-full h-full object-cover" alt="komoproxy and komoproof certificate">
                                </div>
                                <div class="">
                                    <p
                                        class="text-white text-center text-base font-semibold leading-normal tracking-tightest">
                                        KOMOWRAP
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- ANOTHER CERTIFICATE START --}}
    <section>
        <div class="bg-red-500 mx-5 my-14.5">
            <div class="grid grid-cols-1 md:grid-cols-2 px-5 gap-y-15">
                {{-- CERTIIFICATE 1 --}}
                <div class="">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-komoproxy-and-komoproof.webp') }}"
                            class="w-full h-full object-cover" alt="komoproxy and komoproof certificate">
                    </div>
                    <div class="">
                        <p class="text-white text-center text-base font-semibold leading-normal tracking-tightest">
                            KOMOPOXY & KOMOPROOF
                        </p>
                    </div>
                </div>

                {{-- CERTIIFICATE 2 --}}
                <div class="">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-komowrap.webp') }}"
                            class="w-full h-full object-cover" alt="komoproxy and komoproof certificate">
                    </div>
                    <div class="">
                        <p class="text-white text-center text-base font-semibold leading-normal tracking-tightest">
                            KOMOWRAP
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ANOTHER CERTIFICATE EMD --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/certificate.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
