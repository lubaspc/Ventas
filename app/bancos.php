<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bancos extends Model
{
    //
    protected $table = 'bancos'; 

    protected $fillable = ['nombre_banco', 'telefono', 'estatus_banco'];
}
