<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blogModel;

class blogController extends Controller
{
    public function index()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function saint()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 1]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function penelitian()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 2]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function prestasi()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 3]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function olahraga()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 4]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function warga()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 5]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function politik()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 6]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function pendidikan()
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $blogs = blogModel::where([['id_categori', 7]])->orderBy('tgl', 'DESC')->paginate(4);
        return view('blog')->with('blogs', $blogs)->with('lastt', $lastt);
    }
    public function detail($id)
    {
        $lastt = blogModel::orderBy('tgl', 'DESC')->limit(3)->get();
        $detailblog = blogModel::find($id);
        return view('detailblog')->with('detailblog', $detailblog)->with('lastt', $lastt);
    }
}
