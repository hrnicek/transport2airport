<div class="relative lang-switcher">
  <button class="flex gap-2 items-center text-sm font-medium text-gray-700">
    <img src="/img/flags/{{ LaravelLocalization::getCurrentLocale() }}.svg" class="object-cover w-5 h-5 rounded-full"
      alt="{{ LaravelLocalization::getCurrentLocaleNative() }}">
    {{ LaravelLocalization::getCurrentLocaleNative() }}
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
        clip-rule="evenodd" />
    </svg>
  </button>

  <div
    class="hidden absolute right-0 z-50 mt-2 w-40 bg-white rounded-md ring-1 ring-black ring-opacity-5 shadow-lg transition-all duration-100 origin-top-right dropdown">
    <ul class="py-1">
      @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
          <a rel="alternate" hreflang="{{ $localeCode }}" href="/{{ $localeCode }}"
            class="flex gap-2 items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
            <img src="/img/flags/{{ $localeCode }}.svg" class="object-cover w-5 h-5 rounded-full"
              alt="{{ $properties['native'] }}">
            {{ $properties['native'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
