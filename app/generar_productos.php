<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generar_productos extends Model
{
    //
    protected $table = 'generar_productos';

    protected $fillable = ['nombre_prod', 'cantidad', 'precio_costo', 'estatus_grp', 'id_productos'];


    public function productos()
    {
		return $this->belongsTo('App\productos', 'id_productos', 'id');
	}
}
