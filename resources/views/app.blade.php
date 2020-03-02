@extends('layouts.app')

    @section('content')
            <div class="containor px-8">

                <header class="section py-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
                    <h1>
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-700 no-underline">
                            <img alt="Laracasts" src="/images/logo.svg">
                        </a>
                    </h1>
                </header>

                <main class="flex">
                    <!-- Side Bar -->
                    <aside class="w-64 pt-8">
                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-md">The Brand</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link exact to="/assets">Logo</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/colors">Colors</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/typography">Typography</router-link></li>
                            </ul>
                        </div>
                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-md">Doodles</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/mascot">Mascot</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/illustrations">Illustrations</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase font-bold mb-5 text-md">Stats</h5>
                            <ul>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/site-stats">Site Stats</router-link></li>
                                <li class="text-gray-800 hover:text-gray-900 text-sm pb-4"><router-link to="/assets/your-archievements">Your Archievements</router-link></li>
                            </ul>
                        </div>
                    </aside>
                        
                <hr>

                    <div class="primary flex-1">
                        <!-- Where the content of each component would go. Similar to yield in laravel  -->
                        <router-view></router-view>
                    </div>
                    {{-- <router-link :to="{ name: 'about'}">About</router-link> --}}
                </main>

            </div>
@endsection