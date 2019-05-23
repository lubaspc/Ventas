<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\detalle_ventas;
use App\clientes;
use App\tipo_pagos;



class clientespedidos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $clientespedidos = detalle_ventas::all(); 
        $clientespedidos = detalle_ventas::orderBy('id')->get();
        return view('clientespedidos.index')->with('detalle_ventas', $clientespedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientespedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = detalle_ventas::where('id_ventas',$request->username)
        ->join('ventas','detalle_ventas.id_ventas','ventas.id')
        ->join('productos','detalle_ventas.id_productos','productos.id')
        ->join('clientes','ventas.id_clientes','clientes.id')
        ->get(); 

        if(count($detalle)<1){
            $error="la";
            return redirect('/accesocliente')->with($error);
        }
       //return $detalle;
        $clientespedidos = detalle_ventas::orderBy('id')->get();
        return view('clientespedidos.index',compact('detalle'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_ventas = detalle_ventas::find($id);
        $detalle_ventas->destroy($id);
        return redirect('/clientespedidos');
    }
}
