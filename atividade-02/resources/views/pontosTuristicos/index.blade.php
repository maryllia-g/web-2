<html>
<head></head>
<body>    
    <h1>Lista de Pontos Turísticos</h1>        

    <a href="{{ route('pontosTuristicos.create') }}">
        <button type="button">Cadastrar Novo</button>
    </a>

    <table border="1" cellpadding="8" cellspacing="0">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Ações</th>
      </tr>
      
      @foreach($pontos_turisticos as $ponto)
        <tr>
            <td>{{ $ponto->id }}</td>
            <td>{{ $ponto->nome }}</td>
            <td>{{ $ponto->cidade }}</td>
            <td>{{ $ponto->estado }}</td>
            <td>{{ $ponto->descricao }}</td>
            <td>
                @if($ponto->imagem)
                    <img src="{{ asset('storage/' . $ponto->imagem) }}" alt="Imagem" width="100">
                @else
                    Sem imagem
                @endif
            </td>

            <td>
                <a href="{{ route('pontosTuristicos.show', $ponto) }}">Visualizar</a>
                <a href="{{ route('pontosTuristicos.edit', $ponto) }}">Editar</a>

                <form action="{{ route('pontosTuristicos.destroy', $ponto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Deseja excluir este ponto turístico?')">Excluir</button>
                </form>
            </td>
        </tr>
      @endforeach
    </table>
</body>
</html>
