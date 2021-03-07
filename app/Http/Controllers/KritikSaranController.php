<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikSaran;

class KritikSaranController extends Controller
{
  public function index()
  {
    $data = KritikSaran::All();

    return view('admin.pages.kritikSaran.index', compact('data'));
  }
  //store kritikSaran
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'nama' => 'required',
      'email' => 'required',
      'kritikSaran' => 'required',
      'tanggal' => 'required',
    ]);

    //store kritikSaran
    $kritikSaran = new KritikSaran();
    $kritikSaran->nama = $request->nama;
    $kritikSaran->email = $request->email;
    $kritikSaran->kritikSaran = $request->kritikSaran;
    $kritikSaran->tanggal = $request->time();
    $kritikSaran->save();
    return redirect()->route('list.kritikSaran');
  }
  //edit kritikSaran
  // public function update(Request $request, $id)
  // {
  //   $kritikSaran = KritikSaran::find($id);
  //   $kritikSaran->nama = $request->nama;
  //   $kritikSaran->email = $request->email;
  //   $kritikSaran->kritikSaran = $request->kritikSaran;
  //   $kritikSaran->tanggal = $request->time();
  //   $kritikSaran->save();
  //   return redirect()->route('list.kritikSaran');
  // }
  //delete kritikSaran
  public function delete($id)
  {
    $kritikSaran = KritikSaran::find($id)->delete();
    return redirect()->route('list.kritikSaran');
  }
}
