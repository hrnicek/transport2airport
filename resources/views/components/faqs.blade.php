<section class="pt-16 pb-24">
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
        Odpovědi na vaše otázky
      </h2>
      <p class="mt-1 text-gray-600 dark:text-neutral-400">
        Odpovědi na nejčastěji kladené otázky.
      </p>
    </div>

    <div class="max-w-2xl mx-auto">
      <div class="hs-accordion-group">
        @forelse ($faqs as $faq)
          <div
            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 @if ($loop->first) active @endif"
            id="hs-basic-with-title-and-arrow-stretched-heading-{{ $faq->id }}">
            <button
              class="inline-flex items-center justify-between w-full pb-3 font-semibold text-gray-800 transition rounded-lg hs-accordion-toggle group gap-x-3 md:text-lg text-start hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
              aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-{{ $faq->id }}">
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
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-{{ $faq->id }}"
              class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if (!$loop->first) hidden @endif"
              aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-{{ $faq->id }}">
              <p class="text-gray-800 dark:text-neutral-200">
                {!! $faq->answer !!}
              </p>
            </div>
          </div>
        @empty
          <p>No FAQs available.</p>
        @endforelse
      </div>
    </div>
</section>
