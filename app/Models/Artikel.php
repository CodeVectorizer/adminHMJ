<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

   

    protected $table = 'tb_artikel';
    protected $primaryKey = 'id_artikel';



    const CREATED_AT = 'tanggal_penulisan';
    const UPDATED_AT = 'tanggal_update';


   

    
    /**
     * Get the kategori that owns the Artikel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}

