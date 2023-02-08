<nav class="flex flex-wrap items-center justify-center md:ml-auto">
  @foreach ($links as $link)
    @if ($link->slug !== TwillAppSettings::get('homepage.homepage.page')->first()->slug && $link->in_menu)
      <a href="{{ route('frontend.page', [$link->slug]) }}" title="" class="hover: mr-5" data-turbo-action="replace">
        {{ $link->title }}
      </a>
    @endif
  @endforeach
</nav>
