<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/assets');
});

Route::get('/assets/{any?}', function () {
    return view('app');
})->where('any', '.*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::patch('/settings/access', 'AccessTokenController@update');



