@extends('layouts.app')

@section('content')
  <x-page-header title="Náš vozový park" />
  <section class="pt-16 pb-24">
    <div class="mx-auto max-w-7xl bg-gray-50 lg:p-12">
      <div class="max-w-2xl mx-auto lg:mx-0">
        <h2 class="tracking-tight text-gray-900 md:text-4xl font-base">
          Naše vozy
        </h2>
        <p class="mt-4 text-lg text-gray-600">
          Objevte flotilu našich moderních a komfortních vozů.
        </p>
      </div>
      <div class="mt-16">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2">
          <x-card-car name="Citroen Spacetourer" image="/img/taxi-na-letiste-citroen.jpeg" seats="7" luggage="7" />

          <x-card-car name="Cupra Leon hybrid" image="/img/autem-na-letiste-cupra.jpeg" seats="3" luggage="4" />
        </div>
      </div>

  </section>
@endsection
