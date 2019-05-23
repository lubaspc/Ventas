@extends('template.mastertemplate2')
<br/><br/><br/><br/>
@section('contenido_categorias')
  <!-- Tabla de Categorias-->
   <div align="center" class="container" id="tablacategorias">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Categorías Productos</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="categorias/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Tipos de Productos</a>
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Tipo Producto</th>
            <th scope="col">Descripción</th>
          </tr>
        </thead>
        @foreach($categorias as $categorias)
        <tbody>
          <tr>
            <th scope="row">{!! $categorias->tipo_producto !!}</th>            
            <td>{!! $categorias->descripcion !!}</td>
            <td>
                <a href="{!! 'categorias/'.$categorias->id.'/edit'!!}" class="btn" type="button">
                  <span class="glyphicon glyphicon-edit"></span> Editar
                </a>
            </td>
            <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/categorias/'.$categorias->id])!!}
              <button type="submit" class="btn">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
              {!! Form::close()!!} 
            </td>      
          </tr>
        </tbody>
        @endforeach
      </table><br/>      
    </div>  
@endsection()

