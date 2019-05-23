@extends('template.mastertemplate3')
<br/><br/><br/><br/>
@section('contenido_pagos')
<!-- Tabla de Tipo de Pagos--> 
    <div align="center" id="tablapagos">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Tipo de Pagos</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="tipo_pagos/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Tipos de Pagos</a>    
      <table class="table tabla" id="tabla">
        <thead align="center">
          <tr>
            <th scope="col" align="center">Tipo de Pago</th>            
          </tr>
        </thead>
        @foreach($tipo_pagos as $tipo_pagos)
        <tbody>
          <tr>
            <td scope="row">{!! $tipo_pagos->categoria !!}</td>
            <td>
          <a href="{!! 'tipo_pagos/'.$tipo_pagos->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/tipo_pagos/'.$tipo_pagos->id])!!}
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