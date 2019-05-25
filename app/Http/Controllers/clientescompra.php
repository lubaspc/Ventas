<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_pagos;
use App\clientes;
use App\detalle_ventas;
use App\ventas;

class clientescompra extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagos=tipo_pagos::where('estatus_tipago','1')->get();
        $cart = \Session::get('cart');
        $total=$this->total();
        return view('clientescompra.create', compact('pagos','cart','total'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        $c=clientes::where('email',$r->email)->first();
        $ventas=new ventas();
        $cart=\Session::get('cart');
        $total=$this->total();
        $iva=$total*0.16;
        $sub=$total-$iva;
        if(isset($c)){
            $ventas->id_clientes=$c->id;
        }else{
            $datos = $r->all();
            $client=clientes::create($datos);
            $ventas->id_clientes=$client->id;
        }
            $ventas->folio_venta=3;
            $ventas->fecha_venta=date("Y-m-d");
            $ventas->subtotal=$sub;
            $ventas->iva=$iva;
            $ventas->total=$total;
            $ventas->estatus_venta=1;
            $ventas->id_pagos=$r->id_pago;
            $ventas->save();
            $ventas->folio_venta='VENTA'.$ventas->id;
            $ventas->save();
            foreach($cart as $p){
                $dv=new detalle_ventas();
                $dv->id_ventas=$ventas->id;
                $dv->cantidad=$p->cantidad;
                $dv->precio_costo=$p->precio_costo;
                $dv->precio_venta=$p->precio_venta;
                $dv->estatus_dtven=1;
                $dv->id_productos=$p->id;
                $dv->save();
            }
            return redirect('/clientescompra/'.$ventas->id);
    }


    private function total(){
        $cart=\Session::get('cart');
        $total=0;
        foreach($cart as $productos){
            $total+=$productos->precio_venta * $productos->cantidad;
        }
        return $total;
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventas=ventas::find($id);
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
