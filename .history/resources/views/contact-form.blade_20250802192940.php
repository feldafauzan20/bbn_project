<x-layouts.main-layout>
    <x-slot:title>
        Hubungi Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}


    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/services.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
