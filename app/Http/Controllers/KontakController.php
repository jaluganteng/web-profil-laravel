<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    function tampil()
    {
     return view('kontak.tampil');
    }
}
