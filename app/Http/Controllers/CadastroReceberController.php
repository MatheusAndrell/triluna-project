<?php
namespace App\Http\Controllers;

use App\Models\CadastroReceber;
use Illuminate\Http\Request;

class CadastroReceberController extends Controller
{
    public function index()
    {
        $cadastrosReceber = CadastroReceber::all();
        return response()->json(['data' => $cadastrosReceber], 200);
    }

    public function show($id)
    {
        $cadastroReceber = CadastroReceber::findOrFail($id);
        return response()->json(['data' => $cadastroReceber], 200);
    }

    public function store(Request $request)
    {
        // Lógica para validar e salvar novo cadastro a receber
    }

    public function update(Request $request, $id)
    {
        // Lógica para validar e atualizar cadastro a receber com ID $id
    }

    public function destroy($id)
    {
        // Lógica para deletar cadastro a receber com ID $id
    }
}
