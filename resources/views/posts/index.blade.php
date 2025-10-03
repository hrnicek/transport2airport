@extends('layouts.app')

@section('title', __('pages.posts.index.title'))
@section('description', __('pages.posts.index.description'))

@section('content')
  <!-- Page Header -->
  <div class="bg-gray-900">
    <div class="px-6 py-24 mx-auto max-w-7xl lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
          {{ __('pages.posts.index.title') }}
        </h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">
          {{ __('pages.posts.index.description') }}
        </p>
      </div>
    </div>
  </div>

  <!-- Posts Grid -->
  <div class="py-24 bg-white">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      @if($posts->count() > 0)
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
          @foreach($posts as $post)
            <x-card-post :post="$post" />
          @endforeach
        </div>

        <!-- Pagination -->
        @if($posts->hasPages())
          <div class="mt-16">
            {{ $posts->links() }}
          </div>
        @endif
      @else
        <div class="text-center">
          <svg class="mx-auto w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 011 1l4 4v9a2 2 0 01-2 2z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 6v4h4"></path>
          </svg>
          <h3 class="mt-4 text-lg font-medium text-gray-900">{{ __('components.posts.no_posts') }}</h3>
          <p class="mt-2 text-gray-500">{{ __('components.posts.subtitle') }}</p>
        </div>
      @endif
    </div>
  </div>
@endsection