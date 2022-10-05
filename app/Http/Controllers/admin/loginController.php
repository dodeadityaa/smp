<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard-view.index');
        }
        return redirect('/login')->with('failed', 'Salah Memasukan Email Atau Password');
    }

    public function logoutin()
    {
        Auth::logout();
        return redirect('/');
    }
}
