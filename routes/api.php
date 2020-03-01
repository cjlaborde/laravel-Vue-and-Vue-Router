<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('stats', function() {
    return [
        'series' => 200,
        'lessons' => 1300
    ];
});

Route::get('archievements', function() {
    return request()->user()->archievements;
})->middleware('auth:api');


// Route::get('archievements', function() {
//     return 'it works!';
//     // $user = User::whereName('John')->first();
//     $user = request()->user(); 

//     return $user->archievements;
// })->middleware('auth:api');
