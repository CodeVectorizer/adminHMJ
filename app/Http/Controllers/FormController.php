<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FormController extends Controller
{
    public function index()
    {
        return view('admin.pages.form.index');
    }
}
