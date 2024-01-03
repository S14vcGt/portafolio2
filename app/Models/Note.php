<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /*protected $table = "notes";//nombre de la tabla

    protected $fillable = [//atributos que se pueden editar
        "title",
        "descripcion",
        "done"
    ]*/

    //protected $guarded =[//no editables, no es necesario definirlo, todos los que no sean fillables son guarded]
    //protected $casts =[// se fijan verificaciones preliminares
      //  "deadline" => "date"]
    //protected $hidden =[] campos que no queremos que se vizualizen por ejemplo cuando se entregan datos desde una API
}
