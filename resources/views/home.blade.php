<x-navbar />
<x-slideshow />

<!-- Product & Services Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Produk -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-light tracking-wide mb-3 text-gray-800 relative inline-block">
                <span class="relative z-10">Our <span class="font-semibold" style="color: #E1BD84;">Premium</span> Products</span>
                <span class="absolute -bottom-2 left-0 w-full h-1 bg-opacity-40" style="background-color: #E1BD84;"></span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4 italic text-lg font-light leading-relaxed">
                Indulge in our carefully curated collection of beauty essentials, designed to elevate your skincare journey
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-20">
            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-xl font-medium mb-1" style="color: #E1BD84;">{{ $product->name }}</h3>
                    <div class="w-8 h-0.5 mb-3" style="background-color: #E1BD84;"></div>
                    <div class="h-20 overflow-hidden mb-4">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">{{ $product->description }}</p>
                    </div>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="font-bold" style="color: #E1BD84;">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="https://shopee.co.id" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-full transition-colors" style="background-color: #E1BD84;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Layanan -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold" style="color: #E1BD84;">Layanan Kami</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col">
                <div class="relative h-60 w-full">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-xl font-semibold mb-2" style="color: #E1BD84;">{{ $service->name }}</h3>
                    <div class="w-10 h-0.5 mb-3" style="background-color: #E1BD84;"></div>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 flex-grow">{{ $service->description }}</p>
                    <div class="mt-4 font-bold text-lg" style="color: #E1BD84;">
                        Rp {{ number_format($service->price, 0, ',', '.') }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- Footer Section -->
    <footer class="bg-[#E1BD84] text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- About Us -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">About Us</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        We are a premium skincare brand committed to offering high-quality products that elevate your skincare routine.
                    </p>
                </div>

                <!-- Products -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Our Products</h3>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">Face Care</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Body Care</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hair Care</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Fragrances</a></li>
                    </ul>
                </div>

                <!-- Customer Support -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Customer Support</h3>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Returns & Exchanges</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Subscribe</h3>
                    <p class="text-gray-400 text-sm mb-4">Sign up for our newsletter and stay updated on the latest products and offers.</p>
                    <form action="#" method="POST" class="flex flex-col">
                        <input type="email" placeholder="Your email" class="mb-3 p-2 rounded bg-gray-800 text-white">
                        <button type="submit" class="px-6 py-2 bg-white text-[#E1BD84] rounded-full hover:bg-gray-200 transition">Subscribe</button>
                    </form>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="text-center mt-8">
                <p class="text-gray-400 text-sm">
                    &copy; 2025 Premium Skincare. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
</section>
