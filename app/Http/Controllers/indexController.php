<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blogModel;
use Carbon\Carbon;
use App\pengumumanModel;

class indexController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->subDays(360);
        $catee = DB::table('categori')->get();
        // $blogs = blogModel::with('categoriModels')->where('created_at', '>=', $date)->limit(3)->get();
        $blogs = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $pengumumans = pengumumanModel::orderBy('tgl', 'DESC')->limit(3)->get();
        return view('index')->with('pengumumans', $pengumumans)->with('blogs', $blogs)->with('catee', $catee);
    }
}
