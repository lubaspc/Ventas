<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_ventas;
use App\principal_admin;

class principal_adminController extends Controller
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
        $detalle_ventas = detalle_ventas::all(); 
        $detalle_ventas = detalle_ventas::orderBy('id')->get();
        return view('principal_admin.index')
        ->with('detalle_ventas', $detalle_ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas = ventas::select('id', 'folio_venta')->get();
        $productos = productos::select('id', 'nombre_producto', 'precio_costo', 'precio_venta')->get();        
        return view('detalle_ventas.create')
            ->with('ventas', $ventas)
            ->with('productos', $productos);
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
        detalle_ventas::create($datos);
        return redirect('/detalle_ventas');
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
        $detalle_ventas = detalle_ventas::find($id);
        $productos = productos::select('id', 'nombre_producto', 'precio_costo', 'precio_venta')->get();
        $ventas = ventas::select('id', 'folio_venta')->get();
        return view('detalle_ventas.edit')
            ->with('detalle_ventas', $detalle_ventas)
            ->with('productos', $productos)
            ->with('ventas', $ventas);
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
        $detalle_ventas = detalle_ventas::find($id);
        $detalle_ventas->update($datos);
        return redirect('/detalle_ventas');
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
        return redirect('/detalle_ventas');
    }
}
