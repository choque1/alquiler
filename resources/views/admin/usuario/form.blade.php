<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido" >Nombre</label>
      <div class="col-lg-8">
      <input type="text" name="nombre" class="form-control" id="nombre" value = "{{old('nombre')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="email" class="col-lg-3 control-label requerido" >email</label>
      <div class="col-lg-8">
      <input type="email" name="email" class="form-control" id="email" value = "{{old('email')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="ci" class="col-lg-3 control-label requerido" >CI</label>
      <div class="col-lg-8">
      <input type="text" name="ci" class="form-control" id="ci" value = "{{old('ci')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="usuario" class="col-lg-3 control-label requerido">Usuario</label>
      <div class="col-lg-8">
      <input type="usuario" name="usuario" class="form-control" id="usuario" value = "{{old('usuario')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="password" class="col-lg-3 control-label requerido" >Password</label>
      <div class="col-lg-8">
      <input type="password" name="password" class="form-control" id="password" value = "{{old('password')}}" required  />
      </div>
</div>
<div class="form-group">
  <label form="fechadenacimiento" class="col-lg-3 control-label requerido">Fecha de Nacimiento</label>
  <div class="input-group date col-lg-8">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input type="date" name="fechadenacimiento" class="form-control " id="datepicker"/>
   </div>
</div>
<div class="form-group">
    <label for="telefono" class="col-lg-3 control-label requerido" >Telefono</label>
      <div class="col-lg-8">
      <input type="text" name="telefono" class="form-control" id="telefono" value = "{{old('telefono')}}" required  />
      </div>
</div>
<div class="form-group">

