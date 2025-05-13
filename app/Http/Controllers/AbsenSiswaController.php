<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenSiswaController extends Controller
{
    public function AbsenSiswa()
    {
        // Ini akan mengembalikan tampilan Absen Siswa.
        return view('AbsenSiswa');
    }
}
