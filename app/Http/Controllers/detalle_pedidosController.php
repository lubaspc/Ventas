<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_pedidos;
use App\pedidos;
use App\insumos;

class detalle_pedidosController extends Controller
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
        $detalle_pedidos = detalle_pedidos::all();
        $detalle_pedidos = detalle_pedidos::orderBy('id')->get();
        return view('detalle_pedidos.index')
        ->with('detalle_pedidos', $detalle_pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumos = insumos::select('id', 'nombre_insumo')->get();
        $pedidos = pedidos::select('id', 'id_proveedores', 'referencia', 'fecha')->get();        
        return view('detalle_pedidos.create')
            ->with('insumos', $insumos)
            ->with('pedidos', $pedidos);
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
        detalle_pedidos::create($datos);
        return redirect('/detalle_pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidos = pedidos::select('id', 'id_proveedores', 'fecha')->
                    where('id_proveedores','fecha',$id)->
                    get()->first();
              if(empty($pedidos)){
                  $pedidos = pedidos::select('id', 'id_proveedores', 'fecha')->
                     where('id',$id)->get()->first();
              }      
        $insumos = insumos::select('id', 'nombre_insumo')->get();        
        return view('detalle_pedidos.create')
            ->with('pedido', $pedidos)
            ->with('insumos', $insumos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle_pedidos = detalle_pedidos::find($id);
        $pedidos = pedidos::select('id', 'id_proveedores', 'referencia', 'fecha')->
        where('id', $detalle_pedidos->id_pedidos)->
                    first();
        $insumos = insumos::select('id', 'nombre_insumo')->get();
        return view('detalle_pedidos.edit')
            ->with('detalle_pedidos', $detalle_pedidos)
            ->with('pedidos', $pedidos)
            ->with('insumos', $insumos);
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
        $detalle_pedidos = detalle_pedidos::find($id);
        $detalle_pedidos->update($datos);
        return redirect('/detalle_pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_pedidos = detalle_pedidos::find($id);
        $detalle_pedidos->destroy($id);
        return redirect('/detalle_pedidos');
    }
}
