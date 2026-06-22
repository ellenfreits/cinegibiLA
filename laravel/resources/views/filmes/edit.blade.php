<h1>Editar Filme</h1>

<form action="{{ route('filmes.update', $filme->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>Título</p>
    <input type="text" name="titulo" value="{{ $filme->titulo }}">

    <p>Gênero</p>
    <input type="text" name="genero" value="{{ $filme->genero }}">

    <p>Duração</p>
    <input type="number" name="duracao" value="{{ $filme->duracao }}">

    <p>Sinopse</p>
    <textarea name="sinopse">{{ $filme->sinopse }}</textarea>

    <br><br>

    <button type="submit">
        Atualizar
    </button>
</form>