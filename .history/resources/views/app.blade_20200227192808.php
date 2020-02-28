<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body class="font-open-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6">
                    <h1>Laracast</h1>
                </header>

                <main class="flex">
                    <!-- Side Bar -->
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5>The Brand</h5>
                            <ul>
                                <li><router-link to="/">Home</router-link></li>
                                <li><router-link to="/about">About</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5>Doodles</h5>
                            <ul>
                                <li><router-link to="/">Home</router-link></li>
                                <li><router-link to="/about">About</router-link></li>
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
