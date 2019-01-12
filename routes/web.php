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
    return view('welcome');
});

Route::get('article', ['as' => 'article.index' , 'uses' => 'ArticleController@index']);

Route::get('user', ['as' => 'user.index' , 'uses' => 'UserController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

