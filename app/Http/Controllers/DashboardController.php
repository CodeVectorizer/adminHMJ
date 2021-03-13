<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Hello World From DashboardController',
        ];

        return view('admin.pages.dashboard', $data)->render();
    }

    public function autocomplete(Request $request)
    {

        // $data = Biro::select('biro')->where("biro", "LIKE", "%" . $request->querys . "%")->get();        
        // return response()->json($data);


        if ($request->ajax()) {
            $output = "";
            $data = Biro::select('biro')->where("biro", "LIKE", "%" . $request->search . "%")->limit(5)->get();
            if ($data) {
                foreach ($data as $key => $item) {
                    $output .= "
                    <div class='search-item'><a href='#'>" . $item->biro . "</a><a href='#' class='search-close'><i class='fas fa-times'></i></a></div>
                    ";
                }
            } else {
                $output = "";
            }
        }
        return Response($output);
    }
}
