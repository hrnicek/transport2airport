@extends('layouts.app')

@section('content')
  <x-page-header title="Ceník dopravy na letiště" description="Možnost individuálních cen dle dohody" />
  <section class="py-32 relative">
    <div class="max-w-7xl mx-auto px-4">
      <div class="mb-8">
        <h2 class="text-3xl font-base text-left">
          Olomouc a okolí
        </h2>
      </div>
      <div class="grid grid-cols-1 xl:grid-cols-4 gap-8">
        <x-card-pricing title="Videň" subtitle="Vienna Airport" price="4 800" currency="Kč" />
        <x-card-pricing title="Praha" subtitle="Letiště Václava Havla" price="5 800" currency="Kč" />
        <x-card-pricing title="Ostrava" subtitle="Ostrava Airport" price="2 500" currency="Kč" />
        <x-card-pricing title="Brno" subtitle="Brno Airport" price="2 000" currency="Kč" />
        <x-card-pricing title="Katovice" subtitle="Katovice Airport" price="4 800" currency="Kč" />
        <x-card-pricing title="Krakow" subtitle="Krakow Airport" price="5 800" currency="Kč" />
        <x-card-pricing title="Bratislava" subtitle="Bratislava Airport" price="4 800" currency="Kč" />
      </div>
    </div>
    <img src="/img/citroen2.png" alt="" class="absolute bottom-0 right-16 h-68" />
  </section>
@endsection
