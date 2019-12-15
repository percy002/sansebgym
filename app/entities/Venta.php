<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $primaryKey = 'idventa';
    protected $table="venta";

    protected $fillable = [
        'idusuario', 'idproducto', 'cantidad', 'precioUnitario' ,'precioTotal' ,
    ];

    public function producto(){
        return $this->belongsTo('App\Entities\Producto', 'idproducto');
    }
}
