<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_generar_insumos extends Model
{
    //
    protected $table = 'detalle_generar_insumos';


    protected $fillable = ['categoria', 'precio_costo', 'estatus_dtin', 'id_generarproductos', 'id_insumos'];


    public function generar_productos()
    {
		return $this->belongsTo('App\generar_productos', 'id_generarproductos', 'id');
	}


	public function insumos()
    {
		return $this->belongsTo('App\insumos', 'id_insumos', 'id');
	}
}
