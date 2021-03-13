<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

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

    public function getBlog(Artikel $artikel) {                               
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();        
        $blogKategori = Kategori::all();
        $data = [            
            'blog' => $artikel,
            'blogsTab' => $blogsTab,            
            'blogKategori' => $blogKategori
        ];                  
        return view('user.pages.blog-detail', compact('data'));                
    }

    public function getBlogWithCategory(Kategori $kategori) {        
        $getKategori = $kategori['kategori'];  
        $blogKategori = Kategori::all();
                     
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();        
        $blogWithCategory = Artikel::whereHas('kategori', function ($q) use ($getKategori){                        
             return $q->where('kategori','=',$getKategori);
        })->orderBy('id_artikel','desc')->paginate(3);        
        $data = [            
            'kategori' => $getKategori,
            'blogs' => $blogWithCategory,
            'blogsTab' => $blogsTab,     
            'blogKategori' => $blogKategori
        ];    
        return view('user.pages.blog-kategori', compact('data'));                        
    }
    
}

