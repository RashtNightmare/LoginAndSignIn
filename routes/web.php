<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\SignInController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('menu_new');
});
//------------------------------------------------1
Route::get('/user-sign/create',function(){
    return view('SignIn.sign_in');
});
Route::get('/user-login/page',function(){
    return view('Login.login');
});
Route::get('/user-sign', 'SignInController@index');
Route::get('/user-sign/{user_sign}/edit', 'SignInController@edit');

Route::get('/user-login', 'UserLoginController@index');
Route::get('/user-login/{user_login}/edit', 'UserLoginController@edit');
//------------------------------------------------
Route::resource('/user-sign',SignInController::class);
Route::resource('/user-login',UserLoginController::class);
//Route::post('/user-sign',[App\Http\Controllers\SignInController::class,'store']);
//------------------------------------------------
Route::get('user-sign', 'App\Http\Controllers\SignInController@index');
Route::get('user-login', 'App\Http\Controllers\UserLoginController@index');
// Route::get('user-login', 'App\Http\Controllers\LoginController@index');
// Route::get('user-login/{user_login}/edit', 'App\Http\Controllers\LoginController@edit');
Route::get('user-sign/{user_sign}/edit', 'App\Http\Controllers\SignInController@edit');
Route::get('user-login/{user_login}/edit', 'App\Http\Controllers\UserLoginController@edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//----------------------------------------------------------------------------------------------------------------

// Route::get('/log-in', function () {
//     return view('Login.login');
// });
// Route::get('/sign-in', function () {
//     return view('SignIn.sign_in');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('user-sign', 'App\Http\Controllers\SignInController');

// Route::get('/all/all',[SignInController::class,'index']);


// Route::get('/user-sign/create',function(){
//     return view('SignIn.sign_in');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
