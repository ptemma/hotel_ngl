<?php

use App\Http\Controllers\Admin\AdminHotelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HotelController;

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

Route::get('/user', function () {
    $users = User::all();
    return response()->json($users);
});

Route::get('/', function () {
    return view('index');
});


Route::get('/service', function () {
    return view('service');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hotel', [HotelController::class, 'index'])->name('hotel');


// Route::get('/hotel', [HotelController::class, 'getAllHotels']);
// Route::get('/hoteldetail', function () {
//     return view('hoteldetail');
// });


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


Route::get('/register', [RegisterController::class, 'getViewRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


//Admin
Route::get('/admin/hotels', [AdminHotelController::class, 'index'])->name('Admin.hotels.index');
Route::get('/admin/hotels/create', [AdminHotelController::class, 'create'])->name('Admin.hotels.create');
Route::post('/admin/hotels/store', [AdminHotelController::class, 'store'])->name('Admin.hotels.store');
Route::get('/admin/hotels/{hotel_id}/edit', [AdminHotelController::class, 'edit'])->name('Admin.hotels.edit');
Route::put('/admin/hotels/{hotel_id}/update', [AdminHotelController::class, 'update'])->name('Admin.hotels.update');
Route::delete('/admin/hotels/{hotel_id}/delete', [AdminHotelController::class, 'destroy'])->name('Admin.hotels.delete');
