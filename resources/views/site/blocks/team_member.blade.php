<div class="w-full p-4 lg:w-1/2">
  <div class="flex h-full flex-col items-center justify-center text-center sm:flex-row sm:justify-start sm:text-left">
    <div class="h-48 w-48 flex-shrink-0">
      <img src="{!! $block->image('team_image', 'default') !!}" alt="{{ $block->input('name') }}">
    </div>
    <div class="flex-grow sm:pl-8">
      <h3 class="font-serif text-xl font-bold italic md:text-3xl">
        {!! $block->input('name') !!}
      </h3>
      <h3 class="mb-3 text-gray-500"></h3>
      <p class="mb-4">{!! $block->input('description') !!}</p>
    </div>
  </div>
</div>
