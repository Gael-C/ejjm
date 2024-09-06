<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Nos partenaires</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Comme un club sportif amateur n'est rien sans ces partenaires, voici nos mécènes qui nous aident cette saison.</p>
        </div>
        <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="{{ $partenaires[2]->nom}}" class="w-full object-cover h-full object-center block"
                        src="{{ asset('storage/'.$partenaires[2]->image) }}">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="{{ $partenaires[3]->nom}}" class="w-full object-cover h-full object-center block"
                        src="{{ asset('storage/'.$partenaires[3]->image) }}">
                </div>
                <div class="md:p-2 p-1 w-full">
                    <img alt="{{ $partenaires[1]->nom}}" class="w-full h-full object-cover object-center block"
                        src="{{ asset('storage/'.$partenaires[1]->image) }}">
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-full">
                    <img alt="{{ $partenaires[0]->nom}}" class="w-full h-full object-cover object-center block"
                    src="{{ asset('storage/'.$partenaires[0]->image) }}">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="{{ $partenaires[5]->nom}}" class="w-full object-cover h-full object-center block"
                        src="{{ asset('storage/'.$partenaires[5]->image) }}">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="{{ $partenaires[4]->nom}}" class="w-full object-cover h-full object-center block"
                        src="{{ asset('storage/'.$partenaires[4]->image) }}">
                </div>
            </div>
        </div>
    </div>
</section>