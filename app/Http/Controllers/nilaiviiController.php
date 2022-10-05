<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nilaiModel;
use App\nilaisiswaModel;

class nilaiviiController extends Controller
{
    public function index()
    {
        $lastt = nilaiModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $nilaii = nilaiModel::where([['kelas', 7]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('nilaivii')->with('nilaii', $nilaii)->with('lastt', $lastt);
    }

    public function detail($id)
    {
        $lastt = nilaiModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $detailnilai = nilaiModel::find($id);
        return view('detailnilaivii')->with('detailnilai', $detailnilai)->with('lastt', $lastt);
    }

    public function detailsiswa($id)
    {
        $lastt = nilaiModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $detailsiswa = nilaisiswaModel::where('id_nilai', $id)->get();
        return view('detailsiswavii')->with('detailsiswa', $detailsiswa)->with('lastt', $lastt);
    }
}
