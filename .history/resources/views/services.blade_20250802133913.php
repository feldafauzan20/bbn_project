<x-layouts.main-layout>
    <x-slot:title>
        Pelayanan Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section>
        <div class="mx-5 bg-red-400 pt-22">
            <div>
                <h2 class="text-center text-black text-5xl font-semibold leading-[49.92px]">
                    Layan Konstruksi dan Struktur Menyeluruh
                </h2>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/projects.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
