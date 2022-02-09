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
    return view('menu');
});
Route::get('/sign-in', function () {
    return view('SignIn_Login.sign_in');
});
Route::get('/log-in', function () {
    return view('SignIn_Login.login');
});

Route::get('/user_login/login',[UserLoginController::class,'show_login']);
//-------------------------------------------------------------------------CREATE
Route::get('/wallet/all',[WalletController::class,'index']);
Route::get('/user/all',[UserController::class,'index']);
Route::get('/test_student/all',[TestStudentController::class,'index']);
Route::get('/test/all',[TestController::class,'index']);
Route::get('/role/all',[RoleController::class,'index']);
Route::get('/question/all',[QuestionController::class,'index']);
Route::get('/payment/all',[PaymentController::class,'index']);
Route::get('/major/all',[MajorController::class,'index']);
Route::get('/lesson/all',[LessonController::class,'index']);
Route::get('/buy_basket/all',[BuyBasketController::class,'index']);
Route::get('/balance/all',[BalanceController::class,'index']);

//-------------------------------------------------------------------------SHOW ALL
Route::get('/wallet/create', function () {return view('Wallet.create');});
Route::get('/user/create', function () {return view('User.create');});
Route::get('/test_student/create', function () {return view('TesSTudent.create');});
Route::get('/test/create', function () {return view('Test.create');});
Route::get('/role/create', function () {return view('Role.create');});
Route::get('/question/create', function () {return view('Question.create');});
Route::get('/payment/create', function () {return view('Payment.create');});
Route::get('/major/create', function () {return view('Major.create');});
Route::get('/lesson/create', function () {return view('Lesson.create');});
Route::get('/buy_basket/create', function () {return view('BuyBasket.create');});
Route::get('/balance/create', function () {return view('Balance.create');});



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