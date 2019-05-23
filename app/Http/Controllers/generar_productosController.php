<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\generar_productos;
use App\productos;

class generar_productosController extends Controller
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
        $generar_productos = generar_productos::all();
        $generar_productos = generar_productos::orderBy('id')->get();
        return view('generar_productos.index')->with('generar_productos', $generar_productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = productos::select('id', 'id_categorias')->get();
        return view('generar_productos.create')->with('productos', $productos);
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
        generar_productos::create($datos);
        return redirect('/generar_productos');
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
        $generar_productos = generar_productos::find($id);
        $productos = productos::select('id', 'id_categorias')->get();
        return view('generar_productos.edit')
            ->with('generar_productos', $generar_productos)
            ->with('productos', $productos);
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
        $generar_productos = generar_productos::find($id);
        $generar_productos->update($datos);
        return redirect('/generar_productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generar_productos = generar_productos::find($id);
        $generar_productos->destroy($id);
        return redirect('/generar_productos');
    }
}
