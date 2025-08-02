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
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">Cara Kami Bekerja</p>
            </div>
            <div class="w-80 md:w-96 lg:w-160 my-5 md:my-8.5 lg:my-3.5">
                <h2
                    class="text-black text-5xl lg:text-7xl leading-[49.92px] lg:leading-18 font-semibold tracking-tightest">
                    Mitra
                    Terpercaya dan
                    Klien yang Puas</h2>
            </div>
            <div class="w-80 md:w-160 mb-15 md:mb-20 lg:mb-37">
                <p class="text-black text-lg font-normal leading-relaxed tracking-tightest">Kami dipercaya oleh berbagai
                    perusahaan dari beragam sektor industri karena konsistensi kami dalam menghadirkan solusi konstruksi
                    dan perkuatan struktur yang berkualitas, efisien, dan inovatif.</p>
            </div>
        </div>
        <div class="lg:bg-blue-400">
            <img src="{{ asset('images/works/img-building-hero-works.webp') }}" class="object-cover lg:h-full"
                alt="image building hero">
        </div>
    </section>
    {{-- HERO END --}}

    {{-- CONSULTANT START --}}
    <section class="bg-stone-50">
        <div class="mx-5 lg:mx-36 2xl:mx-61 py-20 lg:py-0 lg:pt-33.5 lg:pb-28.5 lg:flex lg:flex-row-reverse lg:items-center lg:gap-x-16"
            id="consultant-section">

            <!-- BAGIAN TEKS -->
            <div class="lg:w-[55%] mb-15 md:mb-20 lg:mb-0">
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">
                    Konsultasi dan Pengembangan Konsep
                </p>
                <div class="w-80 md:w-96 lg:w-140 my-5 md:my-3.5 ">
                    <h2 class="text-black text-4xl lg:text-6xl font-semibold tracking-tightest ">
                        Memahami dan Mewujudkan Visi Anda
                    </h2>
                </div>
                <div class="w-88 md:w-155 lg:w-150  mb-5 md:mb-5.5">
                    <p class="text-black text-lg font-normal leading-relaxed tracking-tightest ">
                        Proses kami dimulai dengan konsultasi mendalam untuk memahami kebutuhan, tujuan, dan tantangan
                        proyek Anda. Dengan pemahaman tersebut, tim kami mulai merancang konsep yang menggabungkan
                        ketepatan
                        teknis, efisiensi, dan nilai fungsional.
                    </p>
                </div>
                <div
                    class="flex flex-col lg:flex-row lg:flex-wrap 2xl:flex-nowrap lg:items-center lg:gap-x-20 2xl:gap-x-10 gap-y-2 lg:gap-y-3 text-neutral-400 text-lg">
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Diskusi Kebutuhan</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Pengumpulan Ide & Solusi Teknis</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Penyempurnaan Konsep Awal</span>
                    </div>
                </div>

            </div>

            <!-- BAGIAN GAMBAR -->
            <div class="lg:w-[45%]">
                <div class="rounded-2xl overflow-hidden h-96 lg:h-[470px] bg-cover bg-center"
                    style="background-image: url('{{ asset('images/works/img-consultant-works.webp') }}');">
                </div>
            </div>
        </div>
    </section>
    {{-- CONSULTANT END --}}

    {{-- PLANNER START --}}
    <section>
        <div class="mx-5 lg:mx-36 2xl:mx-61 py-20 lg:py-0 lg:pt-33.5 lg:pb-28.5 lg:flex  lg:items-center lg:gap-x-16"
            id="planner-section">

            <!-- BAGIAN TEKS -->
            <div class="lg:w-[55%] mb-15 md:mb-20 lg:mb-0">
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">
                    Perencanaan dan Koordinasi yang Terstruktur
                </p>
                <div class="w-80 md:w-96 lg:w-155 my-5 md:my-3.5 ">
                    <h2 class="text-black text-4xl lg:text-6xl font-semibold tracking-tightest ">
                        Menjamin Kelancaran dan Ketepatan Setiap Proyek
                    </h2>
                </div>
                <div class="w-88 md:w-170 lg:w-160 mb-5 md:mb-5.5">
                    <p class="text-black text-lg font-normal leading-relaxed tracking-tightest ">
                        Kami menyusun rencana kerja secara rinci dan mengoordinasikan setiap elemen proyek secara
                        menyeluruh, mulai dari penjadwalan, pengadaan material, hingga pengawasan teknis. Tujuan kami
                        adalah memastikan setiap proses berjalan efisien, tepat waktu, dan sesuai spesifikasi.
                    </p>
                </div>
                <div
                    class="flex flex-col lg:flex-row lg:flex-wrap lg:items-center lg:gap-x-10 2xl:gap-x-7 gap-y-2 lg:gap-y-3 text-neutral-400 text-lg">
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Menyusun Jadwal Proyek</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Koordinasi Tim dan Sumber Daya</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Optimalisasi Proses Lapangan</span>
                    </div>
                </div>

            </div>

            <!-- BAGIAN GAMBAR -->
            <div class="lg:w-[45%]">
                <div class="rounded-2xl overflow-hidden h-96 lg:h-[470px] bg-cover bg-center"
                    style="background-image: url('{{ asset('images/works/img-planner-works.webp') }}');">
                </div>
            </div>
        </div>
    </section>
    {{-- PLANNER END --}}

    {{-- CONSTRUCTION AND IMPLEMENTATION START --}}
    <section class="bg-stone-50">
        <div class="mx-5 lg:mx-36 2xl:mx-61 py-20 lg:py-0 lg:pt-33.5 lg:pb-28.5 lg:flex lg:flex-row-reverse lg:items-center lg:gap-x-16"
            id="construction-section">

            <!-- BAGIAN TEKS -->
            <div class="lg:w-[55%] mb-15 md:mb-20 lg:mb-0">
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">
                    Konstruksi dan Pelaksanaan
                </p>
                <div class="w-80 md:w-96 lg:w-150 my-5 md:my-3.5 ">
                    <h2 class="text-black text-4xl lg:text-6xl font-semibold tracking-tightest ">
                        Mewujudkan Rancangan Menjadi Struktur Nyata
                    </h2>
                </div>
                <div class="w-86 md:w-165 lg:w-150  mb-5 md:mb-5.5">
                    <p class="text-black text-lg font-normal leading-relaxed tracking-tightest ">
                        Setelah konsep disetujui, tim kami mulai melaksanakan konstruksi dengan fokus pada ketepatan,
                        efisiensi, dan kualitas. Setiap tahap dikawal oleh tenaga profesional untuk memastikan hasil
                        akhir sesuai spesifikasi dan standar tinggi yang kami junjung.
                    </p>
                </div>
                <div
                    class="flex flex-col lg:flex-row lg:flex-wrap lg:items-center lg:gap-x-10 gap-y-2 lg:gap-y-3 text-neutral-400 text-lg">
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Mengawasi Pelaksanaan Proyek</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Menjaga Kualitas dan Ketepatan Teknis</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Menangani Kendala Secara Proaktif</span>
                    </div>
                </div>

            </div>

            <!-- BAGIAN GAMBAR -->
            <div class="lg:w-[45%]">
                <div class="rounded-2xl overflow-hidden h-96 lg:h-[470px] bg-cover bg-center"
                    style="background-image: url('{{ asset('images/works/img-construction-works.webp') }}');">
                </div>
            </div>
        </div>
    </section>
    {{-- CONSTRUCTION AND IMPLEMENTATION END --}}

    {{-- FINAL REVIEW AND HANDOVER START --}}
    <section>
        <div class="mx-5 lg:mx-36 2xl:mx-61 py-20 lg:py-0 lg:pt-33.5 lg:pb-0 lg:flex  lg:items-center lg:gap-x-16"
            id="final-review-section">

            <!-- BAGIAN TEKS -->
            <div class="lg:w-[55%] mb-15 md:mb-20 lg:mb-0">
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">
                    Tinjauan Akhir dan Serah Terima
                </p>
                <div class="w-80 md:w-96 lg:w-155 my-5 md:my-3.5 ">
                    <h2 class="text-black text-4xl lg:text-6xl font-semibold tracking-tightest ">
                        Menjamin Kepuasan Klien Secara Menyeluruh
                    </h2>
                </div>
                <div class="w-86 md:w-165 lg:w-165 mb-5 md:mb-5.5">
                    <p class="text-black text-lg font-normal leading-relaxed tracking-tightest ">
                        Setelah proyek selesai, kami melakukan pemeriksaan akhir secara menyeluruh untuk memastikan
                        setiap detail sesuai standar tinggi kami dan harapan Anda. Proyek kemudian diserahkan secara
                        resmi dalam kondisi optimal dan siap digunakan.
                    </p>
                </div>
                <div
                    class="flex flex-col lg:flex-row lg:flex-wrap lg:items-center lg:gap-x-10 2xl:gap-x-7 gap-y-2 lg:gap-y-3 text-neutral-400 text-lg">
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Pemeriksaan Akhir Proyek</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Penyesuaian Jika Diperlukan</span>
                    </div>
                    <div class="flex items-center gap-x-1.5">
                        <img src="{{ asset('images/svg/check.svg') }}" class="h-5" alt="">
                        <span class="tracking-tightest">Serah Terima Proyek</span>
                    </div>
                </div>

            </div>

            <!-- BAGIAN GAMBAR -->
            <div class="lg:w-[45%]">
                <div class="rounded-2xl overflow-hidden h-96 lg:h-[470px] bg-cover bg-center"
                    style="background-image: url('{{ asset('images/works/img-shake-hand-works.webp') }}');">
                </div>
            </div>
        </div>
    </section>
    {{-- FINAL REVIEW AND HANDOVER END --}}

    {{-- OUR JOURNAL START --}}
    <section>
        <div class="mx-5 mb-10.5 lg:mx-36 2xl:mx-61 md:mt-20 lg:mt-29 md:mb-20 lg:mb-8" id="journal-section">
            <div class="w-full md:w-110 lg:w-200 md:mx-auto mb-15 md:mb-9.5">
                <h2
                    class="text-black text-5xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter text-center leading-10 md:leading-13">
                    Explore Our
                    Journal of Modern
                    Architecture</h2>
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
    </section>
    {{-- OUR JOURNAL END --}}

    {{-- CONTACT US START --}}
    <div class="md:hidden lg:block">

        <section>
            <div class="pt-14 lg:pt-0" id="contact-us-section">
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

    {{-- CONTACT COMPONENT START --}}
    <div class="md:hidden">

        <x-contact-us-card />
    </div>
    {{-- CONTACT COMPONENT END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 md:mx-9 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-20 lg:mt-26">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/works.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
