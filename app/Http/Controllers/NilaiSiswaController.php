<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    public function NilaiSiswa()
    {
    // Ini akan mengembalikan tampilan Nilai Siswa.
    return view('NilaiSiswa');
    }
}
