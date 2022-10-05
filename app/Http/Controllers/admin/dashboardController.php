<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminss = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('admin.dashboard')->with('adminss', $adminss);
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
        //
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
        $adminss = User::find($id);
        $adminsss = DB::table('users')->get();
        return view('admin.editprofil')->with('adminss', $adminss)->with('adminsss', $adminsss);
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
            $update =  DB::table('users')->where('id', $request->id_users)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'level' => $request->level,
                'foto' => $image
            ]);
            if ($update) {
                return redirect()->route('dashboard-view.index')->with('suksesedit', 'Data berhasil diubah!');
            } else {
                $adminss = User::find($id);
                $adminsss = DB::table('users')->get();
                return view('admin.editprofil')->with('adminss', $adminss)->with('adminsss', $adminsss)->with('failed', 'Account name or email already exists !');
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
