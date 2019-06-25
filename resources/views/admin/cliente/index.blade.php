@extends("theme.$theme.layout")
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="row">
        <div class="col-lg-12">
                @include('includes.form-error')
                @include('includes.mensaje')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Departamentos</h3>
              
            </div>         
                        
                   
            <div class="box-body table-responsive no-padding">
                    <div class="box-body table-responsive no-padding">
                            <div class="box-tools pull-right">
                                    <a href="{{route('cliente_create')}}" class="btn btn-block btn-success btn-sm">
                                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                                    </a>
                            </div>
                        <form action="{{route('cliente')}}" method="GET" >
                                <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 300px;">
                                          <input type="text" name="estado" class="form-control " placeholder="Search" aria-describedby="search"
                                        >
                        
                                          <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                          </div>
                                        </div>
                                      </div>
                        </form>
                <table class="table table-bordered table-hover table-striped" id="tabla-data" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CI</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                            <th>ESTADO</th>                            
                            <th>ROL</th>
                            <th>ACCION</th>
                        </tr> 
                    </thead>
                    <tbody> 
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nombre}} {{$cliente->apellido}}</td>
                            <td>{{$cliente->ci}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->estado}}</td>
                            @foreach ($roles as $rol)
                                @if ($cliente->rol_id==$rol->id)
                                  <td >{{$rol->nombre}}</td>  
                                @endif
                            @endforeach                        
                            <td>
                                <a href="{{route('cliente_edit', $cliente->id)}}" class="btn btn-warning">
                                        
                                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                                <form action="{{route('cliente_delete', ['id' => $cliente->id])}}" class="d-inline form-eliminar pull-right" method="POST">
                                        @csrf @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro" >
                                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                        </button>
                                </form>
                            </td>
                                    
                        </tr>                            
                        @endforeach
                    </tbody>                     
                </table>
                {!!$clientes->render()!!}
            </div>
        </div>
    </div>
@endsection
