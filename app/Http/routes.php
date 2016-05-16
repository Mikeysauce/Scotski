<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@home');
Route::get('bookings',
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::get('home','HomeController@home');
Route::get('locations', 'HomeController@locations');
Route::get('penguinclub', 'HomeController@penguinclub');


Route::get('posts',
  ['as' => 'posts', 'uses' => 'PostsController@index']);
Route::post('posts/create','PostsController@store');
Route::post('posts/update','PostsController@update');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::controllers([
   'password' => 'Auth\PasswordController',
   'facilities' => 'facilitiesController'
]);
Route::get('{test}', function($test){
    return $test;
});