<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\sessionController;



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
    return view('home.home');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

route::group(['prefix' => '/login'], function () {
    Route::get('/all', [logincontroller::class, 'index'])->name('login');
    Route::post('/login', [logincontroller::class, 'login']);
});
route::group(['prefix' => '/register'], function () {
    Route::get('/all', [registercontroller::class, 'index'])->name('register');
    Route::post('/create', [registercontroller::class, 'create']);
});

Route::get('login/google',[GoogleController::class,'login']);
Route::get('login/google/callback',[GoogleController::class,'callback']);

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [GoogleController::class, 'logout']);
    Route::get('user',[UserController::class, 'index']);
});

route::group(['prefix' => '/session'], function () {
    Route::get('/logout', [sessionController::class, 'logout']);
});
