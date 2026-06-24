<!DOCTYPE html>
<html>
<head>
    <title>Ingressos</title>
</head>
<body>

<h1>Lista de Ingressos</h1>

<a href="{{ route('ingressos.create') }}">
    Novo Ingresso
</a>

<hr>

@foreach($ingressos as $ingresso)

    <p>Cliente: {{ $ingresso->nome_cliente }}</p>
    <p>Quantidade: {{ $ingresso->quantidade }}</p>
    <p>Valor: R$ {{ $ingresso->valor_total }}</p>

    <a href="{{ route('ingressos.edit', $ingresso->id) }}">
        Editar
    </a>

    <form action="{{ route('ingressos.destroy', $ingresso->id) }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">
            Excluir
        </button>

    </form>

    <hr>

@endforeach

</body>
</html>

