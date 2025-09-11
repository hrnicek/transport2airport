<div class="py-24 sm:py-32">
  <div class="relative p-12 mx-auto max-w-7xl bg-gray-50">
    <video autoplay loop muted playsinline
      class="object-cover absolute top-0 left-0 z-10 w-full h-full opacity-10">
      <source src="/videos/jaktofunguje.webm" type="video/webm">
      <source src="/videos/jaktofunguje.mp4" type="video/mp4">
    </video>
    <div class="relative z-20 mx-auto max-w-2xl lg:mx-0">
      <h2 class="tracking-tight text-gray-900 md:text-4xl font-base">
        {{ __('components.how_it_works.title') }}
      </h2>
      <p class="mt-4 text-lg text-gray-600">
        {!! __('components.how_it_works.subtitle') !!}
      </p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
      <dl class="grid grid-cols-1 gap-x-8 gap-y-16 max-w-xl lg:max-w-none lg:grid-cols-3">
        <div class="flex flex-col">
          <dt class="font-semibold text-gray-900 text-base/7">
            <div class="flex justify-center items-center mb-6 text-white rounded-lg size-10 bg-primary">
              1
            </div>
            {{ __('components.how_it_works.step1.title') }}
          </dt>
          <dd class="flex flex-col flex-auto mt-1 text-gray-600 text-base/7">
            <p class="flex-auto">
              {{ __('components.how_it_works.step1.description') }}
            </p>
          </dd>
        </div>
        <div class="flex flex-col">
          <dt class="font-semibold text-gray-900 text-base/7">
            <div class="flex justify-center items-center mb-6 text-white rounded-lg size-10 bg-primary">
              2
            </div>
            {{ __('components.how_it_works.step2.title') }}
          </dt>
          <dd class="flex flex-col flex-auto mt-1 text-gray-600 text-base/7">
            <p class="flex-auto">
              {{ __('components.how_it_works.step2.description') }}
            </p>
          </dd>
        </div>
        <div class="flex flex-col">
          <dt class="font-semibold text-gray-900 text-base/7">
            <div class="flex justify-center items-center mb-6 text-white rounded-lg size-10 bg-primary">
              3
            </div>
            {{ __('components.how_it_works.step3.title') }}
          </dt>
          <dd class="flex flex-col flex-auto mt-1 text-gray-600 text-base/7">
            <p class="flex-auto">
              {{ __('components.how_it_works.step3.description') }}
            </p>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>
