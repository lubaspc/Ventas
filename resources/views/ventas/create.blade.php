@extends('template.mastertemplate3')
<br/><br/><br/><br/>
@section('contenido_oculto')
<!-- Formulario de Ventas-->  
<div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
	<h2>Registro de Ventas</h2> 
	{!! Form::open(['url'=>'/ventas'])!!}    
    	{!! Form::label ('fecha_venta',' Fecha', ['class'=>'control-label col-25 glyphicon glyphicon-calendar'])!!}
      	{!! Form::date ('fecha_venta',null,['required'])!!}   
    <br/><br/>    
      {!! Form::label ('folio_venta',' Folio Venta', ['class'=>'control-label col-25 glyphicon glyphicon-barcode'])!!}
      {!! Form::text ('folio_venta',null, ['placeholder'=>'Ingresa folio de venta', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('id_clientes',' Cliente', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::select ('id_clientes', $clientes->pluck('nombre_cliente', 'id')->all(),null,['placeholder'=>'--Selecciona un cliente--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>  
      {!! Form::label ('id_pagos',' Tipo de Pago', ['class'=>'control-label col-25 glyphicon glyphicon-credit-card'])!!}
      {!! Form::select ('id_pagos', $tipo_pagos->pluck('categoria', 'id')->all(),null,['placeholder'=>'--Selecciona un tipo de pago--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>          
      <input type="hidden" name="iva" value="0">    
      {!! Form::label ('subtotal',' Precio Venta', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('subtotal',null,['placeholder'=>'$900.00', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('total',' Total', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('total',null,['placeholder'=>'$900.00', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('estatus_venta',' Estatus' , ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::select ('estatus_venta', array('7'=>'Pedido', '1'=>'Inicio de producción', '2'=>'Desarrollo de producción', '3'=>'Fin de producción', '4'=>'Proceso de entrega', '5'=>'Enviado', '6'=>'Entregado'),null,['placeholder'=>'--Selecciona--', 'class'=>'col-75 esqrs', 'required']) !!}
    <br/> <br/> <br/>
    <!-- Botones -->
    <div style="text-align: center;">
      <button class="btn btn-success" type="reset">
        <span class="glyphicon glyphicon-remove"></span> Borrar
      </button>  
      <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-ok"></span> Guardar
      </button> 
      {!! Form::close() !!}
    </div>
    <br/>
  </div> 
@endsection()