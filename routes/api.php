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
Route::group(['namespace' => 'Api'], function () {
   Route::resource('user', 'UserController');
});
Route::group(['namespace' => 'Api'], function () {
   Route::resource('perjanjian', 'PerjanjianController');
});
Route::group(['namespace' => 'Api'], function () {
   Route::resource('forum', 'ForumController');
});
Route::group(['namespace' => 'Api'], function () {
   Route::resource('comment', 'CommentController');
});
Route::model('user', User::class);
Route::model('perjanjian', Perjanjian::class);
Route::model('forum', Forum::class);
Route::model('comment', Comment::class);
