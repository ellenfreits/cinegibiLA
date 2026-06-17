<!DOCTYPE html>
<html>
<head>
    <title>Filmes</title>
</head>
<body>

    <h1>Lista de Filmes</h1>

    <a href="{{ route('filmes.create') }}">
        Novo Filme
    </a>

    <hr>

    @foreach($filmes as $filme)

        <p>
            <strong>{{ $filme->titulo }}</strong>
            ({{ $filme->genero }})
        </p>

        <a href="{{ route('filmes.edit', $filme->id) }}">
            Editar
        </a>

        <form action="{{ route('filmes.destroy', $filme->id) }}"
              method="POST">

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