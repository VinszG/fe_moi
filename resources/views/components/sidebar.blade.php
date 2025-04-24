<!-- Sidebar -->
<aside class="w-64 bg-[#FFF8E7] h-screen fixed top-0 left-0 shadow-md border-r border-amber-100 z-50 hidden md:block">
    <div class="h-20 flex items-center justify-center border-b border-amber-100">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
    </div>
    <nav class="mt-4 px-4 space-y-2">
        <a href="{{ route('admin.products.index') }}"" class="flex items-center px-4 py-3 text-sm font-medium text-amber-800 hover:bg-amber-100 rounded-lg transition duration-150">
            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7m16 0H4"></path>
            </svg>
            Products
        </a>
        
        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-amber-800 hover:bg-amber-100 rounded-lg transition duration-150">
            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0H5"></path>
            </svg>
            Users
        </a>
        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-amber-800 hover:bg-amber-100 rounded-lg transition duration-150">
            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 7h18M3 12h18M3 17h18"></path>
            </svg>
            Menu
        </a>
        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-amber-800 hover:bg-amber-100 rounded-lg transition duration-150">
            <svg class="w-5 h-5 mr-3 text-amber-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 4v16m8-8H4"></path>
            </svg>
            Add New
        </a>
    </nav>
</aside>
