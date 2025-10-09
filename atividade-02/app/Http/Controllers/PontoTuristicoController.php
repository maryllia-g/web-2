<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PontosTuristicos;

class PontoTuristicoController extends Controller
{
    /**
     * Listar todos os pontos turísticos.
     */
    public function index()
    {
        $pontos_turisticos = PontosTuristicos::all();
        return view('pontosTuristicos.index', compact('pontos_turisticos'));
    }

    /**
     * Mostrar o formulário de criação.
     */
    public function create()
    {
        return view('pontosTuristicos.create');
    }

    /**
     * Salvar um novo ponto turístico.
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        // Upload da imagem (opcional)
        if ($request->hasFile('imagem')) {
            $caminho = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $caminho;
        }

        PontosTuristicos::create($dados);

        return redirect()->route('pontosTuristicos.index');
    }

    /**
     * Mostrar um ponto turístico específico.
     */
    public function show(string $id)
    {
        $pontos_turisticos = PontosTuristicos::findOrFail($id);
        return view('pontosTuristicos.show', compact('pontos_turisticos'));
    }

    /**
     * Mostrar o formulário de edição.
     */
    public function edit(string $id)
    {
        $pontos_turisticos = PontosTuristicos::findOrFail($id);
        return view('pontosTuristicos.edit', compact('pontos_turisticos'));
    }

    /**
     * Atualizar um ponto turístico.
     */
    public function update(Request $request, string $id)
    {
        $pontos_turisticos = PontosTuristicos::findOrFail($id);
        $dados = $request->all();

        // Upload da nova imagem (opcional)
        if ($request->hasFile('imagem')) {
            $caminho = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $caminho;
        }

        $pontos_turisticos->update($dados);

        return redirect()->route('pontosTuristicos.index');
    }

    /**
     * Excluir um ponto turístico.
     */
    public function destroy(string $id)
    {
        $pontos_turisticos = PontosTuristicos::findOrFail($id);
        $pontos_turisticos->delete();

        return redirect()->route('pontosTuristicos.index');
    }
}
