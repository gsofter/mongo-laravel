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

// Route::get('/', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/logout', 'ArticleController@logout');
Route::get('/', 'ArticleController@index')->name("home");
Route::get('/view_article', 'ArticleController@view_article')->name("article.view");
Route::get('/add_article', 'ArticleController@add_article')->name("article.add");
Route::post('/save_article', 'ArticleController@save_article')->name("article.save");
Route::get('/destroy/{id}', 'ArticleController@destroy')->name("article.destroy");

Route::get('/edit/{id}', 'ArticleController@edit')->name("article.edit");
Route::post('/update/{id}', 'ArticleController@update')->name("article.update");

