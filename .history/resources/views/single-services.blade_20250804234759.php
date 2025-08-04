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
            <div class="absolute inset-0 bg-cover bg-top md:bg-center"
                style="background-image: url('/images/welcome/img-building-from-bottom-welcome.webp');">
            </div>
            <!-- Konten lain di sini jika perlu -->
            <div class="relative h-fit w-full">
                <div class="pt-32 pb-29.5 md:pb-29.5 lg:pb-45.5 mx-5 lg:mx-36 2xl:mx-61 max-w-[1500px]"
                    id="hero-section">
                    <div class="w-96 mx-auto mb-5 md:w-120 lg:w-200 ">
                        <h2
                            class="text-white text-5xl text-center lg:text-8xl font-semibold tracking-tightest leading-[49.92px] lg:leading-[104px]">
                            Bangunan Gedung
                        </h2>
                    </div>
                    <div class="w-87 mx-auto md:w-110">
                        <p class="text-white text-lg text-center font-medium tracking-tightest">
                            Bangunan gedung menciptakan ruang fungsional yang menunjang aktivitas manusia secara efisien
                            dan berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- DESDRIPTION AND SOCIAL MEDIA START --}}
    <section>
        <div class="mt-12.5 md:mt-20 mx-5 lg:mx-36 2xl:mx-61 pb-7.5 lg:pb-26 lg:flex lg:justify-between max-w-[1500px]">
            <div class="mb-7.5 md:mb-20 2xl:w-[874px] lg:w-[700px]">
                <div class="pb-8.5">
                    <h2 class="text-black text-4xl font-semibold leading-10 tracking-tightest">Bangunan gedung</h2>
                </div>
                <div class="pb-12.5 md:pb-20">
                    <p class="text-black text-lg font-normal leading-relaxed tracking-tighter">Architectural design is
                        at the core of our
                        services, focusing on creating spaces that are both aesthetically pleasing and functionally
                        efficient. Our approach blends creativity with technical expertise to develop designs that not
                        only meet but exceed our clients' expectations. We consider every aspect of the project, from
                        initial concepts to the smallest details, ensuring a cohesive and harmonious result.</p>
                </div>
                <div class="pb-10.5">
                    <h3 class="text-black text-3xl font-semibold leading-loose tracking-tightest">Key Features:</h3>
                </div>
                <div class="mb-7.5 md:mb-6 ">
                    <ol
                        class="list-decimal list-outside marker:text-xl marker:font-semibold marker:leading-tight pl-6 space-y-7 md:space-y-6 text-sm text-black tracking-tightest">
                        <li class="pl-2">
                            <p class="font-semibold text-xl">Concept Development:</p>
                            <p class="text-black text-lg font-normal">
                                The first step in our architectural design process involves understanding the
                                client’s
                                vision and the project’s context.
                                We conduct thorough research and analysis, including site assessments, feasibility
                                studies, and environmental considerations.
                                Our team then develops initial design concepts that align with the client’s needs
                                and
                                aspirations.
                            </p>
                        </li>

                        <li class="pl-2">
                            <p class="font-semibold text-xl">Detailed Design:</p>
                            <p class="text-black text-lg font-normal">
                                Once the concept is approved, we move into the detailed design phase. This includes the
                                development of architectural drawings, floor plans,
                                elevations, and 3D renderings. We pay close attention to aspects such as spatial
                                planning, lighting, material selection, and structural integrity.
                                Our goal is to create a design that is both beautiful and practical, ensuring optimal
                                use of space and resources.
                            </p>
                        </li>

                        <li class="pl-2">
                            <p class="font-semibold text-xl">Sustainable Practices:</p>
                            <p class="text-black text-lg font-normal">
                                Sustainability is a critical component of our architectural design services. We
                                incorporate eco-friendly materials,
                                energy-efficient systems, and sustainable construction practices. Our designs aim to
                                reduce environmental impact while
                                enhancing the comfort and wellbeing of the occupants. We also consider future
                                adaptability and durability in our designs.
                            </p>
                        </li>

                        <li class="pl-2">
                            <p class="font-semibold text-xl">Collaborative Approach:</p>
                            <p class="text-black text-lg font-normal">
                                We believe in a collaborative design process, working closely with our clients,
                                consultants, and stakeholders. This ensures that
                                the final design aligns with the client’s vision, budget, and schedule. Regular meetings
                                and transparent communication are key
                                to our process, allowing us to incorporate feedback and make necessary adjustments.
                            </p>
                        </li>

                        <li class="pl-2">
                            <p class="font-semibold text-xl">Regulatory Compliance:</p>
                            <p class="text-black text-lg font-normal">
                                Our architectural designs adhere to all relevant building codes and regulations. We stay
                                updated with the latest standards and requirements,
                                ensuring that our projects are compliant and secure. This includes considerations for
                                safety, accessibility, and energy efficiency.
                            </p>
                        </li>

                        <li class="pl-2">
                            <p class="font-semibold text-xl">Innovation and Technology:</p>
                            <p class="text-black text-lg font-normal">
                                We leverage the latest technology and software in our design process, including Building
                                Information Modeling (BIM) and 3D visualization tools.
                                This allows us to create detailed and accurate representations of the final project,
                                helping clients visualize the outcome and make informed decisions.
                            </p>
                        </li>

                        <li class="pl-2">
                            <p class="font-semibold text-xl">Execution and Support:</p>
                            <p class="text-black text-lg font-normal">
                                Our involvement doesn’t end with the design. We provide ongoing support throughout the
                                construction phase, working with contractors to ensure
                                that the design is executed as planned. We conduct site visits, review progress, and
                                address any issues that arise, ensuring a smooth and successful project delivery.
                            </p>
                        </li>
                    </ol>
                </div>
                <div>
                    <p class="text-black text-2xl font-semibold tracking-tighter leading-6.5">Architectural design is
                        more than just
                        creating buildings; it’s about crafting spaces that inspire and function seamlessly within their
                        environment. Our team is dedicated to delivering innovative and sustainable designs that reflect
                        the
                        unique identity and needs of each client. Whether it's a residential, commercial, or public
                        project,
                        we bring our passion and expertise to every design, ensuring the highest standards of quality
                        and
                        excellence.</p>
                </div>
            </div>

            <div
                class="grid grid-cols-1 lg:w-96 lg:h-fit place-items-center gap-y-7.5 lg:gap-y-6 md:grid-cols-2 lg:grid-cols-1 px-5 md:px-0 md:gap-x-7.5 lg:gap-x-0">
                <div
                    class="w-full h-64 p-7 lg:p-0 lg:px-8 lg:py-8 bg-stone-50 rounded-2xl flex flex-col justify-start items-start ">
                    <div>
                        <h2 class="text-black text-2xl font-semibold tracking-tightest leading-7">Follow Us on Social
                            Media</h2>
                    </div>
                    <div class="my-5 w-60">
                        <p class="text-neutral-400 text-lg font-normal tracking-tightest leading-relaxed">
                            Stay connected with us for the latest news, updates, and insights.
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <a href=""
                            class="text-black text-lg font-semibold tracking-tightest leading-relaxed">Dribble</a>
                        <a href=""
                            class="text-black text-lg font-semibold tracking-tightest leading-relaxed">Instagram</a>
                        <a href=""
                            class="text-black text-lg font-semibold tracking-tightest leading-relaxed">Twitter</a>
                    </div>
                </div>
                <div
                    class="w-full h-64 p-7 lg:p-0 lg:px-8 lg:py-8 bg-stone-50 rounded-2xl flex flex-col justify-start items-start ">
                    <div>
                        <h2 class="text-black text-2xl font-semibold tracking-tightest leading-7">Get in Touch With Us
                        </h2>
                    </div>
                    <div class="mt-9.5 w-64">
                        <p class="text-black text-lg font-semibold tracking-tightest leading-relaxed">
                            320 Gleichner Roads, South Ross, DE 68556-2928
                        </p>
                    </div>
                    <div class="my-3.5">
                        <p class="text-black text-lg font-semibold tracking-tightest leading-relaxed">+1 (123) 456-7890
                        </p>
                    </div>
                    <div class="">
                        <p class="text-black text-lg font-semibold tracking-tightest leading-relaxed">info@zeta.com
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- DESDRIPTION AND SOCIAL MEDIA END --}}

    {{-- SERVICES START --}}
    <section>
        <div class="mx-5 lg:mx-36 2xl:mx-61 mb-10 max-w-[1500px]" id="services-section">
            <div class="lg:flex lg:justify-between md:mb-10 lg:mb-15 lg:h-[166px]">
                <div class="w-full lg:w-100 mb-8 lg:h-full">
                    <h2
                        class="text-black text-5xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter lg:text-start text-center leading-10 md:leading-[52px] lg:leading-[83.20px]">
                        Lihat Projek Kami Lainnya</h2>
                </div>
                <div class="lg:flex lg:items-center lg:h-full">

                    <div class="flex justify-center lg:h-fit mb-12.5 md:mb-0">
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
            </div>
            <div class="flex md:w-full md:justify-center flex-wrap gap-y-12.5 px-5 md:px-0 md:gap-x-7.5">

                {{-- CARD 1 --}}
                {{-- <div class="bg-stone-50 w-full md:w-80 md:flex-1 rounded-[20px] shadow-sm flex flex-col">
                    <!-- Gambar -->
                    <img class="rounded-t-[20px] object-cover w-full h-80"
                        src="{{ asset('images/services/img-building-services.webp') }}" alt="" />

                    <!-- Konten + Tombol -->
                    <div class="flex flex-col justify-between rounded-b-[20px] h-full flex-1 py-5 px-3">
                        <!-- Teks -->
                        <div class="mb-25 md:mb-5">
                            <h5 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                Bangunan Gedung
                            </h5>
                            <div class="w-80">

                                <p class="text-neutral-400 text-lg tracking-tightest font-normal leading-relaxed mt-2">
                                    Bangunan gedung menciptakan ruang fungsional yang menunjang aktivitas manusia secara
                                    efisien dan berkelanjutan.
                                </p>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="">
                            <a href=""
                                class="text-black text-lg font-semibold tracking-tightest underline leading-relaxed">
                                View more
                            </a>
                        </div>
                    </div>
                </div> --}}

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
                <div class=" bg-stone-50 w-full md:w-80 lg:mx-auto lg:flex-1 rounded-[20px] shadow-sm">
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

    {{-- CONTACT US START --}}
    <div class="">
        <section>
            <div class="lg:pt-0 " id="contact-us-section">
                <div class="rounded-3xl overflow-hidden p-6 lg:py-16 lg:px-14 h-full mx-5 lg:mx-36 2xl:mx-61 bg-cover bg-center flex flex-col lg:flex-row justify-between max-w-[1500px]"
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
