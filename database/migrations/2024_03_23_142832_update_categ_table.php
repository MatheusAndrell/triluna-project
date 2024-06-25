<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cadastro_receber', function (Blueprint $table) {
            // Adiciona a coluna 'produto_id' para referenciar o ID do produto
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            
            // Adiciona a coluna 'tipo_pagamento' para armazenar o tipo de pagamento
            $table->string('tipo_pagamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cadastro_receber', function (Blueprint $table) {
            // Remove as colunas adicionadas no método up()
            $table->dropForeign(['produto_id']);
            $table->dropColumn('produto_id');
            $table->dropColumn('tipo_pagamento');
        });
    }
};
