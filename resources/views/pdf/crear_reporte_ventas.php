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
        <font color="#030B14">Reporte de Ventas</font>
    </h2>   
</div>





<div class="col-md-12"> <!-- div 1 -->
<div class="box">  <!-- div 2-->
<div class="box-header with-border"> <!-- div 3 -->
<h5 class="box-title" style="text-align:right"> Fecha: <?= $date; ?></h5>

</div><!-- div 1 -->
</div><!-- div 2 -->
</div><!-- div 3 -->


<div class="table" style="border-style: solid; text-align:center">
    <table class="table" style="text-align: center;">        
            <thead style="text-align: center;">
                <tr>            
                    <th style="width:75px">Folio de Venta</th>
                    <th style="width:75px">Fecha de Venta</th>
                    <th style="width:75px">Subtotal</th>
                    <th style="width:75px">Iva</th>
                    <th style="width:75px">Total</th>
                    <th style="width:75px">Estado</th>
                    <th style="width:75px">Cliente</th>
                    <th style="width:75px">Tipo de Pago</th>
                </tr>
            </thead>    
    <tbody>
        <?php foreach($data as $ventas) { ?>
            <tr>                
                <td><?= $ventas->folio_venta;?></td>
                <td><?= $ventas->fecha_venta;?></td>
                <td><?= $ventas->subtotal;?> </td>
                <td><?= $ventas->iva;?></td>
                <td><?= $ventas->total;?></td>
                <td><?= $ventas->estatus_venta;?></td>
                <td><?= $ventas->clientes->nombre_cliente;?></td>
                <td><?= $ventas->tipo_pagos->categoria;?></td>
                <?php } ?>
            </tr>
    </tbody>
</table>
</div>

 



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










    