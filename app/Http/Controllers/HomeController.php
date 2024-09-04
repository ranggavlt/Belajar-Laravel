<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $namaDepan = $request->input('fname');
        $namaBelakang = $request ->input('lname');

        return view('list.home', ['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
    }
}
