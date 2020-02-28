<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    </head>
    <body class="font-open-sans">
        <div id="app">
            <div class="container px-8">
                <header class="py-6 mb-8">
                    <h1 class="font-bold text-4xl">
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>

                <main class="flex">
                    <!-- Side Bar -->
                    <aside class="w-1/5 pt-4">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4 text-md">The Brand</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link exact to="/">Logo</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/colors">Colors</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/typography">Typography</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-4 text-md">Doodles</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/mascot">Mascot</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/illustrations">Illustrations</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>
                        
                <hr>

                    <div class="primary flex-1">
                        <!-- Where the content of each component would go. Similar to yield in laravel  -->
                        <router-view></router-view>
                    </div>
                </main>

                {{-- <router-link :to="{ name: 'about'}">About</router-link> --}}
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
