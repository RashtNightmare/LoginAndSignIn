<?php

use App\Http\Controllers\PostController;
use App\Models\Personal_access_token;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
 Route::get('/post/create', function () {return view('Post.create');});
Route::get('/post/all',[PostController::class,'index']);
Route::get('/post/{id}/delete',[PostController::class,'destroy']);
Route::resource('/post',PostController::class);



Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/doRegister',"\App\Http\Controllers\UserController@doRegister");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
