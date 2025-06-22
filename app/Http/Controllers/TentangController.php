<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    function tampil()
    {
        return view('tentang.tampil');
    }
}
