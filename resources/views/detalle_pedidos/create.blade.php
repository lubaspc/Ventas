@extends('template.mastertemplate5')
<br/><br/><br/><br/>
@section('contenido_oculto')
<!-- Formulario de detalle_pedidos-->  
<div class="container" id="detalle_venta" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">
  <h2>Registro de Compras</h2>
	{!! Form::open(['url'=>'/detalle_pedidos'])!!}           
      {!! Form::label (null,' Fecha de Compra', ['class'=>'control-label col-25 glyphicon glyphicon-calendar'])!!}
      {!! Form::label(null,$pedido->fecha,['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="id_pedidos" value="{{$pedido->id}}"> 
    <br/><br/>    
      {!! Form::label ('id_insumos',' Nombre del insumo', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::select ('id_insumos', $insumos->pluck('nombre_insumo', 'id')->all(),null,['placeholder'=>'--Selecciona insumo--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>      
      {!! Form::label ('cantidad',' Cantidad', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('cantidad',null,['placeholder'=>'Ingresa cantidad del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'1000'])!!}   
    <br/><br/><br/>     
      {!! Form::label ('precio',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio',null,['placeholder'=>'Ingresa precio del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>      
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_dtpe" value="1"> 
      <br/>  
    <br/> <br/> 
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