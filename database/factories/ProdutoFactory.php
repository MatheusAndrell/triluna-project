<?php
namespace Database\Factories;


use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->sentence(2),
            'descricao' => $this->faker->paragraph,
            'preco' => $this->faker->randomFloat(2, 10, 1000),
            'desconto' => $this->faker->randomFloat(2, 10, 1000),
            'categoria_id' => Categoria::factory()->create()->id,
        ];
    }
}
