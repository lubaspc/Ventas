<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumos;
use App\proveedores;

class insumosController extends Controller
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
        $insumos = insumos::all();
        $insumos = insumos::orderBy('id')->get();
        return view('insumos.index')->with('insumos', $insumos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = proveedores::select('id', 'nombre_prov')->get();
        return view('insumos.create')->with('proveedores', $proveedores);
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
        insumos::create($datos);
        return redirect('/insumos');
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
        $insumos = insumos::find($id);
        $proveedores = proveedores::select('id', 'nombre_prov')->get();
        return view('insumos.edit')
            ->with('insumos', $insumos)
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
        $insumos = insumos::find($id);
        $insumos->update($datos);
        return redirect('/insumos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insumos = insumos::find($id);
        $insumos->destroy($id);
        return redirect('/insumos');
    }
}
