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
        Schema::create('cadastro_receber', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cadastro_id');
            $table->foreign('cadastro_id')->references('id')->on('cadastros');
            $table->float('valor');
            $table->dateTime('data_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_receber');
    }
};
