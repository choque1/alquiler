<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
        <div class="row">
                <div class="col-lg-12">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Reportes</h3>
    <div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>FECHA DE REGISTRO</th>
                    <th>FECHA DE ENTREGA</th>
                    <th>PAGO</th>
                    <th>MODELO</th>
                    <th>TIPO</th>
                    <th>ESTADO</th>
                    <th>CLIENTE</th>
                </tr> 
            </thead>
            <tbody> 
                    @foreach ($data as $alquileres)

                     <tr>
                        <td>{{$alquileres->fecha_registro}}</td>
                        <td>{{$alquileres->fecha_entrega}}</td>
                        <td>{{$alquileres->pago}}</td>
                        <td >{{$alquileres->departamentos->modelo}}</td> 
                        <td >{{$alquileres->departamentos->tipo}}</td>
                        <td >{{$alquileres->estados->nombre}}</td>  
                        <td >{{$alquileres->clientes->nombre}} {{$alquileres->clientes->apellido}}</td>  

                   
                    </tr>                            
                @endforeach 
            </tbody>                     
        </table> 
</body>
</html>