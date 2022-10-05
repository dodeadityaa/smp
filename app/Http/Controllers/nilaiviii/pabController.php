<?php

namespace App\Http\Controllers\nilaiviii;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nilaiModel;
use App\nilaisiswaModel;

class pabController extends Controller
{
    public function index()
    {
        $lastt = nilaiModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $nilaii = nilaiModel::where([['kelas', 8], ['pelajaran', 'PAB']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('nilaiviii')->with('nilaii', $nilaii)->with('lastt', $lastt);
    }
}
