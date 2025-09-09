<section class="pt-16 pb-24">
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
      <h4 class="text-2xl font-base md:text-4xl md:leading-tight ">
        Odpovědi na vaše otázky
      </h4>
      <p class="mt-1 text-gray-600 ">
        Odpovědi na nejčastěji kladené otázky.
      </p>
    </div>

    <div class="max-w-2xl mx-auto">
      @forelse ($faqs as $faq)
        <div id="{{ $faq->id }}" class="hs-accordion-group">
          <div class="p-6 hs-accordion hs-accordion-active:bg-gray-100 active"
            id="hs-basic-with-title-and-arrow-stretched-heading-one">
            <button
              class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
              aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
              {{ $faq->question }}
              <svg
                class="block text-gray-600 hs-accordion-active:hidden shrink-0 size-5 group-hover:text-gray-500 dark:text-neutral-400"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
              </svg>
              <svg
                class="hidden text-gray-600 hs-accordion-active:block shrink-0 size-5 group-hover:text-gray-500 dark:text-neutral-400"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m18 15-6-6-6 6" />
              </svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
              class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region"
              aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
              <p class="text-gray-800 dark:text-neutral-200">
                {!! $faq->answer !!}
              </p>
            </div>
          </div>
        @empty
          <p>No FAQs available.</p>
      @endforelse
    </div>
</section>
