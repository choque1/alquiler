<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo', 'Alquiler') | Sistema</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @yield('styles')
  <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
  
  @yield('styles')



  <script src="{{asset("assets/$theme/ckeditor/ckeditor.js")}}"></script>
  <script src="{{asset("assets/$theme/ckeditor/samples/js/sample.js")}}"></script>
  <link rel="stylesheet" href="{{asset("assets/$theme/ckeditor/samples/css/samples.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css")}}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Inicio de header-->
            @include("theme/$theme/header") 
            <!-- fin de header-->
            <!-- Inicio de aside-->
            @include("theme/$theme/aside")
            <!-- Fin de aside-->
                <div class="content-wrapper">
                        <section class="content">
                            @yield('contenido') 
                          
                        </section>
                </div>
                @include("theme/$theme/footer")
        </div>
        <!-- jQuery 3 -->
<script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/ckeditor/ckeditor.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/ckeditor/ckeditor.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
<script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>

<script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset("assets/js/funciones.js")}}"></script>

<script src="{{asset("assets/js/scripts.js")}}"></script>


<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/lib/codemirror/codemirror.js")}}"></script>
<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/lib/codemirror/javascript.js")}}"></script>

<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/lib/codemirror/show-hint.js")}}"></script>
<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/js/fulltoolbareditor.js")}}"></script>
<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/js/abstracttoolbarmodifier.js")}}"></script>
<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/js/toolbarmodifier.js")}}"></script>
<script src="{{asset("assets/$theme/ckeditor/samples/toolbarconfigurator/js/toolbartextmodifier.js")}}"></script>
<script src="{{asset("assets/$theme/ckeditor/samples/js/sf.js")}}"></script>







@yield('scripts')
</body>
</html>