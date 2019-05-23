<!-- Ménu de navegación-->  
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- COLLAPSE AL MINIMIZAR-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>             
      </button>
      <a class="navbar-brand" href="{!! asset('principal_admin') !!}">Mueblería M</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{!! asset('pedidos') !!}"><span class="glyphicon glyphicon-usd"></span> Compras</a></li>
        <li><a href="{!! asset('detalle_pedidos') !!}"><span class="glyphicon glyphicon-list-alt"></span> Detalle Compras</a></li>                
      </ul>  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{!! asset('principal_admin') !!}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Cerrar Sesión') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          </div>
          </li>        
      </ul>    
    </div>
  </div>
  </nav>
  <main class="py-4">
            @yield('content')
  </main>
