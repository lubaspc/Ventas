@extends('template.mastertemplate5')
<br/>  <br/><br/>  <br/>
@section('contenido_oculto')
<!-- Formulario de Insumo-->  
    <div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Editar Compra</h2> <br/>
    {!! Form::open(['method' => 'PATCH', 'url'=>'/pedidos/'.$pedidos->id]) !!}
    {!! Form::label ('fecha',' Fecha', ['class'=>'control-label col-25 glyphicon glyphicon-calendar'])!!}
      {!! Form::date ('fecha',$pedidos->fecha,['required'])!!}   
    <br/><br/>
      {!! Form::label ('id_proveedores',' Proveedor', ['class'=>'control-label col-25 glyphicon glyphicon-user'])!!}
      {!! Form::select ('id_proveedores', $proveedores->pluck('nombre_prov', 'id')->all(),$pedidos->id_proveedores,['placeholder'=>'--Selecciona un proveedor--', 'class'=>'col-75 esqrs', 'required']) !!}  
    <br/><br/>    
      {!! Form::label ('referencia',' Referencia' , ['class'=>'control-label col-25 glyphicon glyphicon-list-alt'])!!}
      {!! Form::select ('referencia', $proveedores->pluck('direccion', 'id')->all(),$pedidos->referencia,['placeholder'=>'--Selecciona una referencia --', 'class'=>'col-75 esqrs', 'required']) !!}   
    <br/><br/>    
      {!! Form::label ('iva',' Cantidad de insumos', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('iva',$pedidos->iva,['placeholder'=>'Ingresa cantidad de insumos', 'class'=>'esqr col-75', 'required', 'maxlength'=>'100'])!!}
    <br/><br/><br/>    
      {!! Form::label ('subtotal',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('subtotal',$pedidos->subtotal,['placeholder'=>'$500.00', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}
    <br/><br/><br/>
    <!-- ESTE SE DEBE CALCULAR A PARTIR DEL Precio-->    
      {!! Form::label ('total',' Total', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::text ('total',$pedidos->total,['placeholder'=>'$1000.00', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!} 
    <br/><br/><br/>   
       {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_pedi" value="1"> 
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