<div class="form-group">
  <label for="nombre" class="col-lg-3 control-label requerido" >Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" class="form-control" id="nombre" value = "{{old('nombre', $data->nombre ?? '')}}" required  />
    </div>
</div>
<div class="form-group">
  <label for="apellido" class="col-lg-3 control-label requerido" >Apellido</label>
    <div class="col-lg-8">
    <input type="text" name="apellido" class="form-control" id="direccion" value = "{{old('apellido', $data->apellido ?? '')}}" required  />
    </div>
</div>
<div class="form-group">
  <label for="ci" class="col-lg-3 control-label requerido">Carnet de Indentidad</label>
    <div class="col-lg-8">
    <input type="number" name="ci" class="form-control" id="ci" value = "{{old('ci', $data->ci ?? '' )}}" required  />
    </div>
</div>
<div class="form-group">
  <label for="telefono" class="col-lg-3 control-label requerido" >Telefono</label>
    <div class="col-lg-8">
    <input type="number" name="telefono" class="form-control" id="telefono" value = "{{old('telefono', $data->telefono ?? '')}}" required  />
    </div>
</div>
<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label requerido" >Direccion</label>
      <div class="col-lg-8">
      <input type="text" name="direccion" class="form-control" id="direccion" value = "{{old('direccion', $data->direccion ?? '')}}" required  />
      </div>
</div>
<div class="form-group">
  <label for="rol_id" class="col-lg-3 control-label requerido" >Tipo</label>
    <div class="col-lg-8">
      <select name="rol_id" id="rol_id" class="form-control">
      @foreach ($roles as $rol)
      <option value="{{$rol->id}}">{{$rol->nombre}}</option>
         
       @endforeach  
     </select>
   </div>
</div>
