<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class HomeController extends Controller
{
    public function index()
    {
       // $data = [
         //   'nama' => 'Doraemon',
           // 'pekerjaan' => 'Developer',
        //];

        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('home', compact('nama','pekerjaan'));
    }

     public function contact()
    {
        return view('contact');
    }

}
