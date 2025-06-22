<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    function tampil()
    {
        return view('prestasi.tampil');
    }
}
