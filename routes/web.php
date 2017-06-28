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
Route::get('/membres','Member\IndexController@index');
Route::get('/membres/profil/','Member\ProfilController@index');
Route::get('/membres/activation/{code}','Member\RegisterController@activation');

Route::get('membres/articles/{slug}','PostController@show');
Route::get('membres/articles','PostController@index');
Route::get('membres/articles/ajouter','PostController@create');
Route::post('membres/articles/ajouter','PostController@store');
// edit post form
Route::get('membres/modifier/{slug}','PostController@edit');
// update post
Route::post('membres/update','PostController@update');
// delete post
Route::get('membres/delete/{id}','PostController@destroy');
// display user's all posts
Route::get('membres/mes-articles','UserController@user_posts_all');
// display user's drafts
Route::get('membres/brouillons','UserController@user_posts_draft');
// add comment
Route::post('membres/commentaire/ajouter','CommentController@store');
// delete comment
Route::post('membres/commentaire/delete/{id}','CommentController@distroy');

// add comment
Route::post('articles/commentaire/ajouter','CommentController@store');

Route::get('articles','Extra\PostController@index');
Route::get('articles/{slug}','Extra\PostController@show');
