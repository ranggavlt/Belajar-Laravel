<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function pendaftaran()
    {
        return view('list.daftar');
    }
}
