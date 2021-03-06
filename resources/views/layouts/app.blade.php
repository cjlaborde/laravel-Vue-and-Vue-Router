<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-open-sans">
    <div id="app">
        <nav class="bg-white shadow mb-8 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-700 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:text-gray-900 text-gray-700 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:text-gray-900 text-gray-700 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900 text-sm pr-4">
                                Generate Token
                            </a>
                            <span class="text-gray-700 text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                               class="no-underline hover:text-gray-900 text-gray-700 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
