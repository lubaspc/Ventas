@extends('template.mastertemplate4')
<br/>  <br/><br/>  <br/>
@section('contenido_bancos')
 <!-- REGISTRO DE Bancos -->  
  <div class="container" id="registro_formulario" style="display: block; width: 800px; height: auto; background-color: #D3CEBE;">  
    <h2>Editar banco</h2>
    {!! Form::open(['method' => 'PATCH', 'url'=>'/bancos/'.$bancos->id])!!}
      {!! Form::label ('nombre_banco',' Nombre del Banco', ['class'=>'control-label col-25 glyphicon glyphicon-briefcase'])!!}
      {!! Form::text ('nombre_banco',$bancos->nombre_banco,['placeholder'=>'Ingresa nombre del banco', 'class'=>'esqr col-75', 'required', 'maxlength'=>'30'])!!}           
      <br/><br/><br/>
        {!! Form::label ('telefono',' Teléfono', ['class'=>'control-label col-25 glyphicon glyphicon-phone-alt'])!!}
        {!! Form::text ('telefono',$bancos->telefono,['placeholder'=>'+52 7225894110', 'class'=>'esqr col-75', 'required', 'maxlength'=>'10'])!!}  
      <br/><br/><br/>      
      {!! Form::label (null,' Estatus', ['class'=>'control-label col-25 glyphicon glyphicon-tag'])!!}
      {!! Form::label(null, 'Activo',['class'=>'col-75 esqrs', 'required']) !!}  
      <input type="hidden" name="estatus_banco" value="1">   
      <br/>  
    <br/> <br/>    
    <!-- Botones -->
    <div style="text-align: center;">
      <button class="btn btn-success" type="reset">
        <span class="glyphicon glyphicon-remove"></span> Borrar
      </button>  
      <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-ok"></span> Guardar
      </button> 
      {!! Form::close() !!}
    </div>
    <br/><br/>  
  </div>
@endsection()