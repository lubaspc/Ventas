<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\detalle_ventas;

class AjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('usuarioAdmin');
    }


    public function combo($id_productos){
    	alert("combooooooooooooo");
    	$productos = productos::select('id', 'precio_costo')
    				->where('id', $id_productos)
    				->get();
    	return $productos;
    }

    public function actualiza($cantidad,$precio_venta,$id_venta){
		$venta = venta::select('subtotal','total')
				->where('id', $id_venta)
				->get();
		$total_venta = $cantidad * $precio_venta;
		$venta->subtotal = $precio_venta;
		$venta->total = $total_venta;
        
    	return "<h1>Se actualiza la carrera ".$venta->total.". Su nuevo todal de alumnos es: ".$venta->subtotal."</h1>";
    }
}
