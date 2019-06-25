  <div class="box">
    <div class="box-header">
      <h3 class="box-title">
        plantilla de contratos
      </h3>
    </div>
    <div class="box-body pad">
      <form method="POST" action="{{ url('con/store') }}" >
        <div >
           <input class="col-md-12" type="text" name="titulo" >
        </div>

        <textarea class="textarea" placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        <button type="subnit"> registrar</button>
      </form>
    </div>
  </div>
