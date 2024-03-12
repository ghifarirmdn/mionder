<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AuthController::class, 'isLogin'])->name('isLogin');
// Route::get('/dashboard', [AuthController::class, 'isLogin'])->name('isLogin');
//home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home_new');
// });

//auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
Route::get('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/actionRegister', [AuthController::class, 'actionRegister'])->name('actionRegister');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/keluhan', [KeluhanController::class, 'index'])->name('keluhan')->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');

// Route::get('/profile', function() {
//     return view('profile');
// });