<?php

namespace Database\Factories;

use App\Models\Cadastro;
use Illuminate\Database\Eloquent\Factories\Factory;

class CadastroFactory extends Factory
{
    protected $model = Cadastro::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'senha' => $this->faker->password, // Exemplo de geração de senha fictícia
            'endereco' => $this->faker->address, // Exemplo de geração de endereço fictício
        ];
    }
}
