<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CadastroReceberController;

Route::get('/cadastros', [CadastroController::class, 'index']);
Route::get('/cadastros/{id}', [CadastroController::class, 'show']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);

Route::get('/cadastros-receber', [CadastroReceberController::class, 'index']);
Route::get('/cadastros-receber/{id}', [CadastroReceberController::class, 'show']);
