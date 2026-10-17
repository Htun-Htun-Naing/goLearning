<x-app-layout title="MarioTech">
    <header class="bg-indigo-50 dark:bg-gray-800">
        <x-fe-menu :categories="$categories">
        </x-fe-menu>

        <div class="grid grid-cols-12">
            <div class="col-start-2 col-span-10 md:col-start-2 md:col-span-5 py-14 md:py-20">
                <h1 class="text-4xl xl:text-5xl font-medium text-gray-900 xl:leading-tight dark:text-white">Mario Tech is the place where hatred does not exists.</h1>

                <p class="mt-2 text-sm md:text-base xl:w-4/5 dark:text-white">
                    It's easy and free to post your thinking on any topic and connect with millions of readers.
                </p>
            </div>

            <div class="hidden md:block md:col-start-8 md:col-span-4 md:flex md:items-center">
                <img src="/img/hero-image.png" alt="hero-image">
            </div>
        </div>
    </header>

    <main>
        <!-- Most Reading Posts -->

        @if($posts->count() )
       <x-most-reading :posts="$posts">
       </x-most-reading>
        <!-- Posts and categories aside two column -->
        <div class="grid grid-cols-12 xl:py-14 xl:border-t border-gray-100 dark:border-gray-500 dark:bg-gray-900">
            @if($posts->count() > 6 )
                <x-single-post :posts="$posts">
                </x-single-post>
            @endif
        @else
                <p>no posts.</p>
        @endif
            <div class="xl:col-start-9 col-span-12 xl:col-span-3 row-start-1 xl:row-start-1 py-10 xl:py-0 border-t xl:border-t-0 border-gray-100 dark:border-gray-700">
                <div class="grid grid-cols-12 xl:block xl:h-full">
                    <div class="col-start-2 col-span-10 xl:h-full">
                        <div class="sticky top-10 dark:text-white">
                            <h1 class="uppercase font-bold text-sm">Top Ten Most Popular Reading</h1>

                            <ul class="flex flex-wrap gap-2 mt-4">
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Relationships</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Data Science</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Self</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Docker</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Programming</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">PHP</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Laravel</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Linux Server Administration</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Machine Learning</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Figma Design</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

   <x-fe-footer>
   </x-fe-footer>


</x-app-layout>
