<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\nilaiModel;
use App\nilaisiswaModel;


class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaii = DB::table('nilai')->get();
        return view('admin.nilai')->with('nilaii', $nilaii);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputnilai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new nilaiModel();
        $data->judul_nilai = $request->get('judul_nilai');
        $data->kelas = $request->get('kelas');
        $data->pelajaran = $request->get('pelajaran');
        $data->tgl = $request->get('tgl');
        $data->jumlah_siswa = $request->get('jumlah_siswa');
        $users = nilaiModel::where('judul_nilai', $request->judul_nilai)->first();
        if ($data->judul_nilai == $users['judul_nilai']) {
            return redirect()->route('nilai-view.create')->with('failed', 'Nama atau Email Sudah Ada !');
        } else {
            if ($data->save()) {
                $id = $data->id;
                $namasiswa = $request->get('nama_siswa');
                $nilaii = $request->get('nilai_siswa');
                $finalArray = array();
                foreach ($nilaii as $key => $value) {
                    array_push($finalArray, array(
                        'id_nilai' => $id,
                        'nilai_siswa' => $value,
                        'nama_siswa' => $namasiswa[$key],
                    ));
                }
                nilaisiswaModel::insert($finalArray);
            }
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('nilai-view.index')->with('suksesssss', 'Data Berhasil Di Buat');
        }

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilaia = nilaiModel::find($id);
        return view('admin.editnilai')->with('nilaia', $nilaia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = nilaiModel::where('id', $id)->first();
        $data->delete();
        return redirect()->route('nilai-view.index')->with('deletee', 'Data berhasi dihapus!');
    }
}
