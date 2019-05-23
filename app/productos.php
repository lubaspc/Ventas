<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
    protected $table = 'productos';
    protected $fillable = ['nombre_producto', 'tamaño_producto', 'cantidad', 'precio_costo', 'precio_venta', 'enlace_imagen', 'stock_inv', 'estatus_pedi', 'id_categorias'];


    public function categorias()
    {
		return $this->belongsTo('App\categorias', 'id_categorias', 'id');
	}
}
