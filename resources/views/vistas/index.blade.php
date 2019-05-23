@extends('template.mastertemplatecsa')
@section('contenido_central')
 <!-- Tabla de productos-->
 @section('titulo')
 {!! $productos[0]->tipo_producto !!}
 @endsection
<div align="left" class="container"  class="row" style="font-family: Times New Roman, Times, serif; ">
    @foreach($productos as $productos)
    <div class="col-sm-4">  
    
    
            <div class="col-sm-4" style="width: 18rem;">
             <a href="#img1" > <img  data-toggle="popover" data-trigger="hover" data content="<?php echo $productos['nombre_producto'];?>"  src="productImg/{{$productos->enlace_imagen}}" class="card-img-top" style="background-repeat: no-repeat; width: 18rem;"></a>
            </div>
                 <br/><br/><br/><br/><br/><br/>
                    <br/><br/><br/><br/><br/><br/>
            <label style="color: black"> Nombre:&nbsp;&nbsp;&nbsp;</label>{!! $productos->nombre_producto !!}</br> 
                 <label style="color: black"> Disponibles: &nbsp;&nbsp;&nbsp;</label>{!! $productos->cantidad !!}   
                <label style="color: black"> unidades </label> </br> 
                <label  style="color: black"> Precio:&nbsp;&nbsp;&nbsp;$</label>{!! $productos->precio_venta !!}  </br>
                    <label style="color: black"> Tamaño:&nbsp;&nbsp;&nbsp;</label>{!! $productos->tamaño_producto !!}  </br> 
                     <label style="color: black"> Cantidad:&nbsp;&nbsp;&nbsp;</label>{!! $productos->cantidad !!}  </br> 
                 <a type="button" style="color: red" align="center" href="{{route('cart-add',$productos->nombre_producto)}}"> Agregar </a>	
              </br></br></br>   
        
             <div class="modal" id="img1">
                 <h3></h3>
                <div class="imagen">
                   <a> <img src="productImg/{{$productos->enlace_imagen}}" > </a>
                </div>
                         <a class="cerrar" href="#"> Cerrar [x] </a>
            </div >
    
    
    
    
        </div>
        @endforeach
</div>  

<br/><br/><br/><br/> 
@endsection()



















