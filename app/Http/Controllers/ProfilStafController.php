<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilStafController extends Controller
{
    public function ProfilStaf()
    {
    // Ini akan mengembalikan tampilan Profil Staf.
    return view('ProfilStaf');
    }
}
