<x-layouts.main-layout>
    <x-slot:title>
        Sertifikat Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar3 />
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
                <div class="pt-32 pb-5 lg:pb-30 mx-5 lg:mx-36 2xl:mx-61 flex flex-col lg:flex-row lg:justify-between max-w-[1500px]"
                    id="hero-section">
                    <div class="lg:mx-auto">
                        <div class="w-96 lg:w-170 mx-auto mb-8 lg:mb-5.5">
                            <h2
                                class="text-white text-center text-5xl lg:text-8xl font-semibold tracking-tightest leading-[49.92px] lg:leading-[100px]">
                                Kualitas yang <br class="lg:hidden" />Teruji dan Diakui
                            </h2>
                        </div>
                        <div class="w-96 md:w-120 mx-auto mb-15 md:mb-16 lg:mb-20.5">
                            <p
                                class="text-neutral-400 text-center text-lg font-normal tracking-tightest leading-relaxed">
                                Kami memiliki sertifikat uji internasional yang membuktikan kualitas material dan
                                keandalan sistem konstruksi serta perkuatan struktur kami.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 px-5 md:px-0 gap-y-15 md:gap-x-20.5 lg:gap-x-32">

                            {{-- CERTIIFICATE 1 --}}
                            <div class="">
                                <div class="pb-3.5">
                                    <img src="{{ asset('images/certificate/img-certificate-komopoxy-and-komoproof.webp') }}"
                                        class="w-full h-full object-cover" alt="komopoxy and komoproof certificate">
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
        <div class="mx-5 lg:mx-36 my-14.5 md:my-14 2xl:mx-61 max-w-[1500px]">
            <div class="w-96 lg:w-170 mx-auto mb-8 lg:mb-5.5" id="text-certificate-section">
                <h2
                    class="text-black text-center text-5xl lg:text-8xl font-semibold tracking-tightest leading-[49.92px] lg:leading-[100px]">
                    Sertifikat Uji <br class="lg:hidden" />Standar Korea
                </h2>
            </div>

            <div class="w-96 md:w-120 lg:w-190 mx-auto mb-8 md:mb-16 lg:mb-20.5" id="text-certificate-section">
                <p class="text-neutral-400 text-center text-lg font-normal tracking-tightest leading-relaxed">
                    Explore our wide range of services designed to meet all your architectural and design needs. From
                    initial concept to final execution, our expert team ensures excellence in every project.
                </p>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 md:px-0 md:gap-x-20.5 lg:gap-x-26.5 gap-y-15 lg:gap-y-8">

                {{-- CERTIIFICATE 1 --}}
                <div class="" id="certificate-section-row-1">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-self.webp') }}"
                            class="w-full h-full object-cover" alt="self leveling certificate">
                    </div>
                    <div class="">
                        <p class="text-black text-center text-base font-semibold leading-normal tracking-tightest">
                            EL-2000 (SELF LEVELING)
                        </p>
                    </div>
                </div>

                {{-- CERTIIFICATE 2 --}}
                <div class="" id="certificate-section-row-1">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-injection.webp') }}"
                            class="w-full h-full object-cover" alt="injection of dry type material certificate">
                    </div>
                    <div class="w-75 mx-auto">
                        <p class="text-black text-center text-base font-semibold leading-normal tracking-tightest">
                            IDM-200 (LV) (INJECTION OF DRY TYPE MATERIAL)
                        </p>
                    </div>
                </div>

                {{-- CERTIIFICATE 3 --}}
                <div class="" id="certificate-section-row-1">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-epoxy.webp') }}"
                            class="w-full h-full object-cover" alt="epoxy coating certificate">
                    </div>
                    <div class="">
                        <p class="text-black text-center text-base font-semibold leading-normal tracking-tightest">
                            EC-3000 (EPOXY COATING)
                        </p>
                    </div>
                </div>

                {{-- CERTIIFICATE 4 --}}
                <div class="" id="certificate-section-row-2">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-stone.webp') }}"
                            class="w-full h-full object-cover" alt="stone adhesive certificate">
                    </div>
                    <div class="">
                        <p class="text-black text-center text-base font-semibold leading-normal tracking-tightest">
                            SA-10 (STONE ADHESIVE)
                        </p>
                    </div>
                </div>

                {{-- CERTIIFICATE 5 --}}
                <div class="" id="certificate-section-row-2">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-urethane.webp') }}"
                            class="w-full h-full object-cover"
                            alt="urethane for exposed & waterproof coating certificate">
                    </div>
                    <div class="w-75 mx-auto">
                        <p class="text-black text-center text-base font-semibold leading-normal tracking-tightest">
                            UEW(1)-2060 (URETHANE FOR EXPOSED & WATERPROOF COATING)
                        </p>
                    </div>
                </div>

                {{-- CERTIIFICATE 6 --}}
                <div class="" id="certificate-section-row-2">
                    <div class="pb-3.5">
                        <img src="{{ asset('images/certificate/img-certificate-sealant.webp') }}"
                            class="w-full h-full object-cover" alt="sealant of dry type material certificate">
                    </div>
                    <div class="w-64 mx-auto">
                        <p class="text-black text-center text-base font-semibold leading-normal tracking-tightest">
                            SDM-100 (SEALANT OF DRY TYPE MATERIAL)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ANOTHER CERTIFICATE EMD --}}

    {{-- JOURNAL START --}}
    <section>
        <div class="mx-5 mb-10.5 lg:mx-36 2xl:mx-61 mt-4 md:mt-20 lg:mt-21 md:mb-20 lg:mb-8 max-w-[1500px]"
            id="journal-section">
            <div class="w-full md:w-110 lg:w-200 md:mx-auto mb-15 md:mb-9.5">
                <h2
                    class="text-black text-5xl lg:text-6xl font-semibold tracking-tightest lg:tracking-tighter text-center leading-10 md:leading-13">
                    Explore Our
                    Journal of Modern
                    Architecture</h2>
            </div>
            <div id="featured-projects-container" class="flex flex-wrap space-y-7 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-x-7 md:gap-y-5 md:space-y-0">
        </div>
    </section>
    {{-- JOURNAL END --}}

    {{-- CONTACT US COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 max-w-[1500px] md:hidden lg:block">
        <x-contact-us-card />
    </section>
    {{-- CONTACT US COMPONENT END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 lg:mx-36  2xl:mx-61 mt-20.5 md:mt-8 lg:mt-20.5 max-w-[1500px]">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/certificate.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
