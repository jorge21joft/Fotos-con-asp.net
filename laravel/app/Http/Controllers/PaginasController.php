<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PaginasController extends BaseController
{
  


//funcion de contacto
   public function contacto(){
      // return "retornando el controlador";
      return view('User');
   }

   
   public function acerca(){
       //creando variables
  $nombre ="mauricio";
  $apellido ="flores";
  //retornando con compact las variables nombre y apellido
    return view('acerca',compact('nombre','apellido'));
 }



}

