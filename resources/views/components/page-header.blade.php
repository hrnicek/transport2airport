@props([
    'title' => null,
    'description' => null,
    'image' => '/img/page-header.jpg',
])

<div class="bg-gray-50 text-white h-[350px] max-w-7xl mx-auto relative p-12 overflow-hidden">
  <img src="{{ $image }}" class="absolute top-0 left-0 w-full h-full object-cover z-0" />
  <div class="absolute top-0 left-0 w-full h-full bg-gradient bg-gradient-to-r from-black/95 to-black/5 z-10"></div>
  <ol class="flex items-center whitespace-nowrap relative z-20">
    <li class="inline-flex items-center">
      <a class="flex items-center text-sm tracking-tight text-white hover:text-primary focus:outline-hidden focus:text-primary"
        href="/">
        Úvod
      </a>
      <svg class="shrink-0 size-5 text-white  mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
      </svg>
    </li>
    <li class="inline-flex items-center tracking-tight text-sm font-semibold text-primary truncate "
      aria-current="page">
      {{ $title }}
    </li>
  </ol>
  <div class="absolute left-12 bottom-12 z-30">
    <h1 class="text-4xl font-base text-white tracking-wide">
      {{ $title }}
    </h1>
    @if ($description)
      <p class="text-light text-white mt-2 italic">
        {{ $description }}
      </p>
    @endif
  </div>
</div>
