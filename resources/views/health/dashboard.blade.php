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
                <th scope="col">Id</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Nome do pet</th>
                <th scope="col">ações</th>
            </tr>
       </thead>
        <tbody>
            @foreach ($consultas as $consulta)
            <tr>  
            <td scropt ="row">{{$loop->index + 1}}</td>
            <td><a href="/health/{{$consulta->id}}">{{$consulta->especialidade}}</a></td>
            <td>nome do pet</td>
            <td>
                <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a> 
                <form action="/health/{{$consulta->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline">Deletar</ion-icon></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem consultas agendadas para seu peludo, <a href="/health/create"> Agendar consulta</a></p>
    @endif
</div>

@endsection