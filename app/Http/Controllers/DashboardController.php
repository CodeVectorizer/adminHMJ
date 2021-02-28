<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
         'title' => 'Hello World From DashboardController',
        ];
        
        return view('admin.pages.dashboard', $data)->render();
    }
}
