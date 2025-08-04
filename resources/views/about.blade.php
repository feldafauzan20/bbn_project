<x-layouts.main-layout>
    <x-slot:title>
        Tentang Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- SECTION 1 START --}}
    <section>
        <div class="lg:flex lg:ml-36 2xl:ml-61 lg:gap-x-12" id="section-1-about">

            <div class="relative mx-5 mt-36 lg:mx-0 ">
                <div class="tracking-tightest ">
                    <p class="text-sky-700 text-lg font-semibold">About Us</p>
                </div>
                <div class="my-4 md:w-120 lg:w-160">
                    <h2 class="text-black text-5xl  md:text-6xl lg:text-8xl font-semibold tracking-tightest">Building
                        Beyond
                        Structures
                    </h2>
                </div>
                <div class="w-84 md:w-120 lg:w-140">
                    <p class="text-black text-lg font-normal tracking-tightest">Dengan Mengkombinasikan Material
                        Berkualitas
                        terbaik, Engineer yang kompeten dan Tim Project yang Efektif, kami berkomitmen untuk selalu
                        memberikan solusi perkutan struktur yang efisien, dan inovatif</p>
                </div>
            </div>
            <div class="mt-8 md:mt-18">
                <img src="{{ asset('images/about/img-building-section1-about.webp') }}" alt="img building about">
            </div>
        </div>
    </section>
    {{-- SECTION 1 END --}}

    {{-- SECTION 2 START --}}
    <section class="bg-stone-50">
        <div class="mx-5 py-18 md:py-14 lg:py-38" id="section-2-about">

            <div class="w-80 md:w-[682px] lg:w-230 leading-10 lg:leading-[62.40px] mx-auto">
                <h2 class="text-black text-[2.5rem] lg:text-6xl font-semibold tracking-tightest text-center">We bring a
                    wealth of
                    experience and a
                    passion for innovation to every project.</h2>
            </div>
            <div class="mt-7 w-96 md:w-full lg:w-160 mx-auto md:mx-0 lg:mx-auto">
                <p class="text-neutral-400 text-lg md:text-base font-normal text-center leading-relaxed">Our team of
                    talented
                    architects and
                    designers is dedicated to creating unique, functional, and
                    aesthetically stunning spaces that push the boundaries of traditional design.</p>
            </div>
            <div class="mt-10 md:mt-12 lg:mt-25 lg:w-[920px] mx-auto ">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-6 lg:gap-y-0">
                    <div class="border-l-2 border-l-black/60 pl-5 py-3 ">
                        <h2 class="text-black text-4xl lg:text-5xl font-semibold tracking-tighter leading-10 lg:mb-2">
                            100+</h2>
                        <p class="text-black text-xl tracking-tighter font-medium">Workers</p>
                    </div>
                    <div class="border-l-2 border-l-black/60 pl-5 py-3 tracking-tightest">
                        <h2 class="text-black text-4xl lg:text-5xl font-semibold leading-10 lg:mb-2">20+</h2>
                        <p class="text-black text-xl tracking-tighter font-medium">Projects dones</p>
                    </div>
                    <div class="border-l-2 border-l-black/60 pl-5 py-3 tracking-tightest">
                        <h2 class="text-black text-4xl lg:text-5xl font-semibold leading-10 lg:mb-2">100+</h2>
                        <p class="text-black text-xl tracking-tighter font-medium">Trusted partners</p>
                    </div>
                    <div class="border-l-2 border-l-black/60 pl-5 py-3 tracking-tightest">
                        <h2 class="text-black text-4xl lg:text-5xl font-semibold leading-10 lg:mb-2">30+</h2>
                        <p class="text-black text-xl tracking-tighter font-medium">Industry awards</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- SECTION 2 END --}}

    {{-- SECTION 3 START --}}
    <section>
        <div class="mx-5 my-20 lg:mx-36 2xl:mx-61 md:my-12 lg:my-0 lg:mb-25 relative lg:flex lg:gap-x-18"
            id="section-3-about">
            <div class="relative z-10 mb-8 md:mb-5 md:py-5 lg:py-21 lg:flex-1">

                <div class="tracking-tightest  lg:pt-16">
                    <p class="text-sky-700 text-lg font-semibold leading-relaxed">Our Vision</p>
                </div>
                <div class="my-4 md:my-2.5 w-80 md:w-92 lg:w-150 ">
                    <h2 class="text-black text-4xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter">
                        Innovative and
                        Sustainable
                        Architecture
                    </h2>
                </div>
                <div class="tracking-tightest w-90 md:w-130 lg:w-162">
                    <p class="text-black text-lg font-normal leading-relaxed">Dengan Mengkombinasikan
                        Material Berkualitas
                        terbaik, Engineer yang kompeten dan Tim Project yang Efektif, kami berkomitmen untuk selalu
                        memberikan solusi perkutan struktur yang efisien, dan inovatif</p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden lg:flex-1">
                <div class="h-96 lg:h-full lg:w-full bg-cover bg-center flex items-end p-5"
                    style="background-image: url('/images/about/img-building-section3-about.webp');">
                    <div
                        class="w-72 h-36 px-7 py-8 bg-black/60 rounded-xl outline-1 outline-offset-[-1px] outline-white/5 backdrop-blur-md gap-2.5 flex-col justify-start items-start">
                        <div class="mb-2.5">
                            <h2 class="text-white text-4xl font-semibold tracking-tightest">50+</h2>
                        </div>
                        <div>
                            <p class="text-white text-lg font-normal leading-relaxed tracking-tight">Satisfied
                                customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION 3 END --}}

    {{-- SECTION 4 START --}}
    <section>
        <div class="mx-5 my-20 lg:mx-36 2xl:mx-61 md:my-12 lg:my-0 lg:mb-31 relative lg:flex lg:flex-row-reverse lg:gap-x-18"
            id="section-4-about">
            <div class="relative z-10 mb-8 md:mb-5 md:py-5 lg:py-21 lg:flex-1">

                <div class="tracking-tightest  lg:pt-16">
                    <p class="text-sky-700 text-lg font-semibold leading-relaxed">Our Mission</p>
                </div>
                <div class="my-4 md:my-2.5 w-80 md:w-92 lg:w-150 ">
                    <h2 class="text-black text-4xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter">
                        Transforming Visions into Reality
                    </h2>
                </div>
                <div class="tracking-tightest w-90 md:w-130 lg:w-162">
                    <p class="text-black text-lg font-normal leading-relaxed">Dengan Mengkombinasikan
                        Material Berkualitas
                        terbaik, Engineer yang kompeten dan Tim Project yang Efektif, kami berkomitmen untuk selalu
                        memberikan solusi perkutan struktur yang efisien, dan inovatif</p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden lg:flex-1">
                <div class="h-96 lg:h-full lg:w-full bg-cover bg-center flex items-end p-5"
                    style="background-image: url('/images/about/img-chair-section4-about.webp');">
                    <div
                        class="w-72 h-36 px-7 py-8 bg-black/60 rounded-xl outline-1 outline-offset-[-1px] outline-white/5 backdrop-blur-md gap-2.5 flex-col justify-start items-start">
                        <div class="mb-2.5">
                            <h2 class="text-white text-4xl font-semibold tracking-tightest">50+</h2>
                        </div>
                        <div>
                            <p class="text-white text-lg font-normal leading-relaxed tracking-tight">Satisfied
                                customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION 4 END --}}

    {{-- SECTION 5 START --}}
    <section>
        <div class="relative">
            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-bottom"
                style="background-image: url('/images/welcome/bg-project-and-client.webp');">
            </div>
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-slate-950/90"></div>
            <div class="relative mx-5 py-15 md:py-0 lg:mx-36 2xl:mx-61" id="section-5-about-1">
                <div
                    class="text-center lg:text-left w-75 md:w-159 lg:w-140 mx-auto lg:mx-0 md:px-7 lg:px-0 md:pt-12 lg:pt-27.5">
                    <p class="text-white text-3xl tracking-tighter font-semibold leading-9">Dalam bidang perkuatan
                        struktur kita
                        berkerjasama
                        dengan perusahaan
                        <br>
                        <span class="font-bold">PT. KCCI CHEMTECH INDONESIA.</span>
                    </p>
                </div>
                <div class="lg:flex lg:justify-between">
                    <div class="text-center lg:text-left w-85 md:w-110 lg:w-154 mx-auto lg:mx-0 my-5 lg:my-0 lg:mt-5">
                        <p class="text-white text-lg font-normal tracking-tightest">Dengan Mengkombinasikan Material
                            Berkualitas terbaik, Engineer yang kompeten dan Tim Project yang Efektif, kami berkomitmen
                            untuk
                            selalu memberikan solusi perkutan struktur yang efisien, dan inovatif</p>
                    </div>
                    <div class=" flex justify-center lg:justify-start">
                        <a href=""
                            class="text-center text-lg box-border font-semibold block w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-black py-7.5 px-15 md:px-17 whitespace-nowrap">
                            Kerja sama dan mitra
                        </a>
                    </div>
                </div>
            </div>
            <hr class="relative outline-1 text-white/80 my-12 md:my-17 lg:my-19.5">
            <div class="flex justify-center relative lg:mx-36 2xl:mx-61" id="section-5-about-2">
                <div class="mx-5 pb-15 md:pb-11 w-80 relative md:w-full lg:pb-27.5">
                    <div class="grid grid-cols-1 md:grid-cols-2 space-y-7 md:space-x-7 md:space-y-0">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/about/img-mitra-about.webp') }}" alt="img mitra about"
                                class="h-80 lg:h-full">
                        </div>
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="{{ asset('images/about/img-mitra-about.webp') }}" alt="img mitra about"
                                class="h-80 lg:h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION 5 END --}}

