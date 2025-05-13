<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenStafController extends Controller
{
    public function AbsenStaf()
    {
        // Ini akan mengembalikan tampilan Absen Staf.
        return view('AbsenStaf');
    }
}
