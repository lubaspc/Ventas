<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_pagos extends Model
{
    //
    protected $table = 'tipo_pagos';

    protected $fillable = ['categoria', 'estatus_tipago'];
}

