<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout/store', [CheckOutController::class, 'store'])->name('checkout.store');
    Route::get('/product/{id}', [ProductController::class, 'show']);
    Route::get('/confirm', [ConfirmController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update-profile');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
