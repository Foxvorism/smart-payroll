<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth');
});

Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/tutor', function () {
    return view('tutor');
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
