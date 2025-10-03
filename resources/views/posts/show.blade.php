@extends('layouts.app')

@section('content')
  <x-page-header :title="$post->getTranslation('title', app()->getLocale())" :description="$post->getTranslation('perex', app()->getLocale())" :image="'/img/page-header.webp'" />

  <!-- Post Content -->
  <article class="py-24 bg-white">
    <div class="px-6 mx-auto max-w-4xl lg:px-8">
      <div class="mb-6 text-sm text-center text-gray-500">
        <time datetime="{{ $post->published_at->format('Y-m-d') }}">
          {{ $post->published_at->format('j. n. Y') }}
        </time>
      </div>

      <!-- Post Content -->
      <div
        class="mx-auto max-w-4xl prose prose-lg md:prose-xl prose-headings:text-center prose-a:text-primary hover:prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl prose-img:shadow-md prose-img:mx-auto prose-p:leading-relaxed">
        {!! $post->getTranslation('content', app()->getLocale()) !!}
      </div>

      <!-- Back to Posts -->
      <div class="pt-8 mt-16 border-t border-gray-200">
        <a href="{{ route('posts.index') }}"
          class="inline-flex items-center font-medium transition-colors duration-200 text-primary hover:text-primary">
          <svg class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          {{ __('pages.posts.show.back_to_posts') }}
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

  @if ($relatedPosts->count() > 0)
    <section class="py-16 bg-gray-50">
      <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">
            {{ __('pages.posts.show.related_posts') }}
          </h2>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2 lg:grid-cols-3">
          @foreach ($relatedPosts as $relatedPost)
            <x-card-post :post="$relatedPost" />
          @endforeach
        </div>
      </div>
    </section>
  @endif
@endsection
