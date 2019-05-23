<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedidos;
use App\proveedores;

class pedidosController extends Controller
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
        $pedidos = pedidos::all();
        $pedidos = pedidos::orderBy('id')->get();
        return view('pedidos.index')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = proveedores::select('id', 'nombre_prov', 'direccion')->get();
        return view('pedidos.create')->with('proveedores', $proveedores);
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
        pedidos::create($datos);
        return redirect('/pedidos');
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
        $pedidos = pedidos::find($id);
        $proveedores = proveedores::select('id', 'nombre_prov', 'direccion')->get();
        return view('pedidos.edit')
            ->with('pedidos', $pedidos)
            ->with('proveedores', $proveedores);
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
        $pedidos = pedidos::find($id);
        $pedidos->update($datos);
        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedidos = pedidos::find($id);
        $pedidos->destroy($id);
        return redirect('/pedidos');
    }
}
