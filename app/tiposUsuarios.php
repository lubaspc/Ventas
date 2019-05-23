<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposUsuarios extends Model
{
    protected $table = 'tipos_usuarios';

    public function users(){
    	return $this->hasMany('App\User', 'tipoUsuario', 'id');
    }
}
