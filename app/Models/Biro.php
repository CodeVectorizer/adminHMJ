<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biro extends Model
{
    use HasFactory;

    protected $table = 'tb_biro';
    protected $primaryKey = 'id_biro';
}
