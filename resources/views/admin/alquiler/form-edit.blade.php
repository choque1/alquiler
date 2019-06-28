<div class="form-group">
    <label form="fecha_registro" class="col-lg-3 control-label requerido">Fecha de Registro</label>
    <div class="input-group date col-lg-8">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        <input type="date" name="fecha_registro" class="form-control " id="datepicker" value="{{old('nombre' $data->fecha_registro ?? '' )}}"/>
     </div>
  </div>
  <div class="form-group">
    <label form="fecha_entrega" class="col-lg-3 control-label requerido">Fecha de Entrega</label>
    <div class="input-group date col-lg-8">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        <input type="date" name="fecha_entrega" class="form-control " id="datepicker" value="{{old('nombre' $data->fecha_entrega ?? '' )}}"/>
     </div>
  </div>
  
  <div class="form-group">
      <label for="pago" class="col-lg-3 control-label requerido" >Pago Total</label>
        <div class="col-lg-8">
        <input type="number" name="pago" class="form-control" id="pago" value = "{{old('pago', $data->pago ?? '' )}}" required  />
        </div>
  </div>
  <div class="form-group">
    <label for="departamento_id" class="col-lg-3 control-label requerido" >Departamento</label>
      <div class="col-lg-8">
        <select name="departamento_id" id="departamento_id" class="form-control">
        @foreach ($departamentos as $departamento)
       <option value="{{$departamento->id}}"{{$data->departamento_id==$departamento->id ? 'selected': null}}>{{$departamento->nombre}}</option>
           
         @endforeach  
       </select>
     </div>
  </div>
  <div class="form-group">
    <label for="estado_id" class="col-lg-3 control-label requerido" >Estado</label>
      <div class="col-lg-8">
        <select name="estado_id" id="estado_id" class="form-control">
        @foreach ($estados as $estado)
       <option value="{{$estado->id}}" {{$data->estado_id==$estado->id ? 'selected': null}} >{{$estado->nombre}}</option>
           
         @endforeach  
       </select>
     </div>
  </div>
  <div class="form-group">
    <label for="cliente_id" class="col-lg-3 control-label requerido" >Cliente</label>
      <div class="col-lg-8">
        <select name="cliente_id" id="cliente_id" class="form-control">
        @foreach ($clientes as $cliente)
       <option value="{{$cliente->id}}"{{$data->cliente_id==$cliente->id ? 'selected': null}}>{{$cliente->nombre}} {{$cliente->apellido}} </option>
           
         @endforeach  
       </select>
     </div>
  </div>
  
  