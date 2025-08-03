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


                <div class=" bg-stone-50 rounded-[20px] shadow-sm">
                    <a href="#">
                        <img class="rounded-t-[20px] object-cover w-full h-80"
                            src="{{ asset('images/services/img-building-services.webp') }}" alt="" />
                    </a>
                    <div class="py-5 px-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
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
