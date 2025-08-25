<header>
  <div class="max-w-7xl mx-auto my-4">
    <div class="flex justify-between items-center py-4 px-4">
      <!-- Logo -->
      <div class="flex items-center">
        <img src="/img/logo-icon.svg" alt="Transport2Airport" class="h-8 xl:h-12 mr-4">
        <a href="/" class="text-lg xl:text-2xl font-bold text-primary">
          Transport2Airport
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden lg:flex items-center">
        <nav class="flex items-center">
          <a href="/" class="font-medium hover:text-primary px-4 py-3">
            Naše služby
          </a>
          <a href="{{ route('cars.index') }}" class="font-medium hover:text-primary px-4 py-3">
            Naše vozy
          </a>
          <a href="{{ route('pricing') }}" class="font-medium hover:text-primary px-4 py-3">
            Ceník
          </a>
          <a href="{{ route('contact') }}" class="font-medium hover:text-primary px-4 py-3">
            Kontakt
          </a>
        </nav>
        <div class="flex items-center space-x-2 ml-8">
          <a href="mailto:info@transport2airport.cz"
            class="text-base px-4 py-2 bg-primary hover:bg-primary/90 text-white font-semibold flex items-center">
            <x-eva-email-outline class="w-5 h-5 mr-1" />
            info@transport2airport.cz
          </a>
          <a href="tel:+420731234567"
            class="text-base px-4 py-2 bg-primary hover:bg-primary/90 text-white font-semibold flex items-center">
            <x-eva-phone-outline class="w-5 h-5 mr-1" />
            +420 731 234 567
          </a>
        </div>
      </div>

      <!-- Mobile Contact & Menu -->
      <div class="flex items-center lg:hidden">
        <!-- Mobile Contact Info -->
        <div class="flex items-center space-x-1 mr-4">
          <a href="mailto:info@transport2airport.cz"
            class="text-sm px-2 py-1 bg-primary hover:bg-primary/90 text-white font-medium flex items-center">
            <x-eva-email-outline class="w-4 h-4" />
          </a>
          <a href="tel:+420731234567"
            class="text-sm px-2 py-1 bg-primary hover:bg-primary/90 text-white font-medium flex items-center">
            <x-eva-phone-outline class="w-4 h-4" />
          </a>
        </div>

        <!-- Mobile Menu Component -->
        <x-mobile-menu />
      </div>
    </div>
  </div>
</header>
