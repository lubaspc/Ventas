@extends('template.mastertemplate6')
@section('contenido_central')
<br/>  <br/><br/>  <br/>
<!-- Tabla de proveedores-->  
    <div align="center" id="proveedores">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Proveedores</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="proveedores/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Proveedores</a>
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">RFC</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
          </tr>
        </thead>
        @foreach($proveedores as $proveedores)
        <tbody>
          <tr>
            <th scope="row">{!! $proveedores->nombre_prov !!}</th>
            <td>{!! $proveedores->rfc !!}</td>
            <td>{!! $proveedores->email !!}</td>
            <td>{!! $proveedores->telefono !!}</td>
            <td>{!! $proveedores->direccion !!}</td>
            <td>
          <a href="{!! 'proveedores/'.$proveedores->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/proveedores/'.$proveedores->id])!!}
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