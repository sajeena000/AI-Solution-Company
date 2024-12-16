<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {

// });
// Route::match(['GET', 'POST'],'login', [UserController::class, 'login'])->name('login');
Route::match(['GET', 'POST'],'login', [UserController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
  Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
