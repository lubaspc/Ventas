@extends('template.mastertemplate3')
<br/><br/><br/><br/>
@section('contenido_central')
  <!-- Tabla de ventas-->  
<div align="center" id="ventas">
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Ventas</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
  <a href="ventas/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Ventas</a>
  <table class="table tabla" id="tabla">
    <thead>
      <tr>      
        <th scope="col">Fecha venta</th>  
        <th scope="col">Folio venta</th>        
        <th scope="col">Cliente</th>
      </tr>
    </thead>
    @foreach($ventas as $ventas)    
    <tbody>
      <tr>
        <th scope="row">{!! $ventas->fecha_venta !!}</th>
        <td>{!! $ventas->folio_venta !!}</td>                
        <td>{!! $ventas->clientes->nombre_cliente !!}</td>
        <td>
          <a href="{!! 'ventas/'.$ventas->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/ventas/'.$ventas->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
        </td>
        <td>
          {!! Form::open(['method' => 'GET', 'url' => '/detalle_ventas/'.$ventas->folio_venta])!!}
         <button type="submit" class="btn">
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
