@extends('layouts.template')
@section('titulo' , 'Autos' )

@section('contenido')
    <div class="container">
      <h1>Listado de Autos</h1>
      <ul>
      @foreach($autos as $auto)
      <li>{{$auto -> nombre_vehiculo}}</li>
      @endforeach
      </ul></div>
@stop