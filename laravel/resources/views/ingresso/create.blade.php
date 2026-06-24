<!DOCTYPE html>
<html>
<head>
    <title>Novo Ingresso</title>
</head>
<body>

<h1>Cadastrar Ingresso</h1>

<form action="{{ route('ingressos.store') }}" method="POST">

    @csrf

    <label>Sessão:</label><br>

    <select name="sessao_id">

        @foreach($sessoes as $sessao)

            <option value="{{ $sessao->id }}">
                {{ $sessao->filme->titulo }} - {{ $sessao->data }}
            </option>

        @endforeach

    </select>

    <br><br>

    <input type="text" name="nome_cliente" placeholder="Nome"><br><br>

    <input type="number" name="quantidade"><br><br>

    <input type="number" step="0.01" name="valor_total"><br><br>

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>

