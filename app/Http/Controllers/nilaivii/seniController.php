<?php

namespace App\Http\Controllers\nilaivii;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nilaiModel;
use App\nilaisiswaModel;

class seniController extends Controller
{
    public function index()
    {
        $lastt = nilaiModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $nilaii = nilaiModel::where([['kelas', 7], ['pelajaran', 'Seni Budaya']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('nilaivii')->with('nilaii', $nilaii)->with('lastt', $lastt);
    }
}
