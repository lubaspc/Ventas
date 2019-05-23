@extends('template.mastertemplate3')
<br/><br/><br/><br/>
@section('contenido_oculto')
<!-- Formulario de detalle_detalle_ventas-->  
<div class="container" id="detalle_venta" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">
  <h2>Editar Producto Venta</h2><br/>
	{!! Form::open(['method' => 'PATCH', 'url'=>'/detalle_ventas/'.$detalle_ventas->id]) !!}
    {!! Form::label ('id_productos',' Nombre del producto', ['class'=>'control-label col-25 glyphicon glyphicon-lamp'])!!}
      {!! Form::select ('id_productos', $productos->pluck('nombre_producto', 'id')->all(),$detalle_ventas->id_productos,['placeholder'=>'--Selecciona un producto--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>    
      {!! Form::label ('id_ventas',' Venta', ['class'=>'control-label col-25 glyphicon glyphicon-barcode'])!!}
      {!! Form::label(null,$ventas->folio_venta,['class'=>'col-75 esqrs', 'required']) !!}     
      <input type="hidden" name="id_ventas" value="{{$detalle_ventas->id_ventas}}"> 
    <br/><br/>    
      {!! Form::label ('cantidad',' Cantidad', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('cantidad',$detalle_ventas->cantidad,['placeholder'=>'Ingresa cantidad del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'1000'])!!}   
    <br/><br/><br/>    
      {!! Form::label ('precio_costo',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio_costo',$detalle_ventas->precio_costo,['placeholder'=>'Ingresa cantidad del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'1000', 'disabled'])!!} 
    <br/><br/><br/>   
      {!! Form::label ('precio_venta',' Precio Venta', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('precio_venta',$detalle_ventas->precio_venta,['placeholder'=>'Ingresa cantidad del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'1000'])!!}   
    <br/><br/><br/>
      {!! Form::label ('null',' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::select ('estatus_dtven', array('7'=>'Pedido', '1'=>'Inicio de producción', '2'=>'Desarrollo de producción', '3'=>'Fin de producción', '4'=>'Proceso de entrega', '5'=>'Enviado', '6'=>'Entregado'),$detalle_ventas->estatus_dtven,['placeholder'=>'--Selecciona--', 'class'=>'col-75 esqrs', 'required']) !!}    
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