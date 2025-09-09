<footer class="mt-auto w-full bg-gray-50">
  <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <!-- Main Footer Content -->
    <div class="grid grid-cols-1 gap-8 mb-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Company Info -->
      <div class="lg:col-span-1">
        <div class="flex items-center mb-4">
          <img src="/img/logo-icon.svg" alt="Transport2Airport" class="mr-3 w-10 h-10">
          <span class="text-xl font-bold text-primary">Transport2Airport</span>
        </div>
        <p class="mb-4 text-sm text-gray-600">
          Lorum ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec justo nec justo ultrices ultrices.
        </p>
      </div>

      <!-- Services -->
      <div>
        <h4 class="mb-4 text-sm font-semibold text-gray-900 uppercase">Naše služby</h4>
        <div class="space-y-2 text-sm">
          <a href="{{ route('keywords') }}" class="text-gray-600 transition-colors hover:text-primary">
            Doprava na letiště
          </a>
          <p><a href="/" class="text-gray-600 transition-colors hover:text-primary">Přeprava z/na letiště</a></p>
          <p><a href="/" class="text-gray-600 transition-colors hover:text-primary">Osobní přeprava</a></p>
        </div>
      </div>

      <!-- Menu -->
      <div>
        <h4 class="mb-4 text-sm font-semibold text-gray-900 uppercase">Menu</h4>
        <div class="space-y-2 text-sm">
          <p><a href="/" class="text-gray-600 transition-colors hover:text-primary">Služby</a></p>
          <p><a href="{{ route('cars.index') }}" class="text-gray-600 transition-colors hover:text-primary">Naše
              vozy</a></p>
          <p><a href="{{ route('pricing') }}" class="text-gray-600 transition-colors hover:text-primary">Ceník</a></p>
          <p><a href="{{ route('contact') }}" class="text-gray-600 transition-colors hover:text-primary">Kontakt</a></p>
        </div>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="mb-4 text-sm font-semibold text-gray-900 uppercase">Kontaktní informace</h4>
        <div class="space-y-3 text-sm">
          <div class="flex items-center text-gray-600">
            <x-eva-email-outline class="mr-2 w-4 h-4 text-primary" />
            <a href="mailto:airportpickup@seznam.cz"
              class="transition-colors hover:text-primary">info@transport2airport.cz</a>
          </div>
          <div class="flex items-center text-gray-600">
            <x-eva-phone-outline class="mr-2 w-4 h-4 text-primary" />
            <a href="tel:+420603403888" class="transition-colors hover:text-primary">+420 999 999 999</a>
          </div>
          <div class="flex items-center text-gray-600">
            <x-eva-file-text-outline class="mr-2 w-4 h-4 text-primary" />
            <span>DIČ: CZ000000</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Section -->
    <div class="pt-6 border-t border-gray-200">
      <div class="flex flex-col gap-4 sm:flex-row sm:justify-between sm:items-center">
        <!-- Legal Links -->
        <div class="flex flex-wrap gap-4 text-sm text-gray-600">
          <a href="#" class="transition-colors hover:text-primary">GDPR | Cookies</a>
        </div>

        <!-- Copyright -->
        <div class="text-sm text-gray-600">
          <p>© {{ now()->format('Y') }} Transport2Airport | Made by Zondy</p>
        </div>
      </div>
    </div>
  </div>
</footer>
