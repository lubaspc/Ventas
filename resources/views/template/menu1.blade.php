    <div id="app">
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
        <li class="active"><a href="{!! asset('principal_admin') !!}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="{!! ('productos') !!}"><span class="glyphicon glyphicon-lamp"></span> Productos</a></li>
        <li><a href="{!! ('ventas') !!}"><span class="glyphicon glyphicon-usd"></span> Ventas</a></li>
        <li><a href="{!! ('clientes') !!}"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>
        <li><a href="{!! ('pedidos') !!}"><span class="glyphicon glyphicon-shopping-cart"></span> Compras</a></li>
        <li><a href="{!! ('proveedores') !!}"><span class="glyphicon glyphicon-user"></span> Proveedores</a></li>
        <li><a href="{!! ('generar_productos') !!}"><span class="glyphicon glyphicon-wrench"></span> Producciones</a></li>  
        <!--li><a href="{!! asset('form_archivos') !!}"><span class="glyphicon glyphicon-list-alt"></span> Archivos</a></li>  
        <li><a href="{!! asset('ver_archivos') !!}"><i class="fa fa-cloud-download fa-fw"></i> Descargar Archivos</a></li-->
         <li><a href="{!! asset('listadoreportes') !!}"><i class="glyphicon glyphicon-list-alt"></i> Reportes</a></li>  
      </ul>    
      <ul class="nav navbar-nav navbar-right">
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
        <!--li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li-->        
      </ul>
    </div>
  </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
