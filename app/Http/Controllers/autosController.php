<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class autosController extends Controller
{
   public function indexAutos()
   {
       /* Retornara la vista de Autos */ 
       $autos= DB::table('vehiculo')
       ->join('categoria_vehiculo','categoria_vehiculo.id_categoria' , 'vehiculo.categoria_vehiculo')
       ->select('vehiculo.nombre_vehiculo' , 'vehiculo.imagen_vehiculo' , 'vehiculo.descripcion_vehiculo' , 'categoria_vehiculo.nombre_categoria')
       ->where('vehiculo.categoria_vehiculo' , '=' , 1)
       ->get();
       return view('autos',[
           'autos' => $autos
       ]);
   }

   /* Retorna la Lista de Vehiculos */ 

   public function getAllAutos()
   {
       $autos= DB::table('vehiculo')->get();
       return view('autos.autos',[
           'autos' => $autos
       ]);
   }
}
