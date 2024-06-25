<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json(['data' => $categorias], 200);
    }

    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        return response()->json(['data' => $categoria], 200);
    }

    public function store(Request $request)
    {
        // Lógica para validar e salvar nova categoria
    }

    public function update(Request $request, $id)
    {
        // Lógica para validar e atualizar categoria com ID $id
    }

    public function destroy($id)
    {
        // Lógica para deletar categoria com ID $id
    }
}
