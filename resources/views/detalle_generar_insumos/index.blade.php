@extends('template.mastertemplate7')
<br/><br/><br/><br/>
@section('contenido_central')  
<div align="center" id="pedidos">
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Detalle de Producciones</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
<!-- TABLA CON PRODUCTOS EN LAS PRODUCCIONES-->
  <table class="table tabla" id="tabla">
    <thead>
      <tr>      
        <th scope="col">Nombre del insumo</th> 
        <th scope="col">Nombre del producto</th> 
        <th scope="col">Nombre proveedor</th>
        <th scope="col">Categoria</th>        
        <th scope="col">Cantidad</th>
        <th scope="col">Precio Costo</th>              
      </tr>
    </thead>
    @foreach($detalle_generar_insumos as $detalle_generar_insumos)    
    <tbody>
      <tr>        
        <td>{!! $detalle_generar_insumos->insumos->nombre_insumo !!}</td>
        <td>{!! $detalle_generar_insumos->generar_productos->nombre_prod !!}</td>
        <td>{!! $detalle_generar_insumos->insumos->proveedores->nombre_prov !!}</td>
        <td>{!! $detalle_generar_insumos->generar_productos->productos->categorias->tipo_producto !!}</td>
        <td>{!! $detalle_generar_insumos->generar_productos->cantidad !!}</td>
        <td>{!! $detalle_generar_insumos->precio_costo !!}</td>              
        <td>
          <a href="{!! 'detalle_generar_insumos/'.$detalle_generar_insumos->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/detalle_generar_insumos/'.$detalle_generar_insumos->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
        </td>
        <td>
          {!! Form::open(['method' => 'GET', 'url' => '/detalle_generar_insumos/'.$detalle_generar_insumos->id_generarproductos])!!}
         <button type="submit" class="btn" name="hola" value="1">
            <span class="glyphicon glyphicon-plus-sign"></span> Agregar Insumos
          </button>
           {!! Form::close()!!} 
        </td>
      </tr>         
    </tbody>
    @endforeach
  </table>
</div>  
@endsection()