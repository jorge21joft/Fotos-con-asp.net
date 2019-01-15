<!-- llamando la plantilla principal-->
@extends('master')

@section('titulo','contacto')


<!-- seccion para llamar contenido o crear nuevo contenido -->
@section('contenido')
<br>
<br>
<h1 class="text-center">Crear nuevo contacto</h1>
<br>
<form action="/datos" method="POST">
{{csrf_field()}}
  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Nombre</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" placeholder="nombre">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Telefono</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="phone"  placeholder="telefono">
    </div>
  </div>

  

    <div class="col-sm-12">
      <button type="submit"  class="btn btn-primary">Guardar</button>
    </div>

</form>




@endsection