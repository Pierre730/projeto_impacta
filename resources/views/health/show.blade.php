@extends('layouts.main')

@section('title', $consulta->especialidade )

@section('content')

 <div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/cahorro_e_gato.jpg" class="img-fluid" alt="{{$consulta->especialidade}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$consulta->especialidade}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{$consulta->cidade}}</p>
            <p class="event-city"><ion-icon name="today-outline"></ion-icon> {{$consulta->data}}</p>
            <p class="event-city"><ion-icon name="time-outline"></ion-icon> periodo da  {{$consulta->hora}}</p>
            <p class="event-city"><ion-icon name="person-circle-outline"></ion-icon> {{$eventOwner['name']}}</p>
            <a href="#" class="btn btn-primary" id="event-submit">Editar agendamento</a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Queixa sobre seu pet:</h3>
            <p class="event-description">{{$consulta->descricao}}</p>
        </div>
    </div>
 </div>
@endsection