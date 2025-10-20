<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('backend.index');
});

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');




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


    Route::get('/admin/courses/create', [App\Http\Controllers\CourseController::class, 'create'])->name('backend.courses.create');
    Route::post('/admin/courses/create', [App\Http\Controllers\CourseController::class, 'store'])->name('backend.courses.create');
    Route::get('/admin/courses/show', [App\Http\Controllers\CourseController::class, 'show'])->name('backend.courses.show');
    Route::post('/admin/courses/edit', [App\Http\Controllers\CourseController::class, 'update'])->name('backend.courses.update');
    Route::get('/admin/courses/auth/delete', [App\Http\Controllers\CourseController::class, 'delete'])->name('backend.courses.delete');

});

// For Student Only
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('dashboard.student');
    });
});
