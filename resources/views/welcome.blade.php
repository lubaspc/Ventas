<!DOCTYPE html>
<html>
<head>
  <title>Mueblería M</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="imag/icono1.svg">
    <link rel="stylesheet" href="{!! asset('css/estilo_gpe.css') !!}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/smoke.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        function ejecutar(usuario){
            $.ajax({
                type:'GET',
                url:'vistas/'+usuario,
                success:function(data){
                    $("#content").html(data)
                }
            })
        }
    </script>

    		<style type="text/css">


			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}



			.nav > li {
				float:left;
			}

			.nav li a {

				color:#000;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}

			.nav li a:hover {
				background-color:red;
			}

			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}

			.nav li:hover > ul {
				display:block;
			}



		</style>
</head>




<body>
  <div class="header">
    <h1><font color="#FBFFFF"> M U E B L E R Í A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M</font></h1>
  </div>



  <!-- BARRA DE NAVEGACIÓN DE TIPO DE MUEBLES -->
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    </br> <div class="navbar-header">
      <!-- COLLAPSE AL MINIMIZAR-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a onclick="ejecutar(3);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-lamp"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sala&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li><a onclick="ejecutar(2);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-object-align-bottom"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comedor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li><a onclick="ejecutar(5);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recamara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li><a onclick="ejecutar(4);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-blackboard"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Escritorios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li><a onclick="ejecutar(7);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-blackboard"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baño&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>



      </ul>
      <ul class="nav navbar-nav navbar-right form-inline">
            <input class="form-control mr-sm-2" id="buscar" type="search" placeholder="Búsqueda" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" onclick="ejecutar(document.getElementById('buscar').value);"><span class="glyphicon glyphicon-search"></span></button>
      </ul>
    </div>
  </div>
</nav>

 <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="{{route('cart-show')}}"><span class="glyphicon glyphicon-shopping-cart"></span></a>
        </li>

        <li><a href="accesocliente"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>


        </ul>
      </div>
  </nav>


<!--    CARRUSEL DE IMAGENES -->
<div class="row">
  <div class="container" id="content">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
          <li data-target="#myCarousel" data-slide-to="7"></li>
      </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imag/uno.png" alt="Chania" width="460" height="345">
        </div>
        <div class="item">
          <img src="imag/dos.png" alt="Chania" width="460" height="345">
        </div>
        <div class="item">
          <img src="imag/tres.png" alt="Chania" width="460" height="345">
        </div>
        <div class="item">
          <img src="imag/4.png" alt="Chania" width="460" height="345">
        </div>
        <div class="item">
          <img src="imag/5.png" alt="Chania" width="460" height="345">
        </div>
        <div class="item">
          <img src="imag/6.png" alt="Chania" width="460" height="345">
        </div>
        <div class="item">
          <img src="imag/7.png" alt="Chania" width="460" height="345">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>

<br/><br/><br/><br/>
    <div class="footer container">
      <table>
        <tr>
          <td>CONTACTANOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td><span class="glyphicon glyphicon-envelope"> muebleriam@gmail.com</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td><span class="glyphicon glyphicon-envelope"> muebleriam@hotmail.com</span></td>
        </tr>
      </table>
      <br/><br/>
     <!-- Right Side Of Navbar -->
      <a href="home" style="color: #272940;"><span class="glyphicon glyphicon-log-in"></span> Administración</a>
    </div>
</body>
</html>
