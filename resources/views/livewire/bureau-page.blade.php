<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Comité de direction</h1>

        <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
            Voici les différents membres du comité.
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
            @isset($bureau)
                @foreach ($bureau as $item)
                    <div class="flex flex-col items-center p-8 transition-colors duration-300">
                        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="{{ asset('storage/'.$item->image) }}" alt="Photo des membres du bureau">
        
                        <h1 class="mt-4 text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white"> {{ $item->prenom }}</h1>
        
                        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300"> {{ $item->poste }}</p>
                    </div>
                    
                @endforeach
            @endisset
        </div>
    </div>
</section>