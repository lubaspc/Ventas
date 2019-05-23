@extends('template.mastertemplate2')
<br/><br/><br/><br/>
@section('contenido_oculto')
<div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Registro de productos</h2>
    {!! Form::open(['url'=>'/productos','role'=>'form','enctype'=>'multipart/form-data']) !!}      
      {!! Form::label ('id_categorias',' Tipo de Producto', ['class'=>'control-label col-25 glyphicon glyphicon-lamp'])!!}
      {!! Form::select ('id_categorias', $categorias->pluck('tipo_producto', 'id')->all(),null,['placeholder'=>'-- Selecciona una categoria --', 'class'=>'col-75 esqrs', 'required']) !!} 
      <br/><br/>      
      {!! Form::label ('nombre_producto',' Nombre', ['class'=>'control-label col-25 glyphicon glyphicon-bed'])!!}
      {!! Form::text ('nombre_producto',null,['placeholder'=>'Ingresa nombre del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'100'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('tamaño_producto',' Tamaño', ['class'=>'control-label col-25 glyphicon glyphicon-resize-small'])!!}
      {!! Form::text ('tamaño_producto',null,['placeholder'=>'ancho x altura', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
      <br/><br/><br/> 
      <!-- SE DEBE YA TRAER UN VALOR POR DEFECTO SEGÚN LA CANTIDAD QUE SE TENGA -->
      {!! Form::label ('stock_inv',' Grosor', ['class'=>'control-label col-25 glyphicon glyphicon-resize-small'])!!}
      {!! Form::text ('stock_inv',null,['placeholder'=>'Ingresa grosor del mueble', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('cantidad',' Cantidad', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('cantidad',null,['placeholder'=>'cantidad', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('precio_costo',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio_costo',null,['placeholder'=>'Precio de producción', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
      <br/><br/><br/>      
      {!! Form::label ('precio_venta',' Precio Venta', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio_venta',null,['placeholder'=>'Precio de venta', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}   
      <br/><br/><br/> 
      <!-- IMAGEN  -->     
      {!! Form::label ('enlace_imagen',' Imagen', ['class'=>'control-label col-25 glyphicon glyphicon-picture'])!!}
      {!! Form::file ('enlace_imagen', null, ['requied', 'class'=>'form-control']) !!}  
      <br/>
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_pedi" value="1">
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
  </div>
@endsection()


