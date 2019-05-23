@extends('template.mastertemplate0')
@section('contenido_central')
@if(isset($error))
  <h1>dhfhbdj</h1>
@else
<div class="container-login100" style="background:linear-gradient(50deg, olive, burlywood, moccasin, peru, olive);">
    <div class="wrap-login100">
      <form class="login100-form" method="POST" action="clientespedidos">
      @csrf
        <span class="login100-form-title p-b-34">Visualización de Pedidos</span>
        <div class="wrap-input100 form-group">          
          <input class="input100" type="text" name="username" placeholder="Usuario" required>                            
        </div>  
        <button type="submit" class="login100-form-btn">Acceder
        </button>        
        
      </form>      
      <div class="login100-more" style="background-image: url('imag/logo2.png');"></div>
    </div>
  </div> 
@endif
@endsection()
