<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_pagos;

class tipo_pagosController extends Controller
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
        //$tipo_pagos = tipo_pago::all();
        $tipo_pagos = tipo_pagos::orderBy('id')->get();
        return view('tipo_pagos.index')->with('tipo_pagos', $tipo_pagos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_pagos.create');
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
        tipo_pagos::create($datos);
        return redirect('/tipo_pagos');
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
        $tipo_pagos = tipo_pagos::find($id);
        return view('tipo_pagos.edit')->with('tipo_pagos', $tipo_pagos);
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
        $tipo_pagos = tipo_pagos::find($id);
        $tipo_pagos->update($datos);
        return redirect('/tipo_pagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_pagos = tipo_pagos::find($id);
        $tipo_pagos->destroy($id);
        return redirect('/tipo_pagos');
    }
}
