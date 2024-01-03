<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = "ciudads";
    protected $primaryKey = 'codigo_cit';
    public $incrementing = false;
    protected $fillable= [
        "codigo_cit",
        "nombre",
       "codigo_parroquia"
    ];
}
