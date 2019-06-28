@extends("theme.$theme.layout")
@section('contenido')
    <div class="row">
          <div class="col-lg-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Alquileres</h3>
              
              

              <div class="box-body table-responsive no-padding">
                    <div class="box-body table-responsive no-padding">
                            <div class="box-tools pull-right">
                                    <a href="{{route('alquiler_create')}}" class="btn btn-block btn-success btn-sm">
                                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                                    </a>
                            </div>
                            <div class="box-tools pull-right">
                                <a href="{{route('alquiler_report')}}" class="btn btn-block btn-success btn-sm">
                                            <i class="fa fa-fw fa-plus-circle"></i> Ver Reporte
                                        </a>
                         </div>
              </div>
            
            @include('admin.alquiler.show')
            </div>
        </div>
    </div>
@endsection
