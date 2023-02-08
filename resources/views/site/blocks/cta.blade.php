<section class="bg-secondary-50">
  <div class="container mx-auto px-5 py-24">
    <div class="mx-auto flex flex-col items-start sm:flex-row sm:items-center lg:w-2/3">
      <h2 class="flex-grow font-serif text-3xl font-bold italic sm:pr-16">
        {!! $block->input('title') !!}
      </h2>
      <a href="{!! $block->input('link') !!}" target="_blank" title="{!! $block->input('title') !!}}" rel="noopener noreferrer"
        class="mt-10
                flex-shrink-0 border-0 bg-primary-500 py-2 px-8 text-lg text-white hover:bg-primary-600
                focus:outline-none sm:mt-0">
        {!! $block->input('link_text') !!}
      </a>
    </div>
  </div>
</section>
