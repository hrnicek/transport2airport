<header>
  <div class="mx-auto my-4 max-w-7xl">
    <div class="flex justify-between items-center px-4 py-4">
      <!-- Logo -->
      <div class="flex items-center">
        <img src="/img/logo-icon.svg" alt="Transport2Airport" class="mr-4 h-8 xl:h-14">
        <a href="/" class="text-lg font-bold xl:text-2xl text-primary">
          Transport2Airport
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden items-center lg:flex">
        <nav class="flex items-center">
          <a href="/" class="px-4 py-3 hover:underline hover:underline-offset-4">
            Naše služby
          </a>
          <a href="{{ route('cars.index') }}" class="px-4 py-3 hover:underline hover:underline-offset-4">
            Naše vozy
          </a>
          <a href="{{ route('pricing') }}" class="px-4 py-3 hover:underline hover:underline-offset-4">
            Ceník
          </a>
          <a href="{{ route('contact') }}" class="px-4 py-3 hover:underline hover:underline-offset-4">
            Kontakt
          </a>
        </nav>
        <div class="flex items-center ml-8 space-x-2">
          <a href="mailto:info@transport2airport.cz"
            class="flex items-center px-4 py-2 text-base font-semibold text-white bg-primary hover:bg-primary/90">
            <x-eva-email-outline class="mr-1 w-5 h-5" />
            info@transport2airport.cz
          </a>
          <a href="tel:+420737171549"
            class="flex items-center px-4 py-2 text-base font-semibold text-white bg-primary hover:bg-primary/90">
            <x-eva-phone-outline class="mr-1 w-5 h-5" />
            +420 737 171 549
          </a>
        </div>
      </div>

      <!-- Mobile Contact & Menu -->
      <div class="flex items-center lg:hidden">
        <!-- Mobile Contact Info -->
        <div class="flex items-center mr-4 space-x-1">
          <a href="mailto:info@transport2airport.cz"
            class="flex items-center px-2 py-1 text-sm font-medium text-white bg-primary hover:bg-primary/90">
            <x-eva-email-outline class="w-4 h-4" />
          </a>
          <a href="tel:+420737171539"
            class="flex items-center px-2 py-1 text-sm font-medium text-white bg-primary hover:bg-primary/90">
            <x-eva-phone-outline class="w-4 h-4" />
          </a>
        </div>

        <!-- Mobile Menu Component -->
        <x-mobile-menu />
      </div>
    </div>
  </div>
</header>
