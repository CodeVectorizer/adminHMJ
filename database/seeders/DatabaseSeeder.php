<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ArtikelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Artikel::factory(1)->create();
        // $this->call([ArtikelSeeder::class]);
    }
}
