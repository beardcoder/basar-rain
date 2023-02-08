<section>
  <div class="container mx-auto px-5 py-24">
    <div class="grid md:grid-cols-2">
      <div>
        <h2 class="font-serif text-3xl font-bold mb-6">
          {!! $block->input('title') !!}
        </h2>
        <div class="prose">
          {!! $block->input('text') !!}
        </div>
      </div>
      <div>
        @if ($block->image('variable_image', 'default'))
          <img src="{!! $block->image('variable_image', 'default') !!}" alt="{{ $block->input('title') }}">
        @endif
      </div>
    </div>
  </div>
</section>
