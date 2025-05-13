<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IjinKeluarStafController extends Controller
{
    public function IjinKeluarStaf()
    {
    // Ini akan mengembalikan tampilan Ijin Keluar Staf.
    return view('IjinKeluarStaf');
    }
}
