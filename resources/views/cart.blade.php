@extends('template.mastertemplatelp')
@section('contenido_central')

<div class="container text-center"><!--container principal-->  <!--1--> 

@if(count($cart))
<div class="page-header"><!--2-->
  <h2 align="center">Productos Solicitados</h2>
</div>

<div class="table-responsive"> <!--3-->
<table class="table table-striped table-hover table-bordered">
<thead>
      <tr>            
        <th >Nombre</th>
        <th >Pecio</th>
        <th >Cantidad</th>
        <th >Subtotal</th>
        <th >Quitar</th>
      </tr>
</thead>
<tbody>
   @foreach($cart as $productos)
   
    <tr>
        <td>{{$productos -> nombre_producto}}</td>
        <td>{{$productos -> precio_venta}}</td>
       <td>{{$productos -> cantidad}}</td>
        <td>{{$productos -> precio_venta * $productos->cantidad}}</td>
        <td><a href="{{route('cart-delete',$productos->nombre_producto)}}" class="btn btn-danger"><i class="fa fa-remove">Quitar </i></a></td>
   </tr>
        @endforeach
</tbody>
</table>
<h3><span class="label label-success"> Total:{{($total)}}</span></h3>
</div>

<div style="text-align: center;"> <!--4-->
  <a href="{{ url('/') }}" class="btn"><span ></span> Agregar más productos</a>
  <a href="{!! asset('clientescompra/create') !!}" class="btn" class="fa-chevron-circle-right">Continuar la compra </a>
</div> 

@else
<div>
  <h3><span class="label label-warning">No hay productos en el carrito :( </span></h3>
  <br>
</div>

<div style="text-align: center;"> <!--4-->
  <a href="{{ url('/') }}" class="btn"><span ></span> Agregar productos</a>  
</div> 
@endif

</div>

@endsection()



