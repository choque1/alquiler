  <div class="box">
    <div class="box-header">
      <h3 class="box-title">
        plantilla de contratos
      </h3>
    </div>
    <div class="box-body pad">
      <form method="POST" action="{{route('contrato_store')}}"id="from-general" >
        @csrf

        <div >
           <input class="col-md-12" type="text" name="titulo" >
        </div>

        <textarea class="textarea" placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height:
                   18px; border: 1px solid #dddddd; padding: 10px;"name="contenido"></textarea>
        <button type="subnit"> registrar</button>
      </form>
    </div>
  </div>
  <script src="{{asset('assets/lte/tinymce/tinymce.min.js')}}"></script>
<script>
    var config_editor={
        path_absolute:'{{\Illuminate\Support\Facades\URL::to("/")}}',
        selector:'textarea',
        plugins:[
            'advlist autolink lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime  nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern'
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alingleft alingcenter alingrigth alingjustify | bullist numlist outdont indent",
        relative_urls:false,
        file_browser_callback: function(field_name, url, type, win){
            var x=window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y=window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
            var cmsurl= config_editor.path_absolute+'larabel-filemanager?file_name'+field_name;
            if(type=='image'){
                cmsurl=cmsurl+"&type=Images"
            }else{
                cmsurl=cmsurl+"&type=Files"
            }
            tinyMCE.activeEditor.windowManager.open({
                file:cmsurl,
                tittle:"Filemanager",
                width:x=0.8,
                heigth:y=0.8,
                resizable: "yes",
                close_previous:"no"
            });
        },
        language:'es'
    };
    tinymce.init(config_editor);
</script>


