<x-layouts.main-layout>
    <x-slot:title>
        Detail Pelayanan Kami | BIMA BAHAMA NUSANTARA
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
            <div class="absolute inset-0 bg-cover bg-top lg:bg-center"
                style="background-image: url('/images/welcome/img-building-from-bottom-welcome.webp');">
            </div>
            <!-- Konten lain di sini jika perlu -->
            <div class="relative h-fit w-full">
                <div class="pt-32 pb-31 md:pb-26.5 lg:pb-45 mx-5 lg:mx-36 2xl:mx-61 max-w-[1500px]  lg:h-full lg:flex lg:items-center"
                    id="hero-section">
                    <div class="w-96 bg-red-300 mx-auto md:w-120 lg:w-200">
                        <h2
                            class="text-white text-5xl text-center lg:text-8xl font-semibold tracking-tightest leading-[49.92px] lg:leading-[104px]">
                            Bangunan Gedung
                        </h2>
                    </div>
                    <div class="w-87 bg-yellow-300 mx-auto md:w-120 lg:w-200">
                        <p
                            class="text-white text-lg text-center lg:text-8xl font-medium tracking-tightest lg:leading-[104px]">
                            Bangunan gedung menciptakan ruang fungsional yang menunjang aktivitas manusia secara efisien
                            dan berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}



    {{-- NEXT PROJECTS START --}}
    {{-- <section>
        <div class="mx-5 mb-10.5 lg:mx-36 2xl:mx-61 mt-12.5 md:mt-20 lg:mt-29 md:mb-20 lg:mb-8 max-w-[1500px]"
            id="next-projects-section">
            <div class="md:flex md:justify-between md:mb-9.5 lg:mb-7.5">
                <div class="w-full md:flex md:items-center md:w-110 lg:w-200 mb-8 md:mb-0">
                    <h2
                        class="text-black text-5xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter text-center md:text-start leading-10 md:leading-[52px] lg:leading-[83.20px]">
                        Projek Lainnya</h2>
                </div>
                <div class="flex justify-center mb-12.5 md:mb-0">
                    <a href="#"
                        class="inline-flex items-center bg-black text-white text-lg font-semibold tracking-tightest rounded-full px-11 py-7 hover:bg-blue-600 transition duration-500 space-x-4">

                        <span>Back to all projects</span>

                        <span class="flex items-center justify-center w-7 h-7 bg-white text-black rounded-full">
                            <!-- Panah kanan SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div
                class="flex flex-wrap space-y-7 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-x-7 md:gap-y-5 md:space-y-0">
                <div class="rounded-[20px] overflow-hidden">
                    <div class="relative w-90 lg:w-full h-96 lg:h-full rounded-xl overflow-hidden bg-cover bg-center"
                        style="background-image: url('/images/about/img-building-card1-section5-about.webp');">

                        <!-- Overlay hitam -->
                        <div class="absolute inset-0 bg-black/60"></div>

                        <!-- Konten -->
                        <div class="relative h-full flex items-end px-6 py-8">
                            <div class="tracking-tightest">
                                <div class="w-64 mb-2.5">
                                    <h2 class="text-white text-2xl font-medium leading-9">The Future of Sustainable
                                        Interior
                                        Design</h2>
                                </div>
                                <div
                                    class="border-b border-b-white w-fit  transition duration-500 hover:border-b-blue-500 ">
                                    <a href=""
                                        class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="rounded-[20px] overflow-hidden">
                    <div class="relative w-90 lg:w-full h-96 rounded-xl overflow-hidden bg-cover bg-center"
                        style="background-image: url('/images/about/img-building-card2-section5-about.webp');">

                        <!-- Overlay hitam -->
                        <div class="absolute inset-0 bg-black/60"></div>

                        <!-- Konten -->
                        <div class="relative h-full flex items-end px-6 py-8">
                            <div class="tracking-tightest">
                                <div class="w-64 mb-2.5">
                                    <h2 class="text-white text-2xl font-medium leading-9">The Future of Sustainable
                                        Interior
                                        Design</h2>
                                </div>
                                <div
                                    class="border-b border-b-white w-fit  transition duration-500 hover:border-b-blue-500 ">
                                    <a href=""
                                        class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block lg:hidden md:col-span-2">
                    <div class="pt-14 md:pt-0 lg:pt-25 pb-20 md:pb-0 lg:pb-20" id="big-hero-content-contact-us">
                        <div class="rounded-3xl overflow-hidden p-6 lg:py-16 lg:px-14 h-full mx-5 md:mx-0 lg:mx-36 2xl:mx-61 bg-cover bg-center flex flex-col lg:flex-row justify-between"
                            style="background-image: url('{{ asset('images/welcome/img-building-from-bottom-welcome.webp') }}');">
                            <div class="tracking-tightest w-5/6 md:w-3/5">
                                <h2 class="text-white text-4xl lg:text-6xl font-semibold">Contact us if you have
                                    additional
                                    question.</h2>
                            </div>
                            <div class="tracking-tightest mt-17 md:mt-12 lg:mt-0">
                                <a href=""
                                    class="text-center text-lg box-border font-semibold block md:text-start w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-black py-7.5 px-15 md:px-17 whitespace-nowrap">
                                    Let's get in touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[20px] overflow-hidden md:hidden lg:block">
                    <div class="relative w-90 lg:w-full h-96 rounded-xl overflow-hidden bg-cover bg-center"
                        style="background-image: url('/images/welcome/img-room-project-welcome.webp');">

                        <!-- Overlay hitam -->
                        <div class="absolute inset-0 bg-black/60"></div>

                        <!-- Konten -->
                        <div class="relative h-full flex items-end px-6 py-8">
                            <div class="tracking-tightest">
                                <div class="w-64 mb-2.5">
                                    <h2 class="text-white text-2xl font-medium leading-9">The Future of Sustainable
                                        Interior
                                        Design</h2>
                                </div>
                                <div
                                    class="border-b border-b-white w-fit  transition duration-500 hover:border-b-blue-500 ">
                                    <a href=""
                                        class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    {{-- NEXT PROJECTS END --}}

    {{-- CONTACT US START --}}
    <div class="md:hidden lg:block ">
        <section>
            <div class="lg:pt-0 " id="contact-us-section">
                <div class="rounded-3xl overflow-hidden p-6 lg:py-16 lg:px-14 h-full mx-5 md:mx-9 lg:mx-36 2xl:mx-61 bg-cover bg-center flex flex-col lg:flex-row justify-between max-w-[1500px]"
                    style="background-image: url('{{ asset('images/welcome/img-building-from-bottom-welcome.webp') }}');">
                    <div class="tracking-tightest w-5/6 md:w-3/5">
                        <h2 class="text-white text-4xl lg:text-6xl font-semibold">Contact us if you have additional
                            question.</h2>
                    </div>
                    <div class="tracking-tightest mt-17 md:mt-12 lg:mt-0">
                        <a href=""
                            class="text-center text-lg box-border font-semibold block md:text-start w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-black py-7.5 px-15 md:px-17 whitespace-nowrap">
                            Let's get in touch
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- CONTACT US END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-20 lg:mt-22 max-w-[1500px]">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/singleProduct.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
