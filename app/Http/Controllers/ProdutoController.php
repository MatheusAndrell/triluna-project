<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json(['data' => $produtos], 200);
    }

    public function show($id)
    {
        $product = Produto::findOrFail($id);
        $categoriaDescricao = $product->categoria->descricao;
        $valorDesconto = ($product->preco * $product->desconto) / 100;
        $valorAntigo = $product->preco + $valorDesconto;
        $valorAntigoFormatado = number_format($valorAntigo, 2, ',', '.');
        return view('product', compact('product', 'categoriaDescricao', 'valorDesconto', 'valorAntigoFormatado'));
    }

    public function store(Request $request)
    {
        // Lógica para validar e salvar novo produto
    }

    public function update(Request $request, $id)
    {
        // Lógica para validar e atualizar produto com ID $id
    }

    public function destroy($id)
    {
        // Lógica para deletar produto com ID $id
    }
}
