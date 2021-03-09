<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\Prodi;
use App\Models\Jabatan;
use App\Models\Biro;

class PengurusController extends Controller
{
  public function index()
  {
    $data = Pengurus::All();

    return view('admin.pages.pengurus.index', compact('data'));
  }
  public function create()
  {
    $prodi = Prodi::All();
    $jabatan = Jabatan::All();
    $biro = Biro::All();

    return view('admin.pages.pengurus.create', compact('prodi', 'jabatan', 'biro'));
  }
  //view edit
  public function edit($id)
  {
    $data = Pengurus::find($id);
    $prodi = Prodi::All();
    $jabatan = Jabatan::All();
    $biro = Biro::All();

    return view('admin.pages.pengurus.edit', compact('prodi', 'jabatan', 'biro', 'data'));
  }
  //store pengurus
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'nim' => 'required',
      'nama' => 'required',
      'email' => 'required',
      'no_hp' => 'required',
      'angkatan' => 'required',
      'id_prodi' => 'required',
      'id_jabatan' => 'required',
      'id_biro' => 'required',
    ]);

    //store pengurus
    $pengurus = new Pengurus();
    $pengurus->nim = $request->nim;
    $pengurus->nama = $request->nama;
    $pengurus->email = $request->email;
    $pengurus->no_hp = $request->no_hp;
    $pengurus->angkatan = $request->angkatan;
    $pengurus->id_prodi = $request->id_prodi;
    $pengurus->id_jabatan = $request->id_jabatan;
    $pengurus->id_biro = $request->id_biro;

    //store foto
    $imagePath = "";
    if ($request-> hasFile('foto')) {
      $image = $request->foto;
      $imageName = time().$image->getClientOriginalName();
      $image->move('foto/', $imageName);
      $imagePath = 'foto/'.$imageName;
    }
    $pengurus->foto = $imagePath;

    $pengurus->save();

    return redirect()->route('list.pengurus');
  }
  //edit pengurus
  public function update(Request $request, $id)
  {
    //validasi form
    $this->validate($request, [
      'nim' => 'required',
      'nama' => 'required',
      'email' => 'required',
      'no_hp' => 'required',
      'angkatan' => 'required',
      'id_prodi' => 'required',
      'id_jabatan' => 'required',
      'id_biro' => 'required',
    ]);

    //store pengurus
    $pengurus = Pengurus::find($id);
    $pengurus->nim = $request->nim;
    $pengurus->nama = $request->nama;
    $pengurus->email = $request->email;
    $pengurus->no_hp = $request->no_hp;
    $pengurus->angkatan = $request->angkatan;
    $pengurus->id_prodi = $request->id_prodi;
    $pengurus->id_jabatan = $request->id_jabatan;
    $pengurus->id_biro = $request->id_biro;

    //store foto
    if ($request-> hasFile('foto')) {
      if (file_exists($pengurus->foto)) {
        unlink($pengurus->foto);
      }
      $image = $request->foto;
      $imageName = time().$image->getClientOriginalName();
      $image->move('foto/', $imageName);
      $imagePath = 'foto/'.$imageName;
      $pengurus->foto = 'foto/'.$imageName;
    }
    
    $pengurus->save();

    return redirect()->route('list.pengurus');
  }
  //delete pengurus
  public function delete($id)
  {
    $pengurus = Pengurus::where('id_pengurus', $id)->first();
    if (file_exists($pengurus->foto)) {
      unlink($pengurus->foto);
    }
    $pengurus->delete();
    return redirect()->route('list.pengurus');
  }
}
