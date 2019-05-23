<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    //
    protected $table = 'insumos';

    protected $fillable = ['nombre_insumo', 'detalles', 'estatus_ins', 'id_proveedores'];

    public function proveedores()
    {
		return $this->belongsTo('App\proveedores', 'id_proveedores', 'id');
	}
}
