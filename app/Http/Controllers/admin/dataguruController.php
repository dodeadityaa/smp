<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class dataguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminss = User::where([['level', 'guru']])->get();
        return view('admin.guru')->with('adminss', $adminss);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->level = $request->level;
        $data->alamat = $request->alamat;
        $files = $request->file('foto');
        $data->password = bcrypt($request->password);

        if ($files) {
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move(public_path('fotologin'), $profileImage);
            $data->foto = "$profileImage";
        } else {
            $data->foto = "orang.png";
        }

        $admins = User::where('name', $request->name)->first();
        if ($data->name == $admins['name']) {
            return redirect()->route('guru-view.index')->with('failed', 'Nama atau Email Sudah Ada !');
        } else {
            $data->save();
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('guru-view.index')->with('suksesssss', 'You are successfully added all fields!');
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
        $where = array('id' => $id);
        $adminss = User::where($where)->first();
        return Response::json($adminss);
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
            $files = $request->file('foto');
            if ($files != null) {
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move(public_path('fotologin'), $profileImage);
                $image = "$profileImage";
            } else {
                $image = $request->fotologin;
            }
            $update =  DB::table('users')->where('id', $request->id_admin)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'foto' => $image,
                'level' => $request->level,
                'password' => bcrypt($request->password),

            ]);
            if ($update) {
                return redirect()->route('guru-view.index')->with('suksesedit', 'Data berhasil diubah!');
            } else {
                return redirect()->route('guru-view.index')->with('failed', 'Account name or email already exists !');
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
        $data = User::where('id', $id)->first();
        $data->delete();
        return redirect()->route('admins-view.index')->with('deletee', 'Data berhasi dihapus!');
    }
}
