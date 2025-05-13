<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IjinKeluarSiswaController extends Controller
{
    public function IjinKeluarSiswa()
    {
    // Ini akan mengembalikan tampilan Ijin Keluar Siswa.
    return view('IjinKeluarSiswa');
    }
}
