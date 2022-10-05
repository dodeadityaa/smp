<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class dashboardController extends Controller
{
    public function index()
    {
        $adminss = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('admin.dashboard')->with('adminss', $adminss);
    }

    public function edit($id)
    {
        $adminss = User::find($id);
        $adminsss = DB::table('users')->get();
        return view('admin.editprofil')->with('adminss', $adminss)->with('adminsss', $adminsss);
    }
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
            $update =  DB::table('users')->where('id', $request->id_users)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'level' => $request->level,
                'foto' => $image,
                'password' => bcrypt($request->password)

            ]);
            if ($update) {
                return redirect('/dashboard')->with('suksesedit', 'Data berhasil diubah!');
            } else {
                $adminss = User::find($id);
                $adminsss = DB::table('users')->get();
                return view('admin.editprofil')->with('adminss', $adminss)->with('adminsss', $adminsss)->with('failed', 'Account name or email already exists !');
            }
        }
    }
}
