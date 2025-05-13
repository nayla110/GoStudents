<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointSiswaController extends Controller
{
    public function PointSiswa()
    {
    // Ini akan mengembalikan tampilan Point Siswa.
    return view('PointSiswa');
    }
}
