@extends('templates.base')
@section('title', 'Automoveis')
@section('h1', 'Página de Automoveis')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de automoveis</p>

        <a class="btn btn-primary" href="{{route('automoveis.inserir')}}" role="button">Cadastrar automovel</a>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div class="row">
            @foreach($autos as $auto)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow bg-light">
                        <img class="card-img-top" src="{{asset('img/' . $auto->imagem)}}" alt="Imagem">
                        <div class="card-body">
                            <h1 class="card-text">{{ $auto->nome }}</h1>
                            <p class="card-text"><b>Preço:</b> R$ {{$auto->preco}}</p>
                            <p class="card-text"><b>Ano de fabricação:</b> {{ $auto->ano }}</p>
                            <p class="card-text"><b>Tipo de combustivel:</b> {{ $auto->combustivel }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('automoveis.show', $auto) }}" class="btn btn-sm btn-outline-secondary">Visualizar</a>
                                    <a href="{{ route('automoveis.edit', $auto) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    @if (Auth::user()->admin)
                                    <a href="{{ route('automoveis.remove', $auto) }}" class="btn btn-sm btn-danger">Apagar</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
