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

/*-- Каталог --*/
Route::get('/','HomeController@index');
/*-- end -- */


/*-- Авторизация Регистрация --*/

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');

Route::get('/login','Auth\LoginController@getLogin')->name('login');
//Route::get('/home', 'HomeController@index')->name('home');

/*-- end --*/


Route::group(['namespace' => 'User'],function(){
    Route::get('user{user}','ProfileController@profile');
    Route::get('my','ProfileController@myProfile')->middleware('auth');
});


/*-- ADS --*/

Route::get('/new-ads', 'AdsController@viewCreate');

Route::post('/upload','TestController@uploadImg');

Route::get('catalog/{slug1}/{slug2?}','CatalogController@catalog')->name('catalog');

Route::get('{adsUrl}','AdsController@single')
        ->where('adsUrl', '(.*)')
        ->name('single');