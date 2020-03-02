
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


### Add all svg Images needed in public/images Folder

### Build the Vue Modules
1.  npm install --save lottie-web
2.  work on LeadersAndAnimations component
3.  work on Mascot.vue component
4.  work on Typography.vue component

### Lazy Loading With Dynamic Imports
1. go to import LoadersAndAnimations from './components/LoadersAndAnimations'
2. register it as an async vue component instead
3. These are components that can resolve and render themselves on the fly
4. let LoadersAndAnimations = () => import('./components/LoadersAndAnimations'); 
5. we also adding import function to declare a dynamic import function
6. This was this import only when you actually need it.
7. npm install @babel/plugin-syntax-dynamic-import
8. create .babelrc file and notice 
```js
{
    "plugins": ["@babel/plugin-syntax-dynamic-import"]
}
```
9. Now you will find splited files
```js
       Asset      Size   Chunks             Chunk Names
/css/app.css  1.04 MiB  /js/app  [emitted]  /js/app
  /js/app.js  1.55 MiB  /js/app  [emitted]  /js/app
        0.js  9.52 KiB        0  [emitted]  
        1.js   535 KiB        1  [emitted]  
```
10. Now in app.js you will find no reference to that library lottiejs
11. you will find lottiejs in 0.js and 1.js
12. test it by opening chrome dev tools then going to network tab and clicking disable cache and then JS tab
13. Then reload page keep moving tabs till you click Loaders and Animation tab and notice 0.js and 1.js loading up
14. That way there is no need to pull in an entire animation library if they never visiting the animation tab
15. Now you getting 0.js and 1.js which is generic but you can actually give them custom name
16. go to routes.js and add the name loaders to get loader.js instead
```js
let LoadersAndAnimations = () => import(/* webpackChunkName: "loaders" */ './components/LoadersAndAnimations');
```
17. now delete 0.js and 1.js
18. now you will have the configuration in loaders.js and the libraries in vendors~loaders.js

### CORS
1. create new menu for Stats-> Site stats in app.blade.php
2. create new module named SiteStatus.vue
3. We will get data with ajax request to different domain
4. Now go to routes/api.php and write api route
```php
{
   series: 200,
   lessons: 1300
}
```
5. then go to SiteStats.vue and add function that gets called when you load page.

```js
    created() {
        axios.get('http://assets.test/api/stats').then(console.log);
    }
 ```

 6. Go to the page and see the data there
 ```js
Object
   data:
   series: 200
   lessons: 1300
   __proto__: Object
```
7. delete boostrap.js
8. then add the needed boostrap.js content inside app.js
```js
import Vue from 'vue';
import VueRouter from 'vue-router'
import routes from './routes';
import axios from'axios';

// assign axios globally
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
```
9. there will be error if you try to access data from another server so
10. php artisan make:middleware Cors
```php
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', 'http://assets.test')
            ->header('Access-Control-Allow-Headers', 'X-REQUESTED-WITH');
    }
```
11. you need to register go to Http/Kernel.php and register the middleware Cors there
12. ` \App\Http\Middleware\Cors::class,`
13. now display the api data
```js

    created() {
        // axios.get('http://assets.test/api/stats').then(console.log);
        axios.get('http://assets.test/api/stats').then(response => {
            this.series = response.data.series;
            this.lessons = response.data.lessons;
        });
    }
```
14. or grab data directly
```js
    created() {
        // axios.get('http://assets.test/api/stats').then(console.log);
        axios.get('http://assets.test/api/stats').then(response => {
            let {data } = response;

            this.series = response.data.series;
             this.lessons = response.data.lessons;
        });
    }
```
15. Even through when communicating with server like github api it will already have the headers already setup for you.
16. Alternative versions to rewrite created() but can be confusing with too many parentensies
```js
    created() {
        axios.get('http://assets.test/api/stats').then(({ data }) => {
            this.series = response.data.series;
            this.lessons = response.data.lessons;
        });
    }
```
17. another way stack our event calls
```js
    created() {
        axios
            .get('http://assets.test/api/stats')
            .then(response => response.data)
            .then(data => {
                this.series = data.series;
                this.lessons = data.lessons;
            })            
        });
    }
```

