<x-layouts.main-layout>
    <x-slot:title>
        Hubungi Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 ">
        <div class="max-w-[1500px] lg:mx-36 2xl:mx-61">
            <div class="relative flex py-6 items-center justify-between md:px-3 lg:px-0">

                <!-- Mobile menu button -->
                <div class="absolute inset-y-0 left-0 flex items-center w-full md:hidden justify-end pr-3">
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

                    <div class="hidden sm:block">
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
                    <div class="hidden md:block" id="whatsapp-chat-md-to-lg">
                        <a href="#"
                            class="block text-black w-fit font-semibold border-b pb-2 hover:text-blue-500 transition duration-500 hover:border-b-blue-500 border-b-black">CHAT
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
        <section>
            <div class="relative pb-10 lg:pb-40">
                <!-- Background image -->
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('/images/contact-form/img-building-contact.webp');">
                </div>
                <!-- Overlay gradient -->
                <div class="absolute inset-0 bg-black/70"></div>
                <!-- Konten lain di sini jika perlu -->
                <div class="relative h-fit w-full text-white">
                    <div id="big-hero-content-1" class=" pt-44 text-center flex flex-col items-center w-full mx-auto">
                        <div class="md:block md:mx-24 lg:max-w-4xl w-96 md:w-150 lg:w-200">
                            <h1 class="text-6xl md:text-7xl lg:text-8xl font-semibold tracking-tightest text-white ">
                                We create buildings with precision.
                            </h1>
                        </div>
                        <div class="w-96 md:w-150 lg:w-150 md:max-w-3xl md:mx-16 mx-6 mt-8">
                            <p class="tracking-tightest text-xl text-center ">
                                Our
                                team of
                                visionary
                                architects and
                                designers
                                transforms
                                ideas into
                                breathtaking spaces,
                                blending modern innovation with timeless beauty.</p>
                        </div>
                        <div class="mt-15">
                            <a href=""
                                class="px-14 py-7 bg-black rounded-full text-lg tracking-tightest font-semibold leading-tight hover:bg-blue-600 transition duration-500 ">Download
                                our
                                company profile</a>
                        </div>
                        <div class="w-1 h-36 md:h-48 lg:h-64 my-16 lg:my-24 bg-white/80"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- HERO END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/contact-form.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
