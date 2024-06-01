<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth');
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/store', [UserController::class, 'storeUser']);
    Route::get('/destroy/{id}', [UserController::class, 'destroyUser']);
});

Route::get('/siswa', function () {
    return view('siswa');
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
