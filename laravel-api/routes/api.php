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

Route::get('/home-auth', 'HomeController@index')->middleware('auth:api');

Route::get('/home', 'HomeController@index')->middleware('api');

//Groups API versioned - Use the prefix to access the route - Ex.: localhost:8000/api/v1/test

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {

    Route::get('/test', 'HomeController@index1');
});

Route::group(['prefix' => 'v2', 'middleware' => 'api'], function () {

    Route::get('/test', 'HomeController@index2');
});

Route::group(['prefix' => 'v3', 'middleware' => 'api'], function () {

    Route::get('/test', 'HomeController@index3');
});
