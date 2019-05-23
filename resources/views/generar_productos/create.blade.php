@extends('template.mastertemplate7')
<br/><br/><br/><br/>
@section('contenido_oculto')
<!-- Formulario de generar_productos-->  
<div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
	<h2>Registro de Producciones</h2><br/>
	{!! Form::open(['url'=>'/generar_productos'])!!}    
      {!! Form::label ('id_productos',' Tipo de producto', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::select ('id_productos', $productos->pluck('id_categorias', 'id')->all(),null,['placeholder'=>'--Selecciona una categoria--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>    
      {!! Form::label ('nombre_prod',' Nombre del producto', ['class'=>'control-label col-25 glyphicon glyphicon-lamp'])!!}
      {!! Form::text ('nombre_prod',null,['placeholder'=>'Ingresa nombre del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'150'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('cantidad',' Cantidad', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('cantidad',null,['placeholder'=>'Ingresa cantidad del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'1000'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('precio_costo',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio_costo',null,['placeholder'=>'$900.00', 'class'=>'esqr col-75', 'required', 'maxlength'=>'100'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('estatus_grp',' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::select ('estatus_grp', array('1'=>'Inicio de producción', '2'=>'Desarrollo de producción', '3'=>'Fin de producción'),null,['placeholder'=>'--Selecciona--', 'class'=>'col-75 esqrs', 'required']) !!}
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