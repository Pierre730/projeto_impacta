@extends('layouts.main')

@section('title', 'Health Pet' )

@section('content')
    
    <div id="search-container" class="col-md-12">
       <h1>Busque por uma especialidade</h1>
       <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
       </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Consultas agendadas :</h2>
            <p class="subtitle"></p>
            <div id="cards-container" class="row">
                @foreach ($consultas as $consulta)
                        <div class="card col-md-3">
                            <img src="/img/cahorro_e_gato.jpg" alt="{{$consulta->especialidade}}">
                            <div class="card-body">
                                <p class="card-date">Consulta agendada para {{$consulta->data}} no periodo da {{$consulta->hora}}</p>
                                <h5 class="card-title">{{$consulta->especialidade}}</h5>
                                <p class="card-participantes"></p>
                                <a href="/health/{{$consulta->id}}" class="btn btn-primary">Saber mais</a>
                            </div>
                     </div>
                  
                @endforeach
                @if (count($consultas)==0)
                    <p>Não há consultas agendadas</p>
                @endif
           
        </div> 
    </div>


    {{--Assitir e praticar a aula 15--}}    
@endsection        
