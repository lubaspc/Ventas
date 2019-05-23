@extends('template.mastertemplate2')
<br/><br/><br/><br/>
@section('contenido_central')
 <!-- Tabla de productos-->
<div align="center" class="container" id="productos_Registrados">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Productos</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
  <a href="productos/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Productos</a>
	<table class="table tabla" id="tabla">
		<thead>
          <tr>
            <th scope="col">Tipo Producto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>            
          </tr>
        </thead>
        @foreach($productos as $productos)
        <tbody>
          <tr>            
            <th scope="row">{!! $productos->categorias->tipo_producto !!}</th>
            <td>{!! $productos->nombre_producto !!}</td>
            <td>{!! $productos->cantidad !!}</td>
            <td>{!! $productos->precio_venta !!}</td>
            <td>
              <a href="{!! 'productos/'.$productos->id.'/edit'!!}" class="btn" type="button">
                <span class="glyphicon glyphicon-edit"></span> Editar
              </a></td>
            <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/productos/'.$productos->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
                {!! Form::close()!!} 
            </td>            
          </tr>
        </tbody>
        @endforeach
    </table>     
</div> 

<br/><br/><br/><br/> 
@endsection()
