@extends('template.mastertemplate1')
@section('contenido_central')
<br/><br><br>
{!! Form::open(['url'=>'/guardar_archivos','role'=>'form','enctype'=>'multipart/form-data']) !!}
<div class="form-group-has-success">
	{!! Form::label ('file_formulario','Adjuntar Archivos (Formato:PDF):', ['class'=>'control-label']) !!}
	{!! Form::file ('file_formulario', null, ['requied', 'class'=>'form-control']) !!}
	<br/><br/>
</div>
{!! Form:: submit('Subir archivo', ['class'=>'btn btn primary btn-lg']) !!}
{!! Form::close() !!}
@endsection()