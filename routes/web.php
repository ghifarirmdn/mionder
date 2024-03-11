<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AuthController::class, 'isLogin'])->name('isLogin');
// Route::get('/dashboard', [AuthController::class, 'isLogin'])->name('isLogin');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home_new');
// });
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
Route::get('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/actionRegister', [AuthController::class, 'actionRegister'])->name('actionRegister');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route::get('/profile', function() {
//     return view('profile');
// });