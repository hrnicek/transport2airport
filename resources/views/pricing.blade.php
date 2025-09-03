@extends('layouts.app')

@section('content')
  <x-page-header title="Ceník dopravy na letiště" description="Možnost individuálních cen dle dohody" />
  <section class="relative py-32">
    <div class="px-4 mx-auto max-w-7xl">
      <div class="mb-8">
        <h2 class="text-3xl text-left font-base">
          Olomouc a okolí
        </h2>
      </div>
      <div>
        <h3 class="my-2 text-2xl font-base">Auto Cupra</h3>
        <div class="grid grid-cols-1 gap-8 xl:grid-cols-4">
          <x-card-pricing title="Videň" subtitle="Vienna Airport" price="3 600" currency="Kč" />
          <x-card-pricing title="Praha" subtitle="Letiště Václava Havla" price="5 500" currency="Kč" />
          <x-card-pricing title="Ostrava" subtitle="Ostrava Airport" price="2 000" currency="Kč" />
          <x-card-pricing title="Brno" subtitle="Brno Airport" price="2 000" currency="Kč" />
          <x-card-pricing title="Katovice" subtitle="Katovice Airport" price="3 600" currency="Kč" />
          <x-card-pricing title="Krakow" subtitle="Krakow Airport" price="3 900" currency="Kč" />
          <x-card-pricing title="Bratislava" subtitle="Bratislava Airport" price="3 600" currency="Kč" />
        </div>
      </div>

      <div class="mt-8">
        <h3 class="my-2 text-2xl font-base">Auto Citroen</h3>
        <div class="grid grid-cols-1 gap-8 xl:grid-cols-4">
          <x-card-pricing title="Videň" subtitle="Vienna Airport" price="5 200" currency="Kč" />
          <x-card-pricing title="Praha" subtitle="Letiště Václava Havla" price="6 900" currency="Kč" />
          <x-card-pricing title="Ostrava" subtitle="Ostrava Airport" price="2 800" currency="Kč" />
          <x-card-pricing title="Brno" subtitle="Brno Airport" price="2 800" currency="Kč" />
          <x-card-pricing title="Katovice" subtitle="Katovice Airport" price="5 200" currency="Kč" />
          <x-card-pricing title="Krakow" subtitle="Krakow Airport" price="5 500" currency="Kč" />
          <x-card-pricing title="Bratislava" subtitle="Bratislava Airport" price="5 200" currency="Kč" />
        </div>
      </div>

    </div>
    <img src="/img/citroen2.png" alt="" class="absolute bottom-0 right-16 h-68" />
  </section>
@endsection
