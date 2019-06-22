<div class="form-group">
    <label for="usuario" class="col-lg-3 control-label requerido" >Usuario</label>
      <div class="col-lg-8">
      <input type="text" name="usuario" class="form-control" id="usuario" value = "{{old('usuario')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="password" class="col-lg-3 control-label requerido" >Password</label>
      <div class="col-lg-8">
      <input type="password" name="password" class="form-control" id="password" value = "{{old('password')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido" >Nombre</label>
      <div class="col-lg-8">
      <input type="text" name="nombre" class="form-control" id="nombre" value = "{{old('nombre')}}" required  />
      </div>
</div>
<div class="form-group">
    <label for="foto" class="col-lg-3 control-label " >Foto</label>
      <div class="col-lg-8">
           <input type="text" name="foto" class="form-control" id="foto" value ="{{old('foto')}}">
      </div>
</div>
