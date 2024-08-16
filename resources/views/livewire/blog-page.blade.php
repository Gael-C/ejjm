<div class="container px-6 py-10 mx-auto">
    <div class="lg:flex lg:-mx-6">
        <!-- Section "latest" -->
        <div class="lg:w-3/4 lg:px-6">
            <a href="{{ route('article', $latest->slug) }}" class="flex flex-col items-center">
                <img class="object-cover w-auto h-auto xl:h-[28rem] rounded-xl mx-auto" src="{{ asset('storage/'.$latest->image) }}" alt="Image de l'article du blog">
                <div>
                    <h1 class="max-w-lg mt-4 text-2xl font-semibold leading-tight text-gray-800 dark:text-white">
                        {{ $latest->titre}}
                    </h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $latest->created_at->format('d/m/Y')}}</p>
                </div>
            </a>
        </div>
        

        <!-- Section "articles" -->
        <div class="lg:w-1/4 lg:px-6">
            @foreach ($articles as $article)
            <div class="mt-8 lg:mt-0">
                <a href="{{ route('article', $article->slug) }}" class="block mt-2 font-medium text-gray-700 hover:underline hover:text-gray-500 dark:text-gray-400">
                    <div>
                        <h3 class=" text-gray-800 dark:text-white capitalize">{{ $article->titre }}</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $article->created_at->format('d/m/Y')}}</p>
                    </div>
                </a>
                <hr class="my-6 border-gray-200 dark:border-gray-700">
            </div>
            @endforeach
        </div>
    </div>
</div>
