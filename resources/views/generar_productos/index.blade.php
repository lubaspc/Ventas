@extends('template.mastertemplate7')
@section('contenido_central')
<br/>  <br/><br/>  <br/>
<!-- Tabla de Producciones-->
<div align="center" class="container" id="producciones_Registrados">
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Producciones</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
  <a href="generar_productos/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Producciones</a> 
  <table class="table tabla" id="tabla">
      <thead>
        <tr>
           <th scope="col">Tipo Producto</th>
           <th scope="col">Nombre</th>
           <th scope="col">Precio Costo</th>
           <th scope="col">Cantidad</th>
           <th scope="col">Estatus</th>
        </tr>
      </thead>
      @foreach($generar_productos as $generar_productos)
      <tbody>
        <tr>
          <th scope="row">{!! $generar_productos->productos->categorias->tipo_producto !!}</th>
          <td>{!! $generar_productos->nombre_prod !!}</td>
          <td>{!! $generar_productos->precio_costo !!}</td>
          <td>{!! $generar_productos->cantidad !!}</td>
          @switch($generar_productos->estatus_grp )
              @case(1)
              <td>Inicio de producción</td>
              @break
              @case(2)
              <td>Desarrollo de producción</td>
              @break
              @case(3)
              <td>Fin de producción</td>
              @break             
            @endswitch          
          <td>
          <a href="{!! 'generar_productos/'.$generar_productos->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/generar_productos/'.$generar_productos->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
        </td>
        <td>
          {!! Form::open(['method' => 'GET', 'url' => '/detalle_generar_insumos/'.$generar_productos->nombre_prod])!!}
         <button type="submit" class="btn">
            <span class="glyphicon glyphicon-plus-sign"></span> Agregar Insumos
          </button>
           {!! Form::close()!!} 
        </td>
        </tr>         
    </tbody>
    @endforeach
  </table><br/>      
</div>
@endsection()