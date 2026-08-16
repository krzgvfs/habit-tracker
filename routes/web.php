<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name(name: 'site.index');

Route::get('/login', [LoginController::class, 'index'])->name(name: 'site.login');

Route::post('/login', [LoginController::class, 'authenticate'])->name(name: 'auth.login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name(name: 'site.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name(name: 'auth.logout');
});
