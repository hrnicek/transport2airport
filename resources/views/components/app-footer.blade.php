<footer class="bg-gray-50 mt-auto w-full">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <!-- Main Footer Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
      <!-- Company Info -->
      <div class="lg:col-span-1">
        <div class="flex items-center mb-4">
          <img src="/img/logo-icon.svg" alt="Transport2Airport" class="h-10 w-10 mr-3">
          <span class="text-xl font-bold text-primary">Transport2Airport</span>
        </div>
        <p class="text-sm text-gray-600 mb-4">
          Poskytujeme profesionální přepravní služby s maximálním komfortem. Odvoz na letiště, osobní přeprava a další služby. Rychlé doručení, vždy spolehlivé.
        </p>
        <div class="text-sm text-gray-600">
          <p class="mb-1">© 2025 Erik Langer | Designed by Wilson</p>
        </div>
      </div>

      <!-- Services -->
      <div>
        <h4 class="text-sm font-semibold text-gray-900 uppercase mb-4">Naše služby</h4>
        <div class="space-y-2 text-sm">
          <p><a href="/" class="text-gray-600 hover:text-primary transition-colors">Přeprava z/na letiště</a></p>
          <p><a href="/" class="text-gray-600 hover:text-primary transition-colors">Osobní přeprava</a></p>
          <p><a href="/" class="text-gray-600 hover:text-primary transition-colors">Svatební servis</a></p>
          <p><a href="/" class="text-gray-600 hover:text-primary transition-colors">Kurýrní služby</a></p>
        </div>
      </div>

      <!-- Menu -->
      <div>
        <h4 class="text-sm font-semibold text-gray-900 uppercase mb-4">Menu</h4>
        <div class="space-y-2 text-sm">
          <p><a href="/" class="text-gray-600 hover:text-primary transition-colors">Služby</a></p>
          <p><a href="{{ route('cars.index') }}" class="text-gray-600 hover:text-primary transition-colors">Naše vozy</a></p>
          <p><a href="{{ route('pricing') }}" class="text-gray-600 hover:text-primary transition-colors">Ceník</a></p>
          <p><a href="{{ route('contact') }}" class="text-gray-600 hover:text-primary transition-colors">Kontakt</a></p>
        </div>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="text-sm font-semibold text-gray-900 uppercase mb-4">Rychlý kontakt</h4>
        <div class="space-y-3 text-sm">
          <div class="flex items-center text-gray-600">
            <x-eva-email-outline class="w-4 h-4 mr-2 text-primary" />
            <a href="mailto:airportpickup@seznam.cz" class="hover:text-primary transition-colors">airportpickup@seznam.cz</a>
          </div>
          <div class="flex items-center text-gray-600">
            <x-eva-phone-outline class="w-4 h-4 mr-2 text-primary" />
            <a href="tel:+420603403888" class="hover:text-primary transition-colors">+420 603 403 888</a>
          </div>
          <div class="flex items-center text-gray-600">
            <x-eva-file-text-outline class="w-4 h-4 mr-2 text-primary" />
            <span>DIČ: CZ6701540858</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Section -->
    <div class="pt-6 border-t border-gray-200">
      <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
        <!-- Legal Links -->
        <div class="flex flex-wrap gap-4 text-sm text-gray-600">
          <a href="#" class="hover:text-primary transition-colors">GDPR | Cookies</a>
        </div>
        
        <!-- Copyright -->
        <div class="text-sm text-gray-600">
          <p>© 2025 Erik Langer | Designed by Wilson</p>
        </div>
      </div>
    </div>
  </div>
</footer>
