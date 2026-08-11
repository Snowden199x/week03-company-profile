<nav class="bg-gray-900 sticky top-0 z-50 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a href="/" class="text-xl font-bold text-white">
                Craftbyte<span class="text-indigo-400">Studio</span>
            </a>

            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-300 hover:text-white transition">Home</a>
                <a href="/about" class="text-gray-300 hover:text-white transition">About</a>
                <a href="/services" class="text-gray-300 hover:text-white transition">Services</a>
                <a href="/contact" class="text-gray-300 hover:text-white transition">Contact</a>
            </div>

            <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-3">
            <a href="/" class="block text-gray-300 hover:text-white">Home</a>
            <a href="/about" class="block text-gray-300 hover:text-white">About</a>
            <a href="/services" class="block text-gray-300 hover:text-white">Services</a>
            <a href="/contact" class="block text-gray-300 hover:text-white">Contact</a>
        </div>
    </div>
</nav>