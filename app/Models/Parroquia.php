<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_par';
    public $incrementing = false;
    protected $fillable= [
        "codigo_par",
        "nombre",
       "codigo_municipio"
    ];
}
