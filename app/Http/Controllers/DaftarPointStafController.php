<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPointStafController extends Controller
{
    public function DaftarPointStaf()
    {
        // Ini akan mengembalikan tampilan Daftar Point Staf.
        return view('DaftarPointStaf');
    }
}
