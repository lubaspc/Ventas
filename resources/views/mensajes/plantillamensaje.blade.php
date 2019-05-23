@extends('template.mastertemplatec1')
@section('contenido_central')
<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">&nbsp;
                </div>
                <div class="panel-body">
                	@if($var === '1')
                    <div class="alert alert-success">
                        {!! $msj !!}
                    </div>
                    @else
                    <div class="alert alert-danger">
                        {!! $msj !!}
                    </div>
                    @endif
                    <a class="btn btn-outline btn-primary btn-lg  pull-right" href="{!! asset($ruta_boton) !!}">{!! $mensaje_boton!!}</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
       	</div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection()