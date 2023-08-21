
@extends('base')

@section('content')
   
    @if (isset($msg))
        <h3 style="color: red">Produto não encontrado!</h3>
    @else
    
        <h2>Mostrando dados do produto</h2>
        <p><strong>Nome:</strong> {{ $produto->nome }} </p>
        <p><strong>Categoria:</strong> {{ $produto->categoria }} </p>
        <p><strong>Quantidade:</strong> {{ $produto->quantidade }} </p>
        <p><strong>Valor unitário:</strong> {{ $produto->valor_unitario }} </p>
        <a href="{{ route('produtos.index') }}">Voltar</a>
    @endif
@endsection