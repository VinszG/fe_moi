<x-navbar />

<x-slidetreatment />

<!-- Spacer antara slider dan isi -->
<div class="h-16"></div>

<section class="py-8 px-6 md:px-24 bg-white space-y-20">

    {{-- Section 1: Text kiri, Gambar kanan --}}
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-5">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Facial</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Perawatan wajah yang menyegarkan, membersihkan, dan melembapkan kulit, memberikan tampilan yang lebih sehat dan bercahaya.
            </p>
        </div>

        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('images/Facial.jpeg') }}" alt="Facial Treatment" 
                 class="w-full h-64 sm:h-64 md:h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>
    </div>

    {{-- Section 2: Gambar kiri, Text kanan --}}
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden md:order-1">
            <img src="{{ asset('images/Skin Booster.jpg') }}" alt="Skin Booster" 
                 class="w-full h-64 sm:h-64 md:h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>

        <!-- Text -->
        <div class="space-y-5 md:order-2">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Skin Booster</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Perawatan ini bertujuan untuk mengatasi masalah kulit seperti flek hitam, kerutan, dan tekstur kulit yang tidak rata, serta membantu merevitalisasi kulit agar tampak lebih awet muda. 
            </p>
        </div>
    </div>

    {{-- Section 3: Text kiri, Gambar kanan --}}
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-5">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Laser</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Prosedur medis yang menggunakan cahaya terfokus untuk mengatasi berbagai masalah kulit dan kesehatan, seperti kerutan, bekas luka, jerawat, dan bahkan pengobatan kanker.
            </p>
        </div>

        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('images/laser1.jpg') }}" alt="Laser Treatment" 
                 class="w-full h-64 sm:h-64 md:h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>
    </div>

    {{-- Section 4: Gambar kiri, Text kanan --}}
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden md:order-1">
            <img src="{{ asset('images/peeling.jpeg') }}" alt="Peeling" 
                 class="w-full h-64 sm:h-64 md:h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>

        <!-- Text -->
        <div class="space-y-5 md:order-2">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Peeling</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Prosedur perawatan kulit yang mengangkat lapisan terluar kulit mati untuk merangsang regenerasi sel kulit baru, sehingga kulit terlihat lebih halus, cerah, dan tampak lebih muda.
            </p>
        </div>
    </div>

    {{-- Section 5: Text kiri, Gambar kanan --}}
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-5">
            <div>
                <h2 class="text-4xl font-semibold text-[#d9b88b] leading-tight mb-2">Botox</h2>
                <div class="border-b-2 border-gray-200 w-16 mb-4"></div>
                <h4 class="text-sm text-[#d9b88b] uppercase tracking-wider mb-4">Treatment</h4>
            </div>
            <p class="text-gray-600 leading-relaxed text-justify">
                Botox adalah singkatan dari Botulinum toxin, yaitu sejenis protein neurotoksik yang dihasilkan oleh bakteri Clostridium botulinum. Botox bekerja dengan cara menghalangi sinyal dari saraf yang menyebabkan kontraksi otot sehingga dapat merelaksasi otot secara sementara.
            </p>
        </div>

        <!-- Gambar -->
        <div class="shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('images/botox.webp') }}" alt="Botox Treatment" 
                 class="w-full h-64 sm:h-64 md:h-72 object-cover transition duration-500 ease-in-out hover:scale-105" />
        </div>
    </div>

</section>
