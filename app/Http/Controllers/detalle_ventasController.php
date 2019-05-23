<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_ventas;
use App\ventas;
use App\productos;

class detalle_ventasController extends Controller
{
    public function _construct(){
        $this->middleware('usuarioAdmin');
    }

    public function combo($id_productos){        
        $productos = productos::select('id', 'precio_costo', 'precio_venta')
                    ->where('id', $id_productos)
                    ->get();
        return $productos;
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
        return view('detalle_ventas.index')->with('detalle_ventas', $detalle_ventas);
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
    public function store(Request $r)
    {
       //return $r->all();
        $datos = $r->all();
        $ventas=ventas::find($r->id_ventas);
        $ventas->total=$ventas->total+($r->precio_venta*$r->cantidad);
        $ventas->save();
        detalle_ventas::create($datos);
        //actualizar sub iva tot
        /*
        */
       // return $r->all();
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
         $ventas = ventas::select('id', 'folio_venta', 'estatus_venta')->
                     where('folio_venta',$id)
                     ->get()->first();
              if(empty($ventas)){
                  $ventas = ventas::select('id', 'folio_venta', 'estatus_venta')->
                     where('id',$id)->get()->first();
              }      
        $productos = productos::select('id', 'nombre_producto', 'precio_costo', 'precio_venta')->get(); 
        //return $ventas;       
        return view('detalle_ventas.create')
            ->with('venta', $ventas)
            ->with('productos', $productos);

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
        $producto = productos::find($detalle_ventas->id_productos);
        $ventas = ventas::select('id', 'folio_venta')->
                where('id', $detalle_ventas->id_ventas)
                     ->first();                     
        return view('detalle_ventas.edit')
            ->with('detalle_ventas', $detalle_ventas)
            ->with('productos', $producto)
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
        //return $request->all();
        $datos = $request->all();
        $detalle_ventas = detalle_ventas::find($id);
        $ventas=ventas::find($request->id_ventas);
        $ventas->total=$ventas->total-($detalle_ventas->precio_venta*$detalle_ventas->cantidad);
        $ventas->save();
        $ventas->total=$ventas->total+($request->precio_venta*$request->cantidad);
        $ventas->save();
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
        $ventas=ventas::find($detalle_ventas->id_ventas);
        $ventas->total=$ventas->total-($detalle_ventas->precio_venta*$detalle_ventas->cantidad);
        $ventas->save();
        $detalle_ventas->destroy($id);
        return redirect('/detalle_ventas');
    }
}
