<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use Illuminate\Http\Request;

class BiroController extends Controller
{
    public function index()
    {

        $data = Biro::all();
        dd($data);
    }
}
