@extends('template.mastertemplate4')
<br/>  <br/><br/>  <br/>
@section('contenido_oculto')
 <!-- REGISTRO DE Clientes -->  
  <div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Editar Cliente</h2>
    {!! Form::open(['method' => 'PATCH', 'url'=>'/clientes/'.$clientes->id])!!}
      {!! Form::label ('nombre_cliente',' Nombre del Cliente', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('nombre_cliente',$clientes->nombre_cliente,['placeholder'=>'Ingresa nombre del cliente', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'40'])!!}   
      <br/><br/><br/> 
      {!! Form::label ('ap_paterno',' Apellido Paterno', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('ap_paterno',$clientes->ap_paterno,['placeholder'=>'Ingresa apellido paterno', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'40'])!!}   
      <br/><br/><br/>   
      {!! Form::label ('ap_materno',' Apellido Materno', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::text ('ap_materno',$clientes->ap_materno,['placeholder'=>'Ingresa apellido materno', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'40'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('email',' Email', ['class'=>'control-label col-25 glyphicon glyphicon-envelope'])!!}
      {!! Form::text ('email',$clientes->email,['placeholder'=>'nombre@hotmail.com', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'80'])!!}   
      <br/><br/><br/> 
      {!! Form::label ('telefono',' Teléfono', ['class'=>'control-label col-25 glyphicon glyphicon-phone-alt'])!!}
      {!! Form::text ('telefono',$clientes->telefono,['placeholder'=>'+52 7229634115', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'10'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('codigo_postal',' Código Postal', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('codigo_postal',$clientes->codigo_postal,['placeholder'=>'Ingrese Código Postal', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'5'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('calle',' Calle', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('calle',$clientes->calle,['placeholder'=>'Ingrese calle', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'100'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('colonia',' Colonia', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('colonia',$clientes->colonia,['placeholder'=>'Ingrese colonia', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'100'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('no_interior',' No. Interior', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('no_interior',$clientes->no_interior,['placeholder'=>'Ingrese No. Interior', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'5'])!!}   
      <br/><br/><br/>       
      {!! Form::label ('no_exterior',' No. Exterior', ['class'=>'control-label col-25 glyphicon glyphicon-home'])!!}
      {!! Form::text ('no_exterior',$clientes->no_exterior,['placeholder'=>'Ingrese No.Exterior', 'class'=>'col-75 esqr', 'required', 'maxlength'=>'5'])!!}   
      <br/><br/><br/> 
      {!! Form::label ('estatus_cliente',' Estatus Cliente', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::select ('estatus_cliente', array('1'=>'Activo', '0'=>'Inactivo'),$clientes->estatus_cliente,['placeholder'=>'Selecciona', 'class'=>'col-75 esqrs', 'required']) !!}
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