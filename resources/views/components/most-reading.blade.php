@props(['posts'])
<div class="border-t border-gray-100 py-10  dark:bg-gray-900">
    <div class="grid grid-cols-12">
        <div class="col-start-2 col-span-10">
            <div class="flex items-center gap-2 mb-5">
                <i class='bx bx-trending-up'></i>
                <span class="uppercase font-bold text-xs dark:text-white">Most reading on Mario Tech</span>
            </div>

            <ul class="col-span-12 grid grid-cols-12 gap-6 md:gap-8 ">

                @foreach($posts->take(6) as $post)
                    <li class="col-span-12 md:col-span-6 lg:col-span-4 md:space-y-3  ">
                        <img class="shadow-sm object-cover object-center rounded-2xl w-full h-60  hidden md:block mb-10 " src="https://news.cgtn.com/news/2020-11-02/Analysis-China-is-betting-on-science-and-tech-like-never-before-V68V871ula/img/871ca9ce8b9941088260b6ed4ced4eeb/871ca9ce8b9941088260b6ed4ced4eeb.jpeg">

                        <div class="space-y-2">
                            <div class="flex items-center space-x-2">
                                <img class="rounded-full" src="https://i.pravatar.cc/30?u=">

                                <a href="#" class="text-sm font-medium transition ease-in-out duration-300 hover:text-indigo-500 dark:text-white">
                                    {{$post->user->name}}
                                </a>
                            </div>

                            <div>
                                <a href="/post/{{$post->title}}" class="dark:text-white inline-block transition ease-in-out duration-300 text-gray-800 hover:text-indigo-500">
                                    <h4 class="title leading-snug font-bold" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"> {{$post->title}} </h4>
                                </a>
                            </div>

                            <div class="text-xs meta flex items-center gap-4 dark:text-white">
                                <span class="relative">Jan 31</span>
                                <span class="relative">{{$post->read}} min read</span>
                                <span class="relative">
                                    <a href="#" class="inline-block rounded-full px-2 py-1 transition ease-in-out duration-300 bg-gray-50 hover:bg-indigo-100 dark:text-gray-900"> Working </a>
                                </span>
                            </div>
                        </div>
                    </li>


                @endforeach

            </ul>
        </div>
    </div>
</div>
