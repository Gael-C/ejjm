<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-12 mx-auto">
        <div>
            <p class="font-medium text-blue-500 dark:text-blue-400">Besoin de renseignements ?</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Contactez nous</h1>

            <p class="mt-3 text-gray-500 dark:text-gray-400">Nous vous répondrons aussi vite que possible.</p>

            
        </div>
        

        <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-2">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <div>
                    <a target="_blank" href="https://www.facebook.com/people/%C3%89cole-de-Judo-Jujitsu-Marsilly/61562750729591/">
                        <h2 class="mt-4 text-base font-medium hover:text-blue-500 text-gray-800 dark:text-white">Facebook</h2>
                    </a>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Retrouvez toute l'actualité du club sur Facebook</p>
                </div>

                <div>
                    <a target="_blank" href="https://www.instagram.com/ecolejudomarsilly/">
                        <h2 class="mt-4 text-base font-medium hover:text-blue-500 text-gray-800 dark:text-white">Instagram</h2>
                    </a>
                    
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Vous pouvez également suivre l'actualité photo sur Instagram</p>
                </div>

                <div>
                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Dojo</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2760.3242555371507!2d-1.1320202236672192!3d46.22389608243109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4806ad6584c96a1d%3A0xf75b0805e5c0f12!2sEcole%20de%20Judo%20Jujistu%20de%20Marsilly!5e0!3m2!1sfr!2sfr!4v1723455993988!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <div class="p-4 py-6 rounded-lg bg-gray-50 dark:bg-gray-800 md:p-8">

                @if (session('mail envoyé'))
                <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('mail envoyé') }}
                    </div>
                    <button type="button"  wire:click="close" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>

                <script>
                    function closeAlert() {
                        var alert = document.getElementById('alert-3');
                        alert.style.display = 'none'; // Cache l'alerte
                    }
                </script>
                @endif
                
                <form wire:submit="submitForm">
                    
                    <div class="-mx-2 md:items-center md:flex">
                        <div class="flex-1 px-2">
                            <label for="nom" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nom</label>
                            <input type="text" wire:model="nom" placeholder="Nom " class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            @error('nom') 
                                <span class="text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="flex-1 px-2 mt-4 md:mt-0">
                            <label for="prenom" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Prénom</label>
                            <input type="text" wire:model="prenom" placeholder="Prénom" class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            @error('prenom') 
                                <span class="text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                        <input type="email" wire:model="email" placeholder="email@example.com" class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('email') 
                                <span class="text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                    </div>

                    <div class="w-full mt-4">
                        <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                        <textarea wire:model="message" class="block w-full h-32 px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg md:h-56 dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                        @error('message') 
                                <span class="text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                    </div>

                    <button class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>