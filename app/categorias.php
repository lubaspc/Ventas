<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    //
    protected $table = 'categorias';

    protected $fillable = ['tipo_producto','descripcion', 'estatus_cat'];
}
