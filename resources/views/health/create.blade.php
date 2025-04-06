@extends('layouts.main')

@section('title', 'agendar')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Agende a consulta do seu pet</h1>
    <form action="/health" method="POST" enctype="multipart/form-data">
        @csrf
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
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade onde reside">
        </div>
        <div class="form-group">
            <label for="title">Data</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="Qual seria a melhor data">
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
            <textarea name="descricao" id="descricao" class="form-control" placeholder="Descreva o problema do animal"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Agendar consulta">
    </form>
</div>


@endsection