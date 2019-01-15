<!-- llamando la plantilla principal-->
@extends('master')

@section('titulo','contacto')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- seccion para llamar contenido o crear nuevo contenido -->
@section('contenido')

<!-- imprimiendo la variable del metodo contacto -->
<br>
<br>
<a href="http://laravel.test/contactos/create" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-plus"></i>crear</a>

<br>
<br>
 <table class="table table-bordered has-action">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>telefono</th>
                   
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($datos as $datos)
                    <tr>
                   
                        <td>{{$datos->nombre}}</td>
                        <td>{{$datos->telefono}}</td>
                   
                        <td>
                            <a href="{{route('datos.edit',$datos->id)}}" class="btn btn-info btn-sm">Editar</a>
                            <a href="{{route('datos.delete',$datos->id)}}" class="btn btn-danger btn-sm">eliminar</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>



<!--fin del contenido-->
@endsection

  


<!-- utilizando blaze para crear el campo del contenido -->
  
 
