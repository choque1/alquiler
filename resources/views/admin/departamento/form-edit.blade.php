
<div class="form-group">
  <label for="modelo" class="col-lg-3 control-label requerido" > Modelo</label>
    <div class="col-lg-8">
    <input type="text" name="modelo" class="form-control" id="modelo" value = "{{old('modelo', $data->preciopormes ?? '')}}" required  />
    </div>
</div>
<div class="form-group">
  <label for="preciopormes" class="col-lg-3 control-label requerido" > Precio por mes</label>
    <div class="col-lg-8">
    <input type="text" name="preciopormes" class="form-control" id="preciopormes" value = "{{old('preciopormes', $data->preciopormes ?? '')}}" required  />
    </div>
</div>
<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label requerido" >Direccion</label>
      <div class="col-lg-8">
      <input type="text" name="direccion" class="form-control" id="direccion" value = "{{old('direccion', $data->direccion ?? '')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="tipo_id" class="col-lg-3 control-label requerido" >Tipo</label>
      <div class="col-lg-8">
        <select name="tipo_id" id="tipo_id" class="form-control">
        @foreach ($tipos as $tipo)
        <option value="{{$tipo->id}}" {{$data->tipo_id==$tipo->id ? 'selected': null}}>{{$tipo->nombre}}</option>
           
         @endforeach  
       </select>
     </div>
</div>
<div class="form-group">
    <label for="tipo_id" class="col-lg-3 control-label requerido" >Condicion</label>
      <div class="col-lg-8">
        <select name="condicion_id" id="condicion_id" class="form-control">
        @foreach ($condicion as $cond)
       <option value="{{$cond->id}}" {{$data->condicion_id==$cond->id ? 'selected': null}}>{{$cond->nombre}}</option>
           
         @endforeach  
       </select>
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
