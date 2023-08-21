@extends('dashboard')
@section('content')
    <style></style>
    <h2>Atualizar um produto</h2>
    <form class="max-w-md mx-auto p-8" id="update-form" method="POST" action="{{ route('produtos.update', $produto->id) }}">
        @csrf
        @method('PUT')
        <label for="Nome" class="block text-white text-sm font-bold mb-2">Nome:</label>
        <input type="text" name="nome" id="nome" required value="{{$produto->nome}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 bg-gray-800 text-white">
        <label for="Nome" class="block text-white text-sm font-bold mb-2">Categoria:</label>
        <input type="number" name="categoria" id="categoria" required value="{{$produto->categoria}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 bg-gray-800 text-white">
        <label for="Nome" class="block text-white text-sm font-bold mb-2">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required value="{{$produto->quantidade}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 bg-gray-800 text-white">
        <label for="Nome" class="block text-white text-sm font-bold mb-2">Valor unitário:</label>
        <input type="float" name="valor_unitario" id="valor_unitario" required value="{{$produto->valor_unitario}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 bg-gray-800 text-white"> 
    </form>
    <button form="update-form" type="submit" class="block text-white text-sm font-bold mb-2">Salvar</button>
    <button class="block text-white text-sm font-bold mb-2" form="delete-form" type="submit" value="Excluir" >Excluir</button>
    <form method="POST" class="form" id="delete-form" action="{{route('produtos.destroy', $produto->id) }}">
        @csrf
        @method('DELETE')
    </form> 
@endsection