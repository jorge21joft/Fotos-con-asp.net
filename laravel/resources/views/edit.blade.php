<!-- llamando la plantilla principal-->
@extends('master')

@section('titulo','contacto')


<!-- seccion para llamar contenido o crear nuevo contenido -->
@section('contenido')
<br>
<br>
<h1 class="text-center">editar contacto</h1>
<br>
{{!! Form::open(['route'=>['datos.update',$datos], 'method' => 'post'  ]) !!}}
{{csrf_field()}}
{{method_field('PUT')}}
  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Nombre</label>
    <div class="col-sm-6">
      <input type="text" value="{{$nombre}}" class="form-control" name="nombre" placeholder="nombre">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Telefono</label>
    <div class="col-sm-6">
      <input type="number" value="{{$telefono}}" class="form-control" name="telefono"  placeholder="telefono">
    </div>
  </div>

  

    <div class="col-sm-12">
      <button type="submit"  class="btn btn-primary">Editar</button>
    </div>






@endsection