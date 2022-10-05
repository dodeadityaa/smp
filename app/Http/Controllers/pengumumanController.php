<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumumanModel;

class pengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = pengumumanModel::orderBy('tgl', 'DESC')->paginate(4);
        return view('pengumuman')->with('pengumumans', $pengumumans);
    }
}