{{-- SECTION 6 START --}}
<section>
    <div class="mx-5 lg:mx-36 2xl:mx-61 mt-11 md:mt-20 lg:mt-30.5 md:mb-20 lg:mb-8" id="section-6-about">
        <div class="w-full md:w-110 lg:w-200 md:mx-auto mb-15 md:mb-9.5">
            <h2
                class="text-black text-5xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter text-center leading-10 md:leading-13">
                Explore Our
                Journal of Modern
                Architecture
            </h2>
        </div>
        
        <div id="featured-projects-container" class="flex flex-wrap space-y-7 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-x-7 md:gap-y-5 md:space-y-0">
            {{-- Kartu besar yang tidak diubah --}}
            <div class="hidden md:block lg:hidden md:col-span-2">
                <div class="pt-14 md:pt-0 lg:pt-25 pb-20 md:pb-0 lg:pb-20" id="big-hero-content-contact-us">
                    <div class="rounded-3xl overflow-hidden p-6 lg:py-16 lg:px-14 h-full mx-5 md:mx-0 lg:mx-36 2xl:mx-61 bg-cover bg-center flex flex-col lg:flex-row justify-between"
                        style="background-image: url('{{ asset('images/welcome/img-building-from-bottom-welcome.webp') }}');">
                        <div class="tracking-tightest w-5/6 md:w-3/5">
                            <h2 class="text-white text-4xl lg:text-6xl font-semibold">Contact us if you have
                                additional
                                question.
                            </h2>
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
            
        </div>
    </div>
