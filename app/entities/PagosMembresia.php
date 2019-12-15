<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PagosMembresia extends Model
{
    //
    protected $primaryKey = 'idPagoMembresia';
    protected $table="pagomembresia";

    protected $fillable = [
        'idusuario', 'idsocio', 'idtipoMembresia', 'cantidad' ,'precioTotal' ,'fechaInicio','fechaFin'
    ];

    public function socio(){
        return $this->belongsTo('App\Entities\Socio', 'idsocio');
    }
}
