<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;
use App\clientes;
use App\tipo_pagos;
use App\detalle_ventas;

class ventasController extends Controller
{
    public function _construct(){
        $this->middleware('usuarioAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle_ventas = detalle_ventas::all(); $detalle_ventas = detalle_ventas::orderBy('id')->get();
        $ventas = ventas::all(); $ventas = ventas::orderBy('id')->get();
        return view('ventas.index')->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_pagos = tipo_pagos::select('id', 'categoria')->get();
        $clientes = clientes::select('id', 'nombre_cliente')->get();        
        return view('ventas.create')
            ->with('tipo_pagos', $tipo_pagos)
            ->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        //$datos->folio_venta = jghghg();
        /*

        function folio_venta(){

        }
        */
        ventas::create($datos);
        return redirect('/ventas');
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
        $ventas = ventas::find($id);
        $clientes = clientes::select('id', 'nombre_cliente')->get();
        $tipo_pagos = tipo_pagos::select('id', 'categoria')->get();
        return view('ventas.edit')
            ->with('ventas', $ventas)
            ->with('clientes', $clientes)
            ->with('tipo_pagos', $tipo_pagos);
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
        $datos = $request->all();
        $ventas = ventas::find($id);
        $ventas->update($datos);
        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ventas = ventas::find($id);
        $ventas->destroy($id);
        return redirect('/ventas');
    }
}
