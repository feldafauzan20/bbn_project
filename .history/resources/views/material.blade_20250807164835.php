<x-layouts.main-layout>
    <x-slot:title>
        Material Kami | BIMA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar-bg-white />
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section class="lg:flex lg:gap-x-12" id="hero-section">
        <div class="mx-5 lg:mx-0 lg:ml-36 2xl:ml-61 pt-40 ">
            <div>
                <p class="text-sky-700 text-lg font-semibold tracking-tightest leading-relaxed">Material</p>
            </div>
            <div class="w-96 lg:w-160 my-5 md:my-8.5 lg:my-3.5">
                <h2
                    class="text-black text-5xl lg:text-8xl leading-[49.92px] lg:leading-24 font-semibold tracking-tightest">
                    Material Terbaik untuk Hasil Terbaik</h2>
            </div>
            <div class="w-96 md:w-160 mb-15 md:mb-20 lg:mb-37">
                <p class="text-black text-lg font-normal leading-relaxed tracking-tightest">Kami hanya menggunakan
                    material unggulan yang telah teruji untuk memastikan hasil konstruksi yang kuat, tahan lama, dan
                    sesuai standar teknis.</p>
            </div>
        </div>
        <div class="">
            <img src="{{ asset('images/material/img-hero-material.webp') }}" class="object-cover lg:h-full"
                alt="image building hero">
        </div>
    </section>
    {{-- HERO END --}}

    {{-- MATERIAL START --}}
    <section>
        <div class="mx-5 lg:mx-36 2xl:mx-61 mt-12 md:mt-18.5 lg:mt-23 max-w-[1500px]">
            <div class="flex w-96 md:w-150 lg:w-full flex-wrap gap-y-2.5 gap-x-15 lg:gap-x-16.5 mb-18">
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Material Komofloor</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Material Komowrap</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Material Komoproof</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Mesin dan
                    Perlengkapan</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Perkuatan Struktur</a>
                <a href="" class="tracking-tightest text-lg leading-relaxed text-black">Mata Gerinda</a>
            </div>

            <div>
                {{-- Komofloor --}}
                {{-- <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-3 lg:gap-x-6.5 gap-y-4 md:gap-y-5 lg:gap-y-6.5" id="komofloor">
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxy-primer-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxy-primer-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY PRIMER
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 16 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EP - 1000
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Material dasar sistem lantai epoxy</li>
                                    <li>Meningkatkan daya rekat permukaan dasar dengan lapisan epoxy di atasnya</li>
                                    <li>Warna - Transparant</li>
                                    <li>Rasio Mixing - 3 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis - 0.2kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxys-self-leveling-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxys-self-leveling-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXYS SELF LEVELING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg, 24 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EL - 2000
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapis lantai epoxy dengan berbagai VARIASI WARNA</li>
                                    <li>Kuat, tahan lama, serta bersih mengkilau</li>
                                    <li>Untuk lantai area parkir, pabrik, gudang, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 5 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering Sentuh (30°) - 8 jam</li>
                                    <li>Jumlah Teoritis (1000μm) - 1.45kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxys-self-leveling-top-coat.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxys-self-leveling-top-coat-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXYS SELF LEVELING TOP COAT
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EL - 2100
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapis lantai epoxy dengan berbagai VARIASI WARNA</li>
                                    <li>Kuat, tahan lama, serta bersih mengkilau</li>
                                    <li>Untuk lantai area parkir, pabrik, gudang, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 30 sampai 40 menit</li>
                                    <li>Kering Sentuh (30°) - 8 jam</li>
                                    <li>Jumlah Teoritis (1000μm) - 1.35kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxy-self-leveling-material-2.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxy-self-leveling-material-2.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY SELF LEVELING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 16 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    ETL - 2000
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Lantai super bening, indah, dan mengkilau</li>
                                    <li>Menghiasi lantai dengan nuansa VINTAGE</li>
                                    <li>Untuk lantai kantor, rumah, sekolah, dsb</li>
                                    <li>Warna - Transparent </li>
                                    <li>Rasio Mixing - 3 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 8 jam</li>
                                    <li>Jumlah Teoritis (1000μm) - 1.10kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxy-coating-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxy-coating-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxy-non-slip-coating-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxy-coating-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxy-non-slip-coating-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxy-coating-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komofloor/img-epoxy-non-slip-coating-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komofloor/img-content-epoxy-coating-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> --}}

                {{-- Komoproof --}}
                {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-3 lg:gap-x-6.5 gap-y-4 md:gap-y-5 lg:gap-y-6.5"
                    id="komoproof">
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY PRIMER
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 16 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EP - 1000
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Material dasar sistem lantai epoxy</li>
                                    <li>Meningkatkan daya rekat permukaan dasar dengan lapisan epoxy di atasnya</li>
                                    <li>Warna - Transparant</li>
                                    <li>Rasio Mixing - 3 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis - 0.2kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXYS SELF LEVELING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg, 24 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EL - 2000
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapis lantai epoxy dengan berbagai VARIASI WARNA</li>
                                    <li>Kuat, tahan lama, serta bersih mengkilau</li>
                                    <li>Untuk lantai area parkir, pabrik, gudang, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 5 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering Sentuh (30°) - 8 jam</li>
                                    <li>Jumlah Teoritis (1000μm) - 1.45kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXYS SELF LEVELING TOP COAT
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EL - 2100
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapis lantai epoxy dengan berbagai VARIASI WARNA</li>
                                    <li>Kuat, tahan lama, serta bersih mengkilau</li>
                                    <li>Untuk lantai area parkir, pabrik, gudang, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 30 sampai 40 menit</li>
                                    <li>Kering Sentuh (30°) - 8 jam</li>
                                    <li>Jumlah Teoritis (1000μm) - 1.35kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY SELF LEVELING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 16 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    ETL - 2000
                                </h2>
                            </div>
                            <div>
                                <ul class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Lantai super bening, indah, dan mengkilau</li>
                                    <li>Menghiasi lantai dengan nuansa VINTAGE</li>
                                    <li>Untuk lantai kantor, rumah, sekolah, dsb</li>
                                    <li>Warna - Transparent </li>
                                    <li>Rasio Mixing - 3 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 8 jam</li>
                                    <li>Jumlah Teoritis (1000μm) - 1.10kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stone-50 w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <!-- Gambar sebagai background -->
                        <div class="relative h-40 2xl:h-56 rounded-t-[20px] px-5 py-7.5 overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('images/material/komoproof/img-up-100-material.webp') }}');">
                            </div>
                            <!-- Overlay hitam 50% -->
                            <div class="absolute inset-0 bg-black/50"></div>

                            <!-- another content -->
                            <div class="relative">
                                <div class="w-28 2xl:w-36 h-28 2xl:h-36">
                                    <img src="{{ asset('images/material/komoproof/img-content-up-100-material.webp') }}"
                                        class="object-cover w-full h-full" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Konten -->
                        <div class="py-4 px-5 h-[471px]">
                            <div class="">
                                <h5 class="text-xl font-bold tracking-tight leading-loose text-black">
                                    EPOXY COATING
                                </h5>
                            </div>
                            <div class="mb-1.5">
                                <p class="text-lg font-normal tracking-tightest leading-relaxed text-black">
                                    Kemasan : 20 Kg
                                </p>
                            </div>
                            <div class="mb-1.5">
                                <h2 class="text-3xl font-semibold tracking-tightest leading-10 text-black">
                                    EC - 3000
                                </h2>
                            </div>
                            <div>
                                <ul
                                    class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                    <li>Pelapisan akhir tahun benturan, bahan kimia, dan goresan</li>
                                    <li>Pilihan warna bebas, kuat, dan tahan lama</li>
                                    <li>Untuk lantai area parkir, gudang, pom bensin, dsb</li>
                                    <li>Warna - Custom</li>
                                    <li>Rasio Mixing - 4 : 1</li>
                                    <li>Potlife - 2 jam</li>
                                    <li>Kering sentuh (30°) - 2 jam</li>
                                    <li>Jumlah Teoritis (150μm) - 0.25 kg/m²</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> --}}

                {{-- Komowrap --}}
                {{-- <div class="grid grid-cols-1 lg:grid-cols-3 md:place-items-center gap-y-11.5 md:gap-y-7 lg:gap-x-7">
                    <div
                        class="bg-stone-50 w-full md:w-96 lg:w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <div
                            class="h-96 lg:h-96 flex justify-center items-center rounded-t-[20px] px-5 lg:px-15 py-7.5 overflow-hidden">

                            <div class="">
                                <div class="w-60 h-56">
                                    <img src="{{ asset('images/material/komowrap/img-content-cfp-100-material.webp') }}"
                                        class="object-cover w-full h-full " alt="CFP-100 Material">
                                </div>
                            </div>
                        </div>

                        <div class="py-4 px-5 h-24 md:h-28">
                            <div class="">
                                <p
                                    class="text-lg md:text-xl font-normal tracking-tight leading-relaxed md:leading-loose text-black">
                                    CARBON FIBER PRIMER CFP-100
                                </p>
                            </div>
                            <div class="">
                                <p
                                    class="text-2xl md:text-3xl font-semibold tracking-tighter leading-9 md:leading-10 text-black">
                                    CFP - 100
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-stone-50 w-full md:w-96 lg:w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <div class="h-96 flex justify-center items-center rounded-t-[20px] overflow-hidden">

                            <div class="">
                                <div class="w-full h-full">
                                    <img src="{{ asset('images/material/komowrap/img-n-300-material.webp') }}"
                                        class="object-cover w-full h-full " alt="N-300 Material">
                                </div>
                            </div>
                        </div>

                        <div class="py-4 px-5 h-24 md:h-28">
                            <div class="">
                                <p
                                    class="text-lg md:text-xl font-normal tracking-tight leading-relaxed md:leading-loose text-black">
                                    CARBON FIBER
                                </p>
                            </div>
                            <div class="">
                                <p
                                    class="text-2xl md:text-3xl font-semibold tracking-tighter leading-9 md:leading-10 text-black">
                                    N - 300
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-stone-50 w-full md:w-96 lg:w-full md:flex-1 rounded-[20px] shadow-sm overflow-hidden">
                        <div
                            class="h-96 lg:h-96 flex justify-center items-center rounded-t-[20px] px-5 lg:px-15 py-7.5 overflow-hidden">

                            <div class="">
                                <div class="w-60 h-56">
                                    <img src="{{ asset('images/material/komowrap/img-cfr-200-material.webp') }}"
                                        class="object-cover w-full h-full " alt="CFR - 200 Material">
                                </div>
                            </div>
                        </div>

                        <div class="py-4 px-5 h-24 md:h-28">
                            <div class="">
                                <p
                                    class="text-lg md:text-xl font-normal tracking-tight leading-relaxed md:leading-loose text-black">
                                    CARBON FIBER RESIN
                                </p>
                            </div>
                            <div class="">
                                <p
                                    class="text-2xl md:text-3xl font-semibold tracking-tighter leading-9 md:leading-10 text-black">
                                    CFR - 200
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- Mesin dan Perlengkapan --}}
                {{-- <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-11.5 md:gap-y-10 lg:gap-y-7 md:gap-x-3.5 lg:gap-x-7">
                    <div id="carousel-ch600" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[714px] overflow-hidden rounded-lg">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-penyedot-debu.webp') }}"
                                                class="w-full h-full object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penyedot debu dengan 3 motor
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                CH - 600 AUTO
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>Penyedot debu berukuran kecil namun powerful</li>
                                                <li>Sistem cleaning auto filter (telah dipatenkan)</li>
                                                <li>Teknologi baru mutakhir untuk menghisap debu halus</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white overflow-hidden px-5 py-4">
                                        <div class="flex justify-center items-center h-full">
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-ch-600-auto-material.webp') }}"
                                                class="w-52 h-52 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penyedot debu dengan 3 motor
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                CH - 600 AUTO
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>FILTER PTFE</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white overflow-hidden px-5 py-4">
                                        <div class="flex justify-center items-center h-full">
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-ch-600-auto-3-material.webp') }}"
                                                class="w-56 h-40 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penyedot debu dengan 3 motor
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                CH - 600 AUTO
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>Pembersihan dengan Auto Filter (Telah dipatenkan)</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                    </div>

                    <div id="carousel-ch100" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[714px] overflow-hidden rounded-lg">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white flex justify-center overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-ch-100-1-material.webp') }}"
                                                class="w-80 h-96 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Filtrasi Manual dengan 2 Motor
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                CH - 100
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>Daya hisap powerful 2700 watt (3,2 HP)</li>
                                                <li>Filter serat non—lenun</li>
                                                <li>Penggunaan yang luas</li>
                                                <li>Ideal untuk mesin gerinda tangan dan gerinda kecil</li>
                                                <li>Untuk lokasi konstruksi, pabrik, dan gudang</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white flex justify-center overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-ch-100-2-material.webp') }}"
                                                class="w-80 h-96 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Filtrasi Manual dengan 2 Motor
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                CH - 100
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>Daya hisap powerful 2700 watt (3,2 HP)</li>
                                                <li>Filter serat non—lenun</li>
                                                <li>Penggunaan yang luas</li>
                                                <li>Ideal untuk mesin gerinda tangan dan gerinda kecil</li>
                                                <li>Untuk lokasi konstruksi, pabrik, dan gudang</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>

                        </div>
                    </div>

                    <div id="carousel-mpg24g" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[714px] overflow-hidden rounded-lg">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50 rounded-2xl">
                                    <div class="h-100 bg-white flex justify-center overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-24g-1-material.webp') }}"
                                                class="w-80 h-96 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penghilang Lapisan Coating & Mesin Gerinda
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG 24G (Mesin Gasoline)
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>Penghilang lapisan, uretan, dan epoxy</li>
                                                <li>Penghilang Coaltar, rekatan, dan garis jalan</li>
                                                <li>Meratakan permukaan tidak rata</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50 rounded-2xl">
                                    <div class="h-100 bg-white flex justify-center overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-24g-2-material.webp') }}"
                                                class="w-80 h-96 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penghilang Lapisan Coating & Mesin Gerinda
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG 24G (Mesin Gasoline)
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>PCD</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50 rounded-2xl">
                                    <div class="h-100 bg-white flex justify-center overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-24g-3-material.webp') }}"
                                                class="w-80 h-96 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penghilang Lapisan Coating & Mesin Gerinda
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG 24G (Mesin Gasoline)
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li> 4” Super Cup</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50 rounded-2xl">
                                    <div class="h-100 rounded-t-2xl flex justify-center overflow-hidden">
                                        <div class="overflow-hidden">
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-24g-4-material.webp') }}"
                                                class="w-full h-full object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penghilang Lapisan Coating & Mesin Gerinda
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG 24G (Mesin Gasoline)
                                            </h2>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50 rounded-2xl">
                                    <div class="h-100 rounded-t-2xl flex justify-center overflow-hidden">
                                        <div class="overflow-hidden">
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-24g-5-material.webp') }}"
                                                class="w-full h-full object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Penghilang Lapisan Coating & Mesin Gerinda
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG 24G (Mesin Gasoline)
                                            </h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="4"></button>
                        </div>
                    </div>

                    <div id="carousel-mpg350" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[714px] overflow-hidden rounded-lg">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50 rounded-2xl">
                                    <div class="h-100 bg-white flex justify-center overflow-hidden px-5 py-4">
                                        <div>
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-350-1-material.webp') }}"
                                                class="w-85 h-96 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Gerinda Lantai Multi Fungsi
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG - 350
                                            </h2>
                                        </div>
                                        <div>
                                            <ul
                                                class="list-disc pl-5 text-zinc-500 text-lg font-normal leading-7 tracking-tighter">
                                                <li>Mesin gerinda ringan MPG-350 mudah untuk dipindah-pindah dan cocok
                                                    untuk area
                                                    pengasahan di atap atau area kecil</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white overflow-hidden px-5 py-4">
                                        <div class="flex justify-center items-center h-full">
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-350-2-material.webp') }}"
                                                class="w-72 h-52 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Gerinda Lantai Multi Fungsi
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG - 350
                                            </h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="h-[714px] bg-stone-50  rounded-2xl">
                                    <div class="h-96 bg-white overflow-hidden px-5 py-4">
                                        <div class="flex justify-center items-center h-full">
                                            <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-mpg-350-3-material.webp') }}"
                                                class="w-60 h-52 object-cover" alt="Gambar Penyedot Debu">
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <div class="mt-4">
                                            <p class="text-black text-xl font-normal leading-loose tracking-tightest">
                                                Gerinda Lantai Multi Fungsi
                                            </p>
                                        </div>
                                        <div>
                                            <h2 class="text-black text-3xl font-semibold leading-10 tracking-tightest">
                                                MPG - 350
                                            </h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                    </div>
                </div> --}}

                {{-- Mata Gerinda --}}


                {{-- Perkuatan Beton --}}
                <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 lg:grid-cols-4">
                    <div class="h-[424px]">
                        <div class="bg-stone-50 h-96 flex items-center justify-center">
                            <div class="w-60 h-24">
                                <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-hammer-test-material.webp') }}"
                                    class="w-full h-full object-cover" alt="Gambar Hammer test">
                            </div>
                        </div>
                        <div>
                            <p class="text-black text-lg font-medium leading-relaxed tracking-tighter">
                                Hammer test
                            </p>
                        </div>
                    </div>
                    <div class="h-[424px]">
                        <div class="bg-stone-50 h-96 flex items-center justify-center">
                            <div class="w-60 h-24">
                                <img src="{{ asset('images/material/mesin-dan-perlengkapan/img-profometer-material.webp') }}"
                                    class="w-full h-full object-cover" alt="Gambar Profometer">
                            </div>
                        </div>
                        <div>
                            <p class="text-black text-lg font-medium leading-relaxed tracking-tighter">
                                Hammer test
                            </p>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </section>
    {{-- MATERIAL END --}}

    {{-- FOOTER COMPONENT START --}}
    <section class="mx-5 lg:mx-36 2xl:mx-61 mt-20.5 md:mt-20 lg:mt-26 max-w-[1500px]">
        <x-footer-component />
    </section>
    {{-- FOOTER COMPONENT END --}}

    {{-- MY JS START --}}
    @push('scripts')
        @vite(['resources/js/material.js'])
    @endpush
    {{-- MY JS END --}}
</x-layouts.main-layout>
