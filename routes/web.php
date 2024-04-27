<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


Route::get('/register', [RegisterController::class, 'getViewRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


Route::get('/', function () {
    return view('index');
});
