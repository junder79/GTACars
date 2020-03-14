<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class avionesController extends Controller
{
   public function indexAviones()
   {
      
       /* Retornará la lista de Aviones */ 
       $aviones=DB::table('vehiculo')
       ->join('categoria_vehiculo','categoria_vehiculo.id_categoria' , 'vehiculo.categoria_vehiculo')
       ->select('vehiculo.nombre_vehiculo' , 'vehiculo.imagen_vehiculo' , 'vehiculo.descripcion_vehiculo' , 'categoria_vehiculo.nombre_categoria')
       ->where('vehiculo.categoria_vehiculo' , '=' , 3)
       ->get();
       return view('aviones',[
            'aviones' => $aviones
       ]);
   }

//    public function getAllAviones()
//    {
//        /* Retornará la lista de Aviones */ 
//        $aviones=DB::table('vehiculo')->get();
//        return view('aviones',[
//             'aviones' => $aviones
//        ]);
//    }
}
