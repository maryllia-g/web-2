@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalhes do Autor</h1>

    <div class="card">
        <div class="card-header">
            Autor: {{ $author->name }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $author->id }}</p>
            <p><strong>Nome:</strong> {{ $author->name }}</p>
        </div>
    </div>

    <div class="mt-3 d-flex gap-2">
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>

        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">
            <i class="bi bi-pencil"></i> Editar
        </a>

        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este autor?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="bi bi-trash"></i> Excluir
            </button>
        </form>
    </div>
</div>
@endsection
