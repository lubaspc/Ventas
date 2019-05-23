<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_pedidos extends Model
{
    //
    protected $table = 'detalle_pedidos';

    protected $fillable = ['cantidad', 'precio', 'estatus_dtpe', 'id_insumos', 'id_pedidos'];


    public function insumos()
    {
		return $this->belongsTo('App\insumos', 'id_insumos', 'id');
	}


	public function pedidos()
    {
		return $this->belongsTo('App\pedidos', 'id_pedidos', 'id');
	}
}
