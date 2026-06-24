<!DOCTYPE html>
<html>
<head>
    <title>Editar Sessão</title>
</head>
<body>

<h1>Editar Sessão</h1>

<form action="{{ route('sessoes.update', $sessao->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Filme:</label><br>

    <select name="filme_id">

        @foreach($filmes as $filme)

            <option value="{{ $filme->id }}"
                {{ $filme->id == $sessao->filme_id ? 'selected' : '' }}>
                {{ $filme->titulo }}
            </option>

        @endforeach

    </select>

    <br><br>

    <input type="date" name="data" value="{{ $sessao->data }}"><br><br>

    <input type="time" name="horario" value="{{ $sessao->horario }}"><br><br>

    <input type="text" name="sala" value="{{ $sessao->sala }}"><br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

</body>
</html>

