<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- for Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">     <!-- for Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

    </style>
</head>

<body>
    <header class='pt-10 pb-10 bg-gradient-to-l from-green-900 to-indigo-200'>
        <div class='container mx-auto'>
            <nav class='flex justify-between mx-16'>
                <a>
                    <img src='{{ asset('images/logo.jpg') }}'>
                </a>
                <div>
                    <a href='#' class='ml-4 text-indigo-300 font-bold hover:text-green-200'>Accueil</a>
                    <a href='#todo' class='ml-4 text-white font-bold hover:text-green-200'>Cursus</a>
                    <a href='#todo' class='ml-4 text-white font-bold hover:text-green-200'>Réalisations</a>
                    <a href='#' class='ml-4 text-white font-bold hover:text-green-200'>Contact</a>
                </div>
            </nav>
            <div class='mt-28 flex items-center mx-10'>
                <div>
                   <img src='{{ asset('images/mobile.svg') }}'>
                </div>
                <div>
                    <h1 class='text-2xl text-white font-bold'>✨ Hello, je suis Da Sié Roger.</h1>
                    <h2 class='text-5xl text-green-900 font-bold mb-2'>Développeur & Formateur</h2>
                    <p class='text-sm md:text-base text-white text-justify'>
                        Je suis un jeune dynamique, passionné par le developpement d'application web & mobile ainsi que
                        de nouvelles technologies.
                    </p>
                    <div class='mt-10 flex'>
                        <a href='#'
                            class='bg-transparent hover:bg-green-900 text-white font-bold hover:text-white py-4 px-6 border border-green-900 hover:border-transparent rounded'>
                            Telecharger mon cv
                        </a>
                        <a href='#'
                        class='bg-transparent hover:bg-green-500 text-white font-bold hover:text-white py-4 px-6 border border-green-900 hover:border-transparent rounded mx-2'>
                        Mon github
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class='pt-10 pb-10'>
        <div class='container mx-auto'>
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl mb-6">Mon cursus
                </h2>
            </div>
            <div id='todo' class="flex justify-center mx-36">
                <ul role="list" class="-mb-8">
                    <li class='items-center'>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-8  -ml-px h-full w-1 bg-green-200"
                                aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                              <div class="relative border-2 border-blue-500 rounded-full px-2 py-2">
                                <img class="h-12 w-11 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                    src="{{ asset('images/cursus.png') }}" alt="">
                              </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-bold text-gray-900">LICENSE PROFESSIONNELLE</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">2018-2021</p>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Memoire en Methode Informatique Appliquée a la Gestion des entreprises a l'Université Polytechnique de Bingerville. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='items-center'>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-8  -ml-px h-full w-1 bg-green-200"
                                aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                              <div class="relative border-2 border-green-500 rounded-full px-2 py-2">
                                <img class="h-12 w-11 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                    src="{{ asset('images/cursus.png') }}" alt="">
                               </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-bold text-gray-900">BACCALAUREAT</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">2015-2018</p>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>J'ai obtenue en 2018 au Lycée Classque d'Abidjan le BAC D avec une mention assez bien.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='items-center'>
                        <div class="relative pb-8">
                            
                            <div class="relative flex items-start space-x-3">
                                <div class="relative border-2 border-orange-500 rounded-full px-2 py-2">
                                    <img class="h-12 w-11 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                        src="{{ asset('images/cursus.png') }}" alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-bold text-gray-900">BREVET D'ETUDE DE PREMIER CYCLE</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">2012-2015</p>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>J'obtiens le BEPC en 2015 au Lycée Moderne de Koumassi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class='container mx-auto'>
        <div>
            <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                <div class="absolute inset-0">
                    <div class="bg-white h-1/3 sm:h-2/3"></div>
                </div>
                <div class="relative max-w-7xl mx-auto">
                    <div class="text-center">
                        <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Mes Réalisations
                        </h2>
                    </div>
                    <div class="mt-12 max-w-sm mx-auto grid gap-3 lg:grid-cols-3 lg:max-w-none mx-24">
                        <div class="flex flex-col border border-gray-200 shadow-md rounded-t-xl overflow-hidden transform transition duration-600 hover:scale-y-125">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="{{ asset('images/project.png') }}" alt="">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline">UAI DEVOPS SITE</a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col border border-gray-200 shadow-md rounded-t-xl overflow-hidden transform transition duration-600 hover:scale-y-125">
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline"> Article </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                                    alt="">
                            </div>

                        </div>
                        <div class="flex flex-col border border-gray-200 shadow-md rounded-t-xl overflow-hidden transform transition duration-600 hover:scale-y-125">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="{{ asset('images/project-2.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline"> Article </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class='bg-green-50 py-10'>
        <div class='container mx-auto'>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl mb-6 text-center">Ce que disent
                mes
                collaborateurs
            </h2>
            <div class='flex mx-24'>
                <div class='w-1/3 px-4'>
                    <div class='bg-green-500 py-24 rounded-xl flex flex-col items-center'>
                        <img class='rounded-full w-24 h-24 mb-4' src='{{ asset('images/avatar.png') }}'>
                        <span class='font-bold text-xl'>John Doe</span>
                        <span class='font-semibold'>Collaborateur</span>
                        <p class='text-center px-10 mt-4 leading-8 text-white font-bold'>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Rerum ea amet minima debitis ipsam?
                        </p>
                    </div>
                </div>
                <div class='w-1/3 px-4'>
                    <div class='bg-green-500 py-24 rounded-xl flex flex-col items-center'>
                        <img class='rounded-full w-24 h-24 mb-4' src='{{ asset('images/avatar.png') }}'>
                        <span class='font-bold text-xl'>John Doe</span>
                        <span class='font-semibold'>Collaborateur</span>
                        <p class='text-center px-10 mt-4 leading-8 text-white font-bold'>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Rerum ea amet minima debitis ipsam?
                           
                        </p>
                    </div>
                </div>
                <div class='w-1/3 px-4'>
                    <div class='bg-green-500 py-24 rounded-xl flex flex-col items-center'>
                        <img class='rounded-full w-24 h-24 mb-4' src='{{ asset('images/avatar.png') }}'>
                        <span class='font-bold text-xl'>John Doe</span>
                        <span class='font-semibold'>Collaborateur</span>
                        <p class='text-center px-10 mt-4 leading-8 text-white font-bold'> Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Rerum ea amet minima debitis ipsam?
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('partials.footer')
</body>

</html>
