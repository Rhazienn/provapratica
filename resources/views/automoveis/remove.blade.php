@extends('templates.base')
@section('title', 'Remover Automovel')
@section('h1', 'Remover Automovel')

@section('content')
<div class="row">
    <div class="col">

        <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>Cuidado!</strong> Você está prestes a remover o automovel!
        </div>

        <p>Automovel: {{$auto->nome}}</p>
        <p>Você tem certeza que deseja apagar este automovel para sempre?</p>

        <form method="post" action="{{ route('automoveis.delete', $auto) }}">
            @csrf
            @method('delete')
            
            <input type="submit" class="btn btn-danger" value="Pode apagar sem medo">
            <a href="{{ route('automoveis') }}" class="btn btn-secondary">Desculpa, eu cliquei errado!</a>
        </form>

        

    </div>
</div>
@endsection