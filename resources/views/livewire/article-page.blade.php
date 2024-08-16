<div class="px-4 py-24 mx-auto max-w-7xl">
    <div class="max-w-3xl mx-auto">
        <!-- Blog post header -->
        <div class="py-8">
            <h1 class="mb-3 text-4xl text-center font-bold text-gray-900 md:leading-tight md:text-5xl">{{ $article->titre}}</h1>
            <p class="text-gray-500 text-center text-sm">Publié le {{ $article->created_at->format('d/m/Y')}}</p>
        </div>

        <!-- Featured image -->
        <img src="{{ asset('storage/'.$article->image) }}" alt="Image de l'article" class="w-full h-auto mb-8">

        <!-- Blog post content -->
        <div class="mt-5 mx-auto text-center">
            <p> {{ $article->contenu}}</p>
        </div>
    </div>
</div>