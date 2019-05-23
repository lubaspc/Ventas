@extends('template.mastertemplate1')
@section('contenido_central')
<br/><br><br>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de archivos en el servidor</h1>
        </div>
                <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="btn btn-outline btn-primary btn-lg  pull-right" href="{!! asset('form_archivos') !!}">Subir nuevo archivo</a>
                        <h4>Archivos</h4><br />
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>NOMBRE DEL ARCHIVO</th>
									<th>VER ARCHIVO</th>
									<th>DESCARGAR ARCHIVO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($lista_archivos as $archivo) 
                                @if($i < 2)
                                    <?php $i = $i + 1; ?>   
                                @else
                                <tr class="odd gradeX">
                                    <td>{!! $archivo !!}</td>
                                    <td><a target="_blank" class="btn btn-outline btn-success" href="{!! $rutaarchivos.$archivo !!}">Ver Archivo</a></td>
                                    <td><a class="btn btn-outline btn-primary" href="{!! 'descargar_archivo/'.$archivo !!}">Descargar</a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
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
