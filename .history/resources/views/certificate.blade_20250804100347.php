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
                <div class="pt-32 pb-14 md:pb-20 mx-5 lg:mx-36 2xl:mx-61 flex flex-col lg:flex-row lg:justify-between max-w-[1500px]"
                    id="hero-section">
                    <div class="">
                        <div class="mx-auto w-96 md:w-full lg:w-120 mb-5 lg:mb-8.5">
                            <h2
                                class="text-5xl text-center lg:text-start md:text-5xl leading-[49.92px] md:leading-[49.92px] lg:leading-[89.44px] lg:text-8xl font-semibold tracking-tightest text-white ">
                                Mari Terhubung
                            </h2>
                        </div>
                        <div class="md:w-[470px] md:mx-auto">
                            <div class="w-85 md:w-96 lg:w-100 mx-auto lg:mx-0">
                                <p
                                    class="tracking-tightest text-lg text-center lg:text-start text-white md:leading-relaxed">
                                    Hubungi kami untuk mendiskusikan kebutuhan <br class="hidden md:inline lg:hidden" />
                                    proyek Anda dan temukan solusi terbaik bersama kami.</p>
                            </div>
                            <hr class="outline-1 outline-offset-[-0.50px] text-white/60 my-5 lg:my-11.5">
                            <div class="w-[398px] mb-13 lg:mb-0">
                                <div class="flex justify-between mb-8">
                                    <div class="flex flex-col gap-y-1.5">
                                        <p class="text-neutral-400 text-base font-semibold tracking-tightest">Email</p>
                                        <p class="text-white text-lg font-medium leading-relaxed tracking-tightest">
                                            hello@gmail.com</p>
                                    </div>
                                    <div class="flex flex-col gap-y-1.5">
                                        <p class="text-neutral-400 text-base font-semibold tracking-tightest">Phone</p>
                                        <p class="text-white text-lg font-medium leading-relaxed tracking-tightest">
                                            +62 123 - 4567 - 8901</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-y-1.5">
                                        <p class="text-neutral-400 text-base font-semibold tracking-tightest">Location
                                        </p>
                                        <p class="text-white text-lg font-medium leading-relaxed tracking-tightest">
                                            West alamor street, Los Santos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:px-3 lg:px-0 xl:w-[703px]">
                        <div
                            class="p-5 md:p-12 bg-neutral-900/80 rounded-[20px] outline-1 outline-offset-[-1px] outline-black">
                            <form action="" method="">
                                <div class="md:flex md:gap-x-5">
                                    <div class="mb-2.5 md:w-full">
                                        <label for="name"
                                            class="block mb-2.5 tracking-tightest text-white text-lg font-medium">Nama</label>
                                        <input type="name" id="name"
                                            class="bg-neutral-800 tracking-tighter text-white/50 text-lg rounded-md block w-full px-3.5 py-3"
                                            required />
                                    </div>
                                    <div class="mb-2.5 md:w-full">
                                        <label for="email"
                                            class="block mb-2.5 tracking-tightest text-white text-lg font-medium">Email</label>
                                        <input type="email" id="email"
                                            class="bg-neutral-800 tracking-tighter text-white/50 text-lg rounded-md block w-full px-3.5 py-3"
                                            placeholder="contoh@gmail.com" required />
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label for="phone"
                                        class="block mb-2.5 tracking-tightest text-white text-lg font-medium">Phone
                                        <span
                                            class="text-white/60 text-lg font-medium tracking-tighter">(Opsional)</span></label>
                                    <input type="number" id="phone"
                                        class="bg-neutral-800 tracking-tighter text-white/50 text-lg rounded-md block w-full px-3.5 py-3" />
                                </div>
                                <div class="mb-6">
                                    <label for="message"
                                        class="block mb-2.5 tracking-tightest text-white text-lg font-medium">Message</label>
                                    <textarea type="text" id="message"
                                        class="bg-neutral-800 tracking-tighter text-white/50 text-lg rounded-md block w-full px-3.5 py-3"
                                        placeholder="Masukkan pesan"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="flex items-center justify-between bg-white text-black font-semibold w-full px-4 py-2 rounded-full shadow-md hover:bg-white/80 hover:cursor-pointer transition duration-300">
                                        <span class="mx-auto tracking-tightest">Submit form</span>
                                        <span
                                            class="flex items-center justify-center w-8 h-8 rounded-full bg-sky-500 text-white ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2">
                                                <path d="M7 17L17 7M7 7h10v10" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/certificate.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
