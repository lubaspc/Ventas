<!DOCTYPE html>


<html>
<head>
  <title>Mueblería M</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{!! asset('imag/icono1.svg') !!}">
    <link rel="stylesheet" href="{!! asset('css/estilo_gpe.css') !!}"> 
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">  
    <link rel="stylesheet" type="text/css" href="{!! asset('css/smoke.css') !!}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.js')}}"></script> 
    <script src="{{ asset('js/bootstrap.js')}}"></script>  
    <!--script src="lang/es.js"></script-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    
    
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
            

            
            .modal
            {
            display:none;
            
            }
            
            
            .modal:target {
            display:block;
            position:fixed;
            background:rgba(0,0,0,0.8);
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            }
            
             .modal h3{
            color:#fff;
            font-size:30px;
            text-align:center;
            margin:15px 0;
            
            }
            
            .imagen{
            width: 100%;
            height: 80%;
            display:flex;
            justify-content:center;
            }
            
            
            .imagen a{
            color:#000;
            font-size:10px;
            text-decoration:none;
            margin:0 10px;
            }
            
             .imagen a:nth-child(1){
            height:100;
            margin:0;
            }
            
            .imagen img{
            width: 500px;
            height: 100%;
            max-width: 100%;
            border:7px solid #fff;
            box-sizing:border-box;
            }
            
            
            .cerrar{
            display:block;
            background:#fff;
            width:20px;
            height:25px;
            margin: 15px auto;
            text-align:center;
            text-decoration:none;
            font-size:25px;
            color:#000;
            padding:5px;
            border-radius:50%;
            line-height:20px;            
            
            }
            
            #a{
            font-size:120px;
            }
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </style>
</head>




<body>