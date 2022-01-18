@extends('templates.base')
@section('title', 'Editar Automovel')
@section('h1', 'Editar Automovel')

@section('content')
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('automoveis.update', $auto) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$auto->nome}}">
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" value="{{$auto->preco}}">
            </div>

            <div class="mb-3">
                <label for="combustivel" class="form-label">Tipo combustivel</label>
                <input type="text" class="form-control" id="combustivel" name="combustivel" value="{{$auto->combustivel}}">
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano de fabricação</label>
                <input type="number" class="form-control" id="ano" name="ano" value="{{$auto->ano}}">
            </div>

            <div class="mb-3">
                <p>Foto: <input type="file" name="imagem"></p>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection