<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function Login()
    {
        return view('Login');
    }

}
