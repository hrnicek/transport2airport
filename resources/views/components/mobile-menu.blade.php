<div x-data="{ open: false }" @keydown.escape="open = false">
    <!-- Mobile menu button -->
    <button @click="open = true" class="lg:hidden p-2 text-gray-600 hover:text-primary focus:outline-none focus:text-primary">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Backdrop -->
    <div x-show="open" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="open = false"
         class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"
         style="display: none;"></div>

    <!-- Mobile menu drawer -->
    <div x-show="open"
         x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="fixed top-0 left-0 z-50 w-80 h-full bg-white shadow-xl lg:hidden"
         style="display: none;">
        
        <!-- Header -->
        <div class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center">
                <img src="/img/logo-icon.svg" alt="Transport2Airport" class="h-8 mr-3">
                <span class="text-lg font-bold text-primary">Transport2Airport</span>
            </div>
            <button @click="open = false" class="p-2 text-gray-600 hover:text-primary focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="p-4">
            <div class="space-y-2">
                <a href="/" @click="open = false" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    Naše služby
                </a>
                <a href="{{ route('cars.index') }}" @click="open = false" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    Naše vozy
                </a>
                <a href="{{ route('pricing') }}" @click="open = false" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    Ceník
                </a>
                <a href="{{ route('contact') }}" @click="open = false" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    Kontakt
                </a>
            </div>
        </nav>

        <!-- Contact info -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t bg-gray-50">
            <div class="space-y-3">
                <a href="mailto:info@transport2airport.cz" class="flex items-center text-sm text-gray-600 hover:text-primary">
                    <x-eva-email-outline class="w-4 h-4 mr-2" />
                    info@transport2airport.cz
                </a>
                <a href="tel:+420731234567" class="flex items-center text-sm text-gray-600 hover:text-primary">
                    <x-eva-phone-outline class="w-4 h-4 mr-2" />
                    +420 731 234 567
                </a>
            </div>
        </div>
    </div>
</div>