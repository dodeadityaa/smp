<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\tugasModel;

class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugass = DB::table('tugas')->get();
        return view('admin.tugas')->with('tugass', $tugass);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputtugas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new tugasModel();
        $data->judul_tugas = $request->judul_tugas;
        $data->detail_tugas = $request->detail_tugas;
        $data->tgl = $request->tgl;
        $data->kelas = $request->kelas;
        $data->pelajaran = $request->pelajaran;
        $files = $request->file('upload_tugas');

        if ($files) {
            $uploadtugas = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move(public_path('tugassiswa'), $uploadtugas);
            $data->upload_tugas = "$uploadtugas";
        } else {
            $data->upload_tugas = "null";
        }

        $tugasupload = tugasModel::where('judul_tugas', $request->judul_tugas)->first();
        if ($data->judul_tugas == $tugasupload['judul_tugas']) {
            return redirect()->route('tugas-view.create')->with('failed', 'Nama atau Email Sudah Ada !');
        } else {
            $data->save();
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('tugas-view.index')->with('suksesssss', 'You are successfully added all fields!');
        }
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
        $tugasa = tugasModel::find($id);
        return view('admin.edittugas')->with('tugasa', $tugasa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            $files = $request->file('upload_tugas');
            if ($files != null) {
                $uploadtugas = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move(public_path('tugassiswa'), $uploadtugas);
                $tugass = "$uploadtugas";
            } else {
                $tugass = $request->upload_tugas;
            }
            $update =  DB::table('tugas')->where('id', $request->id_tugas)->update([
                'judul_tugas' => $request->judul_tugas,
                'detail_tugas' => $request->detail_tugas,
                'tgl' => $request->tgl,
                'kelas' => $request->kelas,
                'pelajaran' => $request->pelajaran,
                'upload_tugas' => $tugass

            ]);
            if ($update) {
                return redirect()->route('tugas-view.index')->with('suksesedit', 'Data berhasil diubah!');
            } else {
                $blogga = tugasModel::find($id);
                return view('admin.edittugas')->with('blogga', $blogga)->with('failed', 'Account name or email already exists !');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
