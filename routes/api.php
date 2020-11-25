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
Route::prefix('auth')->group(function () {
    Route::post('signup', 'App\Http\Controllers\AuthController@signup');
    Route::post('login', 'App\Http\Controllers\AuthController@login');
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('tasks', 'App\Http\Controllers\TaskController');
});

Route::prefix('no-authenticated')->group(function () {
    Route::apiResource('tasks', 'App\Http\Controllers\TaskController');
});