### Token Based API Authentication to get more sensitive data from server
1. Add menu for Your Archievements in app.blade.php
2. Then create vue component named Archievements
3. Add Archievements to routes.js
4. Then fill the modal so it can get data from laravel
```js
   <template>
    <div class="container">
        <h1 class="font-normal text-3xl text-gray-800 leading-none mb-8">
            Your Archievements
        </h1>

        <ul>
            <li
                v-for="archievement in archievements"
                v-text="archievement.name"
            >
            </li>
        </ul>

    </div>
</template>

<script>
export default {
    data() {
        return { archievements: [] }
    },

    created() {
        axios.get('http://assets.test/api/archievements')
             .then(response => {
                 this.archievements = response.data;
             })
    }
};
</script>

```
5. Then add the route to the routes/api.php

```php
   Route::get('archievements', function() {
       $user = User::whereUsername('John')->first();

       return $user->archievements;
   });
```
6. Create database and migrate
7. You will get error so you have to create archievements modal and migration
8. `php artisan make:model Archievement -m`
9. On archievement migration add to table the one to many connection >https://www.itsolutionstuff.com/post/laravel-one-to-many-eloquent-relationship-tutorialexample.html
```js
   $table->integer('user_id')->unsigned();
   $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
```
10. then in User.php
```php
    public function archievements()
    {
        return $this->hasMany(Archievement::class);
    }
```
11. In Archievement.php
```php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
```
12. php artisan migration
13. Generate some auth
14. composer require laravel-frontend-presets/tailwindcss --dev
15. php artisan preset tailwindcss-auth
16. put app.scss code into the new app.css in resources
17. fill the database with archievements
```php

Route::get('archievements', function() {
    $user = User::whereName('John')->first();

    return $user->archievements;
});

```
18. $user = User::whereName('John')->first(); means look in the User table where column name = John
19. now visit http://assets.test/your-archievements to see the archievements rendered on page.
20. Now we can see them all but we want it so that only the auth user can read see them only.
21. You can read your archievements but you can't see another user archievements.
22. config/auth as you can see you can auth as a user using a token
```php

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

```
23. Basically when you make an ajax request you will include your api token
24. this driver will validate it with what stored in the database
25. php artisan make:migration add_api_token_to_users_table --table=users
26. add new column field token in users table after password that is unique but not neccessary.
```php
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            # you can put limit of 80 for the ramdom string generated
            $table->string('api_token', 80)
                  ->after('password')
                  ->unique()
                  ->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('api_token');  
        });
    }
}
```
27. php artisan migrate
28. lets generate the token with tinker
29. $user = App\User::whereName('John')->first();
30. Then fill the api_token with string random (Will not work in laravel 6 use Str::random instead)
31. $user->fill(['api_token' => Str::random(60)])->save();
32. Did not work either!!! so instead the helpers 
33. composer require laravel/helpers
34. tinker
35. $user = App\User::whereName('John')->first();
36. didn't work so added it manually
37. N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj add token to the Archievements.vue
38. axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj')
39.  Will perform a cros Ajax request while passing the token
40.  Now go to APi routes and apply the auth:api middleware
```php
Route::get('archievements', function() {
    return 'it works!'; # to test if it works
    $user = User::whereName('John')->first();

    return $user->archievements;
})->middleware('auth:api');
```
41. 'auth' means you need to be authenticated to assess the route. But this needs to be stateless so we use 'auth:api' authentication.
42. we will use token tracker for authentication go to as declared in the config/auth.php file.
```JS

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
```
43. Then check web dev tools Network > XHR on http://assets.test/archievements
44. Now try to change token to see error.
45. axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIjQQQQQQ')
46. You get unauthorized and laravel rejects the request since API key invalid
47. since you signed in the just get auth() user associated with the request
```php
Route::get('archievements', function() {
    return 'it works!';
    // $user = User::whereName('John')->first();
    $user = request()->user();

    return $user->archievements;
})->middleware('auth:api');
```
48. then you can inline refactor the code
```php
Route::get('archievements', function() {
    return request()->user()->archievements;
})->middleware('auth:api');
```
48. now fix the api key again
49. axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj')
50. we need to call axios request after token has been populated
51. so use methods() and create method fetchArchievements() inside instead of using created
52. use @keyup so that when they press enter key it will call fetchArchievements()
53. then make ajax request, if everything done correctly once we update response.data we update the achievements [] array
54. So it will rerender the list.
55. So you use N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj code in input and will render the lists of achievements
56. this is similar to other services where you use API key like google maps.
57. Lets create new user with tinker and factory
58.  factory('App\User')->create();
59.  then make new token 18fgoi6hRLkcEXSvWXV0Z2QKiU3SMRNR4nrnZSU2a8wDvlcV8JSTscUMwMlr with Str::random(60);
60.  We don't get feedback when we enter wrong code so lets fix that.
```js
            fetchAchievements() {
                // axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj')
                axios.get(
                    `http://assets.test/api/archievements?api_token=${
                        this.token
                        }`
                    )
                    .catch(error => {
                        // console.log(error.response);
                         this.message = error.response.data.error;
                    })
                     .then(({ data }) => (this.archievements = data));
        }
```
61. As you can see you can also catch error then go to browser put wrong api token and then check console for data:--->message: "Unauthenticated."
62. That is how we find ` this.message = error.response.data.message;`
63. then if you have error message spill it out         <p class="text-red-500 italic text-sm" v-if="message" v-text="message"></p>
64. now if we try correct code we still see error message we got to fix that.
```js
        methods: {
            fetchAchievements() {
                // axios.get('http://assets.test/api/archievements?api_token=N0ibsB1CmktdkA7vof9a3LCPB3IQr2zRAOCbh6OeZbU12Yj0y7XIfcAG7qIj')
                axios.get(
                    `http://assets.test/api/archievements?api_token=${
                        this.token
                        }`
                    )
                    .catch(error => {
                        // console.log(error.response);
                        this.message = error.response.data.message;
                        this.archievements = [];
                    })
                     .then(({ data }) => {
                         this.archievements = data;
                         this.message = null;
            });
        }
```
65. This works great as well when the API has the API key saved and check if it match up with the one you have.

