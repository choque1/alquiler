@extends("theme.$theme.layout")
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
          @include('includes.form-error')
          @include('includes.mensaje')
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Crear menus</h3>
            </div>
          <form action="{{route('menu_store')}}" id="form-general" class="form-horizontal" method="POST">
            @csrf
                <div class="box-body ">
                    @include('admin.menu.form')
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
    