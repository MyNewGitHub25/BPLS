<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('Login', [LoginController::class, 'Login'])->name('Login');

Route::group(['prefix' => 'login'], function() {
    Route::post('/LoginValidation', [LoginController::class, 'LoginValidation'])->name('LoginValidation');
});
