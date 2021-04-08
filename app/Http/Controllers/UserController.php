<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class UserController extends Controller
{
    public function index()
    {
        $data = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        return view('user.pages.home', compact('data'));
    }

    public function blog()
    {
        $blogs = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogKategori = Kategori::all();

        $data = [
            'blogs' => $blogs,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori

        ];
        return view('user.pages.blog', compact('data'));
    }

    public function getBlog(Artikel $artikel)
    {
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogKategori = Kategori::all();
        $data = [
            'blog' => $artikel,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori
        ];
        return view('user.pages.blog-detail', compact('data'));
    }

    public function getBlogWithCategory(Kategori $kategori)
    {
        $getKategori = $kategori['kategori'];
        $blogKategori = Kategori::all();

        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogWithCategory = Artikel::whereHas('kategori', function ($q) use ($getKategori) {
            return $q->where('kategori', '=', $getKategori);
        })->orderBy('id_artikel', 'desc')->paginate(3);
        $data = [
            'kategori' => $getKategori,
            'blogs' => $blogWithCategory,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori
        ];
        return view('user.pages.blog-kategori', compact('data'));
    }

    public function cariBlog(Request $request)
    {
        // dd($request->q);

        $data = Artikel::orderBy('judul', 'desc')->where("judul", "LIKE", "%" . $request->q . "%")->get();
        if (!$request->q) $data = [];
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogKategori = Kategori::all();

        $data = [
            'blogs' => $data,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori,
            'keywords'  => $request->q

        ];
        return view('user.pages.blog-cari', compact('data'));
    }

    public function sejarah()
    {
        return view('user.pages.form');
    }

    public function kritiksaran()
    {
        return view('user.pages.kritiksaran');
    }
}
