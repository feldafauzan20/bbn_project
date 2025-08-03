<x-layouts.main-layout>
    <x-slot:title>
        Pelayanan Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section>
        <div class="mx-5 pt-22 md:pt-34 pb-20">
            <div class="mx-auto w-96 md:w-[530px] mb-8.5 ">
                <h2 class="text-center text-black text-5xl font-semibold leading-[49.92px] tracking-tightest">
                    Layan Konstruksi <br class="hidden md:inline" /> dan Struktur Menyeluruh
                </h2>
            </div>
            <div class="w-90 md:w-[620px] mx-auto">
                <p class="text-center text-neutral-400 text-lg font-normal leading-relaxed tracking-tightest">Jelajahi
                    berbagai layanan
                    kami yang dirancang untuk memenuhi kebutuhan konstruksi dan perkuatan
                    struktur secara menyeluruh. Mulai dari perencanaan awal hingga pelaksanaan akhir, tim ahli kami
                    memastikan kualitas dan ketepatan di setiap proyek.</p>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- SERVICES START --}}
    <section>
        <div class="mx-5 mb-12 md:bg-red-400">
            <div class="flex md:w-full flex-wrap gap-y-12.5 px-5 md:px-0 md:gap-x-7.5">

                {{-- CARD 1 --}}
                <div class=" bg-stone-50 w-full md:w-80 md:flex-1 rounded-[20px] shadow-sm">
                    <div>
                        <img class="rounded-t-[20px] object-cover w-full h-80"
                            src="{{ asset('images/services/img-building-services.webp') }}" alt="" />
                    </div>
                    <div class="py-5 px-3 bg-yellow-400 h-full">
                        <div class="bg-green-500">
                            <div class="mb-1.5">
                                <h5 class=" text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    Bangunan Gedung</h5>
                            </div>
                            <div class="w-70 mb-25">
                                <p class="text-neutral-400 text-lg tracking-tightest font-normal leading-relaxed">
                                    Bangunan
                                    gedung menciptakan
                                    ruang fungsional yang menunjang aktivitas manusia secara efisien dan berkelanjutan.
                                </p>
                            </div>
                        </div>
                        <div class="bg-red-300">
                            <a href=""
                                class="self-stretch justify-start text-black text-lg font-semibold tracking-tightest underline leading-relaxed">View
                                more</a>
                        </div>
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class=" bg-stone-50 w-full md:w-80 md: md:flex-1 rounded-[20px] shadow-sm">
                    <div>
                        <img class="rounded-t-[20px] object-cover w-full h-80"
                            src="{{ asset('images/services/img-water-dam-services.webp') }}" alt="" />
                    </div>
                    <div class="py-5 px-3">
                        <div class="mb-1.5">
                            <h5 class=" text-3xl font-semibold tracking-tightest leading-10 text-black">
                                Bangunan Air</h5>
                        </div>
                        <div class="w-70 mb-25">
                            <p class="text-neutral-400 text-lg tracking-tightest font-normal leading-relaxed">
                                Menyediakan layanan pembangunan bangunan air yang berfungsi untuk mendistribusikan
                                sumber daya air secara efektif dan berkelanjutan.</p>
                        </div>
                        <div>
                            <a href=""
                                class="self-stretch justify-start text-black text-lg font-semibold tracking-tightest underline leading-relaxed">View
                                more</a>
                        </div>
                    </div>
                </div>

                {{-- CARD 3 --}}
                <div class=" bg-stone-50 w-full md:w-80 md: md:flex-1 rounded-[20px] shadow-sm">
                    <div>
                        <img class="rounded-t-[20px] object-cover w-full h-80"
                            src="{{ asset('images/services/img-bridge-services.webp') }}" alt="" />
                    </div>
                    <div class="py-5 px-3">
                        <div class="mb-1.5">
                            <h5 class=" text-3xl font-semibold tracking-tightest leading-10 text-black">
                                Jembatan & Jalanan</h5>
                        </div>
                        <div class="w-70 mb-25">
                            <p class="text-neutral-400 text-lg tracking-tightest font-normal leading-relaxed">Menunjang
                                konektivitas, kelancaran transportasi, serta mendukung pertumbuhan infrastruktur wilayah
                                secara menyeluruh.</p>
                        </div>
                        <div>
                            <a href=""
                                class="self-stretch justify-start text-black text-lg font-semibold tracking-tightest underline leading-relaxed">View
                                more</a>
                        </div>
                    </div>
                </div>

                {{-- CARD 4 --}}
                <div class=" bg-stone-50 w-full md:w-80 md: md:flex-1 rounded-[20px] shadow-sm">
                    <div>
                        <img class="rounded-t-[20px] object-cover w-full h-80"
                            src="{{ asset('images/services/img-design-architectural-services.webp') }}"
                            alt="" />
                    </div>
                    <div class="py-5 px-3">
                        <div class="mb-1.5">
                            <h5 class=" text-3xl font-semibold tracking-tightest leading-10 text-black">
                                Design Architectural</h5>
                        </div>
                        <div class="w-70 mb-25">
                            <p class="text-neutral-400 text-lg tracking-tightest font-normal leading-relaxed">
                                Menghadirkan rancangan arsitektur yang visioner dan presisi, menggabungkan nilai
                                estetika, fungsi, dan karakter ruang secara harmonis.</p>
                        </div>
                        <div>
                            <a href=""
                                class="self-stretch justify-start text-black text-lg font-semibold tracking-tightest underline leading-relaxed">View
                                more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- SERVICES END --}}

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
        @vite(['resources/js/service.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
