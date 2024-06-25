<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        $cadastros = Cadastro::all();
        return response()->json(['data' => $cadastros], 200);
    }

    public function show($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        return response()->json(['data' => $cadastro], 200);
    }

    public function store(Request $request)
    {
        // Lógica para validar e salvar novo cadastro
    }

    public function update(Request $request, $id)
    {
        // Lógica para validar e atualizar cadastro com ID $id
    }

    public function destroy($id)
    {
        // Lógica para deletar cadastro com ID $id
    }
}