### Hashed API Tokens
1. go to the api app then go to config/auth.php
```php
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],
```
2. auth:api this means I want the auth middleware using the API guard (from config/auth.php you can see both guard and api) no the web guard that you normally use
```php
   Route::get('archievements', function() {
       return request()->user()->archievements;
   })->middleware('auth:api');
```
3. notice from above we want a token driver then we see hash set to false
4. what will happen behind scenes is laravel will try to create a token driver it intiantiate class called TokenGuard
5. TokenGuard is the class that validate the request and gets the associated user
6. Then checks if we should hash it
7. Then use that credential to find the associated user from database
8. that means that if we want validation to first hash the token set it to true  'hash' => true,
9.  Now we need to give user ability to generate token or refresh token
10. tinker
11. $token = Str::random(60);
12. 37tpOIyjPiGPujUq28xH2UUjbuPfqB7H41B2nJVh2aF6MXiAE8sCyfAAfddV
13. $htoken = hash('sha256', $token);
14. f9fbcb880cbd8e56ea6b70cdb217cd6f139893a1cde05f0501c7553ba3f7babe
15. $me = App\User::first();
16. $me->api_token
17. $me->api_token = $htoken
18. $me->save();
19. $me->api_token
20. this is hashed api_token saved in database 
21. "f9fbcb880cbd8e56ea6b70cdb217cd6f139893a1cde05f0501c7553ba3f7babe"
22. But real api_token is
23. 37tpOIyjPiGPujUq28xH2UUjbuPfqB7H41B2nJVh2aF6MXiAE8sCyfAAfddV
24. because we turned on the 'hash' => true

### Generating New Tokens
1. php artisan make:controller AccessToken  
2. Go to AccessTokenController.php
3. create method for show() and update()
4. create web.php routes
5. now we want to show token to user
6. also tell them to write it down since the token will dissapear
7. So you say here your unhashed password we not keeping it so store it. in a session message
8. return back()->with('session', 'We have generated a new token for you. You will only see this once, so please store it somewhere safe: ' . $token);
9. and in the form
```php
  @if (session('message'))
      <p class="text-gray-400 mt-6">{{ session('message') }}</p>
  @endif
```
10. fix issue with routes in web.php and routes.js
11. fixed home.blade.php to align message properly centered on top of each other
12. added navbar menu item for generating token