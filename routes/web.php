<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return Auth::check() ? view('home') : view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/facebook', 'Social\FacebookController@index');
Route::get('/facebook/callback', 'Social\FacebookController@callback');

Route::get('/instagram', 'Social\InstagramController@index');
Route::get('/instagram/callback', 'Social\InstagramController@callback');

Route::get('/pocket', 'Social\PocketController@index');
Route::get('/pocket/callback', 'Social\PocketController@callback');

Route::get('/pinterest', 'Social\PinterestController@index');
Route::get('/pinterest/callback', 'Social\PinterestController@callback');