<div class="py-12 sm:py-16">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-base font-semibold leading-7 text-primary">
        {{ __('components.we_cooperate.subtitle') }}
      </h2>
      <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
        {{ __('components.we_cooperate.title') }}
      </p>
      <p class="mt-4 text-base leading-7 text-gray-600">
        {{ __('components.we_cooperate.description') }}
      </p>
    </div>
    
    <!-- Compact Hotel Flora Section -->
    <div class="mx-auto mt-12 max-w-5xl">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <!-- Image -->
        <div class="relative overflow-hidden rounded-xl bg-white shadow-lg">
          <div class="aspect-[4/3]">
            <img src="/img/hotel-flora.jpg" 
                 alt="Hotel Flora Olomouc" 
                 class="w-full h-full object-cover object-center">
          </div>
          <!-- Hotel badge -->
          <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm rounded-lg px-3 py-1.5">
            <p class="text-sm font-semibold text-gray-900">Hotel Flora Olomouc</p>
            <p class="text-xs text-gray-600">⭐⭐⭐⭐ Premium Partner</p>
          </div>
        </div>
        
        <!-- Content -->
        <div class="space-y-6">
          <div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">
              {{ __('components.we_cooperate.hotel.title') }}
            </h3>
            <p class="text-sm text-gray-600 mb-4">
              {{ __('components.we_cooperate.hotel.description') }}
            </p>
          </div>
          
          <!-- Features -->
          <div class="grid grid-cols-2 gap-3">
            <div class="flex items-center text-sm text-gray-700">
              <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
              </svg>
              Centrum města
            </div>
            <div class="flex items-center text-sm text-gray-700">
              <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              4* standard
            </div>
            <div class="flex items-center text-sm text-gray-700">
              <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                <path d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
              </svg>
              Přímé transfery
            </div>
            <div class="flex items-center text-sm text-gray-700">
              <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
              </svg>
              Wellness centrum
            </div>
          </div>
          
          <!-- Buttons -->
          <div class="flex flex-col sm:flex-row gap-3">
            <a href="https://www.hotelflora.cz/" 
               target="_blank" 
               rel="noopener noreferrer"
               class="flex-1 text-center rounded-md bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
              {{ __('components.we_cooperate.visit_website') }}
            </a>
            <a href="#form-demand" 
               class="flex-1 text-center rounded-md bg-primary px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary/90">
              {{ __('components.we_cooperate.book_transfer') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>