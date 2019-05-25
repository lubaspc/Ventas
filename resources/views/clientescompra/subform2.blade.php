<br><br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de pago</label>
                <select class="form-control" name="id_pago">
                @foreach ($pagos as $i)
                <option value="{{$i->id}}">{{$i->categoria}}</option>
                @endforeach
                </select>
            </div>
            <div class="card text-center">

                <div class="card-header">
                    Lista de productos
                </div>
                <div class="container">
                    <div class="row">

                @foreach ($cart as $i)
                <div class="col-md-4">

                <div class="card-body">
                    <div class="card" >
                        <img src={{'/imag/'.$i->enlace_imagen}} class="card-img-top">
                        <div class="card-header">
                        <h5 class="card-title">{{$i ->nombre_producto}}</h5>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Precio Venta: {{$i ->precio_venta}}
                        <li class="list-group-item">Cantidad: {{$i ->cantidad}}
                        <li class="list-group-item">Total: {{$i ->precio_venta * $i->cantidad}}
                    </ul>
                </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
                <div class="card-footer text-muted">
                    Total a pagar: {{($total)}}
                  </div>

            </div>
        </div>
    </div>
</div>
