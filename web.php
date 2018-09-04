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

	App::setlocale('es');

    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('sistema/dashboard', 'HomeController@sistema')->name('admin');

Route::middleware(['lang'])->group(function () {


	Route::post('/language', 'LanguageController@index')->name('language');


});


