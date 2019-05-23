@extends('template.mastertemplate4')
@section('contenido_cta_bancarias')
<br/>  <br/><br/>  <br/>
<!-- Formulario de cta_bancaria-->  
    <div class="container" id="cta_bancariasformulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Registro de cta_bancarias</h2> 
    {!! Form::open(['method' => 'PATCH', 'url'=>'/cta_bancarias/'.$cta_bancarias->id]) !!}
    {!! Form::label ('id_clientes',' Cliente', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::select ('id_clientes', $clientes->pluck('nombre_cliente', 'id')->all(),$cta_bancarias->id_clientes,['placeholder'=>'--Selecciona un cliente--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/>     <br/> 
      {!! Form::label ('id_bancos',' Banco', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::select ('id_bancos', $bancos->pluck('nombre_banco', 'id')->all(),$cta_bancarias->id_bancos,['placeholder'=>'--Selecciona un banco--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/>  <br/>    
      {!! Form::label ('tipo_cuenta',' Tipo de Cta Bancaria', ['class'=>'control-label col-25 glyphicon glyphicon-credit-card'])!!}
      {!! Form::select ('tipo_cuenta', array('Debito'=>'Debito', 'Credito'=>'Credito'),$cta_bancarias->tipo_cuenta,['placeholder'=>'--Selecciona tipo de cta--', 'class'=>'col-75 esqrs', 'required']) !!}   
    <br/>  <br/>   
      {!! Form::label ('numero_cuenta',' Número de Cuenta', ['class'=>'control-label col-25 glyphicon glyphicon-credit-card'])!!}
      {!! Form::text ('numero_cuenta',$cta_bancarias->numero_cuenta,['placeholder'=>'Ingresa número de cuenta', 'class'=>'esqr col-75', 'required', 'maxlength'=>'16'])!!}   
    <br/>  <br/> <br/>   
      {!! Form::label ('fecha_vencimiento',' Fecha de vencimiento', ['class'=>'control-label col-25 glyphicon glyphicon-calendar'])!!}
      {!! Form::date ('fecha_vencimiento',$cta_bancarias->fecha_vencimiento)!!}   
    <br/>  <br/>       
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_banco" value="1"> 
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
    <br/><br/> 
  </div> 
@endsection()