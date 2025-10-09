<html>
<head></head>
<body>
    <h1>Editar Ponto Turístico</h1>

    <form action="{{ route('pontosTuristicos.update', $pontos_turisticos) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $pontos_turisticos->nome }}" required>
        </div>

        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="{{ $pontos_turisticos->cidade }}" required>
        </div>

        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="{{ $pontos_turisticos->estado }}" required>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="4">{{ $pontos_turisticos->descricao }}</textarea>
        </div>

        <div>
            <label for="imagem">Imagem:</label>
            <input type="file" id="imagem" name="imagem">

            @if($pontos_turisticos->imagem)
                <div>
                    <p>Imagem atual:</p>
                    <img src="{{ asset('storage/' . $pontos_turisticos->imagem) }}" alt="Imagem atual" width="150">
                </div>
            @endif
        </div>

        <button type="submit">
            Salvar
        </button>
    </form>
    <hr>

    <!-- Botões de navegação -->
    <div>
        <!-- Voltar para a lista -->
        <a href="{{ route('pontosTuristicos.index') }}">
            <button type="button">Voltar para Lista</button>
        </a>

        <!-- Voltar para o Show (detalhes) -->
        <a href="{{ route('pontosTuristicos.show', $pontos_turisticos) }}">
            <button type="button">Ver Detalhes</button>
        </a>

        <!-- Ir para Criar Novo -->
        <a href="{{ route('pontosTuristicos.create') }}">
            <button type="button">Cadastrar Novo</button>
        </a>
    </div>
</body>
</html>
