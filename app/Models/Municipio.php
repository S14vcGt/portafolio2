<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo_mun';
    public $incrementing = false;
    protected $fillable= [
        "codigo_mun",
        "nombre",
       "codigo_estado"
    ];
}
