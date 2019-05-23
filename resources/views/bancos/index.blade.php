@extends('template.mastertemplate4')
@section('contenido_central') 
<!-- Tabla de bancos--> 
<br/>  <br/><br/>  <br/> 
    <div align="center" id="bancos">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Bancos</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="bancos/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Bancos</a>
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Nombre</th>            
            <th scope="col">Teléfono</th>
          </tr>
        </thead>
        @foreach($bancos as $bancos)
        <tbody>
          <tr>
            <td>{!! $bancos->nombre_banco !!}</td>
            <td>{!! $bancos->telefono !!}</td>
            <td>
              <a href="{!! 'bancos/'.$bancos->id.'/edit'!!}" class="btn" type="button"><span class="glyphicon glyphicon-edit"></span> Editar</a>
            </td>
            <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/bancos/'.$bancos->id])!!}
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