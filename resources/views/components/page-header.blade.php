@props([
    'title' => null,
    'description' => null,
])

<div class="bg-gray-50 text-white h-[300px] max-w-7xl mx-auto relative p-12 overflow-hidden">
  <ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
      <a class="flex items-center text-sm text-gray-500 hover:text-primary focus:outline-hidden focus:text-primary"
        href="/">
        Úvod
      </a>
      <svg class="shrink-0 size-5 text-gray-400  mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
      </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate " aria-current="page">
      {{ $title }}
    </li>
  </ol>
  <div class="absolute left-12 bottom-12">
    <h1 class="text-4xl font-bold text-primary">
      {{ $title }}
    </h1>
    @if ($description)
      <p class="text-base text-gray-600 mt-2 italic">
        {{ $description }}
      </p>
    @endif
  </div>
  <img src="/img/citroen.svg" alt="Auto citroen" class="absolute bottom-0 right-8 opacity-10 h-48">
</div>
