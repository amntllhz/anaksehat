<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekGiziController extends Controller
{
    // membuat logika untuk cek status gizi balita

    public function index()
    {
        return view('cekgizi');
    }
}
