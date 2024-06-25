<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class Produto extends Model
{
    protected $fillable = ['nome', 'preco', 'descricao', 'categoria_id', 'foto', 'desconto'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($produto) {
            // Verifica se uma nova foto foi enviada
            if ($produto->foto instanceof UploadedFile) {
                // Obtém o ID do produto
                $produtoId = $produto->id;

                // Obtém a extensão do arquivo
                $extensao = $produto->foto->getClientOriginalExtension();

                // Renomeia a foto para produto_ID.extensao
                $nomeFoto = "produto_{$produtoId}.{$extensao}";

                // Armazena a foto com o novo nome
                $produto->foto->storeAs('public/img', $nomeFoto);


                // Atualiza o atributo 'foto' com o novo nome
                $produto->foto = $nomeFoto;
            }
        });
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
