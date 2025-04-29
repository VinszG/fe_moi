<x-navbar />
<x-slideLocations />

<!-- Bagian Daftar Dokter -->
<section class="py-16 bg-[#faf5e6] w-full">
    <div class="max-w-screen-xl mx-auto px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-[#a07c47]">Dokter Kami</h2>
            <p class="text-gray-600 mt-4">Profesional dan Berpengalaman</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Dokter Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/doctor.png') }}" alt="Dr. M Imam Mahdi Nurbuat" class="w-40 h-52 object-cover rounded-lg mb-6">
                <h3 class="font-semibold text-xl text-[#a07c47]">Dr. M Imam Mahdi Nurbuat</h3>
                {{-- <p class="text-gray-500 mt-2">Spesialis Bedah</p> --}}
            </div>

            <!-- Dokter Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/doctor2.jpg') }}" alt="Dr. Hatfina Izzati" class="w-40 h-52 object-cover rounded-lg mb-6">
                <h3 class="font-semibold text-xl text-[#a07c47]">Dr.Hatfina Izzati</h3>
                {{-- <p class="text-gray-500 mt-2">Spesialis Bedah</p> --}}
            </div>
        </div>
    </div>
</section>
