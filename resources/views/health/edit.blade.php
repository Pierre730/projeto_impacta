@extends('layouts.main')

@section('title', 'Editando' . $consulta->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando : {{ $consulta->especialidade}}</h1>
    <form action="/health/update/{{$consulta->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Qual seria a especialidade ?</label>
            <select name="especialidade" id="especialidade" class="form-control">
                <option value="Clínico geral">Clínico geral</option>
                <option value="Ortopedista">Ortopedista</option>
                <option value="Endocrinologista">Endocrinologista</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$consulta->cidade}}"placeholder="Cidade onde reside">
        </div>
        <div class="form-group">
            <label for="title">Data</label>
            <input type="text" class="form-control" id="data" name="data" value="{{$consulta->data}}" placeholder="Qual seria a melhor data">
        </div>
        <div class="form-group">
            <label for="title">Qual melhor periodo?</label>
            <select name="hora" id="hora" class="form-control">
                <option value="manhã">manhã</option>
                <option value="tarde">tarde</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="Descreva o problema do animal">{{$consulta->descricao}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar agendamento">
    </form>
</div>


@endsection