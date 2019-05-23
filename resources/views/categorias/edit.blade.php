@extends('template.mastertemplate2')
<br/><br/><br/><br/>
@section('contenido_categorias')
  <!-- Formulario de Tipo de Producto-->  
    <div class="container" id="tablacategorias" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Editar Tipos de Productos</h2> 
    <br/>   
    {!! Form::open(['method' => 'PATCH', 'url'=>'/categorias/'.$categorias->id])!!}
    {!! Form::label ('tipo_producto',' Tipo de Producto', ['class'=>'control-label col-25 glyphicon glyphicon-lamp'])!!}
      {!! Form::text ('tipo_producto',$categorias->tipo_producto,['placeholder'=>'Ingresa nombre del tipo de producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('descripcion',' Descripción', ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::text ('descripcion',$categorias->descripcion,['placeholder'=>'Ingresa una breve descripción', 'class'=>'esqr col-75', 'required', 'maxlength'=>'150'])!!}   
    <br/><br/><br/>    
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_cat" value="1"> 
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
    <br/><br/>
  </div>
@endsection()

