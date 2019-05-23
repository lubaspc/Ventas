<div class="header">
    <h1><font color="#FBFFFF"> M U E B L E R Í A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M</font></h1>   
  </div>
 
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid"> 
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="{{ url('/') }}"><span class="glyphicon glyphicon-hand-left"></span></a>
      </li>
      <li>
        <a href="{{route('cart-show')}}"><span class="glyphicon glyphicon-shopping-cart"></span></a>
      </li>
      <li><a href="{!! asset('accesocliente') !!}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>     
    </ul>           
    </div>
</nav> 
<!-- BARRA DE NAVEGACIÓN PARA BÚSCAR PEDIDO CON NOMBRE DEL CLIENTE -->
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- COLLAPSE AL MINIMIZAR-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">              
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-lamp"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@yield('titulo')&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>          
        </li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
          	<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="glyphicon glyphicon-search"></span></button>
        </form>        
      </ul>      
    </div>
  </div>
</nav>