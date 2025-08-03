<x-layouts.main-layout>
    <x-slot:title>
        Client Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section class="bg-stone-50">
        <div class="mx-5 lg:mx-36 2xl:mx-61 pt-22 md:pt-36 pb-20 lg:pb-44.5" id="hero-section">
            <div class="w-80 md:w-96 lg:w-190  mx-auto">
                <h2
                    class="text-black text-5xl lg:text-8xl text-center tracking-tightest font-semibold leading-[49.92px] lg:leading-[100px]">
                    Mitra Terpercaya dan Klien yang Puas
                </h2>
            </div>
            <div class="w-84 mt-8.5 lg:mt-5.5 md:w-170 lg:w-190  mx-auto">
                <p class="text-neutral-400 text-lg text-center tracking-tightest font-semibold leading-relaxed">
                    Kami dipercaya oleh berbagai perusahaan dari beragam sektor industri karena konsistensi kami dalam
                    menghadirkan solusi konstruksi dan perkuatan struktur yang berkualitas, efisien, dan inovatif.
                </p>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- CLIENTS START --}}
    <section>
        <div class="mt-22 md:mt-20 mx-5 md:mx-10 lg:mx-36 2xl:mx-61 mb-15 md:mb-20 lg:mb-21" id="clients-section">
            <div
                class="grid grid-cols-2 lg:grid-cols-3 gap-x-9 md:gap-x-12 lg:gap-x-14 gap-y-12 md:gap-y-8.5 lg:gap-y-9">

                {{-- GRID 1 --}}
                <div
                    class="h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/clients/clients-logo/img-telkom-indonesia-black.webp') }}"
                        class="h-14 md:h-16 lg:h-28" alt="telkom indonesia">
                </div>

                {{-- GRID 2 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-jasamarga-welcome.webp') }}"
                        class="h-14 md:h-16 lg:h-28" alt="jasamarga">
                </div>

                {{-- GRID 3 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-telkomsel-welcome.webp') }}"
                        class="h-14 md:h-16 lg:h-28" alt="telkomsel">
                </div>

                {{-- GRID 4 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-kementrian-pupr-welcome.webp') }}"
                        class="h-14 md:h-16 lg:h-28" alt="Kementerian PUPR">
                </div>

                {{-- GRID 5 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-bank-bri-welcome.webp') }}" class="h-5 md:h-8 lg:h-16"
                        alt="Bank BRI">
                </div>

                {{-- GRID 6 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-kementrian-perhubungan-welcome.webp') }}"
                        class="h-14 md:h-16 lg:h-28" alt="Kementerian Perhubungan">
                </div>

                {{-- GRID 7 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/clients/clients-logo/img-pertamina-black.webp') }}"
                        class="h-6 md:h-8 lg:h-16" alt="Pertamina">
                </div>

                {{-- GRID 8 --}}
                <div
                    class=" h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 inline-flex justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-angkasa-pura-welcome.webp') }}"
                        class="h-8 md:h-12 lg:h-24" alt="Angkasa Pura">
                </div>

                {{-- GRID 9 --}}
                <div
                    class="hidden lg:inline-flex h-32 lg:h-44 rounded-2xl outline-1 outline-offset-[-1px] outline-sky-700 justify-center items-center overflow-hidden">
                    <img src="{{ asset('images/welcome/logo/logo-kementrian-kelautan-welcome.webp') }}"
                        class="h-8 md:h-12 lg:h-28" alt="Kementerian Kelautan">
                </div>
            </div>
        </div>
    </section>
    {{-- CLIENTS END --}}

    {{-- CONTACT COMPONENT START --}}
    <x-contact-us-card />
    {{-- CONTACT COMPONENT END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 md:mx-10 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-18 lg:mt-22">

        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/clients.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
