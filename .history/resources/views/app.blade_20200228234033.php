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
            <div class="containor px-8">

                <header class="section py-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
                    <h1>
                        <router-link to="/">
                            <img alt="Laracasts" src="/images/logo.svg">
                        </router-link>
                    </h1>
                </header>

                <main class="flex">
                    <!-- Side Bar -->
                    <aside class="w-64 pt-8">
                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-md">The Brand</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link exact to="/">Logo</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/colors">Colors</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/typography">Typography</router-link></li>
                            </ul>
                        </div>
                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-md">Doodles</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/mascot">Mascot</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/illustrations">Illustrations</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase font-bold mb-5 text-md">Stats</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/site-stats">Site Stats</router-link></li>
                            </ul>
                        </div>
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
