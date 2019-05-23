<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_ventas extends Model
{
    //
    protected $table = 'detalle_ventas';

    protected $fillable = ['cantidad', 'precio_costo', 'precio_venta', 'estatus_dtven', 'id_ventas', 'id_productos'];


    public function ventas()
    {
		return $this->belongsTo('App\ventas', 'id_ventas', 'id');
	}

	public function productos()
    {
		return $this->belongsTo('App\productos', 'id_productos', 'id');
	}
}
