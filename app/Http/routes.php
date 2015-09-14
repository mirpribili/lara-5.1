<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| http://laravel.com/docs/5.1/routing
*/

Route::get('/', ['as'=>'home', function () {return view('home');}]); //USES app/Http/Middleware/RedirectIfAuthenticated.php

// Authentication routes...
Route::get  ('auth/login',      'Auth\AuthController@getLogin');
Route::post ('auth/login',      'Auth\AuthController@postLogin');
Route::get  ('auth/logout',     'Auth\AuthController@getLogout');
