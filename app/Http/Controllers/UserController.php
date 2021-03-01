<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = Artikel::all();        
        return view('user.pages.home', compact('data'));
    }

    public function blog()
    {
        $data = Artikel::all();
        return view('user.pages.blog', compact('data'));
        
    }
}
