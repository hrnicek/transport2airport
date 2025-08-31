@props([
    'title' => '',
    'subtitle' => 'Letiště Václava Havla',
    'price' => '',
    'currency' => '',
])
<div>
  <div class="bg-gray-50 p-8 border-l-4 border-primary">
    <h3 class="text-xl font-base text-left">Olomouc - {{ $title }}</h3>
    <p class="text-sm text-gray-500">{{ $subtitle }}</p>
    <p class="text-3xl font-base text-left mt-4">{{ $price }} Kč</p>
  </div>
</div>
