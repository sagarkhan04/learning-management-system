<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'admin'])->name('dashboard');
Route::get('/student-dashboard', [App\Http\Controllers\DashboardController::class, 'student'])->name('student.dashboard');

Route::get('/student-copy', [App\Http\Controllers\DashboardController::class, 'studentCopy'])->name('student.dashboard.studentCopy');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('auth.register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('auth.register.store');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'show'])->name('auth.login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth.login.store');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');


