@extends('template.mastertemplate3')
<br/><br/><br/><br/>
@section('contenido_pagos')
<!-- Formulario de Tipo de Pagos-->  
    <div class="container" id="tablapagos" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Registro de Tipos de Pagos</h2>  <br/>  
    {!! Form::open(['url'=>'/tipo_pagos'])!!}    
      {!! Form::label ('categoria',' Tipo de Pago', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('categoria',null,['placeholder'=>'Ingresa nombre del tipo de pago', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_tipago" value="1">   
    <br/>
   <br/><br/> 
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