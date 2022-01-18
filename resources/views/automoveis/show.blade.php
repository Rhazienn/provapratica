@extends('templates.base')
@section('title', 'Visualizar Automovel')

@section('content')
<h1>{{ $auto->nome }}</h1>
<p>Preço: R$ {{$auto->preco}}</p>
<p>Ano de fabricação: {{ $auto->ano }}</p>
<p>Tipo de combustivel: {{ $auto->combustivel }}</p>
@if($auto->imagem)
<p><img style="width:50vw" src="{{asset('img/' . $auto->imagem)}}"></p>
@endif
@endsection