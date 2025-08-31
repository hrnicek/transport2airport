@props([
    'name' => 'Car Name',
    'seats' => '7',
    'luggage' => '7',
    'image' => null,
])

<div class="bg-white rounded-lg shadow-sm transition-shadow duration-300 hover:shadow-md">
  <!-- Car Image -->
  <div class="h-[300px] bg-gray-100 rounded-t-lg overflow-hidden">
    @if ($image)
      <img src="{{ $image }}" alt="{{ $name }}" class="object-cover w-full h-full">
    @else
      <div class="flex justify-center items-center w-full h-full text-gray-400">
        <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
          <path d="M4 3a2 2 0 00-2 2v1.5h16V5a2 2 0 00-2-2H4z" />
          <path fill-rule="evenodd"
            d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm9-1a1 1 0 100 2h1a1 1 0 100-2h-1z"
            clip-rule="evenodd" />
        </svg>
      </div>
    @endif
  </div>

  <!-- Car Details -->
  <div class="p-4">
    <div class="flex justify-between items-start">
      <h3 class="mb-2 text-lg text-gray-900 font-base">{{ $name }}</h3>
    </div>

    <div class="flex items-center space-x-6 text-base text-gray-600">
      <div class="flex items-center space-x-1">
        <x-eva-people-outline class="w-5 h-5" />
        <span>{{ $seats }}</span>
      </div>

      <div class="flex items-center space-x-1">
        <x-eva-briefcase-outline class="w-5 h-5" />
        <span>{{ $luggage }}</span>
      </div>
    </div>
  </div>
</div>
