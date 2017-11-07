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

Route::get('/','HomeController@index');
Route::get('catalog/{category}','CatalogController@catalog')
        ->where('category','^[a-zA-Z0-9-_\/]+$');
//Auth::routes();

Route::get('/logout','Auth\LoginController@logout');

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('user{user}','UserController@profile');

Route::group(['middleware' => 'auth'], function(){

    Route::get('my','UserController@myProfile');

    Route::get('avto','HomeController@index');
});
