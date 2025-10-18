<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('backend.index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'admin'])->name('dashboard.admin');
Route::get('/student/dashboard', [App\Http\Controllers\DashboardController::class, 'student'])->name('dashboard.student');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('auth.register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('auth.register.store');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'show'])->name('auth.login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth.login.store');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');




// For Admin Only
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin');
    });

    Route::get('/admin/users', [App\Http\Controllers\DashboardController::class, 'users'])->name('backend.users');
    Route::delete('/admin/users/{id}', [App\Http\Controllers\DashboardController::class, 'destroy'])->name('backend.users.destroy');
});

// For Student Only
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('dashboard.student');
    });
});
