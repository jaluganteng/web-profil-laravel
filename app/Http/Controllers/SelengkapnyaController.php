<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelengkapnyaController extends Controller
{
    function tampil()
    {
        return view('tentang/selengkapnya.tampil');
    }
}
