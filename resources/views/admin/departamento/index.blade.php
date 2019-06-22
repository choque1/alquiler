@extends("theme.$theme.layout")
@section('contenido')
<div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Departamentos</h3>
              <div class="box-tools pull-right">
                    <a href="{{route('departamento_create')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>         
                        
                   
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
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
                                    <a href="{{route('departamento_edit', $departamento->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                                    <a href="{{route('departamento_delete', $departamento->id)}}" class="btn btn-danger" onclick="return confirm ('seguro que deseas eliminarlo')"><span class="glyphicon 
                                        glyphicon-remove-circle" aria-hidden="true"></span></a>
                            </td>
                        </tr>                            
                        @endforeach
                    </tbody>                     
                </table>
            </div>
        </div>
    </div>
@endsection
