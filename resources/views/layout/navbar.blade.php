<div class="bg-white">
    <header class="fixed w-full bg-white shadow-md z-50">
        <nav class="flex items-center justify-between px-6 py-4 lg:px-12">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-2">
                <img src="../public/Logo.svg" alt="Logo" class="h-10 w-10 rounded-full object-cover">
                <span class="text-xl font-bold">Open Your Mind</span>
            </a>

            <!-- Menu Tengah (Desktop) -->
            <div class="hidden lg:flex flex-1 justify-center space-x-8">
                <a href="#" class="text-gray-700 font-semibold hover:text-indigo-600 transition">Home</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-indigo-600 transition">About</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-indigo-600 transition">Services</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-indigo-600 transition">Articles</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-indigo-600 transition">Contact</a>
            </div>

            <!-- Bagian Kanan (Desktop: Translate, Mobile: Menu Burger + Translate) -->
            <div class="flex items-center space-x-4">
                <!-- Ikon Translate -->
                <button class="focus:outline-none">
                    <img src="https://img.icons8.com/?size=100&id=lph_obIfg-jT&format=png&color=000000" alt="Translate"
                        class="w-6 h-6">
                </button>

                <!-- Mobile Menu Button -->
                <button id="menu-btn" class="lg:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-16 6h16"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white shadow-md transition-all">
            <div class="flex flex-col space-y-2 p-4">
                <a href="#"
                    class="block text-gray-700 font-semibold hover:bg-gray-100 py-2 px-4 rounded-lg">Home</a>
                <a href="#"
                    class="block text-gray-700 font-semibold hover:bg-gray-100 py-2 px-4 rounded-lg">About</a>
                <a href="#"
                    class="block text-gray-700 font-semibold hover:bg-gray-100 py-2 px-4 rounded-lg">Services</a>
                <a href="#"
                    class="block text-gray-700 font-semibold hover:bg-gray-100 py-2 px-4 rounded-lg">Articles</a>
                <a href="#"
                    class="block text-gray-700 font-semibold hover:bg-gray-100 py-2 px-4 rounded-lg">Contact</a>
            </div>
        </div>
    </header>
</div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
