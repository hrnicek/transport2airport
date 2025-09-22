<div class="relative lg:h-[600px] max-w-7xl mx-auto">
  <!-- Video pro desktop -->
  <video class="hidden object-cover absolute top-0 left-0 z-0 w-full h-full md:block" autoplay loop muted playsinline>
    <source src="/videos/hero.webm" type="video/webm">
    <source src="/videos/hero.mp4" type="video/mp4">
  </video>
  <!-- Statický obrázek pro mobil -->
  <div class="absolute top-0 left-0 z-0 w-full h-full bg-center bg-no-repeat bg-cover md:hidden"
    style="background-image: url('/img/page-header.webp');"></div>
  <div class="absolute top-0 left-0 z-10 w-full h-full bg-black/70"></div>
  <div class="flex relative z-20 flex-col justify-between px-4 mx-auto max-w-7xl h-full">
    <div class="pt-12">
      <div class="grid grid-cols-12">
        <div class="col-span-12">
          <h1 class="text-xl font-medium text-center text-white xl:text-5xl">
            {!! __('components.hero.title') !!}
          </h1>
          <p class="mx-auto mt-4 max-w-2xl text-xs text-center text-white/90 xl:text-xl xl:mt-8">
            {{ __('components.hero.subtitle') }}
          </p>
        </div>
      </div>
    </div>
    <div id="rezervace" class="pb-4">
      <div id="form-demand"></div>
    </div>
  </div>
</div>
