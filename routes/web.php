<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::prefix('teacher')->group(function(){
//     Route::get('/login', [App\Http\Auth\TeacherLoginController::class, 'ShowLoginForm'])->name('home');
//     Route::get('/login', [App\Http\Controllers\TeacherController::class, 'login'])->name('admin.login.submit');
//     Route::get('/ ', [App\Http\Controllers\TeacherController::class, 'index'])->name('admin.dashboard');
    
// });


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

