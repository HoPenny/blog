<?php

use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/', 'AuthController@me')->name('me');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
});

//路由加中介層方式
// Route::get('posts', 'App\Http\Controllers\Api\PostController@show')->middleware('auth');
// Route::apiResource('posts', 'App\Http\Controllers\Api\PostController')->middleware('auth');

Route::apiResource('posts', 'App\Http\Controllers\Api\PostController'); //自動生成對應5個function
Route::apiResource('photos', 'App\Http\Controllers\Api\PhotoController');

// Route::apiResources([
//     'posts' => 'PostController',
//     'photos' => 'PhotoController',
// ]);