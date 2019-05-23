@extends('template.mastertemplate6')
<br/>  <br/><br/>  <br/>
@section('contenido_oculto')
<div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Registro de Proveedores</h2> 
    {!! Form::open(['url'=>'/proveedores'])!!}    
      {!! Form::label ('nombre_prov',' Nombre Proveedor', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('nombre_prov',null,['placeholder'=>'Ingresa nombre completo del proveedor', 'class'=>'esqr col-75', 'required', 'maxlength'=>'100'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('direccion',' Dirección', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('direccion',null,['placeholder'=>'Ingrese la dirección', 'class'=>'esqr col-75', 'required', 'maxlength'=>'100'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('rfc',' RFC', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::text ('rfc',null,['placeholder'=>'Ingresa RFC', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('email',' Email', ['class'=>'control-label col-25 glyphicon glyphicon-envelope'])!!}
      {!! Form::text ('email',null,['placeholder'=>'nombre@gmail.com', 'class'=>'esqr col-75', 'required', 'maxlength'=>'60'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('telefono',' Teléfono', ['class'=>'control-label col-25 glyphicon glyphicon-phone-alt'])!!}
      {!! Form::text ('telefono',null,['placeholder'=>'+52 7229634115', 'class'=>'esqr col-75', 'required', 'maxlength'=>'10'])!!}   
    <br/><br/><br/>    
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_prov" value="1"> 
    <br/>
    <!--<span class="glyphicon glyphicon-credit-card"></span>
      {!! Form::label ('estatus_prov','Tipo de insumo')!!}
      {!! Form::text ('estatus_prov',null,['placeholder'=>''])!!}-->   
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