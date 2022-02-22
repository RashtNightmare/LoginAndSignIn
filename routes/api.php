<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\Auth\RegisterController;

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
Route::post('login',[App\Http\Controllers\Api\Auth\LoginController::class, 'login']);
Route::post('register',[App\Http\Controllers\Api\Auth\RegisterController::class, 'register']);
Route::post('refresh',[App\Http\Controllers\Api\Auth\LoginController::class, 'refresh']);


Route::middleware('auth:api')->get('/logout',function () {
      Route::post('logout',[App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);
});

Route::get('posts',[App\Http\Controllers\Api\PostController::class, 'index']);
