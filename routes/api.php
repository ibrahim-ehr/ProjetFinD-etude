<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/articles','ArticleController@index');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::apiResource('articles','ArticleController');
Route::get('searcharticle/{query}','ArticleController@searchArticles');
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'UserController@details');
    Route::post('comment/create', 'CommentController@store');
});
