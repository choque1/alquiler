@extends("theme.$theme.layout")
@section("scripts")
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection
@section('contenido')
@include('admin.contrato.form')
@endsection