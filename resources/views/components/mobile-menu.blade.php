<div>
    <!-- Mobile menu button -->
    <button class="mobile-menu-button lg:hidden p-2 text-gray-600 hover:text-primary focus:outline-none focus:text-primary">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Backdrop -->
    <div class="mobile-menu-backdrop hidden fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden transition-opacity duration-300"></div>

    <!-- Mobile menu drawer -->
    <div class="mobile-menu-drawer hidden fixed top-0 left-0 z-50 w-80 h-full bg-white shadow-xl lg:hidden -translate-x-full transition-transform duration-300">
        
        <!-- Header -->
        <div class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center">
                <img src="/img/logo-icon.svg" alt="Transport2Airport" class="h-8 mr-3">
                <span class="text-lg font-bold text-primary">Transport2Airport</span>
            </div>
            <button class="mobile-menu-close p-2 text-gray-600 hover:text-primary focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="p-4">
            <div class="space-y-2">
                <a href="/" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    {{ __('navigation.menu.services') }}
                </a>
                <a href="{{ route('cars.index') }}" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    {{ __('navigation.menu.cars') }}
                </a>
                <a href="{{ route('pricing') }}" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    {{ __('navigation.menu.pricing') }}
                </a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg transition-colors">
                    {{ __('navigation.menu.contact') }}
                </a>
            </div>
        </nav>

        <!-- Language Switcher -->
        <div class="p-4 border-t">
            <div class="flex items-center space-x-4">
                <x-lang-switcher />
            </div>
        </div>

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