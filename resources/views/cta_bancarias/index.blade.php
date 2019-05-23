@extends('template.mastertemplate4')
@section('contenido_cta_bancarias')
<br/>  <br/><br/>  <br/>
<!-- Tabla de Cta Bancarias-->  
    <div align="center" id="cta_bancarias">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Cuentas Bancarias</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="cta_bancarias/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Cta Bancarias</a> 
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Tipo de cuenta</th>
            <th scope="col">Número de cuenta</th>
            <th scope="col">Cliente</th>
            <th scope="col">Banco</th>
            <th scope="col">Fecha de vencimiento</th>
          </tr>
        </thead>
        @foreach($cta_bancarias as $cta_bancarias)
        <tbody>
          <tr>
            <th scope="row">{!! $cta_bancarias->tipo_cuenta !!}</th>
            <td>{!! $cta_bancarias->numero_cuenta !!}</td>
            <td>{!! $cta_bancarias->clientes->nombre_cliente !!}</td>
            <td>{!! $cta_bancarias->bancos->nombre_banco !!}</td>
            <td>{!! $cta_bancarias->fecha_vencimiento !!}</td>
            <td>
          <a href="{!! 'cta_bancarias/'.$cta_bancarias->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/cta_bancarias/'.$cta_bancarias->id])!!}
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