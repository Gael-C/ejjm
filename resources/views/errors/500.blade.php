<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>{{ $title ?? 'École Judo Jujitsu Marsilly' }}</title>
</head>
<body>
    @livewire('partials.header')
    <section class="bg-white dark:bg-gray-900 ">
        <div class="container min-h-screen px-6 py-12 mx-auto lg:flex lg:items-center lg:gap-12">
            <div class="text-center w-full lg:w-1/2">
                <p class="text-sm font-medium text-blue-500 dark:text-blue-400">Erreur 500</p>
                <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-6xl">Ippon !</h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Désolé, une erreur s'est produite.</p>
    
                <div class="flex justify-center mt-6 gap-x-3">
                    <a href="{{route('club')}}">
                        <button class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                            Retourner à l'accueil
                        </button>
                    </a>
                </div>
            </div>
    
            <div class="relative w-full mt-8 lg:w-1/2 lg:mt-0">
                <img class=" w-full lg:h-[32rem] h-80 md:h-96 rounded-lg object-cover " src="{{ asset('storage/ippon.jpg') }}" alt="Image de salut Judo"> 
            </div>
        </div>
    </section>
    <footer class="dark:bg-gray-900">
        @livewire('partials.footer')
    </footer>
</body>
</html>