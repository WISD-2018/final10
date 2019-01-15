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
//貼文主畫面
Route::get('article', ['as' => 'article.index' , 'uses' => 'ArticleController@index']);
Route::get('BestArticle', ['as' => 'article.BestIndex' , 'uses' => 'ArticleController@BestIndex']);
Route::get('index/{id}', ['as' => 'article.small' , 'uses' => 'ArticleController@small']);

//餐廳
Route::get('restaurant', ['as' => 'restaurant.index' , 'uses' => 'RestaurantController@index']);


//按讚
Route::post('index/{id}', ['as' => 'praise.click' , 'uses' => 'PraiseController@click']);
Route::post('index2/{id}', ['as' => 'praise.click2' , 'uses' => 'PraiseController@click2']);
//檢舉
Route::patch('article/update/{id}', ['as' => 'article.report', 'uses' => 'ArticleController@report']);
//新增貼文
Route::get('create', ['as' => 'article.create' , 'uses' => 'ArticleController@create']);
Route::post('article', ['as' => 'article.store' , 'uses' => 'ArticleController@store']);
//使用者
Route::delete('user/{id}', ['as' => 'article.destroys', 'uses' => 'ArticleController@destroys']);
Route::get('users/{id}/edit', ['as' => 'article.edit'  , 'uses' => 'ArticleController@edit']);
Route::patch('users/update/{id}', ['as' => 'article.updates', 'uses' => 'ArticleController@updates']);
//使用者個人貼文詳細
Route::get('user/index/{id}', ['as' => 'user.main.index' , 'uses' => 'ArticleController@UserSmall']);



Route::post('index'        , ['as' => 'message.store'   , 'uses' => 'MessageController@store']);
Route::delete('index/{id}'  , ['as' => 'message.destroys', 'uses' => 'MessageController@destroy']);

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


Route::patch('UserBack/{id}', ['as' => 'UserBack.update' , 'uses' => 'UserController@update']);
Route::delete('UserBack/{id}', ['as' => 'UserBack.destroy' , 'uses' => 'UserController@destroy']);


Route::delete('ResBack/{id}', ['as' => 'ResBack.destroy' , 'uses' => 'RestaurantController@destroy']);