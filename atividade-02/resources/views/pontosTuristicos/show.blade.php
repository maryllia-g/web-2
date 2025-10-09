<html>
<head></head>
<body>    
    <h1>Detalhes do Ponto Turístico</h1>        

    <div>
        <p><strong>ID:</strong> {{ $pontos_turisticos->id }}</p>
        <p><strong>Nome:</strong> {{ $pontos_turisticos->nome }}</p>
        <p><strong>Cidade:</strong> {{ $pontos_turisticos->cidade }}</p>
        <p><strong>Estado:</strong> {{ $pontos_turisticos->estado }}</p>
        <p><strong>Descrição:</strong> {{ $pontos_turisticos->descricao }}</p>
        
        <p><strong>Imagem:</strong></p>
        @if($pontos_turisticos->imagem)
            <img src="{{ asset('storage/' . $pontos_turisticos->imagem) }}" alt="Imagem do Ponto Turístico" width="200">
        @else
            <span>Sem imagem cadastrada</span>
        @endif
    </div>

    <hr>
    <!-- Botões de navegação -->
    <a href="{{ route('pontosTuristicos.index') }}">
        <button type="button">Voltar para Lista</button>
    </a>

    <a href="{{ route('pontosTuristicos.edit', $pontos_turisticos) }}">
        <button type="button">Editar</button>
    </a>

    <form action="{{ route('pontosTuristicos.destroy', $pontos_turisticos) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Deseja excluir este ponto turístico?')">Excluir</button>
    </form>
</body>
</html>
