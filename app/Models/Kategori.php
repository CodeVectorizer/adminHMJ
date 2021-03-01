<?php

namespace App\Models;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tb_kategori';
    protected $primaryKey = 'id_kategori';

    /**
     * Get all of the artikel for the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */   
}
