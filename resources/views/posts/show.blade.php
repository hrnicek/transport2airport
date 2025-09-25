@extends('layouts.app')

@section('title', $post->getTranslation('title', app()->getLocale()))
@section('description', $post->getTranslation('perex', app()->getLocale()) ?: __('posts.default_description'))

@section('content')
  <!-- Post Header -->
  <div class="bg-gray-900">
    <div class="px-6 py-16 mx-auto max-w-7xl lg:px-8">
      <div class="mx-auto max-w-4xl">
        <!-- Breadcrumb -->
        <nav class="mb-8">
          <ol class="flex items-center space-x-2 text-sm text-gray-300">
            <li>
              <a href="{{ route('home') }}" class="hover:text-white transition-colors duration-200">
                {{ __('navigation.home') }}
              </a>
            </li>
            <li>
              <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </li>
            <li>
              <a href="{{ route('posts.index') }}" class="hover:text-white transition-colors duration-200">
                {{ __('posts.page_title') }}
              </a>
            </li>
            <li>
              <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </li>
            <li class="text-gray-400">
              {{ $post->getTranslation('title', app()->getLocale()) }}
            </li>
          </ol>
        </nav>

        <!-- Post Meta -->
        <div class="mb-6">
          <time datetime="{{ $post->published_at->format('Y-m-d') }}" class="text-sm text-gray-300">
            {{ $post->published_at->format('j. n. Y') }}
          </time>
        </div>

        <!-- Post Title -->
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
          {{ $post->getTranslation('title', app()->getLocale()) }}
        </h1>

        <!-- Post Perex -->
        @if($post->getTranslation('perex', app()->getLocale()))
          <p class="mt-6 text-xl leading-8 text-gray-300">
            {{ $post->getTranslation('perex', app()->getLocale()) }}
          </p>
        @endif
      </div>
    </div>
  </div>

  <!-- Post Content -->
  <article class="py-16 bg-white">
    <div class="px-6 mx-auto max-w-4xl lg:px-8">
      <!-- Featured Image -->
      @if($post->getFirstMediaUrl())
        <div class="mb-12">
          <img src="{{ $post->getFirstMediaUrl() }}" 
               alt="{{ $post->getTranslation('title', app()->getLocale()) }}" 
               class="w-full h-auto rounded-lg shadow-lg">
        </div>
      @endif

      <!-- Post Content -->
      <div class="prose prose-lg prose-gray max-w-none">
        {!! nl2br(e($post->getTranslation('content', app()->getLocale()))) !!}
      </div>

      <!-- Back to Posts -->
      <div class="mt-16 pt-8 border-t border-gray-200">
        <a href="{{ route('posts.index') }}" 
           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
          <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          {{ __('posts.back_to_posts') }}
        </a>
      </div>
    </div>
  </article>

  <!-- Related Posts -->
  @php
    $relatedPosts = App\Models\Post::active()
        ->where('id', '!=', $post->id)
        ->orderBy('published_at', 'desc')
        ->limit(3)
        ->get();
  @endphp

  @if($relatedPosts->count() > 0)
    <section class="py-16 bg-gray-50">
      <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">
            {{ __('posts.related_posts') }}
          </h2>
        </div>
        
        <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2 lg:grid-cols-3">
          @foreach($relatedPosts as $relatedPost)
            <x-card-post :post="$relatedPost" />
          @endforeach
        </div>
      </div>
    </section>
  @endif
@endsection