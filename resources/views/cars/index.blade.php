@extends('layouts.app')

@section('content')
  <x-page-header title="Náš vozový park" />
  <section class="pt-16 pb-24">
    <div class="mx-auto max-w-7xl lg:p-12 bg-gray-50">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="md:text-4xl font-base tracking-tight text-gray-900">
          Naše vozy
        </h2>
        <p class="mt-4 text-lg text-gray-600">
          Objevte flotilu našich moderních a komfortních vozů.
        </p>
      </div>
      <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
          <x-card-car name="Citroen Spacetourer" seats="7" luggage="7" />

          <x-card-car name="Cupra Leon hybrid" seats="3" luggage="4" />
        </div>
      </div>

  </section>
@endsection
