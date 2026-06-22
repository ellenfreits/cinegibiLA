<h1>Lista de Filmes</h1>

<a href="{{ route('filmes.create') }}">
    Novo Filme
</a>

<hr>

@foreach($filmes as $filme)

<h3>{{ $filme->titulo }}</h3>

<p>Gênero: {{ $filme->genero }}</p>

<p>Duração: {{ $filme->duracao }} min</p>

<p>{{ $filme->sinopse }}</p>

<a href="{{ route('filmes.edit', $filme->id) }}">
    Editar
</a>

<form action="{{ route('filmes.destroy', $filme->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">
        Excluir
    </button>
</form>

<hr>

@endforeach