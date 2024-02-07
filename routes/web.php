<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'Login'])->name('Login');
Route::post('login', [LoginController::class, 'LoginValidation'])->name('LoginValidation');
Route::get('dashboard', [LoginController::class, 'Dashboard'])->name('Dashboard');

