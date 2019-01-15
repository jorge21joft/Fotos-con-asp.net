<?php

namespace App\Http\Controllers;
use App\contacto;
use App\User;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    //para hacer el listado
    public function index(){
        $datos = contacto::all();
        //return response()->json([]);
        return response()->json(['status'=>'ok','data'=>contacto::all()]);
    }
// para guardar
    public function store(Request $request)
    {
  
        $datos = contacto::create([
          'nombre'=> $request->input('nombre'),
           'telefono'=> $request->input('telefono')
        ]);   
      return response()->json(['status'=>true,'Great thanks'],200);

      
    }
//para mostrar el id
    public function show(user $user){

        $datos = contacto::find($user);

        if(!$datos){
       return response()->json(['este id no existe'],404);
        }

        return response()->json($datos,200);


    }
      //para actualizar
    public function update(Request $request, user $user){

        $datos = contacto::find($user);

        $datos->nombre = $request->nombre;
        $datos->telefono= $request->telefono;

        if($datos->save()){
          return response()->json(['el dato se guardo'],200);
        }
        else{
            return response()->json(['no se ha actualizado'],404);
        }

    }
      //para eliminar
    public function destroy($user){

      $datos = contacto::find($id);

        if(!$datos){
            return response()->json('este usuario no existe',404);

        }

        $datos->delete();
        return response()->json('usuario eliminado',200);


    }

}
