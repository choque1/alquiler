@extends("theme.$theme.layout")
@section('contenido')
<div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Usuarios</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                            <th>PASSWORD</th>
                            <th>NOMBRE</th>
                            <th>FOTO</th>
                            <th></th>
                        </tr> 
                    </thead>
                    <tbody> 
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->usuario}}</td>
                            <td>{{$usuario->password}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->foto}}</td>
                            <td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                                <a href="{{route('usuario_delete', $usuario->id)}}" class="btn btn-danger" onclick="return confirm ('seguro que deseas eliminarlo')"><span class="glyphicon 
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
