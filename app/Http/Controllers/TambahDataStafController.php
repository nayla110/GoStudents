<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahDataStafController extends Controller
{
    public function TambahDataStaf()
    {
    // Ini akan mengembalikan tampilan Tambah Data Siswa.
    return view('TambahDataStaf');
    }
}
