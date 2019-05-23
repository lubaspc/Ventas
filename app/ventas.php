<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    //
    protected $table = 'ventas';

    protected $fillable = ['folio_venta', 'fecha_venta', 'subtotal', 'iva', 'total', 'estatus_venta', 'id_clientes', 'id_pagos'];

    public function clientes()
    {
		return $this->belongsTo('App\clientes', 'id_clientes', 'id');
	}

	public function tipo_pagos()
    {
		return $this->belongsTo('App\tipo_pagos', 'id_pagos', 'id');
	}

}
