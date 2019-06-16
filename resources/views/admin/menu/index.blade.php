@extends("theme.$theme.layout")
@section("titulo")
    Menu
@endsection
@section("styles")
<link rel="stylesheet" href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" type="text/css"/>
@endsection
@section("scriptsPlugins")
<script src="{{asset("assetes/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>    
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}"  type="text/javascript"></script>    
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Menus</h3>
                </div>
                <div class="box-body">
                    @csrf
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach ($menus as $key=> $item)
                                @if ($item['menu_id']!=0)
                                    @break
                                @endif
                                @include('admi.menu.menu-item',["item => $item"])
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection