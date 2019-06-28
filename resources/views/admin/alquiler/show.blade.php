<div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FECHA DE REGISTRO</th>
                    <th>FECHA DE ENTREGA</th>
                    <th>PAGO</th>
                    <th>MODELO</th>
                    <th>TIPO</th>
                    <th>ESTADO</th>
                    <th>CLIENTE</th>
                    <th>ACCION</th>
                </tr> 
            </thead>
            <tbody> 
                @foreach ($alquileres as $alquiler)
                <tr>
                    <td>{{$alquiler->id}}</td>
                    <td>{{$alquiler->fecha_registro}}</td>
                    <td>{{$alquiler->fecha_entrega}}</td>
                    <td>{{$alquiler->pago}}</td>
                    @foreach ($departamentos as $departamento)
                        @if ($alquiler->departamento_id==$departamento->id)
                          <td >{{$departamento->modelo}}</td>  
                          <td >{{$departamento->tipo}}</td> 
                        @endif
                    @endforeach 
                    @foreach ($estados as $estado)
                    @if ($alquiler->estado_id==$estado->id)
                      <td >{{$estado->nombre}}</td>  
                    @endif
                    @endforeach 
                    @foreach ($clientes as $cliente)
                    @if ($alquiler->cliente_id==$cliente->id)
                    <td >{{$cliente->nombre}} {{$cliente->apellido}}</td>  
                    @endif
                    @endforeach 
                    <td>
                            <a href="{{route('alquiler_edit', $alquiler->id)}}" class="btn btn-warning">
                                    
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                                
                                    
                    </td>
                </tr>                            
                @endforeach
            </tbody>                     
        </table>