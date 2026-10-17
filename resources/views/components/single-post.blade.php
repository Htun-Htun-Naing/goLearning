<div class="xl:col-start-2 col-span-12 xl:col-span-6 row-start-2 xl:row-start-1 py-14 xl:py-0 border-t xl:border-t-0 border-gray-100 dark:bg-gray-900 dark:border-gray-800">
    <div class="grid grid-cols-12 xl:block">
        <div class="col-start-2 col-span-10">
            <ul class="space-y-6 md:space-y-8">

               @foreach($posts->skip(6) as $post)
                    <li>
                        <div class="flex flex-col md:flex-row gap-6 dark:text-white">
                            <div class="space-y-2">
                                <div class="flex items-center space-x-2">
                                    <img class="rounded-full" src="https://i.pravatar.cc/30?u=">

                                    <a href="#" class="text-sm font-medium transition ease-in-out duration-300 hover:text-indigo-500">
                                        Shinobu Kochō
                                    </a>
                                </div>

                                <div>
                                    <a href="post/{{$post->title}}" class="inline-block transition ease-in-out duration-300 text-gray-800 hover:text-indigo-500 dark:text-white">
                                        <h4 class="title leading-snug font-bold" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"> {{$post->title}} </h4>
                                    </a>

                                    <p class="text-sm md:text-base mt-1" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"> The three of us had been snacking for the better part of the early afternoon, filling a table with everything we could carry. The three of us had been snacking for the better part of the early afternoon, filling a table with everything we could carry. The three of us had been snacking./p>
                                </div>

                                <div class="text-xs meta flex items-center gap-4">
                                    <span class="relative">Jan 31</span>
                                    <span class="relative">7 min read</span>
                                    <span class="relative">
                                        <a href="#" class="inline-block rounded-full px-2 py-1 transition ease-in-out duration-300 bg-gray-50 hover:bg-indigo-100 dark:text-gray-900"> Working </a>
                                    </span>
                                </div>
                            </div>

                            <img class="flex-shrink-0 shadow-sm object-cover object-center rounded-xl md:w-64 h-48 md:h-full" src="https://dummyimage.com/1200x1000&text=a">
                        </div>
                    </li>
                @endforeach

            </ul>

            <div class="flex items-center justify-between mt-10">
                <a href="{{$posts->previousPageUrl()}}" class=" disabled transition ease-in-out duration-300 text-sm text-center inline-block bg-indigo-500 hover:bg-indigo-600 text-white w-24 py-3 md:py-4 rounded-lg">Previous</a>

                <a href="{{$posts->nextPageUrl()}}" class="transition ease-in-out duration-300 text-sm text-center inline-block bg-indigo-500 hover:bg-indigo-600 text-white w-24 py-3 md:py-4 rounded-lg">Next</a>
            </div>
        </div>
    </div>
</div>
