@php
    /** @var \A17\Twill\Models\Block $block */
@endphp
<section>
    <div class="container mx-auto px-5 py-24">
        <div class="mb-20 flex w-full flex-col">
            <h2 class="text-design mb-5 font-serif text-4xl font-bold italic lg:text-5xl">
                {!! $block->input('title') !!}
            </h2>
            <p class="mr-auto leading-relaxed text-gray-600 lg:w-2/3">
                {!! $block->input('description') !!}
            </p>
        </div>
        <div class="-m-4 flex flex-wrap">
            @foreach ($block->children as $child)
                @include('site.blocks.team_member', [
                    'block' => $child,
                ])
            @endforeach
        </div>
    </div>
</section>
