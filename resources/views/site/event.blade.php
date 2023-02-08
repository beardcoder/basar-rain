@extends('site.layouts.event')

@section('content')
  <header>
    <div class="container mx-auto flex flex-col flex-wrap items-center p-5 md:flex-row">
      <a href="{{ route('frontend.page', ['/']) }}" class="title-font mb-4 flex items-center font-medium md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-10 w-10 bg-primary-500 p-2">
          <path class="fill-white"
            d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 96c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24zm200-24c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" />
        </svg>
        <span class="ml-3 text-xl">Basar Team Rain</span>
      </a>
      <x-menu />
    </div>
  </header>
  <main>
    {!! $item->title !!}
  </main>
  <x-footer />
@stop
