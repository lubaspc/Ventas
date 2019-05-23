<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores;
use App\ventas;
use App\detalle_ventas;
use App\clientes;
use App\pagos;



class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           return view ('pdf.listadoreportes');
    }


    
    
    public function crearPDF($datos,$vistaurl,$tipo)
    {
    $data=$datos;
    $date=date('d-m-Y');
    $time=time();
    $view= \View::make($vistaurl,compact('data','date','time'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    if($tipo==1){return $pdf->stream('reporte');}
    if($tipo==2){return $pdf->download('reporte');}

    
    }
    
    
    public function crear_reporte_ventas($tipo){
    $vistaurl="pdf.crear_reporte_ventas";
    $ventas=ventas::all();
    
    return $this->crearPDF($ventas,$vistaurl,$tipo);
    }
    
    
    public function crear_reporte_proveedores($tipo){
    $vistaurl="pdf.crear_reporte_proveedores";
    $proveedores=proveedores::all();
    return $this->crearPDF($proveedores,$vistaurl,$tipo);
    }
    
    

    
    
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
