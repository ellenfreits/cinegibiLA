<h1>Cadastrar Filme</h1>

<form action="{{ route('filmes.store') }}" method="POST">
    @csrf

    <p>Título</p>
    <input type="text" name="titulo">

    <p>Gênero</p>
    <input type="text" name="genero">

    <p>Duração</p>
    <input type="number" name="duracao">

    <p>Sinopse</p>
    <textarea name="sinopse"></textarea>

    <br><br>

    <button type="submit">
        Salvar
    </button>
</form>