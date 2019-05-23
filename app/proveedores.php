<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    //
    protected $table = 'proveedores';

    protected $fillable = ['nombre_prov', 'direccion', 'rfc', 'telefono', 'email', 'estatus_prov'];
}
