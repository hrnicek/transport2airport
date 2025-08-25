@extends('layouts.app')

@section('content')
  <section class="py-12">
    <div class="max-w-7xl mx-auto px-4 bg-gray-50">
      <div class=" p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-green-700 mb-4">Vaše žádost byla úspěšně odeslána!</h2>
        <p class="text-gray-600">Děkujeme za vaši žádost. Zavoláme Vám co nejdříve s potvrzením o přijetí vaší žádosti.</p>
      </div>
      <div class="mt-8  p-8 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
          <svg class="w-6 h-6 mr-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
            </path>
          </svg>
          Shrnutí vaší rezervace
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="space-y-4">
            <div class="flex items-start">
              <svg class="w-5 h-5 mr-3 mt-0.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                </path>
              </svg>
              <div>
                <p class="text-sm font-medium text-gray-500">E-mail</p>
                <p class="text-gray-900">{{ $demand->email }}</p>
              </div>
            </div>
            <div class="flex items-start">
              <svg class="w-5 h-5 mr-3 mt-0.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                </path>
              </svg>
              <div>
                <p class="text-sm font-medium text-gray-500">Telefon</p>
                <p class="text-gray-900">{{ $demand->phone }}</p>
              </div>
            </div>
            <div class="flex items-start">
              <svg class="w-5 h-5 mr-3 mt-0.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h8m-8 0H6a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9a2 2 0 00-2-2h-2">
                </path>
              </svg>
              <div>
                <p class="text-sm font-medium text-gray-500">Datum</p>
                <p class="text-gray-900">{{ $demand->date->format('d.m.Y') }}</p>
              </div>
            </div>
          </div>
          <div class="space-y-4">
            <div class="flex items-start">
              <svg class="w-5 h-5 mr-3 mt-0.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <div>
                <p class="text-sm font-medium text-gray-500">Odkud</p>
                <p class="text-gray-900">{{ $demand->from }}</p>
              </div>
            </div>
            <div class="flex items-start">
              <svg class="w-5 h-5 mr-3 mt-0.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <div>
                <p class="text-sm font-medium text-gray-500">{{ $demand->airport ? 'Letiště' : 'Kam' }}</p>
                <p class="text-gray-900">{{ $demand->to }}</p>
              </div>
            </div>
            @if ($demand->note)
              <div class="flex items-start">
                <svg class="w-5 h-5 mr-3 mt-0.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                  </path>
                </svg>
                <div>
                  <p class="text-sm font-medium text-gray-500">Poznámka</p>
                  <p class="text-gray-900">{{ $demand->note }}</p>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
