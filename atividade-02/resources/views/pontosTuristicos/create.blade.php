<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Ponto Turístico</title>
</head>
<body>
    <h1>Cadastrar Ponto Turístico</h1>

    <form action="{{ route('pontosTuristicos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="">Selecione</option>
                <option value="AL">Alagoas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="MA">Maranhão</option>
                <option value="PB">Paraíba</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="SE">Sergipe</option>
            </select>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva o ponto turístico"></textarea>
        </div>

        <div>
            <label for="imagem">Imagem:</label>
            <input type="file" id="imagem" name="imagem" accept="image/*">
        </div>

        <button type="submit">Salvar</button>
    </form>

    <hr>
    <!-- Botão de navegação -->
    <a href="{{ route('pontosTuristicos.index') }}">
        <button type="button">Voltar para Lista</button>
    </a>
</body>
</html>
