@extends('template.mastertemplate6')
@section('contenido_insumos')
<br/>  <br/><br/>  <br/>
<!-- Tabla de Insumo-->  
    <div align="center" id="insumos">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Insumos</h1>
        </div>
                <!-- /.col-lg-12 -->
      </div>
      <a href="insumos/create"><span class="glyphicon glyphicon-pencil"></span> Registro de Insumos</a> 
      <table class="table tabla" id="tabla">
        <thead>
          <tr>
            <th scope="col">Nombre Insumo</th>
            <th scope="col">Detalles</th>            
            <th scope="col">Id Proveedores</th>
            <th scope="col">Nombre Proveedores</th>
          </tr>
        </thead>
        @foreach($insumos as $insumos)
        <tbody>
          <tr>
            <th scope="row">{!! $insumos->nombre_insumo !!}</th>
            <td>{!! $insumos->detalles !!}</td>            
            <td>{!! $insumos->id_proveedores!!}</td>
            <td>{!! $insumos->proveedores->nombre_prov !!}</td>
            <td>
          <a href="{!! 'insumos/'.$insumos->id.'/edit'!!}" class="btn" type="button">
            <span class="glyphicon glyphicon-edit"></span> Editar
          </a></td>
        <td>
              {!! Form::open(['method' => 'DELETE', 'url' => '/insumos/'.$insumos->id])!!}
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