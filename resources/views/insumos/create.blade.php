@extends('template.mastertemplate6')
@section('contenido_insumos')
<br/>  <br/><br/>  <br/>
<!-- Formulario de Insumo-->  
    <div class="container" id="insumosformulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Registro de Insumos</h2> <br/>
    {!! Form::open(['url'=>'/insumos'])!!}    
      {!! Form::label ('nombre_insumo',' Nombre del Insumo', ['class'=>'control-label col-25 glyphicon glyphicon-lamp'])!!}
      {!! Form::text ('nombre_insumo',null,['placeholder'=>'Ingresa nombre del insumo', 'class'=>'esqr col-75', 'required', 'maxlength'=>'100'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('detalles',' Detalles', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::text ('detalles',null,['placeholder'=>'Ingresa detalles', 'class'=>'esqr col-75', 'required', 'maxlength'=>'250'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('id_proveedores',' Proveedor', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::select ('id_proveedores', $proveedores->pluck('nombre_prov', 'id')->all(),null,['placeholder'=>'--Selecciona un proveedor--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>    
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_ins" value="1"> 
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