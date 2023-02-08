<footer class="bg-white p-4 md:p-8 lg:p-10">
    <hr class="mb-8" />
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="{{ route('frontend.page', ['/']) }}"
            class="title-font mb-4 inline-flex flex-row items-center font-medium md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-10 w-10 bg-primary-500 p-2">
                <path class="fill-white"
                    d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 96c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24zm200-24c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" />
            </svg>
            <span class="ml-3 text-xl">Basar Team Rain</span>
        </a>
        <p class="my-6 text-gray-500">
            {{ TwillAppSettings::get('homepage.footer.text') }}
        </p>
        <nav class="mb-6 flex flex-wrap items-center justify-center">
            @foreach ($links as $link)
                <a href="{{ route('frontend.page', [$link->slug]) }}" title="{{ $link->title }}"
                    class="mr-5 hover:text-gray-900">
                    {{ $link->title }}
                </a>
            @endforeach
        </nav>
        <span class="text-sm text-gray-500 sm:text-center">
            © 2022-{{ date('Y') }} Basar Team Rain <br /> Erstellt mit ❤️ und 🧘🏼
            von <a href="https://letsbenow.de" class="hover:underline">
                Markus Sommer
            </a>
        </span>
    </div>
</footer>
