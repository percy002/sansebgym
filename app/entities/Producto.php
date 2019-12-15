<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $primaryKey = 'idproducto';
    protected $table="producto";

    protected $fillable = [
        'nombreProducto', 'caracteristica', 'precioUnitario','dirImagen'
    ];
}
