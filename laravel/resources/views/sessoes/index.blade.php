// resources/views/sessoes/index.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Sessões</title>
</head>
<body>

<h1>Lista de Sessões</h1>

<a href="{{ route('sessoes.create') }}">
    Nova Sessão
</a>

<hr>

@foreach($sessoes as $sessao)

    <p>Filme: {{ $sessao->filme->titulo }}</p>
    <p>Data: {{ $sessao->data }}</p>
    <p>Horário: {{ $sessao->horario }}</p>
    <p>Sala: {{ $sessao->sala }}</p>

    <a href="{{ route('sessoes.edit', $sessao->id) }}">
        Editar
    </a>

    <form action="{{ route('sessoes.destroy', $sessao->id) }}" method="POST">

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



