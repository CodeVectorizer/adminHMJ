<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if($user->role == 'admin'){
            $data = Artikel::latest()->get();
        }else{
            $data = Artikel::latest()->where('penulis',$user->name)->get();
        }

        return view('admin.pages.artikel.index', compact('data'));
    }

    public function create(Request $request)
    {
        $kategori = Kategori::all();
        return view('admin.pages.artikel.create', compact('kategori'));
    }

    public function edit($id)
    {
        $data = Artikel::find($id);
        if (!$data) return view('error-404');
        $kategori = Kategori::all();
        return view('admin.pages.artikel.edit', compact('data', 'kategori'));
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'tanggal_penulisan' => 'required',
            'gambar' => 'required',
            'isi' => 'required',
            'id_kategori' => 'required'

        ]);

        $artikel = new Artikel();
        $artikel->penulis = Auth::user()->name;
        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul);
        $artikel->tanggal_penulisan = $request->tanggal_penulisan;
        $artikel->tanggal_update = Carbon::now();
        $artikel->isi = $request->isi;
        $artikel->id_kategori = $request->id_kategori;

        $imagePath = "";
        if ($request->hasFile('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('img/artikel/', $imageName);
            $imagePath = 'img/artikel/' . $imageName;
        }
        $artikel->gambar = $imagePath;

        $artikel->save();

        return redirect()->route('list.artikel');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'penulis' => 'required',
            'judul' => 'required',
            'tanggal_penulisan' => 'required',
            'isi' => 'required',
            'id_kategori' => 'required'
        ]);


        $artikel = Artikel::find($id);
        $artikel->penulis = Auth::user()->name;
        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul);
        $artikel->tanggal_penulisan = $request->tanggal_penulisan;
        $artikel->tanggal_update = Carbon::now();;
        $artikel->isi = $request->isi;
        $artikel->id_kategori = $request->id_kategori;

        // $imagePath = "";
        if ($request->hasFile('gambar')) {
            if (file_exists($artikel->gambar)) {
                unlink($artikel->gambar);
            }
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('img/artikel/', $imageName);
            $imagePath = 'img/artikel/' . $imageName;
            $artikel->gambar = 'img/artikel/' . $imageName;
        }
        $artikel->save();

        return redirect()->route('list.artikel');
    }
    public function delete($id)
    {
        $artikel = Artikel::where('id_artikel', $id)->first();
        if (file_exists($artikel->gambar)) {
            unlink($artikel->gambar);
        }
        $artikel->delete();
        return redirect()->route('list.artikel');
    }
}
