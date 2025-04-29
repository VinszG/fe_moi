<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-gradient-to-r from-[#FDFAF2] to-[#FFF8E8] border-b border-amber-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo section -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-xl font-bold text-amber-800 flex items-center space-x-2">
                        <span class="sr-only">Moi Beauty Clinic</span>
                        <img class="h-14 w-auto transition-transform duration-300 hover:scale-105" src="{{ asset('images/logo.png') }}" alt="Moi Beauty Clinic Logo">
                    </a>
                </div>
                
               <!-- Centered Navigation for desktop -->
               <div class="hidden md:flex md:items-center md:justify-center flex-1">
                <div class="flex space-x-10">
                    <a href="/" class="px-3 py-2 text-sm font-medium text-amber-900 border-b-2 border-transparent hover:border-amber-800 hover:text-amber-700 transition duration-150">
                        Home
                    </a>
                    <a href="doctor" class="px-3 py-2 text-sm font-medium text-amber-800 border-b-2 border-transparent hover:border-amber-800 hover:text-amber-700 transition duration-150">
                        Doctor &amp; Staff
                    </a>
                    <a href="/treatment" class="px-3 py-2 text-sm font-medium text-amber-800 border-b-2 border-transparent hover:border-amber-800 hover:text-amber-700 transition duration-150">
                        Treatment
                    </a>
                    <a href="/contactUs" class="px-3 py-2 text-sm font-medium text-amber-800 border-b-2 border-transparent hover:border-amber-800 hover:text-amber-700 transition duration-150">
                        Contact Us
                    </a>
                </div>
            </div>
                
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-full text-amber-700 hover:text-amber-900 hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-500 transition-colors duration-200" aria-expanded="false" id="mobile-menu-button" onclick="toggleMobileMenu()">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="hidden md:hidden shadow-inner bg-gradient-to-b from-[#FFF8E8] to-[#FDFAF2]" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1 border-t border-amber-100">
                <a href="/" class="block pl-3 pr-4 py-3 border-l-4 border-amber-500 text-base font-medium text-amber-800 bg-amber-50/50">Home</a>
                <a href="/locations" class="block pl-3 pr-4 py-3 border-l-4 border-transparent text-base font-medium text-amber-800 hover:bg-amber-50/70 hover:border-amber-400 hover:text-amber-900 transition-all duration-200">Doctor &amp; Stuff</a>
                <a href="/treatment" class="block pl-3 pr-4 py-3 border-l-4 border-transparent text-base font-medium text-amber-800 hover:bg-amber-50/70 hover:border-amber-400 hover:text-amber-900 transition-all duration-200">Treatment</a>
                <a href="/contactUs" class="block pl-3 pr-4 py-3 border-l-4 border-transparent text-base font-medium text-amber-800 hover:bg-amber-50/70 hover:border-amber-400 hover:text-amber-900 transition-all duration-200">Contact Us</a>
            </div>
            <div class="pt-4 pb-3 border-t border-amber-100 bg-amber-50/30">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full object-cover border-2 border-amber-300 shadow-sm" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-amber-900">User Name</div>
                        <div class="text-sm font-medium text-amber-600">user@example.com</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1">
                    <a href="#" class="flex items-center px-4 py-2 text-base font-medium text-amber-700 hover:text-amber-900 hover:bg-amber-50 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Your Profile
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-base font-medium text-amber-700 hover:text-amber-900 hover:bg-amber-50 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Settings
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-base font-medium text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Sign out
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function toggleProfileMenu() {
            const menu = document.getElementById('user-menu');
            menu.classList.toggle('hidden');
            
            // Add animation
            if (!menu.classList.contains('hidden')) {
                // Briefly add opacity-0 and scale-95 to ensure animation starts from the beginning
                menu.classList.add('opacity-0', 'scale-95');
                
                // Force reflow to ensure transition happens
                void menu.offsetWidth;
                
                // Then remove them to trigger animation
                menu.classList.remove('opacity-0', 'scale-95');
                menu.classList.add('opacity-100', 'scale-100', 'transition', 'ease-out', 'duration-200');
            } else {
                menu.classList.remove('opacity-100', 'scale-100');
                menu.classList.add('opacity-0', 'scale-95', 'transition', 'ease-in', 'duration-150');
            }
        }
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
        // Close the dropdown when clicking outside
        window.addEventListener('click', function(e) {
            const profileMenu = document.getElementById('user-menu');
            const profileButton = document.getElementById('user-menu-button');
            
            if (!profileButton.contains(e.target) && !profileMenu.contains(e.target) && !profileMenu.classList.contains('hidden')) {
                // Add fade-out animation
                profileMenu.classList.remove('opacity-100', 'scale-100');
                profileMenu.classList.add('opacity-0', 'scale-95', 'transition', 'ease-in', 'duration-150');
                
                // Wait for animation to complete before hiding
                setTimeout(() => {
                    profileMenu.classList.add('hidden');
                }, 150);
            }
        });
    </script>
</body>
</html>