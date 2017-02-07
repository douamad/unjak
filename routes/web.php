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

Route::get('/', 'Accueil\IndexController@index');
Route::get('/login','Member\LoginController@login');
Route::get('/logout','Member\LoginController@login');
Route::post('/login','Member\LoginController@loggingin');
Route::get('/inscription','Member\RegisterController@register');
Route::post('/inscription','Member\RegisterController@save');