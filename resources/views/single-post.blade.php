<x-app-layout title="Post">
    <x-fe-menu :categories="$categories">
    </x-fe-menu>
    <main>
        @foreach($post as $post)
        <div class="py-10 dark:bg-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-start-2 col-span-10 md:col-start-3 md:col-span-8 lg:col-start-4 lg:col-span-6">
                    <div class="flex items-center space-x-2">
                        <img class="rounded-full" src="https://i.pravatar.cc/30">

                        <div>
                            <a href="#" class="text-sm font-medium transition ease-in-out duration-300 hover:text-indigo-500 dark:text-white">
                               {{$post->user->name}}
                            </a>

                             <div class="text-xs meta flex items-center gap-4 dark:text-white">
                                <span class="relative">Published
                                    <time>{{ $post->created_at->diffForHumans() }}</time></span>
                                <span class="relative">{{$post->read}} min read</span>
                                <span class="relative">
                                    <a href="#" class="inline-block rounded-full px-2 py-1 transition ease-in-out duration-300 bg-gray-50 hover:bg-indigo-100 dark:text-gray-900"> Working </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <h4 class="title text-xl md:text-2xl leading-snug font-bold my-6 dark:text-white">{{$post->title}}</h4>
                    <img class="shadow-sm rounded-xl w-full mb-10" src="https://news.cgtn.com/news/2020-11-02/Analysis-China-is-betting-on-science-and-tech-like-never-before-V68V871ula/img/871ca9ce8b9941088260b6ed4ced4eeb/871ca9ce8b9941088260b6ed4ced4eeb.jpeg">

                    <div class="leading-relaxed text-sm md:text-base lg:text-lg lg:leading-relaxed space-y-4 lg:space-y-8 dark:text-white">
                        {!! $post->body !!}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>



</x-app-layout>
