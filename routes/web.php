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
//貼文畫面
Route::get('article', ['as' => 'article.index' , 'uses' => 'ArticleController@index']);
Route::get('BestArticle', ['as' => 'article.BestIndex' , 'uses' => 'ArticleController@BestIndex']);
Route::get('index/{id}', ['as' => 'article.small' , 'uses' => 'ArticleController@small']);


//新增貼文
Route::get('create', ['as' => 'article.create' , 'uses' => 'ArticleController@create']);
//Route::get('article', ['as' => 'article.store' , 'uses' => 'ArticleController@store']);




Route::get('user', ['as' => 'user.index' , 'uses' => 'UserController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/chose', ['as' => 'chose.index' , 'uses' => 'UserController@chose']);


//後台管理
Route::get('ArticleBack', ['as' => 'ArticleBack.index' , 'uses' => 'ArticleController@back']);
Route::get('UserBack', ['as' => 'UserBack.index' , 'uses' => 'UserController@back']);
Route::get('ResBack', ['as' => 'ResBack.index' , 'uses' => 'RestaurantController@back']);
Route::get('QuestionBack', ['as' => 'QuestionBack.index' , 'uses' => 'ProblemController@back']);

Route::delete('ArticleBack/{id}', ['as' => 'ArticleBack.destroy', 'uses' => 'ArticleController@destroy']);
Route::get('ArticleBack/check/{id}', ['as' => 'ArticleBack.check', 'uses' => 'ArticleController@check']);
Route::patch('ArticleBack/update/{id}', ['as' => 'ArticleBack.update', 'uses' => 'ArticleController@update']);