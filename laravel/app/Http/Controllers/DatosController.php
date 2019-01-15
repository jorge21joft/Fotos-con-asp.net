<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\contacto;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DatosController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

function index(){
   // $datos = \DB::table('contacto')->select('id','nombre','telefono')->get();
   $datos = contacto::all();
    return view('user',compact('datos'));
}
//funcion que hace la busqueda por id
function show($id)
{
    $datos = contacto::find($id);
   return view('show',compact('datos'));

}

//funcion guardar
function create(){
    return view('create');
}
function store(Request $request){
  $datos = new contacto;
  $datos->nombre = $request->input('nombre');
  $datos->telefono = $request->input('telefono');

$datos->save();

    return redirect('/datos');
}

//metodo de eliminar
function delete($id){
$datos = contacto::find($id);
$datos ->delete();

return redirect('/datos');
}

function edit($id){
$datos = contacto::find($id);
$nombre= $datos->nombre;
$telefono= $datos->telefono;

return view('edit',compact('nombre','telefono','datos'));

}

function update(Request $request){
  

$datos = contacto::find($request->id);



$datos->nombre = $request->nombre;
$datos->telefono = $request->telefono;

if($datos->save())
{
   
    return redirect('/datos');
}
else{
   return "no se guardo";
}





/*
$datos -> update([
    'nombre' => $resquest['nombre'],
    'telefono' => $resquest['telefono'],
]);
*/

}


}