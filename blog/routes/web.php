<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomAuth;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[studentController::class, 'index'])->name('index');
Route::post('/',[studentController::class, 'create']);

Route::get('edit/{id}', [studentController::class,'edit'])->name('edit');
Route::put('edit/{id}', [studentController::class,'update'])->name('update');
Route::get('delete/{id}', [studentController::class,'destroy'])->name('destroy');


Route::get('add-customer', [CustomerController::class, 'add_customer']);

Route::get('show-mobile/{id}', [CustomerController::class, 'show_mobile']);

Route::get('add-author', [AuthorController::class, 'add_author']);
Route::get('add-post/{id}', [PostController::class, 'add_post']);
Route::get('show-post/{id}', [PostController::class, 'show_post']);

Route::get('session',[SessionController::class, 'session_data']);

// Route::view('login', 'login');
// Route::post('/user', [LoginController::class, 'login']);
Route::get('/register', [CustomAuth::class, 'register'])->middleware('alreadyLogin');
Route::get('/login', [CustomAuth::class, 'login'])->middleware('alreadyLogin');

Route::post('/register-user', [CustomAuth::class, 'register_user'])->name('register-user');
Route::post('/login-user', [CustomAuth::class, 'login_user'])->name('login-user');

Route::get('dashboard', [CustomAuth::class, 'dashboard'])->middleware('isLogin');
Route::get('logout', [CustomAuth::class, 'logout']);\


Route::get('notification', [NotificationController::class, 'noti']);
Route::get('send', [HomeController::class, 'sendNoti']);