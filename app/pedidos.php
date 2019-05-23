<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    //
    protected $table = 'pedidos';

    protected $fillable = ['fecha', 'subtotal', 'iva', 'total', 'referencia', 'estatus_pedi', 'id_proveedores'];


    public function proveedores()
    {
		return $this->belongsTo('App\proveedores', 'id_proveedores', 'id');
	}
}
