@php
    /** @var \A17\Twill\Models\Block $block */
@endphp
<div class="w-full p-4 sm:w-1/2 lg:w-1/4">
    <div class="flex h-full flex-col items-center text-center">
        <a href="{!! $block->input('url') !!}">
            <img src="{!! $block->image('image', 'sponsor') !!}" alt="{{ $block->input('name') }}">
        </a>
        <div class="w-full">
            <h3 class="text-lg font-bold">
                <a href="{!! $block->input('url') !!}">{!! $block->input('name') !!}</a>
            </h3>
        </div>
    </div>
</div>
