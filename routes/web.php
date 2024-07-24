<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'index'])->name('loginView');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('userIndex');
        Route::post('/store', [UserController::class, 'storeUser'])->name('userStore');
        Route::get('/destroy/{id}', [UserController::class, 'destroyUser'])->name('userDestroy');
    });

    Route::prefix('siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index']);
    });
});


Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/slip-admin', function () {
    return view('slip-admin');
});

Route::get('/reimburse-admin', function () {
    return view('reimburse-admin');
});

Route::get('/slip-tutor', function () {
    return view('slip-tutor');
});

Route::get('/reimburse-tutor', function () {
    return view('reimburse-tutor');
});
