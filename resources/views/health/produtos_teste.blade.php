@extends('layouts.main')

@section('title', 'Produto_teste')

@section('content')
    @if($id != null)
        <p> exibindo produto id : {{$id}}</p>
    @endif
@endsection