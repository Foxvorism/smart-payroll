<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController
{
    public function index()
    {
        $siswa = Siswa::all();
        $user = Auth::user();

        return view('siswa', [
            'siswa' => $siswa,
            'user' => $user
        ]);
    }
}
