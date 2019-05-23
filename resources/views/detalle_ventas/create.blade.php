@extends('template.mastertemplate3')
<br/><br/><br/><br/>
<script>
    function cambiar_combo(id_productos){
      alert("si entre");
        $("#precio_costo").empty();
        alert("voy aqui id prod " + id_productos);
        $.ajax({
                type:'GET',
                url:'../combo_prod/'+ id_productos,                 
                success:function(data){                
                    var productos = data;

                    for (var i = 0; i < productos.length; i++) {
                        $('#precio_costo').append('<option value="' + productos[i].precio_costo + '">' + productos[i].precio_costo + '</option>');
                        $('#precio_venta').append('<option value="' + productos[i].precio_venta + '">' + productos[i].precio_venta + '</option>');
                    }
                }
        });
    }

</script>

@section('contenido_oculto')
<!-- Formulario de detalle_ventas-->  
<div class="container" id="detalle_venta" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">
  <h2>Registro de Producto Venta</h2><br/>
	{!! Form::open(['url'=>'/detalle_ventas'])!!}      

      {!! Form::label ('id_productos',' Nombre del producto', ['class'=>'control-label col-25 glyphicon glyphicon-lamp'])!!}
      {!! Form::select ('id_productos', $productos->pluck('nombre_producto', 'id')->all(),null,['class'=>'col-75 esqrs','placeholder'=>'Seleccionar ...','onchange'=>'cambiar_combo(this.value);']) !!}  
    <br/><br/>    



      {!! Form::label (null,' Venta', ['class'=>'control-label col-25 glyphicon glyphicon-barcode'])!!}
      {!! Form::label(null,$venta->folio_venta,['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="id_ventas" value="{{$venta->id}}">
    <br/><br/>    
      {!! Form::label (null,' Cantidad', ['class'=>'control-label col-25 glyphicon glyphicon-plus-sign'])!!}
      {!! Form::text ('cantidad',null,['placeholder'=>'Ingresa cantidad del producto', 'class'=>'esqr col-75', 'required', 'maxlength'=>'1000'])!!}   
    <br/><br/><br/>    



      {!! Form::label ('precio_costo',' Precio Costo', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::select ('precio_costo', array()  , null ,['class'=>'col-75 esqrs', 'required'])!!} 
    <br/><br/><br/> 
      {!! Form::label ('precio_venta',' Precio Venta', ['class'=>'control-label col-25 glyphicon glyphicon-usd'])!!}
      {!! Form::select ('precio_venta', array() , null ,['class'=>'col-75 esqrs', 'required'])!!} 
    <br/><br/>   


      {!! Form::label ('null',' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::select ('estatus_dtven', array('7'=>'Pedido', '1'=>'Inicio de producción', '2'=>'Desarrollo de producción', '3'=>'Fin de producción', '4'=>'Proceso de entrega', '5'=>'Enviado', '6'=>'Entregado'),null,['placeholder'=>'--Selecciona--', 'class'=>'col-75 esqrs', 'required']) !!}
    <br/> <br/> 
    <!-- Botones -->
    <div style="text-align: center;">
      <button class="btn btn-success" type="reset">
        <span class="glyphicon glyphicon-remove"></span> Borrar
      </button>  
      <button class="btn btn-primary" type="submit" onclick="ejecutar(document.getElementById('id_ventas'),document.getElementById('cantidad').value,document.getElementById('precio_venta').value );">
        <span class="glyphicon glyphicon-ok"></span> Guardar
      </button> 
      {!! Form::close() !!}
    </div>
    <br/>
  </div> 
@endsection()