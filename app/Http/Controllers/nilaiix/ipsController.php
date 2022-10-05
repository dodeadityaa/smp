<?php

namespace App\Http\Controllers\nilaiix;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nilaiModel;
use App\nilaisiswaModel;

class ipsController extends Controller
{
    public function index()
    {
        $lastt = nilaiModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $nilaii = nilaiModel::where([['kelas', 9], ['pelajaran', 'IPS']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('nilaiix')->with('nilaii', $nilaii)->with('lastt', $lastt);
    }
}
