<?php

namespace Database\Factories;

use App\Models\CadastroReceber;
use Illuminate\Database\Eloquent\Factories\Factory;

class CadastroReceberFactory extends Factory
{
    protected $model = CadastroReceber::class;

    public function definition()
    {
        return [
            'cadastro_id' => $this->faker->numberBetween(1, 10), // Exemplo de geração de cadastro_id fictício
            'produto_id' => $this->faker->numberBetween(1, 10), // Exemplo de geração de produto_id fictício
            'tipo_pagamento' => $this->faker->randomElement(['cartao', 'boleto', 'dinheiro']), // Gera um tipo de pagamento aleatório
            'valor' => $this->faker->randomFloat(2, 10, 1000),
            'data_pagamento' => $this->faker->dateTimeBetween('now', '+1 year'),
            // Adicione outros campos conforme necessário
        ];
    }
}