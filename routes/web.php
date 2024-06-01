<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('auth');
});

Route::get('/user', function () {
    return view('user');
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
