@extends('template.mastertemplate3')
<br/><br/><br/><br/>
@section('contenido_central')
  <!-- Tabla de ventas-->  
<div align="center" id="ventas">
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Detalle Ventas</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
<!-- TABLA CON PRODUCTOS EN LAS VENTAS-->
  <table class="table tabla" id="tabla">
    <thead>
      <tr>      
        <th scope="col">Fecha venta</th>  
        <th scope="col">Nombre del producto</th>  
        <th scope="col">Folio venta</th>        
        <th scope="col">Nombre cliente</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio Venta</th>
        <th scope="col">Total</th>        
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
        <td>
          <a href="{!! 'detalle_ventas/'.$detalle_ventas->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/detalle_ventas/'.$detalle_ventas->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
        </td>
        <td>
          {!! Form::open(['method' => 'GET', 'url' => '/detalle_ventas/'.$detalle_ventas->id_ventas])!!}
         <button type="submit" class="btn" name="hola" value="1">
            <span class="glyphicon glyphicon-plus-sign"></span> Agregar Producto
          </button>
           {!! Form::close()!!} 
        </td>
      </tr>         
    </tbody>
    @endforeach
  </table>
</div>  
@endsection()