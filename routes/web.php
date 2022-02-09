<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\BuyBasketController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestStudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Models\Payment;
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
Route::get('/sign-in', function () {
    return view('SignIn_Login.sign_in');
});
Route::get('/log-in', function () {
    return view('SignIn_Login.login');
});

Route::get('/user_login/login',[UserLoginController::class,'show_login']);


Route::resource('/wallet',WalletController::class);
Route::resource('/user',UserController::class);
Route::resource('/test_student',TestStudentController::class);
Route::resource('/test',TestController::class);
Route::resource('/role',RoleController::class);
Route::resource('/question',QuestionController::class);
Route::resource('/payment',PaymentController::class);
Route::resource('/major',MajorController::class);
Route::resource('/lesson',LessonController::class);
Route::resource('/buy_basket',BuyBasketController::class);
Route::resource('/balance',BalanceController::class);
Route::resource('/user_login',UserLoginController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');