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

/*

Route::get('/', function () {
    return view('auth.login');
});

*/


Route::get('/', 'HomeController@retour');


Route::get('deconnexion','creerUsersController@deconnecter')->name('deconnexion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('formeleve','EleveController@index')->name('formeleve');
Route::get('insereleve','EleveController@create')->name('insereleve');
