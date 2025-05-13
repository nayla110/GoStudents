<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahNilaiStafController extends Controller
{
    public function TambahNilaiStaf()
    {
    // Ini akan mengembalikan tampilan Tambah Nilai Siswa.
    return view('TambahNilaiStaf');
    }
}
