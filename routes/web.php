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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('login', ['uses' => 'loginController@showLogin', 'as' => 'login']);
Route::post('login', ['uses' => 'loginController@login']);

Route::get('reg', ['uses' => 'loginController@showReg']);
Route::post('reg', ['uses' => 'loginController@reg']);

Route::group(['middleware' => ['auth', 'web']], function () {
    Route::get('/', ['uses' => 'indexController@showIndex']);

    Route::post('money', ['uses' => 'carController@money']);

    Route::post('leave', ['uses' => 'carController@leaveCar']);
    Route::get('take', ['uses' => 'carController@takeCar']);

    Route::get('exit', ['uses' => 'loginController@exit']);
});