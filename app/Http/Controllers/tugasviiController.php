<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugasModel;

class tugasviiController extends Controller
{
    public function index()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function bali()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'BHS. Bali']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }


    public function indo()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'BHS. Indonesia']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function informatika()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'Informatika']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function inggris()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'BHS. Inggris']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function ipa()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'IPA']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function ips()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'IPS']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function matematika()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'Matematika']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function pab()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'PAB']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function pjok()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'PJOK']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function pkn()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'PKN']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function seni()
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $tugass = tugasModel::where([['kelas', 7], ['pelajaran', 'Seni Budaya']])->orderBy('tgl', 'DESC')->paginate(4);
        return view('tugasvii')->with('tugass', $tugass)->with('lastt', $lastt);
    }

    public function detail($id)
    {
        $lastt = tugasModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $detailtugas = tugasModel::find($id);
        return view('detailtugasvii')->with('detailtugas', $detailtugas)->with('lastt', $lastt);
    }
}
