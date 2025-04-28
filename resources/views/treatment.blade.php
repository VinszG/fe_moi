<x-navbar />

<x-slidetreatment />

<!-- Spacer antara slider dan isi -->
<div class="h-16"></div>

<section class="py-16 px-6 md:px-24 bg-white space-y-20">

    {{-- Section 1: Text kiri, Gambar kanan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-5">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Facial</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
        </div>

        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('images/white.jpeg') }}" alt="Facial Treatment" 
                 class="w-full h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>
    </div>

    {{-- Section 2: Gambar kiri, Text kanan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden md:order-1">
            <img src="{{ asset('images/white.jpeg') }}" alt="Skin Booster" 
                 class="w-full h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>

        <!-- Text -->
        <div class="space-y-5 md:order-2">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Skin Booster</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
        </div>
    </div>

    {{-- Section 3: Text kiri, Gambar kanan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-5">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Laser</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
        </div>

        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('images/white.jpeg') }}" alt="Laser Treatment" 
                 class="w-full h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>
    </div>

    {{-- Section 4: Gambar kiri, Text kanan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden md:order-1">
            <img src="{{ asset('images/white.jpeg') }}" alt="Peeling" 
                 class="w-full h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>

        <!-- Text -->
        <div class="space-y-5 md:order-2">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Peeling</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
        </div>
    </div>

    {{-- Section 5: Text kiri, Gambar kanan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-5">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Botox</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
        </div>

        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('images/white.jpeg') }}" alt="Botox Treatment" 
                 class="w-full h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>
    </div>

</section>
