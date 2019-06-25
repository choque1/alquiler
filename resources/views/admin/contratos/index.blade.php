@extends("theme.$theme.layout")
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')

<section class="content">
	<button>registrar</button>
    
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">lista de plantilas</h4>
          

            <div class="table-responsive">
              @if ($contrato->isNotEmpty())
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>>
                            <th>opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($contrato as $con)
                        <tr>
                            <td>{{$con->titulo}}</td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@else
<p>No hay palnatillas registradas</p>
@endif
</section>
@endsection