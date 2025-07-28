<x-layouts.main-layout>
    <x-slot:title>
        Kenapa Memilih Kami? | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section class="bg-stone-50">
        <div class="pt-24 md:pt-32 mx-5 lg:mx-36 2xl:mx-61" id="hero-section">
            <div class="mb-8 md:mb-7 lg:mb-11">
                <h2 class="text-center text-black text-5xl lg:text-8xl font-semibold tracking-tightest">
                    Mengapa Kami Menjadi Mitra Konstruksi yang Tepat
                </h2>
            </div>
            <div class="w-96 md:w-160 lg:w-200 mx-auto mb-12 md:mb-10 lg:mb-19">
                <p class="text-center text-neutral-400 text-lg leading-relaxed tracking-tightest">
                    Temukan alasan di balik kepercayaan berbagai klien kepada kami. Komitmen kami terhadap kualitas,
                    efisiensi, dan inovasi menjadikan setiap proyek bukan sekadar bangunan—melainkan solusi yang kuat,
                    presisi, dan berdampak nyata.
                </p>
            </div>
            <div>
                <div class="h-96 lg:h-138 bg-black/20 rounded-[20px] overflow-hidden">
                    <video autoplay muted loop playsinline class="w-full h-full object-cover">
                        <source src="{{ asset('videos/why-choose-us/vid-hero-section-why-choose-us.webm') }}"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- EXPERIENCES START --}}
    <section>
        <div class="mt-45 md:mt-37 lg:mt-78 mx-5 lg:mx-36 2xl:mx-61" id="experiences-section">
            <div class="mb-5 md:mb-7 w-96 lg:w-140 ">
                <h2 class="text-black text-4xl lg:text-6xl md:leading-10 font-semibold tracking-tightest">
                    Pengalaman yang Teruji
                </h2>
            </div>
            <div class="w-96 md:w-160 mb-8 md:mb-13 ">
                <p class="text-black text-lg font-normal tracking-tightest leading-relaxed">
                    Dengan latar belakang industri yang kuat, tim kami menghadirkan keahlian dan presisi dalam setiap
                    proyek. Kami telah dipercaya menyelesaikan berbagai solusi konstruksi dan perkuatan struktur dengan
                    hasil yang terbukti unggul.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-8 md:gap-x-6">
                <!-- CARD 1 -->
                <div
                    class="w-full h-96 px-7 pt-6 pb-5 bg-stone-50 rounded-[20px] flex flex-col justify-center lg:justify-between items-start gap-16">
                    <div class="w-full flex flex-col items-start gap-14">
                        <h3 class="text-neutral-400 text-2xl font-semibold leading-9 tracking-tightest">Growth%</h3>
                    </div>
                    <div class="w-full h-0.5 bg-black/60"></div>
                    <h2 class="text-sky-500 text-6xl lg:text-8xl font-semibold leading-[62.40px] tracking-tightest">3.2k
                    </h2>
                </div>

                <!-- CARD 2 -->
                <div
                    class="w-full h-96 px-7 pt-6 pb-5 bg-stone-50 rounded-[20px] flex flex-col justify-center lg:justify-between items-start gap-16">
                    <div class="w-full flex flex-col items-start gap-14">
                        <h3 class="text-neutral-400 text-2xl font-semibold leading-9 tracking-tightest">$ Spent</h3>
                    </div>
                    <div class="w-full h-0.5 bg-black/60"></div>
                    <h2 class="text-sky-500 text-6xl lg:text-8xl font-semibold leading-[62.40px] tracking-tightest">3.5m
                    </h2>
                </div>

                <!-- CARD 3 -->
                <div
                    class="w-full h-96 px-7 pt-6 pb-5 bg-stone-50 rounded-[20px] flex flex-col justify-center lg:justify-between items-start gap-16">
                    <div class="w-full flex flex-col items-start gap-14">
                        <h3 class="text-neutral-400 text-2xl font-semibold leading-9 tracking-tightest">Burn/run rate
                        </h3>
                    </div>
                    <div class="w-full h-0.5 bg-black/60"></div>
                    <h2 class="text-sky-500 text-6xl lg:text-8xl font-semibold leading-[62.40px] tracking-tightest">1.4%
                    </h2>
                </div>

                <!-- CARD 4 -->
                <div
                    class="w-full h-96 px-7 pt-6 pb-5 bg-stone-50 rounded-[20px] flex flex-col justify-center lg:justify-between items-start gap-16">
                    <div class="w-full flex flex-col items-start gap-14">
                        <h3 class="text-neutral-400 text-2xl font-semibold leading-9 tracking-tightest">QMW quick ration
                        </h3>
                    </div>
                    <div class="w-full h-0.5 bg-black/60"></div>
                    <h2 class="text-sky-500 text-6xl lg:text-8xl font-semibold leading-[62.40px] tracking-tightest">5.5
                    </h2>
                </div>
            </div>

        </div>
    </section>
    {{-- EXPERIENCES END --}}

    {{-- BEST FROM US START --}}
    <section id="best-from-us-section">
        <div class="mx-5 mb-20 lg:mx-36 2xl:mx-61 mt-11 md:mt-17 lg:mt-34 md:mb-17 lg:mb-36">
            <div class="lg:flex lg:justify-between lg:mb-15.5">
                <div class="w-full md:w-145 lg:w-250 md:mx-auto md:mb-9.5 lg:mb-0">
                    <h2
                        class="text-black text-5xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter text-center lg:text-left leading-10 md:leading-13">
                        Lihat Deretan Proyek Terbaik Kami</h2>
                </div>
                <div
                    class="relative my-7.5 md:my-0 md:mt-7.5 lg:mt-0 md:mb-13 lg:mb-0 w-full flex justify-center lg:justify-end lg:items-center">
                    <a href=""
                        class="inline-block px-14 py-7 bg-black rounded-full text-lg tracking-tightest font-semibold leading-tight hover:bg-blue-600 transition duration-500 text-white">
                        Lihat Semua Proyek
                    </a>
                </div>
            </div>

            <div
                class="flex flex-col gap-y-7 md:flex-row md:flex-wrap md:justify-center md:gap-x-7 lg:flex-nowrap lg:gap-x-7">

                <!-- CARD 1 -->
                <div class="rounded-[20px] overflow-hidden w-full md:w-[45%] lg:w-[32%]">
                    <div class="relative h-96 bg-cover bg-center rounded-xl overflow-hidden"
                        style="background-image: url('/images/about/img-building-card1-section5-about.webp');">
                        <div class="absolute inset-0 bg-black/60"></div>
                        <div class="relative h-full flex items-end px-6 py-8">
                            <div class="tracking-tightest">
                                <div class="w-64 mb-2.5">
                                    <h2 class="text-white text-2xl font-medium leading-9">The Future of Sustainable
                                        Interior Design</h2>
                                </div>
                                <div
                                    class="border-b border-b-white w-fit transition duration-500 hover:border-b-blue-500">
                                    <a href=""
                                        class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="rounded-[20px] overflow-hidden w-full md:w-[45%] lg:w-[32%]">
                    <div class="relative h-96 bg-cover bg-center rounded-xl overflow-hidden"
                        style="background-image: url('/images/about/img-building-card2-section5-about.webp');">
                        <div class="absolute inset-0 bg-black/60"></div>
                        <div class="relative h-full flex items-end px-6 py-8">
                            <div class="tracking-tightest">
                                <div class="w-64 mb-2.5">
                                    <h2 class="text-white text-2xl font-medium leading-9">The Future of Sustainable
                                        Interior Design</h2>
                                </div>
                                <div
                                    class="border-b border-b-white w-fit transition duration-500 hover:border-b-blue-500">
                                    <a href=""
                                        class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="rounded-[20px] overflow-hidden w-full md:w-[45%] lg:w-[32%]">
                    <div class="relative h-96 bg-cover bg-center rounded-xl overflow-hidden"
                        style="background-image: url('/images/welcome/img-room-project-welcome.webp');">
                        <div class="absolute inset-0 bg-black/60"></div>
                        <div class="relative h-full flex items-end px-6 py-8">
                            <div class="tracking-tightest">
                                <div class="w-64 mb-2.5">
                                    <h2 class="text-white text-2xl font-medium leading-9">The Future of Sustainable
                                        Interior Design</h2>
                                </div>
                                <div
                                    class="border-b border-b-white w-fit transition duration-500 hover:border-b-blue-500">
                                    <a href=""
                                        class="text-white text-lg hover:text-blue-500 transition duration-500 font-medium leading-relaxed tracking-tight">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- BEST FROM US END --}}

    {{-- SERVICES START --}}
    <section>
        <div class="relative h-full mb-5 md:mb-29.5">
            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-bottom"
                style="background-image: url('/images/why-choose-us/img-building-why-choose-us.webp');">
            </div>
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="relative mx-5 lg:mx-36 2xl:mx-61 " id="services-section-1">
                <div class=" pt-10.5 md:pt-28.5 lg:pt-43 lg:w-230 lg:mx-auto">
                    <h2
                        class="text-white text-4xl md:text-5xl lg:text-6xl font-semibold leading-10 lg:leading-[62.40px] text-center tracking-tightest">
                        Kami Hadir
                        dengan Solusi Konstruksi dan
                        Perkuatan Struktur yang Inovatif dan Efisien.</h2>
                </div>
                <div class="mt-8 lg:mt-12.5 w-80 md:w-152.5 mx-auto">
                    <p class="text-white text-lg font-medium text-center tracking-tightest">Kami berkomitmen
                        menghadirkan hasil konstruksi berkualitas melalui material terbaik dan tim yang kompeten.</p>
                </div>
                <div class="relative flex flex-wrap justify-center items-stretch gap-4 mt-8" id="big-hero-content-4">
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
                        <p class="text-lg md:text-base w-[90%] text-white mt-3 tracking-tightest">Menunjang
                            konektivitas,
                            kelancaran
                            transportasi, serta mendukung pertumbuhan infrastruktur wilayah secara menyeluruh.</p>
                    </div>
                </div>
                <div class="hidden md:flex md:justify-center md:mt-7.5 lg:mt-18.5">
                    <a href=""
                        class="text-center text-lg box-border font-semibold block w-fit rounded-full bg-white hover:bg-blue-600 transition duration-500 hover:text-white text-black py-7.5 px-15 md:px-17 whitespace-nowrap tracking-tightest">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <hr class="relative outline-1 text-white/80 my-17 md:my-19 lg:my-43">
            <div class=" lg:relative lg:flex lg:pb-43 lg:mx-36 2xl:mx-61 mx-5 lg:gap-x-80" id="services-section-2">

                <div class="relative mb-15 md:mb-9 lg:mb-0">
                    <div class="w-60 md:w-72">
                        <p class="text-neutral-400 text-lg font-medium leading-relaxed tracking-tightest">Kolaborasi
                            dan
                            Inovasi Menjadi Dasar Pendekatan Kami.</p>
                    </div>

                </div>
                <div class="relative lg:w-full pb-10.5 md:pb-19.5 lg:pb-0">
                    <div class="py-7 border-y-2 md:w-152.5 lg:w-full border-white/20">
                        <div class="flex h-full items-center tracking-tightest box-border pb-7">
                            <h3 class="mr-9 text-neutral-400 text-2xl lg:text-2xl font-semibold">01.</h3>
                            <h2 class="text-white text-3xl lg:text-4xl font-semibold">Tim Ahli yang Kompeten</h2>
                        </div>
                        <div
                            class="flex border-y-2 border-white/20 h-full items-center tracking-tightest box-border py-7">
                            <h3 class="mr-9 text-neutral-400 text-2xl lg:text-2xl font-semibold">02.</h3>
                            <h2 class="text-white text-3xl lg:text-4xl font-semibold">Solusi Konstruksi Inovatif</h2>
                        </div>
                        <div
                            class="flex border-y-2 border-white/20 h-full items-center tracking-tightest box-border py-7">
                            <h3 class="mr-9 text-neutral-400 text-2xl lg:text-2xl font-semibold">03.</h3>
                            <h2 class="text-white text-3xl lg:text-4xl font-semibold">Material Berkualitas Tinggi</h2>
                        </div>
                        <div class="flex h-full items-center tracking-tightest box-border pt-7">
                            <h3 class="mr-9 text-neutral-400 text-2xl lg:text-2xl font-semibold">04.</h3>
                            <h2 class="text-white text-3xl lg:text-4xl font-semibold">Komitmen pada Hasil Maksimal</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SERVICES END --}}

    {{-- FOOTER START --}}
    <x-footer-component />
    {{-- FOOTER END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/whyChoose.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
