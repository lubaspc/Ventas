<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cta_bancarias;
use App\clientes;
use App\bancos;

class cta_bancariasController extends Controller
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
        $cta_bancarias = cta_bancarias::all(); $cta_bancarias = cta_bancarias::orderBy('id')->get();
        return view('cta_bancarias.index')->with('cta_bancarias', $cta_bancarias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bancos = bancos::select('id', 'nombre_banco')->get();
        $clientes = clientes::select('id', 'nombre_cliente')->get();        
        return view('cta_bancarias.create')
            ->with('bancos', $bancos)
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
        cta_bancarias::create($datos);
        return redirect('/cta_bancarias');
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
        $cta_bancarias = cta_bancarias::find($id);
        $clientes = clientes::select('id', 'nombre_cliente')->get();
        $bancos = bancos::select('id', 'nombre_banco')->get();
        return view('cta_bancarias.edit')
            ->with('cta_bancarias', $cta_bancarias)
            ->with('clientes', $clientes)
            ->with('bancos', $bancos);
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
        $cta_bancarias = cta_bancarias::find($id);
        $cta_bancarias->update($datos);
        return redirect('/cta_bancarias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cta_bancarias = cta_bancarias::find($id);
        $cta_bancarias->destroy($id);
        return redirect('/cta_bancarias');
    }
}
