<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
    protected $table = 'clientes';

    protected $fillable = ['nombre_cliente','ap_paterno', 'ap_materno', 'email', 'telefono', 'codigo_postal', 'calle', 'colonia','no_interior','no_exterior', 'estatus_cliente'];
}
