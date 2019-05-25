@extends('template.mastertemplateclicom')
@section('contenido_oculto')
<script>
        $(function () {
          $('#myTab li:last-child a').tab('show')
        })
      </script>
 <!-- REGISTRO DE Clientes -->
  <div class="container" id="registro_formulario" style="display: block; width: 85%; height: auto;">
 {!! Form::open(['url'=>'/clientescompra',  'method' => 'post'])!!}
 <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Personales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Datos de compra</a>
        </li>
        <li class="nav-item">
            <button class="btn btn-outline-warning" type="reset">
                <span class="glyphicon glyphicon-remove"></span> Borrar
            </button>
        </li>
          <li class="nav-item navbar-nav mr-auto">
            <button class="btn btn-outline-success" type="submit">
                <span class="glyphicon glyphicon-ok"></span> Terminar Compra
            </button>
        </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
           @include('clientescompra.subform')
    </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            @include('clientescompra.subform2')
        </div>

      </div>

{!! Form::close() !!}


</div>
</div>

@endsection()
