<!DOCTYPE html>
<html>
<head>
<title>Muebleria M</title>
  
  
  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" type="text/css" href="css/smoke.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script> 
    
    
<style type="text/css">         
#footer {padding-top:5px 0; border-top: 1px solid; width:100%;}
#footer .fila td {text-align:center; width:100%;}
#footer .fila td span {font-size: 10px; color: #030B14;}
</style>
</head>




<body>
<div>







<div class="header" style="text-align: center;" >
    <img src="imag/logo2.png" width="90px" style="position: absolute; top: 0; right: 8;" >
    <h1><font color="#36B0EB"> M U E B L E R I A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M</font></h1>
    <h2 class="box-title" style=" text-align:center">
        <font color="#030B14">Reporte de Proveedores</font>
    </h2>   
</div>


<div class="col-md-12">
<div class="box">
<div class="box-header with-border">
    <h5 class="box-title" style="text-align:right"> Fecha: <?= $date; ?></h5>
</div>

<div class="table" style="border-style: solid; text-align:center; align-content: center;">
    <table class="table table-bordered" style="text-align: center;">
        <thead>
            <tr>                
                <th style="width:140px">Nombre</th>
                <th style="width:140px">Telefono</th>
                <th style="width:140px">Correo</th>
                <th style="width:140px">Direccion</th>                
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $proveedores) { ?>
                <tr>                    
                    <td><?= $proveedores->nombre_prov;?></td>
                    <td><?= $proveedores->telefono;?></td>
                    <td><?= $proveedores->email;?> </td>
                    <td><?= $proveedores->direccion;?></td>                    
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div><!-- div 4 -->
</div><!-- div 5 -->
 



<page_footer>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

        <table id="footer">
            <tr class="fila">
                <td>
                <br/>
                    <span>Derechos Reservados  "Muebleria M"</span><br/>
                    <span> © Copyright 2019 Creado y diseñado por "Dessarrollos Maguart LJ" </span>  
                </td>
            </tr>
        </table>
    </page_footer>
    
    






</body>   
</html>

    