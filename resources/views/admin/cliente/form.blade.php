<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label requerido" >Direccion</label>
      <div class="col-lg-8">
      <input type="text" name="direccion" class="form-control" id="direccion" value = "{{old('direccion', $data->direccion ?? '')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="estado" class="col-lg-3 control-label requerido" >Estado</label>
      <div class="col-lg-8">
      <input type="etxt" name="estado" class="form-control" id="estado" value = "{{old('estado', $data->estado ?? '' )}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="telefono" class="col-lg-3 control-label requerido" >Telefono</label>
      <div class="col-lg-8">
      <input type="number" name="telefono" class="form-control" id="telefono" value = "{{old('telefono', $data->telefono ?? '')}}" required  />
      </div>
</div>
<div class="form-group">
  <label for="descripcion" class="col-lg-3 control-label requerido">Descripcion</label>
    <div class="col-lg-8">
    <input type="text" name="descripcion" class="form-control" id="descripcion" value = "{{old('descripcion', $data->descripcion ?? '' )}}" required  />
    </div>
</div>
<div class="form-group">
    <label for="foto" class="col-lg-3 control-label " >Foto</label>
      <div class="col-lg-8">
           <input type="file" name="foto[]" multiple class="form-control" id="foto" value ="{{old('foto', $data->foto ?? '' )}}">
      </div>
</div>