</section>

{{-- SECTION 6 END --}}

    {{-- CONTACT US START --}}
    <div class="md:hidden lg:block">

        <section>
            <div class="pt-14 lg:pt-0 pb-20 md:pb-8 lg:pb-20" id="contact-us-about">
                <div class="rounded-3xl overflow-hidden p-6 lg:py-16 lg:px-14 h-full mx-5 md:mx-9 lg:mx-36 2xl:mx-61 bg-cover bg-center flex flex-col lg:flex-row justify-between"
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

    {{-- FOOTER START --}}
    <footer>
        <div>
            <div class="mx-5 lg:mx-36 lg:flex lg:justify-between 2xl:mx-61 tracking-tightest h-full">
                <div class="mb-5 lg:mb-0 lg:mr-72 lg:w-[250px]">
                    <p class="text-neutral-400 text-lg font-medium">(Let’s collaborate)</p>
                </div>
                <div class="">
                    <div class="w-10/12 lg:w-full 2xl:w-[900px]">
                        <h2 class="text-black text-4xl lg:text-5xl font-semibold">
                            We bring a wealth of experience and a passion for innovation to every project.
                        </h2>
                    </div>
                    <div class="w-10/12 my-8 lg:my-0 lg:mt-8 lg:mb-15 md:w-93 lg:w-[647px]">
                        <p class="text-neutral-400 text-lg font-medium">
                            It's not just about creating something good; it's about designing, innovating, and
                            collaborating
                            to forge remarkable and unparalleled experiences.
                        </p>
                    </div>
                    <div>
                        <a href=""
                            class="bg-black text-white transition duration-500 rounded-full py-7.5 px-12 block w-fit text-lg font-semibold whitespace-nowrap box-border hover:bg-blue-600">
                            Download our company profile
                        </a>
                    </div>
                    <div class="mt-8 lg:mt-21">
                        <img src="{{ asset('images/logo/logo-bbn-biru.webp') }}" alt="logo-bbn" class="h-32">
                    </div>
                    <div class="my-5 w-10/12 md:w-93">
                        <p class="text-neutral-400 text-lg font-medium">We basically everywhere so feel free to pick
                            which
                            mode of communication works for you.</p>
                    </div>
                    <div class="flex justify-between mb-4 lg:w-96">
                        <div>
                            <a href="" class="text-black text-lg font-semibold">Instagram</a>
                        </div>
                        <div>
                            <a href="" class="text-black text-lg font-semibold">X</a>
                        </div>
                        <div>
                            <a href="" class="text-black text-lg font-semibold">Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- FOOTER END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/about.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
