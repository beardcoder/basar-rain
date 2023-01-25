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
        <form action="/foo/bar" method="POST">
            @csrf
            <div class="md:w-2/3 lg:w-1/2">
                <div class="-m-2 flex flex-wrap">
                    <div class="w-full p-2">
                        <div class="relative">
                            <label for="email" class="text-sm leading-7">E-Mail</label>
                            <input type="email" id="email" name="email"
                                class="w-full border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200" />
                        </div>
                    </div>
                    <div class="w-full p-2">
                        <div class="relative">
                            <label for="message" class="text-sm leading-7">Nachricht</label>
                            <textarea id="message" name="message"
                                class="h-32 w-full resize-none border border-gray-300 bg-gray-100 bg-opacity-50 py-1 px-3 leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200"></textarea>
                        </div>
                    </div>
                    <div class="w-full p-2">
                        <button
                            class="flex border-0 bg-primary-500 py-2 px-8 text-lg text-white hover:bg-primary-600 focus:outline-none">
                            Absenden
                        </button>
                    </div>
                    <div class="mt-8 w-full border-t border-gray-200 p-2 pt-8">
                        <a class="text-primary-500">{!! $block->input('email') !!}</a>
                        <p class="my-5 leading-normal">
                            {!! $block->input('adress') !!}
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
