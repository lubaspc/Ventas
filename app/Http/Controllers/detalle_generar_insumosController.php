<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_generar_insumos;
use App\insumos;
use App\generar_productos;

class detalle_generar_insumosController extends Controller
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
        $detalle_generar_insumos = detalle_generar_insumos::all();
        $detalle_generar_insumos = detalle_generar_insumos::orderBy('id')->get();
        return view('detalle_generar_insumos.index')
        ->with('detalle_generar_insumos', $detalle_generar_insumos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumos = insumos::select('id', 'nombre_insumo')->get();
        $generar_productos = generar_productos::select('id', 'nombre_prod', 'precio_costo')->get();        
        return view('detalle_generar_insumos.create')
            ->with('insumos', $insumos)
            ->with('generar_productos', $generar_productos);
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
        detalle_generar_insumos::create($datos);
        return redirect('/detalle_generar_insumos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generar_productos = generar_productos::select('id', 'nombre_prod')->
                     where('nombre_prod',$id)->
                    get()->first();
              if(empty($generar_productos)){
                  $generar_productos = generar_productos::select('id', 'nombre_prod')->
                     where('id',$id)->get()->first();
              }      
        $insumos = insumos::select('id', 'nombre_insumo')->get();        
        return view('detalle_generar_insumos.create')
            ->with('generar_producto', $generar_productos)
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
        $detalle_generar_insumos = detalle_generar_insumos::find($id);
        $generar_productos = generar_productos::select('id', 'nombre_prod', 'precio_costo')->
        where('id',$detalle_generar_insumos->id_generarproductos)->
            first();
        $insumos = insumos::select('id', 'nombre_insumo')->get();
        return view('detalle_generar_insumos.edit')
            ->with('detalle_generar_insumos', $detalle_generar_insumos)
            ->with('generar_productos', $generar_productos)
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
        $detalle_generar_insumos = detalle_generar_insumos::find($id);
        $detalle_generar_insumos->update($datos);
        return redirect('/detalle_generar_insumos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_generar_insumos = detalle_generar_insumos::find($id);
        $detalle_generar_insumos->destroy($id);
        return redirect('/detalle_generar_insumos');
    }
}
