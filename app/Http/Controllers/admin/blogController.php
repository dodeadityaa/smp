<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blogModel;
use App\categoriModel;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blogModel::with('categoriModels')->get();
        return view('admin.blog')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorii = DB::table('categori')->get();
        return view('admin.inputblog')->with('categorii', $categorii);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new blogModel();
        $data->judul = $request->judul;
        $data->id_categori = $request->categori;
        $data->tgl = $request->tgl;
        $data->blog = $request->blog;
        $files = $request->file('avatarjudul2');

        if ($files) {
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move(public_path('fotoblog'), $profileImage);
            $data->foto_blog = "$profileImage";
        } else {
            $data->foto_blog = "tidakada.jpg";
        }

        $blogg = blogModel::where('judul', $request->judul)->first();
        if ($data->judul == $blogg['judul']) {
            return redirect()->route('blog-view.create')->with('failed', 'Nama atau Email Sudah Ada !');
        } else {
            $data->save();
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('blog-view.index')->with('suksesssss', 'You are successfully added all fields!');
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
        $blogga = blogModel::find($id);
        $categorii = DB::table('categori')->get();
        return view('admin.editblog')->with('categorii', $categorii)->with('blogga', $blogga);
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
            $files = $request->file('avatarjudul2');
            if ($files != null) {
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move(public_path('fotoblog'), $profileImage);
                $image = "$profileImage";
            } else {
                $image = $request->fotojudul;
            }
            $update =  DB::table('blog')->where('id', $request->id_blog)->update([
                'judul' => $request->judul,
                'id_categori' => $request->categori,
                'tgl' => $request->tgl,
                'blog' => $request->blog,
                'foto_blog' => $image

            ]);
            if ($update) {
                return redirect()->route('blog-view.index')->with('suksesedit', 'Data berhasil diubah!');
            } else {
                $blogga = blogModel::find($id);
                $categorii = DB::table('categori')->get();
                return view('admin.editblog')->with('categorii', $categorii)->with('blogga', $blogga)->with('failed', 'Account name or email already exists !');
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
        $data = blogModel::where('id', $id)->first();
        $data->delete();
        return redirect()->route('blog-view.index')->with('deletee', 'Data berhasi dihapus!');
    }
}
