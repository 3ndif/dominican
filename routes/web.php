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
Route::get('catalog','HomeController@catalog');
//Auth::routes();

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/register-complete', 'Auth\RegisterController@registerComplete');
Route::get('/home', 'HomeController@index')->name('home');
