@php
    /** @var \A17\Twill\Models\Block $block */
@endphp
<section class="relative flex h-[600px]">
    <div class="absolute inset-0 -z-10 after:absolute after:inset-0 after:bg-secondary-50/80 md:after:hidden">
        <img src="{!! $block->image('image', 'hero') !!}" alt="{{ $block->input('title') }}"
            class="h-full w-full object-cover object-right" />
    </div>
    <div class="container mx-auto flex h-full flex-col items-center px-5 md:flex-row">
        <div
            class="my-auto mb-16 flex flex-col items-center text-center md:mb-auto md:w-1/2 md:items-start md:pr-16 md:text-left lg:flex-grow lg:pr-24">
            <h1 class="mb-8 max-w-xl font-serif text-4xl font-bold italic text-shadow-white md:text-6xl">
                {!! $block->input('title') !!}
            </h1>
            <p class="mb-10 max-w-lg leading-relaxed">
                {!! $block->input('text') !!}
            </p>
            <div class="flex justify-center">
                <a href="{!! $block->input('link') !!}" target="_self"
                    class="inline-flex border-0 bg-primary-500 py-2 px-6 text-lg uppercase text-white transition-colors hover:bg-primary-600 focus:outline-none">
                    Termine Anzeigen
                </a>
            </div>
        </div>
    </div>
</section>
