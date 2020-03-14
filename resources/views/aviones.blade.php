@extends('layouts.template')
@section('titulo','Aviones')
    
@section('contenido')
<div class="container">
    <h1>Aviones de GTA</h1>
    
    <div class="row">
        @foreach ($aviones as $avion)
    
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$avion -> imagen_vehiculo}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$avion -> nombre_vehiculo}}</h5>
                    <p class="card-text">{{$avion -> descripcion_vehiculo }}</p>
                    <span class="badge badge-info">{{$avion->nombre_categoria}}</span>
                      <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                  </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
