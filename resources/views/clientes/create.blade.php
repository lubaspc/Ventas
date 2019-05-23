@extends('template.mastertemplate4')
<br/>  <br/><br/>  <br/>
@section('contenido_oculto')
 <!-- REGISTRO DE Clientes -->  
  <div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Registro de Clientes</h2>
    <br/>    
    {!! Form::open(['url'=>'/clientes'])!!}      
      {!! Form::label ('nombre_cliente',' Nombre del Cliente', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('nombre_cliente',null,['placeholder'=>'Ingresa nombre del cliente', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'40'])!!}   
      <br/><br/><br/> 
      {!! Form::label ('ap_paterno',' Apellido Paterno', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('ap_paterno',null,['placeholder'=>'Ingresa apellido paterno', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'40'])!!}   
      <br/><br/><br/>   
      {!! Form::label ('ap_materno',' Apellido Materno', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('ap_materno',null,['placeholder'=>'Ingresa apellido materno', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'40'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('email',' Email', ['class'=>'control-label col-25 glyphicon glyphicon-envelope'])!!}
      {!! Form::text ('email',null,['placeholder'=>'nombre@hotmail.com', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'80'])!!}   
      <br/><br/><br/> 
      {!! Form::label ('telefono',' Teléfono', ['class'=>'control-label col-25 glyphicon glyphicon-phone-alt'])!!}
      {!! Form::text ('telefono',null,['placeholder'=>'+52 7229634115', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'10'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('codigo_postal',' Código Postal', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('codigo_postal',null,['placeholder'=>'Ingrese Código Postal', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'5'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('calle',' Calle', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('calle',null,['placeholder'=>'Ingrese calle', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'100'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('colonia',' Colonia', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('colonia',null,['placeholder'=>'Ingrese colonia', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'100'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('no_interior',' No. Interior', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('no_interior',null,['placeholder'=>'Ingrese No. Interior', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'5'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('no_exterior',' No. Exterior', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('no_exterior',null,['placeholder'=>'Ingrese No.Exterior', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'5'])!!}   
      <br/><br/><br/> 
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_cliente" value="1"> 
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