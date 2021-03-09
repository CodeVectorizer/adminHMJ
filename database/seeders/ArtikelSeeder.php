<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $artikel = new Artikel;

        $artikel->name = 'Lukman Afandi';
        $artikel->slug = Str::slug($this->faker->sentence());
        $artikel->judul = $this->faker->sentence();        
        $artikel->gambar = 'article.png';
        $artikel->isi = 'article.png';
        $artikel->kategori_id = $faker->numberBetween(1, 2);
        
        $artikel->save();
    }
}
