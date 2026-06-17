<!DOCTYPE html>
<html>
<head>
    <title>Novo Filme</title>
</head>
<body>

    <h1>Cadastrar Filme</h1>

    <form action="{{ route('filmes.store') }}" method="POST">

        @csrf

        <label>Título:</label><br>
        <input type="text" name="titulo"><br><br>

        <label>Gênero:</label><br>
        <input type="text" name="genero"><br><br>

        <label>Classificação:</label><br>
        <input type="text" name="classificacao"><br><br>

        <label>Duração:</label><br>
        <input type="number" name="duracao"><br><br>

        <button type="submit">
            Salvar
        </button>

    </form>

    <br>

    <a href="{{ route('filmes.index') }}">
        Voltar
    </a>

</body>
</html>