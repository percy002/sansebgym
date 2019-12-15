<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    //
    protected $primaryKey = 'idasistencia';
    protected $table="asistencia";

    protected $fillable = [
        'idPagoMembresia', 'fechaHora',
    ];

}
