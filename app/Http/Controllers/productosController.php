<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\categorias;


class productosController extends Controller
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
        $productos = productos::all(); $productos = productos::orderBy('id')->get();
        return view('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categorias::select('id', 'tipo_producto')->get();
        return view('productos.create')
        ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('enlace_imagen')){
            $hora = date("h:i:s");
            $fecha = date("d-m-Y");
            $prefijo = $fecha."_".$hora."_";
            $file = $request->file('enlace_imagen');
            $names = $prefijo.$file->getClientOriginalName();
            $file->move(public_path().'/vistas/productImg/', $names);
            //return $name;        
        }
        
        $trainer = new productos();
        $trainer->nombre_producto = $request->input('nombre_producto');
        $trainer->tamaño_producto = $request->input('tamaño_producto');
        $trainer->cantidad = $request->input('cantidad');
        $trainer->precio_costo = $request->input('precio_costo');
        $trainer->precio_venta = $request->input('precio_venta');
        $trainer->enlace_imagen = $names;
        $trainer->stock_inv = $request->input('stock_inv');
        $trainer->estatus_pedi = $request->input('estatus_pedi');
        $trainer->id_categorias = $request->input('id_categorias');

        $trainer->save();
        //return 'Saved';
        return redirect('/productos');
        
        /*$datos = $request->all();
        $datos->enlace_imagen = $names;
        productos::create($datos);
        return redirect('/productos');*/
        
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
        $productos = productos::find($id);
        $categorias = categorias::select('id', 'tipo_producto')->get();
        return view('productos.edit')
            ->with('productos', $productos)
            ->with('categorias', $categorias);
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
        $productos = productos::find($id);
        $productos->update($datos);
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = productos::find($id);
        $productos->destroy($id);
        return redirect('/productos');
    }
}
