<section id="contact" class="relative">
    <div class="container mx-auto px-5 py-24">
        <div class="mb-12 flex w-full flex-col">
            <h2 class="text-design mb-5 font-serif text-4xl font-bold italic lg:text-5xl">
                {!! $block->input('title') !!}
            </h2>
            <p class="mr-auto leading-relaxed text-gray-600 lg:w-2/3">
                {!! $block->input('description') !!}
            </p>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">

            </div>
            <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <x-honeypot />
            <div class="md:w-2/3 lg:w-1/2">
                <div class="-m-2 flex flex-wrap">
                    <div class="w-full p-2">
                        <div class="relative">
                            <label for="email" class="text-sm leading-7">E-Mail</label>
                            <input type="email" required id="email" name="email"
                                class="w-full border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200" />
                        </div>
                    </div>
                    <div class="w-full p-2">
                        <div class="relative">
                            <label for="message" class="text-sm leading-7">Nachricht</label>
                            <textarea id="message" required name="message"
                                class="h-32 w-full resize-none border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200"></textarea>
                        </div>
                    </div>
                    <div class="w-full p-2">
                        <button type="submit"
                            class="flex border-0 bg-primary-500 py-2 px-8 text-lg text-white hover:bg-primary-600 focus:outline-none">
                            Absenden
                        </button>
                    </div>
                    <div class="mt-8 w-full border-t border-gray-200 p-2 pt-8">
                        <a class="text-primary-500">{!! $block->input('email') !!}</a>
                        <p class="my-5 leading-normal">
                            {!! nl2br($block->input('adress')) !!}
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
