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
                                    <a href="{{route('departamento_create')}}" class="btn btn-block btn-success btn-sm">
                                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                                    </a>
                            </div>
                        <form action="{{route('departamento')}}" method="GET" >
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
                            <th>DIRECCION</th>
                            <th>ESTADO</th>
                            <th>TELEFONO</th>
                            <th>DESCRIPCION</th>
                            <th>FOTO</th>
                            <th></th>
                        </tr> 
                    </thead>
                    <tbody> 
                        @foreach ($departamentos as $departamento)
                        <tr>
                            <td>{{$departamento->id}}</td>
                            <td>{{$departamento->direccion}}</td>
                            <td>{{$departamento->estado}}</td>
                            <td>{{$departamento->telefono}}</td>
                            <td>{{$departamento->descripcion}}</td>
                            <td><img src="{{asset('imagenes/departamentos/'.$departamento->foto)}}" alt="" height="100px" width="100px" class="img-thumbnail"></td> 
                            <td>
                                    <a href="{{route('departamento_edit', $departamento->id)}}" class="btn btn-warning">
                                        
                                    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                                    <form action="{{route('departamento_delete', ['id' => $departamento->id])}}" class="d-inline form-eliminar" method="POST">
                                            @csrf @method("DELETE")
                                            <button type="submit" class="btn btn-danger btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro" >
                                                    <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                            </button>
                                    </form>
                                    
                        </tr>                            
                        @endforeach
                    </tbody>                     
                </table>
                {!!$departamentos->render()!!}
            </div>
        </div>
    </div>
@endsection
