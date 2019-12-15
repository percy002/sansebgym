<?php

namespace App\entities;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    //
    protected $primaryKey = 'idsocio';
    protected $table="socio";

    protected $fillable = [
        'dni', 'nombres', 'apellidos', 'celular' ,'correo' ,'genero'
    ];

    

    
    
}
