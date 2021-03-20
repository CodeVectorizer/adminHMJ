<?php

namespace Database\Seeders;

use App\Models\Pengurus;
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengurus = new Pengurus();
        $pengurus->nim = $request->nim;
        $pengurus->nama = $request->nama;
        $pengurus->email = $request->email;
        $pengurus->no_hp = $request->no_hp;
        $pengurus->angkatan = $request->angkatan;
        $pengurus->id_prodi = $request->id_prodi;
        $pengurus->id_jabatan = $request->id_jabatan;
        $pengurus->id_biro = $request->id_biro;
        $pengurus->foto = $imagePath;
        $pengurus->save();
    }
}
