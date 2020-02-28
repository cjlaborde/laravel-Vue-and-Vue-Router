
### Skeleton
1. https://router.vuejs.org/
2. npm install
3. npm install vue-router
4. composer require laravel/ui --dev
5. php artisan ui vue
6. go to app.js and add vue routes
7. create routes.js file for routes.
8.  mode: 'history' how you want to record each new page change. Can also use hash url
9.  now create the routes we listening to inside routes: []
10. What component should be loaded for / home page? component: Home
11. Now for about page path: '/about',component: About
12. add Home.vue component
13. add About.vue component
14. Now import Home and About inside routes.js
15. import Home from './components/Home'
16. import About from './components/About'
17. in welcome.blade.php add <script src="{{ mix('js/app.js') }}"></script>
18. add <router-view></router-view> inside <div> id="app></div>
19. /about will not work so go to web.php
20. now say it will respond to anything or nothing
```php
Route::get('/{any?}', function () {
    return view('welcome');
});
```
21. now we want to link between pages in welcome.blade.php
```php
    <router-link to="/home">Home</router-link>
    <router-link to="/about">About</router-link>
```
22. works since in app.js we added router: new VueRouter(routes)
23. <router-link :to="{ name: 'about'}">About</router-link>
24. We need to name the route for it to work. in routes.js name: 'about'
25. But since we not building something big there is not much use of naming the routes.

### Building the layout
1. npm install tailwindcss --save-dev
2. npx tailwind init
3. install tailwing to app.scss file.
```css
@tailwind base;

@tailwind components;

@tailwind utilities;
```
4. https://github.com/JeffreyWay/laravel-mix-tailwind
5. npm install laravel-mix-tailwind --save-dev
6. In webpack.mix.js add `require('laravel-mix-tailwind');`
7. then add    .sass('resources/sass/app.scss', 'public/css').tailwind();
8. rename tailwind.config.js into tailwind.js
9. npm run dev
10. change in web.php return view('welcome'); to    return view('app'); 
11. rename welcome.blade.php to app.blade.php
12. <link rel="stylesheet" href="{{ mix('css/app.css') }}">
13. set container
14. set header
15. set main section
16. then 2 columns in that name section
17. go to app.blade.php
```html
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6">
                    <h1>Laracast</h1>
                </header>

                <main class="flex">
                    <!-- Side Bar -->
                    <aside class="w-1/5">
                        <ul>
                            <li><router-link to="/">Home</router-link></li>
                            <li><router-link to="/about">About</router-link></li>
                        </ul>
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
```
18. https://fonts.google.com/specimen/Open+Sans click on customize to add bold as well
19. <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 
20. You can change the size here from 700 ---> 600 to be less bold
21. finish styling app.blade.php with tailwind
22. go to Home.vue and style it.

### One Component Per Page
1. Create vue components for Each of the link.
2. Then add them to the routes
3. Change links in app.blade.php to match the links
4. Write unique title per component
5. rewrite class router
6. add bold for selected component in the route by rewrite the active-class="font-bold"
7. but the home route '/' is active no matter what to fix this add exact
8. `router-link active-class="font-bold" exact to="/">Logo</router-link>`
9. but you can also add the  active-class="font-bold" at the route level as well
10. Active class that is set to the active class in routes.js
```js
    export default {
    mode: 'history',

    linkActiveClass: 'font-bold',
    
    routes: [
```
### 404-Pages
1. Go to route.js and set route for anything that doesn't match
```js
    routes: [
        {
            path: '*',
            component: NotFound
        },
```
2. Then create the NotFound model and import it into routes.js
3. issue is `http://assets.test/colorssss/dfdfd` will not work because of the route.
4. So go to web.php and using regular expression set it so catch anything
```php
Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');

```
### Page Styling
1. if you zoom notice that is it center in middle but we assume is going to be left align instead.
2. so remove `<div class="container mx-auto">`   <div class="container"> to fix this issue.
3. style the Logo.vue component to add images and card boxes with shadow

### Lazy loading with Dynamic Imports
1. 