<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cta_bancarias extends Model
{
    //
    protected $table = 'cta_bancarias';


    protected $fillable = ['tipo_cuenta', 'numero_cuenta', 'fecha_vencimiento', 'estatus_ctab', 'id_clientes', 'id_bancos'];


    public function clientes()
    {
		return $this->belongsTo('App\clientes', 'id_clientes', 'id');
	}

	public function bancos()
    {
		return $this->belongsTo('App\bancos', 'id_bancos', 'id');
	}
}
