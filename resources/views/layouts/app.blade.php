@props(['theme' => 'bg-transparent'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
  <link rel="shortcut icon" href="/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="ToAirport" />
  <link rel="manifest" href="/favicon/site.webmanifest" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  {{ seo()->generate() }}

  @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <link rel="alternate" hreflang="{{ $localeCode }}"
      href="{{ preg_replace('#(?<!:)//+#', '/', LaravelLocalization::getLocalizedURL($localeCode)) }}" />
  @endforeach

  {{-- Default hreflang for x-default (fallback to Czech) --}}
  <link rel="alternate" hreflang="x-default"
    href="{{ preg_replace('#(?<!:)//+#', '/', LaravelLocalization::getLocalizedURL('cs')) }}" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>

<body class="relative font-sans antialiased text-gray-800 bg-white">
  <div id="app">
    <x-app-header />
    @yield('content')
    <x-app-footer />
  </div>
  @stack('js')
</body>

</html>
