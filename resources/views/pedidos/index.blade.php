@extends('template.mastertemplate5')
@section('contenido_central')
<br/>  <br/><br/>  <br/>
<!-- Tabla de compras-->  
    <div align="center" id="compras">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Compras</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="pedidos/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Compras</a>
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre del proveedor</th>
          </tr>
        </thead>
        @foreach($pedidos as $pedidos)
        <tbody>
          <tr>
            <th scope="row">{!! $pedidos->fecha !!}</th>
            <td>{!! $pedidos->proveedores->nombre_prov!!}</td>
            <td>
                <a href="{!! 'pedidos/'.$pedidos->id.'/edit'!!}" class="btn" type="button">
                  <span class="glyphicon glyphicon-edit"></span> Editar
                </a>
            </td>
            <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/pedidos/'.$pedidos->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
            </td>
            <td>
              {!! Form::open(['method' => 'GET', 'url' => '/detalle_pedidos/'.$pedidos->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-plus-sign"></span> Agregar Insumos
              </button>
              {!! Form::close()!!} 
            </td>
            <!--td>
              <a href="detalle_pedidos/create" class="btn" type="button">
                <span class="glyphicon glyphicon-plus-sign"></span> Agregar Producto
              </a>
            </td-->
          </tr>                    
        </tbody>
        @endforeach        
      </table>
    </div> 
@endsection()