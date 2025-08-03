<x-layouts.main-layout>
    <x-slot:title>
        Pelayanan Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section>
        <div class="mx-5 bg-red-400 pt-22 pb-20">
            <div class="mx-auto w-96 bg-yellow-400 mb-8.5">
                <h2 class="text-center text-black text-5xl font-semibold leading-[49.92px] tracking-tightest">
                    Layan Konstruksi dan Struktur Menyeluruh
                </h2>
            </div>
            <div class="bg-purple-300 w-90 mx-auto">
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
        <div class="mx-5 bg-red-400">
            <div class="flex flex-wrap px-5">
                <div>
                    <div>
                        <img src="{{ asset('images/services/img-building-services.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SERVICES END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/projects.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
