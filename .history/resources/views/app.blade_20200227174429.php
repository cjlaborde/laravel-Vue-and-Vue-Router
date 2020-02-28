<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="container mx-auto">
                <header>
                    <h1>Laracast</h1>
                </header>

                <main>
                    <!-- Side Bar -->
                    <aside>
                        <router-link to="/">Home</router-link>
                        <router-link to="/about">About</router-link>
                    </aside>

                    <div class="primary">
                        <!-- Where the content of each component would go. Similar to yield in laravel  -->
                        <router-view></router-view>
                    </div>
                </main>
    
                <hr>

                {{-- <router-link :to="{ name: 'about'}">About</router-link> --}}
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
