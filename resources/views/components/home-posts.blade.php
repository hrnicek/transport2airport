<div class="pt-16 pb-24">
  <div class="p-6 mx-auto max-w-7xl bg-gray-50 lg:p-12">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="tracking-tight text-gray-900 md:text-4xl font-base">
        {{ __('components.posts.title') }}
      </h2>
      <p class="mt-4 text-lg text-gray-600">
        {{ __('components.posts.subtitle') }}
      </p>
    </div>

    @if ($posts->count() > 0)
      <div class="mt-16">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2">
          @foreach ($posts as $post)
            <x-card-post :post="$post" />
          @endforeach
        </div>

        <div class="mt-12 text-center">
          <a href="{{ route('posts.index') }}"
            class="inline-flex items-center px-6 py-3 text-base font-medium text-white rounded-md border border-transparent shadow-sm transition-colors duration-200 bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
            {{ __('components.posts.view_all') }}
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    @else
      <div class="mt-16 text-center">
        <p class="text-gray-500">{{ __('components.posts.no_posts') }}</p>
      </div>
    @endif
  </div>
</div>
