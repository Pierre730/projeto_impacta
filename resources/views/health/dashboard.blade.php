@extends('layouts.main')

@section('title','dashboard')

@section('content')

<div class='col-md-10 offset-md-1 dashboard-title-container'>
    <h1>Minhas consultas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($consultas) > 0)
    <table class="table">
       <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">part</th>
                <th scope="col">ações</th>
            </tr>
       </thead>
        <tbody>
            @foreach ($consultas as $consulta)
            <tr>  
            <td scropt ="row">{{$loop->index + 1}}</td>
            <td><a href="/health/{{$consulta->id}}">{{$consulta->especialidade}}</a></td>
            <td>0</td>
            <td><a href="#">Editar</a> <a href="#">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem consultas agendadas para seu peludo, <a href="/health/create"> Agendar consulta</a></p>
    @endif
</div>

@endsection