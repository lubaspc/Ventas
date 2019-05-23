@extends('template.mastertemplatecsa')
@section('contenido_central')
 <!-- Tabla de productos-->
 @section('titulo')
 {!! $productos[0]->tipo_producto !!}
 @endsection
<div align="left" class="container"  class="row" style="background-color:lavender;color:black;  font-family: Times New Roman, Times, serif; ">
    @foreach($productos as $productos)
    <div class="col-sm-4" style="background-color:lavender; ">
    </br></br></br>
    <label style="color: black"> Nombre:&nbsp;&nbsp;&nbsp;</label>{!! $productos->nombre_producto !!}</br> 
    <label style="color: black"> Disponibles: &nbsp;&nbsp;&nbsp;</label>{!! $productos->cantidad !!}   
    <label style="color: black"> unidades </label> </br> 
    <label  style="color: black"> Precio:&nbsp;&nbsp;&nbsp;$</label>{!! $productos->precio_venta !!}  </br>
    <label style="color: black"> Tamaño:&nbsp;&nbsp;&nbsp;</label>{!! $productos->tamaño_producto !!}  </br> 
    <button type="button"  style="color: red" align="center" >Agregar</button> 
        </br></br></br>        
    </div>
    @endforeach
</div>  

<br/><br/><br/><br/> 
@endsection()
