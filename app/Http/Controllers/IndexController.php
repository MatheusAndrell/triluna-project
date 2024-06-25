<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class IndexController extends Controller
{
    public function index()
    {
        // Recuperar todas as categorias do banco de dados
        $categorias = Categoria::all();

        // Retornar a view index com as categorias
        return view('index', compact('categorias'));
    }
}
