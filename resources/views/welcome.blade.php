<x-layouts.main-layout>
    <x-slot:title>
        BINA BAHAMA NUSANTARA
    </x-slot:title>

    {{-- NAVBAR START --}}
    <x-navbar />
    {{-- NAVBAR END --}}

    {{-- BIG HERO START --}}
    <section>
        <div class="relative w-full h-fit pb-10">
            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('/images/welcome/bg-big-hero.webp');">
            </div>
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/0 to-black/50"></div>
            <!-- Konten lain di sini jika perlu -->
            <div class="relative h-fit w-full text-white">
                <div id="big-hero-content-1" class=" pt-44 text-center flex flex-col items-center w-full mx-auto">
                    <h1
                        class="text-6xl md:text-7xl lg:text-8xl font-semibold tracking-tighter text-white md:block md:mx-24 lg:max-w-4xl">
                        We create buildings with precision.
                    </h1>
                    <p class="block  w-full md:max-w-3xl tracking-tighter text-xl text-center px-6 md:px-16 mt-8">
                        Our
                        team of
                        visionary
                        architects and
                        designers
                        transforms
                        ideas into
                        breathtaking spaces,
                        blending modern innovation with timeless beauty.</p>
                    <a href=""
                        class="px-14 py-7 bg-black rounded-full text-lg tracking-tighter font-semibold leading-tight hover:bg-blue-600 transition duration-500 mt-15">Download
                        our
                        company profile</a>
                    <div class="w-1 h-36 md:h-48 lg:h-64 my-16 lg:my-24 bg-white/80"></div>
                </div>
                <div id="big-hero-content-2"
                    class="w-full text-center text-white text-4xl lg:text-6xl lg:mx-auto font-semibold tracking-tighter ">
                    <p class="block mx-14 md:mx-16 lg:mx-110">
                        We are more than architects – we are creators of transformative spaces that inspire, innovate,
                        and endure.</p>

                </div>
                <div id="big-hero-content-2"
                    class="w-full text-center text-white text-lg  lg:flex lg:justify-center tracking-tighter leading-tight mt-8 lg:mt-12 lg:mb-32">
                    <p class="block mx-16 md:mx-24 lg:mx-165">
                        With a passion for design excellence and a commitment to client satisfaction, we have
                        established ourselves as leaders in the architecture industry.
                    </p>
                </div>
            </div>


            <div class="relative mx-10 lg:mx-56 grid grid-cols-1 md:grid-cols-3 gap-4 mt-8" id="big-hero-content-4">
                {{-- <!-- Example grid items --> --}}
                <div class="bg-black/80 p-8 h-full md:h-fit md:p-7 rounded-lg shadow-md">
                    <div>
                        <img src="{{ asset('images/welcome/img-building-welcome.webp') }}" loading="lazy" class="md:h-7"
                            alt="">
                    </div>
                    <div class="w-full ">
                        <h3 class="text-white md:text-lg text-3xl mt-24 md:mt-11 font-semibold">Bangunan Gedung</h3>
                        <p class="text-lg md:text-base block md:h-1/2 w-[90%] md:w-full text-white mt-3">Bangunan
                            gedung
                            menciptakan ruang
                            fungsional yang menunjang
                            aktivitas
                            manusia secara efisien dan berkelanjutan.</p>
                    </div>
                </div>
                <div class="bg-black/80 p-8 h-full md:h-fit md:p-7 rounded-lg shadow-md">
                    <div>
                        <img src="{{ asset('images/welcome/img-bridge-welcome.webp') }}" loading="lazy" class="md:h-7"
                            alt="">
                    </div>
                    <div class="w-full ">
                        <h3 class="text-white md:text-lg text-3xl mt-24 md:mt-11 font-semibold">Jembatan dan Jalanan
                        </h3>
                        <p class="text-lg md:text-base block md:h-1/2 w-[90%] md:w-full text-white mt-3">Jembatan
                            dan
                            jalanan
                            menghubungkan ruang
                            fungsional yang menunjang
                            aktivitas
                            manusia secara efisien dan berkelanjutan.</p>
                    </div>
                </div>
                <div class="bg-black/80 p-8 h-full md:h-fit md:p-7 rounded-lg shadow-md">
                    <div>
                        <img src="{{ asset('images/welcome/img-water-welcome.webp') }}" loading="lazy" class="md:h-7"
                            alt="">
                    </div>
                    <div class="w-full ">
                        <h3 class="text-white md:text-lg text-3xl mt-24 md:mt-11 font-semibold">Bangunan Air
                        </h3>
                        <p class="text-lg md:text-base block md:h-1/2 w-[90%] md:w-full text-white mt-3">Jembatan
                            dan
                            jalanan
                            menghubungkan ruang
                            fungsional yang menunjang
                            aktivitas
                            manusia secara efisien dan berkelanjutan.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- BIG HERO END --}}

</x-layouts.main-layout>
