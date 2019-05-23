@extends('template.mastertemplate1')
@section('contenido_central') 
<!-- Tabla de lugares--> 

<br/>  <br/><br/>  <br/> 
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de Reportes</h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
           	<div class="row">
            <div class="col-lg-12">
                <div>               
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="50%" class="table tabla" id="tabla">
                            <thead>
							<tr>
								<th>No.</th>
								<th>Reporte</th>
								<th>Ver </th>
								<th>Descargar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Reporte de Ventas</td>
								<td><a href="crear_reporte_ventas/1" target="_blank" class="btn btn-outline btn-success"> Ver </button> </a></td>
								<td><a href="crear_reporte_ventas/2" target="blank"> <button class="btn btn-outline btn-primary"> Descargar </button> </a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Reporte de Proveedores</td>
								<td><a href="crear_reporte_proveedores/1" target="_blank" class="btn btn-outline btn-success"> Ver </button> </a></td>
								<td><a href="crear_reporte_proveedores/2" target="blank"> <button class="btn btn-outline btn-primary"> Descargar </button> </a></td>
							</tr>
						</tbody>
					</table>					
				</div>
			</div>   
		</div>
	</div>
</div>
@endsection() 