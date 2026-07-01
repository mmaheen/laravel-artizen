<nav x-data="{ open: false }" class="bg-slate-100 shadow-md mb-7 rounded-lg">
    <div class="px-5">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ route('index') }}" class="text-2xl font-bold text-blue-600">
                Artizen
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/products" class="font-medium text-gray-700 hover:text-blue-600 transition">
                    Products
                </a>

                <a href="/categories" class="font-medium text-gray-700 hover:text-blue-600 transition">
                    Categories
                </a>

                <a href="/about" class="font-medium text-gray-700 hover:text-blue-600 transition">
                    About
                </a>

                <a href="/contact" class="font-medium text-gray-700 hover:text-blue-600 transition">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden p-2 rounded-lg hover:bg-slate-200 transition">

                <x-lucide-menu x-show="!open" x-cloak class="w-6 h-6" />

                <x-lucide-x x-show="open" x-cloak class="w-6 h-6" />
            </button>

        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition x-cloak class="md:hidden py-4 border-t border-slate-300">

            <div class="flex flex-col gap-4">

                <a href="/products" class="font-medium text-gray-700 hover:text-blue-600">
                    Products
                </a>

                <a href="/categories" class="font-medium text-gray-700 hover:text-blue-600">
                    Categories
                </a>

                <a href="/about" class="font-medium text-gray-700 hover:text-blue-600">
                    About
                </a>

                <a href="/contact" class="font-medium text-gray-700 hover:text-blue-600">
                    Contact
                </a>

            </div>
        </div>
    </div>
</nav>
