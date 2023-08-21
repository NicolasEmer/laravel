@extends('base')
@section('content')
    <h2>Cadastrar Novo Produto</h2>
    <form class="form" method="POST" action="{{ route('produtos.store') }}">
        @csrf
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="Categoria">Categoria:</label>
        <input type="number" name="categoria" id="categoria" required>
        <label for="Quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <label for="Valor Unitário">Valor unitário:</label>
        <input type="float" name="valor_unitario" id="valor_unitario" required>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection