
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
25. But since we not building something big there is much us of naming the routes.
