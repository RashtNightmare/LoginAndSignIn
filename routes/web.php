<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\BuyBasketController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestStudentController;

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

Route::get('/', function () {
    return view('welcome');
});


//------------------------------------------------Morphic Relation 1
Route::get('/photo/create',function(){
    return view('Photo.create');
});
Route::get('/photo/all',[PhotoController::class,'index']);
//------------------------------------------------Morphic Relation 2
Route::get('/video/create',function(){
    return view('Video.create');
});
Route::get('/video/all',[VideoController::class,'index']);

//-------------------------------------------------------------------------CREATE
Route::get('/wallet/all',[WalletController::class,'index']);
Route::get('/test_student/all',[TestStudentController::class,'index']);
Route::get('/test/all',[TestController::class,'index']);
Route::get('/user_role/all',[UserRoleController::class,'index']);
Route::get('/question/all',[QuestionController::class,'index']);
Route::get('/payment/all',[PaymentController::class,'index']);
Route::get('/major/all',[MajorController::class,'index']);
Route::get('/lesson/all',[LessonController::class,'index']);
Route::get('/buy_basket/all',[BuyBasketController::class,'index']);
Route::get('/balance/all',[BalanceController::class,'index']);

//-------------------------------------------------------------------------ALL
Route::get('/wallet/create', function () {return view('Wallet.create');});
Route::get('/test_student/create', function () {return view('TesSTudent.create');});
Route::get('/test/create', function () {return view('Test.create');});
Route::get('/user_role/create', function () {return view('UserRole.create');});
Route::get('/question/create', function () {return view('Question.create');});
Route::get('/payment/create', function () {return view('Payment.create');});
Route::get('/major/create', function () {return view('Major.create');});
Route::get('/lesson/create', function () {return view('Lesson.create');});
Route::get('/buy_basket/create', function () {return view('BuyBasket.create');});
Route::get('/balance/create', function () {return view('Balance.create');});

//-------------------------------------------------------------------------DESTROY
Route::get('/video/{id}/delete',[VideoController::class,'destroy']);
Route::get('/photo/{id}/delete',[PhotoController::class,'destroy']);

Route::get('/wallet/{id}/delete',[WalletController::class,'destroy']);
Route::get('/test_student/{id}/delete',[TestStudentController::class,'destroy']);
Route::get('/test/{id}/delete',[TestController::class,'destroy']);
Route::get('/user_role/{id}/delete',[UserRoleController::class,'destroy']);
Route::get('/question/{id}/delete',[QuestionController::class,'destroy']);
Route::get('/payment/{id}/delete',[PaymentController::class,'destroy']);
Route::get('/major/{id}/delete',[MajorController::class,'destroy']);
Route::get('/lesson/{id}/delete',[LessonController::class,'destroy']);
Route::get('/buy_basket/{id}/delete',[BuyBasketController::class,'destroy']);
Route::get('/balance/{id}/delete',[BalanceController::class,'destroy']);


//Resources 
Route::resource('/video',VideoController::class);
Route::resource('/photo',PhotoController::class);
Route::resource('/wallet',WalletController::class);
Route::resource('/test_student',TestStudentController::class);
Route::resource('/test',TestController::class);
Route::resource('/user_role',RoleController::class);
Route::resource('/question',QuestionController::class);
Route::resource('/payment',PaymentController::class);
Route::resource('/major',MajorController::class);
Route::resource('/lesson',LessonController::class);
Route::resource('/buy_basket',BuyBasketController::class);
Route::resource('/balance',BalanceController::class);
Route::resource('/user_login',UserLoginController::class);



//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

