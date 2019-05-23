@extends('template.mastertemplatec1')
@section('contenido_central')
  <!-- Tabla de ventas-->  
<div align="center" id="ventas">
  <h2>Listado de Pedidos</h2>
  @foreach ($detalle as $detalles)
  <h6>{!!$detalles->nombre_cliente!!}</h6>
  <table class="table tabla" id="tabla">
    <thead>
      <tr>      
        <th scope="col">Fecha venta</th>  
        <th scope="col">Nombre del producto</th>  
        <th scope="col">Folio venta</th>                
        <th scope="col">Cantidad</th>
        <th scope="col">Precio Venta</th>        
        <th scope="col">Total</th>  
        <th scope="col">Estatus</th>      
      </tr>
    </thead>
      
    <tbody>
      <tr>
        <th scope="row">{!! $detalles->fecha_venta !!}</th> 
        <td>{!! $detalles->nombre_producto!!}</td>
        <td>{!! $detalles->folio_venta !!}</td>                       
        <td>{!! $detalles->cantidad !!}</td>
        <td>{!! $detalles->precio_venta !!}</td>
        <td>{!! $detalles->total !!}</td> 
        @switch($detalles->estatus_dtven )
              @case(1)
              <td>Inicio de producción</td>
              @break
              @case(2)
              <td>Desarrollo de producción</td>
              @break
              @case(3)
              <td>Fin de producción</td>
              @break
              @case(4)
              <td>Proceso de entrega</td>
              @break
              @case(5)
              <td>Enviado</td>
              @break
              @case(6)
              <td>Entregado</td>
              @break
              @case(1)
              <td>Pedido</td>
              @break
            @endswitch              
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/clientespedidos/'.$detalles->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
        </td>
      </tr>         
    </tbody>
  </table>
  @endforeach
</div>  
@endsection()