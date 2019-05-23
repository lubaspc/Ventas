@extends('template.mastertemplate4')
@section('contenido_central') 
<!-- Tabla de clientes--> 
<br/>  <br/><br/>  <br/> 
    <div align="center" id="clientes">      
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Clientes</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
        <a href="clientes/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Clientes</a> 
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Código Postal</th>
            <th scope="col">Calle</th>
          </tr>
        </thead>
        @foreach($clientes as $clientes)
        <tbody>
          <tr>
            <th scope="row">{!! $clientes->nombre_cliente !!} {!! $clientes->ap_paterno !!} {!! $clientes->ap_materno !!}</th>            
            <td>{!! $clientes->email !!}</td>
            <td>{!! $clientes->telefono !!}</td>
            <td>{!! $clientes->codigo_postal !!}</td>
            <td>{!! $clientes->calle !!}</td>
            <td>
          <a href="{!! 'clientes/'.$clientes->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$clientes->id])!!}
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