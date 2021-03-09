<?php

namespace Database\Factories;

use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtikelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artikel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [        
        'penulis' => 'Lukman Afandi',
        'slug' => Str::slug($this->faker->sentence()),
        'judul' => $this->faker->sentence(),        
        'gambar' => 'article.png',
        'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur optio repellendus unde dolor recusandae reiciendis quia eaque quisquam veniam temporibus, dolores quasi labore ab, dicta nulla pariatur magni quidem fugit praesentium odit. Eaque similique unde quidem voluptatibus cumque, aperiam quas ab numquam at quisquam labore perferendis recusandae quos fugiat modi, amet laboriosam. Ipsa rem neque veniam eum cupiditate esse, repellat tempora, dolores quo pariatur ea quasi ut amet illo iste voluptates ipsum iusto placeat soluta aliquam obcaecati explicabo voluptatibus laboriosam id. Nihil, quod commodi vel alias porro maxime incidunt, cumque inventore adipisci impedit dicta. Cumque quod explicabo quae eligendi, totam est adipisci itaque ipsa iure. Nesciunt, pariatur alias ratione nisi odio aspernatur voluptatum ut incidunt corrupti voluptate dignissimos, sed dolores? Accusantium atque illum ullam a facere alias earum nam et, reprehenderit aperiam nulla aut voluptatibus ratione, totam iure, eligendi quas? Quaerat vel numquam pariatur, fugiat ipsa sed harum non minus! Quaerat aliquam aut pariatur nulla natus! Voluptates sit sapiente totam, optio consectetur minima reprehenderit, accusantium molestiae asperiores nobis aliquid nesciunt facere fugit? Beatae cumque nisi nihil minima, sunt, quas dicta est deserunt aliquid id natus hic quae commodi consectetur, in itaque facilis? Consequuntur non in explicabo velit modi fugit officia.',
        'id_kategori' => $this->faker->numberBetween(1, 2),            
        ];
    }
}
