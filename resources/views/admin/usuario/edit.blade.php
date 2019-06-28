
@extends("theme.$theme.layout")
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"> </script>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
          @include('includes.form-error')
          @include('includes.mensaje')
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">editar Usuario</h3>
            </div>
            <form action="{{route('usuario_update', ['id' => $usuarios->id])}}" id="form-general" 
          
          class="form-horizontal" method="update" autocomplete="off" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="box-body ">
                    @include('admin.usuario.form-editar')
                </div>
                <div class="box-footer">
                  <div class="col-lg-3"></div>
                  <div class="col-lg-6">
                    @include('includes.boton-crear')
                  </div>  
                </div>
            </form>      
          </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection