@extends('template.mastertemplate1')
@section('contenido_central')
<div id="pedidos" class="container" align="center"><br/><br/>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pedidos </h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
  <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
  </div>
	<table class="table tabla" id="tabla">
		<thead>
			<tr>      
				<th scope="col">Fecha</th>  
        		<th scope="col">Nombre del producto</th>  
        		<th scope="col">Folio</th>        
        		<th scope="col">Nombre cliente</th>
        		<th scope="col">Cantidad</th>
        		<th scope="col">Precio</th>
        		<th scope="col">Total</th>        
        		<th scope="col">Estatus</th>  
      		</tr>
    	</thead>
    @foreach($detalle_ventas as $detalle_ventas)    
    <tbody>
    	<tr>
    		<th scope="row">{!! $detalle_ventas->ventas->fecha_venta !!}</th> 
        	<td>{!! $detalle_ventas->productos->nombre_producto!!}</td>
        	<td>{!! $detalle_ventas->ventas->folio_venta !!}</td>                
        	<td>{!! $detalle_ventas->ventas->clientes->nombre_cliente !!}</td>  
	        <td>{!! $detalle_ventas->cantidad !!}</td>
        	<td>{!! $detalle_ventas->productos->precio_venta !!}</td>
        	<td>{!! $detalle_ventas->ventas->total !!}</td>
          @switch($detalle_ventas->estatus_dtven )
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
              @case(7)
              <td>Pedido</td>
              @break
            @endswitch
        	<td>
        		<a href="{!! 'detalle_ventas/'.$detalle_ventas->id.'/edit'!!}" class="btn" type="button">
            	<span class="glyphicon glyphicon-edit"></span> Editar
          		</a>
          </td>
       		<td>
       			<a href="#" class="btn">
            		<span class="glyphicon glyphicon-send"></span> Enviar
          		</a>
       		</td>
      	</tr>         
    </tbody>
    @endforeach
  </table>                
</div>
@endsection()