@extends('template.mastertemplate7')
<br/><br/><br/><br/>
@section('contenido_oculto')
<!-- Formulario de detalle_generar_insumos-->  
<div class="container" id="detalle_venta" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">
  <h2>Registro de Insumos de Producción</h2><br/>
	{!! Form::open(['url'=>'/detalle_generar_insumos'])!!}
      {!! Form::label (null,' Nombre del producto', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::label(null,$generar_producto->nombre_prod,['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="id_generarproductos" value="{{$generar_producto->id}}"> 
    <br/><br/>       
      {!! Form::label ('id_insumos',' Insumo', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::select ('id_insumos', $insumos->pluck('nombre_insumo', 'id')->all(),null,['placeholder'=>'--Selecciona insumo--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>            
      {!! Form::label ('categoria',' Categoria', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('categoria',null,['placeholder'=>'Ingresa categoria', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('precio_costo',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio_costo',null,['placeholder'=>'Ingresa precio del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'10'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('estatus_dtin',' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::select ('estatus_dtin', array('1'=>'Inicio de producción', '2'=>'Desarro de producción', '3'=>'Fin de producción'),null,['placeholder'=>'--Selecciona--', 'class'=>'col-75 esqrs', 'required']) !!}
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
    <br/><br/> 
  </div> 
@endsection()