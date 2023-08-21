@extends('dashboard')
@section('content')
    <h2>Produtos Cadastrados</h2>
    @if (!isset($produtos))
        <h3 style="color: red">Nenhum Produto Encontrado!</h3>
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Valor unitário</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $p)
                    <tr>
                        <td> {{ $p->id }} </td>
                        <td> {{ $p->nome }} </td>
                        <td> {{ $p->categoria }} </td>
                        <td> {{ $p->quantidade }} </td>
                        <td> {{ $p->valor_unitario }} </td>
                        <td> <a href="{{ route('produtos.show', $p->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('produtos.edit', $p->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">Total de Produtos Cadastrados: {{ $produtos->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection
