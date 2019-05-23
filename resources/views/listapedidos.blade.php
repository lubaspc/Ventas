@extends('template.mastertemplatec1')
@section('contenido_central')
<!--    PEDIDOS SOLICITADOS POR EL CLIENTE -->
<div align="center" id="ventas"><br/>
  <h2>Pedidos Solicitados</h2>
  <table class="table tabla" id="tabla">
    <thead>
      <tr>            
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Subtotal</th>
        <th scope="col">Total</th>
        <th scope="col">Estado de Proceso</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Recamara</th>
          <td>1</td>
          <td>$1400</td>
          <td>$1400</td>
          <td>Inicio de fabricación</td>
        </tr>
        <tr>
          <th scope="row">Cantina</th>
          <td>2</td>
          <td>$1200</td>
          <td>$2400</td>
          <td>Pedido solicitado</td>
        </tr>  
        <tr style="background-color: white; color: #464344;">
          <th scope="row" colspan="3">Total</th>      
          <td colspan="3">$3600</td>            
        </tr>        
      </tbody>
    </table><br/>
    <a href="#" class="btn">
      <span class="glyphicon glyphicon-trash"></span> Eliminar
    </a>
    <a href="#" class="btn">
      <span class="glyphicon glyphicon-ok-sign"></span> Guardar 
    </a>
  </div>  
  <br/><br/>
@endsection()
