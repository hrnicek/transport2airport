@props(['post'])

<article class="bg-white rounded-lg shadow-sm transition-shadow duration-300 hover:shadow-md">
  <div class="h-[300px] bg-gray-100 relative rounded-t-lg overflow-hidden">
    @if ($post->getFirstMediaUrl('image'))
      <img src="{{ $post->getFirstMediaUrl('image') }}" alt="{{ $post->getTranslation('title', app()->getLocale()) }}"
        class="object-cover w-full h-full">
    @else
      <div class="flex justify-center items-center w-full h-full text-gray-400">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 011 1l4 4v9a2 2 0 01-2 2z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 6v4h4"></path>
        </svg>
      </div>
    @endif
  </div>

  <div class="p-6">
    <div class="flex items-center mb-3 text-sm text-gray-500">
      <time datetime="{{ $post->published_at->format('Y-m-d') }}">
        {{ $post->published_at->format('j. n. Y') }}
      </time>
    </div>

    <h3 class="mb-3 text-xl font-semibold text-gray-900 line-clamp-2">
      <a href="{{ route('posts.show', $post->slug) }}" class="transition-colors duration-200 hover:text-primary">
        {{ $post->getTranslation('title', app()->getLocale()) }}
      </a>
    </h3>

    @if ($post->getTranslation('perex', app()->getLocale()))
      <p class="mb-4 text-gray-600 line-clamp-3">
        {{ $post->getTranslation('perex', app()->getLocale()) }}
      </p>
    @endif

    <a href="{{ route('posts.show', $post->slug) }}"
      class="inline-flex items-center font-medium transition-colors duration-200 text-primary hover:text-blue-800">
      {{ __('components.posts.read_more') }}
      <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
    </a>
  </div>
</article>
