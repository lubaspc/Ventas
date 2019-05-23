<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /*                             ADMINISTRADOR                           */
    //ACCESO
    public function accessoadm(){
        return view('acceso');
    }
    //PRINCIPAL 
    public function vista1(){
    	return view('inicio');
    }
    //VISTAS DEL MENÚ DE INICIO
    public function vistaprod(){
    	return view('productos');
    }
    public function vistavent(){
    	return view('ventas');
    }
    public function vistaclie(){
    	return view('clientes');
    }
    public function vistacompr(){
    	return view('compras');
    }
    public function vistaprov(){
    	return view('proveedores');
    }
    public function vistapros(){
    	return view('producciones');
    }

    /*                             CLIENTE                           */
    //ACCESO VISUALIZAR PEDIDOS
    public function accessocli(){
        return view('accesocliente');
    }     
    public function listapedidos(){
        return view('listapedidos');
    }
    public function vistasala(){
        return view('vistasala');
    }
    public function vistarecamara(){
        return view('vistarecamara');
    }
    public function vistacomedor(){
        return view('vistacomedor');
    }
    public function vistaescritorio(){
        return view('vistaescritorio');
    }
                public function rclientes(){
        return view('rclientes');
    }
            public function lpcliente(){
        return view('lpcliente');
    }
    
}
