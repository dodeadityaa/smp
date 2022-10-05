<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pengumumanModel;

class pengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans = DB::table('pengumuman')->get();
        return view('admin.pengumuman')->with('pengumumans', $pengumumans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputpengumuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new pengumumanModel();
        $data->judul_pengumuman = $request->judul_pengumuman;
        $data->detail_pengumuman = $request->detail_pengumuman;
        $data->tgl = $request->tgl;

        $pengumumann = pengumumanModel::where('judul_pengumuman', $request->judul_pengumuman)->first();
        if ($data->judul_pengumuman == $pengumumann['judul_pengumuman']) {
            return redirect()->route('pengumuman-view.create')->with('failed', 'Nama atau Email Sudah Ada !');
        } else {
            $data->save();
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('pengumuman-view.index')->with('suksesssss', 'You are successfully added all fields!');
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
        $pengumumana = pengumumanModel::find($id);
        return view('admin.editpengumuman')->with('pengumumana', $pengumumana);
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
            $update =  DB::table('pengumuman')->where('id', $request->id_pengumuman)->update([
                'judul_pengumuman' => $request->judul_pengumuman,
                'detail_pengumuman' => $request->detail_pengumuman,
                'tgl' => $request->tgl
            ]);
            if ($update) {
                return redirect()->route('pengumuman-view.index')->with('suksesedit', 'Data berhasil diubah!');
            } else {
                $pengumumana = pengumumanModel::find($id);
                return view('admin.editpengumuman')->with('pengumumana', $pengumumana)->with('failed', 'Account name or email already exists !');
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
        $data = pengumumanModel::where('id', $id)->first();
        $data->delete();
        return redirect()->route('pengumuman-view.index')->with('deletee', 'Data berhasi dihapus!');
    }
}
