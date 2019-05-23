@extends('template.mastertemplate5')
<br/><br/><br/><br/>
@section('contenido_central')  
<div align="center" id="pedidos">
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Detalle Compras</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
<!-- TABLA CON PRODUCTOS EN LAS Pedidos-->
  <table class="table tabla" id="tabla">
    <thead>
      <tr>      
        <th scope="col">Fecha compra</th>  
        <th scope="col">Nombre del insumo</th>  
        <th scope="col">Nombre proveedor</th>
        <th scope="col">Teléfono proveedor</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio Costo</th>
        <th scope="col">Total</th>        
      </tr>
    </thead>
    @foreach($detalle_pedidos as $detalle_pedidos)    
    <tbody>
      <tr>
        <th scope="row">{!! $detalle_pedidos->pedidos->fecha !!}</th> 
        <td>{!! $detalle_pedidos->insumos->nombre_insumo!!}</td>
        <td>{!! $detalle_pedidos->pedidos->proveedores->nombre_prov !!}</td>  
        <td>{!! $detalle_pedidos->pedidos->proveedores->telefono !!}</td> 
        <td>{!! $detalle_pedidos->cantidad !!}</td>
        <td>{!! $detalle_pedidos->precio !!}</td>
        <td>{!! $detalle_pedidos->pedidos->total !!}</td>        
        <td>
          <a href="{!! 'detalle_pedidos/'.$detalle_pedidos->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/detalle_pedidos/'.$detalle_pedidos->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
        </td>
        <td>
          {!! Form::open(['method' => 'GET', 'url' => '/detalle_pedidos/'.$detalle_pedidos->id_pedidos])!!}
         <button type="submit" class="btn" name="hola" value="1">
            <span class="glyphicon glyphicon-plus-sign"></span> Agregar Insumo
          </button>
           {!! Form::close()!!} 
        </td>
      </tr>         
    </tbody>
    @endforeach
  </table>
</div>  
@endsection()