<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class ShopController extends Controller
{

    public function buscar($id){
        $categorias=productos::where('nombre_producto',$id)
        ->join('categorias','productos.id_categorias','categorias.id')
        ->get();
        //return $categorias;
        return 'Hola';
        return view('vistas.index')->with('productos',$categorias);

    }
}
