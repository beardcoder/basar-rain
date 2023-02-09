<section @class([
    'py-24' => $block->input('space') === 'large',
    'py-12' => $block->input('space') === 'small',
])>
  <div class="container mx-auto px-5">
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
