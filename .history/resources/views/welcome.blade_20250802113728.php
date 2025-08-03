<x-layouts.main-layout>
    <x-slot:title>
        BINA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar />
    {{-- NAVBAR END --}}

    {{-- BIG HERO START --}}
    <section>
        <div class="relative pb-10 lg:pb-40">
            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('/images/welcome/bg-big-hero.webp');">
            </div>
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/0 to-black/50"></div>
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
                <div id="big-hero-content-2" class="w-80 md:w-130 lg:w-220  mx-auto">
                    <p class="text-center text-white text-4xl lg:text-6xl font-semibold tracking-tightest">
                        We are more than architects – we are creators of transformative spaces that inspire, innovate,
                        and endure.</p>

                </div>
                <div id="big-hero-content-2"
                    class="w-80 md:w-140  text-center text-white text-lg mx-auto lg:flex lg:justify-center tracking-tightest leading-tight mt-8 lg:mt-12 lg:mb-32">
                    <p class="">
                        With a passion for design excellence and a commitment to client satisfaction, we have
                        established ourselves as leaders in the architecture industry.
                    </p>
                </div>
            </div>

            <div class="relative mx-10 md:mx-9 lg:mx-36 2xl:mx-61 flex flex-wrap justify-center items-stretch gap-4 mt-8"
                id="big-hero-content-4">
                <!-- Card 1 -->
                <div
                    class="bg-black/80 p-8 md:p-7 rounded-lg shadow-md  w-full md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-0.667rem)] flex flex-col">
                    <div>
                        <img src="{{ asset('images/welcome/img-building-welcome.webp') }}" loading="lazy"
                            class="md:h-7 lg:h-10" alt="">
                    </div>
                    <h3 class="text-white text-3xl mt-24 md:mt-11 font-semibold tracking-tightest">Bangunan
                        Gedung</h3>
                    <p class="text-lg md:text-base w-[90%] text-white mt-3 tracking-tightest">Bangunan gedung
                        menciptakan ruang fungsional
                        yang menunjang aktivitas manusia secara efisien dan berkelanjutan.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-black/80 p-8 md:p-7 rounded-lg shadow-md w-full md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-0.667rem)] flex flex-col">
                    <div>
                        <img src="{{ asset('images/welcome/img-bridge-welcome.webp') }}" loading="lazy"
                            class="md:h-7 lg:h-10" alt="">
                    </div>
                    <h3 class="text-white text-3xl mt-24 md:mt-11 font-semibold tracking-tightest">Jembatan
                        dan Jalanan</h3>
                    <p class="text-lg md:text-base w-[90%] text-white mt-3 tracking-tightest">Jembatan dan jalanan
                        menghubungkan ruang
                        fungsional yang menunjang aktivitas manusia secara efisien dan berkelanjutan.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-black/80 p-8 md:p-7 rounded-lg shadow-md w-full md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-0.667rem)] flex flex-col">
                    <div>
                        <img src="{{ asset('images/welcome/img-water-welcome.webp') }}" loading="lazy"
                            class="md:h-7 lg:h-10" alt="">
                    </div>
                    <h3 class="text-white text-3xl mt-24 md:mt-11 font-semibold tracking-tightest">Bangunan
                        Air</h3>
                    <p class="text-lg md:text-base w-[90%] text-white mt-3 tracking-tightest">Bangunan air membantu
                        pengelolaan sumber
                        daya air untuk memenuhi kebutuhan manusia dan lingkungan secara berkelanjutan.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-black/80 p-8 md:p-7 rounded-lg shadow-md w-full md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-0.667rem)] flex flex-col">
                    <div>
                        <img src="{{ asset('images/welcome/img-square-welcome.webp') }}" loading="lazy"
                            class="md:h-7 lg:h-10" alt="">
                    </div>
                    <h3 class="text-white text-3xl mt-24 md:mt-11 font-semibold tracking-tightest">Design
                        Architectural</h3>
                    <p class="text-lg md:text-base w-[90%] text-white mt-3 tracking-tightest">Menunjang konektivitas,
                        kelancaran
                        transportasi, serta mendukung pertumbuhan infrastruktur wilayah secara menyeluruh.</p>
                </div>
            </div>


        </div>
    </section>
    {{-- BIG HERO END --}}

    {{-- MIDDLE SECTION START (OVERLAPPING) --}}
    <section class="relative mt-11 md:mt-11 lg:z-20 lg:-mt-32">
        <div class="" id="middle-section">

            <div class="relative mx-10 md:mx-9 h-96 md:h-72 lg:mx-36 2xl:mx-61 rounded-2xl bg-cover bg-center bg-no-repeat mb-15.5 overflow-hidden lg:h-120"
                style="background-image: url('/images/welcome/img-house-welcome.webp');">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/60 rounded-2xl"></div>
                <!-- Konten -->
                <div class="relative z-10 px-7 flex items-center justify-center h-full ">
                    <div class="w-full flex flex-col  items-center justify-center lg:w-3/4 2xl:w-1/2">
                        <p class="text-white text-center text-3xl font-semibold tracking-tightest px-6 lg:hidden">
                            How we can help you
                        </p>
                        <div class="lg:w-180">
                            <p
                                class="text-white text-center text-3xl font-semibold tracking-tightest px-6 hidden lg:block lg:text-center md:px-0 md:text-start">
                                Driven by a belief in the power of architecture to shape communities and improve lives,
                                our
                                mission is to deliver architectural solutions that exceed expectations.
                            </p>
                        </div>
                        <div class="mt-6 md:mt-10">
                            <a href=""
                                class="text-center text-lg box-border font-semibold  block md:text-start w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-zinc-950 py-7.5 px-15 md:px-10 whitespace-nowrap">
                                About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- MIDDLE SECTION END --}}

    {{-- ABOUT US START --}}
    <section class="md:mt-22.5 lg:mt-0">
        <div class="md:mt-22.5  lg:flex lg:box-border lg:gap-x-2" id="about-us">
            <div class="mx-5 md:mx-9 md:pt-15 lg:w-3/5 md:mr-10 lg:pt-36 lg:ml-36 2xl:ml-61 lg:mr-0 lg:mx-0 lg:pb-44">
                <div class="mr-24 mb-10.5 w-80 md:w-120 lg:w-150 lg:mr-0 2xl:w-150">
                    <p class="text-4xl lg:text-5xl font-semibold tracking-tightest">At the heart of
                        our approach is a
                        dedication to
                        collaboration and
                        innovation.</p>
                </div>
                <div class="py-7 border-y-2 md:w-[70%] border-black/20 lg:w-11/12">
                    <div class="flex h-full items-center tracking-tightest box-border pb-7">
                        <h3 class="mr-9 text-neutral-400 text-3xl lg:text-2xl font-semibold">01.</h3>
                        <h2 class="text-black text-3xl lg:text-4xl font-semibold">Building Information Modeling</h2>
                    </div>
                    <div class="flex border-y-2 border-black/20 h-full items-center tracking-tightest box-border py-7">
                        <h3 class="mr-9 text-neutral-400 text-3xl lg:text-2xl font-semibold">02.</h3>
                        <h2 class="text-black text-3xl lg:text-4xl font-semibold">Accessibility Design</h2>
                    </div>
                    <div class="flex h-full items-center tracking-tightest box-border pt-7">
                        <h3 class="mr-9 text-neutral-400 text-3xl lg:text-2xl font-semibold">03.</h3>
                        <h2 class="text-black text-3xl lg:text-4xl font-semibold">Smart Building Integration</h2>
                    </div>
                </div>
                <div class="mt-11 mb-7 box-border">
                    <a href=""
                        class="text-center text-white box-border text-lg font-semibold mt-6 block w-fit rounded-full bg-black hover:bg-blue-600 transition duration-500  py-7.5 px-15">Why
                        choose us</a>
                </div>
            </div>
            <div class="md:bg-blue-500 lg:w-2/5">
                <img src="{{ asset('images/welcome/img-building-from-bottom-welcome.webp') }}"
                    class="md:w-full md:h-113 md:object-cover lg:h-full lg:w-full" alt="img building from bottom">
            </div>
        </div>
    </section>
    {{-- ABOUT US END --}}

    {{-- PROJECT AND CLIENT START --}}
    <section>
        <div class="relative h-full ">
            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-bottom"
                style="background-image: url('/images/welcome/bg-project-and-client.webp');">
            </div>
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-slate-950/90"></div>
            <div class="relative h-full mx-5 md:mx-9 pt-8  lg:mx-36 2xl:mx-61 lg:py-21">
                <div class="tracking-tightest w-full  lg:flex lg:flex-row-reverse" id="big-hero-content-projects">
                    <div class="lg:w-1/2 lg:flex lg:items-center lg:ml-14">
                        <div>

                            <p class="text-sky-700 text-lg font-semibold pb-3.5">Projects</p>
                            <div class=" w-11/12 lg:w-[560px] pb-3.5 ">
                                <h2 class="text-white text-4xl lg:text-6xl font-semibold">Building Beyond Structures
                                </h2>
                            </div>
                            <div class=" w-10/12 ">
                                <p class="text-white text-lg font-normal">Dengan Mengkombinasikan Material
                                    Berkualitas
                                    terbaik, Engineer yang kompeten dan Tim Project yang Efektif, kami berkomitmen
                                    untuk
                                    selalu memberikan solusi perkutan struktur yang efisien, dan inovatif</p>
                            </div>
                            <div class="box-border mt-7">
                                <a href=""
                                    class="text-center text-lg box-border font-semibold block md:text-start w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-black py-7.5 px-15 md:px-14 whitespace-nowrap">
                                    Check project
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 mt-14 lg:mt-0 mb-16 lg:mb-0">
                        <div class="h-full rounded-3xl overflow-hidden ">
                            <img src="{{ asset('images/welcome/img-room-project-welcome.webp') }}" alt="img room"
                                class="h-96 lg:h-120 object-cover w-full">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="relative outline-1 text-white/80 mb-16">
            <div class="mx-5 md:mx-9  mb-13 md:mb-8 lg:mb-25 md:bg-red-400 lg:mx-36 2xl:mx-61 relative">
                <div
                    class="hidden lg:text-center lg:tracking-tightest lg:text-white lg:flex lg:flex-col lg:items-center lg:mb-20">
                    <div class="lg:w-[1040px]" id="big-hero-content-projects-h2">

                        <h2 class="lg:text-6xl lg:font-semibold">We bring a wealth of experience and a passion for
                            innovation to every project.</h2>
                    </div>
                    <div class="lg:mt-7 lg:w-[820px]" id="big-hero-content-projects-p">
                        <p class="lg:text-lg lg:font-normal">Our team of talented architects and designers is dedicated
                            to creating unique, functional,
                            and aesthetically stunning spaces that push the boundaries of traditional design.</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-3 border border-white/80 w-full"
                    id="big-hero-content-projects-grid-clients">
                    <!-- Telkom Indonesia -->
                    <div class="border border-white/80 p-4 lg:p-8 flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-telkom-indonesia-welcome.webp') }}"
                            alt="logo telkom indonesia" class="h-16 lg:h-20">
                    </div>
                    <!-- Telkomsel -->
                    <div class="border border-white/80 p-4 lg:p-8 flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-telkomsel-welcome.webp') }}" alt="logo telkomsel"
                            class="h-16 md:h-20 lg:h-20">
                    </div>

                    <!-- Jasa Marga -->
                    <div class="border border-white/80 p-4 lg:p-8 flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-jasamarga-welcome.webp') }}" alt="logo jasamarga"
                            class="h-16 md:h-20 lg:h-20">
                    </div>
                    <!-- Bank BRI -->
                    <div class="border border-white/80 p-4 lg:p-8 flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-bank-bri-welcome.webp') }}" alt="Logo Bank BRI"
                            class="h-8 md:h-11 lg:h-16">
                    </div>

                    <!-- Kementerian PUPR -->
                    <div class="border border-white/80 p-4 lg:p-8 flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-kementrian-pupr-welcome.webp') }}"
                            alt="logo kementerian pupr" class="h-16 md:h-20 lg:h-20">
                    </div>
                    <!-- Kementerian Perhubungan -->
                    <div class="border border-white/80 p-4 lg:p-8 flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-kementrian-perhubungan-welcome.webp') }}"
                            alt="logo kementerian perhubungan" class="h-16 md:h-20 lg:h-20">
                    </div>
                    <!-- Kementerian Kelautan -->
                    <div class="border border-white/80 p-4 lg:p-8 hidden lg:flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-kementrian-kelautan-welcome.webp') }}"
                            alt="logo kementerian kelautan" class="h-16 md:h-20 lg:h-20">
                    </div>
                    <!-- Pertamina -->
                    <div class="border border-white/80 p-4 lg:p-8 hidden lg:flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-pertamina-welcome.webp') }}"
                            alt="logo pertamina" class="h-16 md:h-20 lg:h-16">
                    </div>
                    <!-- Angkasa Pura -->
                    <div class="border border-white/80 p-4 lg:p-8 hidden lg:flex items-center justify-center">
                        <img src="{{ asset('images/welcome/logo/logo-angkasa-pura-welcome.webp') }}"
                            alt="logo angkasa pura" class="h-16 md:h-20 lg:h-20">
                    </div>
                </div>
                <div class="flex justify-center mt-7 md:mt-16 lg:mt-20 pb-8 lg:pb-30">
                    <a href=""
                        class="text-center text-lg box-border font-semibold block md:text-start w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-black py-7.5 px-15 md:px-17 whitespace-nowrap">
                        Our Clients
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- PROJECT AND CLIENT END --}}

    {{-- CONTACT US COMPONENT START --}}
    <x-contact-us-card />
    {{-- CONTACT US COMPONENT END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mt-20.5 md:mt-8 lg:mt-20.5">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/welcome.js'])
    @endpush
    {{-- MY JS END --}}

</x-layouts.main-layout>
