<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        return view('guru');
    }

    public function guru()
    {
        return view('guru2');
    }

    public function guru3()
    {
        return view('guru3');
    }
}
