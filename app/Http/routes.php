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
get('/',                ['as'=>'home',           'uses'=>'IndexController@index']); //USES app/Http/Middleware/RedirectIfAuthenticated.php
get('projects',         ['as'=>'projectList',    'uses'=>'IndexController@projectList']);
get('projects/{slug}',  ['as'=>'projectCart',    'uses'=>'IndexController@projectCart']);


get('blog',         ['as'=>'blog',          'uses'=>'BlogController@index']);
get('blog/{slug}',  ['as'=>'blog.record',   'uses'=>'BlogController@cart']);

get('press',         ['as'=>'press',        'uses'=>'PressController@index']);
get('press/{slug}',  ['as'=>'press.new',    'uses'=>'PressController@show']);

get('about',  ['as'=>'about',    'uses'=>'IndexController@about']);

// Authentication routes...
Route::get  ('auth/login',      'Auth\AuthController@getLogin');
Route::post ('auth/login',      'Auth\AuthController@postLogin');
Route::get  ('auth/logout',     'Auth\AuthController@getLogout');

Route::group(['middleware' => 'auth'], function() {
    get('lk',               ['as' => 'lk.index', 'uses' => 'LkController@index']);
    get('addInterview',     ['as' => 'addInterview',    'uses' => 'InterviewController@create']);
    get('myInterview',      ['as' => 'myInterview',     'uses' => 'InterviewController@index']);
    get('addInterview/{id}',['as' => 'edithInterview',  'uses' => 'InterviewController@edit'])->where('id', '[0-9]+');
    post('storeInterview',  ['as' => 'storeInterview',  'uses' => 'InterviewController@store']);

});
Route::group(['middleware' => 'users.updateInterview.self'], function() {
});


